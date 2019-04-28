<?php
header("content-Type: text/html; charset=Utf-8");
include_once("functions/file_system.php");
include_once("functions/is_login.php");
if(!session_id()){
	session_start();
}
if(!is_login()){
	echo "请您登录系统后,再访问该页面!";
	return;
}

$category = $_POST["category"];

$sql = "insert into category values(NULL,'$category')";
echo $sql;
include_once("functions/database.php");
get_connection();
if(mysql_query($sql)){
	$message = "类别增加成功";
}else{
	$message = "类别增加失败";
}
echo $message;

close_connection();
$message = urlencode($message);
echo $message;
header("Location:category_list.php?message=$message");

?>