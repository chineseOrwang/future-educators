<?php

include_once("functions/database.php");
include_once("functions/is_login.php");
if(!session_id()){
	session_start();
}

$news_id = $_GET["news_id"];

get_connection();

if(mysql_query("delete from review where news_id=$news_id")){
	$message = "评论删除成功！";	
}else{
	$message = "评论删除失败！";
}

if(mysql_query("delete from news where news_id=$news_id")){
	$message .= "新闻删除成功！";
}else{
	$message .= "新闻删除失败！";
}

close_connection();

header("Location:news_list.php?message=$message");

?>