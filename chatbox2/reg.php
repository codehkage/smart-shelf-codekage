<!DOCTYPE html>
<html>
<head>
  <title>Chat2</title>

  <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content="IE=edge">
    <meta name = viewport content = "width = device-width, initial-scale = 1.0">

    <link rel="stylesheet" type="text/css" href="bootstraps/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" src="bootstraps/js/jquery-3.1.0.min">
  <link rel="stylesheet" type="text/css" src="bootstraps/js/bootstrap">

  <link rel="stylesheet" type="text/css" src="bootstraps/js/bootstrap.min">
   <link rel="stylesheet" type="text/css" src="css/design.css">

    <link rel="stylesheet" type="text/css" src="css/style1.css">

      <link rel="stylesheet" href="css/reset.css" type="text/css" />

  <link rel = "stylesheet" media = "screen" href = "css/color-switcher.css" /

  <link rel="stylesheet" href="css/sky-forms.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" src="css/style1.css">
      <link rel="stylesheet" href="css/reset.css" type="text/css" />
 
  <link rel="stylesheet" href="css/sky-forms.css" type="text/css" media="all">
    
    <script src="http:ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script>
    <script type="text/javascript" src="check.js"></script>
</head>
<body style="background:gray;    background-size: cover;
    background-position: top center;">
                  
<div class="container">
<br>
<div class="clearfix"></div>

<div class="container">

  <div class="">
  
        <div class="regtwo" style=" opacity:.9;max-width:500px !important; margin:auto;background:white;padding: 20px 35px 13px 35px; border-radius:15px;">
 
<form name="frmRegistration" method="post" action="" id="" class="sky-form" >
<header style="padding-left:0px;">CREATE A NEW ACCOUNT</header>

<?php
  $connect = new mysqli("localhost", "root", "", "chat2_db");
  if ($connect->connect_errno) {
    echo "Failed to Connect to SQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // print"<script> alert('I am Working'); </script>";

    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
    $userEmail = mysqli_real_escape_string($connect, $_POST['userEmail']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);
    $phonenumber = mysqli_real_escape_string($connect, $_POST['phonenumber']);
    $state = mysqli_real_escape_string($connect, $_POST['state']);
    // $gender = mysqli_real_escape_string($connect, $_POST['gender']);

    $status="OK";
     

        if(!empty($username)&&!empty($userEmail)&&!empty($phonenumber)){
            $query = "SELECT 'id' FROM register WHERE username='$username' AND userEmail='$userEmail' AND phonenumber='$phonenumber'";
          if ($query_run = mysql_query($query)){
           $query_num_rows = mysql_num_rows($query_run); 
           if ($query_num_rows==0) {
             $status="NOT_OK";
             if ($status=="NOT_OK") {
             echo "
               <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width:300px; margin:auto; height:40px;'>
        <p style='text-align:center;color:black'> Details already exit </p>
         </div><br>";
    
           }
         }
       }
     }

        if ($username == " " || $firstname == " " || $lastname == " " || $userEmail == " " || $password == " " || $phonenumber == " " || $state == "") {
        $status="NOT_OK";
        if ($status=="NOT_OK") {
        echo "
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
        <p style='text-align:center'> Fill up all the filed </p>
        </div>
        <br>
        ";
        }
        }
else{

    if (strlen($username) < 5) {
      $status="NOT_OK";
      if ($status=="NOT_OK") {       
        echo " 
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
        <p> Username should me more than 5 characters </p>
        </div>
         <br>
        ";

      }
    }

       if (strlen($password) < 5) {
      $status="NOT_OK";
      if ($status=="NOT_OK") {

        echo " 
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
        <p>Password should me more than 5 characters</p>
        </div>
       <br>
        ";
      }
    }

       if (strlen($phonenumber) < 11) {
            $status="NOT_OK";
            if ($status=="NOT_OK") {
                
        echo " 
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
        <p> Phonenumber should not be less than 11 characters </p>
        </div><br>";
            }
          }

         
          if($password != $confirm_password){
          $status="NOT_OK";
            if ($status=="NOT_OK") { 
              echo " 
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
        <p>Password should be the same</p>
        </div><br>";
         }
       }


       if (strlen($phonenumber) > 11) {
      $status="NOT_OK";
      if ($status=="NOT_OK") {
        echo " 
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
       <p> Phonenumber should not be more than 11 characters </p>
        </div><br>";
      }
    }

  
          
$sql=mysqli_query($connect, "SELECT * FROM register  WHERE username = '$username'");
  if(mysqli_num_rows($sql) > 0){
    $status="NOT_OK"; 
    echo " <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; width=50%; margin-top:10px; height=70px;'>
        <p> Deatils Already Exists </p>
        </div>
         <br>";
  
 }else{

    if ($status=="OK") {
      $insertme = mysqli_query($connect, "INSERT INTO register (username, firstname, lastname, userEmail, pasword, phonenumber, state) VALUES ('$username', '$firstname', '$lastname', '$userEmail', '$password', '$phonenumber',
        '$state')");
      if ($insertme) {
        echo " 
        <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:lightgreen; width=50%; margin-top:10px; height=70px;'>
       <p> Successfully registered</p>
        </div>
        <br>
        ";
        header("location:index.php");
      }
      }
    }
  }
  }
?>


<section>
              <label class="input">
                <input type="text" name="username" placeholder="Username">
              </label>
            </section>
            <div class="row">
            <section class="col">
              <label class="input">
                <input type="text" name="firstname" placeholder="First name">
              </label>
            </section>
          <section class="col">
              <label class="input">
                <input type="text" name="lastname" placeholder="Last name">
              </label>
            </section>
</div>
              <section>
            <label class="input">
              <i class="icon-append icon-envelope-alt"></i>
              <input type="email"placeholder="Email address" id="email"class="demoInputBox" name="userEmail" >
             
            </label>
          </section>
          
          <section>
            <label class="input">
              <i class="icon-append icon-lock"></i>
              <input type="password" name="password"  placeholder="Password" id="password" >
              </label>
          </section>
          
          <section>
            <label class="input">
              <i class="icon-append icon-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirm password" >
              </label>
          </section>
             <section class="">
              <label class="input">
                <input type="text" name="phonenumber" placeholder="Phone Number" >
              </label>
            </section>
         <!--    <section class="">
              <label class="input">
                <select type="text" name="state" placeholder="State" >

</select>
              </label>
            </section> -->
  

        </fieldset>
          
        <fieldset>
                      

       <section>
            <label class="select">
              <select name="state">
                <option value="Gender" selected disabled>State</option>
                <option>Outside Nigeria</option>
<option>ABUJA FCT</option>
<option>ABIA</option>
<option>ADAMAWA</option>
<option>AKWA IBOM</option>
<option>ANAMBRA</option>
<option>BAUCHI</option>
<option>BAYELSA</option>
<option>BENUE</option>
<option>BORNO</option>
<option>CROSS RIVER</option>
<option>DELTA</option>
<option>EBONYI</option>
<option>EDO</option>
<option>EKITI</option>
<option>ENUGU</option>
<option>GOMBE</option>
<option>IMO</option>
<option>JIGAWA</option>
<option>KADUNA</option>
<option>KANO</option>
<option>KATSINA</option>
<option>KEBBI</option>
<option>KOGI</option>
<option>KWARA</option>
<option>LAGOS</option>
<option>NASSARAWA</option>
<option>NIGER</option>
<option>OGUN</option>
<option>ONDO</option>
<option>OSUN</option>
<option>OYO</option>
<option>PLATEAU</option>
<option>RIVERS</option>
<option>SOKOTO</option>
<option>TARABA</option>
<option>YOBE</option>
<option>ZAMFARA</option>
              </select>
              <i></i>
            </label>
          </section>
                  </fieldset>
        <footer>
          <input type="submit" name="submit" id="myBtn" class="button" value="Submit" >
         
        </footer>

</form>
</div>
</div>
</div>
</div>

</body>
</html