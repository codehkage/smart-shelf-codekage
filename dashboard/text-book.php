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
                <h4 class="modal-title">Add a Text Book</h4>
              </div>
              <div class="modal-body">
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">                            
                <form method="post" action="upload-text_book.php" enctype="multipart/form-data">
                    <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-12">
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
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                            <div class="col-sm-6">
                            <div class="form-group faculty">
                                            <label>Book Title</label>
                                            <input class="form-control" id="books_title" name="books_title">
                            </div>
                            </div>
                 <div class="col-sm-6">
                            <div class="form-group department">
                                            <label>Author</label>
                                            <input class="form-control" id="author" name="author">
                            </div>
                 </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                            <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" id="price" name="price">
                            </div>
                            </div>
                 <div class="col-sm-6">
                            <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" id="description" name="description">
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
                        <label>Select Text Book</label>
                        <input type="file" id="Course_Work" name="text_book" class="upload-group">
                            </div>
                    </div>
                </div>
                <div class="row" style="WIDTH:100%;MARGIN: 10PX AUTO;">
                    <div class="col-sm-6">
                            <div class="form-group">
                        <label>Preview</label>
                        <input type="file" name="Preview" id="fileToUpload">
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
                    <h1 class="page-header">Text Book</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SmartShelf Text Book
                            <button type="button" style="float:right; margin:-5px auto;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add an Text Book</button>
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
                                    <th>SCHOOL</th>
                                    <th>BOOK TITLE</th>
                                    <th>AUTHOR</th>
                                    <th>PRICE</th>
                                    <th>DESCRIPTION</th>
                                    <th>BANK NAME</th>
                                    <th>ACCOUNT NUMBER</th>
                                    <th>ACCOUNT NAME</th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                    </tr>
                                </thead>
                                <tbody id="textbook">

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
        setInterval(function(){
            $('#textbook').load('includes/page/textbook.php');
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