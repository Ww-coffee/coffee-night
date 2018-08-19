<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
class UdController extends Controller
{
    //添加运动员信息
    public function uadd(){
        if (Input::method() == 'POST'){
            //post请求
            $data = Input::all();
            if (!empty($data)){

                    $response = [ 'code' => '0', 'msg' => '添加成功!'];
                }else{
                    $response = [ 'code' => '1', 'msg' => '添加失败!'];
                }
                //返回数据
                return response() -> json($response);


        }else{
            //get 请求
            $data = DB::select('
                select a.id,b.office_name,a.bat_number,a.tool,a.send,a.get_lose,a.score_first,
                a.score_last from game_data as a left join office as b on a.mess_id = b.id where b.id = 1;');
            return view('admin/data/uadd',compact('data'));
        }
    }
    //删除方法
    public function delete(){
       $id = Input::get('id');
       $data = DB::table('game_data')->where('id',$id)->delete();
       if ($data){
           $response = [ 'code' => '0', 'msg' => '添加成功!'];
       }else{
           $response = [ 'code' => '1', 'msg' => '添加失败!'];
       }
       return response() -> json($response);
    }

    //更新方法
    public function update(){

    }
}
