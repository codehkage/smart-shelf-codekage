<?php 
include 'db_con.php'; 
$output='
<div class="body table-responsive">
 <table class="table">
 <thead>
    <tr>
       <th>#</th>
        <th>SCHOOL NAME</th>
        <th>LOCATION</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
  </thead>
<tbody>
'; 
echo $output;
$sql = "SELECT * FROM school";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $output2="
      <tr>
      <th id='id1' scope='row'>".$row['id']."</th>
      <td>".$row['name']."</td>
      <td>".$row['location']."</td>
      <td><button table='school' id='".$row['id']."' class='edit'>Edit</button></td>
      <td><button table='school' id='".$row['id']."' class='delete'>Delete</button></td>
      </tr>
    ";
    echo $output2;
  }     
?>