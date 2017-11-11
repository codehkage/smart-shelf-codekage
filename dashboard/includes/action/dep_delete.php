<?php 
include 'db_con.php';
    $output='';
    $sql = "DELETE FROM  department where id = '".$_POST["detail"]."' ";
    $result = mysqli_query($connect, $sql);
    echo "DELETEED";
?>