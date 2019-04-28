<style>
*{margin:0;padding: 0;}
li{
	display: list-item;
}
.left_nav{
	width: 20%;
	height: 92.8%;
	position: absolute;
	background: #383d40;
}
.left_nav ul{
	width: 100%;
	height: 500px;
	margin-top: 0;
	margin-bottom: 10px;
}
.left_nav a{
	color: #337ab7;
	text-decoration: none;
}
.left_nav a:hover{
	text-decoration: underline;
}
.left_nav ul li{
	color: #5573b7;
	background: #e4e4e4;
	height: 75px;
	text-align: center;
	line-height: 75px;
	font-size: 15px;
	cursor: pointer;
	border-bottom: 1px solid #383d40;
}
</style>
<div class="left_nav">
	<ul>
		<a href="index.php">
			<li class="">用户管理</li>
		</a>
		<a href="ser.php">
			<li class="">查询用户</li>
		</a>
<!-- 		<a href="cha.php">
			<li class="">查看用户</li>
		</a>
		<a href="xiu.php">
			<li class="">修改用户</li>
		</a> -->
	</ul>
</div>