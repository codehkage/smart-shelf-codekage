<?php  
session_start();
   // echo "<h4> Packages</h4>";
  
                            include 'db_con.php';
                            $query = ("SELECT * FROM profesional_users WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                           $school = $row['school'];
                                           $faculty = $row['faculty'];
                                           $department = $row['department'];
                            $query = ("SELECT * FROM  class_note WHERE school_name = '".$school."' AND faculty_name = '".$faculty."' AND department_name = '".$department."' ");
                            $result = mysqli_query($connect, $query);
                            	while ($row = mysqli_fetch_array($result)) {
                                echo'
                                <div class="col-sm-6 col-xs-12 books-wrapper" style="margin:20px auto;" school="'.$row['school_name'].'" faculty="'.$row['faculty_name'].'" department="'.$row['department_name'].'" level="'.$row['level'].'" semester="'.$row['semester'].'">
            											<div class="thumbnail">
            												<img class="img-responsive"  src="../dashboard/'.$row['Cover_Pics'].'" alt="">
            												<div class="caption">					
                                    	<p class="book-title">'.$row['level'].'
            													<a style="float:right">'.$row['semester'].'</a></p>
            												</div>
            											<p class="book-title" style="text-align:center">'.$row['price'].'</p>					
            											</div>
            										</div>';
                            		}
                               	}
?>