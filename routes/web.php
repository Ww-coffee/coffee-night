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


Route::get('admin/public/login','PublicController@login')->name('public.login');

//登录表单提交
Route::post('admin/public/check','PublicController@check')->name('check_login');


//首页
Route::get('admin/index/index', 'IndexController@index')->name('dashboard');
Route::get('admin/index/welcome', 'IndexController@welcome')->name('welcome');
Route::get('admin/index/logout', 'IndexController@logout')->name('logout');


//运动员列表
Route::get('admin/user/index','UserController@index')->name('userindex');
//信息修改
Route::any('admin/user/update','UserController@update')->name('user_update');
//删除信息
Route::get('admin/user/delete','UserController@delete')->name('user_delete');

//添加运动员
Route::any('admin/user/add','UserController@add')->name('user_add');




//比赛列表
Route::get('admin/game/index','GameController@index')->name('gameindex');
//添加比赛
Route::post('admin/game/add','GameController@add')->name('gameadd');





