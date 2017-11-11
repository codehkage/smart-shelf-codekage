$(document).ready(function(){
	$(".submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var password = $("#password").val();
		var confirmpassword = $("#confirm-password").val();
		var school = $("#SCHOOL").val;
		if(name!="" && email!="" && phone!="" && password!=""){
			if(password==confirmpassword){
				$('.loader2').show();
				$.ajax({
		            url:"include/page/regprofessional.php",
		            method:"POST",
		            data:{name:name, email:email, phone:phone, password:password, school:school},
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
	
