<?php
include_once("functions/database.php");
include_once("functions/is_admin.php");
include_once("functions/is_login.php");

if(!session_id()){
	session_start();
}

if(is_admin()){
	$review_id = $_GET["review_id"];

	$sql = "update review set state = '已审核' where review_id=$review_id";
	// echo $sql;
	get_connection();

	if(mysql_query($sql)){
		$message = "已审核";
	}else{
		$message = "审核失败";
	}

	close_connection();
}else{
	$message = "无权审核";
}
echo $message;
echo $_SESSION["id"];
header("Location:review_list.php?message={$message}&page_current={$_GET['page_current']}");
?>