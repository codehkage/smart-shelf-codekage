<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- <link rel="stylesheet" href="assets/2fcrYFNaTjcS6g4U3t-Y5UEw0lE80llgEseQY3FEmqw.woff2"> -->
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style>
body{
  background-color:#EEE !important;
  font-family: Lato !important;
}

.mdl-layout__content{
  background: #EEE !important;
    width: 100%;
    padding: 1px;
    margin: 52px auto;
}
.account{
  color: grey;
  float: left;
  padding: 8px;
}
.list_1{
  width: 100%;
  background-color: #fff;
}
ul{
  width: 100%;
  padding: 0px;
}
.mdl-list__item{
  list-style: none;
  /*padding: 8px;*/
  /*cursor: pointer;*/
  width: 100%;
  border-bottom: 1px solid grey;
}
.mdl-list__item{
  padding: 10px !important;
}
ul li a{
  color: black;
}
.demo-list-control {
  width: 100%;
}

.demo-list-radio {
  display: inline;
}
.one{
    background: red;
    border-radius: 50%;
    width: 28px;
    height: 26px;
    padding: 1px;
    color: white;
}
.mdl-list__item-avatar, .mdl-list__item-avatar.material-icons{
  height: 29px;
  width: 29px;
}
.mdl-layout{
  height: 90%;
}
.mdl-textfield__label{
  font-size: 12px;
}
</style>
<?php include 'include/navigation/sidebar.php';  ?>
        <div id="profile-content">
            <nav class="navbar navbar-default profile-navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="pull-left">
                            <p class="nav-drawer" id="sidebarCollapse">
                                <span class="sidemenu"></span>
                            </p>
                            <span class="brand-text">Settings</span>
                        </div>
                        <div class="pull-right">
                           <a href="search.php" rel="external"><span class="search pull-left"><i class="fa fa-search search"></i></span></a>
                            <span class="more-options"></span>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="overlay"> 
            <div class="settings-wrapper">
             <main class="mdl-layout__content">
    <div>
        <strong class="account">ACCOUNT</strong>
        <br><br>
        <div class="list_1">
            <ul class="demo-list-control mdl-list">
  <li class="mdl-list__item">
    <a href="editprofile.php">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:red;text-align: center;font-size:22px;padding: 4px;">person</i>
      Edit Profile Details
    </span>
    </a>
  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:yellow;text-align: center;font-size:22px;padding: 4px;">lock_outline</i>
      Change Password
    </span>
   </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:green;text-align: center;font-size:22px;padding: 4px;">notifications</i>
      Notifications
    </span>
    <span class="mdl-list__item-secondary-action" style="margin:0px 14px 0px 0px;">
      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="list-switch-1">
        <input type="checkbox" id="list-switch-1" class="mdl-switch__input" checked />
      </label>
    </span>
  </li>
    <li class="mdl-list__item" style="border-bottom: none;">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:blue;text-align: center;font-size:22px;padding: 4px;">lock_outline</i>
      Personalizing Account
    </span>
  </li>
</ul>
        </div>
    </div>

<div>
        <strong class="account">APP</strong>
        <br><br>
        <div class="list_1">
            <ul class="demo-list-control mdl-list">
  <li class="mdl-list__item">

    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:red;text-align: center;font-size:22px;padding: 4px;">notifications</i>
      Alarm and TimeTable
    </span>

  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:yellow;text-align: center;font-size:22px;padding: 4px;">volume_up</i>
      Sound
    </span>
   </li>
  <li class="mdl-list__item"style="border-bottom: none;">
    <span class="mdl-list__item-primary-content">
      <i class="material-icons  mdl-list__item-avatar" style="background:green;text-align: center;font-size:22px;padding: 4px;">lightbulb_outline</i>
      Reading Mode
    </span>
    <span class="mdl-list__item-secondary-action" style="margin:0px 14px 0px 0px;">
      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="list-switch-2">
        <input type="checkbox" id="list-switch-2" class="mdl-switch__input" checked />
      </label>
    </span>
  </li>
</ul>
        </div>
    </div>

  </main>
            </div>
            </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <!-- // <script type="text/javascript" src="assets/js/page/profile.js"></script> -->
    <script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>

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