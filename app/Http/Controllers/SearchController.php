<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    //初始化前面下拉框数据并展示前台搜索页面
    public function index(){
        return view('home.default');
    }
    //初始化前端数据
    public function init(){
        $data=DB::select("SELECT message.id, message.game_name, message.game_date, message.game_stage, message.user_a, message.user_b, message.game_project, count_score.big
        FROM count_score INNER JOIN message ON count_score.mess_id = message.id");
        return json_encode($data);
        // console.log(json_decode($data));
    }
}
