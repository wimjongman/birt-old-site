<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Report Engine API";
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
	$currentPage			= "Report Engine API";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#background">Background</a></li>
				<li><a href="#installing">Installing the API</a></li>
				<li><a href="#config">Installing the Engine</a></li>
				<li><a href="#jdbc">Configuring JDBC Drivers</a></li>
				<li><a href="#api">API Overview</a></li>
				<li><a href="#example">Example Application</a></li>
			</ul>
		</blockquote>








<h2><a name="background"></a>Background</h2>


The BIRT Report Engine API allows you to integrate the run-time part of BIRT
into your application. The engine supports the following operations:

<ul>
<li>Discover the set of parameters defined for a report.
<li>Get the default values for parameters.<li>Run a report to produce an HTML or PDF output.
<li>Fetch an image or chart for a report.
</ul>

<p>The report engine supports extensions for custom report items, and for custom 
output formats. Extensions are discussed elsewhere. This article focus on how 
your application integrates with the report engine.
</p>

<h2><a name="installing"></a>Installing the API</h2>

The first step is to download, install, and configure the BIRT engine. The 
engine is more than just a simple JAR file; it also includes a set of extensions 
(plugins), and a set of data drivers.

<h3>Engine Download</h3>
<p> The standalone <a href="http://download.eclipse.org/birt/downloads/">BIRT Report Engine</a> is now available for download.
Within this download are several examples on how to use the Report Engine, Chart Engine and
the Viewer.<br>
</p>

<h3>Engine Source</h3>
<p>If you prefer to work directly with the BIRT source code, the Engine API is 
in the <code>org.eclipse.birt.report.engine project</code> within Eclipse CVS in
<code><a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.engine/src/org/eclipse/birt/report/engine/api/?cvsroot=BIRT_Project">
source/org.eclipse.birt.report.engine/src/org/eclipse/birt/report/engine/api</a></code>.</p>

<h3>Javadoc</h3>

<p>This article provides an overview of the engine. To do actual development, 
consult the Engine Javadoc.</p>

<h2><a name="config"></a>Installing the Engine</h2>
First download the Report Engine from the <a href=http://download.eclipse.org/birt/downloads">Eclipse download site.</a>
This file will be named birt-runtime-2_0_0.zip.
Unzip this file into a directory, such as c:\birtruntime.
Copy the iText jar file (see install page for location) to the 
C:\birtruntime\birt-runtime-2_0_0\Report Engine\plugins\org.eclipse.birt.report.engine.emitter.pdf\lib directory.
When you set the Engine Home, which is explained later, use C:/birtruntime/birt-runtime-2_0_0/Report Engine as the value.
Some operating systems will have problems with the space in "Report Engine".  Rename it if needed.

The sample viewer is also bundled with the Report Engine.  It is located under the Web Viewer Example directory.  If you decide to 
use this example, make sure you copy the additional files to the appropriate location.
<ul>
 <li>Copy itext-1.3.jar to /Web Viewer Example/plugins/org.eclipse.birt.report.engine.pdf/lib.
 <li>Copy prototype.js to /Web Viewer Example/ajax/lib.
 <li>Copy Axis jars to the /Web Viewer Example/WEB-INF/lib
 <li>If you are using the birt.war, you will need to extract it and add the above files.
</ul>

<h2><a name="jdbc"></a>Configuring JDBC Drivers</h2>
<p>You must configure the engine to include any JDBC drivers that you need.</p>


<p>The report engine uses the Eclipse plugin mechanism for managing extensions. 
One of those extensions is a bridge between BIRT and JDBC implemented using the 
BIRT Open Data Access (ODA) framework. JDBC drivers are defined in the <code>plugin.xml</code> 
file for the JDBC extension: <code><i>ENGINE-HOME</i>/plugins/org.eclipse.birt.report.data.oda.jdbc_version/plugin.xml</code>.
Use any text editor to edit the configuration file. Add an entry such as the one 
shown in bold below.</p>

<pre class="code-block">&lt;runtime&gt;
  &lt;library name=&quot;oda-jdbc.jar&quot;&gt;
    &lt;export name=&quot;*&quot;/&gt;
  &lt;/library&gt;
  <b>&lt;library name=&quot;lib/<i>driver_name</i>.jar&quot;&gt;
    &lt;export name=&quot;*&quot;/&gt;
  &lt;/library&gt;</b>
&lt;/runtime&gt;
</pre>


	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
