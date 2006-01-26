<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Downloads";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#build_types">Build Types</a></li>
				<li><a href="#requirements">Requirements</a></li>
				<li><a href="#download">Download</a></li>
				<li><a href="#getting_started">Getting Started</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This page lists the latest builds from the
			<a href="http://www.eclipse.org/birt">Eclipse BIRT Project</a>.
		</p>
		<p>
			If you are new to BIRT, you can refer to the
			<a href="http://www.eclipse.org/birt/index.php?page=build/install.html">
			complete install instructions</a> on the
			<a href="http://www.eclipse.org/birt">BIRT website</a>.
		</p>
		<hr class="clearer" />

		<h2><a name="build_types"></a>Build Types</h2>
		<p>
			Builds are of three types:
		</p>
		<ul class="midlist">
			<li>
				Release -
				Releases are fully tested and production quality. If you plan to develop
				an application, use the latest release.
			</li>
			<li>
				Milestone -
				A milestone is a stable build within the development cycle of a release.
				If allows the BIRT community to preview new functionality and provide
				feedback to the development team. Milestones are not production quality.
			</li>
			<li>
				Stable Build -
				Stable builds are development builds that are well tested and ready for
				wider testing by the community. Download the stable build if you want to help
				us test BIRT, or to get a sneak preview of new features.
			</li>
		</ul>
		<p>
		A complete definition of BIRT build types is available on the
		<a href="build_types.php">Build Types</a> page.
		</p>
		<p>
		All downloads are provided under the terms and conditions of the
		<a href="http://www.eclipse.org/legal/epl/notice.html">
		Eclipse Foundation Software User Agreement</a>
		unless otherwise specified.
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="requirements"></a>Requirements</h2>
		<p>
			Before you install BIRT, be sure you have the required software installed first.
		</p>
		<ul class="midlist">
			<li>
				<a href="http://java.sun.com" target="_top">Java 1.4.2/1.5 JDK/JRE</a>
				<br>
				Of course, you'll need to have Java installed.
			</li>
			<hr class="clearer" />
			<li>
				<a href="http://www.eclipse.org/downloads/index.php" target="_top">Eclipse SDK 3.1</a>
				<br>
				BIRT will not work with 2.x versions of Eclipse.
			</li>
			<hr class="clearer" />
			<li>
				<a href="http://www.eclipse.org/downloads/index.php" target="_top">Graphics Editor Framework (GEF) runtime 3.1</a>
				<br>
				BIRT uses this plugin for its editors.
			</li>
			<hr class="clearer" />
			<li>
				<a href="http://www.eclipse.org/downloads/index.php" target="_top">Eclipse Modeling Framework (EMF) runtime 2.1</a>
				<br>
				BIRT charting uses this plugin for data storage.
			</li>
		</ul>
		<p>
			If you are Downloading BIRT 2.0.0 RC you will need the following:
		</p>
		<ul class="midlist">
			<li>
				<a href="http://www.apache.org/dyn/closer.cgi/ws/axis/1_2_1" target="_top">Apache Axis</a>
				<br>
				Extract only the six jars listed below into the plugins/org.eclipse.birt.report.viewer_version/birt/WEB-INF/lib directory:
				<br>
				axis.jar
				<br>
				axis-ant.jar
				<br>
				commons-discovery-0.2.jar
				<br>
				jaxrpc.jar
				<br>
				saaj.jar
				<br>
				wsdl4j-1.5.1.jar
			</li>
			<hr class="clearer" />
			<li>
				<a href="http://www.lowagie.com/iText/download.html" target="_top">iText 1.3</a>
				<br>
				The itext-1.3.jar file needs to be copied to the plugins/org.eclipse.birt.report.engine.pdf_version/lib directory.
			</li>
			<hr class="clearer" />
			<li>
				<a href="http://dev.conio.net/repos/prototype/dist/" target="_top">prototype.js v1.4.0</a>
				<br>
				Copy it into the plugins/org.eclipse.birt.report.viewer_version/birt/ajax/lib directory
			</li>
		</ul>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />
		<h2><a name="download"></a>Download</h2>
		<p>
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

			 <tr>
			 <td width="30%">Release Build</td>
			 <td><a href="build.php?build=R-R1-1_0_1-200508091640"> 1_0_1</a></td>
			 <td>Tue, 09 Aug 2005 -- 16:40 (+0800)</td></tr> <tr>
			 <td width="30%">Milestone Build</td>
			 <td><a href="build.php?build=M-R1-2.0RC2-200601162202"> 2.0RC2</a></td>

			 <td>Mon, 16 Jan 2006 -- 22:02 (+0800)</td></tr> <tr>
			 <td width="30%">Stable Build</td>
			 <td><a href="build.php?build=S-R1-S20051110-200511100700"> S20051110</a></td>
			 <td>Thu, 10 Nov 2005 -- 07:00 (+0800)</td></tr></tbody>
			</table>

			</p><p>Older builds and nightly builds are available on the

			<a href="build_list.php">Recent BIRT Builds</a> page.
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="getting_started"></a>Getting Started</h2>
		<p>
			To get started with BIRT, start Eclipse, then open the Window menu,
			choose Open Perspective,
			Other and choose Report Design. You can learn about BIRT at the
			<a href="http://www.eclipse.org/birt">BIRT website</a> or by going though
			the user documentation provided in BIRT's online help system.
		</p>
		<p>
			Another good place to start is with the
			<a href="http://www.eclipse.org/birt/tutorial">BIRT Tutorial</a>.
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Overview</h6>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#build_types">Build Types</a></li>
				<li><a href="#download">Download</a></li>
				<li><a href="#getting_started">Getting Started</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
