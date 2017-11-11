<?php session_start();
?>
<html>
<head>
	<title>Welcome to smartshelf | Home</title>
	
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>	

	<link href="assets/css/bootstrap-3.3.7.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/sweetalert.css">


	<link rel="icon"  href="assets/img/logo-1.png">
</head>
<body id="home-page">
	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-header">
				<!-- <img class="img-responsive user-profile-pic" src="assets/img/profile-pic-2.jpg"> -->
				 <?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM profile_pics WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $path = $row['image_path'];
                                echo "<a href='profile.php'><img src='".$row['image_path']."' alt='' class='img-responsive user-profile-pic' width='100%' id='img-profile'></a>";
                                }
                            ?>
				<!-- <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" required="" capture> -->
				<p class="user-name">
					<?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo" <option>".$row['username']."</option>";
                                            echo" <textarea class='phone' style='display:none'>".$row['phone']."</textarea>";
                                            echo" <textarea class='emails' style='display:none'>".$_SESSION['email']."</textarea>";
                               	}
                    ?>
				</p>
				<p class="user-email"><?php echo $_SESSION['email'] ?></p>
			</div>

			<div class="sidebar-body">
				<ul class="list-unstyled components">					
					<li class="active"><span class="pull-left sidebar-links-icon"><i class="fa fa-book"></i></span><a style="margin-left: 33px;" href="home.php" rel="external">Academics</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-folder"></i></span><a style="margin-left: 33px;" href="archives.php" rel="external">Archive</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-snapchat"></i></span><a href="smartactive.php" style="margin-left: 30px;" rel="external">Smart Active</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-group"></i></span><a href="tutor.php"rel="external">Get Tutor</a></li><!-- 
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-download"></i></span><a style="margin-left: 32px;" href="#" rel="external">Upload to SmartSelhf</a></li> -->
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-user"></i></span><a style="margin-left: 34px;" href="profile.php" rel="external">Profile</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-gear"></i></span><a style="margin-left: 34px;" href="setting.php" rel="external">Settings</a></li>
					<!-- <li><span class="pull-left sidebar-links-icon"><i class="fa fa-gear"></i></span><a style="margin-left: 34px;" href="timetable.php"rel="external">TimeTable</a></li> -->
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-sign-out"></i></span><a style="margin-left: 33px;" href="include/logout.php" rel="external">Logout</a></li>
					<li><span class="pull-left sidebar-links-icon"><i class="fa fa-power-off"></i></span><a href="#" rel="external">Exit</a></li>

				</ul>

				<!-- <ul class="list-unstyled CTAs">
					<li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
					<li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
				</ul> -->
			</div>						
		</nav>					
		
		<div id="content">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<div class="pull-left">
							<p class="nav-drawer" id="sidebarCollapse"><span class="sidemenu"></span></p>
							<span class="brand-text">Get Tutor</span>		
						</div>
						<div class="pull-right">
							<a href="search.php" rel="external"><span class="search pull-left"><i class="fa fa-search search"></i></span></a>
							<span class="more-options"></i></span>
						</div>						
					</div>
				</div>	
			</nav>
			
			<div class="overlay">
			<div id="myTabContent" class="tab-content tab-pane">
			<div class="container">
			<div class="success"></div>
			<p id="result"></p>
				<div id="get-tutor">
					<div class="col-sm-6 col-xs-12">
						<!-- <select class="input-smartshelf select" id="INSTITUTION"> -->
							<!-- <option>Select Courses</option> -->
							<!-- <option></option>
							<option></option>
							<option></option> -->
							<?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            // echo" <option>".$row['username']."</option>";
                                $query = ("SELECT * FROM course_work WHERE school_name = '".$row['school']."' AND department_name = '".$row['department']."'");
                              					$result = mysqli_query($connect, $query);echo"<h4> Select Courses</h4>";
                              					while ($row = mysqli_fetch_array($result)) {

                              						echo"<div class='checkbox-inline checkbox-primary checkbox-circle'><label><input type='checkbox' id='courses' value='".$row['course_code']."' style='margin:4px' class='course'>".$row['course_code']."</label></div>";
                              					}
                              			 	}
                    		?>
						<!-- </select> -->
					</div>
					<div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<h4> Select Days <i class="fa fa-plus add-date" style="float: right;color: white;background: #1d2d42;width: 25px;padding: 5px;border-radius: 3px;"></i><a style="float: right;font-size: 13px;padding: 4px;">Add date</a></h4>
						<div class="dates">
							<input type="date" class="date_time input-smartshelf"/>
						</div>

					</div>
					<div class="col-sm-6 col-xs-12 time">   
						<input type="time" class="usr_time input-smartshelf"  placeholder="Choose your prefered Time">
					</div>
					<div class="col-sm-6 col-xs-12"> 
						<input type="text" name="venue" id="time" class="Hour form-control input-smartshelf" placeholder="Hour">
					</div>
					<select class="input-smartshelf select" class="venue" id="venue">
						<option>TUTOR PLACE</option>
						<option>MY PLACE</option>
						<option>NEUTRAL PLACE</option>
					</select>
					<input type='text' id="prices" style="color:black;border:1px solid black;display:none;">	
					<div class="col-sm-6 col-xs-12"> 
						<textarea name="venue" class="Comment form-control input-smartshelf" placeholder="Additional Comment"></textarea>
					</div>
					<input type="button" id="register-student-btn" class="submit2 form-control continue btn-smartshelf btn-dark text-center" value="SUBMIT" style="background:#1d2d42;">
				</div>
				<div class="become-tutor">
					<p class="text-center join-smartshelf-text">Want to Become a Tutor and get paid per Work?</p>
					<input type="button" id="btn-continue" style="background:inherit" class="form-control btn-smartshelf btn-light text-center" value="GET STARTED"/>
				</div>
			</div>			
		</div>
	</div>

			<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
			<script type="text/javascript" src="assets/js/jquery.mobile-1.4.5.min.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
			<script type="text/javascript" src="assets/js/scripts.js"></script>
			<script type="text/javascript" src="assets/js/page/tutor.js"></script>
			<script src="https://js.paystack.co/v1/inline.js"></script>
			<script src="assets/js/sweetalert.min.js"></script>
			<script src="assets/js/jquery.magnific-popup.js"></script>
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


