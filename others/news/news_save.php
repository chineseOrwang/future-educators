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
$user_id = $_SESSION["id"];
$category_id = $_POST["category_id"];
$title = $_POST["title"];
$content = htmlspecialchars(addslashes($_POST["content"]));
$currentDate = date("Y-m-d H:i:s");
$clicked = 0;
// $file_name = $_FILES['news_file']['name'];
$file_name ="";
echo $file_name;

// $message = upload($_FILES['news_file'],"uploads");
$message = "";
$sql = "insert into news values(null, $user_id, $category_id, '$title', '$content', '$currentDate', $clicked, '$file_name')";
echo $message;
include_once("functions/database.php");
get_connection();
if(mysql_query($sql)){
	$message = "发布成功";
}else{
	$message = "发布失败";
}

close_connection();
$message = urlencode($message);
header("Location:news_list.php?message=$message");

?>