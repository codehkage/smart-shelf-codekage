<?php include 'navigation/header.php'; include 'includes/db_con.php';?>
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <div id="page-wrapper">
         <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a Faculty</h4>
              </div>
              <div class="modal-body">
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Faculty
                        </div>
                        <form method="post">
                        <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control" id="school_name" name="school_name">
                                                <option>Select School</option>
                                           <?php 
                                           $sql = "SELECT * FROM school";
                                          $result = mysqli_query($connect, $sql);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo" <option>".$row['name']."</option>";
                                            }
                                           ?>
                                            </select>
                                        </div>
                    </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Faculty</label>
                                               <select class="form-control" id="se" name="faculty_name">
                                                
                                            </select>
                            </div>
                        </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                 <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Department</label>
                                            <input class="form-control" name="department_name">
                            </div>
                        </div>
                    <div class="col-sm-6">
                            <div class="form-group" style="display:none;">
                                            <label>School Id</label>
                                            <input class="form-control"  name="id" id="faculty_id">
                            </div>
                        </div>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary" id="save" style="float:right; padding:10px; margin-right:30px;">Save</button>
                <br><br><br>
            </div>
            </div>
            </form>
            <?php  
                           if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                    $department_name = mysqli_real_escape_string($connect, $_POST['department_name']);
                                    $faculty_name = mysqli_real_escape_string($connect, $_POST['faculty_name']);
                                    $school_name = mysqli_real_escape_string($connect, $_POST['school_name']);
                                    $status="OK";
                                    if ($status=="OK") {
                                    $insertme = mysqli_query($connect, "INSERT INTO department (name, faculty, school) VALUES ('$department_name','$faculty_name','$school_name')");
                                    if ($insertme) {
                                    $insertme2 = mysqli_query($connect, "INSERT INTO chat_rooms (name, faculty, school, file, numofuser) VALUES ('$department_name','$faculty_name','$school_name','$department_name $school_name','')");
                                    if ($insertme2) {
                                    print"<script> alert('Successfully created a Department'); </script>";
                                    }
                                }
                             }
                          }
            ?>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Department</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Department
                            <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add a Department</button>
                        </div>
                        <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                        <div class="col-sm-6">
                        <div class="dataTables_length" id="dataTables-example_length"><label>Show 
                        <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">              
                        <option value="10">10</option><option value="25">25</option>
                        <option value="50">50</option><option value="100">100</option>
                        </select> entries</label></div></div><div class="col-sm-6">
                        <div id="dataTables-example_filter" class="dataTables_filter">
                        <label>Search:<input style="width:120px;" type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                        </label></div></div></div>
                            <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                <tbody id="department_list">
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
        <?php include 'navigation/footer.php';?>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
<script>
       $(document).ready(function() {   
               setInterval(function(){
            $('#department_list').load('includes/page/department_db.php');
           }, 1000);
          });

       $(document).ready(function() {
        $('#school_name').change(function(){
          var schools = $(this).val();
           // alert(schools);
          $.ajax({
            url:"onchange/select_faculty.php",
            method:"POST",
            data:{school:schools},
            dataType:"text",
            success:function(data)
            {
              $('#se').html(data);
            }
          });
        });
      });
    $(document).ajaxComplete(function(){
        $('.delete').click(function(){
          var id = $(this).attr("id");
          var table = $(this).attr("table");
          $.ajax({
            url:"includes/action/delete.php",
            method:"POST",
            data:{id:id, table:table},
            dataType:"text",
            success:function(data)
            {
              $('.data').html(data);
            }
          });
        });
      });
</script>