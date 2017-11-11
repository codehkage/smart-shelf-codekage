<?php 
require 'core.php';
         session_start();

  $connect = new mysqli("localhost", "root", "", "chat2_db");
  if ($connect->connect_errno) {
    echo "Failed to Connect to SQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

 $username = $_SESSION['userid'];
	// echo $username;
$sql = "DELETE FROM chat_users WHERE username= '$username'";

if ($connect->query($sql) === TRUE) {
    echo "Record deleted successfully";
         unset($_SESSION['userid']);
		   session_destroy();
		  header('Location:index.php');
		   echo "<script type='text/javascript'>
			window.location.href = '';
			</script>";
} else {
    echo "Error deleting record: " . $connect->error;
}
    

 ?>