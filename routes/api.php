<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/reg","Api\UserController@reg");//注册
Route::post("/login","Api\UserController@login");//登录
Route::get("/list","Api\UserController@list")->middleware("token");//列表
Route::post("/auth","Api\UserController@auth");//鉴权

