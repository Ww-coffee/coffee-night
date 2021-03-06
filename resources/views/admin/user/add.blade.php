<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript" src="http://libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
<script type="text/javascript" src="http://cdn.bootcss.com/css3pie/2.0beta1/PIE_IE678.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/admin/static/h-ui/css/H-ui.css"/>
<link type="text/css" rel="stylesheet" href="/admin/static/h-ui/css/H-ui.admin.css"/>
<link type="text/css" rel="stylesheet" href="/admin/static/h-ui/font/font-awesome.min.css"/>
<!--[if IE 7]>
<link href="http://www.bootcss.com/p/font-awesome/assets/css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
<![endif]-->
<title>添加用户</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="{{ route('user_add') }}" method="post" enctype="multipart/form-data" id="from-add-data">
      <table class="table table-bg">
        <tbody>
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 运动员姓名：</th>
            <td>
            <input type="text" style="width:200px" class="input-text" value="" placeholder="" id="user-name" name="user_name" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 性别：</th>
            <td>

                <label>
                <input name="sex" type="radio" id="six_1"  value="1" checked>
                男</label>
              <label>
                <input type="radio" name="sex" value="2" id="six_0" >
                女</label>
            </td>
          </tr>
          <tr>
              <th class="text-r"><span class="c-red">*</span> 年龄：</th>
              <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-tel" name="age"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 国别：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-tel" name="state"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 执拍手：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-tel" name="hand"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 直横拍：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-tel" name="bat"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 打发：</th>
            <td><input type="text" style="width:300px" class="input-text" value="" placeholder="" id="user-tel" name="play"></td>
          </tr>
          <tr>
            <th class="text-r">头像：</th>
            <td><input type="file"  class="" name="filename" multiple></td>
          </tr>
          <tr>
            <th></th>
            <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 提交</button> <button class="btn btn-warning radius" type="reset">重置</button></td>
          </tr>
        </tbody>
      </table>
      {{ csrf_field() }}
    </form>
  </div>
</div>
<script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="js/H-ui.js"></script> 
<script type="text/javascript" src="js/H-ui.admin.js"></script>
<script type="text/javascript" src="/admin/webuploader-0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script src="/admin/lib/createXHR.js"></script>

<script type="text/javascript">
  //引用laravel框架自带js判断输入框内容是否合法

  $("#from-add-data").validate({
      rules:{
          user_name:{
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
              url: "" ,	//提交给自己，可以不写地址
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




$(".Huiform").Validform(); 
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>