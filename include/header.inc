<?php

// Path to the viewer.

global $viewer;
if ( $viewer == "" )
	$viewer = "/birt/index.php?page=";
	
// Relative path to the current page.
// Pages can be located in subdirectories, but the viewer is
// in the top-level folder. In native HTML, paths are relative
// to the page. But, when converted to viewer commands, the
// path must be translated to a path relative to the 
// viewer itself.

global $pageDir;

// The name of the current page relative to the directory set
// during the HTTP request.

global $pageName;

// Path to the BIRT top-level directory.

global $birtHome;
$birtHome = "/birt";
$stepStone = "";

// The time stamp (as a Unix timestamp) to appear in the updated
// on area in the page.

global $fileTimeStamp;
$fileTimeStamp = 0;
$pageStyle = "";
	
require "body.inc";

function topMenuItem( $text, $link )
{
	// Padding is here because (at least on FireFox), it does not work
	// if put into top-menu-cell
	
    echo <<<END
<tr><td class="top-menu-cell" style="padding-top: 3px; padding-bottom: 4px">
<a href="{$link}" class="navhead"> 
{$text}</a>
</td></tr>

END;
}

function menuItem( $text, $link, $active = false )
{
	//echo "Menu: $text, $active<br>\n";
    echo <<<END
<tr><td>
<a href="{$link}" class="nav">

END;
	if ( $active )
		echo "<b>$text</b>";
	else
		echo $text;
	echo <<<END
</a></td></tr>

END;
}

function subMenuItem( $text, $link )
{
    echo <<<END
<tr> 
<td >-
<a href="{$link}" class="nav">{$text}</a></td>
</tr>

END;
}

function menuSpacer( )
{
    echo <<<END
<tr> 
<td>&nbsp;</td>
</tr>

END;
}

function h1( $text )
{
	global $jumpName;
	global $jumpTarget;
	
	echo "<h1>";
	$target = null;
	for ( $i = 0; $i < count( $jumpName ); $i++ )
	{
		if ( $jumpName[ $i ] == $text )
		{
			$target = $jumpTarget[ $i ];
			break;
		}
	}
	if ( target != null )
		echo "<a name=\"$target\">";
	echo $text;
	if ( target != null )
		echo "</a>";
	echo "</h1>\n";
}

function pageHeader( $head, $title, $subtitle )
{
	global $birtPath;
	global $pageStyle;
	echo <<<END
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>$head</title>
<link rel="stylesheet" href="{$birtPath}style/style.css" type="text/css">
<LINK REL="shortcut icon" HREF="http://www.eclipse.org/images/eclipse.ico" TYPE="image/x-icon">

END;

	if ( $pageStyle != "" )
	{
		echo <<<END
<style type="text/css">
$pageStyle
</style>

END;
	}
	echo <<<END
</head>
<body>

<!-- Page banner -->

<table BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%" class="banner-area" >
<tr>
<td BGCOLOR="black" width="116" >
<a href="http://www.eclipse.org">
<img src="{$birtPath}images/EclipseBannerPic.jpg" border="0">
</a>
</td>
<td WIDTH="637">
<img SRC="{$birtPath}images/gradient.jpg" BORDER=0 height="53" width=282>
</td>
<td WIDTH="250" align="right" valign="center">
<a href="/birt" class="birt">
		    
<!-- Temporary BIRT header -->
<span style="color: #E8E8FF; font-family: arial, sans-serif;
      font-size: 20px; font-weight: bold; padding-right: 20pt">
BIRT</span></a>
</td>
</tr>
</table>

<!-- Table with menu & content -->

<table width="100%" border=0 cellpadding="0" CELLSPACING=0 cols=2>
<tr>
<td width="126px" class="menu-area" valign="top">

<!-- Menu area -->

<table BORDER=0 CELLSPACING=0 CELLPADDING=0 COLS=1 WIDTH="100%" class="menu-table" >

END;

	showMenu( );
	echo <<<END
</table>
<!-- End menu -->

</td>
<td style="padding: 10px" valign="top" class="content">

<!-- Content area -->
END;

	showPageTitle( $title, $subtitle );
	global $stepStone;
	echo $stepStone;
}

function showMenu( )
{
	topMenuItem( "Eclipse home", "http://www.eclipse.org" );
	topMenuItem( "BIRT home", "/birt" );
	
	global $pageDir, $pageName;
	$fileName = $pageDir;
	if ( $fileName != "" )
		$fileName .= "/";
	$fileName .= "menu.txt";
	$thisPage = basename( $pageName );
	//echo "thisPage: $thisPage\n";
	
	while ( ! file_exists( $fileName ) )
	{
		$fileName = dirname( dirname( $fileName ) );
		if ( $fileName == "" )
			break;
		$fileName .= "/menu.txt";
	}
	if ( $fileName == "" )
		$fileName = "birt/menu.txt";
	
	$file = fopen( $fileName, "rt" );
	if ( $file == null )
		return;
		
	if ( feof( $file ) )
		return;
		
	$line = trim( fgets( $file ) );
	if ( $line != "<birt-menu>" )
	{
		if ( $line == "<birt-sequence>" )
		{
			$isSequence = true;
		}
		else
			return;
	}
		
	while ( ! feof( $file ) )
	{
		$line = trim( fgets( $file ) );
		if ( preg_match( "/<\/birt-menu>/i", $line ) )
		{
			break;
		}
		if ( preg_match( "/<space\s*\/?\s*>/i", $line ) )
		{
			menuSpacer( );
			continue;
		}
		$dest = null;
		$page = "";
		$active = false;
		if ( preg_match( "/<.*\s+page\s*=\s*\"([^\"]*)\"/i", $line, $match ) )
		{
			$page = $match[1];
			//echo "<pre>Orig: {$pageName}</pre>/n";
			$dest = mapPageName( $page );
			//echo "<pre>After: $dest</pre>/n";
			$active = ( $page == $thisPage );
			//echo "Page: $page, this page: $thisPage, active: $active<br>\n";
		}
		else if ( preg_match( "/<.*\s+url\s*=\s*\"([^\"]*)\"\/?>/i", $line, $match ) )
		{
			//echo "<pre>Orig: {$match[1]}</pre>/n";
			$dest = mapFileName( $match[1] );
			//echo "<pre>After: $dest</pre>/n";
		}
		else
			continue;
			
		if ( preg_match( "/<item\s+name\s*=\s*\"([^\"]*)\"/i", $line, $match ) )
		{
			menuItem( $match[1], $dest, $active );
		}
		else if ( preg_match( "/<step\s+name\s*=\s*\"([^\"]*)\"/i", $line, $match ) )
		{
			$label = $match[1];
			$menuLabel = $label;
			if ( preg_match( "/\stitle\s*=\s*\"([^\"]*)\"/i", $line, $match ) )
				$label = $match[1];
			if ( $active )
			{
				$foundPage = true;
			}
			else if ( ! $foundPage )
			{
				$prevName = $label;
				$prevPage = $dest;
			}
			else if ( $nextPage == "" )
			{
				$nextName = $label;
				$nextPage = $dest;
			}
			menuItem( $menuLabel, $dest, $active );
		}
		else if ( preg_match( "/<top\s+name\s*=\s*\"([^\"]*)\"/i", $line, $match ) )
		{
			topMenuItem( $match[1], $dest );
		}
	}
	
	if ( ! $isSequence )
		return;

	global $stepStone;
	$stepStone = <<<END
<br>
<table BORDER=0 CELLSPACING=0 CELLPADDING=0 WIDTH="100%">
<tr>
<td width="50%">

END;
	if ( $prevPage != "" )
	{
		$stepStone .= <<<END
<a href="{$viewer}$prevPage" class="toc" style="color: #0080C0">
&lt;&lt;&nbsp;Previous: $prevName</a>

END;
	}
	$stepStone .= <<<END
</td>
<td width="50%" style="text-align: right">

END;
	if ( $nextPage != "" )
	{
		$stepStone .= <<<END
<a href="{$viewer}$nextPage" class="toc" style="color: #0080C0">
Next: $nextName&nbsp;>></a>

END;
	}
	$stepStone .= <<<END
</tr>
</table>

END;
}

function mapFileName( $dest )
{
	global $pageDir;
	//echo "<pre>Raw link: $dest</pre><br>";
	
	// Don't map destinations of the form:
	//	/foo
	//
	// That is, map links relative to the document's position.
	
	if ( $dest{0} == '/'  ||  strpos( $dest, ":" ) )
		return $dest;
		
	// Normalize the path.
	
	$dest = "/birt/" . $pageDir . "/" . $dest;
	return normalizePath( $dest );
}
	
function mapPageName( $dest )
{
	global $pageDir, $viewer;

	// Normalize the path.
	
	if ( $pageDir != "" )
		$dest = $pageDir . "/" . $dest;
	//echo "Dest: |$pageDir|$dest|<br>\n";
	$dest = normalizePath( $dest );
	return $viewer . $dest;
}

function normalizePath( $dest )
{
	//echo "<pre>Pattern: /\\\\/<pre><br>";
	//echo "<pre>After prepend: $dest</pre><br>";
	
	// Convert slashes to Unix-format.
	
	$dest = preg_replace( "/\\\\/", "/", $dest );
	
	// Remove leading "./"
	
	while ( $dest != ($dest = preg_replace( "/^\.\//", "", $dest ) ) )
		;
		
	// Replace embedded "/./" with "/"
	
	while ( $dest != ($dest = preg_replace( "/\/\.\//", "/", $dest ) ) )
		;
		
	// Replace embedded "foo/.." with "".
	
	//echo "<pre>After Dash: $dest</pre><br>";
	while( $dest != ($dest = preg_replace("/[^\/]+\/\.\.\//", "", $dest ) ) )
       ;
	//echo "<pre>Link to $dest</pre><br>";
	return $dest;
}


?>
