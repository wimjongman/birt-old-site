<?php
/*
 * Created on Feb 19, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<?php

function ReadCounters( )
{
	global $birtPath;
	
	$file = "/home/data/httpd/writable/birt/birtcounter.txt"; 
	//$file = $birtPath . "counter/birtcounter.txt";
    $fhl = file($file);


    	foreach($fhl as $line){
    		echo( "<b>".$line."</b><br>" );
    	}
}


?>