<!--_meta 作为公共模版分离出去-->
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
<!--/meta 作为公共模版分离出去-->

<title>运动员管理</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="{{ route('usdata_gadd') }}" method="post" class="form form-horizontal" id="form-admin-role-add" name="gadd">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>比赛名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="game_name" name="game_name" style="width: 500px;">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
				<button type="reset" class="btn btn-primary radius" >重置</button>
			</div>
		</div>
		{{ csrf_field() }}
	</form>
		<table class="table table-border table-bordered table-hover table-bg table-sort" style="margin-top: 20px">
			<thead>
			<tr class="text-c">
				<th width="50">序号</th>
				<th width="80">比赛时间</th>
				<th width="80">比赛名称</th>
				<th width="80">比赛项目</th>
				<th width="80">比赛阶段</th>
				<th width="80">运动员A</th>
				<th width="80">运动员B</th>
				<th width="80">大比分</th>
				<th width="80">小比分</th>
				<th width="80">状态</th>
				<th width="150"></th>
			</tr>
			</thead>
			<tbody>
			@foreach($data as $val)
			<tr class="text-c">
				<td>{{ $val ->id }}</td>
				<td>{{ $val -> game_date }}</td>
				<td>{{ $val -> game_name }}</td>
				<td>{{ $val -> game_project }}</td>
				<td>{{ $val -> game_stage }}</td>
				<td>{{ $val -> user_name }}</td>
				<td>{{ $val -> user_name }}</td>
				<td>{{ $val -> big_left}}</td>
				<td>{{ $val -> big_right}}</td>
				<td>{{ $val -> show }}</td>
				<td>
					<a href="{{ route('usdata_update') }}?id={{ $val -> id }}"><input type="button" class="btn btn-warning radius" value="修改"></a>
					<a href="{{ route('usdata_delete') }}?id={{ $val -> id }}"><input type="button" class="btn btn-danger radius" value="删除"></a>
				</td>

			</tr>
			@endforeach
			</tbody>
		</table>

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
<script type="text/javascript" src="/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/admin/lib/laypage/1.2/laypage.js"></script>

<script type="text/javascript">
    $(function(){
        $('.table-sort').dataTable({
            "aaSorting": [[ 0, "asc" ]],//默认第几个排序
            //"bStateSave": true,//状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[]}// 制定列不参与排序
            ]
        });
        $("#form-admin-role-add").validate({
            rules:{
                game_name:{
                    required:true,
                    minlength:4,
                    maxlength:40
                },

            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                $(form).ajaxSubmit({
                    type: 'post',
                    url: "route('usdata_gadd')" ,	//提交给自己，可以不写地址
                    success: function(data){
                        // 判断是否成功
                        if(data.code == '0'){
                            layer.msg(data.msg,{icon:1,time:2000},function(){
                                // 获取当前弹窗的索引（下标）
                                var index = parent.layer.getFrameIndex(window.name);
                                // parent.$('.btn-refresh').click();
                                parent.location.href = parent.location.href;
                                parent.layer.close(index);
                            });
                        }else{
                            layer.msg(data.msg,{icon:2,time:2000});
                        }
                    },
                    error: function(XmlHttpRequest, textStatus, errorThrown){
                        layer.msg('error!',{icon:1,time:1000});
                    }
                });
            }
        });
    });

</script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>