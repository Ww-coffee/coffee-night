<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //添加数据页面
    public function index(){
        return view('admin.data.index');
    }
}
