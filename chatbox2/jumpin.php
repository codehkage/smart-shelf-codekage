<?php
    require_once("dbcon.php");
if (isset($_POST['userid'])&&isset($_POST['pasword'])){
  $userid = $_POST['userid'];
  $pasword = $_POST['pasword'];

  if(!empty($userid)&&!empty($pasword)){
           $query = "SELECT * FROM register WHERE username='$userid' AND pasword='$pasword'";
             if ($query_run = mysqli_query($con,$query)){
          $query_num_rows = mysqli_num_rows($query_run);
       if($query_num_rows==1){
                // $user_id = mysqli_result($query_run, 0, 'id');
                // $_SESSION['user_id']=$user_id;
                // header('Location: jumpin.php');
                // session_start();header('Location: ./chatrooms.php');
            if (isAjax()) {
    
        $data = array();
        // $username = cleanInput($_POST['userid']);
        $username;
        
        if (checkVar($username)) {
        
            $getUsers = "SELECT * FROM chat_users WHERE username = '$username'";
                         
            if (!hasData($getUsers)) {
              $data['result'] = "<div class='message success'>Great! You found a username not in use</div>";
              $data['inuse'] = "notinuse";
            } else {
              $data['result'] = "<div class='message warning'>That username is already in use. (Usernames take 2 minutes without use to expire)</div>";
              $data['inuse'] = "inuse";
            }
            
            echo json_encode($data);
         }
        
    } else {
        $data = array();
        $username = cleanInput($_POST['userid']);
        
        if (checkVar($username)) {

          print "
          <script> 
          alert('WORKED');
          </script>
          ";
        
            $getUsers = "SELECT * FROM chat_users WHERE username = '$username'";
            
            if (!hasData($getUsers)) {
            
                $now = time();
            
                $postUsers = "INSERT INTO `chat_users` (`id` ,`username` ,`status` ,`time_mod`)VALUES (NULL , '$username', '1', '$now')";
                        
                mysqli_query($con,$postUsers);
                session_start();
                $_SESSION['userid'] = $username;
            
                header('Location: ./chatrooms.php');
        
            } 
            else {
              header('Location: ./?error=1');
             }
    
        }
    
    }  
  }  elseif ($query_num_rows == 0) {
            echo "
              <div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red;  max-width:100%; margin:250px auto; height:40px;'>
       <p style='text-align:center;color:black'><p style='color:white;'>Invaid Username/Password Combination.</p>
        </div><br>";
          }
        }
      }
      else{
   echo "
<div style='text-align:center; padding:10px 0px 10px 0px; border-radius:10px;  background:red; max-width:100%; margin:250px auto; height:40px;'>
       <p style='text-align:center;color:black'><p style='color:white;'>Fill the form below</p></p>
        </div><br>";
  }
}                



?>