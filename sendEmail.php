<?php

$url = "http://web2lead.shahal.co.il/MailVerificationHandler/mailHandler.ashx?action=sendMailLandingPage&password=76XXfR324";

$qry_str="&fname="
		.urlencode($_GET["fname"])
 		. "&lname="
 		.urlencode($_GET["lname"])
 		. "&email="
 		.urlencode($_GET["email"])
 		. "&phone="
 		.urlencode($_GET["phone"])
 		. "&city="
 		.urlencode($_GET["city"]);
 

// create curl resource 
$ch = curl_init(); 

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, $url . $qry_str); 

//return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// $output contains the output string 
$output = curl_exec($ch); 
echo($output); 
// close curl resource to free up system resources 
curl_close($ch); 

?>