$(document).ready(function(){
	$(".Publication_Type").hide();
	$('.postgraduat2').hide();
	$('.Preview').hide();
	$('#booktitle').hide();
	$('.SCHOOL').change(function(){
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
					var school_name = $('.SCHOOL').val();
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

			 $('.submit1').click(function(){
			 var upload1 =  $('.coverpics').val();
			 var upload2 =  $('.book').val();
			 var upload3 =  $('.coverpics2').val();
			 var upload4 =  $('.book1').val();
			 var name =  $('#name').val();
			 var email =  $('#email').val();
			 var Author_contact =  $('#Author_contact').val();
			 var Description =  $('#Description').val();
			 var price =  $('#price').val();
			 var acc_num =  $('#acc_num').val();
			 var Account_name =  $('#Account_name').val();
			 var bank_name =  $('#bank_name').val();
			 var SCHOOL =  $('#SCHOOL').val();
			 var Field =  $('#Field').val();
			 // alert(upload1);alert(upload2);alert(upload3);alert(upload4);
				if(upload1 == "" || upload2 == "" || name == "" || email == "" || Author_contact == "" || Description == "" || SCHOOL =="" || Field ==""){
					$(".error").html("Field can not be empty");
					setTimeout(function() {
					$('.error').fadeOut('slow');
					}, 3000); 
				}
				else{
					$('.submit1').prop('type','submit');
				}
				});
				

			$('.submit2').click(function(){
			 var book_type =  $('#book_type').val();
			 var INSTITUTION =  $('#INSTITUTION').val();
			 var school_name =  $('#school_name').val();
			 var FACULTY =  $('#FACULTY').val();
			 var DEPARTMENT =  $('#DEPARTMENT').val();
			 var booktitle =  $('#booktitle').val();
			 var course_code =  $('#course_code').val();
			 var course_title =  $('#course_title').val();
			 var program =  $('#program').val();
			 var DESCRIPTION =  $('#DESCRIPTION').val();
			 var coverpics2 =  $('.coverpics2').val();
			 var Preview =  $('.Preview').val();
			 var book1 =  $('.book1').val();
			 // alert(book_type);alert(FACULTY);alert(Preview);alert(book1);
				if(book_type == "" || INSTITUTION == "" || school_name == "" || FACULTY == "" || DEPARTMENT == "" || program == "" || DESCRIPTION == "" || coverpics2 == "" || Preview =="" || book1==""){
					$(".error").html("Field can not be empty");
					setTimeout(function() {
					$('.error').fadeOut('slow');
					}, 3000); 
				}
				else{
					$('.submit2').prop('type','submit');
				}
				});



	$('.coverpics').hide();
	$('.book').hide();
	$('.coverpics2').hide();
	$('.book1').hide();
	$(".educational_details").hide();
	$(".continue").click(function(){		
		$(".user_details").hide();
		$(".educational_details").show();
	});
	$(".arrowo").click(function(){		
		$(".user_details").show();
		$(".educational_details").hide();
	});

$(".coverpics").change(function(){
		var clicval = $(".coverpics").val();
		$("#coverpicsval").html(clicval);
});

$(".book").change(function(){
		var clicval = $(".book").val();
		$("#bookval").html(clicval);
});


$(".coverpics2").change(function(){
		var clicval = $(".coverpics2").val();
		$("#coverpics2val").html(clicval);
});

$(".Preview").change(function(){
		var clicval = $(".Preview").val();
		$("#Previewval").html(clicval);
});
$(".book1").change(function(){
		var clicval = $(".book1").val();
		$("#book1val").html(clicval);
});

	$(".cover").click(function(){		
		$(".coverpics").click();
	 });
	$(".books").click(function(){		
		$(".book").click();
	});

		$(".cover2").click(function(){   
		$(".coverpics2").click();
	});
	$(".books1").click(function(){   
		$(".book1").click();
	});
// 	$('.myform').ajaxForm({
// 			// alert("aaaa");
// 			beforeSend:function() {
// 				$('.loader2').show();
// 				// alert("fgkl");
// 			},
// 			uploadProgress:function(){
// 				$('.loader2').show();
// 			},
// 			success:function(){
// 				$('.loader2').hide();
// 				$('.success').show();
// 			},
// 			complete:function(){
// 				$('.loader2').hide();
// 				$('.success').show();
// 			}
// });
// $('.educational').ajaxForm({
//       // alert("aaaa");
//       beforeSend:function() {
//         $('.loader3').show();
//         // alert("fgkl");
//       },
//       uploadProgress:function(){
//         $('.loader3').show();
//       },
//       success:function(){
//         $('.loader3').hide();
//         $('.success').show();
//       },
//       complete:function(){
//         $('.loader2').hide();
//         $('.success').show();
//       }
// });
$('.preview1').click(function(){
	$(".Preview").click();
});
	$('.Field').change(function(){
		 var field = $(this).val();
		 if(field == "PUBLICATIONS"){
			// $(".Publication_Type").show();
			//         $("#booktitle").show();
			//         $(".FACULTY").hide();
			//         $("#DEPARTMENT").hide();
							$('.booktitle').show();
							$(".Publication_Type").show();
							$('#FACULTY').hide();
							$('#DEPARTMENT').hide();
							$('.course_title').hide();
							$('.course_code').hide();
							
		 }
		 else
		 {
						$('#FACULTY').show();
						$('#DEPARTMENT').show();
						$(".Publication_Type").hide();
						$("#booktitle").hide();

		 }
		 if(field == "TEXT BOOKS"){
							$('#FACULTY').hide();
							$('#DEPARTMENT').hide();
							$("#booktitle").show();
							$('#course_title').hide();
							$('#course_code').hide();
			}
		 else{
			$('#FACULTY').show();
						$('.DEPARTMENT').show();
						 $('.FACULTY').show();
							$("#booktitle").hide();
				}	
	});
	$(".continue2").click(function(){    
		$(".postgraduate1").hide();
		$(".postgraduat2").show();
	});
	$(".arrow1").click(function() {
		 $(".postgraduate1").show();
		$(".postgraduat2").hide();
	});
});

