<?php 
include_once("../news/functions/database.php");
include_once("../news/functions/is_login.php");
include_once("../news/functions/is_admin.php");

get_connection();
$name = $_POST['name'];
$phone = $_POST['phone'];
$QQ = $_POST['QQ'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$institute = $_POST['institute'];
$major = $_POST['major'];
$grade = $_POST['grade'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];
$cata = $_POST['cata'];

$sql = "insert into sqbm values('$name','$phone','$QQ','$age','$sex','$institute','$major','$grade','$subject','$comments','$cata')";
echo $sql;
$message = "";
if(mysql_query($sql)){
	$message = "报名成功";
}else{
	$message = "报名失败";
}
close_connection();

echo $message;
header("Location:".$_SERVER['HTTP_REFERER']."?message=".$message);
 ?>