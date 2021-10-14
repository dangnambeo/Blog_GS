<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function type(){
        return $this->belongsTo(TypeCate::class,'type_id');
    }
    public function slide(){
        return $this -> hasOne(Slide::class,'id');
    }
 
}
