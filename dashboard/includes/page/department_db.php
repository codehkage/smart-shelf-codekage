<?php 
include 'db_con.php';
$output ="
   <table class='table'>   
                            <thead>
                               <tr>
                                 <th>#</th>
                                    <th>DEPARTMENT NAME</th>
                                     <th>FACULTY</th>
                                     <th>SCHOOL</th>
                                     <th>EDIT</th>
                                     <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
";
echo $output;
$sql = "SELECT * FROM department";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
        echo"<tr>";
        echo"<th scope='row'>".$row['id']."</th>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['faculty']."</td>";
        echo"<td>".$row['school']."</td>";
        echo"<td><button table='department' id='".$row['id']."' class='edit'>Edit</button></td>";
        echo"<td><button table='department' id='".$row['id']."' class='delete'>Delete</button></td>";
        echo"</tr>";
     }
?>