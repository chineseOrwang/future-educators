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
                $num = $result->fetch_assoc();
                if($password==$num['password']){        
                    $_SESSION['id'] = $id;
                    header("Location: ../index.php");
                }else{
                    echo "<script>alert('请检查账号和密码')</script>";        
                }
            }else{
                echo "<script>alert('账户不存在')</script>";
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
        <title>鲁大教育家协会-登录</title>
        <link rel="stylesheet" href="cssjs/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="cssjs/crowd.css">
        <style>
            .main_chart{
              width: 330px;
              height: 300px;
              margin: 200px auto;
            }
            .code {
              border: 1px solid #000;
              margin: 10px 0px 0px 76px;
              height: 35px;
              width: 160px;
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
                    <div style="height: 400px"></div>
                    <form class="form-horizontal" role="form" method="post" action="signin.php" style="position: relative;top: -400px;">
                        <div onclick="window.open('../index.php')" class="title" style="font-size: 30px;text-align: center;padding: 25px;">鲁大未来教育家协会</div>
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">学号</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname" placeholder="请输入成员学号" name="id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="lastname" placeholder="请输入密码" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="code col-sm-10" type="text" onkeyup="if(this.value!=this.value.toUpperCase())  this.value=this.value.toUpperCase()" name="code" placeholder="点击图片更换验证码" value="">
                            <img style="float: right; width: 80px; height: 35px; margin:8px 16px 0px 16px;" src="inclode/code.php" onclick="this.src='inclode/code.php?'+Math.random()"/>
                            <div style="clear: both;height: 0px;"></div>
                        </div>

                        <div class="form-group"></div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" style="width: 100px;">登录</button>
                                <a href="register.php" class="btn btn-primary" style="width: 100px;float: right;">注册</a>
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


