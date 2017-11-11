 									function payWithPaystack(){
 									  var price = $('#prices').val();
				                      var email = $(".emails").val();
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
$(document).ready(function(){
	$('.add-date').click(function(){
		 $('.dates').append("<input type='date' class='date_time input-smartshelf'/>");
	});

$('.submit2').click(function(){
	var	percourse = 500;
	var ncourse = document.getElementsByTagName('input');
	count = 0;
		for(var i=0; i<ncourse.length; i++){
			if (ncourse[i].type === "checkbox" && ncourse[i].checked === true) {
				count++;
				var n = count * percourse;
				var t = document.getElementById('time').value;
				var v1 = n * t;
				var venue = document.getElementById('venue').value;
				var v2;
				if (venue == "TUTOR PLACE") {
					v2 = v1 + 0;
					// $('.success').append("<p>You have successfully asked for a tutor and the cost will be"+ v2 +". A mail will be sent to you soon</p>");
						 var insert = [];
						 var date = [];
						 var usr_time = $('.usr_time').val();
						 var venue = $('#venue').val();
						 var Hour = $('.Hour').val();
						 var Comment = $('.Comment').val();
							 $('.course').each(function(){
							 if($(this).is(":checked"))
							 {
							 insert.push($(this).val());
							 }
							 });
							 insert = insert.toString();
							 // alert(insert);
							 $('.date_time').each(function(){
							 date.push($(this).val());
							 });
							 date = date.toString();
							 var test = $('#prices').val(v2);
							 $.ajax({
								 url: "include/page/tutor.php",
								 method: "POST",
								 data:{insert:insert, date:date, usr_time:usr_time, venue:venue, Hour:Hour, Comment:Comment, v2:v2},
								 success:function(data){
								 swal({
	                                  title: "Procced Payment",
	                                  text: "You have successfully asked for a tutor and the cost will be "+v2+".Do you wish to proceed to Payment?",
	                                  type: "success",
	                                  showCancelButton: true,
	                                  closeOnConfirm: true,
	                                  showLoaderOnConfirm: true
	                                })
								 payWithPaystack();
				                }
							});

				}
				else if(venue == "MY PLACE"){
					v2 = v1 + 1000;
					// $('.success').append("<p>You have successfully asked for a tutor and the cost will be"+ v2 +". A mail will be sent to you soon</p>");
						 		 var insert = [];
						 var date = [];
						 var usr_time = $('.usr_time').val();
						 var venue = $('#venue').val();
						 var Hour = $('.Hour').val();
						 var Comment = $('.Comment').val();
							 $('.course').each(function(){
							 if($(this).is(":checked"))
							 {
							 insert.push($(this).val());
							 }
							 });
							 insert = insert.toString();
							 // alert(insert);
							 $('.date_time').each(function(){
							 date.push($(this).val());
							 });
							 date = date.toString();
							 var test = $('#prices').val(v2);
							 $.ajax({
								 url: "include/page/tutor.php",
								 method: "POST",
								 data:{insert:insert, date:date, usr_time:usr_time, venue:venue, Hour:Hour, Comment:Comment, v2:v2},
								  success:function(data){
								 swal({
	                                  title: "Procced Payment",
	                                  text: "You have successfully asked for a tutor and the cost will be "+v2+".Do you wish to proceed to Payment?",
	                                  type: "success",
	                                  showCancelButton: true,
	                                  closeOnConfirm: true,
	                                  showLoaderOnConfirm: true
	                                })
								 payWithPaystack();
				                }
							});

				}
				else if(venue == "NEUTRAL PLACE") {
					v2 = v1 + 500;
					// $('.success').append("<p>You have successfully asked for a tutor and the cost will be"+ v2 +". A mail will be sent to you soon</p>");
						 		 var insert = [];
						 var date = [];
						 var usr_time = $('.usr_time').val();
						 var venue = $('#venue').val();
						 var Hour = $('.Hour').val();
						 var Comment = $('.Comment').val();
							 $('.course').each(function(){
							 if($(this).is(":checked"))
							 {
							 insert.push($(this).val());
							 }
							 });
							 insert = insert.toString();
							 // alert(insert);
							 $('.date_time').each(function(){
							 date.push($(this).val());
							 });
							 date = date.toString();
							 var test = $('#prices').val(v2);
							 $.ajax({
								 url: "include/page/tutor.php",
								 method: "POST",
								 data:{insert:insert, date:date, usr_time:usr_time, venue:venue, Hour:Hour, Comment:Comment, v2:v2},
								  success:function(data){
								 swal({
	                                  title: "Procced Payment",
	                                  text: "You have successfully asked for a tutor and the cost will be "+v2+".Do you wish to proceed to Payment?",
	                                  type: "success",
	                                  showCancelButton: true,
	                                  closeOnConfirm: true,
	                                  showLoaderOnConfirm: true
	                                })
								 payWithPaystack();
				                }
							});

				}
			}
		}
	});
});
// 	$('.submit2').click(function(){
// 	 var insert = [];
// 	 var date = [];
// 	 var usr_time = $('.usr_time').val();
// 	 var venue = $('.venue').val();
// 	 var Hour = $('.Hour').val();
// 	 var Comment = $('.Comment').val();
// 		 $('.course').each(function(){
// 		 if($(this).is(":checked"))
// 		 {
// 		 insert.push($(this).val());
// 		 }
// 		 });
// 		 insert = insert.toString();
// 		 // alert(insert);
// 		 $('.date_time').each(function(){
// 		 date.push($(this).val());
// 		 });

// 		 $.ajax({
// 			 url: "insert.php",
// 			 method: "POST",
// 			 data:{insert:insert, date:date, usr_time:usr_time, venue:venue, Hour:Hour, Comment:Comment},
// 			 success:function(data){
// 			 $('#result').html(data);
// 			}
// 		});
// 	});
// });
