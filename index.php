<?php

	//include("header.php");
	
	// create the Facebook Graph SDK object
	require 'src/facebook.php';
	$facebook = new Facebook(array(
		'appId'=>'571031772945105', // replace with your value
		'secret'=>'e7ba353c4e69485e6fa1df1adb2fb9ae' // replace with your value
	));

	$signedRequest = $facebook->getSignedRequest();
	
	// Inspect the signed request
	$unlike = ($signedRequest['page']['liked'] == 1)? "" : "_unlike";
	include("video" . $unlike . ".php");

	//include("footer.php");
	
?>

