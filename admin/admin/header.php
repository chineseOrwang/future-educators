<?php
/**
 * 公用头部
 */
?>

<style>
    a,.now{
        text-decoration: none;
        font-size: 30px;
        color: black;
    }
    a:hover{
        color: #CD75D8;
        text-decoration: underline;
    }
    .navleft {
        float: left;
        padding: 10px 0px 0px 10px;
    }

    .navright {
        padding: 10px 10px 0px 10px;
        float: right;
    }


</style>

<div class="top" style="width: 100%;height: 50px;background: #5573b7;">
	<div class="navleft">
	    <a href="index.php">鲁大未来教育家协会用户管理</a>
	</div>

	<div class="navright">
	    <span class="now">当前人员:</span><span style="color: white;font-size: 30px;"><a href="#"><?php echo $_SESSION['admin']['username']; ?></a><span>
	    <a href="loginout.php">退出登录</a>
	</div>
</div>

