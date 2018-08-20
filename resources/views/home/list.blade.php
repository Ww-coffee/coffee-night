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
   <!-- 列表页欢迎头 开始 -->
   <!-- 列表页面主体 开始 -->
    <div class="layui-fluid lisg_bg">
        <div class="layui-container list_main_conter">
            <fieldset class="layui-elem-field layui-field-title">
                <legend>整场比赛详情</legend>
            </fieldset>
            <div class="layui-container list_main_conter_in">
                  <div class="match_all layui-row">
                       <div class="layui-col-xs3 img_man">
                            <h3 class="name_name">樊振东</h3>
                            <img src="/home/picture/a_.jpg" alt="" class="img_in">
                            <!-- echarts -->
                            <div class="echars_in">
                                <div id="user_a_s" style="width: 250px;height:160px;"></div>
                            </div>
                            <div class="echars_in">
                                <div id="user_a_d" style="width: 250px;height:160px;"></div>
                            </div>
                       </div>
                       <div class="layui-col-xs6 chars_table_center">
                            <!--  ECharts -->
                            <div id="main" class="chars_table">
                                <table class="layui-table">
                                    <thead>
                                    <tr>
                                        <th style="font-size: 20px;text-align: center">失分</th>
                                        <th style="font-size: 20px;text-align: center">得分</th>
                                        <th style="font-size: 20px;text-align: center">指标</th>
                                        <th style="font-size: 20px;text-align: center">得分</th>
                                        <th style="font-size: 20px;text-align: center">失分</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">0</td>
                                        <td style="font-size: 20px">3</td>
                                        <td style="font-size: 20px">发球</td>
                                        <td style="font-size: 20px">7</td>
                                        <td style="font-size: 20px">0</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">18</td>
                                        <td style="font-size: 20px">13</td>
                                        <td style="font-size: 20px">正手</td>
                                        <td style="font-size: 20px">13</td>
                                        <td style="font-size: 20px">23</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">26</td>
                                        <td style="font-size: 20px">19</td>
                                        <td style="font-size: 20px">反手</td>
                                        <td style="font-size: 20px">16</td>
                                        <td style="font-size: 20px">21</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">3</td>
                                        <td style="font-size: 20px">11</td>
                                        <td style="font-size: 20px">侧身</td>
                                        <td style="font-size: 20px">5</td>
                                        <td style="font-size: 20px">6</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">0</td>
                                        <td style="font-size: 20px">4</td>
                                        <td style="font-size: 20px">控制</td>
                                        <td style="font-size: 20px">6</td>
                                        <td style="font-size: 20px">2</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">13</td>
                                        <td style="font-size: 20px">16</td>
                                        <td style="font-size: 20px">发抢段</td>
                                        <td style="font-size: 20px">22</td>
                                        <td style="font-size: 20px">15</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">22</td>
                                        <td style="font-size: 20px">22</td>
                                        <td style="font-size: 20px">接抢段</td>
                                        <td style="font-size: 20px">19</td>
                                        <td style="font-size: 20px">16</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">7</td>
                                        <td style="font-size: 20px">6</td>
                                        <td style="font-size: 20px">转换段</td>
                                        <td style="font-size: 20px">2</td>
                                        <td style="font-size: 20px">11</td>
                                    </tr>
                                                                        <tr style="text-align: center;height: 50px;">
                                        <td style="font-size: 20px">5</td>
                                        <td style="font-size: 20px">8</td>
                                        <td style="font-size: 20px">相持段</td>
                                        <td style="font-size: 20px">4</td>
                                        <td style="font-size: 20px">10</td>
                                    </tr>
                                                                        </tbody>
                                </table>
                            </div>
                       </div>
                       <div class="layui-col-xs3 img_man">
                            <h3 class="name_name">JoaoGERALDO</h3>
                            <img src="/home/picture/b_.jpg" alt="" class="img_in">
                            <div class="echars_in">
                                <div id="user_b_d" style="width: 250px;height:160px;"></div>
                            </div>
                            <div class="echars_in">
                                <div id="user_b_s" style="width: 250px;height:160px;"></div>
                            </div>
                       </div>
                  </div>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>各板得失分及得分率</legend>
            </fieldset>
            <div class="layui-container list_main_conter_in defen">
                <div class="match_all layui-row">
                    <div class="layui-col-xs6">
                        <div id="user_a_zhu" style="width: 500px;height:410px;"></div>
                    </div>
                    <div class="layui-col-xs6 margin0">
                        <div id="user_b_zhu" style="width: 500px;height:400px;"></div>
                    </div>
                </div>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>各段得失分及雷达图</legend>
            </fieldset>
            <div class="layui-container list_main_conter_in defen">
                <div class="match_all layui-row">
                    <div class="layui-col-xs6">
                        <div id="duan_leida" style="width: 440px;height:400px;"></div>
                    </div>
                    <div class="layui-col-xs6 margin0">
                        <div id="duan_skill" style="width: 440px;height:400px;"></div>
                    </div>
                </div>
            </div>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>每局得分趋势图</legend>
            </fieldset>
            <div class="layui-container list_main_conter_in defen">
                <div class="match_all layui-row">
                    <form class="layui-form" action="">

                        <div class="layui-form-item">
                            <label class="layui-form-label">选择局数</label>
                            <div class="layui-input-inline">
                                <select name="class" lay-verify="required">
                                    <option value=""></option>

                                    <option value="1">第一局</option>
                                    <option value="2">第二局</option>
                                    <option value="3">第三局</option>
                                    <option value="4">第四局</option>
                                    <option value="5">第五局</option>
                                    <option value="6">第六局</option>
                                    <option value="7">第七局</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <button class="layui-btn" id="submitButton" lay-submit lay-filter="formDemo">立即提交</button>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="23">
                        <input type="hidden" name="mess_id" value="16">
                    </form>

                    <div class="layui-col-xs6" style="width: 100%">
                        <div id="danju" style="width: 100%;height:400px;"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   <!-- 列表页面主体 结束 -->
  <footer class="footer">
         <p>XXXXX有限公司</p>
  </footer>
   <script src="/home//home//home/js/echarts.simple.min.js"></script>
   <script src="/home//home//home/js/jquery.js"></script>
   <script src="/home//home//home/js/layui.all.js"></script>

</body>
<!--前4个统计图-->
<script type="text/javascript">
    // 用户1失分比例
    var myChart = echarts.init(document.getElementById('user_a_d'));

    // 指定图表的配置项和数据
    var option = {
        title : {
            text: '各段失分比例',

            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{b} : {c} ({d}%)"
        },

        series : [
            {
                name: '',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:13, name:'发抢段'},
                    {value:22, name:'接抢段'},
                    {value:7, name:'转换段'},
                    {value:5, name:'相持段'},

                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };


    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    //用户1得分比例
    var myChart1 = echarts.init(document.getElementById('user_a_s'));

    // 指定图表的配置项和数据
    var option = {
        title : {
            text: '各段得分比例',

            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{b} : {c} ({d}%)"
        },

        series : [
            {
                name: '',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:16, name:'发抢段'},
                    {value:22, name:'接抢段'},
                    {value:6, name:'转换段'},
                    {value:8, name:'相持段'},

                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };


    // 使用刚指定的配置项和数据显示图表。
    myChart1.setOption(option);


    //用户2得分比例
    var myChart2 = echarts.init(document.getElementById('user_b_d'));

    // 指定图表的配置项和数据
    var option = {
        title : {
            text: '各段得分比例',

            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{b} : {c} ({d}%)"
        },

        series : [
            {
                name: '',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:22, name:'发抢段'},
                    {value:19, name:'接抢段'},
                    {value:2, name:'转换段'},
                    {value:4, name:'相持段'},

                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };


    // 使用刚指定的配置项和数据显示图表。
    myChart2.setOption(option);

    // 用户1失分比例
    var myChart3 = echarts.init(document.getElementById('user_b_s'));

    // 指定图表的配置项和数据
    var option = {
        title : {
            text: '各段失分比例',

            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{b} : {c} ({d}%)"
        },

        series : [
            {
                name: '',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:[
                    {value:15, name:'发抢段'},
                    {value:16, name:'接抢段'},
                    {value:11, name:'转换段'},
                    {value:10, name:'相持段'},

                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };


    // 使用刚指定的配置项和数据显示图表。
    myChart3.setOption(option);
</script>

<!---->
<script>

    var my1 = echarts.init(document.getElementById('user_a_zhu'));

    option = {
        title : {
            text: '樊振东各板得失分及得分率',
            y:'bottom',
            x:'center'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                crossStyle: {
                    color: '#999'
                }
            }
        },
        legend: {
            data:['得分','失分','得分率']
        },
        xAxis: [
            {
                type: 'category',
                data: ['发球','接发球','第三板','第四板','第五版','第六版','六板后'],
                axisPointer: {
                    type: 'shadow'
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: '分数',
                min: 0,
                max: 15,
                interval: 1,
                axisLabel: {
                    formatter: '{value}'
                }
            },
            {
                type: 'value',
                name: '得分率',
                min: 0,
                max: 100,
                interval: 10,
                axisLabel: {
                    formatter: '{value} %'
                }
            }
        ],
        series: [
            {
                name:'得分',
                type:'bar',
                data:[3,15,13,7,4,2,8]
            },
            {
                name:'失分',
                type:'bar',
                data:[0,7,13,15,6,1,5]
            },
            {
                name:'得分率',
                type:'line',
                yAxisIndex: 1,
                data:[100,68.181818181818,50,31.818181818182,40,66.666666666667,61.538461538462]
            }
        ]
    };
    my1.setOption(option);
</script>

<script>

    var my2 = echarts.init(document.getElementById('user_b_zhu'));

    option = {
        title : {
            text: 'JoaoGERALDO各板得失分及得分率',
            y:'bottom',
            x:'center'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                crossStyle: {
                    color: '#999'
                }
            }
        },
        legend: {
            data:['得分','失分','得分率']
        },
        xAxis: [
            {
                type: 'category',
                data: ['发球','接发球','第三板','第四板','第五版','第六版','六板后'],
                axisPointer: {
                    type: 'shadow'
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: '分数',
                min: 0,
                max: 15,
                interval: 1,
                axisLabel: {
                    formatter: '{value}'
                }
            },
            {
                type: 'value',
                name: '得分率',
                min: 0,
                max: 100,
                interval: 10,
                axisLabel: {
                    formatter: '{value} %'
                }
            }
        ],
        series: [
            {
                name:'得分',
                type:'bar',
                data:[7,13,15,6,1,1,4]
            },
            {
                name:'失分',
                type:'bar',
                data:[0,3,15,13,7,4,10]
            },
            {
                name:'得分率',
                type:'line',
                yAxisIndex: 1,
                data:[100,81.25,50,31.578947368421,12.5,20,28.571428571429]
            }
        ]
    };
    my2.setOption(option);
</script>

<!--雷达图-->
<script>
    var my3 = echarts.init(document.getElementById('duan_leida'));
    option = {
        title: {
            text: '各段得分率',
            x:'center',
            y:'bottom'
        },
        tooltip: {},
        legend: {
            x:'left',
            data: ['樊振东', 'JoaoGERALDO']

        },
        radar: {
            // shape: 'circle',
            name: {
                textStyle: {
                    color: 'black',
                    backgroundColor: '#999',
                    borderRadius: 6500,
                    padding: [3, 5]
                }
            },
            indicator: [
                { name: '发抢段', max: 100},
                { name: '接抢段', max: 100},
                { name: '转换段', max: 100},
                { name: '相持段', max: 100},
                { name: '综合', max: 100},

            ]
        },
        series: [{
            name: '预算 vs 开销（Budget vs spending）',
            type: 'radar',
            // areaStyle: {normal: {}},
            data : [
                {
                    value : [55.17, 50, 46.15, 61.54, 52.31],
                    name : '樊振东'
                },
                {
                    value : [59.46, 54.29, 15.38, 28.57, 52.89],
                    name : 'JoaoGERALDO'
                }
            ]
        }]
    };
    my3.setOption(option);
</script>
<script>
    var my4 = echarts.init(document.getElementById('duan_skill'));
    option = {
        title: {
            text: '各项技术得分率',
            x:'center',
            y:'bottom'
        },
        tooltip: {},
        legend: {
            x:'left',
            data: ['樊振东', 'JoaoGERALDO']

        },
        radar: {
            // shape: 'circle',
            name: {
                textStyle: {
                    color: 'black',
                    backgroundColor: '#999',
                    borderRadius: 6500,
                    padding: [3, 5]
                }
            },
            indicator: [
                { name: '发球', max: 100},
                { name: '正手', max: 100},
                { name: '反手', max: 100},
                { name: '侧身', max: 100},
                { name: '控制', max: 100},

            ]
        },
        series: [{
            name: '预算 vs 开销（Budget vs spending）',
            type: 'radar',
            // areaStyle: {normal: {}},
            data : [
                {
                    value : [100, 41.94, 42.22, 78.57, 100],
                    name : '樊振东'
                },
                {
                    value : [100, 36.11, 43.24, 45.45, 75],
                    name : 'JoaoGERALDO'
                }
            ]
        }]
    };
    my4.setOption(option);
</script>

<!--单局数据-->
<script>
    var a =[];
    var b =[];
    var keys =[];
        a.push(0)
    keys.push('0')
        a.push(0)
    keys.push('1')
        a.push(0)
    keys.push('2')
        a.push(0)
    keys.push('3')
        a.push(1)
    keys.push('4')
        a.push(2)
    keys.push('5')
        a.push(2)
    keys.push('6')
        a.push(3)
    keys.push('7')
        a.push(4)
    keys.push('8')
        a.push(4)
    keys.push('9')
        a.push(5)
    keys.push('10')
        a.push(6)
    keys.push('11')
        a.push(6)
    keys.push('12')
        a.push(6)
    keys.push('13')
        a.push(7)
    keys.push('14')
        a.push(8)
    keys.push('15')
        a.push(8)
    keys.push('16')
        a.push(8)
    keys.push('17')
        a.push(8)
    keys.push('18')
        b.push(0)
        b.push(1)
        b.push(2)
        b.push(3)
        b.push(3)
        b.push(3)
        b.push(4)
        b.push(4)
        b.push(4)
        b.push(5)
        b.push(5)
        b.push(5)
        b.push(6)
        b.push(7)
        b.push(7)
        b.push(7)
        b.push(8)
        b.push(9)
        b.push(11)
    

    var my5 = echarts.init(document.getElementById('danju'));
    option = {

        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data:['樊振东','JoaoGERALDO']
        },


        xAxis: {
            type: 'category',
            boundaryGap: true,
            data:keys
        },
        yAxis: {
            type: 'category',


        },
        series: [
            {
                name:'樊振东',
                type:'line',
                stack: '总量',
                data:a
            },
            {
                name:'JoaoGERALDO',
                type:'line',
                stack: '总量',
                data:b
            }
        ]
    };
    my5.setOption(option);
    layui.use('form', function(){
            var form = layui.form;

            //监听提交
            form.on('submit(formDemo)', function(data1){


                $.get('index_office?class='+data1.field.class+'&mess_id='+data1.field.mess_id+'&user_id='+data1.field.user_id).done(function (data) {
                    // 填入数据
                    if (data.code==100){layer.msg(data.msg,{icon:2});return false;}
                    my5.setOption({
                        xAxis: {
                            type: 'category',
                            boundaryGap: true,
                            data:data.c
                        },
                        yAxis: {
                            type: 'category',


                        },
                        series: [
                            {
                                name:'樊振东',
                                type:'line',
                                stack: '总量',
                                data:data.a
                            },
                            {
                                name:'JoaoGERALDO',
                                type:'line',
                                stack: '总量',
                                data:data.b
                            }
                        ]
                    });
                });


            });
        });

        document.getElementById('submitButton').onclick = function() {
            // your code here...
            return false;
        };
</script>

</html>