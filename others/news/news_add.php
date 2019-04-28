<body style="">
<?php
	include_once("../../include/header.php");
	include_once("functions/news_left.php");
	include_once("functions/right_top.php");
?>

	<a>新闻发布</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>
<link rel="stylesheet" href="/files/input.css">

<?php

include_once("functions/is_login.php");
if(!session_id()){
	session_start();
}
if(!is_login()){
	echo "请您登录系统后,再访问该页面!";
	return;
}

?>

<head>
    <title>未来教育家协会-新闻发布</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
    window.onload = function()
    {
        CKEDITOR.replace( 'content' );     //content是textarea的名称
        CKEDITOR.WIDTH = 550;
    };
	</script>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="news_save.php" charset="Utf-8" style="padding:10px 20px;">
	<p>
		标题:
		<input type="text" name="title" size = "60">
	</p>
	<p>
		内容:
		<textarea name = "content">
		</textarea>
	</p>
	<p>
		类别：
		<select name="category_id" size="1">
			<?php
			include_once("functions/database.php");
			get_connection();
			$result_set = mysql_query("select * from category");
			close_connection();
			while($row = mysql_fetch_array($result_set)){
				?>
				<option value="<?php echo $row['category_id'];?>"><?php echo $row['name'];?>
				</option>
			<?php
			}
			?>
		</select>
	</p>
<!-- 	<p>
		附件:
		<input type="file" name = "news_file" size = "50">
		<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
	</p> -->
	<p>
		<input type="submit" name="提交" style="margin-top: 10px;">
		<input type="reset" name="重置" style="margin-top: 10px;float: right;">
	</p>
</form>
</body>

</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?></body>