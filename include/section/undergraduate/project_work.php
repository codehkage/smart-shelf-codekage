<?php  
session_start();
   // echo "<h4> Packages</h4>";
  
                            include 'db_con.php';
                            $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                           $school = $row['school'];
                                           $programme = $row['programme'];
                                           $faculty = $row['faculty'];
                                           $department = $row['department'];
                            $query = ("SELECT * FROM project_work WHERE school_name = '".$school."' AND faculty_name = '".$faculty."' AND department_name = '".$department."' AND Program = 'UnderGraduate'");
                            $result = mysqli_query($connect, $query);
                            	while ($row = mysqli_fetch_array($result)) {
                                echo'
                                <div class="col-sm-6 col-xs-12 books-wrapper project" data-toggle="modal" data-target="#myModal3" style="margin:20px auto;" school="'.$row['school_name'].'" faculty="'.$row['faculty_name'].'" department="'.$row['department_name'].'" id="'.$row['id'].'">
            											<div class="thumbnail">
            												<img class="img-responsive"  src="dashboard/'.$row['cover_pics'].'" alt="">
            												<div class="caption">					
                                    	<p class="book-title">'.$row['department_name'].'
            												</div>			
                                      <p class="book-title" style="text-align:center">'.$row['price'].'</p>		
            											</div>
            										</div>';
                            		}
                               	}
?>