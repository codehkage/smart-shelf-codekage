<?php 
include 'db_con.php';
    $output='';
    $sql = "DELETE FROM  school where id = '".$_POST["detail"]."' ";
    $result = mysqli_query($connect, $sql);
    echo "DELETEED";
?>