<?php 
include 'include/db_con.php';
$target_dir = "uploads/non-educational_coverpics/";
$target_file = $target_dir . basename($_FILES["Cover_pics"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$links = $target_file;

$target_dir1 = "uploads/non_educational_books/";
$target_file1 = $target_dir1 . basename($_FILES["book"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
$links1 = $target_file1;
if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["Cover_pics"]["tmp_name"]);
        if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        } else {
            echo "Sorry, there was an error uploading your file.";
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
        echo "Sorry, there was an error uploading your file.";
        
        $uploadOk = 0;
        }
        if ($_FILES["Cover_pics"]["size"] > 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        echo "Sorry, there was an error uploading your file.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["Cover_pics"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["Cover_pics"]["name"]). " has been uploaded.";
            // print"<script> alert('Cover_Pics Uploaded'); </script>";

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }

        $check = getimagesize($_FILES["book"]["tmp_name"]);
        if (file_exists($target_file1)) {
        echo "Sorry, there was an error uploading your file.";
        $uploadOk1 = 0;
        }
        if($imageFileType1 != "pdf") {
        echo "Sorry, only pdf files are allowed.";
        $uploadOk1 = 0;
        }
        if ($uploadOk1 == 0) {
        echo "Sorry, there was an error uploading your file.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["book"]["tmp_name"], $target_file1)) {
            echo "The file ". basename( $_FILES["book"]["name"]). " has been uploaded.";
            // print"<script> alert('Course_Work Uploaded'); </script>";
            $Title = mysqli_real_escape_string($connect, $_POST['Title']);
            $school = mysqli_real_escape_string($connect, $_POST['school']);
            $Author = mysqli_real_escape_string($connect, $_POST['Author']);
            $Description = mysqli_real_escape_string($connect, $_POST['Description']);
            $Price = mysqli_real_escape_string($connect, $_POST['Price']);
            $Field = mysqli_real_escape_string($connect, $_POST['Field']);
            $Author_contact = mysqli_real_escape_string($connect, $_POST['Author_contact']);
            $Account_no = mysqli_real_escape_string($connect, $_POST['Account_no']);
            $bank_name = mysqli_real_escape_string($connect, $_POST['bank_name']);
            $Account_name = mysqli_real_escape_string($connect, $_POST['Account_name']);


            if ($Price = "" || $Account_no == "" || $Account_name == "" || $bank_name == "") {
                    $insertme = mysqli_query($connect, "INSERT INTO $Field (Title, school, Author, Description, Cover_pics, Books,Price,Author_contact) VALUES
                    ('$Title','$school','$Author','$Description','$links', '$links1','Free','$Author_contact')");
                    if ($insertme) {
                    }
            }     
            else{
            $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO $Field (Title, school, Author, Description, Cover_pics, Books,Price,Author_contact,Account_no,bank_name, Account_name) VALUES
                    ('$Title','$school','$Author','$Description','$links', '$links1','$Price','$Author_contact','$Account_no','$bank_name','$Account_name')");
                    if ($insertme) {
                         print"Successfully uploaded";
                }
            }
            }       
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
}
?>