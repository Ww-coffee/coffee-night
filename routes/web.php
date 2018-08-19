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




//添加运动员
Route::any('admin/userdata/uadd','UdController@uadd')->name('usdata_uadd');
//删除运动员
Route::get('admin/userdata/delete','Udcontroller@delete')->name('usdata_delete');
//修改运动员
Route::any('admin/userdata/update','Udcontroller@update')->name('usdata_update');
//比赛成绩添加（场）
Route::any('admin/gradedata/gadd','UdController@gadd')->name('usdata_gadd');


