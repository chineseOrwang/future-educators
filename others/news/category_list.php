<body style="">
<?php
include_once("../../include/header.php");
include_once("functions/news_left.php");
include_once("functions/right_top.php");
?>

	<a>类别列表</a>
</div>

<?php
include_once("functions/database.php");
include_once("functions/page.php");
include_once("functions/is_login.php");

if(!session_id())
{
	session_start();
}
if(isset($_GET["message"])){
	echo $_GET["message"]."<br/>";
}

$search_sql = "select * from category order by category_id desc";


get_connection();

$result_news = mysql_query($search_sql);

$total_records = mysql_num_rows($result_news);

$page_size = 10;

if(isset($_GET["page_current"])){
	$page_current = $_GET["page_current"];
}else{
	$page_current = 1;
}

$start = ($page_current - 1) * $page_size;

$search_sql = "select * from category order by category_id desc limit $start, $page_size";



$result_set = mysql_query($search_sql);

close_connection();

if(mysql_num_rows($result_set) == 0){
	exit("暂无记录!");
}

while($row = mysql_fetch_array($result_set)){
?>
<style>
	.table{
		padding-top:5px;
	}
	.table a{
		margin-left: 15px;
	}
	.table a:hover{
		color: blue;
		text-decoration: underline;
	}
</style>
<table class="table">
<tr>
	<td>
		<p><?php echo $row['name'];?></p>
	</td>
	<?php 
   
	if(is_login()){
	?>

	<td>
		<a href = "category_delete.php?category_id=<?php echo $row['category_id']?>" onclick="return confirm('确定删吗?');">删除</a> 
	</td>
	<?php
    }
   ?>
</tr>
<?php
}

?>
</table>
<?php
$url = "category_list.php";
?>

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
	?>
</div>

</div>
<div style="clear: both;"></div>
<?php include_once("../../include/bottom.php"); ?></body>