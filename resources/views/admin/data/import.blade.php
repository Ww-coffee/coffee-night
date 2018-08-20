<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico">
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
    <!-- 引入webuploader.css文件 -->
    <link rel="stylesheet" type="text/css" href="/admin/webuploader-0.1.5/webuploader.css">
    <!--[if IE 6]>
<script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <!--/meta 作为公共模版分离出去-->
    <title>导入试题 - H-ui.admin v3.1</title>
    <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>

<body>
    <article class="page-container">
        <form action="" method="post" class="form form-horizontal" id="form-member-add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-3"><span style="color: red;">*</span>文件：</label>
                <div class="formControls col-xs-8 col-sm-9"> 
                    <!-- 替换成webuploader的html示例代码 -->
                    <div id="uploader-demo">
                        <!--用来存放item-->
                        <div id="fileList" class="uploader-list"></div>
                        <div id="filePicker">选择Excel文件</div>
                    </div>
                </div>
            </div>
            <!-- csrf值 -->
            {{csrf_field()}}
            <input type="hidden" name="excelpath" value="" id="excelpath"/>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                </div>
            </div>
        </form>
    </article>
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <!--/_footer 作为公共模版分离出去-->
    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <!-- 引入webuploader.js文件 -->
    <script type="text/javascript" src="/admin/webuploader-0.1.5/webuploader.js"></script>
    <!-- 引入单独的js上传文件（demo） -->
    <script type="text/javascript">
        var _token = "{{csrf_token()}}";
    </script>
    <script type="text/javascript">
    $(function() {
         var $ = jQuery,
            $list = $('#fileList'),
            // Web Uploader实例
            uploader;
            // 初始化Web Uploader
            uploader = WebUploader.create({
            // 追加自定义参数
            formData: {_token:_token},
            // 自动上传。
            auto: true,
            // swf文件路径
            swf: '/admin/webuploader-0.1.5/Uploader.swf',
            // 文件接收服务端
            server: "http://www.game.com/admin/uploader/webuploader",

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#filePicker',
            
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                $percent = $li.find('.progress span');
            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<p class="progress"><span></span></p>')
                        .appendTo( $li )
                        .find('span');
            }
            $percent.css( 'width', percentage * 100 + '%' );
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        // 注意，第二个参数才是ajax的返回值
        uploader.on( 'uploadSuccess', function( file , response ) {
            $( '#'+file.id ).addClass('upload-state-done');
            // 写入隐藏域
            // console.log(response);
            if(response.code =='0'){
                layer.msg(response.msg,{icon: 1,time: 1500});
                $('#excelpath').val(response.filepath);
            }else{
                layer.msg(response.msg,{icon: 2,time: 2500});
            }
        });

        // 文件上传失败，显示上传出错。
        uploader.on( 'uploadError', function( file ) {
            var $li = $( '#'+file.id ),
                $error = $li.find('div.error');
            // 避免重复创建
            if ( !$error.length ) {
                $error = $('<div class="error"></div>').appendTo( $li );
            }
            $error.text('上传失败');
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress').remove();
        });

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form-member-add").validate({
            rules: {
	       excelpath: {
	            required: true, 
                },
                paper_id: {
                    required: true,
                },

            },
            onkeyup: false,
            focusCleanup: true,
            success: "valid",
            submitHandler: function(form) {
                $(form).ajaxSubmit({
					type: 'post',
					url: "{{route('updata')}}" ,	
                    datatype:'json',
					success: function(data){
						//判断返回值code
						if(data== '0'){
							//成功
							layer.msg('导入成功！',{icon:1,time:2000},function(){
								var index = parent.layer.getFrameIndex(window.name);
								// parent.$('.btn-refresh').click();
								parent.location.href = parent.location.href;
								parent.layer.close(index);
							});
						}
                        else{
							layer.msg('导入成功',{icon:1,time:2000});
						}
					},
	                error: function(XmlHttpRequest, textStatus, errorThrown){
						layer.msg('导入失败！',{icon:2,time:2000});
					}
				});
            }
        });
    });
    </script>
    <!--/请在上方写此页面业务相关的脚本-->
</body>

</html>