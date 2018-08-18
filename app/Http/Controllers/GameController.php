<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\Game;
use DB;
class GameController extends Controller
{
    //显示比赛列表页面
    public function index(){
        //获取数据
        $data=DB::select("select a.id,a.game_date,a.game_time,a.game_stage,b.user_name nameA,c.user_name  nameB ,a.game_project,a.state,a.city,a.game_name game_name from  message  a  
   inner join user  b on a.user_a=b.id  inner join user c on a.user_b=c.id ");
        return view('admin.game.index',compact('data'));
    }
    //添加比赛信息
    public function add(){
        // 请求类型的判断
    	if(Input::method() == 'POST'){
    		//post
    		// 自动的数据验证
    		// 入表
    		$data = Input::all();
			unset($data['_token']);
		    // var_dump($data);
    		if(Game::insert($data)){
    			// 成功
    			$response = ['code' => 0,'msg' => '比赛添加成功！'];
    		}else{
    			// 失败
    			$response = ['code' => 1,'msg' => '比赛添加失败！'];
    		}
    		// 返回
    		return response() -> json($response);
    	}else{
            //返回初始数据
            $data=DB::select("select id,user_name from user");
            return view('admin.game.add',compact('data'));
    	}  
    }
	//修改比赛信息
	public function edit(Request $request){
		// 请求类型的判断
    	if(Input::method() == 'POST'){
    		//post
    		// 自动的数据验证
    		// 入表
    		$data = Input::all();
			$id=(int)$request->get('id');
			unset($data['_token']);
			if(DB::table('message')->where('id',$id)->update($data))
			{
    			// 成功
    			$response = ['code' => 0,'msg' => '比赛修改成功！'];
    		}else{
    			// 失败
    			$response = ['code' => 1,'msg' => '比赛修改失败！'];
    		}
    		// 返回
    		return response() -> json($response);
    	}else{
            //返回初始数据
            //获取修改记录id
		     $id=(int)$request->get('id');
		     $data=DB::select("select a.id,a.game_date,a.game_time,a.game_stage,a.user_a,a.user_b,b.user_name nameA,c.user_name  nameB ,a.game_project,a.state,a.city,a.game_name game_name from  message  a  
   inner join user  b on a.user_a=b.id  inner join user c on a.user_b=c.id where a.id=$id");
            //获取运动员信息
		     $data2=DB::select("select id,user_name from user");
            //  var_dump($data);
		     return view('admin.game.edit',compact('data','data2'));
    	}  
	}
	//删除比赛信息
	public function del(Request $request){
	  //获取删除比赛信息的id
      $id=(int)$request->get('id');
	//   var_dump($id);
	  if(DB::table('message')->delete($id)){
		  // 成功
    	$response = ['code' => 0,'msg' => '比赛信息删除成功！'];
    	}else{
    	  // 失败
    	$response = ['code' => 1,'msg' => '比赛信息删除失败！'];
    	}
    	// 返回
    	return response() -> json($response);
	  }
}
