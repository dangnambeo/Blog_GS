<?php

namespace App\Http\Controllers;
use  App\TypeCate;
use  App\Category;
use Illuminate\Http\Request;

class TypeCateController extends Controller
{
    function  __construct(){
        $cate = Category::all();
        view()->share('cate',$cate);
    }
    public function getListType(){
        $type = TypeCate::all();
        return view('admin.typecate.list-type',compact('type'));
    }
    public function getAddType(){
        return \view('admin.typecate.add-type');
    }
    public function postAddType(Request $request){
        $type = new TypeCate;
        $type -> type_tittle = $request -> type_tittle;
        $type -> ordinal_type = $request -> ordinal_type;
        $type -> cate_id = $request -> cate_id;
        $type ->save();
        return redirect(route('list-type'));
    }
    public function getEditType($type_id){
        $type = TypeCate::findOrFail($type_id);
        return \view('admin.typecate.edit-type',\compact('type'));
    }
    public function postEditType(Request $request, $type_id){
        $type = TypeCate::find($type_id);
        $type -> type_tittle = $request -> type_tittle;
        $type -> ordinal_type = $request -> ordinal_type;
        $type -> cate_id = $request -> cate_id;
        $type ->save();
        return redirect(route('list-type'));
    }
    public function DeleteType($type_id){
        $type = TypeCate::find($type_id);
        $type -> delete();
        return \redirect(\route('list-type'));
    }
}
