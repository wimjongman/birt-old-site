<?php
/*
 * Created on Feb 3, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require "header.inc";

global $pageDir, $pageName;
$pageDir = "";
$pageName = "";
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
	global $pageName, $pageDir, $fileTimeStamp;
	$fileTimeStamp = filemtime( $docName );
	$pageName = $docName;
	if ( ! file_exists( $pageName ) )
		return;
	$pageDir = dirname( $docName );
	$parts = pathinfo( $docName );
	if ( strtolower( $parts['extension'] ) == "html" )
		parseHtml( $docName );
	else
		parseText( $docName );
}

function parseHtml( $docName )
{
	global $doc;
	$doc = DOMDocument::loadHTMLFile( $docName );
	if ( $doc == null )
	{
		return;
	}
	
	firstPass( $doc->documentElement );
	secondPass( $doc->documentElement );
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

function dumpNode( $node )
{
	global $prevNode;
	echo "<pre>[NODE: Type: ";
	echo $node->nodeType;
	echo ", Name: ";
	echo $node->nodeName;
	echo ", Prev Type: ";
	echo $prevNode->nodeType;
	echo ", Prev Name: ";
	echo $prevNode->nodeName;
	echo "]</pre>";
}

function firstPass( $root )
{
	$node = $root->firstChild;
	while ( $node != null )
	{
		if ( $node->nodeType == XML_ELEMENT_NODE )
		{
			if ( $node->nodeName == "head" )
				parseHead( $node );
			else if ( $node->nodeName == "body" )
				bodyPassOne( $node );
		}
		$node = $node->nextSibling;
	}
}

function parseHead( $root )
{
	global $title;
	global $pageStyle;
	$node = $root->firstChild;
	while ( $node != null )
	{
		if ( $node->nodeType == XML_ELEMENT_NODE )
		{
			if ( $node->nodeName == "title" )
			{
				$title = getNodeText( $node );
			}
			else if ( $node->nodeName == "style" )
			{
				$pageStyle = $node->textContent;
			}
		}
		$node = $node->nextSibling;
	}
}

function getNodeText( $node )
{
	$textNode = $node->firstChild;
	if ( $textNode == null )
		return "";
	if ( $textNode->nodeType != XML_TEXT_NODE )
		return "";
	return trim( $textNode->data );
}

function bodyPassOne( $body )
{
	global $heading, $subhead;
	$node = $body->firstChild;
	while ( $node != null )
	{
		if ( $node->nodeType == XML_ELEMENT_NODE )
		{
			if ( checkNode( $node, "p", "head" ) )
			{
				//echo "<br><pre>Found Head!</pre><br>\n";
				$heading = getNodeText( $node );
			}
			else if ( checkNode( $node, "p", "subhead" ) )
			{
				$subhead = getNodeText( $node );
			}
			else if ( checkNode( $node, "h1" ) )
			{
				addJump( getNodeText( $node ) );
			}
		}
		$node = $node->nextSibling;
	}
}

function checkNode( $node, $tag, $class = null )
{
	if ( $node->nodeName != $tag )
		return false;
	if ( $class == null )
		return true;
	return ( $node->getAttribute( "class" ) == $class );
}

function secondPass( $root )
{
	global $title, $heading, $subhead;
	
	if ( trim( $title ) == "" )
		$title = "BIRT Project";
	if ( trim( $heading ) == "" )
		$heading = "BIRT Project";

	// Create the page header & menu bar.
	
	pageHeader( $title, $heading, $subhead );
	
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
	
	// Finish up the page with footer bar.
	
	require( "footer.inc" );
}

function bodyPassTwo( $body )
{
	$node = $body->firstChild;
	while ( $node != null )
	{
		if ( $node->nodeType == XML_ELEMENT_NODE )
		{
			if ( checkNode( $node, "p", "head" ) )
			{
				// Page header, skip on pass 2
			}
			else if ( checkNode( $node, "p", "subhead" ) )
			{
				// Page subheader, skip on pass 2
			}
			else if ( checkNode( $node, "h1" ) )
			{
				// H1 headers need jump targets
				
				h1( getNodeText( $node ) );
			}
			
			// Specialized Eclipse-style lists: [->] Title - text
			
			else if ( checkNode( $node, "dl", "arrow-list" ) )
			{
				arrowList( $node, SIMPLE_ARROW_LIST );
			}
			else if ( checkNode( $node, "dl", "date-list" ) )
			{
				arrowList( $node, DATE_ARROW_LIST );
			}
			else if ( checkNode( $node, "dl", "break-list" ) )
			{
				arrowList( $node, BREAK_ARROW_LIST );
			}
			else if ( checkNode( $node, "dl", "bold-list" ) )
			{
				arrowList( $node, BOLD_ARROW_LIST );
			}
			
			// Everything else
			
			else
				parseNode( $node );
			
		}
		$node = $node->nextSibling;
	}
}

function arrowList( $list, $type )
{
	bulletList( $type );
	$node = $list->firstChild;
	while ( $node != null )
	{
		if ( $node->nodeType == XML_ELEMENT_NODE )
		{
			if ( checkNode( $node, "dt" ) )
			{
				startBullet( );
				writeSubtree( $node );
				endBulletHead( );
			}
			else if ( checkNode( $node, "dd" ) )
			{
				writeSubtree( $node );
				endBullet( );
			}
		}
		$node = $node->nextSibling;
	}
	endList( );	
}

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

function parseNode( $node )
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
		echo trim( $child->data );
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
	echo $trim;
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

function mapLink( $node )
{
	mapFileAttr( $node, "href" );
	onElement( $node );
}

function mapImage( $node )
{
	mapFileAttr( $node, "src" );
	onElement( $node );
}

function mapFileAttr( $node, $attr )
{
	$dest = $node->getAttribute( $attr );
	if ( $dest == "" )
		return;
		
	// Don't map destinations of the form:
	//	blank
	//	proto:...
	//  #foo
	//	/foo
	//
	// That is, map links relative to the document's position.
	
	if ( stristr( $dest, ":" ) ||
	     $dest{0} == "#"  ||  $dest{0} == '/' )
		return;
		
	if ( $node->getAttribute( "class" ) == "top" )
		$dest = mapFileName( $dest );
	else
		$dest = mapPageName( $dest );
	$node->setAttribute( $attr, $dest );
}

?>
