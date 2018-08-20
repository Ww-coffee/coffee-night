<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <!-- 引入Layui样式 -->
     <link rel="stylesheet" href="/home/css/layui.css" media="all">
    <link rel="stylesheet" href="/home/css/index.css">
</head>
<body>
    <!-- 导航模块 开始 -->
    <div class="layui-container nav_main">    
        <div class="layui-row">
            <div class="layui-col-xs8">
                <div class="layui-col-xs6">
                    <a href="/">
                        <img src="/home/picture/logo_bjtydx.png" alt="">
                    </a>
                </div>
                <div class="layui-col-xs6">
                    <a href="/">
                        <img src="/home/picture/ittf_logo.png" alt="">
                    </a>
                </div>
            </div>
            <!--<div class="layui-col-xs4 nav_lag">
                <div class="layui-inline">
                    <div class="layui-input-inline">
                        <select name="lang">
                            <option value="中文">中文</option>
                             <option value="EN">EN</option>
                        </select>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
   <!-- 导航模块结束 -->
   <!-- 轮播模块 开始 -->
    <div class="layui-carousel" id="lunbo1">
        <div carousel-item>
            <div class="lunbo">
                <img src="/home/picture/banner_1.jpg" alt="">
            </div>
            <div class="lunbo">
                <img src="/home/picture/banner_1.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- 轮播模块 结束 -->
    <!-- 关于我们模块 开始 -->
    <div class="layui-container margin30">
        <fieldset class="layui-elem-field layui-field-title">
            <legend>关于我们</legend>
        </fieldset>
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-body">
                   <p>
                         卡片式面板面板通常用于非白色背景色的主体内 卡片式面板面板通常用于非白色背景色的主体内 卡片式面板面板通常用于非白色背景色的主体内 卡片式面板面板通常用于非白色背景色的主体内 卡片式面板面板通常用于非白色背景色的主体内 卡片式面板面板通常用于非白色背景色的主体内
                        卡片式面板面板通常用于非白色背景色的主体内 卡片式面板面板通常用于非白色背景色的主体内
                   </p>
                </div>
            </div>
        </div>
    </div>
    <!-- 关于我们模块 结束 -->
    <!-- 查询赛事 开始-->
    <div class="layui-fluid xinkon_bg">
         <div class="layui-container list_bg_ahp">
            <fieldset class="layui-elem-field layui-field-title">
                <legend>搜索你喜欢的赛事</legend>
            </fieldset>
            <div class="layui-row">
                <form class="layui-form">
                <div class="demoTable" >
                    {{-- <div class="layui-inline layui-col-xs3"> <!-- 注意：这一层元素并不是必须的 -->
                        <input type="text" class="layui-input" placeholder="比赛年/月份" id="demoReload">
                    </div> --}}
                    <div class="layui-inline layui-col-xs3">
                        <select name="game_name" lay-verify="" lay-search id="demoReload1">
                            <option value="">请选择比赛年/月份</option>
                            <option value="208/08">2018/08</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify="" lay-search id="demoReload1">
                            <option value="">比赛赛事</option>
                            <option value="2018年世锦赛团体小组赛">2018年世锦赛团体小组赛</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify="" lay-search id="demoReload2">
                            <option value="">举 办 地</option>
                            <option value="北京">北京</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify=""lay-search id="demoReload3">
                            <option value="">运动员A </option>
                            <option value="23">樊振东</option>
                            <option value="24">JoaoGERALDO</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify=""lay-search id="demoReload4">
                            <option value="">运动员B</option>
                            <option value="23">樊振东</option>
                            <option value="24">JoaoGERALDO</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify=""lay-search id="demoReload5">
                            <option value="">执拍手</option>
                            <option value="左手">左手</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify=""lay-search id="demoReload6">
                            <option value="">打法类型</option>
                            <option value="快攻结合弧圈">快攻结合弧圈</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify=""lay-search id="demoReload7">
                            <option value="">直横拍</option>
                            <option value="横拍">横拍</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify="" lay-search id="demoReload8">
                            <option value="">比赛阶段</option>
                            <option value="小组赛">小组赛</option>
                        </select>
                    </div>
                    <div class="layui-inline layui-col-xs3">
                        <select name="city" lay-verify=""lay-search id="demoReload9">
                            <option value="">比赛项目</option>
                            <option value="男单">男单</option>
                        </select>
                    </div>
                    <div class="layui-inline">
                        <button class="layui-btn" data-type="reload">搜索</button>
                        <button type="reset" class="layui-btn layui-btn-primary reloadData">重置</button>
                    </div>
                </div>

                <table class="layui-hide" id="LAY_table_user"  lay-filter="user"></table>

                <script type="text/html" id="barDemo">
                    <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
                </script>
            </div>
         <div class="tables_info">
            <table id="index_table" lay-filter="test"></table>
         </div>
    </div>
    <!--单人多次比赛 开始-->
    <div class="layui-container list_bg_ahp">
        <fieldset class="layui-elem-field layui-field-title">
            <legend>搜索你喜欢的运动员赛事</legend>
        </fieldset>
        <div class="layui-row">
            <div class="demoTable1">
                <div class="layui-inline layui-col-xs3">
                    <select name="city" lay-verify="" lay-search id="sou_one" class="layui-input layui_select">
                        <option value="">所有人</option>
                        <option value="23" class="option_item">樊振东</option>
                        <option value="24" class="option_item">JoaoGERALDO</option>
                    </select>
                </div>
                <div class="layui-inline layui-col-xs1">
                    <button class="layui-btn"  data-type="reload">搜索</button>
                </div>
            </div>
            <div class="layui-btn-group demoTable1">
                <button class="layui-btn" data-type="getCheckData">获取选中行数据</button>
                <!--<button class="layui-btn" data-type="getCheckLength">获取选中数目</button>-->
                <!--<button class="layui-btn" data-type="isAll">验证是否全选</button>-->
            </div>
            <table class="layui-hide" id="table_user" lay-filter="user_one"></table>
        </div>
    </div> 
  </div>
    <!-- 查询赛事 结束-->
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="/home/js/html5.min.js"></script>
      <script src="/home/js/respond.min.js"></script>
    <![endif]-->
      <!-- 引入Layui 脚本 -->
    <script src="/home/js/jquery.js"></script>
    <script src="/home/js/layui.all.js"></script>
    <script>
        layui.use('table', function(){
            var table = layui.table;
            //方法级渲染
            table.render({
                elem: '#LAY_table_user'
                ,url: "/"
                ,cols: [[
                   {field:'id_sort', title: '序号', width:80, sort: true, fixed: true}
                    ,{field:'game_date', title: '比赛时间', width:120}
                    ,{field:'game_name', title: '比赛名称', width:100, sort: true}
                    ,{field:'game_project', title: '比赛项目', width:80}
                    ,{field:'game_stage', title: '比赛阶段', width:80}
                    ,{field:'user_a', title: '运动员A', sort: true, width:80}
                    ,{field:'user_b', title: '运动员B', sort: true, width:80}
                    ,{field:'big', title: '大比分', width:80}
                    ,{field:'small', title: '小比分', sort: true}
                    ,{fixed: 'right', width:78, align:'center', toolbar: '#barDemo'}
                ]]
                ,id: 'testReload'
                ,page: true
                ,height: 550
            });

            var $ = layui.$, active = {
                reload: function(){
                    var demoReload = $('#demoReload');
                    var demoReload1 = $('#demoReload1');
                    var demoReload2 = $('#demoReload2');
                    var demoReload3 = $('#demoReload3');
                    var demoReload4 = $('#demoReload4');
                    var demoReload5 = $('#demoReload5');
                    var demoReload6 = $('#demoReload6');
                    var demoReload7 = $('#demoReload7');
                    var demoReload8 = $('#demoReload8');
                    var demoReload9 = $('#demoReload9');

                    //执行重载
                    table.reload('testReload', {
                        page: {
                            curr: 1 //重新从第 1 页开始
                        }
                        ,where: {
                            key: {
                                'game_date': demoReload.val(),
                                'game_name': demoReload1.val(),
                                'city': demoReload2.val(),
                                'user_id': demoReload3.val(),
                                'user_id2': demoReload4.val(),
                                'hand': demoReload5.val(),
                                'play': demoReload6.val(),
                                'bat': demoReload7.val(),
                                'game_stage': demoReload8.val(),
                                'game_project': demoReload9.val(),
                            }
                        }
                    });
                }
            };

            $('.demoTable .layui-btn').on('click', function(){
                var type = $(this).data('type');
                active[type] ? active[type].call(this) : '';
            });
        });
    </script>
    <script>
        layui.use('laydate', function(){
            var laydate = layui.laydate;

            //执行一个laydate实例
            laydate.render({
                elem: '#demoReload' //指定元素
            });
        });
    </script>
    <script>
        layui.use('table', function(){
            var table = layui.table;

            //监听工具条
            table.on('tool(user)', function(obj){
                var data = obj.data;

                if(obj.event === 'detail'){
                    location.href = '/index_list.html'+'?mess_id='+data.mess_id
                } else if(obj.event === 'del'){
                    layer.confirm('真的删除行么', function(index){
                        obj.del();
                        layer.close(index);
                    });
                } else if(obj.event === 'edit'){
                    layer.alert('编辑行：<br>'+ JSON.stringify(data))
                }
            });
        });
        layui.use('form', function(){
            var form = layui.form;

            //监听提交
            form.on('submit(formDemo)', function(data){
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
        $(document).ready(function(){
            $("form").submit(function(e){
                e.preventDefault();

            });
        });
        $('.reloadData').on('click',function () {
            layui.table.render({
                elem: '#LAY_table_user'
                ,url: "/index_api.html"
                ,cols: [[
                    {field:'id_sort', title: '序号', width:80, sort: true, fixed: true}
                    ,{field:'game_date', title: '比赛时间', width:120}
                    ,{field:'game_name', title: '比赛名称', width:100, sort: true}
                    ,{field:'game_project', title: '比赛项目', width:80}
                    ,{field:'game_stage', title: '比赛阶段', width:80}
                    ,{field:'user_a', title: '运动员A', sort: true, width:80}
                    ,{field:'user_b', title: '运动员B', sort: true, width:80}
                    ,{field:'big', title: '大比分', width:80}
                    ,{field:'small', title: '小比分', sort: true}
                    ,{fixed: 'right', width:78, align:'center', toolbar: '#barDemo'}
                ]]
                ,id: 'testReload'
                ,page: true
                ,height: 500
            });
        })
    </script>
 <!-- 轮播 -->
 <script>
    layui.use('carousel', function () {
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#lunbo1'
            , width: '100%' //设置容器宽度
            , arrow: 'always' //始终显示箭头
            , height: '600px'
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
  <footer class="footer">
         <p>XXXXX有限公司</p>
  </footer>

</body>
<script>
    layui.use('table', function(){
        var table = layui.table;
//监听表格复选框选择
        table.on('checkbox(user_one)', function(obj){

        });
        //方法级渲染
        table.render({
            elem: '#table_user'
            ,url: '/datainit'
            ,cols: [[
                {checkbox: true, fixed: true}
                ,{field:'id_sort', title: '序号', width:80, sort: true, fixed: true}
                ,{field:'game_date', title: '比赛时间', width:120}
                ,{field:'game_name', title: '比赛名称', width:100, sort: true}
                ,{field:'game_project', title: '比赛项目', width:80}
                ,{field:'game_stage', title: '比赛阶段', width:80}
                ,{field:'user_a', title: '运动员A', sort: true, width:80}
                ,{field:'user_b', title: '运动员B', sort: true, width:80}
                ,{field:'big', title: '大比分', width:80}
                ,{field:'small', title: '小比分', sort: true}

            ]]
            ,id: 'one'
            ,page: true
            ,height: 550
        });

        var $ = layui.$, active = {
            reload: function(){
                var demoReload = $('#sou_one');

                //执行重载
                table.reload('one', {
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    ,where: {
                        key: {
                            id: demoReload.val()
                        }
                    }
                });
            },
            getCheckData: function(){ //获取选中数据

                var checkStatus = table.checkStatus('one')
                    ,data = checkStatus.data;
                if (data==''){
                    layer.msg('没有选择用户',{icon:2})
                    return false;
                }
                if (data[0].check=='false'){
                    layer.msg('没有删选用户',{icon:2})
                    return false;
                }
                var arr = [];
                $.each(data,function (k,v) {
                    arr.push(v.mess_id)
                })
                location.href ='/one_list_all.html?mess_id='+arr+'&user_id='+data[0].user_name_id

            }
            ,getCheckLength: function(){ //获取选中数目
                var checkStatus = table.checkStatus('one')
                    ,data = checkStatus.data;
                layer.msg('选中了：'+ data.length + ' 个');
            }
            ,isAll: function(){ //验证是否全选
                var checkStatus = table.checkStatus('one');
                layer.msg(checkStatus.isAll ? '全选': '未全选')
            }
        };



        $('.demoTable1 .layui-btn').on('click', function(){
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
    });
</script>
</html>