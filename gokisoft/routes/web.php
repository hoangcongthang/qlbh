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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//dang ky
Route::get('/register_user', function(){
	return view('register_user');
})->name('register_user');

Route::post('/post-user', [
	'as'   =>'post-user',
	'uses' =>'UserController@addUser'
]);

//dang nhap
Route::get('/login_user', function(){
	return view('login_user');
})->name('login_user');

Route::post('/post-login_user', [ 
	'as'   => 'post-login_user',
	'uses' => 'UserController@loginUser'
]);

//welcome
Route::get('/welcome_user', function(){
	return view('welcome_user');
});




//chung cu
Route::get('/chungcu_list', function(){
	return view('house_list');
})->name('house_list');


Route::post('post-chungcu', [
	'as' => 'post-chungcu',
	'uses' => 'Apartments2Controller@addChungcu'
]);














//URL => View
Route::get('/danh-sach-sinh-vien', function(){ 
	return view('student_list');
});

//URL => Controller => View
Route::get('/danh-sach-sinh-vien-method2', [
	'as'   => 'student_list_method_2',
	'uses' => 'StudentController@showStudentList'
]);







Route::get('/student_list', [
	'as'   => 'student_list',
	'uses' => 'StudentController@showStudentList2'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
