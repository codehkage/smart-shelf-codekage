<?php 
include 'include/db_con.php';
$target_dir = "uploads/educational_coverpics/";
$target_file = $target_dir . basename($_FILES["cover_pics"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$links = $target_file;

$target_dir1 = "uploads/educational_books/";
$target_file1 = $target_dir1 . basename($_FILES["course_material"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
$links1 = $target_file1;

$target_dir2 = "uploads/educational_books_preview/";
$target_file2 = $target_dir2 . basename($_FILES["Preview"]["name"]);
$uploadOk2 = 1;
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
$links2 = $target_file2;


if(isset($_POST["submit"])) {
    // echo"<script>alert('dddd');</script>";
        $check = getimagesize($_FILES["cover_pics"]["tmp_name"]);
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
        if ($_FILES["cover_pics"]["size"] > 10000000) {
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
        if (move_uploaded_file($_FILES["cover_pics"]["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES["cover_pics"]["name"]). " has been uploaded.";
            // print"<script> alert('Cover_Pics Uploaded'); </script>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }

        $check = getimagesize($_FILES["course_material"]["tmp_name"]);
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
        if (move_uploaded_file($_FILES["course_material"]["tmp_name"], $target_file1)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }


        $check = getimagesize($_FILES["Preview"]["tmp_name"]);
        if (file_exists($target_file2)) {
        echo "Sorry, Course_Work file already exists.";
        $uploadOk2 = 0;
        }
        if($imageFileType2 != "pdf") {
        echo "Sorry, only pdf files are allowed.";
        $uploadOk2 = 0;
        }
        if ($uploadOk2 == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["Preview"]["tmp_name"], $target_file2)) {
            
            $course_title = mysqli_real_escape_string($connect, $_POST['course_title']);
            $course_code = mysqli_real_escape_string($connect, $_POST['course_code']);
            $program = mysqli_real_escape_string($connect, $_POST['program']);
            $Description = mysqli_real_escape_string($connect, $_POST['Description']);
            $book_type = mysqli_real_escape_string($connect, $_POST['book_type']);
            $Publication_Type = mysqli_real_escape_string($connect, $_POST['Publication_Type']);
            $school_name = mysqli_real_escape_string($connect, $_POST['school_name']);
            $faculty_name = mysqli_real_escape_string($connect, $_POST['faculty_name']);
            $department_name = mysqli_real_escape_string($connect, $_POST['department_name']);
            $bank_name = mysqli_real_escape_string($connect, $_POST['bank_name']);
            $Price = mysqli_real_escape_string($connect, $_POST['Price']);
            $institution = mysqli_real_escape_string($connect, $_POST['institution']);
            $Account_no = mysqli_real_escape_string($connect, $_POST['Account_no']);
            $Account_name = mysqli_real_escape_string($connect, $_POST['Account_name']);
            $booktitle = mysqli_real_escape_string($connect, $_POST['booktitle']);

            if($book_type == "COURSE MATERIAL"){
                // echo "<script>alert('sssss');</script>";
                if ($Price == "" && $Account_no =="" && $Account_name == "" && $bank_name =="") {
                    $status="OK";
                    if($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO course_material(school_name, faculty_name, department_name, course_title, course_code, cover_pics,course_material,Program,price,Preview) VALUES('$school_name','$faculty_name','$department_name','$course_title','$course_code','$links','$links1','$program','Free','$links2')");
                // echo "<script>alert('sssss');</script>";
                    if($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
                else{
                $status="OK";
                    if($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO course_material(school_name, faculty_name, department_name, course_title, course_code, cover_pics,course_material,Program,price,Preview, bank_name,Account_no,Account_name) VALUES('$school_name','$faculty_name','$department_name','$course_title','$course_code','$links','$links1','$program','$Price','$links2','$bank_name','$Account_no','$Account_name')");
                // echo "<script>alert('sssss');</script>";
                    if($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
            }
            if($book_type == "CLASS NOTE") {
                if ($Price == "" && $Account_no =="" && $Account_name == "" && $bank_name =="") {
                  $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO class_note(school_name, faculty_name, department_name, classnote_title, classnote_code,Cover_Pics, Class_Note,price,Preview) VALUES('$school_name','$faculty_name','$department_name','$course_title','$course_code','$links','$links1','Free','$links2')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
                else{
               $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO class_note(school_name, faculty_name, department_name, classnote_title, classnote_code,Cover_Pics, Class_Note,price,Preview,bank_name,Account_no,Account_name) VALUES('$school_name','$faculty_name','$department_name','$course_title','$course_code','$links','$links1','$Price','$links2','$bank_name','$Account_no','$Account_name')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
            }

            if ($book_type == "IT REPORT") {
                if ($Price == "" && $Account_no =="" && $Account_name == "" && $bank_name =="") {
                   $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO it_report(school_name, faculty_name, department_name, course_title, course_code,cover_pics,course_material,Preview,price) VALUES('$school_name','$faculty_name','$department_name','$course_title', '$course_code','$links','$links1','$links2','Free')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }else{
                    $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO it_report(school_name, faculty_name, department_name, course_title, course_code,cover_pics,course_material,Preview,price,bank_name,Account_no,Account_name) VALUES('$school_name','$faculty_name','$department_name','$course_title', '$course_code','$links','$links1','$links2','$Price','$bank_name','$Account_no','$Account_name')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
            }
            if ($book_type == "PUBLICATIONS") {
                if ($Price == "" && $Account_no =="" && $Account_name == "" && $bank_name =="") {
                   $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO publication(INSTITUTION, school_name, Publication_Type, Department, books_title, author,price,description,Cover_Pics,Publication, Preview) VALUES('$institution','$school_name','$Publication_Type','$department_name','$booktitle', '$Account_name','Free','$Description','$links','$links1','$links2')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }else{
                    $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO publication(INSTITUTION, school_name, Publication_Type, Department, books_title, author,price,description,Cover_Pics,Publication, Preview,bank_name,Account_no,Account_name) VALUES('$institution','$school_name','$Publication_Type','$department_name','$booktitle', '$Account_name','$Price','$Description','$links','$links1','$links2','$bank_name','$Account_no','$Account_name')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
            }
            if ($book_type == "PROJECT WORK") {
                if($Price == "" && $Account_no =="" && $Account_name == "" && $bank_name =="") {
                    $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO project_work(school_name, faculty_name, department_name, course_title, course_code,cover_pics,course_material,Program,price, Preview) VALUES('$school_name','$faculty_name','$department_name','$course_title', '$course_code','$links','$links1','$program','Free','$links2')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }else{
                 $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO project_work(school_name, faculty_name, department_name, course_title, course_code,cover_pics,course_material,Program,price, Preview,bank_name,Account_no,Account_name) VALUES('$school_name','$faculty_name','$department_name','$course_title', '$course_code','$links','$links1','$program','$Price','$links2','$bank_name','$Account_no','$Account_name')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                }
            }
            if ($book_type == "TEXT BOOKS") {
                 if($Price == "" && $Account_no =="" && $Account_name == "" && $bank_name =="") {
                         $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO text_book(school_name, books_title, author, price, description,Cover_Pics,Preview,text_book) VALUES('$school_name','$booktitle','$Account_name','Free', '$Description','$links','$links2','$links1')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
                 }else{
                     $status="OK";
                    if ($status=="OK") {
                    $insertme = mysqli_query($connect, "INSERT INTO text_book(school_name, books_title, author, price, description,Cover_Pics,Preview,text_book,bank_name,Account_no,Account_name) VALUES('$school_name','$booktitle','$Account_name','$Price', '$Description','$links','$links2','$links1','$bank_name','$Account_no','$Account_name')");
                    if ($insertme) {
                      // print"<script> alert('Successfully created a Faculty'); </script>";
                        print"Successfully Uploaded";
                    }
                }
             }
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }

}
?>