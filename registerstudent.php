<?php include 'include/db_con.php';?>
<html>
<head>
	<title>Smartshelf | Register your student account</title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>	

	<link href="assets/css/bootstrap-3.3.7.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<link rel="icon"  href="assets/img/logo-1.png">
</head>
<body id="register-student-page">
	<div class="col-sm-12 hidden-lg">
		<div align="center">
			<a href="#"><img class="img-responsive smartshelf-register-student-logo" src="assets/img/logo-1.png"></a>
		</div>		
		<p class="text-center register-student-text">REGISTER</p>

		<form id="register-student-form" method="post">
		<p class="error"></p>
		<p class="success"></p>
		<div class="user_details">
			<input type="text" id="name" name="username" class="form-control input-smartshelf" placeholder="NAME">
			<input type="text" id="email" name="email" class="form-control input-smartshelf" placeholder="EMAIL">
			<input type="text" id="phone" name="phone" class="form-control input-smartshelf" placeholder="PHONE">
			<input type="password" id="password" name="password" class="form-control input-smartshelf" placeholder="PASSWORD">
			<input type="password" id="confirm-password" class="form-control input-smartshelf" placeholder="CONFIRM PASSWORD">
			<input type="button" id="register-student-btn" class="form-control continue btn-smartshelf btn-dark text-center" value="CONTINUE">
		</div>
		<div class="educational_details">
			<!-- <input type="text" id="name" class="form-control input-smartshelf" placeholder="NAME"> -->
			<select class="input-smartshelf select" id="INSTITUTION">
				<option>UNIVERSITY</option>
				<option>POLYTHECNIC</option>
				<option>COLLEGES OF EDUCATION</option>
			</select>
			<select class="input-smartshelf select" id="SCHOOL">
				<option>SCHOOL</option>
					<?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM school ");
                             	$result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo" <option>".$row['name']."</option>";
                               	}
                    ?>
			</select>
			<select class="input-smartshelf select" id="PROGRAMMES">
				<option>PROGRAMMES</option>
				<option>Remedial</option>
				<option>Under Graduate</option>
				<option>Post Graduate</option>
			</select>
			<select class="input-smartshelf select" id="FACULTY">
				<option>FACULTY/COLLAGE</option>
			</select>
			<select class="input-smartshelf select" id="DEPARTMENT">
				<option>DEPARTMENT</option>
			</select>
			<input type="button" name="submit" id="register-student-btn" style="display:block" class="form-control btn-smartshelf submit btn-dark text-center" value="SIGNUP">
		</div>		
		</form>		
	</div>
	
	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<script type="text/javascript" src="assets/js/page/reg.js"></script>
	<noscript>
		<style type="text/css">
		body {
			display: none ;
			visibility: none;
		}
	</style>
	<META HTTP-EQUIV="Refresh" CONTENT="0;URL=https://play.google.com/store/apps/details?id=com.danielobasi.smartbooks">
</noscript>
</body>
</html>