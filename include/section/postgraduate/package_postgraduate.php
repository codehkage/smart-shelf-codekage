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
                            $query = ("SELECT * FROM package WHERE school = '".$school."' AND faculty = '".$faculty."' AND department = '".$department."' AND Program = 'PostGraduate'");
                            $result = mysqli_query($connect, $query);
                            	while ($row = mysqli_fetch_array($result)) {
                                echo'<div data-toggle="modal" data-target="#myModal4" class="col-sm-6 col-xs-12 books-wrapper package_post" style="margin:20px auto;" school="'.$row['school'].'" faculty="'.$row['faculty'].'" department="'.$row['department'].'" level="'.$row['level'].'" semester="'.$row['semester'].'"  id="'.$row['id'].'">
            											<div class="thumbnail">
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
?>