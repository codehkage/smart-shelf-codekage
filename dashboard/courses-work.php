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
                <h4 class="modal-title">Add a Course Work</h4>
              </div>
              <div class="modal-body">
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Course Work
                        </div>
            <form method="post" action="upload-courses-work.php" enctype="multipart/form-data">
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
                                            <label>Course Type</label>
                                               <select class="form-control" id="course_type" name="course_type">
                                               <option>Select Course Type</option>
                                                <option>General</option>
                                                <option>Faculty</option>
                                                <option>Departmental</option>
                                               </select>
                            </div>
                        </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                            <div class="col-sm-6">
                            <div class="form-group faculty" style="display:none;">
                                            <label>Faculty</label>
                                               <select class="form-control" id="se" name="faculty_name">
                                                <option>Select Faculty</option>
                                               </select>
                            </div>
                            </div>
                 <div class="col-sm-6">
                            <div class="form-group department" style="display:none;">
                                            <label>Course Department</label>
                                            <select class="form-control" id="department_name" name="department_name">
                                                <option>Select Department</option>
                                            </select>
                            </div>
                 </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                            <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Course Title</label>
                                            <input class="form-control" id="course_title" name="course_title">
                            </div>
                            </div>
                 <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Course Code</label>
                                            <input class="form-control" id="course_code" name="course_code">
                            </div>
                 </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" id="semester" name="semester">
                                                <option>Semester 1</option>
                                                <option>Semester 2</option>
                                            </select>
                            </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" id="level" name="level">
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
                        <label>Cover Picture</label>
                        <input type="file" name="Cover_Pics" id="fileToUpload">
                            </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Preview</label>
                        <input type="file" id="Preview" name="Preview" class="upload-group">
                            </div>
                    </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Select Course Work</label>
                        <input type="file" id="Course_Work" name="Course_Work" class="upload-group">
                            </div>
                    </div>
                </div>
                <br>
               <button type="submit" class="btn btn-primary" id="uploadButton" name="submit" style="float:right; padding:10px; margin-right:30px;">Save</button>
                <br><br><br>
            </div>
            </div>
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
                    <h1 class="page-header">Course Work</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Course Work
                            <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add a Course</button>
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
                        <p class="data"></p>
                            <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>SCHOOL</th>
                                        <th>COURSE TYPE</th>
                                        <th>FACULTY</th>
                                        <th>DEPARTMENT</th>
                                        <th>COURSE TITLE</th>
                                        <th>COURSE CODE</th>
                                        <th>SEMESTER</th>
                                        <th>LEVEL</th>
                                        <!-- <th>COURSE WORK</th> -->
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody id="course_work_list">

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

    $(document).ready(function() {
    $('#course_type').change(function(){
        var selected = document.getElementById('course_type').value;
        // alert(selected);
        if(selected == "General"){
            $('.faculty').hide();
            $('.department').hide();
        }
        if(selected == "Faculty"){
            $('.faculty').show();
            $('.department').hide();
        }
        if(selected == "Departmental"){
            $('.faculty').show();
            $('.department').show();
        }
    });
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
        setInterval(function(){
            $('#course_work_list').load('includes/page/course_work_list.php');
        }, 1000);
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