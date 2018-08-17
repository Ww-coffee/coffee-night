<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("admin/index/index");
    }
    public function welcome(){
        return view('admin/index/welcome');
    }
}
