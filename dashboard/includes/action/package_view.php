<?php 
include 'db_con.php'; 
print"<script> alert('I am Working'); </script>";
echo '<div class="body table-responsive">';
echo '<table class="table">';
echo '<thead>';
echo"<tr>";
 echo"<td scope='row'>id</td>";
 echo"<td>school</td>";
 echo"<td>faculty</td>";
 echo"<td>department</td>"; 
 echo"<td>semester</td>";
 echo"<td>level</td>";
 echo"</tr>";
 echo "</thead>";
 echo "<tbody>";
$sql = "SELECT * FROM courses where school ='".$_POST["detail3"]."' AND department = '".$_POST["detail4"]."' AND level = '".$_POST["detail2"]."' AND semester = '".$_POST["detail1"]."'";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $output2="
      <tr>
      <td scope='row'>".$row['id']."</td>
      <td>".$row['school']."</td>

      <td>".$row['faculty']."</td>
      <td>".$row['department']."</td>
      <td>".$row['semester']."</td>
      <td>".$row['level']."</td>
      </tr>
    ";
    echo $output2;
  }    
?>