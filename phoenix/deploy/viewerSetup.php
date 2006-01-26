<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Installing the BIRT Viewer in Tomcat";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	require "deploy.inc";
	$currentPage			= "Viewer Setup";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#using">Using Tomcat</a></li>
				<li><a href="#install_viewer">Install the Viewer</a></li>
				<li><a href="#install_jdbc">Install your JDBC Drivers</a></li>
				<li><a href="#testing">Testing a More Complex Report</a></li>
			</ul>
		</blockquote>

		<h2><a name="using"></a>Using Tomcat</h2>
		<p>
			This page explains how to deploy the BIRT viewer to a J2EE container.
			We'll use <a href="http://jakarta.apache.org/tomcat/">Apache Tomcat</a>, since
			it is open source and readily available. The same concepts,  perhaps
			with different details, apply to other app servers. These instructions assume you'll
			install Tomcat on your own machine using the default port number of 8080.
		</p>

		<p>
			If you don’t have Tomcat installed on your system you can download it from <a href="http://jakarta.apache.org/tomcat">http://jakarta.apache.org/tomcat</a>.
			BIRT works with the 4.1.x and 5.5.x verisons of Tomcat, but 5.5.x
			requires installation of the Java compatibility package described below.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="install_viewer"></a>Install the Viewer</h2>
		<p>
			Deploy the BIRT Viewer application. Follow these steps:
		</p>
		<ul class="midlist">
			<li>
				Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-<version#>.zip.
			</li>
			<li>
				Unzip the file in a staging area.
			</li>
			<li>
				Look under the birt-runtime-<version#> directory and locate the "Web Viewer Example" directory.
			</li>
			<li>
				Copy the Web Viewer Example directory to the webapps directory of your Tomcat installation. For ease of reference, rename the directory to "birt-viewer".
			</li>
			<li>
				Copy additional files to the directory structure as described in the BIRT Runtime Note
			</li>
			<li>
				Stop, then restart Tomcat.
			</li>
			<li>
				Display the Tomcat manager application to check that the viewer is deployed: <a href="http://localhost:8080/manager/html"> http://localhost:8080/manager/html</a>.
			</li>
			<li>
				Verify that birt-viewer is listed as an application, then click on the birt-viewer link.
			</li>
			<li>
				A page confirming that the BIRT viewer has been installed should be displayed. Click on the link labeled "View Example" to confirm that your installation is working properly.
			</li>
			<li>
				Alternately, instead of using the Web Viewer Example, you can also copy the birt.war file to the Tomcat webapps directory. The WAR file is located in birt-runtime-<version#>.zip.
			</li>
		</ul>
		<p>
			If you choose to put the Viewer into some other location, you'll need to use a context entry within the server.xml file to indicate the deployment location. See Tomcat documentation for details.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="install_jdbc">Install your JDBC Drivers</a></h2>
		<p>
			Add the jar files for your JDBC drivers  to the Viewer. They  go in the following directory:
		</p>
		<p>
			birt-viewer/plugins/org.eclipse.birt.report.data.oda.jdbc/drivers
		</p>
		<p>
			(Note: you must install the drivers both into the Eclipse-based design environment and the deployed viewer environment; these two environments do not share files.)
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="testing">Testing a More Complex Report</a></h2>
		<p>
			We'll test the viewer further using one of the example reports created for the "Classic Models" database. Note that Classic Models database is included in the birt runtime distribution so no further set-up is required. Follow these steps:
		</p>
		<ul class="midlist">
			<li>
				Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-<version#>.zip.
			</li>
			<li>
				Click on the following link to download the example report design, <a href="/birt/phoenix/examples/solution/SalesInvoice.rptdesign" target="_blank">SalesInvoice.rptdesign</a> into another browser window. Use the "Save as..." command from the file menu to save the report into the birt-viewer/report directory.
			</li>
			<li>
				If you've installed everything in its default location, then click on the following link. If you've changed anything, then copy the following URL into your browser and make the needed changes.
				<blockquote>
					http://localhost:8080/birt-viewer/frameset?__report=report%5CSalesInvoice.rptdesign
				</blockquote
			</li>
		<p>
			The report should run and appear in your browser, along with a parameter form in which you can enter a different value for the "Order Number " parameter for this report.
		</p>
		$linkToTop
		<hr class="clearer" />
	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
