<?php 
include 'db_con.php';
$login_email = mysqli_real_escape_string($connect, $_POST['login_email']);
$login_password = mysqli_real_escape_string($connect, $_POST['login_password']);

$query = "SELECT 'id' FROM user WHERE email ='$login_email' AND password='$login_password'";
            $query_run = mysqli_query($connect, $query);
            if (mysqli_num_rows($query_run) > 0) {
                session_start();
                $_SESSION['email'] = $login_email;
                
                echo "<script>window.location.assign('home.php')</script>";
                // header('location: ../../home.php');
         }
         else
            {
                $query = "SELECT 'id' FROM profesional_users WHERE email ='$login_email' AND password='$login_password'";
                $query_run = mysqli_query($connect, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    session_start();
                    $_SESSION['email'] = $login_email;
                    echo "<script>window.location.assign('profesional/home.php')</script>";
                    // header('location: ../../home.php');
             }
             else{
            echo"Invaid Username/Password Combination.";
             }
            }

?>