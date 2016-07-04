<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

// Authentication
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',

]);

Route::get('auth/logout',['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
// Check for log in user
Route::group(['middleware' => ['auth']], function()
{
	//Route::get('posts', 'PostController@index');
	Route::get('posts',['as' => 'home', 'uses' => 'PostController@index']);
	// show new post form
	Route::get('posts/new-post', ['as' => 'new-post', 'uses' => 'PostController@create']);
	// save new post
	Route::post('posts/store', 'PostController@store');
	// edit post form
	Route::get('posts/edit/{slug}', ['as' => 'edit-post', 'uses' => 'PostController@edit']);
	// update post
	Route::post('posts/update', 'PostController@update');
	// update post status
	Route::put('posts/active', ['as' => 'active-post', 'uses' => 'PostController@active']);
	// delete post
	Route::get('posts/delete/{id}', ['as' => 'delete-post', 'uses' => 'PostController@delete']);

	//Route::get('posts', 'PostController@index');
	Route::get('category',['as' => 'category', 'uses' => 'CategoryController@index']);
	// show new post form
	Route::get('category/new-category', ['as' => 'new-category', 'uses' => 'CategoryController@create']);
	// save new post
	Route::post('category/store', 'CategoryController@store');
	// edit post form
	Route::get('category/edit/{id}', ['as' => 'edit-category', 'uses' => 'CategoryController@edit']);
	// update post
	Route::post('category/update', 'CategoryController@update');
	// delete post
	Route::get('category/delete/{id}', ['as' => 'delete-category', 'uses' => 'CategoryController@delete']);

	//Route::get('posts', 'PostController@index');
	Route::get('tag',['as' => 'tag', 'uses' => 'TagController@index']);
	// show new post form
	Route::get('tag/new-tag', ['as' => 'new-tag', 'uses' => 'TagController@create']);
	// save new post
	Route::post('tag/store', 'TagController@store');
	// edit post form
	Route::get('tag/edit/{id}', ['as' => 'edit-tag', 'uses' => 'TagController@edit']);
	// update post
	Route::post('tag/update', 'TagController@update');
	// delete post
	Route::get('tag/delete/{id}', ['as' => 'delete-tag', 'uses' => 'TagController@delete']);

	//Route::get('posts', 'PostController@index');
	Route::get('user',['as' => 'user', 'uses' => 'UserController@index']);
	// show new post form
	Route::get('user/new-user', ['as' => 'new-user', 'uses' => 'UserController@create']);
	// save new post
	Route::post('user/store', 'UserController@store');
	// edit post form
	Route::get('user/edit/{id}', ['as' => 'edit-user', 'uses' => 'UserController@edit']);
	// update post
	Route::post('user/update', 'UserController@update');
	// delete post
	Route::get('user/delete/{id}', ['as' => 'delete-user', 'uses' => 'UserController@delete']);


	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	// add comment
	Route::post('comment/add','CommentController@store');
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');
});
//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('posts/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
// display list post
Route::get('blog',['as' => 'posts_list', 'uses' => 'PostController@posts_list']);
