<?php 
include 'db_con.php';
$name = mysqli_real_escape_string($connect, $_POST['name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$school = mysqli_real_escape_string($connect, $_POST['school']);

$query = "SELECT 'id' FROM profesional_users WHERE email ='$email'";
            $query_run = mysqli_query($connect, $query);
            if (mysqli_num_rows($query_run) > 0) {
               echo "Email Already Exist";
         }
         else{
            $query = "SELECT 'id' FROM profesional_users WHERE email ='$email'";
            $query_run = mysqli_query($connect, $query);
            if (mysqli_num_rows($query_run) > 0) {
               echo "Email Already Exist";
         }
         else{
          $status="OK";
            if ($status=="OK") {
                        $insertme = mysqli_query($connect, "INSERT INTO profesional_users (username, email, phone, password, school) VALUES ('$name','$email','$phone','$password','$school')");
                        if ($insertme) {
                        echo "Registered Successfully";
                    }
                    $profile = "include/page/profile/default/boy-5.png";
                    $insertme = mysqli_query($connect, "INSERT INTO profile_pics (username, email, image_path) VALUES ('$name','$email', '$profile')");
                }
            }
     }



        
        
?>