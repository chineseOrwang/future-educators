<?php 
include 'connect.php';
// addcategory();   //插入类别
// addnews();    //插入新闻
// deletenews();   //删除新闻
addreview();
// update();
function addcategory(){
    global $con;

    for($i=1;$i<27;$i++){
        $str = chr(96+$i);
        $sex = $i%2;
        $sql = "insert into category values('{$i}','category{$i}')";
        echo $sql;

        if($con->query($sql)===TRUE){
            echo "类别插入成功"."<br>";
        }else{
            echo "类别插入失败"."<br>";
        }

    }
}
function addnews(){
    global $con;
    $time = "2019-04-23 12:36:45";

    for($i=1;$i<20;$i++){
        $str = chr(96+$i);
        $sex = $i%2;
        $sql = "insert into news(news_id,id,category_id,title,content,publish_time,clicked,attachment) values('{$i}','{$i}','{$i}','title_{$str}','content_{$str}','{$time}','0','0')";
        echo $sql;

        if($con->query($sql)===TRUE){
            echo "新闻插入成功"."<br>";
        }else{
            echo "新闻插入失败"."<br>";
        }

    }
}
function deletenews(){
    global $con;

    for($i=3;$i<20;$i++){
        $sql = "delete from news where id={$i}";
        echo $sql;

        if($con->query($sql)===TRUE){
            echo "新闻删除成功"."<br>";
        }else{
            echo "新闻删除失败"."<br>";
        }
    }
}
function update(){
    global $con;

    $sql = "update review set state='已审核' where review_id=1";
    if($con->query($sql)){
        echo "更改成功";
    }else{
        echo "更改失败".$con->query($sql);
    }
}
function addreview(){
    global $con;

    // $news_id = $_POST["news_id"];
    // $content = $_POST["content"];
    $currentDate = date("Y-m-d H:i:s");
    $ip = $_SERVER["REMOTE_ADDR"];
    $state = "未审核";
    for($i=1;$i<10;$i++){   //每条新闻增加$i条评论
        for($news_id=3;$news_id<27;$news_id++){   //给哪几条新闻增加
            $sql = "insert into review values(null, '$news_id', '{$news_id}的第{$i}条评论', '$currentDate', '$state', '$ip')";  
            echo $sql;

            if($con->query($sql)===TRUE){
                echo "评论插入成功"."<br>";
            }else{
                echo "评论插入失败"."<br>";
            }
        }
    }
}
?>