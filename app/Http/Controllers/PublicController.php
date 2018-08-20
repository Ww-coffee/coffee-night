<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入Auth;
use Auth;
class PublicController extends Controller
{
    public function login(){
        return view('admin.public.login');
    }
    //登录验证方法
    public function check(Request $request){
        //开启自动验证
        $this -> validate($request,[
            //验证规则 '字段name值'=>'规则1|规则2...
            'username' => 'required|min:3|max:20',
            'userpwd' => 'required|min:6',
            'captcha'  => 'required|size:5|captcha'
        ],[
            //针对没有翻译的错误提示
            'captcha.required' => '验证码不能为空',
            'captcha.size'     => '验证码长度必须是5位',
            'captcha.captcha'  => '验证码错误'
        ]);
    }
}
