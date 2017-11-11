<?php  
include 'includes/db_con.php';
$target_dir = "uploads/package_cover_pics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $links = $target_file;
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // echo $links;
//     // print"<script> alert('I am Working'); </script>";
    $school_name = mysqli_real_escape_string($connect, $_POST['school_name']);
    $faculty_name = mysqli_real_escape_string($connect, $_POST['faculty_name']);
    $department_name = mysqli_real_escape_string($connect, $_POST['department_name']);
    $semester = mysqli_real_escape_string($connect, $_POST['semester']);
    $level = mysqli_real_escape_string($connect, $_POST['level']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    // echo $faculty_name;
            $status="OK";
//              print"<script> alert('I am Working'); </script>";
            if ($status=="OK") {
            $insertme = mysqli_query($connect, "INSERT INTO package (school, faculty, department, level, semester, price, upload, description) VALUES ('$school_name','$faculty_name','$department_name','$level', '$semester','$price',' $links', '$description')");
            if ($insertme) {
              print"<script> alert('Successfully created a Faculty'); </script>";
        }
     }

 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        print"<script> alert('Good Work); </script>";
        header('Location: packages.php');

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>