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
					<h1 class="eclipse-title-main">Documentation</h1>
					
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
					<p>Import iText 1.3 and iTextAsian into the com.lowagie.itext/lib directory.</p>
					<img src="/birt/test/img/itext.jpg" />
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Requirements</li>
						<li>Configuring Eclipse</li>
						<li>Understanding the CVS Structure</li>
						<li>Checking out Code from CVS</li>
						<li>Checking out the Data Tools Projects</li>
						<li>Import Additional Files</li>
						<li>Preparing the Viewer</li>
						<li>Running BIRT</li>
						<li>Instructions for Running JUnit Tests</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Building BIRT</h2>
					<p>This guide describes how to get the BIRT source and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build. The topics included are:
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Requirements</li>
						<li>Configuring Eclipse</li>
						<li>Understanding the CVS Structure</li>
						<li>Checking out Code from CVS</li>
						<li>Checking out the Data Tools Projects</li>
						<li>Import Additional Files</li>
						<li>Preparing the Viewer</li>
						<li>Running BIRT</li>
						<li>Instructions for Running JUnit Tests</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Building BIRT</h2>
					<p>This guide describes how to get the BIRT source and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build. The topics included are:
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Requirements</li>
						<li>Configuring Eclipse</li>
						<li>Understanding the CVS Structure</li>
						<li>Checking out Code from CVS</li>
						<li>Checking out the Data Tools Projects</li>
						<li>Import Additional Files</li>
						<li>Preparing the Viewer</li>
						<li>Running BIRT</li>
						<li>Instructions for Running JUnit Tests</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Building BIRT</h2>
					<p>This guide describes how to get the BIRT source and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build. The topics included are:
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Requirements</li>
						<li>Configuring Eclipse</li>
						<li>Understanding the CVS Structure</li>
						<li>Checking out Code from CVS</li>
						<li>Checking out the Data Tools Projects</li>
						<li>Import Additional Files</li>
						<li>Preparing the Viewer</li>
						<li>Running BIRT</li>
						<li>Instructions for Running JUnit Tests</li>
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