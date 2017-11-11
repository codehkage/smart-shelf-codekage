<?php include 'include/navigation/sidebar.php';  ?>
    <script type="text/javascript" src="assets/js/page/cgpa.js"></script>
        <div id="profile-content">
            <nav class="navbar navbar-default profile-navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="pull-left">
                            <p class="nav-drawer" id="sidebarCollapse">
                                <span class="sidemenu"></span>
                            </p>
                            <span class="brand-text">My cgpa</span>
                        </div>
                        <div class="pull-right">
                               <!-- <span class="search pull-left">
                                <i class="fa fa-search search"></i>
                            </span> -->
                            <span class="more-options"></span>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="overlay"> 
            <div class="profile-wrapper">
            <div class="container">
            <p class="text-center login-student-text">GPA Calculator</p>
                     <form>
                     <p id="error"><p>
                     <input type="text" id="cr" placeholder="Course Code" class="form-control input-smartshelf">
                     <input type="text" id="mr" placeholder="Mark" class="form-control input-smartshelf">
                     <input type="text" id="ch" placeholder="Credit Unit" class="form-control input-smartshelf">
                     </form>
                     <button onclick="addRecord()" class="form-control btn-smartshelf btn-light text-center" style="width: 47%;float: left;">Add a record</button>
                     <button onclick="refreshElement()" class="form-control btn-smartshelf btn-dark text-center" style="width: 40%;float: right;">Refresh</button>
                 <center>  
                     
                 <table class="table table-bordered">
                     <tr>
                         <td class="r" id="cn1"></td>
                         <td class="r" id="ch1"></td>        
                         <td class="r" id="cm1"></td>
                         <td class="r" id="gr1"></td>
                         <td class="r" id="gp1"></td>
                         <td class="r" id="tp1"></td>
                         

                     <tr>
                         <td class="rt" id="Scn">Total Marks</td>
                         <td class="rt" id="tcr"></td>
                         <td class="rt" id="t"></td>
                         <td class="rt"></td>
                         <td class="rt"></td>
                         <td class="rt" id="tpo"></td>
                         

                     </tr>
                     <tr>
                         <td class="rt" id="cgpa"></td>
                     </tr>
                 </table>
                 </center>
      
      <script>
    
    displayCourses();
    
    </script>
 
            </div>
           </div>
        </div>
    </div>
        <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
    <!-- // <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>  -->
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>


    <noscript>
        <style type="text/css">
            body {
                display: none;
                visibility: none;
            }
        </style>
        <META HTTP-EQUIV="Refresh" CONTENT="0;URL=https://play.google.com/store/apps/details?id=com.danielobasi.smartbooks">
    </noscript>
</body>