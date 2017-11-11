<?php  
include 'includes/db_con.php';
$target_dir = "uploads/text_book_cover_pics/";
$target_file = $target_dir . basename($_FILES["Cover_Pics"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$links = $target_file;

$target_dir1 = "uploads/text_book/";
$target_file1 = $target_dir1 . basename($_FILES["text_book"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
$links1 = $target_file1;

$target_dir1 = "uploads/text_book_preview/";
$target_file2 = $target_dir1 . basename($_FILES["Preview"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
$links2 = $target_file2;

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
     print"<script> alert('I am Working'); </script>";
    $school_name = mysqli_real_escape_string($connect, $_POST['school_name']);
    $books_title = mysqli_real_escape_string($connect, $_POST['books_title']);
    $author = mysqli_real_escape_string($connect, $_POST['author']);
    $price = mysqli_real_escape_string($connect, $_POST['price']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
            $status="OK";
            if ($status=="OK") {
                 print"<script> alert('I am Working'); </script>";
            $insertme = mysqli_query($connect, "INSERT INTO text_book(school_name,books_title,author,price,description,Cover_Pics,text_book,Preview) VALUES ('$school_name','$books_title','$author','$price','$description','$links','$links1','$links2')");
            if ($insertme) {
              print"<script> alert('Successfully created a Faculty'); </script>";
        }
     }

 $check = getimagesize($_FILES["Cover_Pics"]["tmp_name"]);
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
if ($_FILES["Cover_Pics"]["size"] > 10000000) {
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
    if (move_uploaded_file($_FILES["Cover_Pics"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Cover_Pics"]["name"]). " has been uploaded.";
        print"<script> alert('Cover_Pics Uploaded'); </script>";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


      $check = getimagesize($_FILES["text_book"]["tmp_name"]);
if (file_exists($target_file1)) {
    echo "Sorry, Course_Work file already exists.";
    $uploadOk1 = 0;
}
if($imageFileType1 != "pdf") {
    echo "Sorry, only pdf files are allowed.";
    $uploadOk1 = 0;
}
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["text_book"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["text_book"]["name"]). " has been uploaded.";
        print"<script> alert(''Course_Work Uploaded'); </script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

      $check = getimagesize($_FILES["Preview"]["tmp_name"]);
if (file_exists($target_file1)) {
    echo "Sorry, Course_Work file already exists.";
    $uploadOk1 = 0;
}
if($imageFileType1 != "pdf") {
    echo "Sorry, only pdf files are allowed.";
    $uploadOk1 = 0;
}
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["Preview"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["Preview"]["name"]). " has been uploaded.";
        print"<script> alert(''Course_Work Uploaded'); </script>";
        header('Location: text-book.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>