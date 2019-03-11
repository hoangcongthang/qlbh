<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = 'nhanviens';

    public function hoadon(){
    	return $this->hasMany('App\hoadon', 'manhanvien', 'id');
    }
}
