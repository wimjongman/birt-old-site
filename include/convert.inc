<?php
/*
 * Created on Feb 3, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require "header.inc";

function errorPage( $docName )
{
	echo <<<END
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>BIRT Project Error Page</title>
<body>
An error occurred reading page {$docName}.
<br>
Please report this error to the webmaster.
</body>
</html>
END;
}

function startSequence( $docName )
{
	global $notFound;
	$pageDir = dirname( $docName );
	if ( ! file_exists( $docName ) )
	{
		parseDoc( $notFound );
		return;
	}
	
	$doc = fopen( $docName, "rt" );
	while ( ! feof( $doc ) )
	{
		$line = trim( fgets( $doc ) );
		if ( preg_match( $line, "/<birt-sequence>/" ) )
		{
			break;
		}
	}
	if ( feof( $doc ) )
	{
		fclose( $doc );
		parseDoc( $notFound );
		return;
	}
	while ( ! feof( $doc ) )
	{
		$line = trim( fgets( $doc ) );
		if ( preg_match( "/<step\s+/", $line ) )
		{
			if ( preg_match( "/\s+page\s*=\s*\"([^\"]*)\"/", $line, $match ) )
			{
				$dest = $pageDir . "/" . $match[1];
				if ( file_exists( $dest ) )
				{
					fclose( $doc );
					parseDoc( $dest );
					return;
				}
				break;
			}
		}
	}
	fclose( $doc );
	parseDoc( $notFound );
}

function parseDoc( $docName )
{
	global $pageName, $pageDir, $fileTimeStamp, $birtPath;
	$fileTimeStamp = filemtime( $docName );
	$pageName = $docName;
	if ( ! file_exists( $pageName ) )
		return;
	$pageDir = dirname( $docName );
	if ( $birtPath != "" )
		$pageDir = normalizePath( $birtPath . $pageDir );
	//echo "parseDoc: |$docName|$pageDir|<br>\n";
	$parts = pathinfo( $docName );
	if ( strtolower( $parts['extension'] ) == "html" )
		parseHtml( $docName );
	else
		parseText( $docName );
}

define( "T_EOF", 0 );
define( "T_TAG", 1 );
define( "T_TEXT", 2 );
define( "T_MY_COMMENT", 3 );
define( "T_NONE", 9 );

function pushToken( $token )
{
	global $pushedToken;
	$pushedToken = $token;
}

function resetParser( )
{
	global $pushedToken, $pushC, $doc;
	$pushedToken = T_NONE;
	$pushC = "";
	fseek( $doc, 0 );
}

function getToken( )
{
	global $doc, $tokenText, $pushC, $pushedToken;
	
	if ( $pushedToken != T_NONE )
	{
		$token = $pushedToken;
		$pushedToken = T_NONE;
		return $token;
	}
	if ( $pushC != "" )
	{
		$c = $pushC;
		$pushC = "";
	}
	else if ( ( $c = fgetc( $doc ) ) === false )
		return T_EOF;
	
	//echo "Start: c = " . htmlentities( $c ) . "<br>\n";
	if ( $c == "<" )
	{
		$tokenText = $c;
		return parseTag( );
	}
	else
	{
		$tokenText = $c;
		while ( ( $c = fgetc( $doc ) ) !== false )
		{
			if ( $c == "<" )
			{
				$pushC = $c;
				break;
			}
			$tokenText .= $c;
			if ( $c == '\n' )
				break;
		}
		return T_TEXT;
	}
}

function parseTag( )
{
	global $doc, $tokenText, $tagName;
	
	// Tag name
	
	$c = skipSpace( );
	
	if ( $c == "!" )
	{
		if ( ( $c = checkComment( ) ) == ">" )
		{
			return T_MY_COMMENT;
		}
	}
	
	//echo "After space: |$tokenText|\n";
	$tagName = "";
	//while ( $c !== false && $c != ">" && ! ctype_space( $c ) )
	while ( $c !== false && $c != ">" && $c != ' ' && $c != '\t' )
	{
		$tagName .= strtolower( $c );
		$tokenText .= $c;
		$c = fgetc( $doc );
		//echo "NEXT |$c|\n";
	}
	
	while ( $c !== false )
	{
		$tokenText .= $c;
		if ( $c == ">" )
			break;
		$c = fgetc( $doc );
	}
	return T_TAG;
}

function skipSpace( )
{
	global $tokenText, $doc;

	while ( ( $c = fgetc( $doc ) ) !== false )
	{
		if ( ctype_space( $c ) )
			$tokenText .= $c;
		else
			return $c;
	}
	return false;
}

function checkComment( )
{
	global $doc, $tokenText, $tagName;
	
	$tagName .= $c;
	$tokenText .= $c;
	$c = fgetc( $doc );
	if ( $c != "-" )
		return $c;
		
	$tagName .= $c;
	$tokenText .= $c;
	$c = fgetc( $doc );
	if ( $c != "-" )
		return $c;
	
	while ( true )
	{	
		while ( $c !== false  &&  $c != "-" )
		{
			$tokenText .= $c;
			$c = fgetc( $doc );
		}
		if ( $c === false )
			return ">";
		$tokenText .= $c;
		$c = fgetc( $doc );
		if ( $c === false )
			return ">";
		if ( $c != "-" )
			continue;
		$tokenText .= $c;
		$c = fgetc( $doc );
		if ( $c === false )
			return ">";
		if ( $c == ">" )
		{
			$tokenText .= $c;
			break;
		}
	}
	return $c;
}

function parseHtml( $docName )
{
	global $doc;
	//echo "DOC name: $docName<br>\n";
	$doc = fopen( $docName, "rt" );
	if ( $doc == null )
		return;
	
	/*
	global $tokenText, $tagName;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token == T_TAG )
		{
			echo "TAG: |$tagName|";
			echo htmlentities( $tokenText );
			echo "|<br>\n";
		}
		else
		{
			echo $tokenText;
			echo "<br>\n";
		}
		if ( $i++ > 20 )
			return;
	}
	return;
	*/
	resetParser( );
	firstPass( );
	
	global $title, $heading, $subhead;
	if ( trim( $title ) == "" )
		$title = "BIRT Project";
	if ( trim( $heading ) == "" )
		$heading = "BIRT Project";

	// Create the page header & menu bar.
	
	pageHeader( $title, $heading, $subhead );
	
	// Echo content.
	
	resetParser( );
	secondPass( );
	fclose( $doc );
	
	// Finish up the page with footer bar.
	
	require( "footer.inc" );
}

// Parse a text file. Assume that the first line is a title.

function parseText( $docName )
{
	$doc = fopen( $docName, "rt" );
	$line = trim( fgets( $doc ) );
	if ( $line == "" )
		$line = "Eclipse BIRT Project";
	
	// Create the page header & menu bar.
	
	pageHeader( $line, $line, "" );
	
	while ( ! feof( $doc ) )
	{
		$line = rtrim( fgets( $doc ) );
		echo $line;
		echo "<br>\n";
	}
	fclose( $doc );
	require "footer.inc";
}

function firstPass( )
{
	global $tagName;
	
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token != T_TAG )
			continue;
		if ( $tagName == "head" )
			parseHead( );
		else if ( $tagName == "body" )
			bodyPassOne( );
	}
}

function parseHead( )
{
	global $tagName;
	global $title, $pageStyle;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token != T_TAG )
			continue;
		if ( $token == T_MY_COMMENT )
			continue;
		if ( $tagName == "title" )
		{
			$title = getNodeText( );
		}
		else if ( $tagName == "style" )
		{
			$pageStyle = getNodeText( );
		}
		else if ( $tagName == "/head" )
			break;
	}
}

function getNodeText( )
{
	global $tagName, $tokenText;
	$tag = "/" . $tagName;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token == T_TAG  &&  $tagName == $tag )
			break;
		$text .= $tokenText;
	}
	return $text;
}

function getClass( )
{
	global $tokenText;
	if ( preg_match( "/<\s*\w*\s*[^>]*class\s*=\s*\"([^\"]*)\"/", $tokenText, $match ) )
		return $match[1];
	return "";
}

function bodyPassOne( )
{
	global $tagName;
	global $heading, $subhead;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token != T_TAG )
			continue;
		if ( $tagName == "p" )
		{
			$class = getClass( );
			if ( $class == "head" )
				$heading = getNodeText( );
			else if ( $class == "subhead" )
				$subhead = getNodeText( );
		}
		else if ( $tagName == "h1" )
		{
			addJump( getNodeText( ) );
		}
		else if ( $tagName == "/body" )
			break;
	}
	
	//echo "Head: $heading<br>\n";
	//echo "Subhead: $subhead<br>\n";
}

function secondPass( )
{
	global $tagName;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token != T_TAG )
			continue;
		if ( $tagName == "body" )
		{
			bodyPassTwo( );
			break;
		}
	}
}

function bodyPassTwo( )
{
	global $tagName, $tokenText;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token == T_TEXT )
			echo $tokenText;
		else if ( $token == T_MY_COMMENT )
		{
			// Ignore comments
		}
		else if ( $tagName == "p" )
		{
			$class = getClass( );
			if ( $class == "head"  ||  $class == "subhead" )
			{
				// Page header, skip on pass 2
				
				getNodeText( );
			}
			else
				echo $tokenText;
		}
		else if ( $tagName == "h1" )
		{
			// H1 headers need jump targets
			
			h1( getNodeText( ) );
		}
		else if ( $tagName == "dl" )
		{
			$class = getClass( );
			if ( $class == "arrow-list" )
			{
				arrowList( SIMPLE_ARROW_LIST );
			}
			else if ( $class == "date-list" )
			{
				arrowList( DATE_ARROW_LIST );
			}
			else if ( $class == "break-list" )
			{
				arrowList( BREAK_ARROW_LIST );
			}
			else if ( $class == "bold-list" )
			{
				arrowList( BOLD_ARROW_LIST );
			}
			else
				echo $tokenText;
		}
		else if ( $tagName == "ul" )
		{
			$class = getClass( );
			if ( $class == "arrow-list" )
			{
				arrowList( SIMPLE_ARROW_LIST );
			}
			else
				echo $tokenText;
		}
		else
			emitTag( );
	}
}

function arrowList( $type )
{
	global $tagName, $tokenText;
	bulletList( $type );
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token == T_TEXT )
			echo $tokenText;
		if ( $token == T_MY_COMMENT )
		{
			// Ignore comments
		}
		else if ( $tagName == "/dl"  ||  $tagName == "/ul" )
			break;
		else if ( $tagName == "dt" )
		{
			startBullet( );
			copyItemText( );
			endBulletHead( );
		}
		else if ( $tagName == "dd" )
		{
			copyItemText( );
			endBullet( );
		}
		else if ( $tagName == "li" )
		{
			startBullet( );
			copyItemText( );
			endBullet( );
		}
		else if ( $tagName == "/dd"  ||  $tagName == "/dt"  ||
		 		  $tagName == "/li" )
		{
			// Ignore the end tags
		}
		else
			emitTag( );
	}
	endList( );	
}

function copyItemText( )
{
	global $tagName, $tokenText;
	$tag = "/" . $tagName;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token == T_TEXT )
			echo $tokenText;
		else if ( $token == T_MY_COMMENT )
		{
			// Ignore comments
		}
		else if ( $tagName == $tag )
			break;
		else if ( $tagName == "dt"  ||  $tagName == "dd"  ||  $tagName == "/dl" ||
				  $tagName == "li"  ||  $tagName == "/li" ||  $tagName == "/ul" )
		{
			pushToken( $token );
			break;
		}
		else
			emitTag( );
	}
}
function emitTag( )
{
	global $tagName, $tokenText;
	switch ( $tagName )
	{
		case "a":
			mapLink( );
			break;
			
		case "img":
			mapImage( );
			break;
			
		default:
			echo $tokenText;
	}
}

function getAttr( $attr )
{
	global $tokenText;
	if ( preg_match( "/^(.*\s+" . $attr . "\s*=\s*\")([^\"]*)(\".*)$/i", $tokenText, $match ) )
		return $match;
	return null;
}

function mapLink( )
{
	global $tokenText;
	$match = getAttr( "href" );
	if ( $match == null )
	{
		echo $tokenText;
		return;
	}
	
	echo $match[1];
	$dest = $match[2];
	if ( $dest == "" )
	{
		echo $match[3];
		return;
	}
	
	echo mapLinkURL( $dest );
	echo $match[3];
}

function mapImage( )
{
	global $tokenText;
	$match = getAttr( "src" );
	if ( $match == null )
	{
		echo $tokenText;
		return;
	}
	
	echo $match[1];
	$dest = $match[2];
	if ( $dest == "" )
	{
		echo $match[3];
		return;
	}
		
	if ( isMappable( $dest ) )
	{
		$dest = mapFileName( $dest );
	}
	echo $dest;
	echo $match[3];		
}


?>
