<?php include 'include/navigation/sidebar.php';  ?>
        <div id="profile-content">
            <nav class="navbar navbar-default profile-navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="pull-left">
                            <p class="nav-drawer" id="sidebarCollapse">
                                <span class="sidemenu"></span>
                            </p>
                            <span class="brand-text">Profile</span>
                        </div>
                        <div class="pull-right">
                            <a href="search.php" rel="external"><span class="search pull-left"><i class="fa fa-search search"></i></span></a>
                            <span class="more-options"></span>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="note" id="upp">
                <span><i class="fa fa-times-circle close"></i></span>
                <div class="textsave">
                    <form method="post" id="noteform" action="include/page/note.php">
                       <div class="form-group" style="padding:11px;">
                       <textarea class="form-control" rows="5" cols="10" id="comment" name="note"  style="height: 536px;">
                            <?php  
                            $query = ("SELECT * FROM note WHERE email = '".$_SESSION['email']."'");
                                          $result = mysqli_query($connect, $query);
                                                                      while ($row = mysqli_fetch_array($result)) {
                                                                        echo  $row['note'];
                            }?>

                       </textarea>
                       </div>
                        <div class="loader2" style="display:none;">
                            <svg width="50px"  height="50px" style="text-align:center;float: right;width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
                                <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
                                  <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                                </circle>
                            </svg>
                        </div>
                       <input type="submit" class="btn btn-primary" style="float:right; padding:5px;" value="SAVE"/>
                   </form>
                </div>
            </div>
            <div class="timetable" id="up">
                <span><i class="fa fa-times-circle close"></i></span>

                 <div class="container">
            <form method="post">
        <div class="table-responsive table-condensed">
              <table class="table">
             <div id="head_nav">
    <tr>
        <th></th>
        <th>00:00 - 01:00</th>
        <th>01:00 - 02:00</th>
        <th>02:00 - 03:00</th>
        <th>03:00 - 04:00</th>
        <th>04:00 - 05:00</th>
        <th>06:00 - 07:00</th>
        <th>07:00 - 08:00</th>
        <th>08:00 - 09:00</th>
        <th>09:00 - 10:00</th>
        <th>10:00 - 11:00</th>
        <th>11:00 - 12:00</th>
    </tr>
</div>  

    <tr>
        <th class="time">Monday</th>
        
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
        </div>
    </tr>

    <tr>
        <th class="time">Tuesday</td>
        
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
        </div>
    </tr>

    <tr>
        <th class="time">Wednesday</td>
        
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
        </div>
    </tr>

    <tr>
        <th class="time">Thrusday</td>
        
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>

        </div>
    </tr>

    <tr>
        <th class="time">Friday</td>
        
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
        </div>
    </tr>

    <tr>
        <th class="time">Saturday</td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
        </div>
    </tr>

     <tr>
        <th class="time">Sunday</td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
            <td><input type="text" placeholder="Enter Your Plan"></td>
        </div>
    </tr>


              </table>
            </div>
            </div>
            <input type="submit" value="SAVE" class="btn-primary btn" style="float:right;margin: 18px;">
            </form>
            </div>
        </div>
    </div>

            </div>
            <div class="full-img">
            <!-- <br><br><br><br> -->
                <i class="fa fa-long-arrow-left" id="back"></i>   
            <div class="imgdiv">
                <!-- <img src="include/page/profile/default/3d_abstract_polygon_wallpaper___e1-wallpaper-1920x1080.jpg" alt="" width="100%" id="img-profile"> -->
                                <?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM profile_pics WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $path = $row['image_path'];
                                echo "<img src='".$row['image_path']."' alt='' class='' width='100%' id='img-profile'>";
                                }
                            ?>
            </div>
            </div> 

            <div class="overlay"> 
            <div class="profile-wrapper">
             <div class="loader2" style="display:none;">
                <svg width="50px"  height="50px" style="text-align:center;float: right;width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
                    <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
                      <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                    </circle>
                </svg>
            </div>
            <div align="center" class="col-sm-8 col-xs-8 col-xs-offset-2 col-sm-offset-2 profile-img-wrapper">
                <form method="post" action="include/page/profile.php" enctype="multipart/form-data" id="myform">
                <div class="success"></div>
                    <div class="imgg">
                    <!-- <img src="include/page/profile/default/3d_abstract_polygon_wallpaper___e1-wallpaper-1920x1080.jpg" alt="" class="profile-pic img-rounded" id="img-profile"> -->
                    <?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM profile_pics WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $path = $row['image_path'];
                                echo "<img src='".$row['image_path']."' alt='' class='profile-pic img-rounded' id='img-profile'>";
                                }
                    ?>
                    </div>
                        <div class="upload"><i class="fa fa-upload"></i></div> 
                        <input type="file" class="file" accept="image/*" name="file" style="display:none;">       
                        <input type="submit" class="submit">
                                <!-- <div class="loader-profile  ">
                                    <svg width="50px"  height="50px" style="text-align:center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;">
                                        <circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#1d2d42" stroke-width="2" r="40" stroke-dasharray="188.49555921538757 64.83185307179586" transform="rotate(354 49.9999 49.9999)">
                                          <animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animateTransform>
                                        </circle>
                                    </svg>
                                </div> -->
                    <!-- <input type="file" name="file" class="profile_pics">  -->
                    <br>
                    <!-- <input class="uploadpics btn btn-primary" type="submit" value="Upload Your Photo"> -->
                    <span class="profile-name"><p class="text-center">
                    <?php  
                            include 'include/db_con.php';
                            $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."' ");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            echo $row['username'];
                                }
                    ?>
                    </p></span>
                </form>
                </div>
                <div class="col-sm-12 col-xs-12 user-stats">
                    <div class="col-sm-4 col-xs-4 text-center">
                        <span class="profile-posts">
                            <p><b>&nbsp; 213</b> <br> Posts</p>
                        </span>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <span class="profile-followers text-center">
                            <p><b>&nbsp; 18k</b> <br> Followers</p>
                        </span>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <span class="profile-following text-center">
                            <p><b>&nbsp; 13k</b> <br> Following</p>
                        </span>
                    </div>
                </div>
                <div class="profile-tab-wrapper">
                    <ul id="profileTab" class="nav nav-tabs profile-tabs">
                        <li class="col-sm-4 col-xs-4">
                            <a class="text-center timetablecall"style="font-size: lager;"><span><i style="transform: rotate(180deg);" class="fa fa-table"></i></span>
                            <!-- Timetable -->
                            </a>
                        </li>
                        <li class="col-sm-4 col-xs-4">
                            <a class="text-center" href="#download" style="font-size: lager;"><span><i class="fa fa-download"></i></span>
                            <!-- Downloads -->
                            </a>
                        </li>
                          <li class="col-sm-4 col-xs-4">
                            <a class="text-center notecall" style="font-size: larger;"><span><i class="fa fa-sticky-note-o"></i></span>
                           <!-- <br>Note -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="profileTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="download" style="height: 314px;">
                        <div class="col-sm-12 col-xs-12 books-wrapper">
                            <div class="thumbnail" style="width:100%;">
                                <img class="img-responsive" src="assets/img/2015-28.jpg" alt="">
                                <div class="caption">
                                    <p class="book-title">How to shock your audience 1</p>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>  -->
    <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/js/page/profile.js"></script>

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