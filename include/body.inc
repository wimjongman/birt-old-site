<?php
$jumpName = array( );
$jumpTarget = array( );

define( "MENU_BGND_COLOR", "#6699CC" );
define( "SIMPLE_ARROW_LIST", 0 );
define( "BREAK_ARROW_LIST", 1 );
define( "DATE_ARROW_LIST", 2 );
define( "BOLD_ARROW_LIST", 3 );
define( "PLAIN_ARROW_LIST", 4 );


// Functions to create the standard Eclipse page "look".

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
	global $birtHome;
    echo <<<END
<tr> 
<td align=RIGHT valign=TOP>
<img src="$birtHome/images/Adarrow.gif" width="16" height="16" border="0"></td>
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

function showPageTitle( $title, $subtitle )
{
	global $jumpName;
	global $jumpTarget;
	global $birtHome;
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
><img src="$birtHome/images/birt_logotype_small.jpg"></td>
</tr>

END;

	// TOC is a jump bar for smaller documents.
	
	showJumps( );

	echo <<<END
</table>

<!-- Content area -->

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

?>


