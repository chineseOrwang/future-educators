<body style="">
<?php
	include_once("../../include/header.php");
	include_once("functions/left.php");
	include_once("functions/right_top.php");
?>

	<a>下载内部文件</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>

<head>
	<meta charset="UTF-8">
	<title>未教-内部资料下载</title>
</head>
<style>
	.div{
		padding: 15px 30px;
	}
	.div a{
		color: black;
		text-decoration: underline;
		margin-left: 20px;
	}
	.div a:hover{
		color: blue;
		text-decoration: none;
	}
</style>
<div class="div">
<?php
if(!session_id()){
	session_start();
} 
if(isset($_SESSION['id'])){
	$file = scandir("private_file");
	foreach ($file as $key => $value) {
		if($key>1)
			echo "<a href='private_file/{$value}' download='{$value}'>".$value."</a><br>";
	}
}else{
	echo "<script>alert('"."无权访问,请先登录"."')</script>";
	echo "<script>window.open('/index.php','_self');</script>";
}
?>
	<br>
	<a href="/index.php">首页</a>
	<a href="pri_up.php">继续上传</a>
</div>

</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?>