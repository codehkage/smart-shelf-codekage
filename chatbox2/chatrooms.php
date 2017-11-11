<?php include 'navigation/sidebar.php';?>

        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="pull-left">
                            <p class="nav-drawer" id="sidebarCollapse"><span class="sidemenu"></span></p>
                            <span class="brand-text">SmartShelf</span>      
                        </div>
                        <div class="pull-right">
                            <span class="search pull-left"><i class="fa fa-search search"></i></span>
                            <span class="more-options"></i></span>
                        </div>                      
                    </div>
                </div>  
            </nav>
<div class="overlay">
    	<div id="section" style="width: 46%;margin: auto;border-radius: 10px;">
    	
            <div id="rooms">
            	<h3>Rooms</h3>
                <ul>
                    <?php 

                        $query = ("SELECT * FROM user WHERE email = '".$_SESSION['email']."'");
                                $result = mysqli_query($connect, $query);
                                while ($rows = mysqli_fetch_array($result)) {
                                    $school = $rows['school'];
                                    $faculty = $rows['faculty'];
                                    $department = $rows['department'];
                                    // echo $department;
                         $getRooms = "SELECT * FROM chat_rooms where school = '$school' and faculty = '$faculty' and name = '$department $school'";
                         // "SELECT * FROM chat_rooms"; // Display chats from database
                        $result = mysqli_query($connect, $getRooms);
                         while($rows = mysqli_fetch_array($result)){
                            $room = $rows['name'];
                            $id = $rows['id'];
                            $query = mysqli_query($connect,"SELECT * FROM chat_users_rooms WHERE room_id = '$id'")or die("Cannot find data". mysqli_error());
                            $numOfUsers = mysqli_num_rows($query);
                             // header("room/?name=$room?");
                    ?>
                    <li>
                    <?php ?>
                        <a href="room/?name=<?php echo $room?>" class="change"></a>
                    </li>
                    <?php }}?>  
                </ul>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('.change').click();
        // location.reload();
    });
</script>
</html>