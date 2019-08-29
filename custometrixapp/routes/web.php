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
/*
Route::get('/', function () {
    return view('welcome');

});
*/
Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts','PostsController');

Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello Edward</h1>';

});
/*
Route::get('/about',function(){
	return view('pages.about');
});
*/
//inserting dynamic parameters into the url
Route::get('/user/{name}/{id}',function($name,$id){
	return 'This is user '.$name.' whose id is '.$id;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
