<?php 
session_start();
include 'db_con.php';
$name = mysqli_real_escape_string($connect, $_POST['name']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);
$institution = mysqli_real_escape_string($connect, $_POST['institution']);
$school = mysqli_real_escape_string($connect, $_POST['school']);
$program = mysqli_real_escape_string($connect, $_POST['program']);
$faculty = mysqli_real_escape_string($connect, $_POST['faculty']);
$department = mysqli_real_escape_string($connect, $_POST['department']);
 
         $status="OK";
            if ($status=="OK") {
                $sql = "UPDATE user SET username='$name',phone='$phone',phone='$phone',institution='$institution',school='$school',programme='$program',faculty='$faculty',department='$department' WHERE email = '".$_SESSION['email']."'";
                  if ($connect->query($sql) === TRUE) {              
            } else {
                echo "Error updating record: " . $connect->error;
            }     
            }
?>