$(document).ready(function(){
	$(".submit").click(function(){
	var login_email = $("#login_email").val();
	var login_password = $("#login_password").val();
	if(login_email!="" && login_password!=""){
				$('.loader').show();
		        $('.reg').hide();
		        $('.forgot-password-link').hide();
				$.ajax({
		            url:"include/page/login.php",
		            method:"POST",
		            data:{login_email:login_email, login_password:login_password},
		            dataType:"text",
		            success:function(data)
		            {
					$('.success').html(data);
					$('.loader').hide();
		            }
		        });
	}
	else
	{
		$(".error").html("Please fill up all field");
	}
	});
});