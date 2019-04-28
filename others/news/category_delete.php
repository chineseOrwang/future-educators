<?php

include_once("functions/database.php");
include_once("functions/is_login.php");
if(!session_id()){
	session_start();
}
$category_id = $_GET["category_id"];

get_connection();
$message = "";
if(mysql_query("delete from review where news_id in (select news_id from news where category_id=$category_id)")){
	$message .= "相应评论删除成功！";
}else{
	$message .= "相应评论删除失败！";
}
if(mysql_query("delete from news where category_id=$category_id")){
	$message .= "相应新闻删除成功！";
}else{
	$message .= "相应新闻删除失败！";
}
if(mysql_query("delete from category where category_id=$category_id")){
	$message .= "类别删除成功！";
}else{
	$message .= "类别删除失败！";
}


close_connection();

header("Location:category_list.php?message=$message");

?>