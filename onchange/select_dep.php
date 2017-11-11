<?php 
include 'db_con.php';
    $output='';
    $sql = "SELECT * FROM department where school ='".$_POST["school_name"]."' AND faculty = '".$_POST["faculty"]."' ";
    $result = mysqli_query($connect, $sql);
          echo "<option> Select Department</option>";
           while ($row = mysqli_fetch_array($result)) {
         echo" <option>".$row['name']."</option>";
    }  
?>
 <!-- faculty = '".$_POST["school"]."' AND -->