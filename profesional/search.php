<!DOCTYPE html>
<html>
<head>
	<title>Welcome to smartshelf | Search</title>

	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />

	<link href="assets/css/bootstrap-3.3.7.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">

	<link rel="icon" href="assets/img/logo-1.png">
</head>
<body>
    <div class="search-wrapper">
        <div class="col-sm-1 col-xs-1 pdg-l-r-0 back-button-wrapper">
            <!-- <span class="back-button"></span> -->
        </div>
        <div class="col-sm-7 col-xs-7 pdg-l-r-0">
            <input type="text" class="form-control smartshelf-input" style="border: none;" id="search-book" placeholder="Search...">
        </div>
        <div class="col-sm-3 col-xs-3 pdg-r-0">
            <div class="form-group">
                <select class="smartshelf-input search-options" id="serc" style="border:none;width: 82px;padding: 0px;">
                    <option value="business">Business</option>
                    <option value="course_material">Course Material</option>
                    <option value="faith">Faith</option>
                    <option value="finance">Finance</option>
                    <option value="health">Health</option>
                    <option value="it_report">IT Report</option>
                    <option value="class_note">Note</option>
                    <option value="package">Package</option>
                    <option value="project_work">Project Work</option>
                    <option value="publication">Publication</option>
                    <option value="relationship">Relationship</option>
                    <option value="technology">Technology</option>
                    <option value="text_book">Text Book</option>
                </select>
            </div>
        </div><br><br>
        <div id="search-results">
            <p class="text-center"><b>No results found!</b></p>
        </div>
    </div>
</body>
            <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
            <script type="text/javascript" src="assets/js/jquery.mobile-1.4.5.min.js"></script>
            <script type="text/javascript" src="assets/js/page/home.js"></script>
            <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>

<script>
    $('#search-book').keydown(function(){
             var search = $('#search-book').val();
             var searchoptions = $('#serc').val();
             $.ajax({
                        url:"include/search.php",
                        method:"POST",
                        data:{search:search, searchoptions:searchoptions},
                        dataType:"text",
                        success:function(data)
                        {
                        $("#search-results").html(data);
                        }
              });
          })
</script>
</html>