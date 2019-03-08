<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table = 'hoadons';

    public function hoadonchitiet(){
    	return $this->hasMany('App\hoadonchitiet', 'mahoadon', 'id');
    }

    public function nhanvien(){
    	return $this->belongsTo('App\nhanvien', 'manhanhvien', 'id');
    }

    public function thongtinkhachhang(){
    	return $this->belongsTo('App\thongtinkhachhang', 'makhachhang', 'id');
    }
}
