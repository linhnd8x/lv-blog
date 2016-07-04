<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;
use App\PostTag;
use App\Category;
use App\User;
use Redirect;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PostController extends Controller
{
	public function index()
	{
        $postData = Post::where('del_flg',0)->orderBy('id','desc')->get();
        $postArr = array ();
        if ($postData) {
            foreach ($postData as $key => $post) {
              
                $editLink = route('edit-post', ['slug' => $post->slug]);
                $deleteLink = route('delete-post', ['id' => $post->id]);
                $statusLink = $post->active;

                $postArr[] = array (
                    'no' => ($key + 1),
                    'title' => ($post->title),
                    'created_at' => $post->created_at->format('Y/m/d'),
                    'content' => ($post->content),
                    'status' => ($post->active == 0) ? "<a class='status' data-postid='$post->id' data-status='$post->active' onclick='updateStatus();' href='javascript:void(0)'>Active</a>" : "<a class='status' data-postid='$post->id' data-status='$post->active' onclick='updateStatus();' href='javascript:void(0)'>De-Active</a>",
                    'option' => "<a href='{$editLink}'>Edit</a> | <a class='delete_link' href='{$deleteLink}'>Delete</a>" 
                );
            }
        }
        $posts = json_encode($postArr);
        //page heading
        $title = 'Posts Management';

        $addurl = route('new-post');
        //return home.blade.php template from resources/views folder
        return view('posts.home')->withPosts($posts)->withTitle($title)->withAddurl($addurl);
    }
    public function create(Request $request)
    {
        // if user can post i.e. user is admin or author
        if($request->user()->is_admin()) {
            $category = Category::select('id', 'category')->distinct()->get();
             return view('posts.create', ['category' => $category]);
        } else {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }
    public function store(PostFormRequest $request)
    {
        
        $tags = new Tag();
        $post = new Post();
        $postTags = new PostTag();
      
        $tagId = array();

        $postIns = array(
            'del_flg' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        );
        $tagsIns = array(
            'del_flg' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        );
        $postTagsIns = array(
            'del_flg' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        );

        $postIns['category_id'] = $request->get('category');
        $postIns['title'] = $request->get('title');
        $postIns['content'] = $request->get('content');
        $postIns['slug'] = str_slug($postIns['title']);
        $postIns['published_at'] = $request->get('published_at');
        $postIns['author_id'] = $request->user()->id;
        
        if($request->has('save')) {
            $postIns['active'] = 0;
            $message = 'Post add successfully';
            $landing = 'posts/edit/'.$postIns['slug'];
        } else {
            $postIns['active'] = 1;
            $message = 'Post save successfully';
            $landing = 'posts';
        }
        $existPost = Post::where('slug',$postIns['slug'])->first();
        if (! $existPost) {
            $tagArr = explode(',', $request->get('tags'));
            foreach ($tagArr as $val) {
                $exist = Tag::where('tag',$val)->first();
                if (! $exist) {
                    $tagsIns['tag'] = $val;
                    $tagId[] =  $tags->insertGetId($tagsIns);
                }
            }

            $postInsId = $post->insertGetId($postIns);
            foreach ($tagId as $id) {
                $postTagsIns['post_id'] = $postInsId;
                $postTagsIns['tag_id'] = $id;
                $postTags->insert($postTagsIns);
            }
        } else {
            $message = 'Post add unsuccessfully'; 
        }

        return redirect($landing)->withMessage($message);
    }
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();
        if(! $post) {
            return redirect('/')->withErrors('requested page not found');
        }
        $comments = $post->comments;
        return view('posts.show')->withPost($post)->withComments($comments);
    }
    public function posts_list()
    {
        $posts = Post::select(DB::raw('posts.*, categories.category'))
                        ->join('categories', 'categories.id', '=', 'posts.category_id')
                        ->where('posts.del_flg',0)->orderBy('id','desc')->paginate(3);
        if(! $posts) {
            return redirect('/')->withErrors('requested page not found');
        }
        $categories = Category::select(DB::raw('categories.*, count(posts.category_id) as postItems'))
                                ->join('posts', 'posts.category_id', '=', 'categories.id')
                                ->groupby('posts.category_id')
                                ->having('categories.del_flg', '=', 0)
                                ->get();
        $tags = Tag::where('del_flg', 0)->get();
        //$comments = $post->comments;
        //return view('posts.list')->withPost($post)->withComments($comments);
        return view('posts.list')->withPosts($posts)->withCategories($categories)->withTags($tags);
    }
    public function edit(Request $request,$slug)
    {
        $category = Category::select('id', 'category')->distinct()->get();
        $post = Post::where('slug',$slug)->first();
        $postTags = PostTag::join('tags', 'tags.id', '=', 'blog_post_tags.tag_id')->where('post_id', $post->id)->get();
        $tags = '';
        foreach ($postTags as $val) {
            $tags .= $val->tag . ",";
        }

        if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin())) {
            return view('posts.edit', ['category' => $category, 'post' => $post, 'tag' => $tags]);
        }
        return redirect('/')->withErrors('you have not sufficient permissions');
    }
    public function update(Request $request)
    {

        $tags = new Tag();
        $postTags = new PostTag();
  
        $tagsIns = array(
            'del_flg' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        );
        $postTagsIns = array(
            'del_flg' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
        );
        $tagId = array();

        $post_id = $request->input('post_id');
        $post = Post::find($post_id);
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
            $category_id = $request->input('category');
            $title = $request->input('title');
            $slug = str_slug($title);
            $duplicate = Post::where('slug',$slug)->first();
            if($duplicate) {
                if($duplicate->id != $post_id) {
                    return redirect('posts/edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
                } else {
                    $post->slug = $slug;
                }
            }
        $post->category_id = $category_id;
        $post->title = $title;
        $post->content = $request->input('content');
        $post->published_at = Carbon::createFromFormat('Y/m/d H', $request->get('published_at') . '9');
        $post->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        if($request->has('save'))
        {
            $post->active = 0;
            $message = 'Post saved successfully';
            $landing = 'posts/edit/'.$post->slug;
        } else {
            $post->active = 1;
            $message = 'Post updated successfully';
            $landing = 'posts';
        }

        $post->update();
        $tagArr = explode(',', $request->get('tags'));

        foreach ($tagArr as $val) {
            $exist = Tag::where('tag',$val)->first();
            if (! $exist) {
                $tagsIns['tag'] = $val;
                $tagId[] =  $tags->insertGetId($tagsIns);
            }
        }

        foreach ($tagId as $id) {
            $postTagsIns['post_id'] = $post_id;
            $postTagsIns['tag_id'] = $id;
            $postTags->insert($postTagsIns);
        }
        return redirect($landing)->withMessage($message);
        } else {
            return redirect('/')->withErrors('you have not sufficient permissions');
        }
    }

    public function delete(Request $request, $id)
    {
    
        $post = Post::find($id);
        $post->del_flg = 1;
        $post->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
            $post->update();
            $data['message'] = 'Post deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        return redirect('posts')->with($data);
    }

    public function active(Request $request)
    {
        $post_id = $request->get('id');
        $active = $request->get('active') == 1 ? 0 : 1;
        $post = Post::find($post_id);
        $post->active = $active;
        $post->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $post->update();
        return response()->json(['msg' => 'Update post successfully']);
    }

    public static function prevBlogPostUrl($id)
    {
        $blog = static::where('id', '<', $id)->orderBy('id', 'desc')->first();
        return $blog ? $blog->url : '#';
    }

    public static function nextBlogPostUrl($id) 
    {
        $blog = static::where('id', '>', $id)->orderBy('id', 'asc')->first();
        return $blog ? $blog->url : '#';
    }

    public function tags() 
    {
        return $this->belongsToMany('App\BlogTag','blog_post_tags','post_id','tag_id');
    }

}
