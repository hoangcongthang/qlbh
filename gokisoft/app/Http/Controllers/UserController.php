<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
    	$fullname = $request->fullname;
    	$password = $request->password;

    	//insert into db
    	DB::table('users')->insert([
    		'fullname' => $fullname,
    		'password' => $password
    	]);

    	return redirect()->route('login_user');
    }

    public function loginUser(Request $request)
    {


        $fullname = $request->fullname;
        $password = $request->password;

        $checkLogin = DB::table('users')->where(['fullname'=>$fullname ,'password' => $password])->count();
        if($checkLogin > 0)
        {
            return redirect('welcome_user');
        }
        else
        {
            return back()->withInput()->withErrors(['errors' => 'Tên tài khoản hoặc mật khẩu không đúng']);
        }

    }
}
