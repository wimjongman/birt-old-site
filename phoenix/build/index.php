<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Installing BIRT";
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
		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			Below are complete instructions for installing BIRT. If you are already
			familiar with Eclipse plugins, you might want to follow the abbreviated
			requirements and instructions on the
			<a href="http://download.eclipse.org/birt/downloads">
			download page</a>.
			Otherwise, follow along below for detailed steps for installing BIRT.

			</p><p>
			The instructions here are for the Release 1.0.1 (and later) builds. Please use 1.0.1 or later
			instead of the earlier milestone or stable builds.
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="java"></a>Java</h2>
		<p>
			You'll need a <a href="http://java.sun.com">Java runntime environment (JRE)</a>
			The version you choose will depend on the version of Eclipse you are running.
			See below.
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="eclipse"></a>Eclipse</h2>
		<p>
			BIRT is currently tested with the following configurations:
		</p>
		<ul class="midlist">
			<li>
				Eclipse 3.0.1, and 3.0.2.
			</li>
			<li>
				GEF 3.0.1.
			</li>
			<li>
				EMF 2.0.3.
			</li>
			<li>
				JRE 1.4.2.
			</li>
		</ul>
		<p>
			And
		</p>
		<ul class="midlist">
			<li>
				Eclipse 3.1.
			</li>
			<li>
				GEF 3.1.
			</li>
			<li>
				EMF 2.1.
			</li>
			<li>
				JRE 1.4.2/JRE 1.5.
			</li>
		</ul>

		<div class="homeitem3col">
			<h3>Note</h3>
			<p>
				Additionally, If you are installing the 2.0 Release Candidate you will need the following downloads
			</p>
			<ul class="midlist">
				<li>
					<a href="http://www.lowagie.com/iText/download.html">iText 1.3</a>.
				</li>
			</ul>
			<p>
				The iText APIs are discussed at <a href="http://www.lowagie.com/iText/">iText Homepage</a><br>
				The itext-1.3.jar file needs to be copied to the plugins/org.eclipse.birt.report.engine.pdf_version/lib directory.
			</p>
		</div>
		<p>
			Also download Apache Axis 1.2.1. from <a href="http://www.apache.org/dyn/closer.cgi/ws/axis/1_2_1">Apache</a>
			and extract only the six jars listed below into the plugins/org.eclipse.birt.report.viewer_version/birt/WEB-INF/lib directory.
		</p>
		<ul class="midlist">
			<li>
				axis.jar
			</li>
			<li>
				axis-ant.jar
			</li>
			<li>
				commons-discovery-0.2.jar
			</li>
			<li>
				jaxrpc.jar
			</li>
			<li>
				saaj.jar
			</li>
			<li>
				wsdl4j-1.5.1.jar
			</li>
		</ul>
		<p>
			Lastly download prototype.js v1.4.0 from <a href="http://dev.conio.net/repos/prototype/dist/">dev.conio.net</a>. Copy it into the plugins/org.eclipse.birt.report.viewer_version/birt/ajax/lib directory.
		</p>
		<p>
			The instructions on this page cover the second configuration.
			<br>
			Download and install the
			<a href="http://download.eclipse.org/downloads/index.php">Eclipse Platform 3.1 Release</a>
		</p>
		<p>
			(Note: Eclipse, EMF, GEF and BIRT are all available from the
			<a href="http://www.eclipse.org/downloads/index.php">Eclipse download page</a>.)
		</p>
		<p>
			Eclipse comes as a zip file or tar file. On Windows, unzip the install file
			into your "C:\Program Files" directory. This will create a subdirectory called eclipse.
		</p>
		<p>
			To make it easier to start Eclipse on Windows, create a shortcut to Eclipse on your desktop:
		</p>
		<ul class="midlist">
			<li>
				From the desktop, right click, choose New?Shortcut.
			</li>
			<li>
				For location, enter "C:\Program Files\eclipse\eclipse.exe" (without quotes.)
			</li>
			<li>
				Click Next.
			</li>
			<li>
				Enter “Eclipse” for the shortcut name.
			</li>
		</ul>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="gef"></a>GEF</h2>
		<p>
			GEF, the Graphic Editor Framework, is an Eclipse plugin used by the BIRT UI.
			Download the
			<a href="http://download.eclipse.org/tools/gef/downloads/index.php">
			GEF 3.1 Release, GEF Runtime</a>.
		</p>
		<p>
			GEF comes as a zip file. Unzip GEF into directory that contains Eclipse. If you
			installed Eclipse into the standard location on Windows, then unzip GEF into
			"C:\Program Files".
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="emf"></a>EMF</h2>
		<p>
			The BIRT charting feature uses EMF, the Eclipse Modeling Framework. Download the
			<a href="http://download.eclipse.org/tools/emf/scripts/downloads.php">
			EMF &amp; SDO RT version 2.1</a>. Look in the Latest Releases sections of the
			download page.
			</p><p>
			EMF also comes as a zip file. Unzip EMF into directory that contains Eclipse.
			This is the same directory you used for GEF.
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="birt"></a>BIRT</h2>
		<p>
			Download <a href="http://download.eclipse.org/birt/downloads/">

			Release 1.0.1</a> (or later). Download only the
			BIRT designer framework for now: "birt-report-framework-1_0_1.zip".
		</p>
		<p>
			BIRT is also a zip file. Unzip BIRT into the directory that contains Eclipse.
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="jdbc_drivers"></a>JDBC Drivers</h2>
		<p>
<p>
You will likely want to use your own JDBC driver with BIRT. Use the data source editor’s JDBC
driver management wizard. To start the wizard, open a BIRT report design, go to
the Data Explorer view, right click on “Data Sources” and select “New Data
Source”. Choose “JDBC Data Source” and click “Next”. In the next dialog, choose
“Manage Drivers…” to bring up the “Manage JDBC Drivers” dialog.
</p><p>In the “JAR Files” tab, click on “Add…” to add the JAR file required by your
JDBC driver. Then go to the “Driver” tab to confirm that the list of drivers
includes the new drivers added. You may also want to assign a display name and URL
template for the new drivers in this tab.</p>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
