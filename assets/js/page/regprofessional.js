$(document).ready(function(){
	$(".submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var password = $("#password").val();
		var confirmpassword = $("#confirm-password").val();
		var school = $("#SCHOOL").val()	;
		alert(school);
		var faculty = $("#FACULTY").val();
		var department = $("#DEPARTMENT").val();
		var Field = $("#Field").val();
		if(name!="" && email!="" && phone!="" && password!=""){
			if(password==confirmpassword){
				$('.loader2').show();
				$.ajax({
		            url:"include/page/regprofessional.php",
		            method:"POST",
		            data:{name:name, email:email, phone:phone, password:password, school:school, faculty:faculty, department:department, Field:Field},
		            dataType:"text",
		            success:function(data)
		            {
		              	 if (data == "Registered Successfully") {
		              	 	$('.loader2').show();
		                    window.location.href = "terms.php";
		                } else {
		                    $(".success").html(data);
		                    $('.loader2').hide();
		                }
		            }
		          });
			}
			else{
				$(".error").html("Password not the same");
			}
		}
		else{
			$(".error").html("Please fill up all field");
		}
	});
});

$(document).ready(function(){
        $('#SCHOOL').change(function(){
          var schools = $(this).val();
           // alert(schools);
          $.ajax({
            url:"onchange/select_faculty.php",
            method:"POST",
            data:{school:schools},
            dataType:"text",
            success:function(data)
            {
              $('#FACULTY').html(data);
            }
          });
        });
        $('#FACULTY').change(function(){
          var faculty = $(this).val();
          var school_name = $('#SCHOOL').val();
           // alert(school_name);
          $.ajax({
            url:"onchange/select_dep.php",
            method:"POST",
            data:{faculty:faculty, school_name:school_name},
            dataType:"text",
            success:function(data)
            {
              $('#DEPARTMENT').html(data);
            }
          });
          });
	});
	
