<?php 
session_start();
include 'db_con.php';
$name = mysqli_real_escape_string($connect, $_POST['name']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);
$school = mysqli_real_escape_string($connect, $_POST['school']);
$field = mysqli_real_escape_string($connect, $_POST['field']);
$faculty = mysqli_real_escape_string($connect, $_POST['faculty']);
$department = mysqli_real_escape_string($connect, $_POST['department']);

         $status="OK";
            if ($status=="OK") {
                $sql = "UPDATE profesional_users SET username='$name',phone='$phone',phone='$phone',school='$school',faculty='$faculty',department='$department',field='$field' WHERE email = '".$_SESSION['email']."'";
                  if ($connect->query($sql) === TRUE) {              
            } else {
                echo "Error updating record: " . $connect->error;
            }     
            }
?>