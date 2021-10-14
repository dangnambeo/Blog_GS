<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Slide;
use App\TypeCate;
use App\User;
//use Illuminate\Http\Request;

class PagesController extends Controller
{
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
    public function Welcome(){
        $post_all = Posts::orderBy('id','desc')->paginate(4);
        $hot = Category::with('posts')->where('status',1)->get();
       $post_cate = Posts::where('hot_news',0)->get();
        return view('welcome',compact('hot','post_cate','post_all'));
    }
    //Xử lí giao diện trang chủ
    public function Index(){
        $post_all = Posts::orderBy('id','desc')->paginate(4);
        $hot = Category::with('posts')->where('status',1)->get();
       $post_cate = Posts::where('hot_news',0)->get();
        return view('Pages.index',compact('hot','post_cate','post_all'));
    }
    //Xử lý trang giao diện xem tất cả bài viết
    public function ViewPageAll(){
        $post = Posts::orderBy('id','desc')->paginate(9);
        return view('Pages.viewall',compact('post'));
    }
    //Xử lý giao diện trang chuyên mục
    public function ViewPageCate($cate_id){
       $cate = Category::find($cate_id);
       $posts_cate = Posts::where('cate_id',$cate_id)->paginate(9);
       return view('Pages.viewcate',compact('cate','posts_cate'));
    }
    //Xử lý trang giao diện loại tin
    public function ViewPageType($type_id){
        $type = TypeCate::find($type_id);
       $posts_type = Posts::where('type_id',$type_id)->paginate(9);
       return view('Pages.viewtype',compact('type','posts_type'));
    }
    //Xử lý giao diện  trang tác giả
    public function ViewPageAuthor($user_id){
        $user = User::find($user_id);
        $post_user =Posts::where('user_id',$user_id)->paginate(9);
        return view('Pages.listpost-author',\compact('user','post_user'));
    }
    //Xử lý giao diện trang xem bài viết
    public function ViewPosts($id){
        $viewpost = Posts::find($id);
        $itempost = Posts::all()->random()->get();
        return view('Pages.viewpost',compact('viewpost','itempost'));
    }
}
