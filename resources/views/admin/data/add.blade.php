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
			<select name="game_name" id="game_name"  placeholder="请选择" class="input-text">
			  <option value="">请选择</option>
			  @foreach($mess as $val)
			    <option value="{{$val->game_name}}">{{$val->game_name}}</option>
			  @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>运动员：</label>
		<div class="formControls col-xs-8 col-sm-9">
            <select name="user_name" id="user_name"  placeholder="请选择" class="input-text">
			  <option value="">请选择</option>
			  @foreach($user as $val)
			    <option value="{{$val->user_name}}">{{$val->user_name}}</option>
			  @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">局数：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select name="class" id="class"  class="input-text">
			 <option value="">请选择</option>
			    <option value="1">第一局</option>
			    <option value="2">第二局</option>
			    <option value="3">第三局</option>
			    <option value="4">第四局</option>
			    <option value="5">第五局</option>
			    <option value="6">第六局</option>
			    <option value="7">第七局</option>
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>总得：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="number" class="input-text" value="0"  id="score_first" name="score_first"></input>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>总失：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<input type="number" class="input-text" value="0"  id="score_last" name="score_last"></input>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">发接轮次：</label>
		<div class="formControls col-xs-3 col-sm-3">
			<label>
                <input name="send" type="radio" id="send"  value="发" checked>
                发</label>
              <label>
                <input type="radio" name="send" value="接" id="send" >
                接</label>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">拍数：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select name="bat_number" id="bat_number"  class="input-text">
			 <option value="">请选择</option>
			 @foreach($bat_number as $val)
			  <option value="{{$val->bat_number}}">{{$val->bat_number}}</option>
			 @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">手段：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select name="tool" id="tool"  class="input-text">
			 <option value="">请选择</option>
			  @foreach($tool as $val)
			   <option value="{{$val->tool}}">{{$val->tool}}</option>
			  @endforeach
			</select>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">得失分：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select name="get_lose" id="get_lose"  class="input-text">
			 <option value="">请选择</option>
			 <option value="得">得</option>
			 <option value="失">失</option>
			</select>
		</div>
	</div>
	<!-- 加入csrf -->
	{{csrf_field()}}
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-success radius" type="submit" value="&nbsp;&nbsp;立即提交&nbsp;&nbsp;">
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
	$("#form-admin-add").validate({
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
                type: 'post',
				url: "{{route('dataadd')}}" ,	//提交给相应控制器处理
				success: function(data){
					//判断返回值code
					if(data.code == '0'){
						//成功
						layer.msg(data.msg,{icon:1,time:2000},function(){
							var index = parent.layer.getFrameIndex(window.name);
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