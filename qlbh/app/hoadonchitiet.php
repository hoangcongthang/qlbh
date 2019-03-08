<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadonchitiet extends Model
{
    protected $table = 'hoadonchitiets';

    public function sanpham(){
    	return $this->belongsTo('App\sanpham', 'masanpham', 'id');
    }

    public function hoadon(){
    	return $this->belongsTo('App\hoadon', 'madonhang', 'id');
    }
}
