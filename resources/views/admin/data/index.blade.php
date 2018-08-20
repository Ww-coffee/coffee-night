<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加数据</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i>比赛成绩管理<span class="c-gray en">&gt;</span>比赛数据批量上传<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form class="form form-horizontal" id="form-admin-add" method="post" action="{{route('gameadd')}}">
	  <div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>下载模板：</label>
            <span class="btn btn-success" id="downfile" onclick="data_export()"><i class="Hui-iconfont">&#xe642;</i>下载</span>
     </div>
	 {{-- 添加csrf验证 --}}
	 {{csrf_field()}}
	 <div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>运动员：</label>
		<div class="formControls col-xs-7 col-sm-7">
            <select name="user_name" id="user_name"  placeholder="请选择" class="input-text">
			        @foreach($userdata as $val)
				    <option value="{{$val->id}}">{{$val->user_name}}</option>
					@endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛名称：</label>
		<div class="formControls col-xs-7 col-sm-7">
            <select name="game_name" id="game_name"  placeholder="请选择" class="input-text">
				     @foreach($messdata as $val)
				     <option value="{{$val->id}}">{{$val->game_name}}</option>
					 @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>数据上传：</label>
            <span class="btn btn-success" id="uploadfile" onclick="data_import('导入数据','{{route('updata')}}','800','500')"><i class="Hui-iconfont">&#xe642;</i>上传</span>
    </div>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	{{-- <div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-success radius" type="submit" value="&nbsp;&nbsp;立即提交&nbsp;&nbsp;">
			<input class="btn btn-default radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
			<input type="hidden" id="id" name="id" value="">
		</div>
	</div> --}}
	</form>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
//数据导出：数据模板下载
function data_export(){
	// 只需要将地址跳转到导出页面即可
	location.href = "{{route('downdata')}}";
}
//数据导入：数据批量导入
function data_import(title,url,w,h){
	layer_show(title,url,w,h);
}
// jQuery页面载入事件
$(function(){
	// dt初始化
	$('table').DataTable({
		// "ordering": false, // 禁止排序
		"columnDefs": [{ "orderable": false, "targets": 0 }],//禁止第1列排序
		"order": [[ 1, "desc" ]]	//指定第2列排序，默认为降序排列
	});
});
</script>
</body>
</html>