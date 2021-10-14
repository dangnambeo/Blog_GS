<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use App\Slide;
use App\User;
use App\TypeCate;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function __construct()
    {
        $type = TypeCate::all();
        view()->share('type', $type);
    }
    public function ListPost()
    {
        $post = Posts::where('user_id', Auth::user()->user_id)->get();
        return view('admin.post.list-post', compact('post'));
    }
    public function getAddPost()
    {
        $user = User::all();
        $cate = Category::all();
        return view('admin.post.add-post', compact('user', 'cate'));
    }
    public function postAddPost(Request $request)
    {
        $post = new Posts;
        $post->tittle = $request->tittle;
        $post->short_content = $request->short_content;
        $post->content = $request->content;
        $post->hot_news = $request->hot_news;
        $post->cate_id = $request->cate_id;
        $post->type_id = $request->type_id;
        $post->user_id = $request->user_id;
        $post->created_at      = new DateTime();
        if ($post->save()) {
            if ($request->hasFile('img_post')) {
                $file = $request->img_post;
                // $file_name=$file->getClientOriginalName();
                $file->move('upload/posts', $file->getClientOriginalName());
                $post->img_post = "upload/posts/" . $file->getClientOriginalName();
                $post->save();
            }
        }
        alert()->toast('Thêm bài viết thành công', 'success')->persistent(false)->autoClose(1200);
        return redirect(route('list-post'));
    }
    public function ViewPost($id)
    {
        $post = Posts::findOrFail($id);
        return view('admin.post.view-post', compact('post'));
    }
    public function getEditPost($id)
    {
        $user = User::all();
        $cate = Category::all();
        $post = Posts::findOrFail($id);
        return view('admin.post.edit-post', compact('post', 'user', 'cate'));
    }
    public function postEditPost(Request $request, $id)
    {
        $post = Posts::find($id);
        $post->tittle = $request->tittle;
        $post->short_content = $request->short_content;
        $post->content = $request->content;
        $post->hot_news = $request->hot_news;
        $post->cate_id = $request->cate_id;
        $post->type_id = $request->type_id;
        $post->user_id = $request->user_id;
        if ($post->save()) {
            if ($request->hasFile('img_post')) {
                $file = $request->img_post;
                // $file_name=$file->getClientOriginalName();
                $file->move('upload/posts', $file->getClientOriginalName());
                $post->img_post = "upload/posts/" . $file->getClientOriginalName();
                $post->save();
            }
        }
        return redirect(route('list-post'));
    }
    public function DeletePost($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect(route('list-post'));
    }
}
