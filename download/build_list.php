<?php
require "download.inc";

addJump( "Latest Downloads", "latest" );
addJump( "Release Builds", "release" );
addJump( "Milestone Builds", "milestone" );
addJump( "Stable Builds", "stable" );
addJump( "Nightly Builds", "nightly" );

$title = "Eclipse BIRT Project Downloads";
$head = "Recent BIRT Builds";
$subhead = "";
pageHeader( $title, $head, $subhead );

readLogs( );

function releaseTable( $type )
{
	global $builds;
	$buildName = $builds[ $type ][ BUILD_NAME ];
	$buildDir = $builds[ $type ][ BUILD_DIR ];
	$buildDate = $builds[ $type ][ BUILD_DATE ];
	$count = count( $buildName );
	echo <<<END
<table cellpadding="3" cellspacing="0" width="100%">
 <tbody><tr>
 <td width="30%"><b>Build Name</b></td>
 <td><b>Build Date</b></td>
 </tr>
END;
	if ( $count == 0 )
	{
		echo <<<END
<tr>
 <td>None</td>
 <td></td>
</tr>
END;
	}
	for ( $i = $count - 1;  $i >= 0;  $i-- )
	{
		echo <<<END
<tr>
 <td><a href="build.php?build={$buildDir[ $i ]}">{$buildName[ $i ]}</a></td>
 <td>{$buildDate[ $i ]}</td>
</tr>
END;
	}
	echo <<<END
 </tbody>
</table>
END;
}
?>

<h1><a name="latest">Latest Downloads</a></h1>

This page lists the latest builds produced by 
the BIRT project. Build terminology is defined on the
<a href="build_types.html">build types</a> page.
If you are not sure
what build you want, you probably want the
<a href="main.php">latest release</a>. The daily <a href="drops/daily_build_report.html">build status report</a> shows the build status for the most recent build (of any sort), including compiliation and smoke test status.
<p>
If you have 
problems downloading the drops, contact the
<a href="mailto:webmaster@eclipse.org">webmaster</a>. 
</p>

<table cellpadding="3" cellspacing="0" width="100%">
<tbody>
<tr>
 <td width="30%"><b>Build Type</b></td>
 <td><b>Build Name</b></td>
 <td><b>Build Date</b></td>
</tr> 
 <?php latestBuild( RELEASE_BUILD ); ?>
 <?php latestBuild( MILESTONE_BUILD ); ?>
 <?php latestBuild( STABLE_BUILD ); ?>
 <?php latestBuild( NIGHTLY_BUILD ); ?>
</tbody>
</table>

<h1><a name="release">Latest Releases</a></h1>

Release builds are fully tested and are production ready.
<p>

<?php releaseTable( RELEASE_BUILD ); ?>
 
<h1><a name="milestone">Milestone Builds</a></h1>

Milestone builds have undergone testing and are ready for wider
review. They are not production quality, but they allow you to see
the latest features. Please try them and provide feedback.
<p>

<?php releaseTable( MILESTONE_BUILD ); ?>
 
<h1><a name="stable">Stable Builds</a></h1>

Stable builds have undergone standard testing and are ready for wider
testing. They are not production quality, and are primarily for use by the
BIRT QA team.
<p>

<?php releaseTable( STABLE_BUILD ); ?>
 
<h1><a name="nightly">Nightly Builds</a></h1>

Nightly  builds are created automatically each night for the use of the BIRT
development team. Unless you're a BIRT
developer, you probably don't want these builds.
<p>

<?php releaseTable( NIGHTLY_BUILD ); ?>
 
</body>
</html>


 