<?php include 'include/navigation/sidebar.php';  ?>
		<div id="content">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<div class="pull-left">
							<p class="nav-drawer" id="sidebarCollapse"><span class="sidemenu"></span></p>
							<span class="brand-text">SmartShelf</span>		
						</div>
						<div class="pull-right">
							<a href="search.php" rel="external"><span class="search pull-left"><i class="fa fa-search search"></i></span></a>s
							<span class="more-options"></i></span>
						</div>						
					</div>
				</div>	
			</nav>
			<div class="tab-wrapper">
				<ul id="optionTab" class="nav nav-tabs" style="width:100%;">
					<li class="active"><a href="#undergraduate">NON-EDUCATIONAL</a></li>
					<li><a href="#postgraduate">EDUCATIONAL</a></li>		
				</ul>
			</div>
			<div class="overlay">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="undergraduate">
		<div class="col-sm-12 hidden-lg">		
		<br>
		<form id="register-student-form" class="myform" action="non-educational.php" method="post" enctype="multipart/form-data">
		<p class="data"></p>
		<img src="assets/img/success.png" style="display:none" class="success">
		<div class="user_details">
		<p class="text-center register-student-text" style="float:left;">BOOKS DETAILS</p>
			<input type="text" id="name" name="Title" class="form-control input-smartshelf" placeholder="BOOK TITLE">
			<input type="text" id="email" name="Author" class="form-control input-smartshelf" placeholder="AUTHOR'S NAME">
			<input type="text" id="Author_contact" name="Author_contact" class="form-control input-smartshelf" placeholder="AUTHOR'S PHONE NUMBER/EMAIL">
			<textarea  class="form-control input-smartshelf" id="Description" name="Description" placeholder="DESCRIPTION"></textarea>
					<p id="coverpicsval"></p>
					<button class="btn btn-primary cover" type="button" style="width:100%;background: white;color: #1d2d42;border: 2px solid #1d2d42;font-size: 15px;">Choose Cover Photo</button>
					<input type="file" class="coverpics" name="Cover_pics">
					<br><br>
					<p id="bookval"></p>
					<button class="btn btn-primary books" type="button" style="width:100%;background: #fff;font-size: 16px;border: 2px solid #1d2d42;color:#1d2d42;">Choose File</button>
					<input type="file" class="book" name="book">
					<br><br>
		<p class="text-center register-student-text" style="float:left;">ACCOUNT DETAILS</p>
		<br><br><br>
		<p>Leaving the accont details field means the book is for free</p>
			<input type="text" id="price" name="Price" class="form-control input-smartshelf" placeholder="PRICE">
			<input type="text" id="acc_num" name="Account_no" class="form-control input-smartshelf" placeholder="ACCOUNT NUMBER">
			<input type="text" id="Account_name" name="Account_name" class="form-control input-smartshelf" placeholder="ACCOUNT NAME">
			<!-- <input type="text" id="phone" name="Price" class="form-control input-smartshelf" placeholder="BANK NAME"> -->
			<select class="input-smartshelf select" id="Field bank_name" name="bank_name">
				<option value="">BANK NAME</option>
				<option>Zenith Bank</option>
				<option>First Bank</option>
				<option>Sky Bank</option>
				<option>GT Bank</option>
				<option>Eco Bank</option>
				<option>Access Bank</option>
			</select>
			

			<input type="button" id="register-student-btn" class="form-control continue btn-smartshelf btn-dark text-center" value="CONTINUE"></div>
		<div class="educational_details">
		<div class="wrapper">
        <span class="arrow arrowo"></span>
    	</div>
    	<br>
    	<p class="text-center register-student-text" style="float:left;">Who do you want to see your book?</p>
		<p class="text-center register-student-text" style="float:left;">TARGET</p>
			<select class="input-smartshelf select" name="school" id="SCHOOL">
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
			<select class="input-smartshelf select" id="Field" name="Field">
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
			<input type="button" id="register-student-btn" name="submit" class="submit1 form-control continue submit btn-smartshelf btn-dark text-center" value="SUBMIT" style="display:block">
			</div>
			</form>		
	</div>
</div>







			<div class="tab-pane fade" id="postgraduate">
					<div class="col-sm-12 hidden-lg">
					<br>
		<p class="error"></p>
		<form id="register-student-form educational" class="educational" action="educational.php" method="post" enctype="multipart/form-data">
		<div class="postgraduate1">
					<p class="text-center register-student-text" style="float:left;">Who do you want to see your book?</p>		
					<select class="input-smartshelf select Field" id="book_type" name="book_type">
						<option value="">BOOK TYPE</option>
						<option>COURSE MATERIAL</option>
						<option>CLASS NOTE</option>
						<option>IT REPORT</option>
						<option>PUBLICATIONS</option>
						<option>PROJECT WORK</option>
						<option>TEXT BOOKS</option>
					</select>
					<select class="input-smartshelf select Publication_Type" id="Publication_Type" name="Publication_Type">
						<option value="">Publication_Type</option>
						<option>TECHNICAL PAPERS</option>
						<option>JOURNALS</option>
					</select>
					<select class="input-smartshelf select" name="institution" id="INSTITUTION">
						<option value="">INSTITUTION</option>
						<option>UNIVERSITY</option>
						<option>POLYTHECNIC</option>
						<option>COLLEGES OF EDUCATION</option>
					</select>
					<select class="input-smartshelf select SCHOOL" id="school_name" name="school_name">
						<option value="">SCHOOL</option>
						<?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM school ");
                             	$result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo" <option>".$row['name']."</option>";
                               	}
                    	?>
					</select>
					<select class="input-smartshelf select" id="FACULTY" name="faculty_name">
						<option value="">FACULTY/COLLEGE</option>
					</select>
					<select class="input-smartshelf select" id="DEPARTMENT" name="department_name">
						<option value="">DEPARTMENT</option>
					</select>
					<!-- select class="input-smartshelf select" id="DEPARTMENT" name="semester">
						<option>SEMESTER 1</option>
						<option>SEMESTER 2</option>
					</select>
					<select class="input-smartshelf select" id="DEPARTMENT" name="level">
						<option>LEVEL 1</option>
						<option>LEVEL 2</option>
						<option>LEVEL 3</option>
						<option>LEVEL 4</option>
						<option>LEVEL 5</option>
						<option>LEVEL 6</option>
						<option>LEVEL 7</option>
					</select> -->
					<p class="text-center register-student-text" style="float:left;">ACCOUNT DETAILS</p>
		<br><br><br><br>
		<p>Leaving the accont details field means the book is for free</p>
			<input type="text" id="phone" name="Price" class="form-control input-smartshelf" placeholder="PRICE">
			<input type="text" id="phone" name="Account_no" class="form-control input-smartshelf" placeholder="ACCOUNT NUMBER">
			<input type="text" id="phone" name="Account_name" class="form-control input-smartshelf" placeholder="ACCOUNT NAME">
			<!-- <input type="text" id="phone" name="Price" class="form-control input-smartshelf" placeholder="BANK NAME"> -->
			<select class="input-smartshelf select" id="Field" name="bank_name">
				<option value="">BANK NAME</option>
				<option>Zenith Bank</option>
				<option>First Bank</option>
				<option>Sky Bank</option>
				<option>GT Bank</option>
				<option>Eco Bank</option>
				<option>Access Bank</option>
			</select>
			<input type="button" id="register-student-btn" class="form-control continue2 btn-smartshelf btn-dark text-center" value="CONTINUE"></div>
			</div>
					<div class="postgraduat2">
					<div class="col-sm-12 hidden-lg">	
						<div class="wrapper">
				        <span class="arrow arrow1"></span>
				    	</div>

				    <input type="text" id="booktitle" name="booktitle" class="form-control input-smartshelf booktitle" placeholder="BOOK TITLE">
					<input type="text" id="course_title" name="course_title" class="form-control input-smartshelf course_title" placeholder="COURSES TITLE">
					<input type="text" id="course_code" name="course_code" class="form-control input-smartshelf course_code" placeholder="COURSES CODE">
					<select class="input-smartshelf select" id="program" name="program">
						<option value="">Program</option>
						<option>Undergraduate</option>
						<option>Postgraduate</option>
					</select>
					<textarea  class="form-control input-smartshelf" name="Description" id="DESCRIPTION" placeholder="DESCRIPTION"></textarea>
					<p id="coverpics2val"></p>
					<button class="btn btn-primary cover2" type="button" style="width:100%;background: white;color: #1d2d42;border: 2px solid #1d2d42;font-size: 15px;">Choose Cover Photo</button>
					<input type="file" class="coverpics2" name="cover_pics">
					<br><br>
					<p class="text-center register-student-text" style="float:left;">Extract five pages from your file and upload</p>
					<p id="Previewval"></p>
					<button class="btn btn-primary preview1" type="button" style="width:100%;background: white;color: #1d2d42;border: 2px solid #1d2d42;font-size: 15px;">Choose Preview</button>
					<input type="file" class="Preview" name="Preview">
					<br><br>
					<p id="book1val"></p>
					<button class="btn btn-primary books1" type="button" style="width:100%;background: #fff;font-size: 16px;border: 2px solid #1d2d42;color:#1d2d42;">Choose File</button>
					<input type="file" class="book1" name="course_material">
					<br><br>
						<div class="loader3" style="display:none;">
			                <svg width="50px"  height="50px" style="text-align:center;float: right;width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
			                    <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
			                      <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
			                    </circle>
			                </svg>
			            </div>
					<input type="button" id="register-student-btn" name="submit" class="form-control continue submit2 btn-smartshelf btn-dark text-center" value="SUBMIT" style="display:block">
						</div>					
					</div>
					</form>
			</div>
			</div>			
	</div>

			<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
			<script src="http://malsup.github.com/jquery.form.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
			<script type="text/javascript" src="assets/js/page/upload.js"></script>
			<script type="text/javascript" src="assets/js/page/upload2.js"></script>
			<script type="text/javascript" src="assets/js/scripts.js"></script>

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
	<style>
	.nav-tabs>li {
    float: left;
    width: 50%;
    margin-bottom: -1px;
    border-left: 1px solid #354355;
    text-align: center;
	}
	</style>
	</html>


