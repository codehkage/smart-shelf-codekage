<?php 
include 'db_con.php';
// $var1 = $_POST['var1'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	print"<script> alert('Successfully created a School'); </script>";
}
?>