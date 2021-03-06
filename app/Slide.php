<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';
    protected $primaryKey = 'slide_id';
    public function posts(){
        return $this->belongsTo(Posts::class,'slide_id');
    }
}
