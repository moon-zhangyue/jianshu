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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', "\App\Http\Controllers\Auth\LoginController@index");  //首页


Route::get('/posts','\App\Http\Controllers\PostController@index');//文章列表页

//创建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::post('/posts', '\App\Http\Controllers\PostController@store');//提交

Route::get('/posts/search', '\App\Http\Controllers\PostController@search');
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');//文章详情页
//编辑文章
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit'); //模型绑定
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');//更新文章
Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');//删除文章

Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');//图片上传
Route::post('/posts/comment', '\App\Http\Controllers\PostController@comment');
Route::get('/posts/{post}/zan', '\App\Http\Controllers\PostController@zan');
Route::get('/posts/{post}/unzan', '\App\Http\Controllers\PostController@unzan');

//注册
Route::get('/register', "\App\Http\Controllers\RegisterController@index");
Route::post('/register', "\App\Http\Controllers\RegisterController@register");

//登录
Route::get('/login', "\App\Http\Controllers\LoginController@index")->name('login');
Route::post('/login', "\App\Http\Controllers\LoginController@login");
Route::get('/logout', "\App\Http\Controllers\LoginController@logout");
