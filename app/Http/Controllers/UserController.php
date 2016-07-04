<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Carbon\Carbon;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userData = User::where('del_flg',0)->orderBy('id','desc')->get();
       $userArr = array ();
       if ($userData) {
        foreach ($userData as $key => $user) {

          $editLink = route('edit-user', ['id' => $user->id]);
          $deleteLink = route('delete-user', ['id' => $user->id]);

          $userArr[] = array (
            'no' => ($key + 1),
            'name' => $user->name,
            'email' => $user->email,
            'option' => "<a href='{$editLink}'>Edit</a> | <a class='delete_link' href='{$deleteLink}'>Delete</a>" 
            );
        }
      }
      $users = json_encode($userArr);
        //page heading
      $title = 'Users Management';

      $addurl = route('new-user');
        //return home.blade.php template from resources/views folder
      return view('user.home')->withUsers($users)->withTitle($title)->withAddurl($addurl);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        // if user can post i.e. user is admin or author
        $role = array(
        	'admin' => 'Admin',
        	'author'	=> 'Author',
        	'Member'	=> 'Member'
        	);
        if($request->user()->is_admin())
        {
            return view('user.create')->withRole($role);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]); 

        $user = new user();
        $userIns = array(
                    'del_flg' => 0,
                    'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
                    'updated_at' => Carbon::now('Asia/Ho_Chi_Minh')
                );
        $userIns['name'] = $request->get('name');
        $userIns['email'] = $request->get('email');
        $userIns['password'] = bcrypt($request->get('password'));
        $userIns['role'] = $request->get('role');

        if($request->has('save')) {
            $user->insert($userIns);
            $message = 'user add successfully';
        }
        return redirect('user')->withMessage($message);
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
        $user = User::where('id',$id)->first();
	    $role = array(
	    	'admin' => 'Admin',
	    	'author'	=> 'Author',
	    	'Member'	=> 'Member'
	    	);

        if($user && $request->user()->is_admin()) {
            return view('user.edit', ['users' => $user, 'role' => $role ]);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'min:6|confirmed'
        ]); 
        $id = $request->input('id');
        $user = User::find($id);
        if($user && $request->user()->is_admin()) {
            $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $user->user = $request->get('user');

            if($request->has('save')) {
                $user->update();
                $message = 'user update successfully';
            }
        }
        
        return redirect('user')->withMessage($message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $user->del_flg = 1;
        $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        if($user && $request->user()->is_admin()) {
            $user->update();
            $data['message'] = 'Post deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        return redirect('user')->with($data);
        $id = $request->get('id');
    }
}
