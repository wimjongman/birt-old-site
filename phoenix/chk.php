<?php

function checkLink($link=0)
{

	$fp = @fopen($link,"r");
	if ($fp)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}
function chklnk($link=0)
{


$ch = curl_init("http://www.google.com"); /// initialize a cURL session 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$xmlResponse = curl_exec ($ch);
curl_close ($ch);

if (!is_string($xmlResponse) || !strlen($xmlResponse)) {
   return false;
} else {
   return true;
}
}
//$install_instructions_version = "http://www.eclipse.org/birt/phoenix/build/" . "install_" . "R2_1_1" . ".php";
$install_instructions_version = "http://www.google.com";

if ( chklnk( $install_instructions_version ) ){
?>
	Found it!!!!
<?php 
}else{ 
?>
    Did not find it!!!!
<?php 
}


	
	
?>