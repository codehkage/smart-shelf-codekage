<?php include 'navigation/header.php'; include 'includes/db_con.php';?>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Health</h1>
                </div>
            </div>
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Health Books
                            <!-- <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add an Package</button> -->
                        </div>
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
                               <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>SCHOOL</th>
                                        <th>AUTHOR</th>
                                        <th>DESCRIPTION</th>
                                        <th>PRICE</th>
                                        <th>AUTHOR CONTACT</th>
                                        <th>ACCOUNT NUMBER</th>
                                        <th>BANK NAME</th>
                                        <th>ACCOUNT NAME</th>
                                        <!-- <th>EDIT</th> -->
                                        <th>DELETE</th>
                                        <th>DOWNLOAD</th>
                                    </tr>
                                </thead>
                                <tbody id="health_books">

                                </tbody>
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
            $('#health_books').load('includes/page/health.php');
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
