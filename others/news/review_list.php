<body style="">
<?php
include_once("../../include/header.php");
include_once("functions/news_left.php");
include_once("functions/right_top.php");
?>

	<a href="review.php">评论浏览</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>

<style>
.review_list{
	padding-left: 100px;
	padding-top: 20px;
}
.review_list a{
	color: blue;
}
.review_list a:hover{
	color: red;
	text-decoration: underline;
}
</style>
<div class="review_list">
	<?php

	include_once("functions/database.php");
	include_once("functions/page.php");
	include_once("functions/is_login.php");
	include_once("functions/is_admin.php");
	if(!session_id()){
		session_start();
	}

	if(is_admin()){
		$sql = "select * from review";
	}else{
		$sql = "select * from review where state='已审核'";
	}

	get_connection();

	$result_news = mysql_query($sql);

	$total_records = mysql_num_rows($result_news);

	$page_size = 5;

	if(isset($_GET["page_current"])){
		$page_current = $_GET["page_current"];
	}else{
		$page_current = 1;
	}

	$start = ($page_current - 1) * $page_size;

	$result_sql = "select * from review order by review_id desc limit $start, $page_size";

	$result_set = mysql_query($result_sql);

	close_connection();

	echo "系统所有评论信息如下:<br/>";

	while($row = mysql_fetch_array($result_set)){
		echo "评论内容:".$row["content"]."<br/>";
		echo "日期:".$row["publish_time"]."&nbsp;&nbsp;";
		echo "IP地址:".$row["ip"]."&nbsp;&nbsp;";
		echo "状态:".$row["state"]."<br/>";

		if(is_admin()){
			echo "<a href = 'review_delete.php?review_id=".$row["review_id"]."&page_current=".$page_current."'>删除</a>";
			echo "&nbsp;&nbsp;&nbsp;";
			if($row["state"] == "未审核"){
				echo "<a href = 'review_verify.php?review_id=".$row["review_id"]."&page_current=".$page_current."'>审核</a>";
			}
		}
		echo "<hr style='height:1px;background:gray;width:500px;'/>";
	}

	$url = "review_list.php";
	?>
</div>
<style>
	.page{
		text-align: center;
		margin-top: 30px;
	}
	.page a{
		margin-left: 15px;
	}
	.page a:hover{
		color: blue;
	}
	.page span{
		margin-left: 50px;
		letter-spacing: 2.5px;
	}
</style>
<div class="page">
	<?php
		page($total_records, $page_size, $page_current, $url, "");
		if(isset($_GET['message'])){
			$message = $_GET['message'];
			echo "<script>alert('{$message}')</script>";
		}
	?>
</div>

</div>
<div style="clear: both;"></div>
<?php include_once("../../include/bottom.php"); ?></body>