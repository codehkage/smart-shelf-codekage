<?php 
include 'db_con.php';
$sql = "SELECT * FROM profesional_users";
$output='
<div class="body table-responsive">
 <table class="table">
 <thead>
    <tr>
       <th>#</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>SCHOOL</th>
        <th>FACULTY</th>
        <th>DEPARTMENT</th>
        <th>FIELD</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
  </thead>
<tbody>
'; 
echo $output;
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
 echo"<tr>";
 echo"<th scope='row'>".$row['id']."</th>";
 echo"<td>".$row['username']."</td>";
 echo"<td>".$row['email']."</td>";
 echo"<td>".$row['phone']."</td>";
 // echo"<td>".$row['password']."</td>";
 // echo"<td>".$row['institution']."</td>";
 echo"<td>".$row['school']."</td>";
 // echo"<td>".$row['programme']."</td>";
 echo"<td>".$row['faculty']."</td>"; 
 echo"<td>".$row['department']."</td>";
 echo"<td>".$row['Field']."</td>";
 echo"<td><button table='profesional_users' id='".$row['id']."' class='edit'>Edit</button></td>";
 echo"<td><button table='profesional_users' id='".$row['id']."' class='delete'>Delete</button></td>";
 echo"</tr>";
}
?>