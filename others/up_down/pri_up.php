<body style="">
<?php
	include_once("../../include/header.php");
	include_once("functions/left.php");
	include_once("functions/right_top.php");
?>

	<a>上传内部文件</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>

<?php
if(!session_id()){
	session_start();
} 
?>


<head>
<meta charset="UTF-8">
<title>未教-内部资料上传</title>
</head>
<style>
	.div{
		padding: 15px 30px;
	}
	.div a{
		color: blue;
		text-decoration: underline;
		margin-left: 20px;
	}
	.div a:hover{
		color: red;
		text-decoration: none;
	}
</style>
<div class="div">
<form action="" method="post" enctype="multipart/form-data">
	<label for="file">请输入上传文件:</label>
	<input type="file" name="file" id="file"></input>
	<input type="submit" name="submit" value="submit"></input>
</form> 
<br>
<a href="pri_down.php">下载</a>
<a href="/index.php">首页</a>
</div>

<?php 
if(isset($_SESSION['id'])){
	if(isset($_FILES["file"]["name"])){
		$file_name=iconv("utf-8","gb2312",$_FILES["file"]["name"]);

		if($_FILES["file"]["error"]>0){
			echo "<script>alert('Error".$_FILES["file"]["error"]."')</script>";
		}else{
			if(file_exists("private_file/".$file_name)){
				echo "<script>alert('".$_FILES["file"]["name"]."已经存在。"."请更换文件名。"."')</script>";
			}else{
				if(move_uploaded_file($_FILES["file"]["tmp_name"],"private_file/".$file_name)){
					echo "<script>alert('"."上传成功"."')</script>";
					echo "<script>window.open('pri_down.php','_self');</script>";
				}else{
					echo "<script>alert('"."上传失败"."')</script>";
				}
			}
		}
	}
}else{
	echo "<script>alert('"."无权访问,请先登录"."')</script>";
	echo "<script>window.open('/index.php','_self');</script>";
}
?>

</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?>
