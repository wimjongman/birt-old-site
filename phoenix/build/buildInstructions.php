<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "How to Build BIRT from CVS";
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
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

		<table>
			<COLGROUP>
				<COL width="3%">
				<COL width="97%">
		<tr>
			<td></td>
			<td>
			
		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#req">Requirements</a></li>
				<li><a href="#config">Configuring Eclipse</a></li>
				<li><a href="#understand">Understanding the CVS Structure</a></li>
				<li><a href="#checkout">Checking out Code from CVS</a></li>
				<li><a href="#checkoutdatatools">Checking out the Data Tools projects</a></li>
				<li><a href="#additional">Import Additional Files</a></li>
				<li><a href="#viewer">Preparing the Viewer</a></li>
				<li><a href="#running">Running BIRT</a></li>
				<li><a href="#junit">Instructions for Running JUnit Tests</a></li>
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>

This document describes how to get the BIRT source from CVS and build it under 
Eclipse. If you simply want to use BIRT, it is easier to simply
<a href="http://download.eclipse.org/birt/downloads">download</a> an existing build.
<br>
<br>Building BIRT 2.1.1 is described below.
 
<h1><a name="req">Requirements</a></h1>
<p>
Download the BIRT all in one designer.
It is listed under "Report Designer Full Eclipse Install" on the download page.
It is possible to build BIRT with an existing Eclipse install, but
this method is the quickest, as all the required files, with the exception
of iText.jar and iTextAsian.jar are present.
</p>
<h1><a name="config">Configuring Eclipse</a></h1>

The BIRT source code uses some features that are only present in JDK 1.4.2 or later.
In order for it to successfully build you need to set your compiler compliance 
to 1.4.  <b>Make sure this is not set to 5.0</b>.
You can set this for the entire workbench as follows:

<ol>
<li>From the menu, choose Window->Preferences.</li>
<li>In the tree, expand Java and choose Compiler.</li>
<li>On Compiler compliance level, select 1.4.</li>
<li>Unselect Use default compliance settings.</li>
<li>On Generated .class files compatibility, select 1.4.</li>
<li>On Source compatibility, select 1.4.<br><br>
The following illustration shows these settings.<br><br>

<img src="images/compliancepreference.jpg" /><br><br></li>
<li>Choose OK.</li>
</ol>

<h1><a name="understand">Understanding the CVS Structure</a></h1>

The BIRT modules are available in CVS in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/?cvsroot=BIRT_Project">source</a> folder under 
<a href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=BIRT_Project">
/home/birt</a>. 
BIRT has over 150 modules, some of these are described below.

<table BORDER="1">
 <thead>
  <th>Project Folder </th>
  <th>Contents</th>
 </thead>
 <tbody>
  <tr>
   <td>org.eclipse.birt.chart.device.extension</td>
   <td>Extension classes for the device renderer framework for charts</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.chart.engine</td>
   <td>Chart model and factory classes</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.chart.engine.extension</td>
   <td>Extension classes for the model renderer framework for charts</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.chart.reportitem</td>
   <td>Classes for the chart module to interact with the BIRT designer and 
   runtime engine</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.chart.shared</td>
   <td>Classes shared between different components of the chart module</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.chart.ui</td>
   <td>Chart builder UI classes</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.chart.ui.extension</td>
  <td>Extensions for the chart builder UI</td>
  </tr>
   <tr>
   <td>org.eclipse.birt.chart.device.extension</td>
  <td>Chart engine extension plugin containing device renderers implementations (Swing, SWT, PNG, GIF, JPG, BMP)</td>
  </tr>
   <tr>
   <td>org.eclipse.birt.chart.device.svg</td>
  <td>Chart engine extension plugin containing SVG device renderer’s implementation</td>
  </tr>  
  <tr>
   <td>org.eclipse.birt.converters</td>
  <td>Contains converters that can convert reports from other formats to the BIRT report format</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.core</td>
   <td>Provides the framework for loading the plugins at run-time and 
contains other classes that can be used by any other module</td>
   </tr>
  <tr>
   <td>org.eclipse.birt.data</td>
   <td>Provides the data engine implementation and the ODA factory implementation. It also contains classes for applying transformations on the data.</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.data.oda</td>
   <td>ODA public interface: the classes and interfaces used to create data 
   extensions.</td>
  </tr>

  <tr>
   <td>org.eclipse.birt.data.oda.adapter.dtp</td>
   <td>Adapter for Data Tools project</td>
  </tr>
  
  <tr>
   <td>org.eclipse.birt.report.data.oda.flatfile</td>
   <td>The ODA driver for accessing flat file data sources</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.data.oda.flatfile.ui</td>
   <td>The user interface for the ODA flat file driver</td>
  </tr>

  <tr>
   <td>org.eclipse.birt.data.oda.jdbc</td>
   <td>The ODA driver for accessing JDBC data sources</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.data.oda.jdbc.ui</td>
   <td>The user interface for the ODA JDBC driver</td>
  </tr>  
  
  <tr>
   <td>org.eclipse.birt.report.data.oda.sampledb</td>
   <td>The ODA driver for accessing the sample Derby data base</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.data.oda.sampledb.ui</td>
   <td>The user interface for the ODA sample database driver</td>
  </tr>

  <tr>
   <td>org.eclipse.birt.data.oda.xml</td>
   <td>The ODA driver for accessing XML data sources</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.data.oda.xml.ui</td>
   <td>The user interface for the ODA XML driver</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.debug.ui</td>
   <td>Used for creating launch configuration when debugging reports
   that contain Java events</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.designer.core</td>
   <td>The core classes of the BIRT report designer, including classes that 
       interact with the BIRT model, and localization and other utility classes</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.designer.lib</td>
   <td>The classes used for library manipulation</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.designer.lib.explorer</td>
   <td>Handles browsing and exploring library contents</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.designer.ui</td>
   <td>The BIRT report designer</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.designer.ui.rcp</td>
   <td>The BIRT RCP report designer</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.engine</td>
   <td>The BIRT reporting engine that generates the report from a report design</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.engine.emitter.fo</td>
   <td>The emitter for generating report output using FO</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.engine.emitter.html</td>
   <td>The emitter that generates report output in HTML</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.engine.emitter.pdf</td>
   <td>The emitter that generates report output in PDF</td>
  </tr>

  <tr>
   <td>org.eclipse.birt.report.model</td>
   <td>The BIRT report model</td>
  </tr>
  <tr>
   <td>org.eclipse.birt.report.viewer</td>
   <td>The BIRT report viewer (BIRT web app)</td>
  </tr>
  <tr>
   <td>org.eclipse.birt-feature</td>
   <td>The BIRT feature</td>
  </tr> 
 </tbody>
</table>



<h1><a name="checkout">Checking out Code from CVS</a></h1>


<h2>Configure the Repository under Eclipse</h2>

<ol>
<li>To open the CVS Repository Exploring perspective, choose Window -&gt; 
Open Perspective -&gt; Other. In Select Perspective, select CVS Repository 
Exploring and choose OK.<br><br>
<img src="images/selectperspective.jpg"/><br><br>
<li>Right-click on the CVS repositories window. From the context menu, 
choose New -&gt; Repository Location.<br><br>
<img src="images/newrepository.jpg"/><br><br>
<li>On Add CVS Repository, set the following values:<br><br>

<table border="1">
 <tbody>
  <tr>
   <td>Host</td>
   <td>dev.eclipse.org</td>
  </tr>
  <tr>
   <td>Repository path</td>
   <td>/cvsroot/birt</td>
  </tr>
  <tr>
   <td>User</td>
   <td>anonymous</td>
  </tr>
  <tr>
   <td>Connection type</td>
   <td>pserver</td>
  </tr>
  <tr>
   <td>Use Default Port</td>
   <td>Selected</td>
  </tr>
 </tbody>
</table>
<br/>
<img src="images/addcvsrepository.jpg"  /><br/><br/>
<li>Choose Finish.
</ol>
A new node appears in the CVS Repositories window.

<h2>Check Out Code for the First Time</h2>

<ol>
<li>Expand the new node in the repositories tree.<br>
<li>Select Versions<br>
<li>Select source<br>
<li>Open the source BIRT_2_1_1_Release_20060927 node<br><br>
<img src="images/birt2.1.1/projects.jpg"  /><br/><br/>

<li>Select all the nodes under this node, with the exception of the these projects:<br>
org.eclipse.birt.report.data.oda.flatfile<br>
org.eclipse.birt.report.data.oda.flatfile.nl<br>
org.eclipse.birt.report.data.oda.flatfile.ui<br>
org.eclipse.birt.report.data.oda.flatfile.ui.nl<br>
org.eclipse.birt.report.tests.engine<br>
org.eclipse.birt.report.tests.model<br>
org.eclipse.birt.reports.tests.viewer<br>
org.eclipse.birt.test.performance<br>
org.eclipse.birt.tests.core<br>
org.eclipse.birt.tests.data<br>

<br>

<li>On CVS Repositories, right-click and choose 
 Check Out from the context menu.<br/><br/>
This will get the BIRT projects from CVS and load them into your Eclipse workspace folder.
This will take some time.  Once finished, change to the Java perspective.
</ol>


<h1><a name="additional">Import Additional Files</a></h1>

Import <a href="http://prdownloads.sourceforge.net/itext/itext-1.3.jar" target="blank">iText 1.3</a> and
<a href="http://prdownloads.sourceforge.net/itext/iTextAsian.jar" target="blank">iTextAsian</a> into the 
com.lowagie.itext/lib directory. <br><br>
<img src="images/itext.jpg" /> <br/><br/>

<br>
If your Eclipse environment is not setup to build automatically, build the source now.
This designer should build correctly.
If you wish to build the Web Viewer proceed to the next section.  Do this if you wish to make changes
to the deployable Web Viewer Example.

<h1><a name="viewer">Preparing the Viewer</a></h1>

The viewer project contains an ant build script that builds the Web Viewer. When executed it will create a birt_web directory
in the root of the viewer project.  This directory can then be exported and deployed in a similar fasion to the Web Viewer example
in the Report Engine download.  To use 
this script, perform the following steps.

<ol>
<li>Copy the following plugins from the all in one download to the source directory of the workspace you are currently using to build BIRT.<br>
org.apache.batik.pdf_1.6.0.v20060623-1511<br>
org.apache.batik_1.6.0.v20060623-1511<br>
org.apache.xerces_2.8.0.v20060815-0630<br>
<br>
When copying these plugins rename them to the following:<br>
org.apache.batik.pdf<br>
org.apache.batik<br>
org.apache.xerces<br>
<br>
eg. If you have checked the projects out to c:/work/birt2.1.1/source and your all in one distribution is located under c:/birt2.1.1,
copy the three plugins from c:/birt2.1.1/eclipse/plugins to c:/work/birt2.1.1/source and rename them as stated above.<br><br>

<li>In Package Explorer, expand the org.eclipse.birt.report.viewer project.<br><br>
<li>Right-click the BuildWebViewer.xml file. From the context menu, choose Run -&gt;
 Ant Build....
 <br/><br/>
<img src="images/birt2.1.1/antbuild.jpg" />
<br/><br/>

<li>In the org.eclipse.birt.report.viewer BuildViewer.xml, select the Properties tab. 
Unselect Use global properties specified in the Ant runtime preferences 
as shown in the following illustration.  Add the eclipse.home property and
set it to your all in one Eclipse install directory.
<br/><br/>
<img src="images/birt2.1.1/eclipsehome.jpg" />
<br/><br/>
</ol>

Choose Run. The ant build of the Web Viewer runs in the console.
This will create the birt_web directory within the project that contains the Web Viewer.  Refresh the viewer project and the birt_web directory
will be displayed.  

<h1><a name="running">Running BIRT</a></h1>

Start BIRT by running it as an Eclipse Application. This can be done as follows:
  <ol>
  	<li>
  		Select Run... from the Run menu on the menu bar
		<br/><br/>
	</li>
	<li>
		Select Eclipse Applicaiton from the list on the left and click on the New button as shown in the following illustration:
		<br/><br/>
		<img src="images/runconfig1.jpg"  />
		<br/><br/>
	</li>
	<li>
		Click the Run button to launch the Eclipse Application.  In the new Eclipse application start a new BIRT project and build reports as
		usual.  You should be able to step through and debug the BIRT code.
		<br/><br/>
		<img src="images/runconfig2.jpg"  />
		<br/><br/>
	</li>
  </ol>
  
  
 <h1><a name="junit">Instructions for Running JUnit Tests</a></h1>
<ol>
<li>Open debug perspective
<li>click on Run --> Run --> Double click on JUnit Plug-in Test , this will
create a new configuration. In the window, you can select among different
options.<br><br>
To run all tests in a selected project, click on the option
'Run all tests in selected project,package or source folder'. On the right
side, select the package to run tests for by clicking on Search and selecting a
required source folder.
<br><br>
In this example, we will run tests in org.eclipse.birt.report.engine
project. So lets name this configuration as ReportEngineTests in the 'Name:'
box on the top of the configuration window.  And then click 'Apply' to save the
changes.<br><br>
		<img src="images/runcreateconfig.jpg"  />
<br><br>
To run the test, in the ReportEngineTests window, click on 'Run'. This will run
all tests in org.eclipse.birt.report.engine.<br><br>
		<img src="images/runtests75.jpg"  />
<br><br>
If you want to see the progress of the tests, look at the JUnit window.
<br><br>
The results for birt2_1_1_Release_20060927 should be 613 tests
ran, with 2 failures and no errors.
<br><br>


		</td>
		</tr>
		</table>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
