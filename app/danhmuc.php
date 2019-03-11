<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table = 'danhmucs';

    public function sanpham(){
    	return $this->hasMany('App\sanpham', 'madanhmuc', 'id');
    }
}
