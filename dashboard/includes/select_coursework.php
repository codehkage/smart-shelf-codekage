<?php 
include 'db_con.php';
    $output='';
    $sql = "SELECT * FROM course_work where school_name ='".$_POST["school_name"]."' AND course_type = 'General'";
    $result = mysqli_query($connect, $sql);
    	echo" <h4> GENERAL COURSES</h4>";
      $i=0;
           while ($row = mysqli_fetch_array($result)) {
            $i++;
    		echo"<div class='checkbox-inline'><label><input type='checkbox' value='".$row['course_code']."' name= $i; ".$row['course_code']."</label></div>";       	
    }

        $sql = "SELECT * FROM course_work where school_name ='".$_POST["school_name"]."' AND course_type = 'Faculty'";
    $result = mysqli_query($connect, $sql);
    	echo" <h4> FACULTY COURSES</h4>";
      $i=10;
           while ($row = mysqli_fetch_array($result)) {
            $i++;
           	echo"<div class='checkbox-inline'><label><input type='checkbox' value='".$row['course_code']."' name= $i;".$row['course_code']."</label></div>";
    }

        $sql = "SELECT * FROM course_work where school_name ='".$_POST["school_name"]."' AND course_type = 'Departmental'";
    $result = mysqli_query($connect, $sql);
    	echo" <h4> DEPARTMENTAL COURSES</h4>";
      $i=20;
           while ($row = mysqli_fetch_array($result)) {
            $i++;
           		echo"<div class='checkbox-inline'><label><input type='checkbox' value='".$row['course_code']."' name= $i; ".$row['course_code']."</label></div>";
    }  
?>