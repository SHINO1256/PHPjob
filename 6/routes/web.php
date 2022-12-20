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

Route::get('post/create', 'PostController@add')->middleware('auth');


Route::get('/', function () {
   return view('logout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

/*Route::get('/', function () {
  return view('layout');
});*/

Route::get('../login', function () {
   return view('../login');
}); 




// 投稿ページを表示
Route::get('/home', 'PostController@postpage')->middleware('auth');
// 投稿をコントローラーに送信
Route::post('/newpostsend', 'PostController@savenew')->middleware('auth');;

// 投稿一覧を表示する
Route::get('/home', 'PostController@index')->middleware('auth');
Route::get('/home/delete', 'PostController@delete')->middleware('auth');