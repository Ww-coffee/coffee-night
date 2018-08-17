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







