<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
class UdController extends Controller
{
    //查询樊振东数据并返回接口
    public function uadd(){
        $data = DB::select('select a.user_name,b.send,count(b.get_lose) as us from user as a left join game_data as b on a.id = b.user_id where a.user_name = "樊振东"and b.send = "发" and b.get_lose = "得";');


    }
}
