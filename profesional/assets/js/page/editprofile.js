(function () {
	    $(window).load(function() {
	    	$("body").hide();
	        $('#st-preloader').delay(350).fadeOut('slow');
	        $("body").show();
	    });
	}());

$(document).ready(function(){
	// window.addEventListener('devicelight', function(event) {
	// 			  alert(event.value);
	// 			});
	$(".educational_details").hide();
	$(".continue").click(function(){		
		$(".user_details").hide();
		$(".educational_details").show();
	});
	$(".submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var password = $("#password").val();
		var confirmpassword = $("#confirm-password").val();
		var institution = $("#INSTITUTION").val();
		var school = $("#SCHOOL").val();
		var program = $("#PROGRAMMES").val();
		var faculty = $("#FACULTY").val();
		var department = $("#DEPARTMENT").val();
		if(name!="" && email!="" && phone!="" && password!=""){
			$('#editprofile').ajaxForm({
			beforeSend:function() {
				$('.loader2').show();
			},
			uploadProgress:function(){
				$('.loader2').show();
			},
			success:function(){
				$('.loader2').hide();
				// window.loaction("profile.php");
				$('.success').html("Sucessfully Edited Your Profile");
			},
			complete:function(){
				$('.loader2').hide();
			}
			});
			}
			else{
				$(".error").html("Some Fields are Empty");
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
	
