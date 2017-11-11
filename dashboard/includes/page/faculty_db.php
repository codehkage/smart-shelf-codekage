<?php 
include 'db_con.php';
$output ="
      <div class='body table-responsive'>
                        <table class='table'>
                            <thead>
                               <tr>
                                        <th>#</th>   
                                        <th>FACULTY NAME</th>   
                                        <th>SCHOOL</th>
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
";
echo $output;
$sql = "SELECT * FROM faculty";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {
        echo"<tr>";
        echo"<th scope='row'>".$row['id']."</th>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['school']."</td>";
        echo"<td><button table='faculty' id='".$row['id']."' class='edit'>Edit</button></td>";
        echo"<td><button>Delete</button></td>";
        echo"</tr>";
    }
?>