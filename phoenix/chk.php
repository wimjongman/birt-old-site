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
//$install_instructions_version = "http://www.eclipse.org/birt/phoenix/build/" . "install_" . "R2_1_1" . ".php";
$install_instructions_version = "http://www.google.com";

if ( checkLink( $install_instructions_version ) ){
?>
	Found it!
<?php 
}else{ 
?>
    Did not find it!
<?php 
}


	
	
?>