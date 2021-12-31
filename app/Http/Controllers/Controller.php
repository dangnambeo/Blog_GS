<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Slide;
use App\TypeCate;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function  __construct(){
        $user = User::all();
        $cates = Category::all();
        $type = TypeCate::all();
        $slides = Slide::all();
        $posts = Posts::all();
        view()->share('user',$user);
        view()->share('cates',$cates);
        view()->share('slides',$slides);
        view()->share('posts',$posts);
        view()->share('type',$type);
    }
}
