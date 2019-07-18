<?php
	// Type domain without http or https //
	define("DOMAIN", "techijam.site");
	define("COUNTRY", "SA");
	define("PREFIX", "27");
	define("EMAIL", "info@techijam.site");
	define("SUBJECT", "Contact Techijam.site");

	//define("APIURL", "http://cms.idbmobile.com/api/domains/");
	define("CONTACTURL", "http://d1b.pw/mailSender.php");
	define("LOGINURL", "http://46.101.91.182:9270/search");
	//Get Terms & Conditions //
	/*$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,APIURL.DOMAIN);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,0);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);
	$obj = json_decode($buffer);
	define("TERMS", $obj->terms);
	define("DISC", $obj->disclaimer);
	define("COPY", $obj->copyright);*/
?>