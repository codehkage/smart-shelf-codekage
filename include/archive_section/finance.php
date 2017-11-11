<?php  
session_start();
   // echo "<h4> Packages</h4>";
  
                            include 'db_con.php';
                            $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                             	$result = mysqli_query($connect, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                           $school = $row['school'];
                                           $faculty = $row['faculty'];
                                           $department = $row['department'];
                            $query = ("SELECT * FROM finance WHERE school = '".$school."'");
                            $result = mysqli_query($connect, $query);
                            	while ($row = mysqli_fetch_array($result)) {
                                echo'
                                <div data-toggle="modal" data-target="#myModal1" class="col-sm-6 col-xs-12 books-wrapper financedetails" style="margin:20px auto;width:50%;" id="'.$row['id'].'"">
            											<div class="thumbnail">
            												<img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
            												<div class="caption"style="padding: 0px;">					
                                    	<p class="book-title" style="text-align:center">'.$row['Title'].'</p><p style="text-align:center">'.$row['Author'].'</p>
            												</div>		
                                    <p class="book-title" style="text-align:center;">'.$row['Price'].'			
            											</div>
            										</div>';
                            		}
                               	}
?>