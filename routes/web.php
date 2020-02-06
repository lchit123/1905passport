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

Route::get('/test/check','TestController@md5test'); 

Route::get('/user/postman','Admin\UserController@postman');//
Route::get('/user/postman1','Admin\UserController@postman1');//

Route::post('/api/auth','User\UserController@auth'); // 鉴权
