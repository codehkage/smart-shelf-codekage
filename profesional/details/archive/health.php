<?php 
include 'db_con.php';
session_start(); 
    $output='';
    $sql = "SELECT * FROM health where id = '".$_POST["id"]."'";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
         // echo" <option>".$row['description']."</option>";
          echo '
           <div class="col-sm-12 col-xs-12 book-info mrg-tp-65 pdg-l-r-0">
                <div class="col-sm-6 col-xs-6">
                    <div class="thumbnail" style="width:100%">
                                    <img class="img-responsive"  src="'.$row['Cover_pics'].'" alt="">
              </div>
                </div>
                <div class="col-sm-6 col-xs-6 pdg-l-0">
                    <p style="float:left">'.$row['Author'].'</p>
                    <p style="float:right">'.$row['Title'].'</p>
                </div>
                <div class="col-sm-12 col-xs-12 book-options pdg-l-r-0">
                    <div class="col-sm-6 col-xs-6 pdg-r-0">
                        <a href="" id="btn-buybook" style="font-size:16px;" class="form-control btn-smartshelf btn-light text-center">N'.$row['Price'].'</a>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <button id="btn-downloadbook" style="font-size:16px;" price="'.$row['Price'].'" email="'.$_SESSION['email'].'" class="form-control btn-smartshelf btn-dark text-center">DOWNLOAD</button>
                    </div>

                <div class="col-sm-12 col-xs-12 book-description-wrapper">
                    <p class="book-description">
                        <strong>DESCRIPTION</strong><br>
                       <p>'.$row['Description'].'</p><a href="">Read More</a>
                    </p>
                </div>
                <div class="col-sm-12 col-xs-12 book-preview-wrapper">
                    <p class="book-preview-text"><b>PREVIEW</b></p>
                    <div class="col-sm-4 col-xs-4 pdg-l-r-0">
                        <img src="assets/img/book-cover.jpg" alt="" class="book-preview-thumbnail">
                    </div>
                    <div class="col-sm-4 col-xs-4 pdg-l-r-0">
                        <img src="assets/img/book-cover.jpg" alt="" class="book-preview-thumbnail">
                    </div>
                    <div class="col-sm-4 col-xs-4 pdg-l-r-0">
                        <img src="assets/img/book-cover.jpg" alt="" class="book-preview-thumbnail">
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 book-rating-wrapper">
                    <p class="text-left pull-left">
                        <b>RATE THIS BOOK</b><br/>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star-half-full" aria-hidden="true"></i></span>
                    </p>
                    <p class="text-right pull-right">
                        <b>Downloads:</b><br/>
                        5k
                    </p>
                </div>
                <div class="col-sm-12 col-xs-12 book-review-wrapper">
                    <h5><b>REVIEW</b></h5>
                    <div class="user-review">
                        <span><img src="assets/img/profile-pic-2.jpg" alt="" style="width: 50px;padding: 5px;" class="user-rewiew-pic pull-left"></span>
                        <span class="pull-right reply-review">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </span>
                        <span>
                            <p class="user-review-name"><b>Tinubu</b></p>
                            <a class="date-reviewed">2017-09-07</a>
                        </span>
                    </div>
                    <div class="user-review">
                        <span><img src="assets/img/profile-pic-2.jpg" alt="" style="width: 50px;padding: 5px;" class="user-rewiew-pic pull-left"></span>
                        <span class="pull-right reply-review">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </span>
                        <span>
                            <p class="user-review-name"><b>Tinubu</b></p>
                            <a class="date-reviewed">2017-09-07</a>
                        </span>
                    </div>
                    <div class="user-review">
                        <span><img src="assets/img/profile-pic-2.jpg" alt="" style="width: 50px;padding: 5px;" class="user-rewiew-pic pull-left"></span>
                        <span class="pull-right reply-review">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </span>
                        <span>
                            <p class="user-review-name"><b>Tinubu</b></p>
                            <a class="date-reviewed">2017-09-07</a>
                        </span>
                    </div>
                </div>
            </div>
    </div>
          '; 
    }
?>
<!--  <div class="row">
            <div style="width: 91%;margin: auto;">
              <div class="thumbnail" style="width:100%">
                                    <img class="img-responsive"  src="dashboard/'.$row['upload'].'" alt="">
              </div>
            </div>
            <div>
              <p style="float:left">'.$row['Program'].'</p>
              <p style="float:right">'.$row['semester'].'</p>
              <p style="text-align:center">'.$row['level'].'</p>
            </div>
            <button class="btn btn-primary">'.$row['price'].'</button>
             <button class="btn btn-primary" style="float:right">Download</button>
            </div>
            <div>
            <span style="float: left;font-size: 18px;">DESCRIPTION</span>
            <br><br>
            <div style="width:100%;background: #eee; padding:5px;">
            <p>'.$row['description'].'</p>
            </div>
            </div> -->