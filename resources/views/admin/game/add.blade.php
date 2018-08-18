<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>添加流 - 流管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>比赛管理 <span class="c-gray en">&gt;</span>比赛添加<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" method="post" action="{{route('gameadd')}}">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="请输入比赛名称" id="game_name" name="game_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛日期：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="date" class="input-text" value=""  id="game_date" name="game_date">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">比赛时间：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="time" class="input-text" value=""  id="game_time" name="game_time">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛阶段：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="请输入" id="game_stage" name="game_stage">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>运动员A：</label>
		<div class="formControls col-xs-8 col-sm-9">
			{{-- <input type="text" class="input-text" value="" placeholder="请选择" id="user_a" name="user_a"> --}}
            <select name="user_a" id="user_a"  placeholder="请选择" class="input-text">
			  <option value="">请选择或输入</option>
			  @foreach($data as $val)
			  <option value="{{$val->id}}">{{$val->user_name}}</option>
			  @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>运动员B：</label>
		<div class="formControls col-xs-8 col-sm-9">
			{{-- <input type="text" class="input-text" value="" placeholder="请选择" id="user_b" name="user_b"> --}}
			<select name="user_b" id="user_b"  class="input-text">
			 <option value="">请选择或输入</option>
			  @foreach($data as $val)
			  <option value="{{$val->id}}">{{$val->user_name}}</option>
			  @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛项目：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="请输入" id="game_project" name="game_project">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">比赛国家：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="请输入比赛国家" id="state" name="state">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">比赛城市：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="请输入比赛城市" id="city" name="city">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">公开赛：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="show" size="1">
				<option value="1">是</option>
				<option value="0">否</option>
			</select>
			</span> 
		</div>
	</div>
	<!-- 加入csrf -->
	{{csrf_field()}}
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-success radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			<input class="btn btn-primary radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	//判断运动员A和B是否是同一个人，是同一人则提示
	$('#user_b').blur(function(){
		if($('#user_a').val()==$('#user_b').val()){
			layer.msg("对手不能是自己，请重新选择",{icon:5,time:2000});
			$('#user_b').foucs();
		}
	});
	$('#user_a').blur(function(){
		if($('#user_b').val()==$('#user_a').val()){
			layer.msg("对手不能是自己，请重新选择",{icon:5,time:2000});
		}
	});
	/*$('form').ajax(){
		        type: 'post',
				url: "{{route('gameadd')}}" ,	//提交给相应控制器处理
				success: function(data){
					//判断返回值code
					if(data.code == '0'){
						//成功
						layer.msg(data.msg,{icon:1,time:2000},function(){
							var index = parent.layer.getFrameIndex(window.name);
							// parent.$('.btn-refresh').click();
							parent.location.href = parent.location.href;
							parent.layer.close(index);
						});
					}else{
						//失败
						layer.msg(data.msg,{icon:5,time:2000});
					}
					alert("111");
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('添加失败!',{icon:5,time:2000});
				}
	}*/
	$("#form-admin-add").validate({
		rules:{
			stream_name:{
				required:true,
				minlength:4,
				maxlength:64
			},
			status:{
				required:true,
			},
			sort:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
                type: 'post',
				url: "{{route('gameadd')}}" ,	//提交给相应控制器处理
				success: function(data){
					//判断返回值code
					if(data.code == '0'){
						//成功
						layer.msg(data.msg,{icon:1,time:2000},function(){
							var index = parent.layer.getFrameIndex(window.name);
							// parent.$('.btn-refresh').click();
							parent.location.href = parent.location.href;
							parent.layer.close(index);
						});
					}else{
						//失败
						layer.msg(data.msg,{icon:5,time:2000});
					}
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('添加失败!',{icon:5,time:2000});
				}
			});
		}
	});

});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>