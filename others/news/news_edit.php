<body style="">
<?php
include_once("../../include/header.php");
include_once("functions/news_left.php");
include_once("functions/right_top.php");
?>

	<a href="news_list.php">新闻浏览</a>
	&nbsp;&gt;&nbsp;
	<a>新闻编辑</a>
</div>
<link rel="stylesheet" href="/files/input.css">

<?php
include_once("functions/database.php");
include_once("functions/is_login.php");
if(!session_id()){
	session_start();
}

$news_id = $_GET["news_id"];

get_connection();

$result_news = mysql_query("select * from news where news_id=$news_id");

$result_category = mysql_query("select * from category");

close_connection();

$news = mysql_fetch_array($result_news);

?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
window.onload = function()
{
    CKEDITOR.replace( 'content' );     //content是textarea的名称
    CKEDITOR.WIDTH = 550;
};
</script>
	
<form action="news_update.php" method="post" style="/*margin-left: 200px;*/margin-top: 5px;">
	标题:<br/>
	<input type="text" name="title" size = "60" value="<?php echo $news['title']?>">
	<br/>
	内容:<br>
	<textarea cols="60" rows="12" name="content"><?php echo $news['content']?></textarea>
	<br/>
	类别:
	<select name = "category_id" size = "1">
	<?php
	while($category = mysql_fetch_array($result_category)){
	?>
	<option value="<?php echo $category['category_id'];?>" <?php echo ($news['category_id'] == $category['category_id'])?"selected":""?>><?php echo $category['name'];?>
	</option>
	<?php
	}
	?>
		
	</select>
	<br/>
	<br/>
	<input type="hidden" name="news_id" value="<?php echo $news_id?>">
	<input type="submit" value="修改">
	<input type="button" value="取消" onclick = "window.history.back();" style="margin-left: 180px;">
</form>

</div>
<div style="clear: both;"></div>
<?php include_once("../../include/bottom.php"); ?></body>