$(document).ready(function(){
   setInterval(function(){
            $('.health').load('include/archive_section/health.php');
    });
   setInterval(function(){
            $('.finance').load('include/archive_section/finance.php');
    });
      setInterval(function(){
            $('.relationship').load('include/archive_section/relationship.php');
    });
      setInterval(function(){
            $('.business').load('include/archive_section/business.php');
    });
      setInterval(function(){
            $('.faith').load('include/archive_section/faith.php');
    });
      setInterval(function(){
            $('.technology').load('include/archive_section/technology.php');
    });
});

$(document).ajaxComplete(function(){
      $(".healthdetail").click(function(){
         // alert(school);
           var id = $(this).attr("ids");
           $(".health_details").show();
           $.ajax({
                    url:"details/archive/health.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".health_details").html(data);
                    }
                  });
       });
       $(".financedetails").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           $(".Finance").show();
           $.ajax({
                    url:"details/archive/finance.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".Finances").html(data);
                    }
                  });
       });
        $(".relationship").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           // alert(id);
           $(".relationship1").show();
           $.ajax({
                    url:"details/archive/relationship.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".relationship1").html(data);
                    }
                  });
       });
        $(".business").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           // alert(id);
           $(".relationship1").show();
           $.ajax({
                    url:"details/archive/business.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".business1").html(data);
                    }
                  });
       });
        $(".faiths").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           // alert(id);
           $(".faith1").show();
           $.ajax({
                    url:"details/archive/faith.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".faith1").html(data);
                    }
                  });
       });
        $(".technologys").click(function(){
           var id = $(this).attr("id");
           // alert(id); 
           $(".technology1").show();
           $.ajax({
                    url:"details/archive/technology.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data)
                    {
                    $(".technology1").html(data);
                    }
                  });
       });
    });