<body style="">
<?php
	include_once("../../include/header.php");
	include_once("functions/left.php");
	include_once("functions/right_top.php");
?>

	<a>下载公开文件</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>

<head>
	<meta charset="UTF-8">
	<title>未教-公开资料下载</title>
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
		$file = scandir("public_file");
		foreach ($file as $key => $value) {
			if($key>1)
				echo "<a href='public_file/{$value}' download='{$value}'>".$value."</a><br>";
		}
	?>
	<br>
	<a href="/index.php">首页</a>
	<a href="pub_up.php">继续上传</a>

</div>


</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?>