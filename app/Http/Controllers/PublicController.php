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
            'password' => 'required|min:6',
            'captcha'  => 'required|size:5|captcha'
        ],[
            //针对没有翻译的错误提示
            'captcha.required' => '验证码不能为空',
            'captcha.size'     => '验证码长度必须是5位',
            'captcha.captcha'  => '验证码错误'
        ]);

        //没有做用户名和密码验证，直接跳转
         $data = $request -> only(['username','password']);
         if (!empty($data)){
             return redirect(route('dashboard'));
         }else{
             echo "失败";
         }


////         开始进行身份进行验证
//           $data = $request -> only(['username','password']);
//          //Auth认证
//           if (Auth::guard('admin') -> attempt($data)){
//               return redirect(route('dashboard'));
//           }else{
//             return redirect(route('public.login')) -> withErrors(['error' => '用户名或密码错误！']);
//          }
    }
}
