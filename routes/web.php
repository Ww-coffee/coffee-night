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
//添加运动员
Route::any('admin/user/add','UserController@add')->name('useradd');



//比赛列表
Route::get('admin/game/index','GameController@index')->name('gameindex');
//添加比赛
Route::any('admin/game/add','GameController@add')->name('gameadd');
//修改比赛
Route::any('admin/game/edit','GameController@edit')->name('gameedit');
//删除比赛
Route::get('admin/game/del','GameController@del')->name('gamedel');
//数据导出导入页面
Route::get('admin/data/index','DataController@index')->name('updown');
// //数据导出：下载模板
Route::get('admin/downdata','DataController@down')->name('downdata');
// //数据导入：上传数据
Route::get('admin/updata','DataController@up')->name('updata');





