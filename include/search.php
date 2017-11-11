<?php 
session_start();
include 'db_con.php';
    $searchoptions = mysqli_real_escape_string($connect, $_POST['searchoptions']);
    $search = mysqli_real_escape_string($connect, $_POST['search']);
   	if ($searchoptions == "business") {
   		 $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   			$query = ("SELECT * FROM $searchoptions WHERE Title LIKE '%$search%' and Author LIKE '%$search%' and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
				<div data-toggle="modal" data-target="#myModal3" class="col-sm-6 col-xs-12 books-wrapper business" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	        }
	    } 
   	}
   	elseif ($searchoptions == "course_material") {
   		 $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE course_title LIKE '%$search%' and course_code LIKE '%$search%'  and school_name = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
				<div data-toggle="modal" data-target="#myModal1" class="col-sm-6 col-xs-12 books-wrapper courses" style="margin:20px auto;" school="'.$row['school_name'].'" faculty="'.$row['faculty_name'].'" department="'.$row['department_name'].'" id="'.$row['id'].'">
            											<div class="thumbnail" style="width:100%">
            												<img class="img-responsive"  src="dashboard/'.$row['cover_pics'].'" alt="">
            												<div class="caption">					
                                    	<p class="book-title">'.$row['department_name'].'
            												</div>		
                                     <p class="book-title" style="text-align:center;">'.$row['price'].'     			
            											</div>
            										</div>';
	        }   
	    }
   	}
   	elseif ($searchoptions == "faith") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE Author LIKE '%$search%' and Title LIKE '%$search%'  and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
				 <div data-toggle="modal" data-target="#myModal4" class="col-sm-12 col-xs-12 books-wrapper faith" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail" style="width:100%">
            												<img class="img-responsive"  src="../'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	    }	
	}
   	}
   	elseif ($searchoptions == "finance") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE Author LIKE '%$search%' and Title LIKE '%$search%'  and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
		 <div data-toggle="modal" data-target="#myModal1" class="col-sm-6 col-xs-12 books-wrapper financedetails" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	    }	
	}
   	}
   	elseif ($searchoptions == "health") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE Author LIKE '%$search%' and Title LIKE '%$search%'  and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
	 <div data-toggle="modal" data-target="#myModal" class="col-sm-6 col-xs-12 books-wrapper healthdetails" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	    }	
	}
   	}
   	elseif ($searchoptions == "it_report") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE course_title LIKE '%$search%' and course_code LIKE '%$search%'  and school_name = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
	 <div data-toggle="modal" data-target="#myModal" class="col-sm-6 col-xs-12 books-wrapper healthdetails" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail"style="width:100%;">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	    }	
	}
   	}
   	elseif ($searchoptions == "class_note") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE classnote_title LIKE '%$search%' and classnote_code LIKE '%$search%'  and school_name = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
 		<div class="col-sm-6 col-xs-12 books-wrapper" style="margin:20px auto;" school="'.$row['school_name'].'" faculty="'.$row['faculty_name'].'" department="'.$row['department_name'].'" level="'.$row['level'].'" semester="'.$row['semester'].'">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="dashboard/'.$row['Cover_Pics'].'" alt="">
            												<div class="caption">					
                                    	<p class="book-title">'.$row['level'].'
            													<a style="float:right">'.$row['semester'].'</a></p>
            												</div>
            											<p class="book-title" style="text-align:center">'.$row['price'].'</p>					
            											</div>
            										</div>';
	    }	
	}
   	}
   	elseif ($searchoptions == "package") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE faculty LIKE '%$search%' and department LIKE '%$search%'  and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
							<div data-toggle="modal" data-target="#myModal" class="col-sm-6 col-xs-12 books-wrapper pack" id="" style="margin:20px auto;" school="'.$row['school'].'" faculty="'.$row['faculty'].'" department="'.$row['department'].'" level="'.$row['level'].'" semester="'.$row['semester'].'" Program="'.$row['Program'].'">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="dashboard/'.$row['upload'].'" alt="">
            												<div class="caption">					
                                    	<p class="book-title">'.$row['level'].'
            													<a style="float:right">'.$row['semester'].'</a></p>
            												</div>
            											<p class="book-title" style="text-align:center">₦'.$row['price'].'</p>					
            											</div>
            										</div>';
	    }	
	}	
   	}
   	elseif ($searchoptions == "project_work") {
   		 $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   		$query = ("SELECT * FROM $searchoptions WHERE course_title LIKE '%$search%' and course_code LIKE '%$search%' and school_name = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
                               <div class="col-sm-6 col-xs-12 books-wrapper project" data-toggle="modal" data-target="#myModal3" style="margin:20px auto;" school="'.$row['school_name'].'" faculty="'.$row['faculty_name'].'" department="'.$row['department_name'].'" id="'.$row['id'].'">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="dashboard/'.$row['cover_pics'].'" alt="">
            												<div class="caption">					
                                    	<p class="book-title">'.$row['department_name'].'
            												</div>			
                                      <p class="book-title" style="text-align:center">'.$row['price'].'</p>		
            											</div>
            										</div>';
	        } 
	    }	
   	}
   	elseif ($searchoptions == "publication") {
   		  $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   		$query = ("SELECT * FROM $searchoptions WHERE books_title LIKE '%$search%' and author LIKE '%$search%' and school_name = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
                                <div  data-toggle="modal" data-target="#myModal8" class="col-sm-12 col-xs-12 books-wrapper pb" style="margin:35px auto;" id="'.$row['id'].'">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="dashboard/'.$row['Cover_Pics'].'" alt="">
            												<div class="caption">		
                                    <p class="book-title">'.$row['books_title'].'
                                      <a style="float:right">'.$row['author'].'</a></p>			
                                    </div>		
                                     <p class="book-title" style="text-align:center;">'.$row['price'].'     			
            											</div>
            										</div>';
	        } 
	    }
   	}
   	elseif ($searchoptions == "relationship") {
   			$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE Author LIKE '%$search%' and Title LIKE '%$search%'  and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
				  <div data-toggle="modal" data-target="#myModal2" class="col-sm-6 col-xs-12 books-wrapper relationship" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	    }	
	}
   	}
   	elseif ($searchoptions == "technology") {
   		$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE Author LIKE '%$search%' and Title LIKE '%$search%'  and school = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
				 <div data-toggle="modal" data-target="#myModal5" class="col-sm-6 col-xs-12 books-wrapper technology" style="margin:20px auto;width:50%;" id="'.$row['id'].'">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
	    }	
	}

   	}
   	elseif ($searchoptions == "text_book") {
   	$query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                	$school = $row['school'];
   				$query = ("SELECT * FROM $searchoptions WHERE author LIKE '%$search%' and books_title LIKE '%$search%'  and school_name = '$school'");
	        $result = mysqli_query($connect, $query);
	        while ($row = mysqli_fetch_array($result)) {
				echo'
<div data-toggle="modal" data-target="#myModal7" class="col-sm-6 col-xs-12 books-wrapper tb" style="margin:20px auto;" id="'.$row['id'].'">
            											<div class="thumbnail" style="width:100%;">
            												<img class="img-responsive"  src="dashboard/'.$row['Cover_Pics'].'" alt="">
            												<div class="caption">		
                                    <p class="book-title">'.$row['books_title'].'
                                      <a style="float:right">'.$row['author'].'</a></p>			
                                    </div>		
                                     <p class="book-title" style="text-align:center;">'.$row['price'].'     			
            											</div>
            										</div>';
	    }	
	}	
   	}
?>