<?php
/*
 * Created on Feb 19, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<?php

global $birtPath;
$notFound = $birtPath . "notFound.html";

function pickPage( $page )
{
	global $notFound;
	global $birtPath;
	//echo "Page: $page<br>";
	if ( $page == null  ||  $page == "" )
	{
		return "main.html";
	}
	$file = $birtPath . trim( $page );
	if ( is_dir( $file ) )
	{
		$dest = $file . "/main.php";
		if ( file_exists( $dest ) )
			return $dest;
		$dest = $file . "/main.html";
		if ( file_exists( $dest ) )
			return $dest;
		$dest = $file . "/menu.txt";
		if ( file_exists( $dest ) )
			return $dest;
		return $notFound;
	}
	if ( file_exists( $file ) )
	{
		return $file;
	}
	
	//echo "Says it was found.<br>";
	
	return $notFound;
}

function logDoc( $docName )
{
	$log = fopen( "page.log", "at" );
	$line = "\"" . date( "m/j/Y H:i:s" ) . "\",";
	$line .= "\"" . $docName . "\"\n";
	fwrite( $log, $line );
	fclose( $log );
}

function viewer( $page )
{
	$file = pickPage( $page );
	//echo "Picked: $file<br>";
	//logDoc( $file );
	
	if ( preg_match( "/\.php?$/i", $file ) )
	{
		//chdir( dirname( $file ) );
		//require basename( $file );
		//echo $file;
		require $file;
	}
	else if ( preg_match( "/menu\.txt$/i", $file ) )
	{
		require "convert.inc";
		startSequence( $file );
	}
	else
	{
		require "convert.inc";
		//global $viewer;
		//echo "parseDoc: viewer = $viewer\n";
		parseDoc( $file );
	}
}

?>
