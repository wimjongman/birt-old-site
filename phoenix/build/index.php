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
<h2>Introduction</h2>
<p>
Below are complete instructions for installing BIRT. If you are already
familiar with Eclipse plugins, you might want to follow the abbreviated
requirements and instructions on the
<a href="http://download.eclipse.org/birt/downloads">
download page</a>.
Otherwise, follow along below for detailed steps for installing BIRT.
<p>
The instructions here are for the Release 2.0 (and later) builds. Please use 2.0 or later 
instead of the earlier milestone or stable builds.
<h2>Java</h2>
<p>
 You'll need a <a href="http://java.sun.com">Java runntime environment (JRE)</a>
 The version you choose will depend on the version of Eclipse you are running.
 See below. 
<h2>Eclipse</h2>
<p>
BIRT is currently tested with the following configurations:<br>
<ul>
<li>Eclipse 3.0.1, and 3.0.2.
<li>GEF 3.0.1.
<li>EMF 2.0.3.
<li>JRE 1.4.2.
</ul>
And
<ul>
<li>Eclipse 3.1.
<li>GEF 3.1.
<li>EMF 2.1.
<li>JRE 1.4.2/JRE 1.5.
</ul>




<p class="caution"><span class="caution-head">Note:</span> Additionally, If you are installing the 2.0 you will need
the following downloads</p>
<ul>
<li><a href="http://www.lowagie.com/iText/download.html">iText 1.3</a>.
</ul>
<p>
The iText APIs are discussed at <a href="http://www.lowagie.com/iText/">iText Homepage</a><br> 
The itext-1.3.jar file needs to be copied to the plugins/org.eclipse.birt.report.engine.emitter.pdf_version/lib directory.
</p>
<p>
Also download Apache Axis 1.2.1. from <a href=http://www.apache.org/dyn/closer.cgi/ws/axis/1_2_1>Apache</a>
and extract only the six jars listed below into the plugins/org.eclipse.birt.report.viewer_version/birt/WEB-INF/lib directory.
<ul>
<li>axis.jar 
<li>axis-ant.jar 
<li>commons-discovery-0.2.jar 
<li>jaxrpc.jar 
<li>saaj.jar 
<li>wsdl4j-1.5.1.jar 
</ul>
</p>
<p>
Lastly download prototype.js v1.4.0 from <a href=http://dev.conio.net/repos/prototype/dist/>dev.conio.net</a>. Copy it into the plugins/org.eclipse.birt.report.viewer_version/birt/ajax/lib directory.
</p>

<p class="caution"><span class="caution-head">Birt Runtime Note: </span>If you are installing the BIRT Runtime,
The above files will need to be copied to the birt-runtime-2_0_0\Web Viewer Example directory structure.
<br>Copy itext-1.3.jar to /Web Viewer Example/plugins/org.eclipse.birt.report.engine.pdf/lib.
<br>Copy prototype.js to /Web Viewer Example/ajax/lib.
<br>Copy Axis jars to the /Web Viewer Example/WEB-INF/lib
<br>
If you are using the birt.war, you will need to extract it and add the above files.
</p>
<br>

The instructions on this page cover the second configuration.
<br>
Download and install the
<a href="/birt/frameizer.php?page=http://download.eclipse.org/downloads/index.php">
Eclipse Platform 3.1 Release</a>
<p>
(Note: Eclipse, EMF, GEF and BIRT are all available from the
<a href="http://www.eclipse.org/downloads/index.php">Eclipse download page</a>.)
<p>
Eclipse comes as a zip file or tar file. On Windows, unzip the install file
into your "C:\Program Files" directory. This will create a subdirectory called eclipse.

<p>
To make it easier to start Eclipse on Windows, create a shortcut to Eclipse on your desktop:

<ul>
<li>From the desktop, right click, choose New&rarr;Shortcut.
<li>For location, enter "C:\Program Files\eclipse\eclipse.exe" (without quotes.)
<li>Click Next.
<li>Enter “Eclipse” for the shortcut name.
</ul>

<h2>GEF</h2>
<p>
GEF, the Graphic Editor Framework, is an Eclipse plugin used by the BIRT UI.
Download the
<a href="/birt/frameizer.php?page=http://download.eclipse.org/tools/gef/downloads/index.php">
GEF 3.1 Release, GEF Runtime</a>.
<p>
GEF comes as a zip file. Unzip GEF into directory that contains Eclipse. If you
installed Eclipse into the standard location on Windows, then unzip GEF into
"C:\Program Files".

<h2>EMF</h2>
<p>
The BIRT charting feature uses EMF, the Eclipse Modeling Framework. Download the
<a href="http://download.eclipse.org/tools/emf/scripts/downloads.php">
EMF & SDO RT version 2.1</a>. Look in the Latest Releases sections of the
download page.
<p>
EMF also comes as a zip file. Unzip EMF into directory that contains Eclipse.
This is the same directory you used for GEF.

<h2>BIRT</h2>
<p>
Download <a href="http://download.eclipse.org/birt/downloads/">
Release 1.0.1</a> (or later). Download only the
BIRT designer framework for now: "birt-report-framework-1_0_1.zip".
<p>
BIRT is also a zip file. Unzip BIRT into the directory that contains Eclipse.

<h2>JDBC Drivers</h2>
<p>
You will likely want to use your own JDBC driver with BIRT. Use the data source editor’s JDBC 
driver management wizard. To start the wizard, open a BIRT report design, go to 
the Data Explorer view, right click on “Data Sources” and select “New Data 
Source”. Choose “JDBC Data Source” and click “Next”. In the next dialog, choose 
“Manage Drivers…” to bring up the “Manage JDBC Drivers” dialog.
<p>In the “JAR Files” tab, click on “Add…” to add the JAR file required by your 
JDBC driver. Then go to the “Driver” tab to confirm that the list of drivers 
includes the new drivers added. You may also want to assign a display name and URL 
template for the new drivers in this tab.</p>

<h2>Updating a BIRT Installation</h2>
<p>
If you have a version of BIRT installed, and want to install a newer version, do 
the following:<ul>
<li>Close Eclipse.
<li>Locate your Eclipse plugins directory. If you installed on Windows in the
default location, this is "C:\program files\eclipse\plugins".
<li>Delete all directories that start with "org.eclipse.birt".
<li>Download and install BIRT as described in the BIRT section above.
<li>Restart Eclipse with the -clean option: <code>eclipse -clean</code></ul>
<h2>Upgrading JDBC Drivers from 1.0M2 or Earlier</h2>
<p>Builds earlier than 1.0M3 stored JDBC driver information within the plugin 
structure, and so the drivers had to be reinstalled with each build. Starting 
with 1.0M3, this is no longer necessary. However, if you upgrade to 1.0M3 from an 
older build, you will need to reinstall your JDBC drivers as described above.</p>
<h2>Upgrading 1.0M1 Report Designs</h2>
<p>If you have a report created with BIRT 1.0M1, the data source information will 
be lost when opening that design in 1.0M3 or later. Here's what to do:</p>
<ol>
  <li>Note your data source name.</li>
  <li>Delete your data source.</li>
  <li>Create a new data source with the required properties.</li>
  <li>If your report has multiple data sources, repeat steps 1-3 for each data 
  source.</li>
  <li>Select your first data set.</li>
  <li>Open the Properties view (not the Property Editor).</li>
  <li>Find the property called &quot;Data Source&quot;. Enter the name of your new data 
  source.</li>
  <li>Repeat steps 5-7 for each additional data source.</li>
</ol>
<h2>Upgrading 1.0M2 Charts</h2>
<p>The chart format changed from 1.0M2 to 1.0M3. If your report contains charts, they 
will not open in 1.0M3 or later. You must either recreate the report, or use a text editor 
to remove the chart elements from your design, open the design within BIRT, and 
add your charts.</p>

<h2>Common Problems</h2>
<p>
Some problems are due to cached information within Eclipse. Eclipse caches
information about plugins for faster startup. Adding BIRT as we did above
may result in stale cached information. Symptoms of this problem
include:

<ul>
<li>The BIRT perspective does not appear in Eclipse.
<li>You receive "An error occurred" dialogs when opening reports or using
the BIRT UI.
</ul>

<h2>Cleaning Cached Plugin Information</h2>
<p>
The solution is to clean up the cached information. 
The recommended practice is to start Eclipse with the -clean option:
</p>
<pre class="code-block">eclipse -clean
</pre>

<h2>Cleaning the Cache on Windows</h2>
<p>
If you are on Windows, and are not familiar with how to invoke Eclipse from
the command line, do the following:

<ul>
<li>Choose Start&rarr;All Programs&rarr;Accessories&rarr;Command Prompt
<li>Move to the directory where you installed eclipse. If you installed
Eclipse in the standard location, enter:
</p>
<pre class="code-block">cd "\Program Files\eclipse"
</pre>
<li>Run Eclipse with the -clean option:
<pre class="code-block">eclipse -clean
</pre>
<li>Eclipse will restart. Again check for the BIRT perspective.
</ul>

<h2>The "Brute-Force" Approach</h2>
<p>
Another, less recommended, approach is to delete the configuration directory:
</p>
<ul>
<li>Shut down Eclipse
<li>Delete the configuration folder in the eclipse directory,
<li>Restart Eclipse and again check for the BIRT perspective.
</ul>
<p>
Note that this may lose some of your Eclipse settings; use this technique
carefully.
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
