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

//Route::get('/', "\App\Http\Controllers\LoginController@index");


Route::get('/posts', '\App\Http\Controllers\PostController@index');//文章列表页

//创建文章
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::post('/posts', '\App\Http\Controllers\PostController@store');//提交

Route::get('/posts/search', '\App\Http\Controllers\PostController@search'); //搜索

Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');//文章详情页

//编辑文章
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit'); //模型绑定
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');//更新文章
Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');//删除文章

Route::post('/posts/image/upload', '\App\Http\Controllers\PostController@imageUpload');//图片上传
Route::post('/posts/{post}/comment', '\App\Http\Controllers\PostController@comment');//提交评论--此处源码有误
Route::get('/posts/{post}/zan', '\App\Http\Controllers\PostController@zan');//点赞
Route::get('/posts/{post}/unzan', '\App\Http\Controllers\PostController@unzan'); //取消赞

//注册
Route::get('/register', "\App\Http\Controllers\RegisterController@index");
Route::post('/register', "\App\Http\Controllers\RegisterController@register");

//登录
Route::get('/login', "\App\Http\Controllers\LoginController@index")->name('login');
Route::post('/login', "\App\Http\Controllers\LoginController@login");
Route::get('/logout', "\App\Http\Controllers\LoginController@logout");


// 个人主页
Route::get('/user/{user}', '\App\Http\Controllers\UserController@show');
Route::post('/user/{user}/fan', '\App\Http\Controllers\UserController@fan');
Route::post('/user/{user}/unfan', '\App\Http\Controllers\UserController@unfan');

// 个人设置
Route::get('/user/me/setting', '\App\Http\Controllers\UserController@setting');
Route::post('/user/me/setting', '\App\Http\Controllers\UserController@settingStore');

// 专题
Route::get('/topic/{topic}', '\App\Http\Controllers\TopicController@show'); //详情页
Route::get('/topic/{topic}/submit', '\App\Http\Controllers\TopicController@submit'); //投稿

// 通知
Route::get('/notice', '\App\Http\Controllers\NoticeController@index');


include_once("admin.php");

Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', '\App\Admin\Controllers\LoginController@index'); //登录页面
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');
    Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');

//    Route::get('/home', '\App\Admin\Controllers\HomeController@index');

    // 需要登陆的
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/home', '\App\Admin\Controllers\HomeController@index');

        Route::get('/users', '\App\Admin\Controllers\UserController@index');
        Route::get('/users/create', '\App\Admin\Controllers\UserController@create');//创建管理人员页面
        Route::post('/users/store', '\App\Admin\Controllers\UserController@store');//创建管理人员
        Route::get('/users/{user}/role', '\App\Admin\Controllers\UserController@role');//用户角色关联界面
        Route::post('/users/{user}/role', '\App\Admin\Controllers\UserController@storeRole'); //设定用户角色

        Route::get('/roles', '\App\Admin\Controllers\RoleController@index'); //角色页面
        Route::get('/roles/create', '\App\Admin\Controllers\RoleController@create'); //创建用户角色
        Route::post('/roles/store', '\App\Admin\Controllers\RoleController@store'); //设定用户角色
        Route::get('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@permission');//对某一角色权限设置页面
        Route::post('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@storePermission');//对某一角色权限设置

        Route::get('/permissions', '\App\Admin\Controllers\PermissionController@index');//权限首页
        Route::get('/permissions/create', '\App\Admin\Controllers\PermissionController@create'); //创建页面
        Route::post('/permissions/store', '\App\Admin\Controllers\PermissionController@store'); //保存创建角色

        // 系统管理
        Route::group(['middleware' => 'can:system'], function () {
        });

        // 文章管理
        Route::get('/posts', '\App\Admin\Controllers\PostController@index');
        Route::post('/posts/{post}/status', '\App\Admin\Controllers\PostController@status');
        Route::group(['middleware' => 'can:post'], function () {
        });

        // 专题模块
        Route::group(['middleware' => 'can:topic'], function () {
            Route::resource('topics', '\App\Admin\Controllers\TopicController', ['only' => [
                'index', 'create', 'store', 'destroy'
            ]]);
        });

        // 通知模块
        Route::group(['middleware' => 'can:notice'], function () {
            Route::resource('notice', '\App\Admin\Controllers\NoticeController', [
                'only' => ['index', 'create', 'store'],
            ]);
        });
    });
});