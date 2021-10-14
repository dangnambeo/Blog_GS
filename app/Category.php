<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    public function posts(){
        return $this->hasMany(Posts::class,'cate_id');
    }
    public function type(){
        return $this->hasMany(TypeCate::class,'cate_id');
    }
    public static function boot(){
        parent ::boot();

        static::deleting(function($cate){
            $cate->type()->delete();
            $cate->posts()->delete();
        });
    }
}
