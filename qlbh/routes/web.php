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
Route::get('index',[
	'as'   => 'trang-chu',
	'uses' => 'PageController@getIndex' 
]);


















Route::get('themdanhmuc', function(){
	$danhmuc = new App\danhmuc;
	$danhmuc->tendanhmuc = 'banh mi';
	$danhmuc->mota = 'cac loai banh tu bot mi';
	$danhmuc->hinhanh = 'duong dan anh';
	$danhmuc->save();
	echo "da them danh muc";
});
