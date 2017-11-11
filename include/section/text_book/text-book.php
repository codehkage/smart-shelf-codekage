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
                            $query = ("SELECT * FROM text_book WHERE school_name = '".$school."'");
                            $result = mysqli_query($connect, $query);
                            	while ($row = mysqli_fetch_array($result)) {
                                echo'
                                <div data-toggle="modal" data-target="#myModal7" class="col-sm-6 col-xs-12 books-wrapper tb" style="margin:20px auto;" id="'.$row['id'].'">
            											<div class="thumbnail">
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
?>