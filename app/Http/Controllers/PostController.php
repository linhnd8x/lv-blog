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
use App\Http\Controllers\Carbon;
class PostController extends Controller
{
	public function index()
	{
		 //fetch 5 posts from database which are active and latest
       $postData = Post::where('active',1)->orderBy('created_at','desc')->get();
        $postArr = array ();
        if ($postData) {
          foreach ($postData as $key => $post) {
            $editLink = route('edit-post', ['slug' => $post->slug]);
            
            $deleteLink = route('delete-post', ['id' => $post->id]);
            
            $statusLink = $post->active;
            $postArr[] = array (
                'no' => ($key + 1),
                'title' => ($post->title),
                'created_at' => '11',//$post->created_at->format('m/d/Y'),
                'content' => ($post->content),
                'status' => ($post->active == 1) ? "<a href='{$statusLink}'>Active</a>" : "<a href='{$statusLink}'>De-Active</a>",
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
		if($request->user()->is_admin())
		{
      $category = Category::select('id', 'category')->distinct()->get();
			return view('posts.create', ['category' => $category]);
		}    
		else 
		{
			return redirect('/')->withErrors('You have not sufficient permissions for writing post');
		}
	}
	public function store(PostFormRequest $request)
	{
    //return request()->all();
    $tags = new Tag();
    $post = new Post();
    $postTags = new PostTag();
  
    $postIns = array();
    $tagsIns = array();
    $tagId = array();

    $postIns['category_id'] = $request->get('category');
		$postIns['title'] = $request->get('title');
		$postIns['content'] = $request->get('content');
		$postIns['slug'] = str_slug($postIns['title']);
		$postIns['author_id'] = $request->user()->id;
		if($request->has('save'))
		{
		  $postIns['active'] = 0;
		  $message = 'Post saved successfully';            
		}            
		else 
		{
		  $postIns['active'] = 1;
		  $message = 'Post published successfully';
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

      $postTagsIns = array();
      foreach ($tagId as $id) {
        $postTagsIns['post_id'] = $postInsId;
        $postTagsIns['tag_id'] = $id;
        $postTags->insert($postTagsIns);
      }
    } else {
        $message = 'Post save unsuccessfully'; 
    }

		return redirect('posts/')->withMessage($message);
	}
	public function show($slug)
	  {
	    $post = Post::where('slug',$slug)->first();
	    if(!$post)
	    {
	       return redirect('/')->withErrors('requested page not found');
	    }
	    $comments = $post->comments;
	    return view('posts.show')->withPost($post)->withComments($comments);
	  }
	public function edit(Request $request,$slug)
  {
    $category = Category::select('id', 'category')->distinct()->get();
    $post = Post::where('slug',$slug)->first();

    if($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
      return view('posts.edit', ['post' => $post], ['category' => $category]);
    return redirect('/')->withErrors('you have not sufficient permissions');
  }
  public function update(Request $request)
  {
    //
    //return request()->all();
    $post_id = $request->input('post_id');
    $post = Post::find($post_id);
    if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
    {
      $category_id = $request->input('category');
      $title = $request->input('title');
      $slug = str_slug($title);
      $duplicate = Post::where('slug',$slug)->first();
      if($duplicate)
      {
        if($duplicate->id != $post_id)
        {
          return redirect('posts/edit/'.$post->slug)->withErrors('Title already exists.')->withInput();
        }
        else 
        {
          $post->slug = $slug;
        }
      }
      $post->category_id = $category_id;
      $post->title = $title;
      $post->content = $request->input('content');
      if($request->has('save'))
      {
        $post->active = 0;
        $message = 'Post saved successfully';
        $landing = 'posts/edit/'.$post->slug;
      }            
      else {
        $post->active = 1;
        $message = 'Post updated successfully';
        $landing = 'posts';
      }
      $post->update();
           return redirect($landing)->withMessage($message);
    }
    else
    {
      return redirect('/')->withErrors('you have not sufficient permissions');
    }
  }
public function delete(Request $request, $id)
  {
    //
    $post = Post::find($id);
    if($post && ($post->author_id == $request->user()->id || $request->user()->is_admin()))
    {
      $post->delete();
      $data['message'] = 'Post deleted Successfully';
    }
    else 
    {
      $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
    }
    return redirect('/')->with($data);
  }
  public function active()
  {
    # code...ajax
  }

  public static function prevBlogPostUrl($id) {
        $blog = static::where('id', '<', $id)->orderBy('id', 'desc')->first();

        return $blog ? $blog->url : '#';
    }

    public static function nextBlogPostUrl($id) {
        $blog = static::where('id', '>', $id)->orderBy('id', 'asc')->first();

        return $blog ? $blog->url : '#';
    }

    public function tags() {
        return $this->belongsToMany('App\BlogTag','blog_post_tags','post_id','tag_id');
    }

}
