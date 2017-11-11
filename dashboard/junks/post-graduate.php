<?php include 'navigation/header.php'; ?>
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
                <h4 class="modal-title">Add a Post Graduate Course</h4>
              </div>
              <div class="modal-body">
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Post Graduate Course
                        </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>School</label>
                                            <select class="form-control" id="school_name">
                                                <option>Select School</option>
                                            </select>
                                        </div>
                    </div>
                        <div class="col-sm-6">
                              <div class="form-group faculty">
                                            <label>Faculty</label>
                                               <select class="form-control" id="faculty_name">
                                                <option>Select Faculty</option>
                                               </select>
                            </div>
                        </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                            <div class="col-sm-6">
                          <div class="form-group department">
                                            <label>Department</label>
                                            <select class="form-control" id="department_name">
                                                <option>Select Department</option>
                                            </select>
                            </div>
                            </div>
                 <div class="col-sm-6">
                         <div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" id="semester">
                                                <option>Semester 1</option>
                                                <option>Semester 2</option>
                                                <option>Semester 3</option>
                                            </select>
                            </div>
                </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                            <div class="col-sm-6">
                               <div class="form-group">
                                            <label>Course Title</label>
                                            <input class="form-control"  name="id" id="course_title">
                            </div>
                            </div>
                 <div class="col-sm-6">
                    <div class="form-group">
                                            <label>Course Code</label>
                                            <input class="form-control"  name="id" id="course_code">
                    </div>
                 </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                    <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" id="level">
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
                    <div class="col-sm-6">
                    <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control"  name="id" id="price">
                            </div>
                    </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Cover Picture</label>
                        <input type="file" id="file1" class="upload-group">
                            </div>
                    </div>
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Cover Preview</label>
                        <input type="file" id="file2" class="upload-group">
                            </div>
                    </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Select Course Work</label>
                        <input type="file" id="file3" class="upload-group">
                            </div>
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-primary" id="uploadButton" style="float:right; padding:10px; margin-right:30px;">Save</button>
                <br><br><br>
            </div>
            </div>
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
                    <h1 class="page-header">Post Graduate</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Post Graduate Courses
                            <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add a P.Course</button>
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
                                <thead>
                                    <tr>
                                        <th>SCHOOL</th>
                                        <th>FACULTY</th>
                                        <th>DEPARTMENT</th>
                                        <th>COURSE TITLE</th>
                                        <th>COURSE CODE</th>
                                        <th>SEMESTER</th>
                                        <th>LEVEL</th>
                                        <th>COURSE WORK</th>
                                        <th>PRICE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody id="post_graduate_list">

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

        $(document).ready(function(){
        var rootref = firebase.database().ref().child("school");

        rootref.on("child_added", snap =>{
        var school_name = snap.child("school_name").val();
        $("#school_name").append("<option>"+school_name+"</option>");
        });
        });

        $(document).ready(function(){
        var rootref = firebase.database().ref().child("faculties");

        rootref.on("child_added", snap =>{
        var school_name = snap.child("faculty_name").val();
        $("#faculty_name").append("<option>"+school_name+"</option>");
        });   
        });

        $(document).ready(function(){
        var rootref = firebase.database().ref().child("department");

        rootref.on("child_added", snap =>{
        var department_name = snap.child("department_name").val();
        $("#department_name").append("<option>"+department_name+"</option>");
        });   
        });
     $(document).ready(function(){
            $('#uploadButton').show();
            $('#file1').change(function() {
                selectedFile1 = event.target.files[0];
            });
            $('#file2').change(function() {
                selectedFile2 = event.target.files[0];
            });
            $('#file3').change(function() {
                selectedFile3 = event.target.files[0];
            });

            $('#uploadButton').click(function() {   
                var filename1 = selectedFile1.name;
                var filename2 = selectedFile2.name;
                var filename3 = selectedFile3.name;
                // alert(filename1);
                var storageRef = firebase.storage().ref('/Post Graduate/' + filename1);
                var storageRef1 = firebase.storage().ref('/Post Graduate/' + filename2);
                var storageRef2 = firebase.storage().ref('/Post Graduate/' + filename3);

                var uploadTask = storageRef.put(selectedFile1);
                var uploadTask1 = storageRef1.put(selectedFile2);
                var uploadTask2 = storageRef2.put(selectedFile3);
                uploadTask.on('state_changed', function(snapshot){

                }, function(error) {
                    alert("wrong")
                }, function() {
                    var school_name = document.getElementById('school_name').value;
                    var faculty_name = document.getElementById('faculty_name').value;
                    var price = document.getElementById('price').value;
                    var department_name = document.getElementById('department_name').value;
                    var semester = document.getElementById('semester').value;
                    var course_title = document.getElementById('course_title').value;
                    var course_code = document.getElementById('course_code').value;
                    var level = document.getElementById('level').value;

                  var postKey = firebase.database().ref('Post Graduate/').push().key;
                  var downloadURL = uploadTask.snapshot.downloadURL;
                  var updat = {};
                  var postData = {
                    Cover_Picture : filename1,
                    Cover_Preview : filename2,
                    Course_Work : filename3,
                    price : price,
                    school_name : school_name,
                    faculty_name : faculty_name,
                    department_name : department_name,
                    semester : semester,
                    course_title : course_title,
                    course_code : course_code,
                    level : level
                  }
                  updat['/Post Graduate/' + postKey] = postData;
                  firebase.database().ref().update(updat);
                  // console.log(downloadURL);
                  alert(downloadURL);
                });
            });
        });
            
        $(document).ready(function(){
        var rootref = firebase.database().ref().child("Post Graduate");

        rootref.on("child_added", snap =>{
        var school_name = snap.child("school_name").val();
        var course_type = snap.child("course_type").val();
        var faculty_name = snap.child("faculty_name").val();
        var department_name = snap.child("department_name").val();
        var price = snap.child("price").val();
        var course_title = snap.child("course_title").val();
        var course_code = snap.child("course_code").val();
        var semester = snap.child("semester").val();
        var level = snap.child("level").val();
        var Course_Work = snap.child("Course_Work").val();
        $("#post_graduate_list").append("<tr><td>"+school_name+"</td><td>"+faculty_name+"</td><td>"+department_name+"</td><td>"+course_title+"</td>><td>"+course_code+"</td><td>"+semester+"</td><td>"+level+"</td><td>"+Course_Work+"</td><td>"+price+"</td><td><button>Remove</button> <button class='editbtn'>Edit</button></td></tr>");
        });
        });

    </script>