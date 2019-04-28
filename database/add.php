<?php 
    include 'connect.php';
    
    $time = time();
    for($i=1;$i<27;$i++){
        $str = chr(96+$i);
        $str .= $str;
        $str .= $str;
        $sex = $i%2;
        $sql = "insert into u_users(id,username,password,sex,email,zc_time) values('{$i}','{$str}','{$str}','{$sex}','{$str}.163.com','{$time}')";
        echo $sql;

        if($con->query($sql)===TRUE){
         echo "注册成功"."<br>";
        }else{
         echo "注册失败"."<br>";
        }

    }
?>