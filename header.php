<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>FacebookCam QGdoEnem</title>

	<link rel="stylesheet" href="style/reset.css" type="text/css"/>
	<link rel="stylesheet" href="style/screen.css" type="text/css"/>
</head>

<body>
	<!-- Facebook Root -->
	<!-- ========================================================================================================== -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
	      appId      : '1393749097528499',                  					      // App ID from the app dashboard
	      channelUrl : 'http://fbcam-qgdoenem.herokuapp.com/',							// Channel file for x-domain comms
	      status     : true,							                                  // Check Facebook Login status
	      xfbml      : true               							                    // Look for social plugins on the page
		  });

			$(document).trigger('fbload');  //  <---- THIS RIGHT HERE TRIGGERS A CUSTOM EVENT CALLED 'fbload'
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=1393749097528499";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- ========================================================================================================== -->



	<!-- Google Analytics -->
	<!-- ========================================================================================================== -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-45103969-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- ========================================================================================================== -->