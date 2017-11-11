<?php session_start();
?>
<html>
<head>
	<title>Welcome to smartshelf | Home</title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>	

	<link href="assets/css/bootstrap-3.3.7.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<script src="assets/js/sweetalert.min.js"></script>
	<script src="assets/js/jquery-2.2.3.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">
	<link rel="icon"  href="assets/img/logo-1.png">

	<link rel="icon"  href="assets/img/logo-1.png">
</head>


						<div id="st-preloader">
                            <svg width="50px"  height="50px" style="text-align:center;width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
                                <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
                                  <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                                </circle>
                            </svg>
                        </div>

<body id="home-page">
	<!-- <div class="wrapper"> -->
		<nav id="sidebar">
			<div class="sidebar-header">
				<!-- <img class="img-responsive user-profile-pic" src="assets/img/profile-pic-2.jpg"> -->
				  <?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM profile_pics WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $path = $row['image_path'];
                                echo "<img src='".$row['image_path']."' alt='' class='img-responsive user-profile-pic' width='100%' id='img-profile'>";
                                }
                            ?>
				<!-- <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture> -->
				<p class="user-name">
					<?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM profesional_users WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo" <option>".$row['username']."</option>";
                               	}
                    ?>
				</p>
				<p class="user-email"><?php echo $_SESSION['email'] ?></p>
			</div>

			<div class="sidebar-body">
				<ul class="list-unstyled components">					
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-folder"></i></span><a style="margin-left: 33px;width:100%;height:20px;padding:20px;" href="archives.php" rel="external">Archive</a></li>
					<li class="active"><span class="pull-left sidebar-links-icon"><i class="fa fa-book"></i></span><a style="margin-left: 33px;width:100%;height:20px;padding:20px;" href="home.php" rel="external">Academics</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-download"></i></span><a style="margin-left: 32px;width:100%;height:20px;" href="upload-to-smartshelf.php" rel="external">Upload to SmartSelhf</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-user"></i></span><a style="margin-left: 34px;width:100%;height:20px;padding:20px;" href="profile.php" rel="external">Profile</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-gear"></i></span><a style="margin-left: 34px;width:100%;height:20px;padding:20px;" href="setting.php"rel="external">Settings</a></li>
					<!-- <li><span class="pull-left sidebar-links-icon"><i class="fa fa-gear"></i></span><a style="margin-left: 34px;" href="timetable.php"rel="external">TimeTable</a></li> -->
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-sign-out"></i></span><a style="margin-left: 33px;width:100%;height:20px;padding:20px;" href="include/logout.php" rel="external">Logout</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-power-off"></i></span><a href="#" style="margin-left: 33px;width:100%;height:20px;padding:20px;">Exit</a></li>

				</ul>

				<!-- <ul class="list-unstyled CTAs">
					<li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
					<li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
				</ul> -->
			</div>						
		</nav>					
		<script src="https://js.paystack.co/v1/inline.js"></script>
		<script src="assets/js/vendor/paystack.js"></script>