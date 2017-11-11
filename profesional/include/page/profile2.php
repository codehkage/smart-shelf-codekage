<?php 
session_start();

include 'db_con.php';
  $query = ("SELECT * FROM profile_pics WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                if ($row = mysqli_fetch_array($result)) {
                                    // echo "<script>alert('sss');</script>";
                                           $username = $row['username'];
                                           $email = $row['email'];
                                           echo '<img src="'.$row['image_path'].'" alt="" class="profile-pic img-rounded">';
                                }
?>