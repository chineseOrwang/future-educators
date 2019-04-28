<body style="">
<?php
	include_once("../../include/header.php");
	include_once("left.php");
	include_once("../news/functions/right_top.php");
?>

	<a href="amgc.php">爱满港城</a>
	&nbsp;&gt;&nbsp;
	<a>申请报名</a>
</div>

<link rel="stylesheet" href="/files/input.css">
<style>
	.title{
		font-size: 18px;
	    font-weight: bold;
	    height: 45px;
	    line-height: 45px;
	    text-align: center;
	    border-bottom: 1px solid #e5e5e5;
	    margin-bottom: 5px;
	}
	.faqline{
		line-height: 2em;
		height: 50px;
		text-align: left;
		margin: 0 230px;
	}
	.faqline .faqtit {
	    width: 110px;
	    display: block;
	    float: left;
	    clear: both;
	    text-align: right;
	    font-size: 20px;
	    line-height: 40px;
	}
	.faqline input[type=radio]{
		margin-left: 100px;
		margin-top: 13px;
	}
	.faqline select{
		height: 35px;
		width: 100px;
	}
	.faqtit+input[type=text]{
		border: #B7DAEF 1px solid;
	    width: 350px;
	    height: 30px;
	    font-size: 20px;
	}
	.faqline>button{
		width: 100px;
		height: 50px;
		margin-top: 10px;
		margin-right: 148px;
	}
	textarea{
		font-size: 20px;
	}
</style>
<div class="content">
	<form action="info_save.php" method="post">
		<input type="text" name="cata" value="amgc" style="display: none;">
		<div class="title">爱满港城在线报名</div>
		<div class="faqline"><span class="faqtit">姓名：</span><input type="text" name="name"></div>
		<div class="faqline"><span class="faqtit">手机：</span><input type="text" name="phone"></div>
		<div class="faqline"><span class="faqtit">QQ：</span><input type="text" name="QQ"></div>
		<div class="faqline"><span class="faqtit">年龄：</span><input type="text" name="age"></div>
		<div class="faqline"><span class="faqtit">性别：</span>
			<input type="radio" name="sex" value="男" checked="">男
			<input type="radio" name="sex" value="女">女</div>
		<div class="faqline"><span class="faqtit">学院：</span><input type="text" name="institute"></div>
		<div class="faqline"><span class="faqtit">专业：</span><input type="text" name="major"></div>
		<div class="faqline"><span class="faqtit">年级：</span><select name="grade" id="">
					<option value="大一">大一</option>
					<option value="大二">大二</option>
					<option value="大三">大三</option>
					<option value="大四">大四</option>
				</select></div>
		<div class="faqline"><span class="faqtit">擅长科目：</span><input type="text" name="subject"></div>
<!-- 		<div class="faqline"><span class="faqtit">是否有教师资格证：<br></span>
			<input type="radio" name="certification" value="yes" checked="">是
			<input type="radio" name="certification" value="no">否</div> -->
		<div class="faqline" style="height: auto;"><span class="faqtit">备注：</span><textarea name="comments" id="" cols="47" rows="10" placeholder="是否有教师资格证等"></textarea></div>
		<div class="faqline" style="height: auto;">
			<span class="faqtit">&nbsp;</span>
			<button type="submit" value="提交">提交</button>
			<button type="reset" value="重置">重置</button>
		</div>
	</form>
</div>

<?php 
	if(isset($_GET['message'])){
		$message = $_GET['message'];
		echo "<script>alert('".$message."')</script>";
	}
 ?>

</div>
<div style="clear: both;"></div><?php include_once("../../include/bottom.php"); ?></body>