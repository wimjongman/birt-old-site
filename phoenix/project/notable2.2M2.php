<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.2 Milestone 2";
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
	<div align=LEFT style="padding-left: 185px">

		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">BIRT Web Project Wizard</a></li>
				<li><a href="#jump_3">Open Data Access (ODA) Project Wizards</a></li>
				<li><a href="#jump_4">New Chart Riser Types</a></li>
				<li><a href="#jump_5">Flat File Data Source Changes</a></li>
				<li><a href="#jump_6">Joint Data Set Improvement</a></li>
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.2 Milestone 2 has officially been released to the public.  Below is a description of some of the key features that are now available in the M2 build.  Keep in mind, as with all milestone releases, the product continues to evolve.
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">BIRT Web Project Wizard</a></h1>
<p>Deploying and debugging the BIRT Viewer Example can be cumbersome.  To address this issue the BIRT Team has introduced a new project wizard that makes use of the Web Tools Platform (WTP) project.  The BIRT Web Project will automatically deploy the Viewer to the supported Application Servers.
</p>
<img src="images/2.2/webdeployment.png"><br>
<center><i>Birt Web Project Wizard</i></center>

<p>
Using this project type allows the traditional benefits of the J2EE perspective to be used when deploying the BIRT Viewer, such as adding servers, publishing, and debugging the application.  Future milestones will expand on this integration to add BIRT Tag libraries to customize parameter entry and report viewing capabilities.
</p>
<img src="images/2.2/webprojjboss.png"><br>
<center><i>Example Project</i></center>
<br>

<h1><a name="jump_3">Open Data Access (ODA) Project Wizards</a></h1>

<p>
Data retrieval is of utmost importance for any reporting tool.  BIRT provides many ways to retrieve data, including JDBC, XML, flat file and scripted data sources.  These data sources are based on the Eclipse Data Tools Platform (DTP) project.  One of the main advantages of using DTP is new data sources can be implemented using extension points provided by the project.  To further ease the development of an ODA driver the Milestone 2 release supports two new project wizards.
</p>
<img src="images/2.2/odawiz1.png"><br>
<center><i>ODA Project Types</i></center>
<br>
<p>
The ODA Designer Plug-in Project is used to create the GUI portions of an ODA driver and the ODA Runtime Driver Plug-in Project is used to develop the runtime portion of the driver.  Using the default values for the wizards will produce two plug-in projects that provide a simple working ODA driver.
</p>
<img src="images/2.2/odaprojects.png"><br>
<center><i>Example Projects</i></center>
<br>
<p>
The basic interfaces are stubbed out with sample data, allowing you to immediately run the new ODA driver.  Building a driver can be difficult, but the new project types provide an excellent example that should help developers get started creating their own.</p>
<img src="images/2.2/odadataset1.png"><br>
<center><i>Example Usage</i></center>
<br>



<h1><a name="jump_4">New Chart Riser Types</a></h1>
<p>
The charting package continues to add new features and improve on its many capabilities.  The M2 release includes new Cone and Tube riser types.
</p>
<img src="images/2.2/risers.png"><br>
<center><i>New Risers</i></center>
<br>
<p>
Cone risers offer support for 2D, 2D with depth and 3D, while Tube risers support 2D with depth and 3D.  In addition to new riser support, data point labels have been enhanced to support additional label values based on chart types such as bubble size and bubble value for Bubble charts.
</p>

<h1><a name="jump_5">Flat File Data Source Changes</a></h1>
<p>
The Flat File ODA driver has been enhanced to support semicolon-separated values (SSV), tab-separated values (TSV), and pipe-separated values (PSV), in addition to the coma-separated values (CSV) currently supported.  With the Milestone 2 build the flat file driver also supports adding column types to the data file.
</p>
<img src="images/2.2/psv.png"><br>
<center><i>New Flat File Driver</i></center>
<br>

<h1><a name="jump_6">Joint Data Set Improvement</a></h1>
<p>
Joint Data Sets where added to BIRT with the 2.1 release.  Data Sets are one of the fundamental BIRT elements for retrieving data.  Data Sets are typically tied to a container element such as a Table or List element.  This binding strategy only allows one Data Set for each container, although a nested container could use another Data Set.  This presents a problem when users wish to use a container to combine data from two or more Data Sets.  The Joint Data Set was created to address this issue.  Using the Joint Data Set the user can combine data from multiple data sources using a standard Join operation. Originally, only inner, left outer and right outer joins were supported; the M2 build adds support for full outer joins.
</p>
<img src="images/2.2/jointdataset.png"><br>
<center><i>New Joint Data Set</i></center>
<br>
<br>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
