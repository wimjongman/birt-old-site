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
$fields = array( "LANGUAGE","DEV","IDE","SCRIPTTOOLS", "SCRIPTPRIMARY", "REPORTWRITER","TOOLS","PRIMARY", "INDUSTRY", "SOURCES" );
$keys = array_keys($_POST);

$script_tools = array("NONE", "JAVASCRIPT", "PERL", "PHP", "PYTHON", "RUBY", "OTHER");
$tools        = array("BIRT", "CRYSTAL", "JASPER", "JSP", "JFREE", "JREPORTS", "REPORTNET", "STYLE", "OTHER");


//echo print_r( $_POST );
//print("<BR><BR>");
//print_r($keys);

$i = 0;
foreach ( $fields as $field )
{
	$mod_line = "";

	if($keys[$i] == "SCRIPTTOOLS") {
		//print("<BR><BR>");
		//print_r("Script Tools Key = " . $keys[$i] . " =====>> " . $_POST[$keys[$i]]);

		foreach($script_tools as $script_tool) {		
			if(strstr($_POST[$keys[$i]], $script_tool) == FALSE) {
				$mod_line .= ",\"N\"";
			} else {
				$mod_line .= ",\"Y\"";
			}
		}
		//print("<BR>mod_line = " . $mod_line . "<br>");
		$line .= $mod_line;
	} else if ($keys[$i] == "TOOLS") {
		//print("<BR><BR>");
		//print_r("Script Tools Key = " . $keys[$i] . " =====>> " . $_POST[$keys[$i]]);

		foreach($tools as $tool) {		
			if(strstr($_POST[$keys[$i]], $tool) == FALSE) {
				$mod_line .= ",\"N\"";
			} else {
				$mod_line .= ",\"Y\"";
			}
		}
		//print("<BR>mod_line = " . $mod_line . "<br>");
		$line .= $mod_line;
	} else {
		$line .= ",\"" . $_POST[ $field ] . "\"";
	}
	
	$i = $i + 1;
}

//print("<BR><BR>");

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
<link rel="stylesheet" href="../style/style.css" type="text/css">
</HEAD>
<BODY>
<table BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%" class="banner-area" >
<tr>
<td BGCOLOR="black" width="116" >
<a href="http://www.eclipse.org">
<img src="/birt/images/EclipseBannerPic.jpg" border="0">
</a>
</td>
<td WIDTH="637">
<img SRC="/birt/images/gradient.jpg" BORDER=0 height="53" width=282>
</td>
<td WIDTH="250" align="right" valign="center">
<a href="http://www.eclipse.org/birt" class="birt">

<!-- Temporary BIRT header -->
<span style="color: #E8E8FF; font-family: arial, sans-serif;
      font-size: 20px; font-weight: bold; padding-right: 20pt">
BIRT</span></a>
</td>
</tr>
</table>
<p>
<table border=0 width=100%>
<tr>
<td>
<p class=indextop>Reporting Survey</p>
</td>
<td style="text-align: right">
<img src="/birt/images/Idea.jpg">
</td>
</tr>
</table>
<p>
<table border=0>
<tr><td>
<b><i>Results saved!</i></b>
<p>
Thanks again for taking the survey. We invite you to visit the
<a href="http://www.eclipse.org/birt" target="_top">BIRT Project page</a>.

<p>
Back to <a href="http://www.eclipse.org" target="_top">eclipse</a>.
</BODY>
</HTML>
