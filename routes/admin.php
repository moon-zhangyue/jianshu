<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2018/5/15 11:26
 * Module: admin.php
 * 后台路由
 */
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', '\App\Admin\Controllers\LoginController@index'); //登录页面
    Route::post('/login', '\App\Admin\Controllers\LoginController@login');
    Route::get('/logout', '\App\Admin\Controllers\LoginController@logout');

//    Route::get('/home', '\App\Admin\Controllers\HomeController@index');

    // 需要登陆的
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/home', '\App\Admin\Controllers\HomeController@index');

        // 系统管理
        Route::group(['middleware' => 'can:system'], function () {
            // 用户管理
            Route::get('/users', '\App\Admin\Controllers\UserController@index');
            Route::get('/users/create', '\App\Admin\Controllers\UserController@create');
            Route::post('/users/store', '\App\Admin\Controllers\UserController@store');
            Route::get('/users/{user}/role', '\App\Admin\Controllers\UserController@role');
            Route::post('/users/{user}/role', '\App\Admin\Controllers\UserController@storeRole');

            // 角色管理
            Route::get('/roles', '\App\Admin\Controllers\RoleController@index');
            Route::get('/roles/create', '\App\Admin\Controllers\RoleController@create');
            Route::post('/roles/store', '\App\Admin\Controllers\RoleController@store');
            Route::get('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@permission');
            Route::post('/roles/{role}/permission', '\App\Admin\Controllers\RoleController@storePermission');

            // 权限管理
            Route::get('/permissions', '\App\Admin\Controllers\PermissionController@index');
            Route::get('/permissions/create', '\App\Admin\Controllers\PermissionController@create');
            Route::post('/permissions/store', '\App\Admin\Controllers\PermissionController@store');
        });

        // 文章管理
        Route::group(['middleware' => 'can:post'], function () {
            // 文章管理
            Route::get('/posts', '\App\Admin\Controllers\PostController@index');
            Route::post('/posts/{post}/status', '\App\Admin\Controllers\PostController@status');
        });

        // 专题模块
        Route::group(['middleware' => 'can:topic'], function () {
            Route::resource('topics', '\App\Admin\Controllers\TopicController', ['only' => [
                'index', 'create', 'store', 'destroy'
            ]]);
        });

        // 通知模块
        Route::group(['middleware' => 'can:notice'], function () {
            Route::resource('notices', '\App\Admin\Controllers\NoticeController', [
                'only' => ['index', 'create', 'store'],
            ]);
        });
    });
});
