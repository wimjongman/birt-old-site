<?php
$jumpName = array( );
$jumpTarget = array( );
$fileTimeStamp = 0;
$pageStyle = "";
global $viewer;
if ( $viewer == "" )
	$viewer = "/birt/view.php?page=";

define( "MENU_BGND_COLOR", "#6699CC" );
define( "SIMPLE_ARROW_LIST", 0 );
define( "BREAK_ARROW_LIST", 1 );
define( "DATE_ARROW_LIST", 2 );
define( "BOLD_ARROW_LIST", 3 );
define( "PLAIN_ARROW_LIST", 4 );

function bulletList( $type = SIMPLE_ARROW_LIST )
{
	global $bulletType;
	$bulletType = $type;
	echo <<<END

<table border=0 cellspacing=5 cellpadding=2 width="100%">
<col width="3%"><col width="97%">

END;
}

function startBullet( )
{
	global $bulletType;
	global $birtPath;
    echo <<<END
<tr> 
<td align=RIGHT valign=TOP>
<img src="${birtPath}images/Adarrow.gif" width="16" height="16" border="0"></td>
<td>

END;
	if ( $bulletType == DATE_ARROW_LIST || $bulletType == BOLD_ARROW_LIST )
		echo "<b>";
}

function bullet( $text, $link = null )
{
	startBullet( );
	if ( $link == null )
	{
		echo $text;
		echo "\n";
	}
	else
	{
		echo <<<END
<a href="{$link}">{$text}</a>

END;
	}
	endBulletHead( );
}

function endBulletHead( )
{
	global $bulletType;
	if ( $bulletType == DATE_ARROW_LIST  ||  $bulletType == BOLD_ARROW_LIST )
		echo "</b>";
	if ( $bulletType == BREAK_ARROW_LIST  ||  $bulletType == BOLD_ARROW_LIST )
		echo "<br>";
	else if ( $bulletType != PLAIN_ARROW_LIST )
		echo " &ndash;";
	echo "\n";
}

function endBullet( )
{
	echo "</tr>\n";
}

function endList( )
{
	echo "</table>\n";
}

function topMenuItem( $text, $link )
{
    echo <<<END
<tr> 
<td VALIGN=CENTER HEIGHT="21" BGCOLOR="#0080C0"
    style="padding-left: 5px; border-bottom: solid 1px #CFFFFF">
<a href="{$link}" class="navhead"> 
{$text}</a>
</td>
</tr>

END;
}

function menuItem( $text, $link, $active = false )
{
    echo <<<END
<tr VALIGN=CENTER> 
<td HEIGHT="21" 
    style="padding-left: 5px; border-bottom: solid 1px #CFFFFF">
<a href="{$link}" class="nav">

END;
	if ( $active )
		echo "<b>$text</b>";
	else
		echo $text;
	echo <<<END
</a>
</td>
</tr>

END;
}

function subMenuItem( $text, $link )
{
    echo <<<END
<tr VALIGN=CENTER> 
<td HEIGHT="21" style="padding-left: 10px">-
<a href="{$link}" class="nav">{$text}</a></td>
</tr>
<tr> 
<td BGCOLOR="#CFFFFF"><img SRC="images/c.gif" height=1 width=1></td>
</tr>

END;
}

function menuSpacer( )
{
    echo <<<END
<tr VALIGN=CENTER> 
<td HEIGHT="21">&nbsp;</td>
</tr>
<tr> 
<td BGCOLOR="#CFFFFF"><img SRC="images/c.gif" height=1 width=1></td>
</tr>

END;
}

function jumpItem( $text, $link )
{
	echo <<<END
<a href="#$link" class="jump">$text</a>

END;
}

function addJump( $text, $target = null )
{
	global $jumpName;
	global $jumpTarget;
	
	if ( $target == null  ||  $target == "" )
	{
		$n = count( $jumpName ) + 1;
		$target = "jump_" . $n;
	}
	$jumpName[ count( $jumpName ) ] = $text;
	$jumpTarget[ count( $jumpTarget ) ] = $target;
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
<img src="{$birtPath}images/EclipseBannerPic.jpg" width="115" height="50" border="0">
</a>
</td>
<td WIDTH="637">
<img SRC="{$birtPath}images/gradient.jpg" BORDER=0 height="54" width=282>
</td>
<td WIDTH="250" align="right" valign="center">
<a href="/birt" class="birt">
		    
<!-- Temporary BIRT header -->
<span style="color: white; font-family: arial, sans-serif;
      font-size: 25px">
BIRT</span></a>&nbsp;&nbsp;
</td>
</tr>
</table>

<!-- Table with menu & content -->

<table width="100%" border=0 cellpadding="0" CELLSPACING=0 >
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
<td style="padding: 10px" valign="top">

<!-- Content area -->
END;

	showPageTitle( $title, $subtitle );
}

function showPageTitle( $title, $subtitle )
{
	global $jumpName;
	global $jumpTarget;
	echo <<<END
<!-- Page title -->

<table border=0 cellspacing=0 cellpadding=0 width="100%" >
<tr> 
<td valign="top">
<span class=indextop>$title</span>
    
END;
	if ( $subtitle )
	{
		echo <<<END
<br><span class=indexsub>$subtitle</span>

END;
	}
		echo <<<END
</td>
<td align="right" style="padding-left: 10px" class="jump"
END;
	if ( count( $jumpName ) > 0 ) echo " rowspan=2";
	echo <<<END
><img src="/birt/images/Idea.jpg"></td>
</tr>

END;

	// TOC is a jump bar for smaller documents.
	
	showJumps( );

	echo <<<END
</table>

END;

	// TOC is here for larger documents.
	
	showTOC( );
}

function showJumps( )
{
	global $jumpName;
	global $jumpTarget;
	$count = count( $jumpName );
	if ( $count > 1  &&  $count <= 5 )
	{
		echo <<<END
<tr><td>

END;
		for ($i = 0; $i < $count; $i++)
		{
			jumpItem( $jumpName[ $i ], $jumpTarget[ $i ] );
			if ( $i + 1 < $count )
				echo "&nbsp;&nbsp;&nbsp;&nbsp;\n";
		}
		echo <<<END
</td></tr>

END;
	}
}

function showTOC( )
{
	global $jumpName;
	global $jumpTarget;
	$count = count( $jumpName );
	if ( $count <= 5 )
		return;
	
	echo <<<END
<span class="toc">Contents</span><br>
<div style="margin-left: 24pt">

END;
	for ($i = 0; $i < $count; $i++)
	{
		$dest = $jumpTarget[ $i ];
		$name = $jumpName[ $i ];
		echo <<<END
<a href="#$dest" class="toc">$name</a><br>

END;
	}
	echo <<<END
<br>
</div>

END;
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
		return;
		
	$thisDoc = str_ireplace( $pageDir . "/", "", $pageName );
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
		if ( preg_match( "/<.*\s+page\s*=\s*\"([^\"]*)\"\/?>/i", $line, $match ) )
		{
			//echo "<pre>Orig: {$match[1]}</pre>/n";
			$dest = mapPageName( $match[1] );
			//echo "<pre>After: $dest</pre>/n";
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
			menuItem( $match[1], $dest );
			//echo "<pre>Item: $match[1], {$dest}</pre>/n";
		}
		else if ( preg_match( "/<top\s+name\s*=\s*\"([^\"]*)\"/i", $line, $match ) )
		{
			topMenuItem( $match[1], $dest );
		}
	}
}

function mapFileName( $dest )
{
	global $pageDir;
	//echo "<pre>Raw link: $dest</pre><br>";
	
	// Don't map destinations of the form:
	//	/foo
	//
	// That is, map links relative to the document's position.
	
	if ( $dest{0} == '/' )
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
	$dest = normalizePath( $dest );
	
	// If the document is HTML, pr a directory,
	// then change the link to invoke the viewer.
	
	if ( preg_match( "/\.html?(#.*)?$/", $dest ) )
	{
		//echo "Viewer: {$viewer}, Dest: $dest\n";
		$dest = $viewer . $dest;
	}
	return $dest;
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
