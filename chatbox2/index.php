<?php 
session_start();
$connect = new mysqli("localhost", "root", "", "chat2_db");
  	if ($connect->connect_errno) {
    echo "Failed to Connect to SQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	if (!isset($_SESSION['userid'])):        
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chat2</title>
    <!-- <link rel="stylesheet" type="text/css" href="main.css" /> -->
    <link rel="stylesheet" type="text/css" href="bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" src="bootstraps/js/jquery-3.1.0.min">
    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" src="bootstraps/js/bootstrap">
  	<link href="css/material-design-iconic-font.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" src="bootstraps/js/bootstrap.min">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script>
    <script type="text/javascript" src="check.js"></script>
    <link href="css/palette.css" rel="stylesheet">
    </head>
	<body class="login" data-lbg="teal">
	<div class="l-block toggled" id="l-login"  style="margin:100px auto;">
                <div class="lb-header palette-Teal bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Hi there! Please Sign in
                </div>
                <form method="post"  role="form" style="padding-left:20px;" action="jumpin.php">
                <br><br>
                <div class="lb-body">
                    <div class="form-group fg-float">
                        <div class="fg-line">
                            <input type="text" id="userid" name="userid" class="input-sm form-control fg-input">
                            <label class="fg-label">Username</label>
                        </div>
                    </div>

                    <div class="form-group fg-float">
                        <div class="fg-line">
                            <input type="password" id="userid" name="pasword"  class="input-sm form-control fg-input">
                            <label class="fg-label">Password</label>
                        </div>
                    </div>

                    <button class="btn palette-Teal bg" name="submit" id="jumpin">Sign in</button>

                    <div class="m-t-20">
                        <a data-block="#l-register" data-bg="blue" class="palette-Teal text d-block m-b-5" href="reg.php">Create an account</a>
                    </div>
                </div>
                </form>
            </div>
		<!-- <div id="page-wrap"> 
    		<div id="header" >
        		<h1><a href="./room/index.php">Chat v2</a></h1>
        	</div>
        <div id="section"  style="max-width:662px; background:white; border-radius: 15px;margin:auto; opacity:.9;">
        	<form method="post"  role="form" style="padding-left:20px;" action="jumpin.php">
        	<br><br>
    		<header style="text-align:center; font-size:22px;"> LOGIN TO CHATv2</header>
    		<br><br>
        <div  class="form-group" >
            <label for="text">Username:</label>               
                <input type="text" style="width:88%" class="form-control" id="userid" name="userid" />
        </div>
             <br>
        <div class="form-group">
                <label for="pwd">Password:</label>
 				<input type="password" class="form-control" style="width:88%" id="userid" name="pasword" />
        </div>
             <br>
             <input  style="width:90%; margin:auto;color: #fff; background-color: #337ab7;border:none; border-radius: 4px;border-color: #2e6da4; height:40px;" type="submit" value="Submit" name="submit" id="jumpin" />
           	 <br><br><br>
  			 <a href="reg.php" style="text-align:center;">Create a new account </a> 
              </div>
            </form>
        </div> -->
        
        <div id="status">
        	<?php if (isset($_GET['error'])):{}?>
        	<?php endif;?>
        </div>
</body>
<script type="text/javascript" herf="jquery-3.1.0.min.js"></script>
</html>
<?php
    else:
        require_once("chatrooms.php");
	endif;
?>