<?php
/*
 * Created on Feb 3, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require "header.inc";

$title = "";
$heading = "";
$subhead = "";
$prevNode = null;

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

$pushedToken = T_NONE;

function pushToken( $token )
{
	global $pushedToken;
	$pushedToken = $token;
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
		/*
		while ( ( $c = fgetc( $doc ) ) !== false )
		{
			$tokenText .= $c;
			if ( $c == ">" )
				break;
		}
		*/
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
	while ( $c !== false && $c != ">" && ! ctype_space( $c ) )
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
/*
	$c = skipSpace( );
	while ( $c  &&  $c != ">" )
	{
		$attrName = "";
		while ( $c  &&  ctype_alnum( $c ) )
		{
			$attrName .= $c;
			$tokenText .= $c;
			$c = fgetc( $doc );
		}
		$c = skipSpace( );
		$value = "";
		if ( $c == "\"" )
		{
		while ( $c  &&  ctype_alnum( $c ) )
		{
			$attrName .= $c;
			$tokenText .= $c;
			$c = fgetc( $doc );
		}
			
		}
		$tokenText .= $c;
		if ( $c == "\"" )
		{
		}
		else if ( $c == ">" )
			break;
	}
*/
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

/*
$line = "";
function getLine( )
{
	global $line, $doc;

	while ( $line == "" && ! feof( $doc ) )
		$line = trim( fgets( $doc ) );
	return $line;
}

function eatLine( )
{
	global $line;
	$line = null;
}
*/

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
	firstPass( );
	
	global $title, $heading, $subhead;
	if ( trim( $title ) == "" )
		$title = "BIRT Project";
	if ( trim( $heading ) == "" )
		$heading = "BIRT Project";

	// Create the page header & menu bar.
	
	pageHeader( $title, $heading, $subhead );
	
	// Echo content.
	
	fseek( $doc, 0 );
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

/*
function findTag( )
{
	global $line;
	if ( preg_match( "/<\s*(\/?\w*)/", $line, $match ) )
		return strtolower( $match[1] );
	else
		return null;
}
*/

function firstPass( )
{
	global $tagName;
	
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token != T_TAG )
			continue;
		//echo "TAG: |$tagName|<br>\n";
		if ( $tagName == "head" )
			parseHead( );
		else if ( $tagName == "body" )
			bodyPassOne( );
	}
	/*
	global $doc, $line;
	while ( ! feof( $doc ) )
	{
		getLine( );
		$tag = findTag( );
		eatLine( );
		if ( $tag == "head" )
			parseHead( );
		else if ( $tag == "body" )
			bodyPassOne( );
	}
	*/
}

function parseHead( )
{
	global $tagName;
	while ( ( $token = getToken( ) ) != T_EOF )
	{
		if ( $token != T_TAG )
			continue;
		if ( $tagName == "title" )
			$title = getNodeText( );
		else if ( $tagName == "style" )
		{
			$pageStyle = getNodeText( );
		}
		else if ( $tagName == "/head" )
			break;
	}
	//echo "TITLE: |$title|<br>\n";
	return;
/*
	global $doc;
	global $title;
	global $pageStyle;
	
	eatLine( );
	while ( ! feof( $doc ) )
	{
		$line = getLine( );
		$tag = findTag( );
		if ( $tag == "title" )
			$title = getNodeText( $tag );
		else if ( $tag == "style" )
		{
			$pageStyle = getNodeText( $tag );
		}
		else if ( $tag == "/head" )
			break;
		else
			eatLine( );
	}
*/
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
	
	/*
	global $doc, $line;
	$tag = "/" . $tag;
	while ( ! preg_match( "/>(.*)$/", getLine( ), $match ) )
	{
		if ( feof( $doc ) )
			return;
		eatLine( );
	}
	$line = $match[1];
	$text = "";
	while ( true )
	{
		if ( preg_match( "/(.*)<\s*(\/?\w*)\s*>/", $line, $match ) )
		{
			if ( $match[2] == $tag )
			{
				$text .= $match[1];
				$line = $match[3];
				return $text;
			}
		}
		$text = $line;
		eatLine( );
		if ( feof( $doc ) )
			return $text;
		getLine( );
	}
	*/
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
	
	/*
	return;
	//echo "Parse body p1<br>\n";
	global $doc, $heading, $subhead;
	while ( ! feof( $doc ) )
	{
		getLine( );
		$tag = findTag( );
		if ( $tag == "p" )
		{
			$class = getClass( );
			if ( $class == "head" )
				$heading = getNodeText( $tag );
			else if ( $class == "subhead" )
				$subhead = getNodeText( $tag );
			eatLine( );
		}
		else if ( $tag == "h1" )
		{
			addJump( getNodeText( $tag ) );
			eatLine( );
		}
		else
			eatLine( );
	}
	*/
	
	//echo "Head: $heading<br>\n";
	//echo "Subhead: $subhead<br>\n";
}

/*
function checkNode( $node, $tag, $class = null )
{
	if ( $node->nodeName != $tag )
		return false;
	if ( $class == null )
		return true;
	return ( $node->getAttribute( "class" ) == $class );
}
*/

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
	
	/*
	
	//echo "second pass\n";
	global $doc;
	while ( ! feof( $doc ) )
	{
		getLine( );
		$tag = findTag( );
		eatLine( );
		if ( $tag == "body" )
		{
			bodyPassTwo( );
			break;
		}
	}
	*/
		
	/*
	$node = $root->firstChild;
	while ( $node != null )
	{
		if ( $node->nodeType == XML_ELEMENT_NODE )
		{
			if ( $node->nodeName == "body" )
				bodyPassTwo( $node );
		}
		$node = $node->nextSibling;
	}
	*/
}

/*
function echoLine( )
{
	global $line;
	echo $line;
	echo "\n";
	eatLine( );
}
*/

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
		else
			emitTag( );
	}
	
	/*
	global $doc, $line;
	while ( ! feof( $doc ) )
	{
		getLine( );
		$tag = findTag( );
		if ( $tag == "p" )
		{
			$class = getClass( );
			if ( $class == "head"  ||  $class == "subhead" )
			{
				// Page header, skip on pass 2
				eatLine( );
			}
			else
				echoLine( );
		}
		else if ( $tag == "h1" )
		{
			// H1 headers need jump targets
			
			h1( getNodeText( $tag ) );
			eatLine( );
		}
		else if ( $tag == "dl" )
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
				echoLine( );
		}
			
		else
			echoLine( );
	}
	*/
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
		else if ( $tagName == "/dl" )
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
		else if ( $tagName == "/dd"  ||  $tagName == "/dt" )
		{
			// Ignore the end tags
		}
		else
			emitTag( );
	}
	
	
	/*
	eatLine( );
	
	bulletList( $type );
	while ( ! feof( $doc ) )
	{
		getLine( );
		$tag = findTag( );
		if ( $tag == "/dl" )
			break;
		else if ( $tag == "dt" )
		{
			startBullet( );
			echo getNodeText( $tag );
			endBulletHead( );
		}
		else if ( $tag == "dd" )
		{
			echo getNodeText( $tag );
			endBullet( );
		}
		else
			echoLine( );
	}
	*/
	
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
		else if ( $tagName == "dt"  ||  $tagName == "dd"  ||  $tagName == "/dl" )
		{
			pushToken( $token );
			break;
		}
		else
			emitTag( );
	}
}

/*
function writeSubtree( $node )
{
	$child = $node->firstChild;
	global $prevNode;
	$prevNode = $node;
	while ( $child != null )
	{
		parseNode( $child, $level + 1 );
		$child = $child->nextSibling;
	}
}
*/

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

/*
 parseNode( $node )
{
	global $prevNode;
	
	switch( $node->nodeType )
	{
		case XML_ELEMENT_NODE:
			if ( checkNode( $node, "a" ) )
				mapLink( $node );
			else if ( checkNode( $node, "img" ) )
				mapImage( $node );
			else
				onElement( $node );
			break;
			
		case XML_TEXT_NODE:
			onText( $node );
			break;
			
		case XML_COMMENT_NODE:
			// Ignore comments.
			break;
			
		default:
			dumpNode( $node );
	}
}

function onElement( $node )
{
	global $prevNode;
	if ( $prevNode->nodeType != XML_TEXT_NODE )
		echo "\n";
	echo "<";
	echo $node->tagName;
	
	$attrs = $node->attributes;
	for ( $i = 0;  ; $i++ )
	{
		$attr = $attrs->item( $i );
		if ( $attr == null )
			break;
		onAttr( $attr );
	}
	$child = $node->firstChild;
	if ( $child == null )
	{
		echo "/>";
		return;
	}
	echo ">";
	if ( $child->nodeType == XML_TEXT_NODE  &&  $child->nextSibling == null )
	{
		printHtml( $child->data );
	}
	else
	{
		while ( $child != null )
		{
			parseNode( $child, $level + 1 );
			$child = $child->nextSibling;
		}
		if ( $prevNode->nodeType != XML_TEXT_NODE )
			echo "\n";
	}
	echo "</";
	echo $node->tagName;
	echo ">";
	$prevNode = $node;
}

function printHtml( $text )
{
	echo trim( htmlentities( $text ) );
}

function onText( $node )
{
	global $prevNode;
	$data = $node->data;
	$trim = trim( $data );
	if ( $trim == "" )
		return;
	$c = $data{0};
	if ( ctype_space( $c ) )
		echo "\n";
	echo htmlentities( $trim );
	if ( ctype_space( $data{ strlen( $data ) - 1 } ) )
		echo "\n";
	$prevNode = $node;
}

function onAttr( $attr )
{
	echo " ";
	echo $attr->name;
	echo "=\"";
	echo $attr->value;
	echo "\"";
}
*/

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
		
	// Don't map destinations of the form:
	//	blank
	//	proto:...
	//  #foo
	//	/foo
	//
	// That is, map links relative to the document's position.
	
	if ( isMappable( $dest ) )
	{
		if ( preg_match( "/\.((html?)|(txt))(#.*)?$/", $dest ) &&
			 getClass( ) != "top" )
		{
			$dest = mapPageName( $dest );
		}
		else
			$dest = mapFileName( $dest );
	}
	echo $dest;
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
	
/*
	$dest = $node->getAttribute( "src" );
		
	if ( isMappable( $dest ) )
	{
		$dest = mapFileName( $dest );
		$node->setAttribute( "src", $dest );
	}

	onElement( $node );
*/
}

// Don't map destinations of the form:
//	blank
//	proto:...
//  #foo
//	/foo
//
// That is, map links relative to the document's position.
	
function isMappable( $dest )
{
	return ( $dest != ""  &&  ! strstr( $dest, ":" ) &&
	  	     $dest{0} != "#"  &&  $dest{0} != '/' );
}


?>
