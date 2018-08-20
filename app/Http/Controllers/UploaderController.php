<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class UploaderController extends Controller
{
    //文件上传保存方法
    public function webuploader(Request $request){
        if($request->file('file')->isValid()&&$request->hasFile('file')){
            //上传处理
            //对文件进行重新命名，防止重复
            $filename=sha1(time().rand(100000,99999)).'.'.$request->file('file')->getClientOriginalExtension();
            //存储文件
            $result=Storage::disk('public')->put($filename,file_get_contents($request->file->path()));
            if($result){
                //成功
                 $response=['code'=>0,'msg'=>'上传成功','filepath'=>'/storage/'.$filename];
            }else{
                //失败
                 $response=['code'=>1,'msg'=>$request->file('file')->getErrorMessage()];
            }
        }else{
            //返回值
            $response=['code'=>2,'msg'=>'非法上传文件'];
        }
        //输出结果
        return response()->json($response);
    }
}
