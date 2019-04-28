<body style="">
<?php
include_once("../../include/header.php");
include_once("functions/news_left.php");
include_once("functions/right_top.php");
?>

	<a href="news_list.php">新闻浏览</a>
	&nbsp;&gt;&nbsp;
	<a>评论详情</a>
</div>

<style>
	hr{
		height: 1px;
		background: rebeccapurple;
		width: 500px;
	}
</style>
<div style="padding: 10px 100px;">
<?php
include_once("functions/database.php");
if(isset($_GET["news_id"])){
	$news_id = $_GET["news_id"];

	$sql = "select * from review where news_id=$news_id and state='已审核' order by review_id desc";

	get_connection();

	$result_set = mysql_query($sql);

	close_connection();

	echo "该新闻的评论如下:<br/>";

	while($row = mysql_fetch_array($result_set)){
		echo "评论内容:".$row["content"]."<br/>";
		echo "评论日期:".$row["publish_time"]."<br/>";
		echo "评论IP地址:".$row["ip"]."<hr/>";
	}
}else{
	echo "未选择新闻";
}
?>
</div>

</div>
<div style="clear: both;"></div>
<?php include_once("../../include/bottom.php"); ?></body>