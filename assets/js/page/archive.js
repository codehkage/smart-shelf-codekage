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
     $(document).ajaxComplete(function(){
      $(".healthdetails").click(function(){
         // alert(school);
           var id = $(this).attr("id");
           // alert(id);
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
           // alert(id);
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
        $(".faith").click(function(){
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
        $(".technology").click(function(){
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
         $("#btn-downloadbook").click(function(){
                            swal({
                                  title: "Procced Payment",
                                  // text: "great",
                                  type: "success",
                                  showCancelButton: false,
                                  closeOnConfirm: true,
                                  showLoaderOnConfirm: false
                                })
                    function payWithPaystack(){
                      var email = $("#btn-downloadbook").attr("email");
                      var price = $("#btn-downloadbook").attr("price");
                      var phone = $('.phone').val();
                          var handler = PaystackPop.setup({
                            key: 'pk_test_0d82aa4c8cc3c05f4c41bb5dbdde0df13b6cb9cc',
                            email: email,
                            amount: price,
                            metadata: {
                               custom_fields: [
                                  {
                                      display_name: "Mobile Number",
                                      variable_name: "mobile_number",
                                      value: phone
                                  }
                               ]
                            },
                            callback: function(response){
                                alert('success. transaction ref is ' + response.reference);
                              },
                            onClose: function(){
                                alert('window closed');
                            }
                          });
                          handler.openIframe();
                        }
                     });
              });
    });
           

 