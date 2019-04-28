<?php 
	$con = new mysqli("120.77.42.153","root","password","volunteer_teaching");
    if($con->connect_error){
        die("连接数据库失败：".$con->connect_error);
    }
 ?>