<?php

namespace App\Http\Controllers;

use  App\TypeCate;
use  App\Category;
use Illuminate\Http\Request;

class TypeCateController extends Controller
{
    function  __construct()
    {
        $cate = Category::all();
        view()->share('cate', $cate);
    }
    public function getListType()
    {
        $type = TypeCate::all();
        return view('admin.typecate.list-type', compact('type'));
    }
    public function getAddType()
    {
        return \view('admin.typecate.add-type');
    }
    public function postAddType(Request $request)
    {
        $type = new TypeCate;
        $type->type_tittle = $request->type_tittle;
        $type->ordinal_type = $request->ordinal_type;
        $type->cate_id = $request->cate_id;
        $type->save();
        alert()->toast('Thêm loại tin thành công', 'success')->persistent(false)->autoClose(1200);
        return redirect(route('list-type'));
    }
    public function getEditType($type_id)
    {
        $type = TypeCate::findOrFail($type_id);
        return \view('admin.typecate.edit-type', \compact('type'));
    }
    public function postEditType(Request $request, $type_id)
    {
        $type = TypeCate::find($type_id);
        $type->type_tittle = $request->type_tittle;
        $type->ordinal_type = $request->ordinal_type;
        $type->cate_id = $request->cate_id;
        $type->save();
        alert()->toast('Cập nhật loại tin thành công', 'success')->persistent(false)->autoClose(1200);
        return redirect(route('list-type'));
    }
    public function DeleteType($type_id)
    {
        $type = TypeCate::find($type_id);
        $type->delete();
        alert()->toast('Xóa loại tin thành công', 'error')->persistent(false)->autoClose(1200);
        return back();
    }
}
