<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCate extends Model
{
    protected $table = 'typecate';
    protected $primaryKey = 'type_id';
    public function posts(){
        return $this->hasMany(Posts::class,'type_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public  static  function  boot(){
        parent::boot();

        static::deleting(function($type){
            $type->posts()->delete();
        });
    }
}
