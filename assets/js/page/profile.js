$(document).ready(function(){
	$('.file').hide();
	$('.imgg').click(function(){
		$('.full-img').show();
		$('.profile-wrapper').hide();
	});
		$('#back').click(function(){
			// alert("fgg");
		$('.full-img').hide();
		$('.profile-wrapper').show();
	});
		$('.upload').click(function(){
			$('.file').click();
		});
		$('.file').change(function(){
			var file = $('.file').val();
			$('.submit').click();
		});
		$('#myform').ajaxForm({
			// alert("aaaa");
			beforeSend:function() {
				$('.loader2').show();
				// alert("fgkl");
			},
			uploadProgress:function(){
				$('.loader2').show();
			},
			success:function(){
				$('.loader2').hide();
				// window.location("profile.php");
			},
			complete:function(){
				$('.loader2').hide();
				location.reload();
			}
			
		});
		$('.notecall').click(function() {
		$(".note").animate({
            height: 'toggle'
        });
		});
		$('.timetablecall').click(function() {
		$(".timetable").animate({
            height: 'toggle'
        });
		});
		$('.close').click(function() {
			$('#upp').hide();
			$('#up').hide();
		});
		$('#noteform').ajaxForm({
			// alert("aaaa");
			beforeSend:function() {
				$('.loader2').show();
				// alert("fgkl");
			},
			uploadProgress:function(){
				$('.loader2').show();
			},
			success:function(){
				$('.loader2').hide();
			},
			complete:function(){
				$('.loader2').hide();
				location.reload();
			}
		});
}); 
