$(document).ready(function(){
		setInterval(function(){
            $('#package').load('include/section/undergraduate/package.php');
        });
		setInterval(function(){
            $('#class_note').load('include/section/undergraduate/class_note.php');
        });
		setInterval(function(){
            $('#course_material').load('include/section/undergraduate/course_material.php');
        });  
        setInterval(function(){
            $('#it_report').load('include/section/undergraduate/it_report.php');
        }); 
        setInterval(function(){
            $('#project_work').load('include/section/undergraduate/project_work.php');
        }); 
        setInterval(function(){
            $('#postgraduate_package').load('include/section/postgraduate/package_postgraduate.php');
        }); 
        setInterval(function(){
            $('#postgraduate_course_material').load('include/section/postgraduate/course_material_postgraduate.php');
        });     
        setInterval(function(){
            $('#postgraduate_project_work').load('include/section/postgraduate/project_work_postgraduate.php');
        }); 
        setInterval(function(){
            $('#text_books').load('include/section/text_book/text-book.php');
        }); 
        setInterval(function(){
            $('#publications').load('include/section/publication/publication.php');
        });  
    });
    $(document).ajaxComplete(function(){
        // alert("kskks");
       $(".pack").click(function(){
        // alert("ggggg");
           var school = $(this).attr("school");
           // alert(school);
           var faculty = $(this).attr("faculty");
           // alert(faculty);
           var department = $(this).attr("department");
           // alert(department);
           var semester = $(this).attr("semester");
           // alert(semester);
           var level = $(this).attr("level");
           // alert(level);
           var Program = $(this).attr("Program");
           // alert(Program);
           $(".package").show();
           $.ajax({
                    url:"details/undergraduate/package_details.php",
                    method:"POST",
                    data:{school:school, faculty:faculty, department:department, semester:semester, level:level, Program:Program},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".package_details").html(data);
                    }
                  });
       });
       $(".courses").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           // alert(id);
           $(".Course_Material").show();
           $.ajax({
                    url:"details/undergraduate/Course_Material_details.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".Course_Material_details").html(data);
                    }
                  });
       });
$(".report").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           $(".IT_Report").show();
           $.ajax({
                    url:"details/undergraduate/IT Report_details.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".IT_Report_details").html(data);
                    }
                  });
       });
$(".project").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           $(".Project_Work").show();
           $.ajax({
                    url:"details/undergraduate/Project Work_details.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".Project_Works").html(data);
                    }
                  });
       });
$(".package_post").click(function(){
           var id = $(this).attr("id");
           $(".GraduatePackage").show();
           $.ajax({
                    url:"details/postgraduate/package_details.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".Graduate_Package").html(data);
                    }
                  });
       });
          $(".CMd").click(function(){
               var id = $(this).attr("id");
               // alert(id);
               $(".Course_Material").show();
               $.ajax({
                        url:"details/postgraduate/Course_Material_details.php",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                        $(".Course_Materials").html(data);
                        }
                      });
           });
           $(".pw").click(function(){
               var id = $(this).attr("id");
               // alert(id);
               $(".Project_Work").show();
               $.ajax({
                        url:"details/postgraduate/project_work_details.php",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                        $(".Project_Works").html(data);
                        }
                      });
           });
           $(".tb").click(function(){
               var id = $(this).attr("id");
               // alert(id);
               $(".textbook").show();
               $.ajax({
                        url:"details/textbook/textbook_details.php",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                        $(".textbooks").html(data);
                        }
                      });
           });
           $(".pb").click(function(){
               var id = $(this).attr("id");
               // alert(id);
               $(".publication").show();
               $.ajax({
                        url:"details/publication/publication.php",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data)
                        {
                        $(".publications").html(data);
                        }
                      });
           });
});

