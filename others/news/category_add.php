<body style="">
<?php
include_once("../../include/header.php");
include_once("functions/news_left.php");
include_once("functions/right_top.php");
?>

	<a>增加类别</a>
</div>
<link rel="stylesheet" href="/files/input.css">

<?php
include_once("functions/is_login.php");

if(!session_id()){
	session_start();
}
if(!is_login())
{
	echo "请您登录系统后,再访问该页面!";
	return;
}

?>

<form method="post" enctype="multipart/form-data" action="category_save.php" style="padding: 20px;">
分类:	<input type="text" maxlength="10" name="category"><br/><br/><br/>
<input type="submit" name="" value="提交">
<input type="reset"  value="重置" name="">
</form>

</div>
<div style="clear: both;"></div>
<?php include_once("../../include/bottom.php"); ?></body>