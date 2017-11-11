<?php 
include 'db_con.php';
$name = mysqli_real_escape_string($connect, $_POST['name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$institution = mysqli_real_escape_string($connect, $_POST['institution']);
$school = mysqli_real_escape_string($connect, $_POST['school']);
$program = mysqli_real_escape_string($connect, $_POST['program']);
$faculty = mysqli_real_escape_string($connect, $_POST['faculty']);
$department = mysqli_real_escape_string($connect, $_POST['department']);

$query = "SELECT 'id' FROM user WHERE email ='$email'";
            $query_run = mysqli_query($connect, $query);
            if (mysqli_num_rows($query_run) > 0) {
               echo "Email Already Exist";
         }
         else{
         $status="OK";
            if ($status=="OK") {
                        $insertme = mysqli_query($connect, "INSERT INTO user (username, email, phone, password, institution, school, programme, faculty, department) VALUES ('$name','$email','$phone','$password', '$institution','$school',' $program', '$faculty', '$department')");
                        if ($insertme) {
                        echo "Registered Successfully";
                    }
                    $profile = "include/page/profile/default/boy-5.png";
                    $insertme = mysqli_query($connect, "INSERT INTO profile_pics (username, email, image_path) VALUES ('$name','$email', '$profile')");
                        if ($insertme) {
                        
                      $query = ("SELECT * FROM chat_rooms WHERE name = '$department' and faculty = '$faculty' and school = '$school'");
                                $result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                           $id = $row['id'];
                                $insertme = mysqli_query($connect, "INSERT INTO chat_users_rooms(username, room_id, mod_time) VALUES ('$email', '$id', '')");
                                        if ($insertme) {
                                       
                                    }

                                }
                        }
            }
        }

?>