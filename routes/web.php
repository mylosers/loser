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


Route::get('/user','User\VipController@index');
Route::get('/user/add','User\VipController@add');   //添加用户
Route::get('/user/update/{uid}','User\VipController@update');   //更新用户信息
Route::get('/user/delete/{uid}','User\VipController@delete');   //删除用户




Route::get('/info','User@info');

Route::get('/order','Order\IndexController@detail');


//模板测试
Route::get('/users','User\VipController@userList');




