<?php
/*
 * Created on Mar 31, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

// Special marker for start of result, used to catch a truncated
// line.

$line = "\"$$$\",\"" . date("Y-m-d G:i:s" ) . "\"";
$fields = array( "LANGUAGE","DEV","IDE","REPORTWRITER","TOOLS","PRIMARY" );
//echo print_r( $_POST );
foreach ( $fields as $field )
{
	$line .= ",\"${_POST[ $field ]}\"";
}
$line .= "\n";
//print "<br>\nLine: $line<br>\n";

ignore_user_abort(true);
$f = fopen( "../writable/results.csv", "a+t" );
if ( ! $f )
{
	echo "Could not open results file!\n";
	return;
}
flock( $f, LOCK_EX );

// In case some other script has appended to the file while we were 
// waiting on flock()...

fseek($f,0,SEEK_END);
fwrite( $f,$line );

//flock( $f,  LOCK_UN );
// fclose will remove all locks automatically
fclose( $f );
ignore_user_abort(false);
?>


<HTML>
<HEAD>
<title>Eclipse Survey</title>
</HEAD>
<BODY>
<B><I>Results Saved. Thanks again!</I></B>
<p>
Back to <a href="www.eclipse.org">eclipse</a>.
</BODY>
</HTML>
