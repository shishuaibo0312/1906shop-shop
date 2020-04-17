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
Route::get('/','Index\ShopIndexController@index');//前台首页
//电商前台
Route::prefix('shop')->group(function () {
    Route::get('product/{gid}','Index\ShopIndexController@product');//添加视图
  //  Route::get('product/{gid}','Index\ShopIndexController@product');//添加视图

});
