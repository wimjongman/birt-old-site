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
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#requirements">Requirements</a></li>
				<li><a href="#configuring">Configuring Your Eclipse Workbench</a></li>
				<li><a href="#structure">Understanding the CVS Structure</a></li>
				<li><a href="#checkout">Checking out Code from CVS</a></li>
				<li><a href="#building">Building the BIRT Projects</a></li>
				<li><a href="#viewer">Preparing the Viewer</a></li>
				<li><a href="#running">Running BIRT</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This document describes how to get the BIRT source from CVS and build it under
			Eclipse. If you simply want to use BIRT, it is easier to simply
			<a href="http://download.eclipse.org/birt/downloads">download</a> an existing build.
		</p>


		<h2><a name="requirements"></a>Requirements</h2>
		<p>
			In order to successfully build and run the BIRT source, your system must meet the following requirements:
		</p>
		<ul class="midlist">
			<li>
				Eclipse Release 3.0.1 or higher
			</li>
			<li>
				JDK 1.4 or higher
			</li>
			<li>
				GEF 3.0.0 or higher
			</li>
			<li>
				EMF 2.0.1 or higher
			</li>
		</ul>


		<h2><a name="configuring"></a>Configuring Your Eclipse Workbench</h2>
		<p>
			The BIRT source code uses some features that are only present in JDK 1.4. In order for it to successfully build you need to set your compiler compliance to 1.4. You can set this for the entire workbench as follows:
		</p>
		<ol>
			<li>
				From the menu, choose Window&rarr;Preferences.
			</li>
			<li>
				In the tree, expand Java and choose Compiler.
			</li>
			<li>
				On the tabs on the right, choose Compliance and Classfiles.
			</li>
			<li>
				On Compiler compliance level, select 1.4.
			</li>
			<li>
				Unselect Use default compliance settings.
			</li>
			<li>
				On Generated .class files compatibility, select 1.4.
			</li>
			<li>
				On Source compatibility, select 1.4.
				<br><br>
				The following illustration shows these settings.
				<br><br>
				<img src="/birt/phoenix/build/images/compliancepreference.jpg" height="539" width="672">
			</li>
			<li>
				Choose OK.
			</li>
		</ol>


		<h2><a name="structure"></a>Understanding the CVS Structure</h2>
		<p>
			The BIRT modules are available in CVS in the
			<a href="http://dev.eclipse.org/viewcvs/index.cgi/source/?cvsroot=BIRT_Project">source</a>
			folder under
			<a href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=BIRT_Project">/home/birt</a>.
			BIRT consists of the following modules.
			<table>
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
			   <td>Provides
			the data engine implementation and the ODA factory implementation. It
			also contains classes for applying transformations on the data.</td>

			  </tr>
			  <tr>
			   <td>org.eclipse.birt.data.oda</td>
			   <td>ODA public interface: the classes and interfaces used to create data
			   extensions.</td>
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

			   <td>org.eclipse.birt.report.designer.core</td>
			   <td>The core classes of the BIRT report designer, including classes that
				   interact with the BIRT model, and localization and other utility classes</td>
			  </tr>
			  <tr>
			   <td>org.eclipse.birt.report.designer.tests</td>
			   <td>The unit test classes for the designer project</td>
			  </tr>

			  <tr>
			   <td>org.eclipse.birt.report.designer.ui</td>
			   <td>The BIRT report designer</td>
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
		</p>


		<h2><a name="checkout"></a>Checking out Code from CVS</h2>
		<h3>Configure the Repository under Eclipse</h3>
		<ol>
			<li>
				To open the CVS Repository Exploring perspective, choose Window -&gt;
				Open Perspective -&gt; Other. In Select Perspective, select CVS Repository
				Exploring and choose OK.
				<br><br>
				<img src="/birt/phoenix/build/images/selectperspective.jpg" height="420" width="245">
				<br><br>
			</li>
			<li>
				Right-click on the CVS repositories window. From the context menu,
				choose New -&gt; Repository Location.<br><br>
				<img src="/birt/phoenix/build/images/newrepository.jpg" height="361" width="485"><br><br>
			</li>
			<li>
				On Add CVS Repository, set the following values:
				<br><br>
				<table>
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
				<br>
				<img src="/birt/phoenix/build/images/addcvsrepository.jpg" height="551" width="438"><br><br>
			</li>
			<li>
				Choose Finish.
			</li>
		</ol>
		<p>
			A new node appears in the CVS Repositories window.
		</p>
		<h3>Check Out Code for the First Time</h3>
		<ol>
			<li>
				Expand the new node in the repositories tree, then the head node and the source node.
			</li>
			<li>
				Select all the nodes under this node as shown in the image below. On CVS Repositories, right-click and choose
				Check Out from the context menu.<br><br>
				<img src="/birt/phoenix/build/images/checkout.jpg" height="531" width="461"><br><br>
				This choice gets all the BIRT projects from CVS into your Eclipse workspace folder.
			</li>
		</ol>


		<h2><a name="building"></a>Building the BIRT Projects</h2>
		<p>
			Eclipse automatically starts compiling the projects after completing checking
			them out.
			All of the projects except converters should compile without any problems on a
			system that satisfies all the requirements in section 1.
			Compiling the converters project requires the Jasper Reports library. If you need
			to compile this project, download this library from
			<a href="http://jasperreports.sourceforge.net/">http://jasperreports.sourceforge.net/</a>.
		</p>



		<h2><a name="viewer"></a>Preparing the Viewer</h2>
		<p>
			To include all the required project libraries under the viewer's WEB-INF folder, you must build the viewer separately. The viewer project contains an ant build script that performs this task. To use this script, perform the following steps.
		</p>
		<ol>
			<li>
				In Package Explorer, expand the org.eclipse.birt.report.viewer project.
			</li>
			<li>
				Right-click the BuildViewer.xml file. From the context menu, choose Run&rarr;Ant Build.
				<br><br>
				<img src="/birt/phoenix/build/images/runantbuild.jpg" height="682" width="541">
			</li>
			<li>
				In org.eclipse.birt.report.viewer BuildViewer.xml, select the Properties tab.
				Unselect Use global properties specified in the Ant runtime preferences
				as shown in the following illustration.
				<br><br>
				<img src="/birt/phoenix/build/images/runantbuildproperties.jpg" height="560" width="648">
			</li>
			<li>
				This script is configured to work with Eclipse 3.0, GEF 3.0 and EMF 2.0.1. If you are using a newer version, you need to add the properties eclipse.version, gef.version, emf.version respectively.
				<ol>
					<li>
						On the Properties tab, choose Add Property. Add Property appears.
					</li>
					<li>
						In Name, type: eclipse.version
					</li>
					<li>
						In Value, type the version of Eclipse, similar to the following illustration.
						<br><br>
						<img src="/birt/phoenix/build/images/addproperty.jpg" height="174" width="372">
					</li>
					<li>
						Choose OK.
					</li>
					<li>
						Do the same steps for gef.version and emf.version
					</li>
				</ol>
			</li>
			<li>
				Choose Run. The ant build of the viewer runs in the console.
			</li>
		</ol>


		<h2><a name="running"></a>Running BIRT</h2>
		<p>
			Start BIRT by using the Runtime Workbench. This can be done as follows:
		</p>
		<ol>
			<li>
				Select Run... from the Run menu on the menu bar
				<br><br>
				<img src="/birt/phoenix/build/images/run.jpg" height="399" width="371">
			</li>
			<li>
				Select Runtime Workbench from the list on the left and click on the New button as shown in the following illustration:
				<br><br>
				<img src="/birt/phoenix/build/images/neweclipseapplication.jpg" height="560" width="624">
			</li>
			<li>
				Click the Run button to launch the Runtime Workbench.
				<br><br>
				<img src="/birt/phoenix/build/images/runeclipseapplication.jpg" height="615" width="666">
			</li>
		</ol>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
