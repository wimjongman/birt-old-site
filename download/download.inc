<?php

$pageDir = "download";
$birtPath = "../";
require "../include/header.inc";

$dropDir = "drops";

define( "RELEASE_BUILD", 0 );
define( "MILESTONE_BUILD", 1 );
define( "STABLE_BUILD", 2 );
define( "NIGHTLY_BUILD", 3 );

define( "BUILD_NAME", 0 );
define( "BUILD_DIR", 1 );
define( "BUILD_DATE", 2 );

$builds = array( );

function readBuildLog( $type, $logName )
{
	global $builds, $fileTimeStamp;
	
	if ( ! file_exists( $logName ) )
		return;
		
	$stamp = filemtime( $logName );
	if ( $fileTimeStamp == 0  ||  $stamp > $fileTimeStamp )
		$fileTimeStamp = $stamp;
	$file = fopen( $logName, "rt" );
	if ( $file == null )
		return;
		
	if ( feof( $file ) )
		return;
		
	$buildName = array( );
	$buildDir = array( );
	$buildDate = array( );
	$i = 0;
	while ( ! feof( $file ) )
	{
		$line = trim( fgets( $file ) );
		if ( preg_match( "/\"?([^\",]*)\"?\s*,\"?([^\",]*)\"?\s*,\s*\"([^\"]*)\"/", $line, $match ) )
		{
			$buildDir[ $i ] = $match[1];
			$buildName[ $i ] = $match[2];
			$buildDate[ $i ] = $match[3];
			$i++;
		}
	}
	fclose( $file );
	$build = array( );
	$build[ BUILD_NAME ]= $buildName;
	$build[ BUILD_DIR ] = $buildDir;
	$build[ BUILD_DATE ] = $buildDate;
	$builds[ $type ] = $build;
}

function latestBuild( $type )
{
	global $builds;
	$buildTypeName = "BIRT";
	switch ( $type )
	{
		case RELEASE_BUILD: $buildTypeName = "Release"; break;
		case MILESTONE_BUILD: $buildTypeName = "Milestone"; break;
		case STABLE_BUILD: $buildTypeName = "Stable"; break;
		case NIGHTLY_BUILD: $buildTypeName = "Nightly"; break;
	}
	echo <<<END
<tr>
 <td width="30%">$buildTypeName Build</td>

END;
	if ( $builds[ $type ] == null )
		echo "<td>None</td><td></td>\n";
	else
	{
		$count = count( $builds[ $type ][ BUILD_NAME ] );
		$buildName = $builds[ $type ][ BUILD_NAME ][ $count - 1 ];
		$buildDir = $builds[ $type ][ BUILD_DIR ][ $count - 1 ];
		$buildDate = $builds[ $type ][ BUILD_DATE ][ $count - 1 ];
		echo <<<END
 <td><a href="build.php?build=$buildDir">$buildName</a></td>
 <td>$buildDate</td>
END;
	}
	echo <<<END
</tr>
END;
}

function readLogs( $publicOnly = false )
{
	global $dropDir;
	readBuildLog( RELEASE_BUILD, "$dropDir/release.log" );
	readBuildLog( MILESTONE_BUILD, "$dropDir/milestone.log" );
	readBuildLog( STABLE_BUILD, "$dropDir/stable.log" );
	if ( ! $publicOnly )
		readBuildLog( NIGHTLY_BUILD, "$dropDir/nightly.log" );
}

?>


