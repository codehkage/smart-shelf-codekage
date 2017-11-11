<?php include 'navigation/header.php'; include 'includes/db_con.php';?>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <div id="page-wrapper">
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add a Packages</h4>
              </div>
              <div class="modal-body">
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Packages
                        </div>
                        <form method="post" action="upload.php" enctype="multipart/form-data">
                        <div class="col1">
                       <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>School</label>
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
                                            <select class="form-control" name="department_name" id="department_name">
                                                <option>Select Department</option>
                                            </select>
                            </div>
                 </div>
                    <div class="col-sm-6">
                            <div class="form-group" style="display:none;">
                                            <label>School Id</label>
                                            <input class="form-control"  name="id" id="department_id">
                            </div>
                        </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" name="semester">
                                                <option>Semester 1</option>
                                                <option>Semester 2</option>
                                            </select>
                            </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                                <option>100 Level</option>
                                                <option>200 Level</option>
                                                <option>300 Level</option>
                                                <option>400 Level</option>
                                                <option>500 Level</option>
                                                <option>600 Level</option>
                                                <option>700 Level</option>
                                            </select>
                            </div>
                    </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Price</label>
                                           <input class="form-control"  name="price" id="price">
                            </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Cover Picture</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                    </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-12">
                            <div class="form-group">
                                            <label>Description</label>
                                           <textarea class="form-control" name="description"></textarea> 
                            </div>
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-primary" id="Next" style="float:right; padding:10px; margin-right:30px;">Next</button>
                <br><br><br>
            </div>
            <div class="col2" style="display:none">



            </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary" id="uploadButton" name="submit" style="float:right; padding:10px; margin-right:30px;">Save</button>
            </form>
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
                    <h1 class="page-header">Package</h1>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Package
                            <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add an Package</button>
                        </div>
            <ul class="nav nav-tabs">
              <li class="active" style="width: 50%;text-align: center;"><a data-toggle="tab" href="#home">Under Graduate</a></li>
              <li style="width: 50%;text-align: center;"><a data-toggle="tab" href="#menu1">Post Graduate</a></li>
              <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> -->
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
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
                                <div id="package_list_u">
                                   <!-- <p style="color:red; padding:10px;">NO DATA FOUND</p> -->
                                </div>
                            </table>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
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
                                <div id="package_list_p">
                                   <!-- <p style="color:red; padding:10px;">NO DATA FOUND</p> -->
                                </div>
                            </table>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
            $('#package_list_u').load('includes/page/package_db.php');
        }, 1000);
        setInterval(function(){
            $('#package_list_p').load('includes/page/package_db2.php');
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
      $(document).ready(function() { 
          $('#se').change(function(){
          var faculty = $(this).val();
          var school_name = $('#school_name').val();
           // alert(school_name);
          $.ajax({
            url:"onchange/select_dep.php",
            method:"POST",
            data:{faculty:faculty, school_name:school_name},
            dataType:"text",
            success:function(data)
            {
              $('#department_name').html(data);
            }
          });
          });
        });
            $(document).ready(function() { 
            $("#uploadButton").hide();
          $('#Next').click(function(){
            $("#uploadButton").show();
          var school_name = $('#school_name').val();
          var faculty_name = $('#faculty_name').val();
          var department_name = $('#department_name').val();
           // alert(school_name);
           $('.col1').hide();
           $('.col2').show();
          $.ajax({
            url:"includes/select_coursework.php",
            method:"POST",
            data:{school_name:school_name, department_name:department_name, faculty_name:faculty_name},
            dataType:"text",
            success:function(data)
            {
              $('.col2').html(data);
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
