<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));

        return view('blog.index', compact('posts'));
        //fetch 5 posts from database which are active and latest
        // $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(5);
        // //page heading
        // $title = 'Latest Posts';
        // //return home.blade.php template from resources/views folder
        // return view('home')->withPosts($posts)->withTitle($title);
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('blog.post')->withPost($post);
    }
}
