<?php

namespace App\Http\Controllers;
use App\Category;
use App\TypeCate;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getType($cate_id){
        $types = TypeCate::where('cate_id',$cate_id)->get();
        foreach($types as $type){
            echo " <option value=".$type->type_id.">".$type->type_tittle."</option>";
        }
    }
}
?>
