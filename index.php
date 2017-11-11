<!DOCTYPE html>
<html>
<head>
	<title>Smartshelf | Login to your student account</title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>	

	<link href="assets/css/bootstrap-3.3.7.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 

	<link rel="icon"  href="assets/img/logo-1.png">	
</head>
<body id="login-student-page">
	<div class="col-sm-12 hidden-lg">
	<!-- <input type="button" id="login-student-btn" class="form-control sign_out btn-smartshelf btn-dark text-center" value="LOGIN"> -->
		<div align="center">
			<a href="#"><img class="img-responsive smartshelf-login-student-logo" src="assets/img/logo-1.png"></a>
		</div> 

		<p class="text-center login-student-text">LOGIN</p>
		<form id="login-student-form">
		<p class="error"></p>
		<p class="success"></p>
			<input type="text" id="login_email" class="form-control input-smartshelf" placeholder="USERNAME OR EMAIL">				
			<div><input type="password" id="login_password" class="form-control input-smartshelf" placeholder="PASSWORD"><span style="margin: -44px auto;;position: absolute;right: 2px;"><i class="fa fa-eye search" style="color:black"></i></span></div>	
			<input type="button" id="login-student-btn" class="form-control submit btn-smartshelf btn-dark text-center" value="LOGIN">
			
			<div class="loader">
				<svg width="50px"  height="50px" style="text-align:center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
				    <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
				      <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
				    </circle>
				</svg>
			</div>
			<input type="button" id="login-student-btn" style="display:block" class="form-control btn-smartshelf submit btn-dark text-center" value="LOGIN">
			<a href="option.php" class="reg"><input type="button" id="login-student-btn" class="form-control btn-smartshelf btn-light text-center" value="REGISTER"></a>
			<p class="text-center" class="fpass"><a href="#" class="forgot-password-link">FORGOT PASSWORD?</a></p>
			<!--  -->
		</form>
	</div>
	
	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<script type="text/javascript" src="assets/js/page/login.js"></script>

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
<script>
$(document).ready(function(){
	$('.search').click(function() {
	// var type = $("#login_password").attr("type");
	document.getElementById("login_password").setAttribute('type','text');
	$('.search').click(function() {
	// var type = $("#login_password").attr("type");
	document.getElementById("login_password").setAttribute('type','password')
	});
	});
});
</script>