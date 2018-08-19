<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Model\User;
use DB;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    public function index(){

        //查询运动员信息
        $data = DB::select("select * from user order by id desc");
//        print_r($data);
//        die();
        return view("admin.user.index",compact('data'));
    }

    //修改信息
    public function update(Request $request){
        //判断请求方式
        if(Input::method() == 'POST'){
            //post请求添加
            //数据验证
            //截取字符串获取请求头中的id
            $sh = getallheaders();
            $id1 = $sh['Referer'];
            $id2 = substr("$id1",'45');

            //获取数据，筛选
            $data = Input::all();
            unset($data['_token']);
            $data['add_time'] = date('Y-m-d H:i:s');

            //判断进来的是男是女
            if ($data['sex'] == 1){
                $data['sex'] = '男';
            }else{
                $data['sex'] = '女';
            }

            //判断图片是否满足要求
            $array = $_FILES['filename'];

            //判断是不是图片
            $arr = array('jpg','png','jpeg');
            $tex = pathinfo($array['name'],PATHINFO_EXTENSION);
            if (!in_array($tex,$arr)){
                echo "您上传的不是图片，请重新上传！";
                die();
            }

            //判断图片上传是否异常
            if ($array['error'] != 0){
                echo "图片上传异常！请重新上传。";
                die();
            }

            //判断图片大小
            if ($array['size']>1024*1024){
                echo $array['name'] ."这张图片太大了，请重新选择！";
                die();
            }

            //移动文件
            $filename = "./img/".uniqid('s_',true).'.'.$tex;
            $tmp = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp,$filename);
            $filename = ltrim($filename,'.');
            unset($data['filename']);
            $data['filename']=$filename;
            echo "文件{$array['name']}上传成功！";

            $result = DB::table('user')->where('id',$id2)->update($data);

            //判断
            if($result){
                $response = ['code' => 0,'msg' => '用户更新成功!'];
            }else{
                $response = ['code' => 1,'msg' => '用户更新失败'];
            }
            return response() -> json($response);
        }else{
            //get请求
            $id = (int) Input::get('id');

            $country = DB::select("select * from user where id = $id ");
            if ($country[0] ->sex == '男'){
                $country[0] ->sex = 1;
            }else{
                $country[0] ->sex = 2;
            }
            return view('admin/user/edit',compact('country'));
        }

    }

    //添加方法
    public function add(){
        //判断请求方式
        if(Input::method() == 'POST'){
            //post请求添加
            //数据验证
            $data = Input::all();

            unset($data['_token']);
            $data['add_time'] = date('Y-m-d H:i:s');
            if ($data['sex'] == 1){
                $data['sex'] = '男';
            }else{
                $data['sex'] = '女';
            }

            //判断图片是否满足要求
            $array = $_FILES['filename'];

            //判断是不是图片
            $arr = array('jpg','png','jpeg');
            $tex = pathinfo($array['name'],PATHINFO_EXTENSION);
            if (!in_array($tex,$arr)){
                echo "您上传的不是图片，请重新上传！";
                die();
            }

             //判断图片上传是否异常
            if ($array['error'] != 0){
                echo "图片上传异常！请重新上传。";
                die();
            }

            //判断图片大小
            if ($array['size']>1024*1024){
                echo $array['name'] ."这张图片太大了，请重新选择！";
                die();
            }

            //移动文件
            $filename = "./img/".uniqid('s_',true).'.'.$tex;
            $tmp = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp,$filename);
            $filename = ltrim($filename,'.');
            unset($data['filename']);
            $data['filename']=$filename;
            echo "文件{$array['name']}上传成功！";



            //用Modell类写入数据库
            $result = User::insert($data);

            //判断
            if($result){
                $response = ['code' => 0,'msg' => '用户添加成功!'];
            }else{
                $response = ['code' => 1,'msg' => '用户添加失败'];
            }
            return response() -> json($response);

        }else{
            //get请求
            $id = (int) Input::get('id');
            $country = DB::select("select * from user where id = $id ");
            //dd($country);
            return view('admin.user.add',compact('country'));
        }

        header("Refresh:2;url = /views/admin/user/index.blade.php");
    }

    //删除数据方法
    public function delete(){
        $id = Input::get('id');
        $data = DB::table('user')-> where('id',$id)->delete();
        if ($data){
            echo "删除成功";
        }else{
            echo "删除失败";
        }

    }



}
