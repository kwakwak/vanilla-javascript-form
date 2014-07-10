<?php

 $url = "http://web2lead.shahal.co.il/MailVerificationHandler/mailHandler.ashx?action=sendMailItikaBanner&password=76XXfR324";
//$url = "http://web2lead.shahal.co.il/MailVerificationHandler/mailHandler.ashx?action=sendMailLandingPage&password=76XXfR324";

$qry_str="&fname="
		.urlencode($_POST["fname"])
 		. "&lname="
 		.urlencode($_POST["lname"])
 		. "&url="
 		.urlencode($_POST["url"])
 		. "&phone="
 		.urlencode($_POST["phone"])
 		. "&city="
 		.urlencode($_POST["city"]);
 

// create curl resource 
$ch = curl_init(); 

// Set query data here with the URL
curl_setopt($ch, CURLOPT_URL, $url . $qry_str); 

// echo($url . $qry_str . "<br /><br /><br />===================================================<br /><br /<br />");

//return the transfer as a string 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

// $output contains the output string 
$output = curl_exec($ch); 
echo($output); 
// close curl resource to free up system resources 
curl_close($ch); 

?>