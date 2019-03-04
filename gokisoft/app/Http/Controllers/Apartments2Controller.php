<?php

namespace App\Http\Controllers;

use App\apartments2;
use Illuminate\Http\Request;

class Apartments2Controller extends Controller
{
    public function addChungcu(Request $request)
    {
        $houseList = [];
        for($i = 0; $i < 6; $i++){
            $houseList[] = [
                'tenchungcu'      =>'can nha so'.$i,
                'diachi'          =>'Ha Noi'$i,
                'giaban'          =>'1000000000'.$i,
                'thongtinchung'   => 'nha o'.$i,
                'thongtinchitiet' => 'nha o cao cap'$i,
                'hinhanhdaidien'  => '<img src="">',
                'trangthai'       => 'chua ban'
            ];
        }

        return view('house_list')->with([
                'houseList' => $houseList
        ]);
    }
}
