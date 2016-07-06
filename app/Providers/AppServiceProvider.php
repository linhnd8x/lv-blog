<?php

namespace App\Providers;
use App\Post;
use App\Tag;
use App\PostTag;
use App\Category;
use DB;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cats = Category::select(DB::raw('categories.*, count(posts.category_id) as postItems'))
                                ->join('posts', 'posts.category_id', '=', 'categories.id')
                                ->groupby('posts.category_id')
                                ->having('categories.del_flg', '=', 0)
                                ->get();
        $stag = Tag::where('del_flg', 0)->get();
        $latespost = Post::where('del_flg', 0)->orderby('published_at', 'desc')->take(3)->get();
        view()->share('cats',$cats);
        view()->share('stag',$stag);
        view()->share('latestpost',$latespost);
        // view()->composer('layouts.blog_master', function($view)
        // {

        //     $view->withCats($cats);
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
