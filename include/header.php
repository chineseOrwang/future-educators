<?php
	if(!session_id()){
		session_start();
	} 
?>

<script type="text/javascript" src="/files/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/files/index.vsb.css">
<link rel="stylesheet" href="/files/style.css">
<link rel="stylesheet" href="/files/index.css">

<div class="header">
	<!-- 头部右边 -->
	<div class="header-top common_index">
		<div class="right">
			<table>
			    <tbody><tr>
			        <td style="font-size: 14px;line-height: 50px;">
			        	<a>
							<span>
								<script language="javascript" src="/files/simple.js"></script>               
								<script language="JavaScript">
									//阳历
									var c_Calendar213159EnDateString;
									var c_Calendar213159WeekDayString;
									//阴历
									var c_Calendar213159CnDateString;
									//节气
									var c_Calendar213159JQString;
									//年
									var c_Calendar213159YearString;
									//月
									var c_Calendar213159MonthString;
									//日
									var c_Calendar213159DayString;
									//周
									var c_Calendar213159WeekString;
									function RunGLNL213159(){          
									    var  sc =new Simple_Calendar ();
									    sc.init();
									    c_Calendar213159CnDateString=sc.getCnDateString();
									    c_Calendar213159WeekDayString=sc.getCalendarWeekString();
									    c_Calendar213159JQString=sc.getJQString();
									    c_Calendar213159EnDateString=sc.getEnDateString();
									    c_Calendar213159YearString=sc.getYearString();
									    c_Calendar213159MonthString=sc.getMonthString();
									    c_Calendar213159DayString=sc.getDayString();
									    c_Calendar213159WeekString=sc.getWeekString();
									}
									RunGLNL213159();
									document.write('<div id="c_lunar213159"   class="fontstyle213159"  style="color:white;">');       
									document.write(c_Calendar213159EnDateString);
									document.write("&nbsp;&nbsp;"+c_Calendar213159WeekDayString);
									document.write("</div>");
								</script>
							</span>
			        	</a><span style="COLOR: white;FONT-SIZE: 14px;">&nbsp;|</span>
			            <a href="/login/signin.php">
			                <span style="COLOR: white;FONT-SIZE: 14px;">
							<?php 
								if(isset($_SESSION['id'])){
									$id = $_SESSION['id'];

				                    $sql = "select username from u_users where id='{$id}'";

				                    $con = new mysqli("120.77.42.153","root","password","volunteer_teaching");
				                    if($con->connect_error){
				                        die("连接失败：".$con->connect_error);
				                    }

				                    $result = $con->query($sql); 
				                    if($result->num_rows > 0){
				                        $row = $result->fetch_assoc();
				                        echo "&nbsp;".$row['username'];
				                        echo "<span style='COLOR: white;FONT-SIZE: 14px;''></span>";
								        echo "<a href='/login/loginout.php'>";
								        echo 	"<span style='COLOR: white;FONT-SIZE: 14px;'>&nbsp;|&nbsp;注销&nbsp;</span>";
								        echo "</a>";
				                    }else{
				                        echo "&nbsp;登录&nbsp;";
				                    }
								}else{
				                    echo "&nbsp;登录&nbsp;";									
								}
							//	session_destroy();     //销毁session做测试
							 ?></span>
			            </a><span style="COLOR: white;FONT-SIZE: 14px;">|</span>
			            <a href="/login/register.php">
			                <span style="COLOR: white;FONT-SIZE: 14px;">&nbsp;注册&nbsp;</span>
			            </a><span style="COLOR: white;FONT-SIZE: 14px;">|</span>
			            <a href="/admin/admin.php">
			                <span style="COLOR: white;FONT-SIZE: 14px;">&nbsp;管理员&nbsp;</span>
			            </a>
			         </td>
			    </tr></tbody>
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<div id="time" style="position: relative;left: 75%;top:17px;height: 0px;">
		<embed wmode="transparent" src="http://chabudai.sakura.ne.jp/blogparts/honehoneclock/honehone_clock_tr.swf" quality="high" bgcolor="#ffffff" width="280" height="100" name="honehoneclock" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
	</div>
	<!-- 头部logo -->
	<div class="header-logo">
		<a href="/index.php" title="鲁大未来教育家协会_maths">
			<img src="/files/logo.png" width="1920" height="152" border="0" alt="鲁大未来教育家协会_maths" title="鲁大未来教育家协会_maths">
		</a>
		<script src="/files/top_scene.js"></script>
		<script src="/files/top_player.bundle.js"></script>
		<div id="app" style="width:100%;height: 100px;overflow: hidden;position: absolute;top: 0;z-index: -5">
		<canvas class="webgl-layers" width="1362" height="326" style="display: block;"></canvas>
		</div> 
		<script>
		    if (window.runGenScene) {
		        window.runGenScene();
		    } else {
		        console.error('Scene not found')
		    }      
		</script>

	</div>
</div>

<div class="header-menu common_index" style="margin-top: 1px;">
	<ul class="menu">
		<li class="menu-li"><a href="/index.php" class="menu-a">协会首页</a> 
		</li>
		<li class="menu-li"><a href="/others/info/jianjie.php" class="menu-a">协会概况</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/info/jianjie.php">协会简介</a>
			</li>
			<li class="menu-sub-li"><a href="/others/info/zzjg.php">组织机构</a>
			</li>
			<li class="menu-sub-li"><a href="/others/info/xhld.php">协会领导</a>
			</li>
		</ul>
		</li>
		<li class="menu-li"><a href="/others/teacher/jsgk.php" class="menu-a">协会老师</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/teacher/jsgk.php">教师概况</a>
			</li>
			<li class="menu-sub-li"><a href="/others/teacher/jsml.php">教师名录</a>
			</li>
		</ul>
		</li>
		<li class="menu-li"><a href="/djgz.htm" class="menu-a">协会活动</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/djgz/zzjs.htm">义教活动</a>
			</li>
			<li class="menu-sub-li"><a href="/djgz/djhd.htm">娱乐互动</a>
			</li>
		</ul>
		</li>
		<li class="menu-li"><a href="/others/news/news_list.php" class="menu-a">协会新闻</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/news/news_list.php">新闻浏览</a>
			</li>
			<li class="menu-sub-li"><a href="/others/news/review_list.php">评论浏览</a>
			</li>
		</ul>
		<li class="menu-li"><a href="/others/up_down/pub_up.php" class="menu-a">资料上传</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/up_down/pub_up.php">公开资料</a>
			</li>
			<li class="menu-sub-li"><a href="/others/up_down/pri_up.php">内部资料</a>
			</li>
		</ul>
		</li>
		<li class="menu-li"><a href="/others/up_down/pub_down.php" class="menu-a">资料下载</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/up_down/pub_down.php">公开资料</a>
			</li>
			<li class="menu-sub-li"><a href="/others/up_down/pri_down.php">内部资料</a>
			</li>
		</ul>
		</li>
		</li>
		<li class="menu-li"><a href="/others/amgc/hdjf.php" class="menu-a">爱满港城</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/amgc/hdjs.php">活动介绍</a>
			</li>
			<li class="menu-sub-li"><a href="/others/amgc/sqbm.php">申请报名</a>
			</li>
			<li class="menu-sub-li"><a href="/others/amgc/bmry.php">报名人员</a>
			</li>
		</ul>
		<li class="menu-li"><a href="/others/scjt/hdjs.php" class="menu-a">三尺讲台</a> 
		<ul class="menu-sub hid2">
			<li class="menu-sub-li"><a href="/others/scjt/hdjs.php">活动介绍</a>
			</li>
			<li class="menu-sub-li"><a href="/others/scjt/sqbm.php">申请报名</a>
			</li>
			<li class="menu-sub-li"><a href="/others/scjt/bmry.php">报名人员</a>
			</li>
		</ul>
		</li>
		</li>
	</ul>
</div>