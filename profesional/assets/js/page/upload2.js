$(document).ready(function (e) {
	$(".myform").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "non-educational.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			beforeSend : function()
			{
				//$("#preview").fadeOut();
				$(".loader2").fadeIn();
			},
			success: function(data)
		    {
		    		$(".loader2").fadeOut();
					$(".data").html(data).fadeIn();
				
		    }, 	        
	   });
	}));

	$(".educational").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "educational.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			beforeSend : function()
			{
				//$("#preview").fadeOut();
				$(".loader2").fadeIn();
			},
			success: function(data)
		    {
		    		$(".loader2").fadeOut();
					$(".error").html(data).fadeIn();
				
		    },	        
	   });
	}));
});

