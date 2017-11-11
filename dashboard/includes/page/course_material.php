<?php 
include 'db_con.php';
$sql = "SELECT * FROM course_material where Program = 'UnderGraduate'";
$output='
<div class="body table-responsive">
 <table class="table">
 <thead>
    <tr>
       <th>#</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>INSTITUTION</th>
        <th>SCHOOL</th>
        <th>PROGRAMME</th>
        <th>FACULTY</th>
        <th>DEPARTMENT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
  </thead>
<tbody>
'; 
// echo $output;
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
 echo"<tr>";
 echo"<th scope='row'>".$row['id']."</th>";
 echo"<td>".$row['school_name']."</td>";
 echo"<td>".$row['faculty_name']."</td>";
 echo"<td>".$row['department_name']."</td>";
 // echo"<td>".$row['password']."</td>";
 echo"<td>".$row['course_title']."</td>";
 echo"<td>".$row['course_code']."</td>";
 // echo"<td>".$row['course_code']."</td>";
 echo"<td>".$row['Program']."</td>"; 
 echo"<td>".$row['price']."</td>";
 echo"<td>".$row['bank_name']."</td>";
 echo"<td>".$row['Account_no']."</td>";
 echo"<td>".$row['Account_name']."</td>";
 echo"<td><button table='course_material' id='".$row['id']."' class='edit'>Edit</button></td>";
 echo"<td><button table='course_material' id='".$row['id']."' class='delete'>Delete</button></td>";
 echo"</tr>";
}
?>