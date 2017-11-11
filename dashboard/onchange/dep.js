 $(document).ready(function() {
          $('.selects2').change(function(){
          var schools = $(this).val();
           alert("schools");
          $.ajax({
            url:"onchange/select_dep.php",
            method:"POST",
            data:{school:schools},
            dataType:"text",
            success:function(data)
            {
              $('.department').html(data);
            }
          });
          });
        });