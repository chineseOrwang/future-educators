<body style="">
<?php
	include_once("../../include/header.php");
	include_once("functions/left.php");
	include_once("functions/right_top.php");
?>

	<a>上传公开文件</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>

<head>
<meta charset="UTF-8">
<title>未教-公开资料上传</title>
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
	<form action="" method="post" enctype="multipart/form-data" >
		<label for="file">请输入上传文件:</label>
		<input type="file" name="file" id="file"></input>
		<input type="submit" name="submit" value="submit"></input>
	</form> 
	<br>
	<a href="pub_down.php">下载</a>
	<a href="/index.php">首页</a>
</div>

<?php
	if(isset($_FILES["file"]["name"])){
		$file_name=iconv("utf-8","gb2312",$_FILES["file"]["name"]);

		if($_FILES["file"]["error"]>0){
			echo "<script>alert('Error".$_FILES["file"]["error"]."')</script>";
		}else{
			// echo "uploadname:".$_FILES["file"]["name"].
			// 	"<br>type:".$_FILES["file"]["type"].
			// 	"<br>size:".($_FILES["file"]["size"]/1024)."kB".
			// 	"<br>stored in:".$_FILES["file"]["tmp_name"];
			if(file_exists("public_file/".$file_name)){
				echo "<script>alert('".$_FILES["file"]["name"]."已经存在。"."请更换文件名。"."')</script>";
			}else{
				if(move_uploaded_file($_FILES["file"]["tmp_name"],"public_file/".$file_name)){
					echo "<script>alert('"."上传成功"."')</script>";
					echo "<script>window.open('pub_down.php','_self');</script>";
				}else{
					echo "<script>alert('"."<br>上传失败<br>"."')</script>";
				}
			}
		}
	}
?>


</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?></body>