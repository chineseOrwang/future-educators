<body style="">
<?php
	include_once("../../include/header.php");
	include_once("functions/news_left.php");
	include_once("functions/right_top.php");
?>

	<a href="news_list.php">新闻浏览</a>
	<!-- &nbsp;&gt;&nbsp; -->
</div>

<?php
	include_once("functions/database.php");
	include_once("functions/page.php");
	include_once("functions/is_login.php");
	include_once("functions/is_admin.php");


	if(!session_id()){
		session_start();
	}
	// if(is_login()){
	// 	echo "已登录";
	// }else{
	// 	echo "未登录";
	// }

	$search_sql = "select * from news order by news_id desc";

	$keyword = "";

	if(isset($_GET["keyword"])){
		$keyword = trim($_GET["keyword"]);
		$search_sql = "select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc";
	}
?>
<style>
	.sear_form{
		text-align: center;
		padding-top: 10px;
	}
	.sear_form input{
		margin-left: 20px;
		border: #999 solid 1px;
		padding: 4px 0 4px 4px;
	}
	.search{
		width: 50px;
	}
	.news_list_table td{
		width: 100px;
		border-right: #999 solid 1px;
		text-align: center;
		height: 24px;
	}
	.news_list_table td:first-child{
		width: 400px;
		text-align: left;
		text-indent: 2em;
	}
	.news_list_table:hover{
		color: blue;
	}
	.news_list_table a:hover{
		color: blue;
	}
</style>
<form action = "news_list.php" method="get" class="sear_form">
	请输入关键字:
	<input type="text" name="keyword" value="<?php echo $keyword?>">
	<input type="submit" value="搜索" class="search">
</form>
<br/>
<table class="news_list_table">
<?php

get_connection();

$result_news = mysql_query($search_sql);

$total_records = mysql_num_rows($result_news);

$page_size = 11;

if(isset($_GET["page_current"])){
	$page_current = $_GET["page_current"];
}else{
	$page_current = 1;
}

$start = ($page_current - 1) * $page_size;

$search_sql = "select * from news order by news_id desc limit $start, $page_size";

if(isset($_GET["keyword"])){
	$keyword = $_GET["keyword"];
	$search_sql = "select * from news where title like '%$keyword%' or content like '%$keyword%' order by news_id desc limit $start,$page_size";
}

$result_set = mysql_query($search_sql);

close_connection();

if(mysql_num_rows($result_set) == 0){
	exit("暂无记录!");
}

while($row = mysql_fetch_array($result_set)){
?>

<tr>
	<td>
		<a href = "news_detail.php?keyword=<?php echo $keyword?>&news_id=<?php echo mb_strcut($row['news_id'], 0, 40, "utf8")?>"><?php echo mb_strcut($row['title'], 0, 40, "utf8")?></a>
	</td>
	<?php
		if((is_login()&&($_SESSION['id']==$row['id']))||is_admin()){
	?>
		<td>
			<a href = "news_edit.php?news_id=<?php echo $row['news_id']?>">编辑</a>
		</td>
		<td>
			<a href = "news_delete.php?news_id=<?php echo $row['news_id']?>" onclick = "return confirm('确定删除吗?');">删除</a> 
		</td>
		<?php
	}
	?>
</tr>
<?php
};
	$url = $_SERVER["PHP_SELF"];
?>
</table>

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
		page($total_records, $page_size, $page_current, $url, $keyword);
		if(isset($_GET["message"])){
			$message = $_GET['message'];
			echo "<script>alert('{$message}')</script>";
		}
	?>
</div>

</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?></body>