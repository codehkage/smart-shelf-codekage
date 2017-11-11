<?php  
session_start();
include 'db_con.php';
$note = mysqli_real_escape_string($connect, $_POST['note']);
$query = ("SELECT * FROM note WHERE email = '".$_SESSION['email']."'");
              $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo  $row['note'];
            }

    $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."'");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $user = $row['username'];
                    $sql = "UPDATE note SET note='$note' WHERE email = '".$_SESSION['email']."'";


            if ($connect->query($sql) === TRUE) {
                
            } else {
                echo "Error updating record: " . $connect->error;
            }
            }

?>
