<?php 
    include 'connect.php';

    for($i=30;$i<37;$i++){
        $sql = "delete from u_users where id={$i}";
        echo $sql;

        if($con->query($sql)===TRUE){
            echo "删除成功"."<br>";
        }else{
            echo "删除失败"."<br>";
        }

    }
?>