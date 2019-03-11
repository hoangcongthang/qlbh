<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanphams';
    public function danhmuc(){
    	return $this->belongsTo('App\danhmuc', 'madanhmuc', 'id');
    }

    public function hoadonchitiet(){
    	return $this->hasMany('App\hoadonchitiet', 'masanpham', 'id');
    }
}
