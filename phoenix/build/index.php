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
				<li><a href="#introduction">Designer Install</a></li>
				<li><a href="#designer">Framework Designer Install</a></li>
				<li><a href="#drivers">JDBC Drivers</a></li>
				<li><a href="#updating">Updating a BIRT Installation</a></li>
				<li><a href="#j2ee">Deploying to J2EE Server</a></li>
				<li><a href="#langpack">Installing BIRT Language Packs on Windows</a></li>
				<li><a href="#common">Common Problems</a></li>

			</ul>
		</blockquote>



<h2><a name="introduction"></a>Designer Install</h2>
<p>
BIRT can be downloaded and installed in different ways.<br>

<ul>
<li>The complete BIRT designer or RCP Designer can be installed by downloading the required package <a href="http://download.eclipse.org/birt/downloads">here</a>.
</li>
<li>or by downloading the <a href="http://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/galileo/R/eclipse-reporting-galileo-win32.zip">Galileo Eclipse IDE for Java and Report Developers Package</a>   
</li>
<li>or through the update manager as described <a href="http://download.eclipse.org/birt/downloads/updmaninst2.2.php">here</a>.
<br><a href="http://wiki.eclipse.org/BIRT_Update_Site_URL">Update Manager URLs</a>
</li>
<li>as a package that only contains the BIRT plugins (Framework) from the <a href="http://download.eclipse.org/birt/downloads">download page</a>.  Note additional requirements are located on the download page as well.  These
include dependencies on other Eclipse projects.  These dependencies are listed on the download page for the specific build.
</ul>
<p>
All of the above downloads contain the BIRT designer.  The BIRT project has many additional downloads, including a runtime for deploying the BIRT engine in a web application or standalone Java application.
The additional downloads are available for any build of BIRT by selecting the appropriate build <a href="http://download.eclipse.org/birt/downloads/build_list.php">here.</a>
</p>
<p>
Once you have downloaded one of the above packages, unzip the package into your chosen directory.  This will create an eclipse directory that
contains eclipse.exe.  Run eclipse.exe to start the designer.
</p>
<h3>Create a windows short cut</h3>
<ul>
<li>From the desktop, right click, choose New&rarr;Shortcut.
<li>For location, enter "C:\Program Files\eclipse\eclipse.exe" (without quotes.)
<li>Click Next.
<li>Enter “Eclipse” for the shortcut name.
</ul>



<h2><a name="designer"></a>Framework Designer Install</h2>
<p>
As stated above, the framework install only contains the required BIRT plugins.
The Framework install requires that you already have the Eclipse Platform, GEF, EMF, DTP and WTP packages.  The specific version of
each, is listed on the specific build's download page. Unzip each package into your eclipse directory.  
</p>
<h2><a name="optional"></a>Optional Eclipse Link File</h2>
<p>If you are installing the framework, you can download the
BIRT framework and unzip the contents to any directory.
<ul>
<li>After doing this, create a links directory in your installed Eclipse location (ie C:\eclipse\links).
<li>Within this directory create a file with a unique name like birt.2.3.link.
<li>Open the file you just created and enter path=drive:/pathtobirt (ie path=c:/birt2.3)
</ul>
</p>

<h2><a name="drivers"></a>JDBC Drivers</h2>

<p>
You will likely want to use your own JDBC driver with BIRT. Use the data source editor’s JDBC 
driver management wizard. To start the wizard, open a BIRT report design, go to 
the Data Explorer view, right click on "Data Sources" and select "New Data 
Source". Choose "JDBC Data Source" and click "Next". In the next dialog, choose 
"Manage Drivers…" to bring up the "Manage JDBC Drivers" dialog.
<p>In the "JAR Files" tab, click on "Add…" to add the JAR file required by your 
JDBC driver. Then go to the "Driver" tab to confirm that the list of drivers 
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
</ul>


<h2><a name="j2ee"></a>Deploying to J2EE Server</h2>
Please see <a href="/birt/phoenix/deploy/viewerSetup.php">Setting up the BIRT Viewer</a>
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
