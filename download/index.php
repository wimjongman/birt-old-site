<?php

if ( $_GET['page'] != "" )
{
	require "../include/viewer.inc";
	viewer( );
	return;
}
	
require "download.inc";

addJump( "Introduction", "intro" );
addJump( "Requirements", "requirements" );
addJump( "Download", "download" );
addJump( "Getting Started", "next" );

$title = "Latest BIRT Builds";
$subhead = "Latest downloads from the BIRT project";
pageHeader( $title, $title, $subhead );

readLogs( true );

?>

<h1><a name="intro">Introduction</a></h1>

This page lists the latest builds from the 
<a href="http://www.eclipse.org/birt">Eclipse BIRT Project</a>.
Builds are of three types:
<p>

<?php
	bulletList( );
	bullet( "Release" );
?>

Releases are fully tested and production quality. If you plan to develop
an application, use the latest release.

<?php
	endBullet( );
	bullet( "Milestone" );
?>

A milestone is a stable build within the development cycle of a release.
If allows the BIRT community to preview new functionality and provide
feedback to the development team. Milestones are not production quality.</dd>

<?php
	endBullet( );
	bullet( "Stable Build" );
?>

Stable builds are development builds that are well tested and ready for
wider testing by the community. Download the stable build if you want to help
us test BIRT, or to get a sneak preview of new features.

<?php
	endList( );
?>

<p>
A complete definition of BIRT build types is available on the
<a href="/birt/viewer.php?page=download/build_types.html">Build Types</a> page.
<p>
All downloads are provided under the terms and conditions of the 
<a href="http://www.eclipse.org/legal/epl/notice.html">
Eclipse Foundation Software User Agreement</a> 
unless otherwise specified.
</p>

<h1><a name="requirements">Requirements</a></h1>

<p>
Before you install BIRT, be sure you have the required software installed
first.

<?php
	bulletList( BREAK_ARROW_LIST );
	bullet( "Java 1.4.x", "http://java.sun.com" );
?>

Of course, you'll need to have Java installed. Eclipse requires
Java 1.4. Choose the latest 1.4 series release if you don't have Java installed.
Note that Eclipse 3.0.1. is not tested on Java 5
(previously known as Java 1.5).

<?php
	endBullet( );
	bullet( "Eclipse Platform 3.0.1", "http://www.eclipse.org/downloads/index.php" );
?>

BIRT has not been tested on the 3.1 milestone builds. BIRT will not
work with 2.x versions of Eclipse.

<?php
	endBullet( );
	bullet( "Graphics Editor Framework (GEF) runtime 3.0.1",
			"http://www.eclipse.org/downloads/index.php" );
?>

BIRT uses this plugin for its editors.

<?php
	endList( );
?>

<h1><a name="download">Download</a></h1>

The table below shows the latest builds, and will take you to the build
page for that build. Choose the Report Designer build.
<p>

<table cellpadding="3" cellspacing="0" width="100%">
<tbody>
<tr>
 <td width="15%"><b>Build Type</b></td>
 <td width="20%"><b>Build Name</b></td>
 <td width="65%"><b>Build Date</b></td>
</tr> 
 <?php latestBuild( RELEASE_BUILD ); ?>
 <?php latestBuild( MILESTONE_BUILD ); ?>
 <?php latestBuild( STABLE_BUILD ); ?>
</tbody>
</table>

<p>Older builds and nightly builds are available on the
<a href="/birt/download/build_list.php">Recent BIRT Builds</a> page.

<h1><a name="next">Getting Started</a></h1>

<p>
To get started with BIRT, start Eclipse, then open the Window menu,
choose Open Perspective,
Other and choose Report Design. You can learn about BIRT at the
<a href="http://www.eclipse.org/birt">Birt website</a> or by going though
the user documentation provided in BIRT's online help system.
</p>

<?php
	include( "../include/footer.inc" );
?>


