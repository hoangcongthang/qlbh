<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


//Route "home"
Route::get('index',[
	'as'   => 'trang-chu',
	'uses' => 'PageController@getIndex' 
]);

//Route "login"
Route::get('login-bakery',[
	'as'   => 'trang-login',
	'uses' => 'PageController@getLogin' 
]);

//Route "register"
Route::get('register-bakery',[
	'as'   => 'trang-register',
	'uses' => 'PageController@getRegister' 
]);

//Route "about"
Route::get('about',[
	'as'   => 'trang-about',
	'uses' => 'PageController@getAbout'
]);

//Route "bakery"
Route::get('bakery',[
	'as'   => 'trang-bakery',
	'uses' => 'PageController@getBakery'
]);

//Route "sweets"
Route::get('sweets',[
	'as'   => 'trang-sweets',
	'uses' => 'PageController@getSweets'
]);

//Route "gift"
Route::get('gift',[
	'as'   => 'trang-gift',
	'uses' => 'PageController@getGift'
]);

//Route "blog"
Route::get('blog',[
	'as'   => 'trang-blog',
	'uses' => 'PageController@getBlog'
]);

//Route "contact"
Route::get('contact',[
	'as'   => 'trang-contact',
	'uses' => 'PageController@getContact'
]);

//Route "details"
Route::get('details',[
	'as'   => 'trang-details',
	'uses' => 'PageController@getDetails'
]);



















Route::get('themdanhmuc', function(){
	$danhmuc = new App\danhmuc;
	$danhmuc->tendanhmuc = 'banh mi';
	$danhmuc->mota = 'cac loai banh tu bot mi';
	$danhmuc->hinhanh = 'duong dan anh';
	$danhmuc->save();
	echo "da them danh muc";
});
