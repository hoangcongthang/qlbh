<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtinkhachhang extends Model
{
    protected $table = 'thongtinkhachhangs';

    public function hoadon(){
    	return $this->hasMany('App\hoadon', 'makhachhang', 'id');
    }

    public function User(){
    	return $this->belongsTo('App\User', 'mataikhoan', 'id');
    }
}
