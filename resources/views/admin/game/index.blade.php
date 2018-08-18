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
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 比赛管理<span class="c-gray en">&gt;</span> 比赛列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">比赛名称</th>
				<th width="100">比赛日期</th>
				<th width="100">比赛时间</th>
				<th width="90">比赛阶段</th>
				<th width="150">运动员A</th>
				<th width="130">运动员B</th>
				<th width="70">比赛项目</th>
				<th width="70">比赛国家</th>
				<th width="70">比赛城市</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		    @foreach($data as $val)
		    <tr class="text-c">
			    <td width="25"><input type="checkbox" name="" value=""></td>
                <td width="80">{{$val->id}}</td>
				<td width="100">{{$val->game_name}}</td>
				<td width="100">{{$val->game_date}}</td>
				<td width="100">{{$val->game_time}}</td>
				<td width="90">{{$val->game_stage}}</td>
				<td width="150">{{$val->nameA}}</td>
				<td width="130">{{$val->nameB}}</td>
				<td width="70">{{$val->game_project}}</td>
				<td width="70">{{$val->state}}</td>
				<td width="70">{{$val->city}}</td>
				<td width="150">
				   {{-- <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3"> --}}
			         <a href="{{route('gameedit')}}?id={{$val->id}}" class="btn btn-success col-sm-offset-3">编辑</a>
			         {{-- <a href="{{route('gamedel')}}?id={{$val->id}}" class="btn btn-danger col-sm-offset-3">删除</a> --}}
			         <a href="#" onclick="game_del({{$val->id}})" class="btn btn-danger col-sm-offset-3">删除</a>
		           {{-- </div> --}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
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
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});
	
});
/*删除*/
function game_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'get',
			url: '{{route('gamedel')}}?id={{$val->id}}',
			dataType: 'json',
			success: function(data){
					//判断返回值code
					if(data.code == '0'){
						//成功
						layer.msg(data.msg,{icon:1,time:2000},function(){
							var index = parent.layer.getFrameIndex(window.name);
							parent.layer.close(index);
							parent.location.href = parent.location.href;
						});
					}else{
						//失败
						layer.msg(data.msg,{icon:5,time:2000});
					}
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('删除失败!',{icon:5,time:2000});
				}
		});		
	});
}
</script> 
</body>
</html>