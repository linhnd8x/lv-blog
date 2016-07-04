<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tag;

use Carbon\Carbon;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tagData = Tag::where('del_flg',0)->orderBy('id','desc')->get();
       $tagArr = array ();
       if ($tagData) {
        foreach ($tagData as $key => $tag) {
          $editLink = route('edit-tag', ['id' => $tag->id]);

          $deleteLink = route('delete-tag', ['id' => $tag->id]);

          $tagArr[] = array (
            'no' => ($key + 1),
            'tag' => $tag->tag,
            'option' => "<a href='{$editLink}'>Edit</a> | <a class='delete_link' href='{$deleteLink}'>Delete</a>" 
            );
        }
      }
      $tags = json_encode($tagArr);
        //page heading
      $title = 'Tags Management';

      $addurl = route('new-tag');
        //return home.blade.php template from resources/views folder
      return view('tag.home')->withTags($tags)->withTitle($title)->withAddurl($addurl);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        // if user can post i.e. user is admin or author
        if($request->user()->is_admin())
        {
            return view('tag.create');
        }    
        else 
        {
            return redirect('/')->withErrors('You have not sufficient permissions for writing post');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tagIns = array(
                    'del_flg' => 0,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                    'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
                );
        $tagIns['tag'] = $request->get('tag');
        if($request->has('save')) {
            $tag->insert($tagIns);
            $message = 'tag add successfully';
        }
        return redirect('tag')->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $tag = Tag::where('id',$id)->first();

        if($tag && $request->user()->is_admin()) {
            return view('tag.edit', ['tags' => $tag]);
        }
        return redirect('/')->withErrors('you have not sufficient permissions');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $tag = Tag::find($id);
        if($tag && $request->user()->is_admin()) {
            $tag->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $tag->tag = $request->get('tag');

            if($request->has('save')) {
                $tag->update();
                $message = 'tag update successfully';
            }
        }
        
        return redirect('tag')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->del_flg = 1;
        $tag->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        if($tag && $request->user()->is_admin()) {
            $tag->update();
            $data['message'] = 'Post deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        return redirect('tag')->with($data);
        $id = $request->get('id');
    }
}
