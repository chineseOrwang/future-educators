<body style="">
<?php
include_once("../../include/header.php");
include_once("functions/news_left.php");
include_once("functions/right_top.php");
?>

	<a href="news_list.php">新闻浏览</a>
	&nbsp;&gt;&nbsp;
	<a>新闻详情</a>
</div>

<?php

include_once("functions/database.php");

$news_id = $_GET["news_id"];

$sql_news_update = "update news set clicked=clicked+1 where news_id=$news_id";
$sql_news_detail = "select * from news where news_id=$news_id";
// $sql_news_detail = "select * from news order by news_id desc";
$sql_review_query = "select * from review where news_id=$news_id and state='已审核'";

get_connection();

$result_news = mysql_query($sql_news_detail);
// print_r(mysql_query($result_news));
$result_review = mysql_query($sql_review_query);

//取出结果集中新闻条数
$count_news = mysql_num_rows($result_news);
//取出结果集中该新闻"已审核"的评论条数
$count_reviews = mysql_num_rows($result_review);

if($count_news == 0){
	echo "该新闻不存在或已被删除!";
	exit;
}

//根据新闻信息中的id查询对应的用户信息
$news = mysql_fetch_array($result_news);
$id = $news["id"];
$sql_user = "select * from u_users where id=$id";
$result_user = mysql_query($sql_user);
$user = mysql_fetch_array($result_user);
//根据新闻信息中的category_id查询对应的新闻类别信息
$category_id = $news["category_id"];
$sql_category = "select * from category where category_id=$category_id";
$result_category = mysql_query($sql_category);
$category = mysql_fetch_array($result_category);
close_connection();

mysql_free_result($result_user);
mysql_free_result($result_category);
mysql_free_result($result_news);
mysql_free_result($result_review);

$title = $news['title'];
$content = $news['content'];
if(isset($_GET['keyword'])){
	$keyword = $_GET["keyword"];
	$replacement = "<b><i>".$keyword."<b><i>";
	$title = str_replace($keyword, $replacement, $title);
	$content = str_replace($keyword, $replacement, $content);
}

?>
<style>
	.news_detail{
		padding-top:15px;
		width: 80%;
		margin: 0 auto;
	}
	.news_detail h1{
		font-size: 30px;
		text-align: center;
	}
	.news_detail span{
		margin-right: 35px;
		font-size: 14px;
		font-family: "Microsoft YaHei";
		color: rgb(153,153,153);
		line-height: 2.465;
	}

</style>
<div class="news_detail">
	<h1><?php echo $title?></h1>
	<span >类别:<?php echo $category['name'];?></span>
	<span>发布时间:<?php echo $news['publish_time'];?></span>
	<span style="float: right;margin-right: 20px;">发布者:<?php echo $user['username'];?></span>

	<div class="content" style="border: outset 2px #98bf21;padding: 5px;">
		<p><?php echo html_entity_decode($content,ENT_QUOTES,'utf-8')?></p>
	</div>

	<span class="span">
	<?php
		if($count_reviews > 0){
			echo "<a href = 'review_news_list.php?news_id=".$news['news_id']."'>共有".$count_reviews."条评论</a></br/>";
		}else{
			echo "该新闻暂无评论!<br/>";
		}
	?>
	</span>

	<br/>
	<form action="review_save.php" method="post" style="padding-left: 166px;">
		添加评论:
		<br>
		<textarea name = "content" cols = "50" rows = "5" style="border: #999 solid 1px;padding: 4px 0 4px 4px;"></textarea>
		<br/>
		<input type="hidden" name="news_id" value="<?php echo $news['news_id'];?>">
		<input type="submit" value="评论" style="width: 100px;height: 34px;">
	</form>
</div>
<?php
	if(isset($_GET['message'])){
		$message = $_GET['message'];
		echo "<script>alert('{$message}')</script>";
	}
?>

</div>
<div style="clear: both;"></div>
<?php include_once("../../include/bottom.php"); ?></body>