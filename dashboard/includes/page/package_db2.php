<?php 
include 'db_con.php';


$output ="
      <div class='body table-responsive'>
                        <table class='table'>   
                            <thead>
                               <tr>
                                    <th>#</th>
                                    <th>SCHOOL</th>
                                    <th>FACULTY</th>
                                    <th>DEPARTMENT NAME</th>
                                    <th>SEMESTER</th>
                                    <th>LEVEL</th>
                                    <th>PRICE</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
";
echo $output;
$sql = "SELECT * FROM package where Program = 'PostGraduate'";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
         echo"<tr>";
 echo"<th scope='row'>".$row['id']."</th>";
 echo"<td>".$row['school']."</td>";
 echo"<td>".$row['faculty']."</td>";
 echo"<td>".$row['department']."</td>";
 echo"<td>".$row['semester']."</td>";
 echo"<td>".$row['level']."</td>";
 echo"<td>".$row['price']."</td>";
 echo"<td><button table='package' id='".$row['id']."' class='edit'>Edit</button></td>";
 echo"<td><button table='package' id='".$row['id']."' class='delete'>Delete</button></td>";
 echo"</tr>";
    }

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $department = mysqli_real_escape_string($connect, $_POST['department']);
    $faculty = mysqli_real_escape_string($connect, $_POST['faculty']);
    $school = mysqli_real_escape_string($connect, $_POST['school']);
    $fileToUpload = mysqli_real_escape_string($connect, $_POST['fileToUpload']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $level = mysqli_real_escape_string($connect, $_POST['level']);
    $semester = mysqli_real_escape_string($connect, $_POST['semester']);
            $status="OK";
             print"<script> alert('I am Working'); </script>";
            if ($status=="OK") {
            $insertme = mysqli_query($connect, "INSERT INTO package (department, faculty, school, fileToUpload, price, level,semester) VALUES ('$department', '$faculty', '$school', '$fileToUpload', '$price', '$level', '$semester')");
            if ($insertme) {
              print"<script> alert('Successfully created a Faculty'); </script>";
        }
     }
 }

?>