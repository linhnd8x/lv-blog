<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categoryData = Category::where('del_flg',0)->orderBy('id','desc')->get();
       $categoryArr = array ();
       if ($categoryData) {
        foreach ($categoryData as $key => $category) {
          $editLink = route('edit-category', ['id' => $category->id]);

          $deleteLink = route('delete-category', ['id' => $category->id]);

          $categoryArr[] = array (
            'no' => ($key + 1),
            'category' => $category->category,
            'option' => "<a href='{$editLink}'>Edit</a> | <a class='delete_link' href='{$deleteLink}'>Delete</a>" 
            );
        }
      }
      $categories = json_encode($categoryArr);
            //page heading
      $title = 'Categories Management';

      $addurl = route('new-category');
            //return home.blade.php template from resources/views folder
      return view('category.home')->withCategories($categories)->withTitle($title)->withAddurl($addurl);;
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
            return view('category.create');
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
        $category = new Category();
        $categoryIns = array(
                    'del_flg' => 0,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                    'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
                );
        $categoryIns['category'] = $request->get('category');
        if($request->has('save')) {
            $category->insert($categoryIns);
            $message = 'Category add successfully';
        }
        return redirect('category')->withMessage($message);
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
        $category = Category::where('id',$id)->first();

        if($category && $request->user()->is_admin()) {
            return view('category.edit', ['categories' => $category]);
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
        $category = Category::find($id);
        if($category && $request->user()->is_admin()) {
            $category->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $category->category = $request->get('category');

            if($request->has('save')) {
                $category->update();
                $message = 'Category update successfully';
            }
        }
        
        return redirect('category')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $category = Category::find($id);
        $category->del_flg = 1;
        $category->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        if($category && $request->user()->is_admin()) {
            $category->update();
            $data['message'] = 'Post deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        return redirect('category')->with($data);
        $id = $request->get('id');
    }
}
