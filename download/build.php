<?php
require "download.inc";
global $viewer;
global $birtHome;
global $buildPath;

$buildDir = $_GET['build'];

// TODO: Do latest release if none specified.

$buildPath = "drops/" . $buildDir;
$iniFile = $buildPath . "/build.ini";
$buildInfo = parse_ini_file( $iniFile );
$fileTimeStamp = filemtime( $iniFile );
$buildName = $buildInfo[ "buildName" ];
if ( $buildName == "" )
	$buildName = "Unnamed";
$buildType = $buildInfo[ "buildType" ];
$buildTypeName = "";
switch ( $buildType )
{
	case 'N': $buildTypeName = "Nightly"; break;
	case 'M': $buildTypeName = "Milestone"; break;
	case 'R': $buildTypeName = "Release"; break;
	case 'S': $buildTypeName = "Stable"; break;
}

$buildDate = $buildInfo[ "buildDate" ];
$dateName =  $buildDate;
if ( preg_match( "/([0-9]*)-([0-9]*)-([0-9]*) /", $buildDate, $match ) )
{
	//echo $match[1] . " " . $match[2] . " " . $match[3] . "\n";
	$timeStamp = mktime( 0, 0, 0, $match[2], $match[3], $match[1] );
	$dateName = date( "F j, Y", $timeStamp );
}

$hasDesigner = $buildInfo[ "designer" ] != "";
$hasRcp = $buildInfo[ "rcp" ] != "";
$hasEngine = $buildInfo[ "engine" ] != "";
$hasChart = $buildInfo[ "chart" ] != "";
$hasSamples = $buildInfo[ "samples" ] != "";
$hasTests = $buildInfo[ "tests" ] != "";
$hasDb = $buildInfo [ "database" ] != "";


addJump( "Build Documentation", "buildDoc" );
if ( $hasDesigner )
{
	addJump( "Report Designer", "designer" );
}
if ( $hasRcp )
{
	addJump( "RCP Designer", "rcp" );
}
if ( $hasEngine )
{
	addJump( "Report Engine", "engine" );
}
if ( $hasChart )
{
	addJump( "Chart Engine", "chart" );
}
if ( $hasSamples )
{
	addJump( "Samples", "samples" );
}
if ( $hasTests )
{
	addJump( "Test Suites", "tests" );
}
if ( $hasDb )
{
	addJump( "Demo Database", "db" );
}
addJump( "Build Logs", "logs" );

$title = "BIRT $buildTypeName Build: $buildName";
pageHeader( $title, $title, $dateName );

function buildTable( $proj )
{
	global $birtPath;
	global $buildInfo;
	global $buildPath;
	
	$ok = $buildInfo[ $proj . "OK" ];
	if ( $ok )
		$icon = "OK.gif";
	else
		$icon = "fail.gif";
		
	$baseName = $buildInfo[ $proj ];
	
	echo <<<END
<table border="0" bordercolor="#999999" cellpadding="0" cellspacing="2" width="100%">
 <tbody>
  <tr>
   <td align="right" valign="top" width="7%">
    <div align="left"><b>Status</b></div>
   </td>
   <td width="23%"><b>Platform</b></td>
   <td width="70%"><b>Download</b></td></tr>
  <tr>
   <td>
    <div align="left"><img src="$icon"></div>
   </td>
   <td>All</td>
   <td>
END;
	$basePath = $buildPath . "/" . $baseName;
	$fileName = $basePath . ".zip";
	if ( $ok && file_exists( $fileName ) )
	{
		echo <<<END
    <a href="http://www.eclipse.org/downloads/download.php?file=/birt/downloads/$buildPath/$baseName.zip">
    $baseName.zip</a>
END;
	}
	else
	{
		echo "None";
	}
	$fileName = $basePath . ".md5";
	if ( $ok && file_exists( $fileName ) )
	{
		echo <<<END
	&nbsp;&nbsp;
    (<a href="$buildPath/$baseName.md5">md5</a>)
END;
	}
echo <<<END
   </td>
  </tr>
 </tbody>
</table>

END;
}

function showLog( $display, $name )
{
	global $buildPath;
	$logName = $buildPath . "/" . $name . "_build_log.txt";
	if ( file_exists( $logName ) )
		bullet( "$display subsystem log", "$logName" );
	else
		bullet( "$display subsystem log not available" );
}

?>

<h1><a name="buildDoc">Build Documentation</a></h1>

<?php
	bulletList(  );
	bullet( "License", "http://www.eclipse.org/legal/notice.html" );
?>

These downloads are provided under the Eclipse.org 
Software User Agreement.

<?php
	endBullet( );
	bullet( "Install", "{$viewer}build/install.html", "_top" );
?>

Complete download instructions for BIRT and the software it requires.

<?php
	endBullet( );
	$fileName = $buildPath . "/new.html";
	//echo "File Name: $fileName<br>\n";
	if ( file_exists( $fileName ) )
	{
		bullet( "New and Noteworthy", $fileName );
?>

Describes the major new and changed features in this build.

<?php
		endBullet( );
	}
	
	bullet( "BIRT Home", "http://www.eclipse.org/birt", "_top" );
?>

Information about BIRT, including newsgroups, FAQs, etc.

<?php
	endBullet( );
	
	// TODO: Internal target should be named, not numbered.
	
	bullet( "Supported Platforms",
			"{$viewer}project/project_plan_R1_0.html#jump_4", "_top" );
?>

BIRT provides a single download that works on all supported platforms.

<?php
	endBullet( );
	
	// TODO: Internal target should be named, not numbered.
	
	bullet( "Requirements", "main.php#requirements" );
?>

See the main build page for the software you must install before BIRT.

<?php
	endBullet( );
	
	// TODO: Internal target should be named, not numbered.
	
	bullet( "Other Builds", "main.php" );
?>

Check for the latest builds and find general information about BIRT builds.

<?php
	endBullet( );
	$fileName = $buildPath . "/build_notes.txt";
	if ( file_exists( $fileName ) )
	{
		bullet( "Build Notes", "$viewerBase$fileName" );
?>

Detailed notes about the build itself.

<?php
		endBullet( );
	}
	$fileName = $buildPath . "/build_log.txt";
	if ( file_exists( $fileName ) )
	{
		bullet( "Test Results &amp; Compile Logs", "$viewerBase$fileName" );
?>

Detailed information from the build &amp; automated test process.

<?php
		endBullet( );
	}
	$fileName = $buildPath . "/map_files.txt";
	endList( );
?>

<?php
	if ( $hasDesigner )
	{
?>

<h1><a name="designer">Report Designer</a></h1>

<p>The BIRT designer is an Eclipse plugin that lets you build reports
as a perspective from within Eclipse.</p>

<?
		buildTable( "designer" );
	}
	if ( $hasRcp )
	{
?>

<h1><a name="rcp">RCP Report Designer</a></h1>

<p>The BIRT RCP Report Designer is an example of deploying BIRT using 
the Eclipse Rich Client Platform (RCP) technology. This provides a simplified report designer without 
the additional perspectives in the standard Eclipse platform.</p>

<?
		buildTable( "rcp" );
	}
	if ( $hasEngine )
	{
?>

<h1><a name="engine">Report Engine</a></h1>

<p>Install the report engine in your J2EE application server to run
BIRT reports over the web. A preview engine is included with the
Report Designer download.</p>

<?
		buildTable( "engine" );
	}
	if ( $hasChart )
	{
?>

<h1><a name="chart">Chart Engine</a></h1>

<p>The chart engine is a stand alone library that lets you add charts
to your Java application. Download this only if you want to use
charts independetly of the rest of BIRT.</p>

<?
		buildTable( "chart" );
	}
	if ( $hasSamples )
	{
?>

<h1><a name="samples">Samples</a></h1>

<p>Sample integration code for reports and charts. Download this if you
want examples of how to extend BIRT.</p>

<?
		buildTable( "samples" );
	}
	if ( $hasTests )
	{
?>

<h1><a name="tests">Test Suites</a></h1>

<p>Automated tests for BIRT functions. Download this if you're a developer and want to modify,
build and perform regression testing against your modified version of BIRT.</p>

<?
		buildTable( "tests" );
	}
	if ( $hasDb )
	{
?>

<h1><a name="db">Demo Database</a></h1>

<p>Intended as a convenient way to get the Classic Cars sample data and database schema for use with
your prefered database software, the demo database package includes sql and data files for defining
and loading the database into Derby and MySQL. It does <i>not</i> include any BIRT software. Note
that the sample database is already included in both the Designer and the RCP Designer packages.</p>

<?
		buildTable( "database" );
	}
?>
	
<h1><a name="logs">Build Logs</a></h1>

The following are the build logs created for this build.

<?php
	bulletList( PLAIN_ARROW_LIST );
	showLog( "Designer", "designer" );
	showLog( "Model", "model" );
	showLog( "Engine", "engine" );
	showLog( "Data", "data" );
	showLog( "Chart", "chart" );
	endList( );
?>		


</body>
</html>




