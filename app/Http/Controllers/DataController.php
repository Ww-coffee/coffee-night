<?php

namespace App\Http\Controllers;
use App\Model\GameData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//引入Excel
use Excel;
use DB;
class DataController extends Controller
{
    //添加数据页面
    public function index(){
        //获取前台页面下拉框需要的数据
        $userdata=DB::select("select id,user_name from user"); //可以重名不重号
        $messdata=DB::select("select id,game_name from message"); //年+赛事名称
        return view('admin.data.index',compact("userdata","messdata"));
    }
    // 数据导出
    public function down(){
    	// 查询整合比赛数据,运动员id替换成运动员姓名,赛事id替换成赛事名称
        $sql="SELECT game_data.id, user.user_name, message.game_name, game_data.class, game_data.score_first, game_data.send, game_data.bat_number, game_data.tool, game_data.get_lose, game_data.score_last
        FROM game_data INNER JOIN message ON game_data.mess_id = message.id  INNER JOIN user ON game_data.user_id = user.id;";
    	$data = DB::select($sql);
    	// 定义一个变量
    	$cellData = [
            ['成绩记录号','运动员','赛事名称','局次','总得分','接发','拍数','手段','得失','总失分']
        ];
        // 循环
        foreach ($data as $key => $value) {
        	$cellData[] = [
        			$value -> id,$value ->user_name,$value ->game_name,$value ->class,$value ->score_first,$value ->send,$value ->bat_number,$value->tool,
                    $value->get_lose,$value->score_last
        	];
        }
        // 调用excel类创建一个excel文件
        Excel::create('比赛数据导出',function($excel) use ($cellData){
        	// 创建一个工作表
            $excel->sheet('数据仓库', function($sheet) use ($cellData){
            	// 将数据写入到行里
                $sheet->rows($cellData);
            });// 导出文件
        })->export('xls');
    }

    // 数据导入
    public function up(Request $request){
        // //判断请求类型
        if(Input::method()=='POST'){
            //post
            $post=Input::all();
            $filePath='.'.$post['excelpath'];
            Excel::load($filePath,function($reader) use ($post){
                $data=$reader->getSheet(0)->toArray();
                // dd($data);
                //写入数据表
                $arr=[];
                $sql="SELECT user.user_name, message.game_name, game_data.user_id, game_data.mess_id
                 FROM game_data INNER JOIN user ON game_data.user_id = user.id INNER JOIN message ON game_data.mess_id = message.id";
                $userdata=DB::select($sql);
                foreach($data as $key=>$value){
                    //跳过表头
                    if($key==0){
                        continue;
                    }
                   //循环遍历取出对应的user_id和赛事id
                   //var_dump($userdata[0]->game_name);die();
                   foreach($userdata as $key=>$val){
                      if($val->user_name==$value[1]){
                          $arr['user_id']=$val->user_id;
                          break;
                      }}
                   foreach($userdata as $key=>$val){
                      if($val->game_name==$value[2]){
                          $arr['mess_id']=$val->mess_id;
                          break;
                      }
                   }
		        		 $arr['class']    =  (int)$value[3];
		        		 $arr['score_first']  =  (int)$value[4];
		        		 $arr['send']	= $value[5];
		        		 $arr['bat_number']  = $value[6];
                         $arr['tool']  = $value[7];
                         $arr['get_lose']   =$value[8];
                         $arr['score_last'] = (int)$value[9];
                }
                //写入数据
                if(GameData::insert($arr)){
                    $response=['code'=>0,'msg'=>'导入成功'];
                }else{
                    $response=['code'=>1,'msg'=>'导入失败'];
                }
                echo json_encode($response);
            });
       }else{
        //     //get
             return view('admin.data.import');
         }
    }
    // 数据添加
    public function add(){
        // 请求类型的判断
    	if(Input::method() == 'POST'){
    		//post
    		// 自动的数据验证
    		// 入表
            $data=[];
            $data=Input::all();
            unset($data['_token']);
            /*$sql="SELECT user.user_name, message.game_name, game_data.user_id, game_data.mess_id
                 FROM game_data INNER JOIN user ON game_data.user_id = user.id INNER JOIN message ON game_data.mess_id = message.id";*/
            //获取运动员信息id和名字
            //获取赛事信息id和名字
            $user="select id,user_name from user";
            $mess="select id,game_name from message";
            $userdata=DB::select($user);
            $messdata=DB::select($mess);
            //进行匹配判断，将前台提交的运动员名字和赛事名称转换成对应的id保存到比赛成绩数据表中
            foreach($userdata as $val){
               if($val->user_name==$data['user_name']){
                // var_dump($val->user_name);
                 $data['user_id']=$val->id;
                 unset($data['user_name']);
                 break;
                }
            }
            foreach($messdata as $val){
               if($val->game_name==$data['game_name']){
                $data['mess_id']=$val->id;
                unset($data['game_name']);
                break;
            }}
    		if(GameData::insert($data)){
    			// 成功
    			$response = ['code' => 0,'msg' => '比赛成绩添加成功！'];
    		}else{
    			// 失败
    			$response = ['code' => 1,'msg' => '比赛成绩添加失败！'];
    		}
    		// 返回
    		return response() -> json($response);
    	}else{
             //获取填充数据填充下拉框
            $mess="select distinct game_name from message"; //单独获取赛事信息
            $user="select distinct user_name from user";    //获取参赛运动员
            $tool="select distinct tool from game_data"; //获取手段
            $bat_number="select distinct bat_number from game_data"; //获取拍数
            $mess=DB::select($mess);
            $user=DB::select($user);
            $tool=DB::select($tool);
            $bat_number=DB::select($bat_number);
            return view("admin.data.add",compact("mess","user","tool","bat_number"));
            }    
    }
}
