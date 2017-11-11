<?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
            // print"<script> alert('I am Working'); </script>";
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            $status="OK";
            if(!empty($email)&&!empty($password)){
            $query = "SELECT 'id' FROM admin WHERE email ='$email' AND password='$password'";
            $query_run = mysqli_query($connect, $query);
            if (mysqli_num_rows($query_run) > 0) {
                 print"<script> alert('I am Working'); </script>";
                 // $username = mysqli_result($query_run, 0, 'username');
                $_SESSION['email']=$email;
                session_start();
                header('Location: dashboard.php');
         }
         else{
         echo"<p style='text-align:center;color:red'>Invaid Username/Password Combination.</p>";
        }
    }
     else{
         echo"<p style='text-align:center;color:red'>Fill up all field</p>";
        }
 }
?>
