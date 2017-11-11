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

		<form id="register-student-form myform" method="post">
		<p class="error"></p>
		<p class="success"></p>
		<div class="user_details">
			<input type="text" id="name" name="username" class="form-control input-smartshelf" placeholder="NAME">
			<input type="text" id="email" name="email" class="form-control input-smartshelf" placeholder="EMAIL">
			<input type="text" id="phone" name="phone" class="form-control input-smartshelf" placeholder="PHONE">
			<input type="password" id="password" name="password" class="form-control input-smartshelf" placeholder="PASSWORD">
			<input type="password" id="confirm-password" class="form-control input-smartshelf" placeholder="CONFIRM PASSWORD">
			<select class="input-smartshelf select " id="SCHOOL">
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
			<select class="input-smartshelf select" id="FACULTY">
				<option>FACULTY/COLLAGE</option>
			</select>
			<select class="input-smartshelf select" id="DEPARTMENT">
				<option>DEPARTMENT</option>
				<option></option>
				<option></option>
				<option></option>
			</select>
			<select class="input-smartshelf select" id="Field">
				<option>SELECT FIELD</option>
				<option>business</option>
				<option>faith</option>
				<option>finance</option>
				<option>health</option>
				<option>relationship</option>
				<option>technology</option>
			</select>
			<div class="loader2" style="display:none;">
                <svg width="50px"  height="50px" style="text-align:center;float: right;width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
                    <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
                      <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                    </circle>
                </svg>
            </div>
			<input type="button" id="register-student-btn" class="form-control continue submit btn-smartshelf btn-dark text-center" value="SUBMIT" style="display:block">
		</div>
		</form>		
	</div>
	

	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/js/page/regprofessional.js"></script>
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