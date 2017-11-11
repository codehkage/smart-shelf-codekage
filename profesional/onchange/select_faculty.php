<?php 
include 'db_con.php';
    $output='';
    $sql = "SELECT * FROM faculty where school = '".$_POST["school"]."'";
    $result = mysqli_query($connect, $sql);
    $output = '<div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="sel1">Select Faculty:</label>
                                          <select class="form-control" name="department" id="sel"  style="border-bottom:1px solid black">';
   echo $output;
    while ($row = mysqli_fetch_array($result)) {
         echo" <option>".$row['name']."</option>";
    }   
    echo " </select>
          </div>
         </div>";
?>