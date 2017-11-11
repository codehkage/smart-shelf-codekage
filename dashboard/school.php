<?php include 'navigation/header.php'; ?>
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
                <h4 class="modal-title">Add a School</h4>
              </div>
              <div class="modal-body">
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add School
                        </div>
                         <form class="m-t" role="form" method="post">
                        <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                                            <label>School Name</label>
                                            <input class="form-control" id="school_name"name="name">
                            </div>
                    </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" id="location" name="location">
                            </div>
                        </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group" style="display:none;">
                                            <label>School Id</label>
                                            <input class="form-control"  name="id" id="school_id">
                            </div>
                        </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" id="save" name="submit" style="float:right; padding:10px; margin-right:30px;">Save</button>
                <br><br><br>
            </div>
            </div>
            </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
                                <?php  
                                include 'includes/db_con.php';
                               if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                                  print"<script> alert('Successfully created a School'); </script>";
                                        $name = mysqli_real_escape_string($connect, $_POST['name']);
                                        $location = mysqli_real_escape_string($connect, $_POST['location']);
                                        $status="OK";
                                        if ($status=="OK") {
                                        $insertme = mysqli_query($connect, "INSERT INTO school (name, location) VALUES ('$name', '$location')");
                                        if ($insertme) {
                                            print"<script> alert('Successfully created a School'); </script>";
                                    }
                                 }
                                }
                                ?>
          </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">School</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf School
                            <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add a School</button>
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
                              <div id="school_list"></div>
                              </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
            $('#school_list').load('includes/page/school_db.php');
        }, 1000);
    });
      $(document).ajaxComplete(function() {   
        $('#delete i').click(function(){
            var details = ($(this).attr("num"));
           // alert(details);
          $.ajax({
            url:"includes/action/school_delete.php",
            method:"POST",
            data:{detail:details},
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
