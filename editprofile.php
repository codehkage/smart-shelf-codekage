<?php include 'include/navigation/sidebar.php';  ?>
        <div id="profile-content">
            <nav class="navbar navbar-default profile-navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="pull-left">
                            <p class="nav-drawer" id="sidebarCollapse">
                                <span class="sidemenu"></span>
                            </p>
                            <span class="brand-text">EDIT PROFILE</span>
                        </div>
                        <div class="pull-right">
                            <span class="search pull-left">
							<a href="search.php" rel="external"><span class="search pull-left"><i class="fa fa-search search"></i></span></a>
                            </span>
                            <span class="more-options"></span>
                        </div>
                    </div>
                </div>
                </nav>
                <br><br><br>
   <div class="overlay">
	<div class="col-sm-12 hidden-lg">
		<div align="center">
			<a href="#"><img class="img-responsive smartshelf-register-student-logo" src="assets/img/logo-1.png"></a>
		</div>		
		<p class="text-center register-student-text">EDIT PROFILE</p>

		<form id="editprofile" method="post" action="include/page/editprofile.php">
		<p class="error"></p>
		<p class="success"></p>
		<div class="user_details">
			<input type="text" id="name" name="name" class="form-control input-smartshelf" placeholder="NAME">
			<input type="text" id="phone" name="phone" class="form-control input-smartshelf" placeholder="PHONE">
			<input type="button" id="register-student-btn" class="form-control continue btn-smartshelf btn-dark text-center" value="CONTINUE">
		</div>
		<div class="educational_details">
			<!-- <input type="text" id="name" class="form-control input-smartshelf" placeholder="NAME"> -->
			<select class="input-smartshelf select" id="INSTITUTION" name="institution">
				<option>UNIVERSITY</option>
				<option>POLYTHECNIC</option>
				<option>COLLEGES OF EDUCATION</option>
			</select>
			<select class="input-smartshelf select" id="SCHOOL" name="school">
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
			<select class="input-smartshelf select" id="PROGRAMMES" name="program">
				<option>PROGRAMMES</option>
				<option>Remedial</option>
				<option>Under Graduate</option>
				<option>Post Graduate</option>
			</select>
			<select class="input-smartshelf select" id="FACULTY" name="faculty">
				<option>FACULTY/COLLAGE</option>
			</select>
			<select class="input-smartshelf select" id="DEPARTMENT" name="department">
				<option>DEPARTMENT</option>
				<option></option>
				<option></option>
				<option></option>
			</select>
			            <div class="loader2" style="display:none;">
                            <svg width="50px"  height="50px" style="text-align:center;float: right;width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
                                <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
                                  <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                                </circle>
                            </svg>
                        </div>
			<input type="submit" name="submit" id="register-student-btn" style="display:block" class="form-control btn-smartshelf submit btn-dark text-center" value="FINISH">
		</div>		
		</form>		
	</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <!-- // <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script> -->
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/js/page/editprofile.js"></script>
	
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