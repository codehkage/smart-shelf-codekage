<?php 
print"<script>alert('ttt');</script>";
session_start();
include 'db_con.php';
$target_dir = "profile/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$links = $target_file;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
       // echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        $query = ("SELECT * FROM profesional_users WHERE email = '".$_SESSION['email']."'");
                                $result = mysqli_query($connect, $query);
                                          while ($row = mysqli_fetch_array($result)) {
                                            $user = $row['username'];
                                            $ic = "include/page/".$target_file;
 $sql = "UPDATE profile_pics SET image_path='$ic' WHERE email = '".$_SESSION['email']."'";


if ($connect->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $connect->error;
}
             }

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>