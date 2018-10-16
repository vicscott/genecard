<?php

echo "
    <html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Welcome to GeneCard</title>
        <link rel=\"icon\" href=\"pic/logo.jpg\" type=\"image/x-icon\"/> 
        <link rel=\"stylesheet\" href=\"https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <script src=\"https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js\"></script>
        <script src=\"https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <style type=\"text/css\" rel=\"stylesheet\">
            .modal-dialog{
                height: auto;
            }
            .modal-content{
                height: auto;
            }
            .dn{
                width:600px;
                height:200px;
                float:left
            }
            .header{
                height:80px;
                width:140px;
                float: left;
            }
            .op{
                width:360px;
                height:80px;
                float: left;
            }
            .op1-in,.op2-in,.op3-in,{
                width: 316px;
                height: 76px;
                position: relative;
                top:3px;
                left:10px;
                
            }
            .sp{
                height:120px;
                width:600px;
                float: left;
            }
            .sp1-in,.sp2-in,.sp3-in{
                margin-left: auto;
                margin-right: auto;
                width: 460px;
                text-align: center;
            }
            .wj-o-in-img{
                width:96px;
                height: 160px;
                float: left;
            }
        .current a {
            font-size: 20px;
        }

        .over {
            display: block;
            position: absolute;
            top: 0px;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            opacity:0;
            z-index: 1000;
        }

        .layout {
            display: block;
            position: absolute;
            top: 20%;
            left: 20%;
            width: 20%;
            height: 20%;
            z-index: 1001;
            text-align:center;
        }
        .confirm1,.confirm2{
            border-radius: 20px;
            width: 300px;
            height: 120px;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
        }
        </style>
        <script type=\"text/javascript\">
            setTimeout(showMain,\"3000\");
            function showMain()
            {
                document.getElementById(\"over\").style.display = \"none\";
                document.getElementById(\"layout\").style.display = \"none\";
                document.getElementById('game').style.display= 'block';
            }
        </script>
    </head>
    <body>
    ";
include 'main2.php';
echo "<img src='pic/enbkg.jpg' style='width: 100%;height:100%;position: fixed;z-index: -9999;'>    
    <div id=\"over\" class=\"over\"></div>
            <div id=\"layout\" class=\"layout\">
                <img src=\"pic/loading.gif\" />
                <div style='margin-left: 350px;'>
                    <p style='font-size: 50px; font-family: 幼圆'>Loading.......</p>
                </div>
            </div>";
echo "<div id =\"game\" style=\"display:none; width:1800px; height:700px;  margin: auto; position: absolute; top: 0;left: 0;right: 0;bottom: 0; \" >
        <div class=\"dn\" id='jn' style=\"background-color: none;\">
            <div class=\"header\"><a data-toggle=\"modal\" data-target=\"#myModaldn1\"><img src='pic/jian.jpg' width='120' height='180'></a></div>
            <div class=\"modal fade\" id=\"myModaldn1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/jian.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class='op' style='background-color: #bed4ae;position: absolute;opacity: 0.4;margin-left: 130px;z-index: -55'>
            <p style='font-size: 10px;color: #623c27;float: right'>HAND</p>       
            </div>
            <div class=\"op\">
                <div class=\"op1-in\">";

for ($i = 0; $i < count($dn1_sp); $i++) {
    echo "<img name=" . $dn1_sp[$i]['name'] . " src='pic/bkg.jpg' width=\"36\" height=\"60\">";
}//打印电脑1手牌
echo "            </div>
            </div>
            <div class=\"sp\">
                <div class=\"sp1-in\">";
for ($i = 0; $i < count($dn1_mp); $i++) {
    echo "<img name=" . $dn1_mp[$i]['name'] . " src=" . $dn1_mp[$i]['url'] . " width=\"66\" height=\"110\" onmouseover='big(this)' onmouseout=\"small(this,tid)\">";
}
echo "           </div>
            </div>
        </div>
        <div class=\"dn\" id='zg' style=\"background-color: none\">
            <div class=\"header\"><a data-toggle=\"modal\" data-target=\"#myModaldn2\"><img src='pic/zhou.jpg' width='120' height='180'></a></div>
            <div class=\"modal fade\" id=\"myModaldn2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/zhou.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class='op' style='background-color: #bed4ae;position: absolute;opacity: 0.4;margin-left: 130px;z-index: -55'>
            <p style='font-size: 10px;color: #623c27;float: right'>HAND</p>       
            </div>
            <div class=\"op\">
                <div class=\"op2-in\">";
for ($i = 0; $i < count($dn2_sp); $i++) {
    echo "<img  name=" . $dn2_sp[$i]['name'] . " src='pic/bkg.jpg' width=\"36\" height=\"60\">";
}
echo "            </div>
            </div>
            <div class=\"sp\">
                <div class=\"sp2-in\">";
for ($i = 0; $i < count($dn2_mp); $i++) {
    echo "<img name=" . $dn2_mp[$i]['name'] . " src=" . $dn2_mp[$i]['url'] . " width=\"66\" height=\"110\" onmouseover='big(this)' onmouseout=\"small(this,tid)\">";
}
echo "            </div>
            </div>
        </div>
        <div class=\"dn\" id='xmm' style=\"background-color: none\">
            <div class=\"header\"><a data-toggle=\"modal\" data-target=\"#myModaldn3\"><img src='pic/xiao.jpg' width='120' height='180'></a></div>
            <div class=\"modal fade\" id=\"myModaldn3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/xiao.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class='op' style='background-color: #bed4ae;position: absolute;opacity: 0.4;margin-left: 130px;z-index: -55'>
            <p style='font-size: 10px;color: #623c27;float: right'>HAND</p>       
            </div>
            <div class=\"op\">
                <div class=\"op3-in\">";
for ($i = 0; $i < count($dn3_sp); $i++) {
    echo "<img  name=" . $dn3_sp[$i]['name'] . " src='pic/bkg.jpg' width=36px; height=60px>";
}
echo "            </div>
            </div>
            <div class=\"sp\">
                <div class=\"sp3-in\">";
for ($i = 0; $i < count($dn3_mp); $i++) {
    echo "<img name=" . $dn3_mp[$i]['name'] . " src=" . $dn3_mp[$i]['url'] . " width=\"66\" height=\"110\" onmouseover='big(this)' onmouseout=\"small(this,tid)\">";
}
echo "           </div>
            </div>
        </div>
        <div class=\"left\" style=\"float: left; width: 900px; height:600px;\">
            <div class=\"table\" style=\"width:900px; height:300px; float: left; margin-bottom: 0px; padding-bottom: 0px;z-index: 11\"></div>
            <div id='wj' style=\"width:900px; height:200px; z-index: 555; float: left; text-align: center; padding-top: 0px\">
            <div style='width: 900px;height: 200px;background-color: #bed4ae;opacity: 0.4;position: absolute;z-index: -55;'>
            <div style='float: right'><p style='font-size: 30px;color: #623c27'>HAND</p></div>
            </div>
            <div class=\"wj-s\" style='z-index: 555;'>";
for ($i = 0; $i < count($wj_sp); $i++) {
    echo "<img  name=" . $wj_sp[$i]['name'] . " src=" . $wj_sp[$i]['url'] . " width=\"108\" height=\"180\" style=\"\" onclick = go(this) ondblclick = shuanji(this) onmouseover='big(this)' onmouseout=\"small(this,tid)\">";
}
echo "</div></div>
        </div>
        <div class=\"wj-o\" style=\"width:600px; height:400px; position:relative; margin-top: 100px; float: left; text-align: center;z-index: 11\">
            
            <div class=\"wj-o-in\" style=\"width: 370px; height:380px; margin: 10px auto; position: relative; text-align: center\">";
for ($i = 0; $i < count($wj_mp); $i++) {
    echo "<img  name=" . $wj_mp[$i]['name'] . " src=" . $wj_mp[$i]['url'] . " width='114' height='190' style=\"\" onmouseover='big(this)' onmouseout=\"small(this,tid)\">";
}
echo "       </div>
        </div>
    </div>
    <div id='records' style='display: block;width: 200px; height: 400px; overflow: auto;position: absolute;right: 20px;top: 400px;'></div>
    <div id=\"voice\" style=\"float: right; display: block;\">
            <a href='javascript:record();'>Play records</a>
            <a href=\"javascript:playPause();\"><img src=\"pic/voice.png\" width=\"24\" height=\"25\" id=\"music_btn2\" border=\"0\"></a>
            <img src=\"pic/up.png\" width=\"24\" height=\"25\" onclick=\"document.getElementById('music2').volume+=0.15\">
            <img src=\"pic/down.png\" width=\"24\" height=\"25\" onclick=\"document.getElementById('music2').volume-=0.15\">
            <a href=\"javascript:help();\"><img src=\"pic/help.png\" width=\"24\" height=\"25\" ></a>
        </div>
        
        <div id=\"help\" style=\"background: #777; padding-left: 20px;display: none;overflow: auto; position: absolute;margin-right: auto;margin-left: auto;left: 0;right: 0;top: 100px;width: 500px; height: 700px;z-index:9999\">
            <span id=\"close4\" style=\"font-size: 18px; float: right;font-family: 华文隶书\">close</span>
            <div id=\"jc\" style=\"display:block;width: 100%;height: 100px;\">
                <div><span style=\"font-size: 25px; font-family: Berlin Sans FB Demi\">Basic cards</span></div>
                <div style=\"float: left;\"><a data-toggle=\"modal\" data-target=\"#myModal1\"><img src=\"pic/eJ/neiqiemei.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal2\"><img src=\"pic/eJ/DNAlianjiemei.jpg\" width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal3\"><img src=\"pic/eJ/gujiazaiti.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal4\"><img src=\"pic/eJ/mudijiyin.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal5\"><img src=\"pic/eJ/xijun.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal6\"><img src=\"pic/eJ/PCR.jpg\"  width=\"120px\" height=\"180px\"></a></div>
            </div>

            <div id='gn' style=\"display:block;width: 100%;height: 100px;float: left\">
                <div><span style=\"font-size: 25px; font-family: Berlin Sans FB Demi\">Function cards</span></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal7\"><img src=\"pic/eG/shijunti.jpg\" width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal8\"><img src=\"pic/eG/kangshengsu.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal9\"><img src=\"pic/eG/kangxingjiyin.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal10\"><img src=\"pic/eG/gaowen.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal11\"><img src=\"pic/eG/hesuanshuijiemei.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal12\"><img src=\"pic/eG/ziwaixian.jpg\"  width=\"120px\" height=\"180px\"></a></div>
                <div style=\"float: left\"><a data-toggle=\"modal\" data-target=\"#myModal13\"><img src=\"pic/eG/zhuanyi.jpg\"  width=\"120px\" height=\"180px\"></a></div>
            </div>
            <div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eJ/mudijiyin.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eJ/neiqiemei.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eJ/DNAlianjiemei.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eJ/gujiazaiti.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal5\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eJ/xijun.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eJ/PCR.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal7\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/shijunti.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal8\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/kangshengsu.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal9\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/kangxingjiyin.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal10\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/gaowen.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal11\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/hesuanshuijiemei.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal12\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/ziwaixian.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>
            <div class=\"modal fade\" id=\"myModal13\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <img src=\"pic/eG/zhuanyi.jpg\"  width=\"100%\">
                    </div><!-- /.modal-content -->
                </div>
            </div>

        </div>
        <div>
        <div id='mudijiyin' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%'; onmouseover =\"document.getElementById('mudijiyin').style.display= 'none';\">
            <img src='pic/eJ/mudijiyin.jpg' width='100%'>
        </div>
        <div id='neiqiemei' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('neiqiemei').style.display= 'none';\">
            <img src='pic/eJ/neiqiemei.jpg' width='100%'>
        </div>
        <div id='gujiazaiti' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('gujiazaiti').style.display= 'none';\" >
            <img src='pic/eJ/gujiazaiti.jpg' width='100%'>
        </div>
        <div id='xijun' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('xijun').style.display= 'none';\">
            <img src='pic/eJ/xijun.jpg' width='100%'>
        </div>
        <div id='PCR' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('PCR').style.display= 'none';\">
            <img src='pic/eJ/PCR.jpg' width='100%'>
        </div>
        <div id='DNAlianjiemei' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('DNAlianjiemei').style.display= 'none';\">
            <img src='pic/eJ/DNAlianjiemei.jpg' width='100%'>
        </div>
        <div id='gaowen' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('gaowen').style.display= 'none';\">
            <img src='pic/eG/gaowen.jpg' width='100%'>
        </div>
        <div id='hesuanshuijiemei' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('hesuanshuijiemi').style.display= 'none';\">
            <img src='pic/eG/hesuanshuijiemei.jpg' width='100%'>
        </div>
        <div id='kangshengsu' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('kangshengsu').style.display= 'none';\">
            <img src='pic/eG/kangshengsu.jpg' width='100%'>
        </div>
        <div id='kangxingjiyin' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('kangxingjiyin').style.display= 'none';\">
            <img src='pic/eG/kangxingjiyin.jpg' width='100%'>
        </div>
        <div id='shijunti' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%; ' onmouseover =\"document.getElementById('shijunti').style.display= 'none';\">
            <img src='pic/eG/shijunti.jpg' width='100%'>
        </div>
        <div id='zhuanyi' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('zhuanyi').style.display= 'none';\" >
            <img src='pic/eG/zhuanyi.jpg' width='100%'>
        </div>
        <div id='ziwaixian' style='position:absolute;display: none;width: 20%;left: 80%; top: 40%;' onmouseover =\"document.getElementById('ziwaixian').style.display= 'none';\">
            <img src='pic/eG/ziwaixian.jpg' width='100%'>
        </div>
        </div>
        <div>
            <div id='1' class=\"confirm1\" style=\"display:none;z-index:999;background-color:#a3edca\">
                <h1>You win!</h1>
                <button class=\"btn\" onclick='con(this)'>Sure</button>
            </div>
            <div id='2' class=\"confirm2\" style=\"display:none;z-index:999;background-color:#a3edca\">
                <h1>Continue?</h1>
                <div>
                    <button class=\"btn\" onclick='window.location.reload()'>Of course</button>
                    <button class=\"btn\" onclick=\"window.location.href='index2.html';\" >Back</button>
                </div>
            </div>
            <div id='3' class=\"confirm1\" style=\"display:none;z-index:999;background-color:#a3edca\">
                <h1>舰娘 wins!</h1>
                
                    <button class=\"btn\" onclick='con(this)'>Pity</button>
                
            </div>
            <div id='4' class=\"confirm1\" style=\"display:none;z-index:999;background-color:#a3edca\">
                <h1>周哥 wins!</h1>
                
                    <button class=\"btn\" onclick='con(this)'>Pity</button>
                
            </div>
            <div id='5' class=\"confirm1\" style=\"display:none;z-index:999;background-color:#a3edca\">
                <h1>小妈妈 wins!</h1>
                
                    <button class=\"btn\" onclick='con(this)'>Pity</button>
                
            </div>
        </div>
        <audio id=\"music2\" src=\" A Story You Won't Believe.mp3\"  loop=\"loop\"></audio>
        <div style=\"display:block;color:black;text-align: center;position: fixed;bottom: 0;left: 800px;\"><p>Copyright © 2018 UESTC-China. All rights reserved.</p></div>
    ";


echo "<script type='text/javascript' src='jquery.js'></script>";
echo "</body><script type='text/javascript'>
                alert('Hold down Ctrl and scroll down to zoom in or out to fit your screen');
                function playPause() {
                    var music = document.getElementById('music2');
                    if (music.paused){
                        music.play();
                
                    }
                    else{
                        music.pause();
                    }
                }
                function record() {
                      var record = document.getElementById('records')
                      if (record.style.display == 'block'){
                        record.style.display = 'none'
                      }else{
                        record.style.display = 'block'
                      }
                }
                function help() {
                   var he = document.getElementById('help');
                   he.style.display= 'block';
                }
                function con(data) {
                  var it = document.getElementById(data.parentElement.id);
                  it.style.display = 'none';
                  var aim = document.getElementById('2');
                  aim.style.display = 'block';
                }
                var mask4 = document.getElementById('help');
                close4.onclick =function () {
                    mask4.style.display = 'none';
                    voice.style.display = 'block';
                    lt.style.display ='block';
                    rt.style.display = 'block';
                }
                
                var dn1_sp = " . json_encode($dn1_sp) . ";
                var dn2_sp = " . json_encode($dn2_sp) . ";
                var pdn3_sp = " . json_encode($dn3_sp) . ";
                var pdn1_mp = " . json_encode($dn1_mp) . ";
                var pdn2_mp = " . json_encode($dn2_mp) . ";
                var pdn3_mp = " . json_encode($dn3_mp) . ";
                var wj_mp = " . json_encode($wj_mp) . ";
                var wj_sp = " . json_encode($wj_sp) . ";
                var pz_copy = " . json_encode($pz_copy) . ";
                function delname(arr1,name) {
                  for (var i=0; i<arr1.length; i++){
                    if (arr1[i]['name'] == name){
                        arr1.splice(i,1)
                        return arr1
                    }
                  }
                }//删除数组中名字为name的元素
                function is_exist1(arr2,name) {
                    if (arr2.length == null){
                        return false
                    }
                  for (var j=0; j<arr2.length; j++){
                    if (arr2[j] && arr2[j]['name'] == name){
                        return j+1
                    }	
                  }
                  return false
                }//判断数组中是否有名字为name的元素，有则返回其下标+1(防止返回下标为0导致判断有误)，无则返回false
                function delundefined(arr3){
                    for(var i=0; i<arr3.length; i++){
                        if(arr3[i] == undefined){
                            arr3.splice(i,1)
                        }
                    }
                    return arr3
                }
                function confirm(i){
                    var con = document.getElementById(i).style;
                    con.display = 'block';
                    if(con){
                        throw \"————————\";
                    }
                }
                function big(data){
                    switch(data.name){
                        case('mudijiyin'):
                            tid = setTimeout(function () {
				                document.getElementById('mudijiyin').style.display = 'block'
		                    }, 3000)
                            break;
                        case('xijun'):
                            tid = setTimeout(function () {
				                document.getElementById('xijun').style.display = 'block'
		                    }, 3000)
                            break;
                        case('neiqiemei'):
                            tid = setTimeout(function () {
				                document.getElementById('neiqiemei').style.display = 'block'
		                    }, 3000)
                            break;
                        case('gujiazaiti'):
                            tid = setTimeout(function () {
				                document.getElementById('gujiazaiti').style.display = 'block'
		                    }, 3000)
                            break;
                        case('PCR'):
                            tid = setTimeout(function () {
				                document.getElementById('PCR').style.display = 'block'
		                    }, 3000)
                            break;
                        case('DNAlianjiemei'):
                            tid = setTimeout(function () {
				                document.getElementById('DNAlianjiemei').style.display = 'block'
		                    }, 3000)
                            break;
                        case('gaowen'):
                            tid = setTimeout(function () {
				                document.getElementById('gaowen').style.display = 'block'
		                    }, 3000)
                            break;
                        case('hesuanshuijiemei'):
                            tid = setTimeout(function () {
				                document.getElementById('hesuanshuijiemei').style.display = 'block'
		                    }, 3000)
                            break;
                        case('kangshengsu'):
                            tid = setTimeout(function () {
				                document.getElementById('kangshengsu').style.display = 'block'
		                    }, 3000)
                            break;  
                        case('kangxingjiyin'):
                            tid = setTimeout(function () {
				                document.getElementById('kangxingjiyin').style.display = 'block'
		                    }, 3000)
                            break; 
                        case('shijunti'):
                            tid = setTimeout(function () {
				                document.getElementById('shijunti').style.display = 'block'
		                    }, 3000)
                            break;        
                        case('zhuanyi'):
                            tid = setTimeout(function () {
				                document.getElementById('zhuanyi').style.display = 'block'
		                    }, 3000)
                            break;  
                        case('ziwaixian'):
                            tid = setTimeout(function () {
				                document.getElementById('ziwaixian').style.display = 'block'
		                    }, 3000)
                            break;                               
                    }
                }
                function small(data) {
                    clearTimeout(tid)
                    switch(data.name){
                        case('mudijiyin'):
                            document.getElementById('mudijiyin').style.display ='none'
                            break;
                        case('PCR'):
                            document.getElementById('PCR').style.display ='none'
                            break;
                        case('xijun'):
                            document.getElementById('xijun').style.display ='none'
                            break;
                        case('neiqiemei'):
                            document.getElementById('neiqiemei').style.display ='none'
                            break; 
                        case('gujiazaiti'):
                            document.getElementById('gujiazaiti').style.display ='none'
                            break;  
                        case('DNAlianjiemei'):
                            document.getElementById('DNAlianjiemei').style.display ='none'
                            break; 
                        case('gaowen'):
                            document.getElementById('gaowen').style.display ='none'
                            break; 
                        case('hesuanshuijiemei'):
                            document.getElementById('hesuanshuijiemei').style.display ='none'
                            break; 
                        case('kangshengsu'):
                            document.getElementById('kangshengsu').style.display ='none'
                            break;            
                        case('kangxingjiyin'):
                            document.getElementById('kangxingjiyin').style.display ='none'
                            break;  
                        case('shijunti'):
                            document.getElementById('shijunti').style.display ='none'
                            break;                     
                        case('zhuanyi'):
                            document.getElementById('zhuanyi').style.display ='none'
                            break;
                        case('ziwaixian'):
                            document.getElementById('ziwaixian').style.display ='none'
                            break;    
                    }
                }
                var arr =[]
                for (var k in pz_copy){
                    arr.push(pz_copy[k]);
                }
                var pdn1_sp=[]
                for (var k in dn1_sp){
                    pdn1_sp.push(dn1_sp[k])
                }
                var pdn2_sp=[]
                for (var k in dn2_sp){
                    pdn2_sp.push(dn2_sp[k])
                }
                var i=0
                function warning(){
                    if(pdn1_mp !=='' && pdn1_mp.length ==5 ){
                        alert('FBI WARNING!舰娘 has a step away from success!')
                    }
                    if(pdn2_mp !=='' && pdn2_mp.length ==5 ){
                        alert('ATTENTION!周哥 has a step away from success!')
                    }
                    if(pdn3_mp !=='' && pdn3_mp.length ==5 ){
                        alert('FBI WARNING!小妈妈 has a step away from success!')
                    }
                }
                if(pdn1_mp =='' || pdn1_mp.length ==6 ){
                    window.location.reload()
                }
                if(pdn2_mp =='' || pdn2_mp.length ==6 ){
                    window.location.reload()
                }
                if(pdn3_mp =='' || pdn3_mp.length ==6 ){
                    window.location.reload()
                }
                setTimeout(function(){warning();},3000)  
                function zp1() {
                  $('#wj').css({border:\"none\"});  
                  $('#jn').css({border:\"3px solid gold\"});
                  delundefined(arr)
                  if(arr[i]['class'] == 'jc' && !is_exist1(pdn1_mp,arr[i]['name'])){
                        $('<img>',{
                            name:arr[i]['name'],
                            src:arr[i]['url'],
                            onmouseover:'big(this)',
                            onmouseout:'small(this,tid)'
                         }).css({
                            width:'66px',
                            height:'110px'
                         }).appendTo('.sp1-in')
                         pdn1_mp.push(arr.shift())
                         $('#records').append('舰娘 draws one card<br>')
                         setTimeout(function(){zp1();},500)  
                  }else{
                         $('<img>',{
                           name:arr[i]['name'],
                           src:'pic/bkg.jpg'
                         }).css({
                            width:'36px',
                            height:'60px'
                         }).appendTo('.op1-in')
                         pdn1_sp.push(arr.shift())
                         $('#records').append('舰娘 draws one card<br>')
                  }
                  //判断是否赢牌
                    if(pdn1_mp !=='' && pdn1_mp.length ==6 ){
                        confirm(3)
                    }
                }
                if(pdn3_mp !=='' && pdn3_mp.length ==5 ){
                   alert('ATTENTION!舰娘 has a step away from success!')
                }
                function cp1() {
                    var tag =1 
                    $('<img>',{
                        name:pdn1_sp[i]['name'],
                        src:pdn1_sp[i]['url']
                    }).css({
                        width:'108px',
                        height:'180px'
                    }).appendTo('.table')<!--出电脑1的手牌-->  
                    switch (pdn1_sp[i]['name']){
                       case ('kangshengsu'):
                       if(tag ==1){
                          tag =2;
                          $('#records').append('舰娘 plays antibiotic <br>');
                          if (is_exist1(pdn2_mp,'xijun')){
                                    if (is_exist1(pdn2_sp,'kangxingjiiyin')){
                                        $(\".op2-in\").find(\"img[name='kangxingjiyin']\").remove()//把抗性基因加到牌桌上
                                        alert('周哥 plays resistant gene')
                                        $('#records').append('周哥 plays resistant gene<br>')                      
                                        var num = is_exist1(pdn2_sp,'kangxingjiyin')
                                        arr.push(pdn2_sp[num-1])
                                        delname(pdn2_sp,'kangxingjiyin')
                                    }else if (is_exist1(pdn2_sp,'zhuanyi')){
                                        if (is_exist1(wj_mp,'xijun')){
                                            //把玩家的细菌删掉，加进牌桌
                                            if (is_exist1(wj_sp,'xijun')){
                                                $('.wj-s').find(\"img[name='xijun']\").remove()
                                                $(\".sp2-in\").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer<br>')
                                                $('#records').append('<strong>You express bacteria</strong><br>')
                                                delname(wj_sp,'xijun')
                                            }else{
                                            $('.wj-o-in').find(\"img[name='xijun']\").remove()
                                            $(\".sp2-in\").find(\"img[name='zhuanyi']\").remove()
                                            alert('周哥 plays transfer to make attack towards you')
                                            $('#records').append('周哥 plays transfer<br>')
                                            delname(wj_mp,'xijun')
                                        }
                                        }
                                        var num = is_exist1(pdn2_sp,'zhuanyi')
                                        arr.push(pdn2_sp[num-1])
                                        delname(pdn2_sp,'zhuanyi')
                                    }else if(is_exist1(pdn2_sp,'xijun')){
                                        //把手牌中的细菌删掉
                                        $('#records').append('<strong>周哥 expresses bacteria<br></strong>')
                                        var num = is_exist1(pdn2_sp,'xijun')
                                        arr.push(pdn2_sp[num-1])
                                        delname(pdn2_sp,'xijun')
                                        $(\".op2-in\").find(\"img[name='xijun']\").remove()
                                    }else {
                                        var num = is_exist1(pdn2_mp,'xijun')
                                        arr.push(pdn2_mp[num-1])
                                        $(\" .sp2-in\").find(\"img[name='xijun']\").remove();
                                        delname(pdn2_mp,'xijun')
                                    }
                                }
                       }
                        break;
                       case('gaowen'):
                        if(tag ==1){
                          tag =2;
                          $('#records').append('舰娘 plays high temperature <br>');  
                          if (is_exist1(pdn2_mp,'neiqiemei')||is_exist1(pdn2_mp,'DNAlianjiemei')){
                                    if (is_exist1(pdn2_sp,'zhuanyi')){
                                        if (is_exist1(wj_mp,'neiqiemei')){
                                            if (is_exist1(wj_sp,'neiqiemei')){
                                                var num = is_exist1(wj_sp,'neiqiemei')
                                                $(\".wj-s\").find(\"img[name='neiqiemei']\").remove()
                                                $(\".op2-in\").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('<strong>You express restriction enzyme</strong><br>')
                                                arr.push(wj_sp[num-1])
                                                wj_sp.splice(num-1,1)
                                            }else{
                                                var num = is_exist1(wj_mp,'neiqiemei')
                                                $(\".wj-o-in\").find(\"img[name='neiqiemei']\").remove()
                                                $(\".op2-in\").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer<br>')
                                                arr.push(wj_mp[num-1])
                                                wj_mp.splice(num-1,1)
                                            }
                                        }else if (is_exist1(wj_mp,'DNAlianjiemei')){
                                            if (is_exist1(wj_mp,'DNAlianjiemei')){
                                                var num = is_exist1(wj_sp,'DNAlianjiemei')
                                                $(\".wj-s\").find(\"img[name='DNAlianjiemei']\").remove()
                                                $(\".op2-in\").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer<br>')
                                                $('#records').append('<strong>You express DNA ligase</strong><br>')
                                                arr.push(wj_sp[num-1])
                                                wj_sp.splice(num-1,1)
                                            }else{
                                            var num = is_exist1(wj_mp,'DNAlianjiemei')
                                            $(\".op2-in\").find(\"img[name='zhuanyi']\").remove()
                                            alert('周哥 plays transfer to make attack towards you')
                                            $('#records').append('周哥 plays transfer<br>')
                                            $(\".wj-o-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                            arr.push(wj_mp[num-1])
                                            wj_mp.splice(num-1,1)
                                        }}
                                        var num = is_exist1(pdn2_sp,'zhuanyi')
                                        arr.push(pdn2_sp[num-1])
                                        pdn2_sp.splice(num-1,1)
                                    }else if (is_exist1(pdn2_mp,'neiqiemei')){
                                        if(is_exist1(pdn2_sp,'neiqiemei')){
                                            var num = is_exist1(pdn2_sp,'neiqiemei')
                                            arr.push(pdn2_sp[num-1])
                                            $('#records').append('<strong>周哥 expresses restriction enzyme <br></strong>')
                                            delname(pdn2_sp,'neiqiemei')
                                            $(\".op2-in\").find(\"img[name='neiqiemei']\").remove()
                                        }else{
                                        var num = is_exist1(pdn2_mp,'neiqiemei')
                                        arr.push(pdn2_mp[num-1])
                                        $(\".sp2-in\").find(\"img[name='neiqiemei']\").remove();
                                        delname(pdn2_mp,'neiqiemei')}
                                    }else if (is_exist1(pdn2_mp,'DNAlianjiemei')){
                                        if(is_exist1(pdn2_sp,'DNAlianjiemei')){
                                            var num = is_exist1(pdn2_sp,'DNAlianjiemei')
                                            $('#records').append('<strong>周哥 expresses DNA ligase<br></strong>')
                                            arr.push(pdn2_sp[num-1])
                                            delname(pdn2_sp,'DNAlianjiemei')
                                            $(\".op2-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                        }else{
                                            var num = is_exist1(pdn2_mp,'DNAlianjiemei')
                                            $(\" .sp2-in\").find(\"img[name='DNAlianjiemei']\").remove();
                                            arr.push(pdn2_mp[num-1])
                                            delname(pdn2_mp,'DNAlianjiemei')}
                                        }
                                }
                        }
                        break;
                       case('hesuanshuijiemei'):
                       if(tag ==1){
                          tag =2;
                          $('#records').append('舰娘 plays nuclease <br>');  
                          if (is_exist1(pdn2_mp,'mudijiyin')||is_exist1(pdn2_mp,'gujiazaiti')){
                                    if (is_exist1(pdn2_sp,'zhuanyi')){
                                        if (is_exist1(wj_mp,'mudijiyin')){
                                            if (is_exist1(wj_sp,'mudijiyin')){
                                                $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".wj-s\").find(\"img[name='mudijiyin']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer<br>')
                                                $('#records').append('<strong>You express target gene</strong><br>')
                                                var num = is_exist1(wj_sp,'mudijiyin')
                                                arr.push(wj_sp[num-1])
                                                delname(wj_sp,'mudijiyin')
                                            }else{
                                            $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                            $(\".wj-o-in\").find(\"img[name='mudijiyin']\").remove()
                                            alert('周哥 plays transfer to make attack towards you')
                                            $('#records').append('周哥 plays transfer')
                                            var num = is_exist1(wj_mp,'mudijiyin')
                                            arr.push(wj_mp[num-1])
                                            delname(wj_mp,'mudijiyin')
                                            }
                                        }else if (is_exist1(wj_mp,'gujiazaiti')){
                                            if (is_exist1(wj_sp,'mudijiyin')){
                                                $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".wj-s\").find(\"img[name='gujiazaiti']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer<br>')
                                                $('#records').append('<strong>You express vector</strong><br>')
                                                var num = is_exist1(wj_sp,'gujiazaiti')
                                                arr.push(wj_sp[num-1])
                                                delname(wj_sp,'gujiazaiti')
                                            }else{
                                            $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                            $(\".wj-o-in\").find(\"img[name='gujiazaiti']\").remove()
                                            alert('周哥 plays transfer to make attack towards you')
                                            $('#records').append('周哥 plays transfer')
                                            var num = is_exist1(wj_mp,'gujiazaiti')
                                            arr.push(wj_mp[num-1])
                                            delname(wj_mp,'gujiazaiti')}
                                        }
                                        var num = is_exist1(pdn2_sp,'zhuanyi')
                                        arr.push(pdn2_sp[num-1])
                                        delname(pdn2_sp,'zhuanyi')
                                    }else if(is_exist1(pdn2_sp,'gaowen')){
                                        if (is_exist1(wj_mp,'mudijiyin')){
                                            $(\".op2-in \").find(\"img[name='gaowen']\").remove()
                                            alert('周哥 plays high temperature to defense')
                                            $('#records').append('周哥 plays high temperature<br>')
                                        }else if (is_exist1(wj_mp,'gujiazaiti')){
                                            $(\".op2-in \").find(\"img[name='gaowen']\").remove()
                                            alert('周哥 plays high temperature to defense')
                                            $('#records').append('周哥 plays high temperature<br>')
                                        }
                                        var num = is_exist1(pdn2_sp,'gaowen')
                                        arr.push(pdn2_sp[num-1])
                                        delname(pdn2_sp,'gaowen')
                                    }else if (is_exist1(pdn2_mp,'mudijiyin')){
                                        if(is_exist1(pdn2_sp,'mudijiyin')){
                                            var num = is_exist1(pdn2_sp,'mudijiyin')
                                            $(\".op2-in\").find(\"img[name='mudijiyin']\").remove()
                                            $('#records').append('<strong>周哥 expresses target gene<br></strong>')
                                            arr.push(pdn2_sp[num-1])
                                            delname(pdn2_sp,'mudijiyin')
                                        }else{
                                        var num = is_exist1(pdn2_mp,'mudijiyin')
                                        $(\".sp2-in\").find(\"img[name='mudijiyin']\").remove()
                                        arr.push(pdn2_mp[num-1])
                                        delname(pdn2_mp,'mudijiyin')//在明示牌中删除 目的基因
                                        }
                                    }else  if (is_exist1(pdn2_mp,'gujiazaiti')){
                                        if(is_exist1(pdn2_sp,'gujiazaiti')){
                                            var num = is_exist1(pdn2_sp,'gujiazaiti')
                                            $(\".op2-in\").find(\"img[name='gujiazaiti']\").remove()
                                            $('#records').append('<strong>周哥 expresses vector<br></strong>')
                                            arr.push(pdn2_sp[num-1])
                                            delname(pdn2_sp,'gujiazaiti')
                                        }else{
                                        var num = is_exist1(pdn2_mp,'gujiazaiti')
                                        $(\".sp2-in\").find(\"img[name='gujiazaiti']\").remove()
                                        arr.push(pdn2_mp[num-1])
                                        delname(pdn2_mp,'gujiazaiti')//在明示牌中删除 骨架载体
                                        }
                                    }
                                }
                       }
                        break;
                       case('ziwaixian'):
                       if(tag ==1){
                          tag =2;
                          $('#records').append('舰娘 plays ultraviolet <br>') ; 
                          if (is_exist1(pdn2_mp,'mudijiyin')||is_exist1(pdn2_mp,'gujiazaiti')){
                                    if (is_exist1(pdn2_sp,'zhuanyi')){
                                        if (is_exist1(wj_mp,'mudijiyin')){
                                            if (is_exist1(wj_mp,'mudijiyin')){
                                                $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer <br>')
                                                $('#records').append('<strong>You express target gene</strong> <br>')
                                                $(\".wj-s\").find(\"img[name='mudijiyin']\").remove()
                                                var num = is_exist1(wj_sp,'mudijiyin')
                                                arr.push(wj_sp[num-1])
                                                delname(wj_sp,'mudijiyin')
                                            }else{
                                                $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer <br>')
                                                $(\".wj-o-in\").find(\"img[name='mudijiyin']\").remove()
                                                var num = is_exist1(wj_mp,'mudijiyin')
                                                arr.push(wj_mp[num-1])
                                                delname(wj_mp,'mudijiyin')
                                            }
                                        }else if (is_exist1(wj_mp,'gujiazaiti')){
                                            if (is_exist1(wj_mp,'gujiazaiti')){
                                                $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer <br>')
                                                $('#records').append('<strong>You express target gene</strong> <br>')
                                                $(\".wj-s\").find(\"img[name='gujiazaiti']\").remove()
                                                var num = is_exist1(wj_sp,'mudijiyin')
                                                arr.push(wj_sp[num-1])
                                                delname(wj_sp,'gujiazaiti')
                                            }else{
                                                $(\".op2-in \").find(\"img[name='zhuanyi']\").remove()
                                                alert('周哥 plays transfer to make attack towards you')
                                                $('#records').append('周哥 plays transfer <br>')
                                                $(\".wj-o-in\").find(\"img[name='gujiazaiti']\").remove()
                                                var num = is_exist1(wj_mp,'gujiazaiti')
                                                arr.push(wj_mp[num-1])
                                                delname(wj_mp,'gujiazaiti')
                                            }
                                        }
                                        var num = is_exist1(pdn2_sp,'zhuanyi')
                                        arr.push(pdn2_sp[num-1])
                                        delname(pdn2_sp,'zhuanyi')
                                    }else if (is_exist1(pdn2_mp,'mudijiyin')){
                                        if(is_exist1(pdn2_sp,'mudijiyin')){
                                            var num = is_exist1(pdn2_sp,'mudijiyin')
                                            $(\".op2-in\").find(\"img[name='mudijiyin']\").remove()
                                            $('#records').append('<strong>周哥 expresses target gene <br></strong>')
                                            arr.push(pdn2_sp[num-1])
                                            delname(pdn2_sp,'mudijiyin')
                                        }else{
                                        var num = is_exist1(pdn2_mp,'mudijiyin')
                                        $(\".sp2-in\").find(\"img[name='mudijiyin']\").remove()
                                        arr.push(pdn2_mp[num-1])
                                        delname(pdn2_mp,'mudijiyin')//在明示牌中删除 目的基因
                                        }
                                    }else  if (is_exist1(pdn2_mp,'gujiazaiti')){
                                        if(is_exist1(pdn2_sp,'gujiazaiti')){
                                            var num = is_exist1(pdn2_sp,'gujiazaiti')
                                            $('#records').append('<strong>周哥 expresses vector<br></strong>')
                                            $(\".op2-in\").find(\"img[name='gujiazaiti']\").remove()
                                            arr.push(pdn2_sp[num-1])
                                            delname(pdn2_sp,'gujiazaiti')
                                        }else{
                                        var num = is_exist1(pdn2_mp,'gujiazaiti')
                                        $(\".sp2-in\").find(\"img[name='gujiazaiti']\").remove()
                                        arr.push(pdn2_mp[num-1])
                                        delname(pdn2_mp,'gujiazaiti')//在明示牌中删除 骨架载体
                                        }
                                    }
                                }
                       }
                        break;
                       case('shijunti'):
                       if(tag ==1){
                            tag =2;
                            $('#records').append('舰娘 plays phage <br>');  
                                $(\".op1-in\").find(\"img[name='shijunti']\").remove()
                                if(arr[arr.length-1]['class'] == 'jc'){
                                    if(!is_exist1(pdn1_mp,arr[arr.length-1]['name']) ){
                                        $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:arr[arr.length-1]['url'],
                                            onmouseover:'big(this)',
                                            onmouseout:'small(this,tid)'
                                        }).css({
                                            width:'66px',
                                            height:'110px'
                                        }).appendTo('.sp1-in')
                                     pdn1_mp.push(arr[arr.length-1])  
                                     arr.pop() 
                                     }else{
                                         $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:'pic/bkg.jpg'
                                         }).css({
                                            width:'36px',
                                            height:'60px'
                                         }).appendTo('.op1-in')
                                         pdn1_sp.push(arr[arr.length-1]) 
                                         arr.pop()
                                         }
                                }else{
                                     $('<img>',{
                                        name:arr[arr.length-1]['name'],
                                        src:'pic/bkg.jpg'
                                     }).css({
                                        width:'36px',
                                        height:'60px'
                                     }).appendTo('.op1-in')
                                     pdn1_sp.push(arr[arr.length-1])
                                     arr.pop() 
                                }
                       }
                        break;
                       case('kangxingjiyin'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays resistant gene <br>')
                            }
                        break;
                       case('zhuanyi'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays transfer <br>')
                            }
                        break;
                       case('neiqiemei'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays restriction enzyme <br>')
                            }
                        break;
                       case('DNAlianjiemei'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays DNA ligase <br>')
                            }
                        break;
                       case('gujiazaiti'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays vector <br>')
                            }
                        break;
                       case('mudijiyin'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays target gene <br>')
                            }
                        break;
                       case('xijun'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays bacteria <br>')
                            }
                        break;
                       case('PCR'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('舰娘 plays PCR<br>')
                            }
                        break;
                         
                    }
                    arr.push(pdn1_sp[i])  
                    pdn1_sp.splice(i,1)
                    $(\".op1-in img:first\").remove() 
                    console.log(arr)
                    if(pdn1_mp !=='' && pdn1_mp.length == 6){
                         confirm(3)
                    }
                }
                function zp2() {
                    $('#jn').css({border:\"none\"});
                    $('#zg').css({border:\"3px solid gold\"});
                    delundefined(arr)
                    if(arr[i]['class'] == 'jc' && !is_exist1(pdn2_mp,arr[i]['name'])){
                        $('<img>',{
                            name:arr[i]['name'],
                            src:arr[i]['url'],
                            onmouseover:'big(this)',
                            onmouseout:'small(this,tid)'
                         }).css({
                            width:'66px',
                            height:'110px'
                         }).appendTo('.sp2-in')
                         pdn2_mp.push(arr.shift())
                         $('#records').append('周哥 draws one card<br>')
                         setTimeout(function(){zp2();},500)  
                      }else{
                             $('<img>',{
                               name:arr[i]['name'],
                               src:'pic/bkg.jpg'
                             }).css({
                                width:'36px',
                                height:'60px'
                             }).appendTo('.op2-in')
                             pdn2_sp.push(arr.shift())
                             $('#records').append('周哥 draws one card<br>')
                      }
                  //判断是否赢牌
                  if(pdn2_mp !=='' && pdn2_mp.length >= 6){
                    confirm(4)
                  }
                }
                function cp2() {
                    $('<img>',{
                            name:pdn2_sp[i]['name'],
                            src:pdn2_sp[i]['url']
                    }).css({
                                width:'108px',
                                height:'180px'
                    }).appendTo('.table')<!--出电脑2的手牌-->
                    switch (pdn2_sp[i]['name']){
                            case('kangshengsu'):
                                $('#records').append('周哥 plays antibiotic <br>');
                                if (is_exist1(pdn3_mp,'xijun')){
                                    if (is_exist1(pdn3_sp,'kangxingjiiyin')){
                                        $(\".op3-in\").find(\"img[name='kangxingjiyin']\").appendTo('.table')//把抗性基因加到牌桌上
                                        alert('小妈妈 plays resistant gene')
                                        $('#records').append('小妈妈 plays resisitant gene <br>');
                                        var num = is_exist1(pdn3_sp,'kangxingjiyin')
                                        arr.push(pdn3_sp[num-1])
                                        pdn3_sp.splice(num-1,1);
                                    }else if (is_exist1(pdn3_sp,'zhuanyi')){
                                        if (is_exist1(pdn1_mp,'xijun')){
                                            //把玩家的细菌删掉，加进牌桌
                                            alert('小妈妈 plays transfer<br>')
                                            $('#records').append('小妈妈 plays transfer <br>');
                                            if(is_exist1(pdn1_sp,'xijun')){
                                                $('#records').append('<strong>舰娘 expresses bacteria</strong> <br>');
                                                $('.op1-in').find(\"img[name='xijun']\").remove()
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                delname(pdn1_sp,'xijun')
                                            }else{
                                                $('.sp1-in').find(\"img[name='xijun']\").remove()
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                delname(pdn1_mp,'xijun')
                                            }
                                        }
                                        var num = is_exist1(pdn3_sp,'zhuanyi')
                                        arr.push(pdn3_sp[num-1])
                                        pdn3_sp.splice(num-1,1)
                                    }else if(is_exist1(pdn3_sp,'xijun')){
                                        //把手牌中的细菌删掉
                                        var num = is_exist1(pdn3_sp,'xijun')
                                        arr.push(pdn3_sp[num-1])
                                        $('#records').append('小妈妈 plays bacteria <br>');
                                        pdn3_sp.splice(num-1,1);
                                        $(\".op3-in\").find(\"img[name='xijun']\").remove()
                                    }else {
                                        var num = is_exist1(pdn3_mp,'xijun')
                                        arr.push(pdn3_mp[num-1])
                                        $(\" .sp3-in\").find(\"img[name='xijun']\").remove();
                                        pdn3_mp.splice(num-1,1)
                                    }
                                };
                                break;
                            case('gaowen'):
                                $('#records').append('周哥 plays high temperature <br>');  
                                if (is_exist1(pdn3_mp,'neiqiemei')||is_exist1(pdn3_mp,'DNAlianjiemei')){
                                    if (is_exist1(pdn3_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'neiqiemei')){
                                            alert('小妈妈 plays transfer')
                                        $('#records').append('小妈妈 plays transfer <br>');
                                            if(is_exist1(pdn1_sp,'neiqiemei')){
                                                $('#records').append('<strong>舰娘 expresses restriction enzyme</strong> <br>');
                                                var num = is_exist1(pdn1_sp,'neiqiemei')
                                                $(\".op1-in\").find(\"img[name='neiqiemei']\").remove()
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                arr.push(pdn1_sp[num-1])
                                                delname(pdn1_sp,'neiqiemei')
                                            }else{
                                            var num = is_exist1(pdn1_mp,'neiqiemei')
                                            $(\".sp1-in\").find(\"img[name='neiqiemei']\").remove()
                                            $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                            arr.push(pdn1_mp[num-1])
                                            delname(pdn1_mp,'neiqiemei')
                                            }
                                        }else if (is_exist1(pdn1_mp,'DNAlianjiemei')){
                                            alert('小妈妈 plays transfer')
                                        $('#records').append('小妈妈 plays transfer <br>');
                                            if (is_exist1(pdn1_sp,'DNAlianjiemei')){
                                                $('#records').append('<strong>舰娘 expresses DNA ligase</strong> <br>');
                                                var num = is_exist1(pdn1_sp,'DNAlianjiemei')
                                                $(\".op1-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                arr.push(pdn1_sp[num-1])
                                                delname(pdn1_sp,'DNAlianjiemei')
                                            }else{
                                            var num = is_exist1(pdn1_mp,'DNAlianjiemei')
                                            $(\".sp1-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                            $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                            arr.push(pdn1_mp[num-1])
                                            delname(pdn1_mp,'DNAlianjiemei')
                                        }
                                        }
                                        var num = is_exist1(pdn3_sp,'zhuanyi')
                                        arr.push(pdn3_sp[num-1])
                                        delname(pdn3_sp,'zhuanyi')
                                    }else if (is_exist1(pdn3_mp,'neiqiemei')){
                                        if(is_exist1(pdn3_sp,'neiqiemei')){
                                            var num = is_exist1(pdn3_sp,'neiqiemei')
                                            $('#records').append('<strong>小妈妈 expresses restriction enzyme <br></strong>');
                                            arr.push(pdn3_sp[num-1])
                                            delname(pdn3_sp,'neiqiemei')
                                            $(\".op3-in\").find(\"img[name='neiqiemei']\").remove()
                                        }else{
                                        var num = is_exist1(pdn3_mp,'neiqiemei')
                                        arr.push(pdn3_mp[num-1])
                                        $(\".sp3-in\").find(\"img[name='neiqiemei']\").remove();
                                        delname(pdn3_mp,'neiqiemei')}
                                    }else if (is_exist1(pdn3_mp,'DNAlianjiemei')){
                                        if(is_exist1(pdn3_sp,'DNAlianjiemei')){
                                            var num = is_exist1(pdn3_sp,'DNAlianjiemei')
                                            $('#records').append('<strong>小妈妈 expresses DNA ligase <br></strong>');
                                            arr.push(pdn3_sp[num-1])
                                            delname(pdn3_sp,'DNAlianjiemei')
                                            $(\".op3-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                        }else{
                                        var num = is_exist1(pdn3_mp,'DNAlianjiemei')
                                        $(\" .sp3-in\").find(\"img[name='DNAlianjiemei']\").remove();
                                        arr.push(pdn3_mp[num-1])
                                        delname(pdn3_mp,'DNAlianjiemei')}
                                    }
                                };
                                break;
                            case('hesuanshuijiemei'):
                                $('#records').append('周哥 plays nuclease <br>'); 
                                if (is_exist1(pdn3_mp,'mudijiyin')||is_exist1(pdn3_mp,'gujiazaiti')){
                                    if (is_exist1(pdn3_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'mudijiyin')){
                                            alert('小妈妈 plays transfer')
                                        $('#records').append('小妈妈 plays transfer<br>');
                                            if (is_exist1(pdn1_sp,'mudijiyin')){
                                                $('#records').append('<strong>舰娘 expresses target gene</strong> <br>');
                                                $(\".op3-in \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='mudijiyin']\").remove()
                                                var num = is_exist1(pdn1_sp,'mudijiyin')
                                                arr.push(pdn1_sp[num-1])
                                                delname(pdn1_sp,'mudijiyin');
                                            }else{
                                            $(\".op3-in \").find(\"img[name='zhuanyi']\").remove()
                                            $(\".sp1-in\").find(\"img[name='mudijiyin']\").remove()
                                            var num = is_exist1(pdn1_mp,'mudijiyin')
                                            arr.push(pdn1_mp[num-1])
                                            delname(pdn1_mp,'mudijiyin');
                                            }
                                        }else if (is_exist1(pdn1_mp,'gujiazaiti')){
                                            alert('小妈妈 plays transfer')
                                        $('#records').append('小妈妈 plays transfer<br>');
                                            if (is_exist1(pdn1_mp,'gujiazaiti')){
                                                $('#records').append('<strong>舰娘 expresses vector</strong> <br>');
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='gujiazaiti']\").remove()
                                                var num = is_exist1(pdn1_sp,'gujiazaiti')
                                                arr.push(pdn1_sp[num-1])
                                                delname(pdn1_sp,'gujiazaiti');
                                            }else{
                                            $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                            $(\".sp1-in\").find(\"img[name='gujiazaiti']\").remove()
                                            var num = is_exist1(pdn1_mp,'gujiazaiti')
                                            arr.push(pdn1_mp[num-1])
                                            delname(pdn1_mp,'gujiazaiti');
                                            }
                                        }
                                        alert('小妈妈 plays transfer')
                                        var num = is_exist1(pdn3_sp,'zhuanyi')
                                        arr.push(pdn3_sp[num-1])
                                        delname(pdn3_sp,'zhuanyi')
                                    }else if(is_exist1(pdn3_sp,'gaowen')){
                                       $(\".op3-in\").find(\"img[name='gaowen']\").remove()
                                       alert('小妈妈 plays high temperature')
                                       $('#records').append('小妈妈 plays high temperature<br>');
                                        var num = is_exist1(pdn3_sp,'gaowen')
                                        arr.push(pdn3_sp[num-1])
                                        delname(pdn3_sp,'gaowen')
                                    }else if (is_exist1(pdn3_mp,'mudijiyin')){
                                        if(is_exist1(pdn3_sp,'mudijiyin')){
                                            var num = is_exist1(pdn3_sp,'mudijiyin')
                                            $(\".op3-in\").find(\"img[name='mudijiyin']\").remove()
                                            $('#records').append('<strong>小妈妈 expresses target gene<br></strong>');
                                            arr.push(pdn3_sp[num-1])
                                            delname(pdn3_sp,'mudijiyin')
                                        }else{
                                            var num = is_exist1(pdn3_mp,'mudijiyin')
                                            $(\".sp3-in\").find(\"img[name='mudijiyin']\").remove()
                                            arr.push(pdn3_mp[num-1])
                                            delname(pdn3_mp,'mudijiyin')//在明示牌中删除 目的基因
                                        }
                                    }else  if (is_exist1(pdn3_mp,'gujiazaiti')){
                                        if(is_exist1(pdn3_sp,'gujiazaiti')){
                                            var num = is_exist1(pdn3_sp,'gujiazaiti')
                                            $(\".op3-in\").find(\"img[name='gujiazaiti']\").remove()
                                            $('#records').append('<strong>小妈妈 expresses vector<br></strong>');
                                            arr.push(pdn3_sp[num-1])
                                            delname(pdn3_sp,'gujiazaiti')
                                        }else{
                                        var num = is_exist1(pdn3_mp,'gujiazaiti')
                                        $(\".sp3-in\").find(\"img[name='gujiazaiti']\").remove()
                                        arr.push(pdn3_mp[num-1])
                                        delname(pdn3_mp,'gujiazaiti')//在明示牌中删除 骨架载体
                                        }
                                    }
                                };
                                break;
                            case('ziwaixian'):
                                $('#records').append('周哥 plays ultraviolet <br>') ; 
                                if (is_exist1(pdn3_mp,'mudijiyin')||is_exist1(pdn3_mp,'gujiazaiti')){
                                    if (is_exist1(pdn3_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'mudijiyin')){
                                            alert('小妈妈 plays transfer')
                                        $('#records').append('小妈妈 plays transfer<br>');
                                            if (is_exist1(pdn1_mp,'mudijiyin')){
                                                $('#records').append('<strong>舰娘 expresses target gene</strong> <br>');
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='mudijiyin']\").remove()
                                                var num = is_exist1(pdn1_sp,'mudijiyin')
                                                arr.push(pdn1_sp[num-1])
                                                delname(pdn1_sp,'mudijiyin')   
                                            }else{
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                $(\".sp1-in\").find(\"img[name='mudijiyin']\").remove()
                                                var num = is_exist1(pdn1_mp,'mudijiyin')
                                                arr.push(pdn1_mp[num-1])
                                                delname(pdn1_mp,'mudijiyin')
                                            }
                                        }else if (is_exist1(pdn1_mp,'gujiazaiti')){
                                            alert('小妈妈 plays transfer')
                                        $('#records').append('小妈妈 plays transfer<br>');
                                            if (is_exist1(pdn1_mp,'gujiazaiti')){
                                                $('#records').append('<strong>舰娘 expresses vector</strong> <br>');
                                                $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='gujiazaiti']\").remove()
                                                var num = is_exist1(pdn1_sp,'gujiazaiti')
                                                arr.push(pdn1_sp[num-1])
                                                delname(pdn1_sp,'gujiazaiti')
                                            }else{
                                            $(\".op3-in\").find(\"img[name='zhuanyi']\").remove()
                                            $(\".sp1-in\").find(\"img[name='gujiazaiti']\").remove()
                                            var num = is_exist1(pdn1_mp,'gujiazaiti')
                                            arr.push(pdn1_mp[num-1])
                                            delname(pdn1_mp,'gujiazaiti')
                                        }
                                        }
                                        var num = is_exist1(pdn3_sp,'zhuanyi')
                                        arr.push(pdn3_sp[num-1])
                                        delname(pdn3_sp,'zhuanyi')
                                    }else if (is_exist1(pdn3_mp,'mudijiyin')){
                                        if(is_exist1(pdn3_sp,'mudijiyin')){
                                            var num = is_exist1(pdn3_sp,'mudijiyin')
                                            $('#records').append('<strong>小妈妈 expresses target gene<br></strong>');
                                            $(\".op3-in\").find(\"img[name='mudijiyin']\").remove()
                                            arr.push(pdn3_sp[num-1])
                                            delname(pdn3_sp,'mudijiyin')
                                        }else{
                                        var num = is_exist1(pdn3_mp,'mudijiyin')
                                        $(\".sp3-in\").find(\"img[name='mudijiyin']\").remove()
                                        arr.push(pdn3_mp[num-1])
                                        delname(pdn3_mp,'mudijiyin')//在明示牌中删除 目的基因
                                        }
                                    }else  if (is_exist1(pdn3_mp,'gujiazaiti')){
                                        if(is_exist1(pdn3_sp,'gujiazaiti')){
                                            var num = is_exist1(pdn3_sp,'gujiazaiti')
                                            $('#records').append('<strong>小妈妈 expresses vector<br></strong>');
                                            $(\".op3-in\").find(\"img[name='gujiazaiti']\").remove()
                                            arr.push(pdn3_sp[num-1])
                                            delname(pdn3_sp,'gujiazaiti')
                                        }else{
                                        var num = is_exist1(pdn3_mp,'gujiazaiti')
                                        $(\".sp3-in\").find(\"img[name='gujiazaiti']\").remove()
                                        arr.push(pdn3_mp[num-1])
                                        delname(pdn3_mp,'gujiazaiti')//在明示牌中删除 骨架载体
                                        }
                                    }
                                };
                                break;
                            case('shijunti'):
                                $('#records').append('周哥 plays phage <br>');
                                $(\".op2-in\").find(\"img[name='shijunti']\").remove()
                                if(arr[arr.length-1]['class'] == 'jc'){
                                    if(!is_exist1(pdn2_mp,arr[arr.length-1]['name']) ){
                                        $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:arr[arr.length-1]['url'],
                                            onmouseover:'big(this)',
                                            onmouseout:'small(this,tid)'
                                        }).css({
                                            width:'66px',
                                            height:'110px'
                                        }).appendTo('.sp2-in')
                                     pdn2_mp.push(arr[arr.length-1])  
                                     arr.pop() 
                                     }else{
                                         $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:'pic/bkg.jpg'
                                         }).css({
                                            width:'36px',
                                            height:'60px'
                                         }).appendTo('.op2-in')
                                         pdn2_sp.push(arr[arr.length-1]) 
                                         arr.pop()
                                         }
                                }else{
                                     $('<img>',{
                                        name:arr[arr.length-1]['name'],
                                        src:'pic/bkg.jpg'
                                     }).css({
                                        width:'36px',
                                        height:'60px'
                                     }).appendTo('.op2-in')
                                     pdn2_sp.push(arr[arr.length-1])
                                     arr.pop() 
                                };
                                
                                break;
                           
                            case('kangxingjiyin'):
                                $('#records').append('周哥 plays resistant gene <br>')
                                break;
                            case('zhuanyi'):
                                $('#records').append('周哥 plays transfer <br>')
                                break;
                            case('neiqiemei'):
                                $('#records').append('周哥 plays restriction enzyme <br>')
                                break;
                            case('DNAlianjiemei'):
                                $('#records').append('周哥 plays DNA ligase <br>')
                                break;
                            case('gujiazaiti'):
                                $('#records').append('周哥 plays vector <br>')
                                break;
                            case('mudijiyin'):
                                $('#records').append('周哥 plays target gene <br>')
                                break;
                            case('xijun'):
                                $('#records').append('周哥 plays bacteria <br>')
                                break;
                            case('PCR'):
                                $('#records').append('周哥 plays PCR<br>')
                                break;
                         
                        }
                        arr.push(pdn2_sp[i])
                        pdn2_sp.splice(i,1)
                        $(\".op2-in img:first\").remove()
                    if(pdn2_mp !=='' && pdn2_mp.length == 6){
                        confirm(4)
                      }
                }
                function zp3() {
                    $('#zg').css({border:\"none\"});
                    $('#xmm').css({border:\"3px solid gold\"});
                delundefined(arr)
                  if(arr[i]['class'] == 'jc' && !is_exist1(pdn3_mp,arr[i]['name'])){
                        $('<img>',{
                            name:arr[i]['name'],
                            src:arr[i]['url'],
                            onmouseover:'big(this)',
                            onmouseout:'small(this,tid)'
                         }).css({
                            width:'66px',
                            height:'110px'
                         }).appendTo('.sp3-in')
                         pdn3_mp.push(arr.shift())
                         $('#records').append('小妈妈 draws one card<br>')
                         setTimeout(function(){zp3();},500)  
                  }else{
                         $('<img>',{
                           name:arr[i]['name'],
                           src:'pic/bkg.jpg'
                         }).css({
                            width:'36px',
                            height:'60px'
                         }).appendTo('.op3-in')
                         pdn3_sp.push(arr.shift())
                         $('#records').append('小妈妈 draws one card<br>')
                  }
                  //判断是否赢牌
                  if(pdn3_mp != '' && pdn3_mp.length == 6){
                     confirm(5)
                  }
                }
                function cp3() {
                    $('<img>',{
                            name:pdn3_sp[i]['name'],
                            src:pdn3_sp[i]['url']
                        }).css({
                                width:'108px',
                                height:'180px'
                            }).appendTo('.table')<!--出电脑3的手牌-->
                    switch (pdn3_sp[i]['name']){
                            case ('kangshengsu'):
                                $('#records').append('小妈妈 plays antibiotic <br>');
                                if (is_exist1(wj_mp,'xijun')){
                                    if (is_exist1(wj_sp,'kangxingjiiyin')){
                                        alert('You play resistant gene')
                                        $('#records').append('You play resistant gene <br>');
                                        $(\".wj-s\").find(\"img[name='kangxingjiyin']\").remove()//把抗性基因加到牌桌上
                                        var num = is_exist1(wj_sp,'kangxingjiyin')
                                        arr.push(wj_sp[num-1])
                                        delname(wj_sp,'kangxingjiyin')
                                    }else if (is_exist1(wj_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'xijun')){
                                            //把玩家的细菌删掉，加进牌桌
                                            alert('You play transfer')
                                        $('#records').append('You plays transfer <br>');
                                        $(\".wj-s\").find(\"img[name='zhuanyi']\").remove()
                                            if (is_exist1(pdn1_sp,'xijun')){
                                                $('.op1-in').find(\"img[name='xijun']\").remove()
                                                $('#records').append('<strong>舰娘 expresses bacteria <br></strong>');
                                                delname(pdn1_sp,'xijun')
                                            }else{
                                            $('.sp1-in').find(\"img[name='xijun']\").remove()
                                            $('#records').append('<strong>舰娘 expresses bacteria <br></strong>');
                                            delname(pdn1_mp,'xijun')
                                        }}
                                        var num = is_exist1(wj_sp,'zhuanyi')
                                        arr.push(wj_sp[num-1])
                                        wj_sp.splice(num-1,1)
                                    }else if(is_exist1(wj_sp,'xijun')){
                                        //把手牌中的细菌删掉
                                        $('#records').append('<strong>You expresses bacteria<br></strong>');
                                        var num = is_exist1(wj_sp,'xijun')
                                        arr.push(wj_sp[num-1])
                                        wj_sp.splice(num-1,1);
                                        $(\".wj-s\").find(\"img[name='xijun']\").remove()
                                    }else {
                                        var num = is_exist1(wj_mp,'xijun')
                                        arr.push(wj_mp[num-1])
                                        $(\" .wj-o-in\").find(\"img[name='xijun']\").remove();
                                        wj_mp.splice(num-1,1)
                                    }
                                };
                                break;
                            case('gaowen'):
                                $('#records').append('小妈妈 plays high temperature <br>'); 
                                if (is_exist1(wj_mp,'neiqiemei')||is_exist1(wj_mp,'DNAlianjiemei')){
                                    if (is_exist1(wj_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'neiqiemei')){
                                            alert('You play transfer')
                                        $('#records').append('You play transfer <br>');
                                            if (is_exist1(pdn1_sp,'neiqiemei')){
                                                var num = is_exist1(pdn1_sp,'neiqiemei')
                                                $(\".op1-in\").find(\"img[name='neiqiemei']\").remove()
                                                $('#record').append('<strong>舰娘 expresses restriction enzyme</strong><br>')
                                                $(\".wj-s\").find(\"img[name='zhuanyi']\").remove()
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1)
                                            }else{
                                                var num = is_exist1(pdn1_mp,'neiqiemei')
                                                $(\".sp1-in\").find(\"img[name='neiqiemei']\").remove()
                                                $(\".wj-s\").find(\"img[name='zhuanyi']\").remove()
                                                arr.push(pdn1_mp[num-1])
                                                pdn1_mp.splice(num-1,1)
                                            }
                                        }else if (is_exist1(pdn1_mp,'DNAlianjiemei')){
                                            alert('You play transfer')
                                        $('#records').append('You play transfer <br>');
                                            if (is_exist1(pdn1_sp,'DNAlianjiemei')){
                                                var num = is_exist1(pdn1_sp,'DNAlianjiemei')
                                                $(\".op1-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                                $('#record').append('<strong>舰娘 expresses DNA ligase</strong><br>')
                                                $(\".wj-s\").find(\"img[name='zhuanyi']\").remove()
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1)
                                            }else{
                                            var num = is_exist1(pdn1_mp,'DNAlianjiemei')
                                            $(\".sp1-in\").find(\"img[name='DNAlianjiemei']\").remove()
                                            $(\".wj-s\").find(\"img[name='zhuanyi']\").remove()
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1)
                                        }}
                                        var num = is_exist1(wj_sp,'zhuanyi')
                                        arr.push(wj_sp[num-1])
                                        wj_sp.splice(num-1,1)
                                    }else if (is_exist1(wj_mp,'neiqiemei')){
                                        if(is_exist1(wj_sp,'neiqiemei')){
                                            var num = is_exist1(wj_sp,'neiqiemei')
                                            $('#records').append('<strong>You expresses restriction enzyme <br></strong>');
                                            arr.push(wj_sp[num-1])
                                            wj_sp.splice(num-1,1)
                                            $(\".wj-s\").find(\"img[name='neiqiemei']\").remove()
                                        }else{
                                        var num = is_exist1(wj_mp,'neiqiemei')
                                        arr.push(wj_mp[num-1])
                                        $(\".wj-o-in\").find(\"img[name='neiqiemei']\").remove();
                                        wj_mp.splice(num-1,1)}
                                    }else if (is_exist1(wj_mp,'DNAlianjiemei')){
                                        if(is_exist1(wj_sp,'DNAlianjiemei')){
                                            var num = is_exist1(wj_sp,'DNAlianjiemei')
                                            $('#records').append('<strong>You expresses DNA ligase<br></strong>');
                                            arr.push(wj_sp[num-1])
                                            wj_sp.splice(num-1,1)
                                            $(\".wj-s\").find(\"img[name='DNAlianjiemei']\").remove()
                                        }else{
                                        var num = is_exist1(wj_mp,'DNAlianjiemei')
                                        $(\" .wj-o-in\").find(\"img[name='DNAlianjiemei']\").remove();
                                        arr.push(wj_mp[num-1])
                                        wj_mp.splice(num-1,1)}
                                    }
                                };
                                break;
                            case('hesuanshuijiemei'):
                                $('#records').append('小妈妈 plays nuclease <br>'); 
                                if (is_exist1(wj_mp,'mudijiyin')||is_exist1(wj_mp,'gujiazaiti')){
                                    if (is_exist1(wj_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'mudijiyin')){
                                            alert('You play transfer')
                                            $('#records').append('You play transfer <br>');
                                            if (is_exist1(pdn1_sp,'mudijiyin')){
                                                $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='mudijiyin']\").remove()
                                                $('#record').append('<strong>舰娘 expresses target gene</strong><br>')
                                                var num = is_exist1(pdn1_sp,'mudijiyin')
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1);
                                            }else{
                                            $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                            $(\".sp1-in\").find(\"img[name='mudijiyin']\").remove()
                                            var num = is_exist1(pdn1_mp,'mudijiyin')
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1);
                                        }}else if (is_exist1(pdn1_mp,'gujiazaiti')){
                                            alert('You play transfer')
                                            $('#records').append('You play transfer <br>');
                                            if (is_exist1(pdn1_sp,'gujiazaiti')){
                                                $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='gujiazaiti']\").remove()
                                                $('#record').append('<strong>舰娘 expresses vector</strong><br>')
                                                var num = is_exist1(pdn1_sp,'gujiazaiti')
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1);
                                            }else{
                                                $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".sp1-in\").find(\"img[name='gujiazaiti']\").remove()
                                                var num = is_exist1(pdn1_mp,'gujiazaiti')
                                                arr.push(pdn1_mp[num-1])
                                                pdn1_mp.splice(num-1,1);
                                        }}
                                        var num = is_exist1(wj_sp,'zhuanyi')
                                        arr.push(wj_sp[num-1])
                                        wj_sp.splice(num-1,1)
                                    }else if(is_exist1(wj_sp,'gaowen')){
                                        alert('You play high temperature to defense')
                                        $('#records').append('You play high temperature <br>');
                                        $(\".wj-s \").find(\"img[name='gaowen']\").remove()
                                        var num = is_exist1(pdn1_sp,'gaowen')
                                        arr.push(wj_sp[num-1])
                                        wj_sp.splice(num-1,1)
                                    }else if (is_exist1(wj_mp,'mudijiyin')){
                                        if(is_exist1(wj_sp,'mudijiyin')){
                                            var num = is_exist1(wj_sp,'mudijiyin')
                                            $('#records').append('<strong>You expresses target gene <br></strong>');
                                            $(\".wj-s\").find(\"img[name='mudijiyin']\").remove()
                                            arr.push(wj_sp[num-1])
                                            wj_sp.splice(num-1,1)
                                        }else{
                                        var num = is_exist1(wj_mp,'mudijiyin')
                                        $(\".wj-o-in\").find(\"img[name='mudijiyin']\").remove()
                                        arr.push(wj_mp[num-1])
                                        wj_mp.splice(num-1,1)//在明示牌中删除 目的基因
                                        }
                                    }else  if (is_exist1(wj_mp,'gujiazaiti')){
                                        if(is_exist1(wj_sp,'gujiazaiti')){
                                            var num = is_exist1(wj_sp,'gujiazaiti')
                                            $('#records').append('<strong>You expresses vector <br></strong>');
                                            $(\".wj-s\").find(\"img[name='gujiazaiti']\").remove()
                                            arr.push(wj_sp[num-1])
                                            wj_sp.splice(num-1,1)
                                        }else{
                                        var num = is_exist1(wj_mp,'gujiazaiti')
                                        $(\".wj-o-in\").find(\"img[name='gujiazaiti']\").remove()
                                        arr.push(wj_mp[num-1])
                                        wj_mp.splice(num-1,1)//在明示牌中删除 骨架载体
                                        }
                                    }
                                };
                                break;
                            case('ziwaixian'):
                                $('#records').append('小妈妈 plays ultraviolet <br>') ;
                                if (is_exist1(wj_mp,'mudijiyin')||is_exist1(wj_mp,'gujiazaiti')){
                                    if (is_exist1(wj_sp,'zhuanyi')){
                                        
                                        if (is_exist1(pdn1_mp,'mudijiyin')){
                                            alert('You play transfer')
                                        $('#records').append('You play transfer <br>');
                                            if (is_exist1(pdn1_sp,'mudijiyin')){
                                                $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='mudijiyin']\").remove()
                                                $('#record').append('<strong>舰娘 express target gene</strong><br>')
                                                var num = is_exist1(pdn1_sp,'mudijiyin')
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1);
                                            }else{
                                            $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                            $(\".sp1-in\").find(\"img[name='mudijiyin']\").remove()
                                            var num = is_exist1(pdn1_mp,'mudijiyin')
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1);
                                        }
                                        }else if (is_exist1(pdn1_mp,'gujiazaiti')){
                                            alert('You play transfer')
                                        $('#records').append('You play transfer <br>');
                                            if (is_exist1(pdn1_sp,'gujiazaiti')){
                                                $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                                $(\".op1-in\").find(\"img[name='gujiazaiti']\").remove()
                                                $('#record').append('<strong>舰娘 express vector</strong><br>')
                                                var num = is_exist1(pdn1_sp,'gujiazaiti')
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1);
                                            }else{
                                            $(\".wj-s \").find(\"img[name='zhuanyi']\").remove()
                                            $(\".sp1-in\").find(\"img[name='gujiazaiti']\").remove()
                                            var num = is_exist1(pdn1_mp,'gujiazaiti')
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1);
                                        }}
                                        var num = is_exist1(wj_sp,'zhuanyi')
                                        arr.push(wj_sp[num-1])
                                        wj_sp.splice(num-1,1)
                                    }else if (is_exist1(wj_mp,'mudijiyin')){
                                        if(is_exist1(wj_sp,'mudijiyin')){
                                            var num = is_exist1(wj_sp,'mudijiyin')
                                            $('#records').append('You play target gene <br>');
                                            $(\".wj-s\").find(\"img[name='mudijiyin']\").remove()
                                            arr.push(wj_sp[num-1])
                                            wj_sp.splice(num-1,1)
                                        }else{
                                        var num = is_exist1(wj_mp,'mudijiyin')
                                        $(\".wj-o-in\").find(\"img[name='mudijiyin']\").remove()
                                        arr.push(wj_mp[num-1])
                                        wj_mp.splice(num-1,1)//在明示牌中删除 目的基因
                                        }
                                    }else  if (is_exist1(wj_mp,'gujiazaiti')){
                                        if(is_exist1(wj_sp,'gujiazaiti')){
                                            var num = is_exist1(wj_sp,'gujiazaiti')
                                            $('#records').append('You express vector <br>');
                                            $(\".wj-s\").find(\"img[name='gujiazaiti']\").remove()
                                            arr.push(wj_sp[num-1])
                                            wj_sp.splice(num-1,1)
                                        }else{
                                        var num = is_exist1(wj_mp,'gujiazaiti')
                                        $(\".wj-o-in\").find(\"img[name='gujiazaiti']\").remove()
                                        arr.push(wj_mp[num-1])
                                        wj_mp.splice(num-1,1)//在明示牌中删除 骨架载体
                                        }
                                    }
                                };
                                break;
                            case('shijunti'):
                                $('#records').append('小妈妈 plays phage <br>');
                                $(\".op3-in\").find(\"img[name='shijunti']\").remove()
                                if(arr[arr.length-1]['class'] == 'jc'){
                                    if(!is_exist1(pdn3_mp,arr[arr.length-1]['name']) ){
                                        $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:arr[arr.length-1]['url'],
                                            onmouseover:'big(this)',
                                            onmouseout:'small(this,tid)'
                                        }).css({
                                            width:'66px',
                                            height:'110px'
                                        }).appendTo('.sp3-in')
                                     pdn3_mp.push(arr[arr.length-1])  
                                     arr.pop() 
                                     }else{
                                         $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:'pic/bkg.jpg'
                                         }).css({
                                            width:'36px',
                                            height:'60px'
                                         }).appendTo('.op3-in')
                                         pdn3_sp.push(arr[arr.length-1]) 
                                         arr.pop()
                                         }
                                }else{
                                     $('<img>',{
                                        name:arr[arr.length-1]['name'],
                                        src:'pic/bkg.jpg'
                                     }).css({
                                        width:'36px',
                                        height:'60px'
                                     }).appendTo('.op3-in')
                                     pdn3_sp.push(arr[arr.length-1])
                                     arr.pop() 
                                }; 
                                
                                break;
                            
                            case('kangxingjiyin'):
                                $('#records').append('小妈妈 plays resistant gene <br>')
                                break;
                            case('zhuanyi'):
                                $('#records').append('小妈妈 plays transfer <br>')
                                break;
                            case('neiqiemei'):
                                $('#records').append('小妈妈 plays restriction enzyme <br>')
                                break;
                            case('DNAlianjiemei'):
                                $('#records').append('小妈妈 plays DNA ligase <br>')
                                break;
                            case('gujiazaiti'):
                                $('#records').append('小妈妈 plays vector <br>')
                                break;
                            case('mudijiyin'):
                                $('#records').append('小妈妈 plays target gene <br>')
                                break;
                            case('xijun'):
                                $('#records').append('小妈妈 plays bacteria <br>')
                                break;
                            case('PCR'):
                                $('#records').append('小妈妈 plays PCR<br>')
                                break;
                         
                        }
                        arr.push(pdn3_sp[i])
                        pdn3_sp.splice(0,1)
                        $(\".op3-in img:first\").remove() 
                        if(pdn3_mp !=='' && pdn3_mp.length == 6){
                            confirm(5)
                          }
                    setTimeout(function(){hey();},3000)
                }
                function zdcp(){
                        zp1()
                        <!--电脑1抓牌-->
                        setTimeout(function(){cp1();},3000)
                        
                        setTimeout(function(){zp2();},6000)
                        <!--电脑2抓牌-->
                        setTimeout(function(){cp2();},8000)
                        
                        setTimeout(function(){zp3();},11000)
                        <!--电脑3抓牌-->
                        setTimeout(function(){cp3();},13000) 
                        
                }//自动出牌
                function go(data) {
                    $(\".table\").empty()
                    if(data.class == 'jc'){
                        $('.table').append(data)
                        delname(wj_sp,data.name)
                        zdcp()
                    }else{
                        hi(data)
                    }//给玩家手牌绑定的函数，导致一系列出牌动作
               }
                function hey(){
                //明牌中不存在这张基础牌
                    $('#xmm').css({border:\"none\"});
                    $('#wj').css({border:\"3px solid gold\"})
                    delundefined(arr)
                    if(!is_exist1(wj_mp,arr[i]['name']) && arr[i]['class']=='jc'  ){
                        $('<img>',{
                            name:arr[i]['name'],
                            src:arr[i]['url'],
                            onmouseover:'big(this)',
                            onmouseout:'small(this,tid)'
                        }).css({
                            width:'114px',
                            height:'190px'
                        }).appendTo('.wj-o-in')
                        wj_mp.push(arr.shift())
                        $('#records').append('You draw one card <br>')
                        setTimeout(function(){hey();},500)  
                    }else{
                        $('<img>',{
                            name:arr[i]['name'],
                            src:arr[i]['url'],
                            onclick:'go(this)',
                            ondblclick:'shuanji(this)',
                            onmouseover:'big(this)',
                            onmouseout:'small(this,tid)'
                        }).css({
                            width:'108px',
                            height:'180px'
                        }).appendTo('.wj-s')
                        $('#records').append('You draw one card <br>')
                        wj_sp.push(arr.shift())          
                    }
                  //判断是否赢牌
                  if(wj_mp != '' && wj_mp.length ==6){
                     confirm(1)
                  }
                  warning()
                }//玩家抓牌
                
                function shuanji(data){
                    var num = is_exist1(wj_sp,data.name)
                    arr.push(wj_sp[num-1])
                    delname(wj_sp,data.name)
                    $('.table').append(data)
                    zdcp()
                }//双击弃牌
                function hi(data){
                    var tag =1;
                    switch(data.name){
                            case('kangshengsu'):
                                $('#records').append('You play antibiotic <br>');
                                $(\".sp1-in>img\").click(function(){
                                    if(tag ==1 ){
                                    tag =2
                                    if(this.name=='xijun'){
                                        $('.table').append(data)
                                        if(is_exist1(pdn1_sp,'kangxingjiyin')){
                                                var num = is_exist1(pdn1_sp,'kangxingjiyin')
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1)
                                                $('.op1-in').find(\"img[name='kangxingjiyin']\").remove()  
                                                alert('舰娘 uses resistant gene')
                                        }else{
                                            var num = is_exist1(pdn1_mp,'xijun')
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }
                                    zdcp()
                                    }
                                });
                                $(\".sp2-in>img\").click(function(){
                                    if(tag ==1 ){
                                    tag =2
                                    if(this.name=='xijun'){
                                        $('.table').append(data)
                                        if(is_exist1(pdn2_sp,'kangxingjiyin')){
                                                var num = is_exist1(pdn2_sp,'kangxingjiyin')
                                                arr.push(pdn2_sp[num-1])
                                                pdn2_sp.splice(num-1,1)
                                                $('.op2-in').find(\"img[name='kangxingjiyin']\").remove()  
                                                alert('周哥 uses resistant gene')
                                        }else{
                                            var num = is_exist1(pdn2_mp,'xijun')
                                            arr.push(pdn2_mp[num-1])
                                            pdn2_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }
                                    zdcp()
                                    }
                                });
                                $(\".sp3-in>img\").click(function(){
                                    if(tag ==1 ){
                                    tag =2
                                    if(this.name=='xijun'){
                                        $('.table').append(data)
                                        if(is_exist1(pdn3_sp,'kangxingjiyin')){
                                                var num = is_exist1(pdn3_sp,'kangxingjiyin')
                                                arr.push(pdn3_sp[num-1])
                                                pdn3_sp.splice(num-1,1)
                                                $('.op3-in').find(\"img[name='kangxingjiyin']\").remove()  
                                                alert('小妈妈 uses resistant gene')
                                        }else{
                                            var num = is_exist1(pdn3_mp,'xijun')
                                            arr.push(pdn3_mp[num-1])
                                            pdn3_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }
                                    zdcp()
                                    }
                                });
                                break;    
                            case('ziwaixian'):
                                $('#records').append('You play ultraviolet <br>');
                                $(\".sp1-in>img\").click(function(){
                                    if(tag ==1 ){
                                    tag =2
                                    if(this.name=='mudijiyin'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn1_mp,'mudijiyin')
                                        arr.push(pdn1_mp[num1-1])
                                        pdn1_mp.splice(num1-1,1)
                                    }else if(this.name == 'gujiazaiti'){
                                        $('.table').append(data)
                                        var num = is_exist1(wj_sp,'ziwaixian')
                                        arr.push(wj_sp[num-1])
                                        delname(wj_sp,'ziwaixian')
                                        $(this).remove()
                                        var num1 = is_exist1(pdn1_mp,'gujiazaiti')
                                        arr.push(pdn1_mp[num1-1])
                                        pdn1_mp.splice(num1-1,1)
                                    }
                                    
                                zdcp()
                                }
                                });
                                $(\".sp2-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2
                                    if(this.name=='mudijiyin'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn2_mp,'mudijiyin')
                                        arr.push(pdn2_mp[num1-1])
                                        pdn2_mp.splice(num1-1,1)
                                    }else if(this.name == 'gujiazaiti'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn2_mp,'gujiazaiti')
                                        arr.push(pdn2_mp[num1-1])
                                        pdn2_mp.splice(num1-1,1)
                                    }
                                zdcp()
                                }
                                });
                                $(\".sp3-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2
                                    if(this.name=='mudijiyin'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn3_mp,'mudijiyin')
                                        arr.push(pdn3_mp[num1-1])
                                        pdn3_mp.splice(num1-1,1)
                                    }else if(this.name == 'gujiazaiti'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn3_mp,'gujiazaiti')
                                        arr.push(pdn3_mp[num1-1])
                                        pdn3_mp.splice(num1-1,1)
                                    }
                                zdcp()
                                }
                                });
                                break;     
                            case('hesuanshuijiemei'):
                                $('#records').append('You play nuclease <br>');
                                $(\".sp1-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2;
                                    if(this.name=='mudijiyin'){
                                        $('.table').append(data)
                                        if(is_exist1(pdn1_sp,'gaowen')){
                                           var num = is_exist1(pdn1_sp,'gaowen')
                                           arr.push(pdn1_sp[num-1])
                                           pdn1_sp.splice(num-1,1)
                                           alert('舰娘 plays high temperature to defense')
                                           $('.op1-in').find(\"img[name='gaowen']\").remove()  
                                        }else if(is_exist1(pdn1_sp,'mudijiyin')){
                                           var num = is_exist1(pdn1_sp,'mudijiyin')
                                           arr.push(pdn1_sp[num-1])
                                           pdn1_sp.splice(num-1,1)
                                           alert('舰娘 plays high temperature to defense')
                                           $('.op1-in').find(\"img[name='mudijiyin']\").remove()  
                                        }else{
                                            var num = is_exist1(pdn1_mp,'mudijiyin')
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }else if(this.name == 'gujiazaiti'){
                                        $('.table').append(data)
                                        
                                        if(is_exist1(pdn1_sp,'gaowen')){
                                                var num = is_exist1(pdn1_sp,'gaowen')
                                                arr.push(pdn1_sp[num-1])
                                                pdn1_sp.splice(num-1,1)
                                                $('.op1-in').find(\"img[name='gaowen']\").remove()
                                                alert('舰娘 plays high temperature to defense')  
                                        }else if(is_exist1(pdn1_sp,'gujiazaiti')){
                                           var num = is_exist1(pdn1_sp,'gujiazaiti')
                                           arr.push(pdn1_sp[num-1])
                                           pdn1_sp.splice(num-1,1)
                                           alert('舰娘 plays high temperature to defense')
                                           $('.op1-in').find(\"img[name='gujiazaiti']\").remove()  
                                        }else{
                                            var num = is_exist1(pdn1_mp,'gujiazaiti')
                                            arr.push(pdn1_mp[num-1])
                                            pdn1_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }
                                    zdcp()}
                                });
                                $(\".sp2-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2;
                                    if(this.name=='mudijiyin'){
                                        $('.table').append(data)
                                        if(is_exist1(pdn2_sp,'gaowen')){
                                           var num = is_exist1(pdn2_sp,'gaowen')
                                           arr.push(pdn2_sp[num-1])
                                           pdn2_sp.splice(num-1,1)
                                           alert('周哥 plays high temperature to defense')
                                           $('.op2-in').find(\"img[name='gaowen']\").remove()  
                                        }else if(is_exist1(pdn2_sp,'mudijiyin')){
                                           var num = is_exist1(pdn2_sp,'mudijiyin')
                                           arr.push(pdn2_sp[num-1])
                                           pdn2_sp.splice(num-1,1)
                                           alert('周哥 plays high temperature to defense')
                                           $('.op2-in').find(\"img[name='mudijiyin']\").remove()  
                                        }else{
                                            var num = is_exist1(pdn2_mp,'mudijiyin')
                                            arr.push(pdn2_mp[num-1])
                                            pdn2_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }else if(this.name == 'gujiazaiti'){
                                        $('.table').append(data)
                                        
                                        if(is_exist1(pdn2_sp,'gaowen')){
                                                var num = is_exist1(pdn2_sp,'gaowen')
                                                arr.push(pdn2_sp[num-1])
                                                pdn2_sp.splice(num-1,1)
                                                $('.op2-in').find(\"img[name='gaowen']\").remove()
                                                alert('周哥 plays high temperature to defense')  
                                        }else if(is_exist1(pdn2_sp,'gujiazaiti')){
                                           var num = is_exist1(pdn2_sp,'gujiazaiti')
                                           arr.push(pdn2_sp[num-1])
                                           pdn2_sp.splice(num-1,1)
                                           alert('周哥 plays high temperature to defense')
                                           $('.op2-in').find(\"img[name='gujiazaiti']\").remove()  
                                        }else{
                                            var num = is_exist1(pdn2_mp,'gujiazaiti')
                                            arr.push(pdn2_mp[num-1])
                                            pdn2_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }
                                    zdcp()}
                                });
                                $(\".sp3-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2;
                                    if(this.name=='mudijiyin'){
                                        $('.table').append(data)
                                        if(is_exist1(pdn3_sp,'gaowen')){
                                           var num = is_exist1(pdn3_sp,'gaowen')
                                           arr.push(pdn3_sp[num-1])
                                           pdn3_sp.splice(num-1,1)
                                           alert('小妈妈 plays high temperature to defense')
                                           $('.op3-in').find(\"img[name='gaowen']\").remove()  
                                        }else if(is_exist1(pdn3_sp,'mudijiyin')){
                                           var num = is_exist1(pdn3_sp,'mudijiyin')
                                           arr.push(pdn3_sp[num-1])
                                           pdn3_sp.splice(num-1,1)
                                           alert('小妈妈 plays high temperature to defense')
                                           $('.op3-in').find(\"img[name='mudijiyin']\").remove()  
                                        }else{
                                            var num = is_exist1(pdn3_mp,'mudijiyin')
                                            arr.push(pdn3_mp[num-1])
                                            pdn3_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }else if(this.name == 'gujiazaiti'){
                                        $('.table').append(data)
                                        
                                        if(is_exist1(pdn3_sp,'gaowen')){
                                                var num = is_exist1(pdn3_sp,'gaowen')
                                                arr.push(pdn3_sp[num-1])
                                                pdn3_sp.splice(num-1,1)
                                                $('.op3-in').find(\"img[name='gaowen']\").remove()
                                                alert('小妈妈 plays high temperature to defense')  
                                        }else if(is_exist1(pdn3_sp,'gujiazaiti')){
                                           var num = is_exist1(pdn3_sp,'gujiazaiti')
                                           arr.push(pdn3_sp[num-1])
                                           pdn3_sp.splice(num-1,1)
                                           alert('小妈妈 plays high temperature to defense')
                                           $('.op3-in').find(\"img[name='gujiazaiti']\").remove()  
                                        }else{
                                            var num = is_exist1(pdn3_mp,'gujiazaiti')
                                            arr.push(pdn3_mp[num-1])
                                            pdn3_mp.splice(num-1,1)
                                            $(this).remove()
                                        }
                                    }
                                    zdcp()}
                                });
                                break;    
                            case('gaowen'):
                                $('#records').append('You play high temperature <br>');
                                 $(\".sp1-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2
                                    if(this.name=='neiqiemei'){
                                        $('.table').append(data)
                                        
                                        $(this).remove()
                                        var num1 = is_exist1(pdn1_mp,'neiqiemei')
                                        arr.push(pdn1_mp[num1-1])
                                        pdn1_mp.splice(num1-1,1)
                                    }else if(this.name == 'DNAlianjiemei'){
                                        $('.table').append(data)
                                        
                                        $(this).remove()
                                        var num1 = is_exist1(pdn1_mp,'DNAlianjiemei')
                                        arr.push(pdn1_mp[num1-1])
                                        pdn1_mp.splice(num1-1,1)
                                    }
                                    zdcp()
                                    }
                                });
                                $(\".sp2-in>img\").click(function() {
                                if(tag ==1 ){
                                    tag =2
                                    if(this.name=='neiqiemei'){
                                        $('.table').append(data)
                                        
                                        $(this).remove()
                                        var num1 = is_exist1(pdn2_mp,'neiqiemei')
                                        arr.push(pdn2_mp[num1-1])
                                        pdn2_mp.splice(num1-1,1)
                                    }else if(this.name == 'DNAlianjiemei'){
                                        $('.table').append(data)
                                       
                                        $(this).remove()
                                        var num1 = is_exist1(pdn2_mp,'DNAlianjiemei')
                                        arr.push(pdn2_mp[num1-1])
                                        delname(pdn2_mp,'DNAlianjiemei')
                                    }
                                    zdcp()
                                    }
                                });
                                $(\".sp3-in>img\").click(function(){
                                if(tag ==1 ){
                                    tag =2
                                    if(this.name=='neiqiemei'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn3_mp,'neiqiemei')
                                        arr.push(pdn3_mp[num1-1])
                                        pdn3_mp.splice(num1-1,1)
                                    }else if(this.name == 'DNAlianjiemei'){
                                        $('.table').append(data)
                                        $(this).remove()
                                        var num1 = is_exist1(pdn3_mp,'DNAlianjiemei')
                                        arr.push(pdn3_mp[num1-1])
                                        delname(pdn3_mp,'DNAlianjiemei')
                                    }
                                        zdcp()
                                        }
                                });
                                break;
                            case('shijunti'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('You play phage <br>');
                               $('.table').append(data)
                                if(arr[arr.length-1]['class'] == 'jc'){
                                    if(!is_exist1(wj_mp,arr[arr.length-1]['name']) ){
                                        $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:arr[arr.length-1]['url'],
                                            onmouseover:'big(this)',
                                            onmouseout:'small(this,tid)'
                                        }).css({
                                            width:'114px',
                                            height:'190px'
                                        }).appendTo('.wj-o-in')
                                     wj_mp.push(arr[arr.length-1])  
                                     arr.pop() 
                                     }else{
                                         $('<img>',{
                                            name:arr[arr.length-1]['name'],
                                            src:arr[arr.length-1]['url'],
                                            onclick:'go(this)',
                                            onmouseover:'big(this)',
                                            onmouseout:'small(this,tid)'
                                         }).css({
                                            width:'108px',
                                            height:'180px'
                                         }).appendTo('.wj-s')
                                         wj_sp.push(arr[arr.length-1]) 
                                         arr.pop()
                                         }
                                }else{
                                     $('<img>',{
                                        name:arr[arr.length-1]['name'],
                                        src:arr[arr.length-1]['url'],
                                        onclick:'go(this)',
                                        ondblclick:'shuanji(this)',
                                        onmouseover:'big(this)',
                                        onmouseout:'small(this,tid)'
                                     }).css({
                                        width:'108px',
                                        height:'180px'
                                     }).appendTo('.wj-s')
                                     pdn3_sp.push(arr[arr.length-1])
                                     arr.pop() 
                                }
                                 
                                zdcp();}
                                break;
                            
                            case('kangxingjiyin'):
                                if(tag ==1){
                                tag =2;
                                $('#records').append('You plays resistant gene <br>')
                                $('.table').append(data)
                                }
                                zdcp();
                                break;
                            case('zhuanyi'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('You plays transfer <br>')
                                $('.table').append(data)
                                zdcp();}
                                 break;
                            case('neiqiemei'):
                            if(tag ==1){
                                tag =2;
                                $('#records').append('You plays restriction enzyme <br>')
                                $('.table').append(data)
                                zdcp();}
                                break;
                            case('DNAlianjiemei'):
                            if(tag ==1){
                                tag =2;
                                        $('#records').append('You plays DNA ligase <br>')
                                        $('.table').append(data)
                                        zdcp();}
                                        break;
                            case('gujiazaiti'):
                            if(tag ==1){
                                tag =2;
                                        $('#records').append('You plays vector <br>')
                                        $('.table').append(data)
                                        zdcp();}
                                        break;
                            case('mudijiyin'):
                            if(tag ==1){
                                tag =2;
                                        $('#records').append('You plays target gene <br>')
                                        $('.table').append(data)
                                        zdcp();}
                                        break;
                            case('xijun'):
                            if(tag ==1){
                                tag =2;
                                        $('#records').append('You plays bacteria <br>')
                                        $('.table').append(data)
                                        zdcp();}
                                        break;
                            case('PCR'):
                            if(tag ==1){
                                tag =2;
                                        $('#records').append('You plays PCR<br>')
                                        $('.table').append(data)
                                        zdcp();}
                                        break;
                        }
                        var num = is_exist1(wj_sp,data.name)
                        arr.push(wj_sp[num-1])
                        delname(wj_sp,data.name)
                        
                    if(wj_mp.length != null && wj_mp.length == 6){
                        confirm(1)
                    }
                }//玩家打功能牌时选择目标
                
                  
    </script> 
    </html>";
?>