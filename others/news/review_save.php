<?php

include_once("functions/database.php");
include_once("functions/is_login.php");

$news_id = $_POST["news_id"];

$content = $_POST["content"];

$currentDate = date("Y-m-d H:i:s");

$ip = $_SERVER["REMOTE_ADDR"];

$state = "未审核";

$sql = "insert into review values(null, $news_id, '$content', '$currentDate', '$state', '$ip')";
echo $sql;
get_connection();

if(is_login()){
	if(mysql_query($sql)){
		$message = "评论成功!等待审核！";
	}else{
		$message = "评论非法";
	}
}else{
	$message = "请先登录！";
}

close_connection();



header("Location:".$_SERVER["HTTP_REFERER"]."&message=$message");

?>