<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Category;
use App\User;
use App\TypeCate;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function __construct()
    {
        $type = TypeCate::all();
        \view()->share('type', $type);
    }
    public function ListCate()
    {
        $user = User::all();
        $this->authorize($user);
        $cate = Category::all();
        //$cate = Category::with('posts')->get();
        //dd($cate);
        return view('admin.category.list-cate', compact('cate'));
    }
    public function getAddCate()
    {
        $user = User::all();
        //$cate = Cate::all();
        $this->authorize($user);
        return view('admin.category.add-cate');
    }
    public function postAddCate(Request $request)
    {
        $cate = new Category;
        $cate->cate_tittle = $request->cate_tittle;
        $cate->ordinal = $request->ordinal;
        $cate->status = $request->status;
        $cate->save();
        alert()->toast('Thêm chuyên mục thành công', 'success')->persistent(false)->autoClose(1200);
        return redirect(route('list-cate'));
    }
    public function getEditCate($cate_id)
    {
        $user = User::all();
        //$cate = Cate::all();
        $this->authorize($user);
        $cate = Category::findOrFail($cate_id);
        return view('admin.category.edit-cate', compact('cate'));
    }
    public function postEditCate(Request $request, $cate_id)
    {
        $cate = Category::find($cate_id);
        $cate->cate_tittle = $request->cate_tittle;
        $cate->ordinal = $request->ordinal;
        $cate->status = $request->status;
        $cate->save();
        alert()->toast('Cập nhật chuyên mục thành công', 'success')->persistent(false)->autoClose(1200);
        return redirect(route('list-cate'));
    }
    public function DeleteCate($cate_id)
    {
        $cate = Category::find($cate_id);
        $cate->delete();
        alert()->toast('Xóa chuyên mục thành công', 'error')->persistent(false)->autoClose(1200);
        return back();
    }
}
