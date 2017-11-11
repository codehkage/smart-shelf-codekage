// Check if browser supports service worker and then register the service worker
/*if ('serviceWorker' in navigator) {
	navigator.serviceWorker.register('/smartshelf/serviceworker.js', {
		scope: './'
	}).then(function(registration) {
		console.log("Service Worker Registered " + "\n" + registration.scope);
	}).catch(function(err){
		console.log("Service Worker failed to Register", err);
	});
}*/

// Function to perform HTTP request
/*var get = function(url) {
	return new Promise(function(resolve, reject) {
		var xhr = new XMLHttpRequest();
		xhr.onreadystate = function() {
			if (xhr.status === 200) {
				var result = xhr.responseText;
				result = JSON.parse(result);
				resolve(result);
			} else {
				reject(xhr);
			}
		}
	});

	xhr.open("GET", url, true);
	xhr.send();
}*/

	(function () {
	    // $(window).load(function() {
	    // 	$("body").hide();
	    //     $('#st-preloader').delay(350).fadeOut('slow');
	    //     $("body").show();
	    // });
	}());

$(document).ready(function() {

	// Function to detect if the user system is desktop or mobile
	var deviceDetector = (function ()
	{
		var getUserAgent = navigator.userAgent.toLowerCase();
		var detect = (function(s)
		{
			if(s===undefined)s=getUserAgent;
			else getUserAgent = s.toLowerCase();
			if(/(ipad|tablet|(android(?!.*mobile))|(windows(?!.*phone)(.*touch))|kindle|playbook|silk|(puffin(?!.*(IP|AP|WP))))/.test(getUserAgent))
				return 'tablet';
			else
				if(/(mobi|ipod|phone|blackberry|opera mini|fennec|minimo|symbian|psp|nintendo ds|archos|skyfire|puffin|blazer|bolt|gobrowser|iris|maemo|semc|teashark|uzard)/.test(getUserAgent))            
					return 'phone';
				else return 'desktop';
			});
		return{
			device:detect(),
			detect:detect,
			isMobile:((detect()!='desktop')?true:false),
			userAgent:getUserAgent
		};
	}());

	// Check if user system is desktop 
	function verifyMobile() {
		if(deviceDetector.device == 'desktop') {
			// You're on a desktop
			$("body").css({
				display: 'none',
				visibility: 'hidden'
			});
			location.href = "https://play.google.com/store/apps/details?id=com.danielobasi.smartbooks";
		}
	}
	// verifyMobile();

	// Sidebar scrolling
	/*$("#sidebar").niceScroll({
		cursorcolor: '#53619d',
		cursorwidth: 4,
		cursorborder: 'none'
	});*/

	$('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		// $('.overlay').fadeOut();
	});

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').addClass('active');
		// $('.overlay').fadeIn();
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');
	});

	// Close sidebar on swipe
	$(document).on( "swipeleft", "#home-page", function(e) {
		$('#sidebar').removeClass('active');
		// $('.overlay').fadeOut();		
	});

	// Open sidebar on swipe
	$( document ).on( "swiperight", "#home-page", function(e) {		
		$('#sidebar').addClass('active');
		// $('.overlay').fadeIn();
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');		
	}).on( "swiperight", ".tab-wrapper", function(e) {
		e.stopPropagation();
	});	



	// activate the tabs
	$('#optionTab a').click(function (e) {
		e.preventDefault()
		$(this).tab('show');
	});

	/*$('#optionTab a[href="#profile"]').tab('show') // Select tab by name
	$('#optionTab a:first').tab('show') // Select first tab
	$('#optionTab a:last').tab('show') // Select last tab
	$('#optionTab li:eq(2) a').tab('show') // Select third tab (0-indexed)*/
});