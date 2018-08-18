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
<title>修改用户</title>
</head>
<body>
<div class="pd-20">
  <div class="Huiform">
    <form action="{{ route("user_update") }}" method="post" enctype="multipart/form-data">
      <table class="table table-bg">
        <tbody>
        @foreach($country as $val)
          <tr>
            <th width="100" class="text-r"><span class="c-red">*</span> 运动员姓名：</th>
            <td><input type="text" style="width:200px" class="input-text" value="{{ $val -> user_name }}" placeholder="" id="user_name" name="user_name" datatype="*2-16" nullmsg="用户名不能为空"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 性别：</th>
            <td>
              @if($val -> sex == 1)
                <label>
                <input name="sex" type="radio" id="six_1" checked  value="1" >
                男</label>
              <label>
                <input type="radio" name="sex"  value="2" id="six_2" >
                女</label>
                @else($val -> sex == 2)
                  <label>
                    <input name="sex" type="radio" id="six_1"   value="1" >
                    男</label>
                  <label>
                    <input type="radio" name="sex"  value="2"  checked id="six_2" >
                    女</label>
                @endif

            </td>
          </tr>
          <tr>
              <th class="text-r"><span class="c-red">*</span> 年龄：</th>
              <td><input type="text" style="width:300px" class="input-text" value="{{ $val -> age }}" placeholder="" id="user-tel" name="age"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 国别：</th>
            <td><input type="text" style="width:300px" class="input-text" value="{{ $val -> state }}" placeholder="" id="user-tel" name="state"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 执拍手：</th>
            <td><input type="text" style="width:300px" class="input-text" value="{{ $val -> hand }}" placeholder="" id="user-tel" name="hand"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 直横拍：</th>
            <td><input type="text" style="width:300px" class="input-text" value="{{ $val -> bat }}" placeholder="" id="user-tel" name="bat"></td>
          </tr>
          <tr>
            <th class="text-r"><span class="c-red">*</span> 打发：</th>
            <td><input type="text" style="width:300px" class="input-text" value="{{ $val -> play }}" placeholder="" id="user-tel" name="play"></td>
          </tr>
          <tr>
            <th class="text-r">头像：</th>
            <td><input type="file"  class="" name="" multiple></td>
          </tr>
          <tr>
            <th></th>
            <td><button class="btn btn-success radius" type="submit"><i class="icon-ok"></i> 确定</button> <button class="btn btn-warning radius" type="reset">重置</button></td>
            <td><input type="hidden" name="ac" value="upload"></td>
          </tr>
            @endforeach
        {{ csrf_field() }}
        </tbody>
      </table>
    </form>
  </div>
</div>
<script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/Validform_v5.3.2_min.js"></script> 
<script type="text/javascript" src="js/H-ui.js"></script> 
<script type="text/javascript" src="js/H-ui.admin.js"></script>
<script type="text/javascript">
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