<?php 
include 'db_con.php';
$table = mysqli_real_escape_string($connect, $_POST['table']);
$id = mysqli_real_escape_string($connect, $_POST['id']);

    $output='';
    $sql = "DELETE FROM $table where id = '$id'";
    $result = mysqli_query($connect, $sql);
    echo "DELETEED";
?>