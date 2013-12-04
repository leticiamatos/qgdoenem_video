<?php

	include("header.php");
	include("google_analytics.php");
	
	// create the Facebook Graph SDK object
	require 'src/facebook.php';
	$facebook = new Facebook(array(
		'appId'=>'1393749097528499', // replace with your value
		'secret'=>'2cbdb6bb75604d672b53d7eb424d2a68' // replace with your value
	));

	$signedRequest = $facebook->getSignedRequest();
	
	// Inspect the signed request
	$unlike = ($signedRequest['page']['liked'] == 1)? "_like" : "_unlike";
	include("video" . $unlike . ".php");

	include("footer.php");
	
?>

