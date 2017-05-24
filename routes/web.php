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

/**
 * 后台
 */
//Route::group(['prefix' => 'admin'], ['namespace' => 'Admin'], function () {
//    // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
//    Route::get('category/index', 'CategoryController@index');
//});

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function () {
    //后台首页
    Route::group(['prefix' => 'cate'], function () {
        Route::get('index', 'CategoryController@index');
        Route::get('add', 'CategoryController@add');
        Route::get('welcome', 'CategoryController@welcome');
    });
});

Route::get('test', ['uses' => 'TestController@index']);
Route::get('yemian', ['uses' => 'TestController@yemian']);