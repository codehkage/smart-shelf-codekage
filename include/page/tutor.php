<?php 
session_start();
include 'db_con.php';
    $course = mysqli_real_escape_string($connect, $_POST['insert']);
    $date =  mysqli_real_escape_string($connect, $_POST['date']);
    $usr_time = mysqli_real_escape_string($connect, $_POST['usr_time']);
    $venue = mysqli_real_escape_string($connect, $_POST['venue']);
    $Hour = mysqli_real_escape_string($connect, $_POST['Hour']);
    $Comment = mysqli_real_escape_string($connect, $_POST['Comment']);
    $cost = mysqli_real_escape_string($connect, $_POST['v2']);
    
                        echo $cost;
                            $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $username = $row['username'];
                                            $school = $row['school'];
                                            $phone = $row['phone'];
                                            $department = $row['department'];
                                    $status="OK";
                                    if ($status=="OK") {
                                    $insertme = mysqli_query($connect, "INSERT INTO tutor (email, username, school, phone, department, course_codes, days, time, hour, venue, Comment, cost) VALUES ('".$_SESSION['email']."','$username','$school','$phone', '$department','$course','$date', '$usr_time', '$Hour', '$venue', '$Comment', '$cost')");
                                    if ($insertme) {
                                      // print"You have successfully asked for a tutor and the cost will be ".$cost.". A mail will be sent to you soon";
                                }
                            }
                        }   

?>