<body style="width: 10000px;">
    
<?php 
include 'connect.php';

$sql = "show tables;";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<span style='color:red'>";
        echo $row["Tables_in_volunteer_teaching"];
        echo "</span>";
        echo "<br>";
        showcolname("{$row['Tables_in_volunteer_teaching']}");
        echo "<br>";
        showtable("{$row['Tables_in_volunteer_teaching']}");
        echo "<hr>";
    }
} else {
    echo "0 结果";
}
// showtable("u_users");
function showcolname($table){
    $sql = "show columns from {$table}";
    global $con;
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<span style='color:blue'>";
            // print_r($row);
            $chu = $row["Field"]." ".$row["Type"];
            printf("%-'_20.20s",$chu);
            echo "</span>|&nbsp;";
        }
    } else {
        echo "无列名";
    }
}
function showtable($table){
    $sql = "select * from {$table}";
    global $con;
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                printf("%-'_20.20s",$value);
                echo "</span>|&nbsp;";
            }
            echo "<br>";
        }
    } else {
        echo "无表";
    }
}

?>

</body>