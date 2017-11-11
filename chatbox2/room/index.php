<?php
include 'navigation/sidebar.php';

    if (isset($_GET['name']) && isset($_SESSION['email'])): 
    // echo "alert('sss')";
      $name = $_GET['name'];

      $getRooms = "SELECT *
  			           FROM chat_rooms
  		             WHERE name = '$name'";
  		         
      $roomResults = mysqli_query($connect,$getRooms);
		
	  	if (mysqli_num_rows($roomResults) < 1) {
  			header("Location: ../chatrooms.php");
  			die();
  		}
        	
      while ($rooms = mysqli_fetch_array($roomResults)) {
          $file =  $rooms['file'];
      }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome to: <?php echo $name; ?></title>
    <link rel="stylesheet" type="text/css" href="../main.css"/>
    <script src="jquery-3.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="chat.js"></script>
    <!-- // <script type="text/javascript" src="process.js"></script> -->
    <script type="text/javascript" src="settings.js"></script>
    <script type="text/javascript">
    	var chat = new Chat('<?php echo $file; ?>');
    	chat.init();
    	chat.getUsers(<?php echo "'" . $name ."','" .$_SESSION['email'] . "'"; ?>);
    	var name = '<?php echo $_SESSION['email'];?>';
    </script>
    <script type="text/javascript" src="settings.js"></script>
    <!-- // <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script> -->
    <script type="text/javascript" src="../check.js"></script>
    <!-- <link href="css/palette.css" rel="stylesheet"> -->
</head>
<nav class="navbar navbar-default profile-navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="pull-left">
                            <p class="nav-drawer" id="sidebarCollapse">
                                <span class="sidemenu"></span>
                            </p>
                            <span class="brand-text"><?php echo $name; ?></span>
                        </div>
                        <div class="pull-right">
                            <!-- <span class="search pull-left">
                                <i class="fa fa-search search"></i>
                            </span> -->
                            <!-- <span class="more-options"></span> -->
                        </div>
                    </div>
                </div>
            </nav>
             <div class="overlay">
              <?php include 'userlist.php'; ?>
             <div id="header">
             <br><br><br>
            <div id="chat-wrap">
                <div id="chat-area"></div>
            </div>
            <div class="send">
                    <textarea id="sendie" maxlength='100' rows="10" style="color:black"></textarea>
            </div>
               
        </div>
</body>
</html>
<script></script>
<?php
    else:
            // header('#');
    endif; 
?>
