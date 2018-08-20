<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入Auth;
use Auth;
use DB;
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
<<<<<<< HEAD
            'username' => 'required|min:3|max:20',
            'userpwd' => 'required|min:6',
=======
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:6',
>>>>>>> 8b4bd959926926265a6238234cafe88d099c92d2
            'captcha'  => 'required|size:5|captcha'
        ],[
            //针对没有翻译的错误提示
            'captcha.required' => '验证码不能为空',
            'captcha.size'     => '验证码长度必须是5位',
            'captcha.captcha'  => '验证码错误'
        ]);
<<<<<<< HEAD
=======

//        //没有做用户名和密码验证，直接跳转
//         $data = $request -> only(['username','password']);
//         if (!empty($data)){
//             return redirect(route('dashboard'));
//         }else{
//             echo "失败";
//         }


       //开始进行身份进行验证
        $data = $request -> only(['username','password']);
        $data['show'] = '1';//1表示状态为正常的账号

        $adm = DB::table('admin') -> where('username' == $data['username']);
        $pas = DB::table('admin') -> where('password' == $data['password']);
        if (!$adm){
            if (!$pas){

                return redirect(route('public.login')) -> withErrors(['error' => '密码错误！']);
            }
            return redirect(route('public.login')) -> withErrors(['error' => '用户名错误！']);
        }else{
            return redirect(route('dashboard'));
        }


>>>>>>> 8b4bd959926926265a6238234cafe88d099c92d2
    }
}
