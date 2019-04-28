<?php
header("content-Type: text/html; charset=Utf-8");
include_once("functions/database.php");
include_once("functions/is_admin.php");
include_once("functions/is_login.php");

if(!session_id()){
	session_start();
}
	
if(is_admin()){
	$review_id = $_GET["review_id"];

	$sql = "delete from review where review_id=$review_id";
	echo $sql;
	get_connection();

	$result_set = mysql_query($sql);

	close_connection();
	$message = "已删除";
}else{
	$message = "无权删除";
}
header("Location:review_list.php?message={$message}&page_current={$_GET['page_current']}");
?>