<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Pre-Requisites and Detailed Installation Instructions for BIRT";
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
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#allinone">Report Designer Full Eclipse Install</a></li>
				<li><a href="#designer">Designer Install</a></li>
				<li><a href="#gef">GEF</a></li>
				<li><a href="#emf">EMF</a></li>
				<li><a href="#dtp">DTP</a></li>
				<li><a href="#birt">BIRT</a></li>
				<li><a href="#optional">Optional Eclipse Link File</a></li>
				<li><a href="#itext">iText</a></li>
				<li><a href="#drivers">JDBC Drivers</a></li>
				<li><a href="#updating">Updating a BIRT Installation</a></li>
				<li><a href="#j2ee">Deploying to J2EE Server</a></li>
				<li><a href="#langpack">Installing BIRT Language Packs on Windows</a></li>
				<li><a href="#common">Common Problems</a></li>

			</ul>
		</blockquote>



<h2><a name="introduction"></a>Introduction</h2>
<p>
Below are complete instructions for installing BIRT. If you are already
familiar with Eclipse plugins, you might want to follow the abbreviated
requirements and instructions on the
<a href="http://download.eclipse.org/birt/downloads">
download page</a>.
Otherwise, follow along below for detailed steps for installing BIRT.
<p>
The instructions here are for the Release 2.2/2.1.2 (and later) builds.
<h2>Java</h2>
<p>
 You'll need a <a href="http://java.sun.com">Java runntime environment (JRE)</a>
 The version you choose will depend on the version of Eclipse you are running.
 See below. 
<h2>Eclipse</h2>
<p>
BIRT is currently tested with the following configurations:<br>
<ul>
<li><b>BIRT 2.1.2</b>
<li>Eclipse 3.2.
<li>GEF 3.2.
<li>EMF 2.2.
<li>JRE 1.4.2/JRE 1.5.
</ul>
And
<ul>
<li><b>BIRT 2.2</b>
<li>Eclipse 3.3.
<li>GEF 3.3.
<li>EMF 2.3.
<li>JRE 1.5.
<li>DTP 1.5.
</ul>


<h2><a name="allinone"></a>Report Designer Full Eclipse Install</h2>
BIRT now supplies a <a href="http://download.eclipse.org/birt/downloads/">download</a> that incudes Eclipse, GEF, EMF and BIRT.  Use this
download if you do not already have Eclipse installed.  You will still need iText.jar
for the 2.1.2 install, which are described below.  


<br>
<h2><a name="designer"></a>Designer Install</h2>
Use these instructions if you have Eclipse installed or do not desire to use the
Report Designer Full Eclipse Install.
<br>
Download and install the
<a href="/birt/frameizer.php?page=http://download.eclipse.org/downloads/index.php">
Eclipse Platform 3.1/3.2/3.3 Release</a>
<p>
(Note: Eclipse, EMF, GEF, DTP and BIRT are all available from the
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

<h2><a name="gef"></a>GEF</h2>
<p>
GEF, the Graphic Editor Framework, is an Eclipse plugin used by the BIRT UI.
Download the
<a href="/birt/frameizer.php?page=http://download.eclipse.org/tools/gef/downloads/index.php">
GEF 3.1/3.2/3.3 Release, GEF Runtime</a>.
<p>
GEF comes as a zip file. Unzip GEF into directory that contains Eclipse. If you
installed Eclipse into the standard location on Windows, then unzip GEF into
"C:\Program Files".

<h2><a name="emf"></a>EMF</h2>

<p>
The BIRT charting feature uses EMF, the Eclipse Modeling Framework. Download the
<a href="http://www.eclipse.org/emf/downloads/">
EMF & SDO RT version 2.1/2.2/2.3</a>. Look in the Latest Releases sections of the
download page.
<p>
EMF also comes as a zip file. Unzip EMF into directory that contains Eclipse.
This is the same directory you used for GEF.

<h2><a name="dtp"></a>DTP</h2>

<p>
BIRT sources data for reports using the Data Tools Platform Project. Download 
<a href="http://www.eclipse.org/datatools/downloads.html">
DTP version 1.5</a>. Note that 1.5 is only a requirement for versions of BIRT newer than
BIRT 2.2 M6.  2.2 M6 is the last version of BIRT to include the required DTP plugins in the designer download.
</p><p>  
The BIRT allinone download will continue to include the required DTP plugins.  Additionally a separate download is now
available on the BIRT site that is a subset of the DTP plugins.  This package referred to as the BIRT/DTP Integration package
contains only the required DTP Plugins needed for BIRT to function. 
</p>



<h2><a name="birt"></a>BIRT</h2>

<p>
Download <a href="http://download.eclipse.org/birt/downloads/">
Release 2.1.2</a> (or later). Download only the
BIRT designer framework for now: "birt-report-framework-2_1_2.zip".
<p>
BIRT is also a zip file. Unzip BIRT into the directory that contains Eclipse.

<h2><a name="optional"></a>Optional Eclipse Link File</h2>
<p>If you currently have an Eclipse install with GEF and EMF, you can download the
BIRT framework and unzip the contents to any directory.
<ul>
<li>After doing this, create a links directory in your installed Eclipse location (ie C:\eclipse3.2\eclipse\links).
<li>Within this directory create a file with a unique name like birt.2.1.link.
<li>Open the file you just created and enter path=drive:/pathtobirt (ie path=c:/birt2.1)
<li>You will still need iText and prototype.js files.  See next section. 
</ul>

<h2><a name="itext"></a>iText</h2>
<ul>
<li><a href="http://prdownloads.sourceforge.net/itext/itext-1.3.jar">iText 1.3</a>.
</ul>
<p>
The iText APIs are discussed at <a href="http://www.lowagie.com/iText/">iText Homepage</a><br><br> 
If you are installing BIRT 2.2, this file is already included. <br><br>
<br><b>BIRT 2.1.2</b><br>
The itext-1.3.jar file needs to be copied to the plugins/com.lowagie.itext_*/lib directory.

<br>
<div class="homeitem3col">
<h3>Birt 2.1.2 (This file is included in the 2.2 release): </h3>
<ul>
 To Support Asian fonts in PDF, download the following jar and place it in the plugins/com.lowagie.itext_*/lib directory.
<li><a href="http://prdownloads.sourceforge.net/itext/iTextAsian.jar">iTextAsian.jar</a>.

 </ul>
</div>

<br>
</p>


<br>




<h2><a name="drivers"></a>JDBC Drivers</h2>

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

<h2><a name="updating"></a>Updating a BIRT Installation</h2>

<p>
If you have a version of BIRT installed, and want to install a newer version, do 
the following:<ul>
<li>Close Eclipse.
<li>Locate your Eclipse plugins directory. If you installed on Windows in the
default location, this is "C:\program files\eclipse\plugins".
<li>Delete all directories that start with "org.eclipse.birt".
<li>Download and install BIRT as described in the BIRT section above.
<li>Restart Eclipse with the -clean option: <code>eclipse -clean</code></ul>



<h2><a name="j2ee"></a>Deploying to J2EE Server</h2>
Please see <a href="/birt/phoenix/deploy/viewerSetup.php">Setting up the BIRT Viewer</a>
<br>
<div class="homeitem3col">
<h3>Birt 2.1.2 Runtime Note: </h3>
<ul>
 <li>If you are installing the 2.1.2 Runtime (J2EE Application Server Deployment),
 <li>Copy <a href="http://prdownloads.sourceforge.net/itext/itext-1.3.jar">itext-1.3.jar</a> to /WebViewerExample/WEB-INF/platform/plugins/com.lowagie.itext/lib.
 <li>Copy <a href="http://prdownloads.sourceforge.net/itext/iTextAsian.jar">iTextAsian.jar</a> to /WebViewerExample/WEB-INF/platform/plugins/com.lowagie.itext/lib.

 </ul>
</div>
<br>
<br>


<br>
<h2><a name="langpack"></a>Installing BIRT Language Packs on Windows</h2>
<p>
<ol>
<li><a href="http://download.eclipse.org/birt/downloads/">Download</a> the Language Pack for the desired product and extract into your eclipse install.
<li>Open the Regional and Language Options in the Control Panel and switch to the advanced tab.
<li>Select the group 1 language you desire from the drop-down combo box.
<li>Save changes and restart the system.
<li>Launch Eclipse and select <b>Window->Preferences->Report Design->Preview</b>.  Select the desired language from the drop-down combo box.
<li>Restart Eclipse.
</ol>
</p>
<h2><a name="common"></a>Common Problems</h2>
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

<h3>Cleaning Cached Plugin Information</h3>
<p>
The solution is to clean up the cached information. 
The recommended practice is to start Eclipse with the -clean option:
</p>
<pre class="code-block">eclipse -clean
</pre>

<h3>Cleaning the Cache on Windows</h3>
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

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
