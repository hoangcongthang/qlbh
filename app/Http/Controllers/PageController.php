<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PageController extends Controller
{
    public function getIndex(){
    	return view('Pages.trangchu');
    }

    public function getLogin(){
    	return view('Pages.login-bakery');
    }

    public function getRegister(){
    	return view('Pages.register-bakery');
    }

    public function getAbout(){
    	return view('Pages.about');
    }

    public function getBakery(){
        $sanphams = DB::table('sanphams')->where('madanhmuc','1')->paginate(6);
    	return view('Pages.bakery', compact('sanphams'));
    }

    public function getSweets(){
    	return view('Pages.sweets');
    }

    public function getGift(){
    	return view('Pages.gift');
    }

    public function getBlog(){
    	return view('Pages.blog');
    }

    public function getContact(){
    	return view('Pages.contact');
    }

    public function getDetails(){
    	return view('Pages.details');
    }
}
