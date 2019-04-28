<?php 
    session_start();

    $con = new mysqli("120.77.42.153","root","password","volunteer_teaching");
    if($con->connect_error){
        die("连接数据库失败：".$con->connect_error);
    }

    if(isset($_POST['id'])){
        //判断验证码
        if (@strtoupper($_SESSION['code']) == @strtoupper($_POST['code'])) {
            $id = $_REQUEST['id'];
            $password = $_REQUEST['password'];

            $sql = "select * from u_users where id='{$id}'";

            $result = $con->query($sql); 
            if($result->num_rows > 0){
            	echo "<script>alert('学号已存在')</script>";

                // $num = $result->fetch_assoc();
                // echo $num['id']."<br>".$num['password'];
                // if($password==$num['password']){        
                //     $_SESSION['id'] = $id;
                //     header("Location: ../index.php");
                // }else{
                //     echo "<script>alert('请检查账号和密码')</script>";        
                // }
            }else{
            	$time = time();
            	$id = $_POST['id'];
            	$username = $_POST['username'];
            	$password = $_POST['password'];
            	$sex = $_POST['sex'];
            	$email = $_POST['email'];
                $sql="insert into u_users(id,username,password,sex,email,zc_time) values('{$id}','{$username}','{$password}','{$sex}','{$email}','{$time}')";
                if($con->query($sql)===TRUE){
                	echo "<script>alert('注册成功')</script>";
                }else{
                	echo "<script>alert('注册失败，检查是否填写完整')</script>";
                }
            }
        }else {
            echo "<script>alert('请输入正确的验证码')</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="description" content="">
        <meta name="keyword" content="">
        <title>鲁大教育家协会-注册</title>
        <link rel="stylesheet" href="cssjs/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="cssjs/crowd.css">
        <style>
            .main_chart{
              width: 330px;
              height: 300px;
              margin: 200px auto;
              position: relative;
              top:-300px;
            }
            .code {
              border: 1px solid #000;
              margin: 10px 0px 0px 0px;
              height: 35px;
              width: 220px;
              line-height: 25px;
              float: left;
              color:black;
            }
            .title:hover{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="bg" style="overflow: hidden;">
                <canvas id="display"></canvas>
                <div id="blachole"></div>

                <div class="main_chart">
                    <form class="form-horizontal" role="form" method="post" action="register.php" style="position: relative;top: 150px">
                        <div onclick="window.open('../index.php')" class="title" style="font-size: 30px;text-align: center;padding: 25px;">鲁大未来教育家协会</div>

			            <div class="form-group">
			                <label>学号</label>
			                <input type="text" class="form-control" name="id" placeholder="学号">
			                <!-- <span aria-hidden="true"></span> -->
			            </div>
			            <div class="form-group">
			                <label>用户名</label>
			                <input type="text" class="form-control" name="username" placeholder="用户名">
			                <!-- <span aria-hidden="true"></span> -->
			            </div>
			            <div class="form-group">
			                <label>邮箱</label>
			                <input type="text" class="form-control" name="email" placeholder="邮箱">
			                <!-- <span aria-hidden="true"></span> -->
			            </div>
			            <div class="form-group">
			                <label>密码</label>
			                <input type="password" class="form-control" name="password" placeholder="密码">
			                <!-- <span aria-hidden="true"></span> -->
			            </div>
			            <div class="form-group">
			                <label>性别</label>
			                <label><input name="sex" checked="checked" type="radio" value="1"/>男 </label>
			                <label><input name="sex" type="radio" value="0"/>女 </label>
			            </div>

                        <div class="form-group">
                            <input class="code col-sm-10" type="text" onkeyup="if(this.value!=this.value.toUpperCase())  this.value=this.value.toUpperCase()" name="code" placeholder="点击图片更换验证码" value="">
                            <img style="float: right; width: 100px; height: 35px; margin:8px 16px 0px 16px;" src="inclode/code.php" onclick="this.src='inclode/code.php?'+Math.random()"/>
                            <div style="clear: both;height: 0px;"></div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" style="margin-left: 0px; width: 100%;">
                                <a href="signin.php" class="btn btn-primary" style="width: 120px;">登录</a>
                                <button type="submit" class="btn btn-primary" style="width: 120px;float: right;">注册</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
        

    <script src="cssjs/jquery.1.12.4.min.js"></script>
    <script type="text/javascript" src="cssjs/constellation.js"></script>
    </body>

    
</html>


