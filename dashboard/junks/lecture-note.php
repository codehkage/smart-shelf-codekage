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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lecture</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Lecture
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
                                        <th>#</th>
                                        <th>USERNAME</th>
                                        <th>EMAIL</th>
                                        <th>PHONE</th>
                                        <th>INSTITUTION</th>
                                        <th>SCHOOL</th>
                                        <th>PROGRAMME</th>
                                        <th>FACULTY</th>
                                        <th>DEPARTMENT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <p style="color:red; padding:10px;">NO DATA FOUND</p>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
    </div>
    
        <?php include 'navigation/footer.php';?>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>