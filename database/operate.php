<?php 
	include_once("connect.php");
	// alertcol();  //修改字段名
	addcol();  //增加字段
	showtable();  //展示表结构

	//建表
	// $sql = "create table sqbm(name char(10),phone int(11),QQ char(15),age int(1),institute varchar(20),major varchar(20),grade varchar(2),subject varchar(20),comments text,cata varchar(1))";
	// echo $sql;
	// if($con->query($sql)){
	// 	echo "成功";
	// }else{
	// 	echo "失败";
	// }

	function alertcol(){
		global $con;

		$sql = "alter table sqbm modify column age int(3);";
		echo $sql;
		if($con->query($sql)){
			echo "修改成功";
		}else{
			echo "修改失败";
		}
	}
	function showtable(){
		global $con;

		$sql = "desc sqbm;";
		$result = $con->query($sql);
		// print_r($result);
		while ($row = $result->fetch_assoc()) {
			foreach ($row as $key => $value) {
				printf(" %-'_15.15s ",$value);
			}
			echo "<br>";
		}
	}
	function addcol(){
		global $con;

		$sql = "alter table sqbm add sex char(1) after age";
		echo $sql;
		if($con->query($sql)){
			echo "增加成功";
		}else{
			echo "增加失败";
		}
	}
 ?>