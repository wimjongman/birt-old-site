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

<div id="maincontent">
	<div id="midcolumn">

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
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>

This document describes how to get the BIRT source from CVS and build it under 
Eclipse. If you simply want to use BIRT, it is easier to simply
<a href="http://download.eclipse.org/birt/downloads">download</a> an existing build.
<br>
If you would like to watch a flash presentation of building BIRT 2.0 click
<a href=http://download.eclipse.org/birt/downloads/examples/building/BuildingBirt2.0/BuildingBirt2.0.html target=_blank> here</a>

<h1><a name="req">Requirements</a></h1>

In order to successfully build and run the BIRT source, your system must meet 
the following requirements:

<ul class="arrow-list">
	<li>Eclipse Release 3.0.1 or higher</li>
	<li>JDK 1.4.2 or higher</li>
	<li>GEF 3.0.0 or higher</li>
	<li>EMF 2.0.1 or higher</li>
</ul>

<h1><a name="config">Configuring Eclipse</a></h1>

The BIRT source code uses some features that are only present in JDK 1.4.2 or later.
In order for it to successfully build you need to set your compiler compliance 
to 1.4.
You can set this for the entire workbench as follows:

<ol>
<li>From the menu, choose Window->Preferences.</li>
<li>In the tree, expand Java and choose Compiler.</li>
<li>On the tabs on the right, choose Compliance and Classfiles.</li>
<li>On Compiler compliance level, select 1.4.</li>
<li>Unselect Use default compliance settings.</li>
<li>On Generated .class files compatibility, select 1.4.</li>
<li>On Source compatibility, select 1.4.<br><br>
The following illustration shows these settings.<br><br>

<img src="images/compliancepreference.jpg" width="672" height="539"/><br><br></li>
<li>Choose OK.</li>
</ol>

<h1><a name="understand">Understanding the CVS Structure</a></h1>

The BIRT modules are available in CVS in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/?cvsroot=BIRT_Project">source</a> folder under 
<a href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=BIRT_Project">
/home/birt</a>. 
BIRT consists of the following modules.

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
<img src="images/selectperspective.jpg" width="245" height="420"/><br><br>
<li>Right-click on the CVS repositories window. From the context menu, 
choose New -&gt; Repository Location.<br><br>
<img src="images/newrepository.jpg" width="485" height="361"/><br><br>
<li>On Add CVS Repository, set the following values:<br><br>

<table border="1">
 <tbody>
  <tr>
   <td>Host</td>
   <td>dev.eclipse.org</td>
  </tr>
  <tr>
   <td>Repository path</td>
   <td>/home/birt</td>
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
<img src="images/addcvsrepository.jpg" width="438" height="551" /><br/><br/>
<li>Choose Finish.
</ol>
A new node appears in the CVS Repositories window.

<h2>Check Out Code for the First Time</h2>

<ol>
<li>Expand the new node in the repositories tree, then the head node and 
the source node.
<li>Select all the nodes under this node, with the exception of the test projects. On CVS Repositories, right-click and choose 
 Check Out from the context menu.<br/><br/>
<img src="images/checkout.jpg" width="414" height="768" /><br/><br/>
This choice gets all the BIRT projects from CVS into your Eclipse workspace folder.
</ol>


<h1><a name="checkoutdatatools">Checking out the Data Tools projects</a></h1>
BIRT depends on other Libraries and Projects to build properly.
After checking out the BIRT source, you will need to check out the Data Tools project source.
This can be done by opening the CVS Repository Explorer prespective and following the steps below.

<ol>
<li>Right-click on the CVS repositories window. From the context menu, 
choose New -&gt; Repository Location.<br><br>
<img src="images/secondrep.jpg" width="423" height="179"/><br><br>
<li>On Add CVS Repository, set the following values:<br><br>

<table border="1">
 <tbody>
  <tr>
   <td>Host</td>
   <td>dev.eclipse.org</td>
  </tr>
  <tr>
   <td>Repository path</td>
   <td>/home/datatools</td>
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
<img src="images/dtrep.jpg" width="438" height="542" /><br/><br/>
<li>Choose Finish.




The data tools node appears in the CVS Repositories window.


<li>Expand the data tools node in the repositories tree, then the head node and 
the source node.
<li>Select all the nodes under this node as shown in the image below. On CVS Repositories, right-click and choose 
 Check Out from the context menu.<br/><br/>
<img src="images/dtoolsproj.jpg" width="457" height="558" /><br/><br/>
This choice gets the required Data Tools projects from CVS into your Eclipse workspace folder.
</ol>






</ol>


<h1><a name="additional">Import Additional Files</a></h1>

BIRT currently requires additional files be included, to allow the source to build properly.<br>

Import <a href="http://prdownloads.sourceforge.net/itext/itext-1.3.jar">iText 1.3</a> into the 
org.eclipse.birt.report.engine.emitter.pdf/lib directory.  If the lib directory does not exist,
create it.<br><br>
<img src="images/itext.jpg" width="552" height="828" /><br/><br/>

<br>

Also download Apache <a href="http://apache.downlod.in/ws/axis/1_2_1/axis-bin-1_2_1.zip">Axis 1.2.1 ZIP</a>
and extract <b>only</b> the six jars listed below and import into the org.eclipse.birt.report.viewer/birt/WEB-INF/lib directory.
<ul>
<li>axis.jar 
<li>axis-ant.jar 
<li>commons-discovery-0.2.jar 
<li>jaxrpc.jar 
<li>saaj.jar 
<li>wsdl4j-1.5.1.jar 
</ul>
<br>
<img src="images/axis.jpg" width="552" height="830" /><br/><br/>
<br>

Finally, import <a href="http://dev.conio.net/repos/prototype/dist/prototype.js">prototype.js v1.4.0</a> into the
org.eclipse.birt.report.viewer/birt/ajax/lib directory.  If the lib directory does not exist, create it.
<br><br>
<img src="images/prototype.jpg" width="557" height="877" /><br/><br/>
<br>

This designer build is now complete.  The final step in building BIRT is building the viewer described in the next section.
<h1><a name="viewer">Preparing the Viewer</a></h1>


To include all the required project libraries under the viewer's WEB-INF folder, 
you must build the viewer separately.
The viewer project contains an ant build script that performs this task. To use 
this script, perform the following steps.

<ol>
<li>In Package Explorer, expand the org.eclipse.birt.report.viewer project.
<li>Right-click the BuildViewer.xml file. From the context menu, choose Run -&gt;
 Ant Build.
 <br/><br/>
<img src="images/runantbuild.jpg" width="541" height="682" />
<br/><br/>

<li>In org.eclipse.birt.report.viewer BuildViewer.xml, select the Properties tab. 
Unselect Use global properties specified in the Ant runtime preferences 
as shown in the following illustration.
<br/><br/>
<img src="images/enginehome.jpg" width="692" height="560" />
<br/><br/>
</ol>

Choose Run. The ant build of the viewer runs in the console.

<h1><a name="running">Running BIRT</a></h1>

Start BIRT by using running it as an Eclipse Application. This can be done as follows:
  <ol>
  	<li>
  		Close the org.eclipse.birt.report.designer.ui.rcp project as shown below.
  		<br/><br/>
		<img src="images/closercp.jpg" width="679" height="875" />
		<br/><br/>
	</li>
  	<li>
  		Select Run... from the Run menu on the menu bar
		<br/><br/>
		<img src="images/run.jpg" width="371" height="399" />
		<br/><br/>
	</li>
	<li>
		Select Eclipse Applicaiton from the list on the left and click on the New button as shown in the following illustration:
		<br/><br/>
		<img src="images/runconfig1.jpg" width="784" height="597" />
		<br/><br/>
	</li>
	<li>
		Click the Run button to launch the Eclipse Application.
		<br/><br/>
		<img src="images/runconfig2.jpg" width="784" height="597" />
		<br/><br/>
	</li>
  </ol>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
