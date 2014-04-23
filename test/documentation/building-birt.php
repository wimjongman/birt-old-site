<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/test/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "Documentation";
		$metaKeywords	= "Eclipse Keywords";
		$metaAuthor		= "";
		$metaDescription = "Eclipse Super Description for SEO in da House";
		$ogTitle		= "This is the OG Super Title";
		$ogImage		= "http://www.actuate.com/images/logo.png";
		$ogDescription  = "This is the ogDescription to be displayed in share options.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ** *Only usable values are 'index', 'noindex'
		$robotsFollow	= "follow"; // ***Only usable values are 'follow', 'nofollow'
		$canonicalTag	= ""; //this is a canonical tag used for duplicate content *** DO NOT USE UNLESS YOU KNOW WHAT YOU ARE DOING *** Default is blank! ex:http://www.actuate.com/products/
	 	
	 	# Generate Meta Info
		echo $PagePart->getMetaInfo($metaTitle, $metaKeywords, $metaAuthor, $metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag);
	 ?>
</head>	

<body>

<?php echo $PagePart->getAfterBody(); ?>

<div style="background-color:#f4f4f4;">
	<div class="content-area">
		<div class="content-area-inner" style="padding-top:40px;">
			
			<div class="actu-eclipse-side-menu">
				
				<?php echo $PagePart->getSideMenu(); ?>

			</div>


			<div class="dev-main eclipse-main">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">Building BIRT</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="install.php">Installation Guide</a></li>
		                    <li><a href="tutorial/">Design Tutorial</a></li>
		                    <li><a href="integrating/">Integrating BIRT</a></li>
		                    <li><a href="sample-database.php">Sample Database</a></li>
		                    <li><a href="reference.php">Technical Reference</a></li>
		                    <li><a href="building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Introduction</h2>
					<p>This document describes how to get the BIRT source from CVS and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build.</p>
					<p>Building BIRT 2.1.1 is described below.<br />
					For the latest instructions, see the <a href="http://wiki.eclipse.org/BIRT/FAQ/Birt_Project#Q:_How_do_I_build_BIRT.3F">BIRT Wiki</a>.</p>
					
					<h2 class="topic-section-header padding-top-small">Requirements</h2>
					<p>Download the BIRT all in one designer. It is listed under "Report Designer Full Eclipse Install" on the download page. It is possible to build BIRT with an existing Eclipse install, but this method is the quickest, as all the required files, with the exception of iText.jar and iTextAsian.jar are present.</p>
					
					<h2 class="topic-section-header padding-top-small">Configuring Eclipse</h2>
					<p>The BIRT source code uses some features that are only present in JDK 1.4.2 or later. In order for it to successfully build you need to set your compiler compliance to 1.4. Make sure this is not set to 5.0. You can set this for the entire workbench as follows:
					<ul class="eclipse-list">
						<li>From the menu, choose Window->Preferences.</li><br />
						<li>In the tree, expand Java and choose Compiler.</li><br />
						<li>On Compiler compliance level, select 1.4.</li><br />
						<li>Unselect Use default compliance settings.</li><br />
						<li>On Generated .class files compatibility, select 1.4.</li><br />
						<li>On Source compatibility, select 1.4.<br /><br />
							The following illustration shows these settings.<br /><br />
							<img src="/birt/test/img/compliancepreference.jpg" />
						</li><br />
						<li>Choose OK.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Understanding the CVS Structure</h2>
					<p>The BIRT modules are available in CVS in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/?cvsroot=BIRT_Project">source</a> folder under <a href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=BIRT_Project">/home/birt</a>. BIRT has over 150 modules, some of these are described below.
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
  <td>Chart engine extension plugin containing SVG device renderer's implementation</td>
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
					
					<h2 class="topic-section-header padding-top-small">Checking out Code from CVS</h2>
					<h3>Configure the Repository Under Eclipse</h3>
					<p>
					<ul class="eclipse-list">
						<li>To open the CVS Repository Exploring perspective, choose Window -> Open Perspective -> Other. In Select Perspective, select CVS Repository Exploring and choose OK.<br /><br />
						<img src="/birt/test/img/selectperspective.jpg" /></li><br />
						<li>Right-click on the CVS repositories window. From the context menu, choose New -> Repository Location.<br /><br />
						<img src="/birt/test/img/newrepository.jpg" /></li><br />
						<li>On Add CVS Repository, set the following values:<br /><br />
						<table border="1"><tbody>
						<tr><td>Host</td><td>dev.eclipse.org</td></tr>
						<tr><td>Repository path</td><td>/cvsroot/birt</td></tr>
						<tr><td>User</td><td>anonymous</td></tr>
						<tr><td>Connection type</td><td>pserver</td></tr>
						<tr><td>Use Default Port</td><td>Selected</td></tr>
						</tbody></table>
						<img src="/birt/test/img/addcvsrepository.jpg" /></li><br />
						<li>Choose Finish</li>
					</ul>
					<p>A new node appears in the CVS Repositories window.</p>
					
					<h3>Check Out Code for the First Time</h3>
					<p>
					<ul class="eclipse-list">						
						<li>Expand the new node in the repositories tree.</li><br />
						<li>Select Versions</li><br />
						<li>Select source</li><br />
						<li>Open the source BIRT_2_1_1_Release_20060927 node<br /><br />
						<img src="/birt/test/img/projects.jpg" /></li><br />
						<li>Select all the nodes under this node, with the exception of the these projects:<br /><br />
							org.eclipse.birt.report.data.oda.flatfile<br />
							org.eclipse.birt.report.data.oda.flatfile.nl<br />
							org.eclipse.birt.report.data.oda.flatfile.ui<br />
							org.eclipse.birt.report.data.oda.flatfile.ui.nl<br />
							org.eclipse.birt.report.tests.engine<br />
							org.eclipse.birt.report.tests.model<br />
							org.eclipse.birt.report.tests.viewer<br />
							org.eclipse.birt.test.performance<br />
							org.eclipse.birt.tests.core<br />
							org.eclipse.birt.tests.data
						</li><br />
						<li>On CVS Repositories, right-click and choose Check Out from the context menu.<br /><br />
						This will get the BIRT projects from CVS and load them into your Eclipse workspace folder. This will take some time. Once finished, change to the Java perspective.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Import Additional Files</h2>
					<p>Import <a href="http://sourceforge.net/projects/itext/files/" target="_blank">iText 1.3</a> and <a href="http://sourceforge.net/projects/itext/files/" target="_blank">iTextAsian</a> into the com.lowagie.itext/lib directory.</p>
					<img src="/birt/test/img/itext.jpg" /><br /><br />
					<p>If your Eclipse environment is not setup to build automatically, build the source now. This designer should build correctly. If you wish to build the Web Viewer proceed to the next section. Do this if you wish to make changes to the deployable Web Viewer Example.</p>
					
					<h2 class="topic-section-header padding-top-small">Preparing the Viewer</h2>
					<p>The viewer project contains an ant build script that builds the Web Viewer. When executed it will create a birt_web directory in the root of the viewer project. This directory can then be exported and deployed in a similar fasion to the Web Viewer example in the Report Engine download. To use this script, perform the following steps.
					<ul class="eclipse-list">
						<li>Copy the following plugins from the all in one download to the source directory of the workspace you are currently using to build BIRT.<br /><br />
							org.apache.batik.pdf_1.6.0.v20060623-1511<br />
							org.apache.batik_1.6.0.v20060623-1511<br />
							org.apache.xerces_2.8.0.v20060815-0630<br /><br />
							When copying these plugins rename them to the following:<br /><br />
							org.apache.batik.pdf<br />
							org.apache.batik<br />
							org.apache.xerces<br /><br />
							eg. If you have checked the projects out to c:/work/birt2.1.1/source and your all in one distribution is located under c:/birt2.1.1, copy the three plugins from c:/birt2.1.1/eclipse/plugins to c:/work/birt2.1.1/source and rename them as stated above.
						</li><br />
						<li>In Package Explorer, expand the org.eclipse.birt.report.viewer project.</li><br />
						<li>Right-click the BuildWebViewer.xml file. From the context menu, choose Run -> Ant Build....<br /><br />
						<img src="/birt/test/img/antbuild.jpg" /></li><br />
						<li>In the org.eclipse.birt.report.viewer BuildViewer.xml, select the Properties tab. Unselect Use global properties specified in the Ant runtime preferences as shown in the following illustration. Add the eclipse.home property and set it to your all in one Eclipse install directory.<br /><br />
						<img src="/birt/test/img/eclipsehome.jpg" /></li><br />
						<li>Choose Run. The ant build of the Web Viewer runs in the console. This will create the birt_web directory within the project that contains the Web Viewer. Refresh the viewer project and the birt_web directory will be displayed.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Running BIRT</h2>
					<p>Start BIRT by running it as an Eclipse Application. This can be done as follows:
					<ul class="eclipse-list">
						<li>Select Run... from the Run menu on the menu bar</li><br />
						<li>Select Eclipse Applicaiton from the list on the left and click on the New button as shown in the following illustration:<br /><br />
						<img src="/birt/test/img/runconfig1.jpg" /></li><br />
						<li>Click the Run button to launch the Eclipse Application. In the new Eclipse application start a new BIRT project and build reports as usual. You should be able to step through and debug the BIRT code.<br /><br />
						<img src="/birt/test/img/runconfig2.jpg" /></li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Instructions for Running JUnit Tests</h2>
					<p>
					<ul class="eclipse-list">
						<li>Open debug perspective</li><br />
						<li>click on Run --> Run --> Double click on JUnit Plug-in Test , this will create a new configuration. In the window, you can select among different options.<br /><br />
							To run all tests in a selected project, click on the option 'Run all tests in selected project,package or source folder'. On the right side, select the package to run tests for by clicking on Search and selecting a required source folder.<br /><br />
							In this example, we will run tests in org.eclipse.birt.report.engine project. So lets name this configuration as ReportEngineTests in the 'Name:' box on the top of the configuration window. And then click 'Apply' to save the changes.<br /><br />
							<img src="/birt/test/img/runcreateconfig.jpg" /><br /><br />
							To run the test, in the ReportEngineTests window, click on 'Run'. This will run all tests in org.eclipse.birt.report.engine.<br /><br />
							<img src="/birt/test/img/runtests75.jpg" /><br /><br />
							If you want to see the progress of the tests, look at the JUnit window.<br /><br />
							The results for birt2_1_1_Release_20060927 should be 613 tests ran, with 2 failures and no errors. 
						</li>
					</ul>
					</p>
					
				</div>
			</div>

		</div>
	</div>

	
	<footer>
		<?php echo $PagePart->getFooter(); ?>
	</footer>
</div>
</body>
</html>