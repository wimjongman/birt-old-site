<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.2 Milestone 6";
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
	<div align=LEFT style="padding-left: 80px">

		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">Dynamic Crosstab Support</a></li>
				<li><a href="#jump_3">Web Service ODA</a></li>
				<li><a href="#jump_4">Charting Improvements</a></li>
				<li><a href="#jump_5">PPT Emitter</a></li>
				<li><a href="#jump_6">Miscellaneous</a></li>

				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.2 Release Candidate 0 has officially been released to the public.  Below is a description of some of the key features that are now available in the RC0 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">Dynamic Crosstab Support</a></h1>
<p>
Displaying data in a cross tabulated format offers many advantages for data interpretation and analysis, and is often a requirement for information delivery applications.  While this was possible with prior versions of BIRT, the number of columns had to been known beforehand or at the report development stage.   To address this issue, BIRT now offers dynamic cross table and data cube elements.  The data cube element appears in the Data Explorer view and allows the developer to build cubes based on existing data sets.  These cubes are constructed using dimensions and measures as illustrated below.
</p>
<img src="images/2.2/cubebuilder.PNG"><br>
<i>Cube Builder</i>
<p>
The new dynamic cross table element can be placed on the report canvas and bound to the new cube.  The dynamic cross table permits specification of dimensions for the columns and rows while measures are defined at the intersection point.
</p>
<img src="images/2.2/crosstabsimple.png"><br>
<i>Cross Table Element</i>
<p>
In this example, the revenue for each product per year will be generated automatically.  Product line and year are the dimensions while revenue is the measure.  The designer does not have to know the number of Product Lines or the number of years to cross-tabulate.  The cross table element supports familiar BIRT formatting techniques as well.  In addition, each dimension can be sub-aggregated and the level of hierarchy to display can be selected.  
</p>
<img src="images/2.2/grouplevels.png"><br>
<i>Cross Table Element Group Levels</i>
<p>
In this example the crosstab element will display rows for each quarter in a year and will subtotal each, culminating with a grand total presented in the footer.  The table could have been further divided into months by checking the month node in the year dimension within the Show/Hide Group Levels dialog.  
</p>
<img src="images/2.2/crosstabdesign.png"><br>
<i>Example - Cross Table Element</i>
<p>
These totals are also calculated in the column dimension based on product line, with a grand total presented in the last column.  An example of a completed report is shown below.
</p>
<img src="images/2.2/crosstabout.png"><br>
<i>Example - Cross Table Element Output</i>
<p>
The crosstab element also supports filtering and sorting by level, multiple measures, a special date dimension, and horizontal page breaks.
</p>

<br><br>

<h1><a name="jump_3">Web Service ODA</a></h1>
<p>
BIRT has many ways of collecting data for reporting purposes, including pushing objects into the report from session or an application, but the predominant way is using data sources that pull data.  BIRT Data Sources are based on the Open Data Access (ODA) specification which is implemented by the Eclipse Data Tools Platform project.  Currently BIRT supports accessing data from JDBC, XML, flat files and scripted data sources.  With the RC0 release, BIRT now has the capability to retrieve data using a Web Service ODA driver.
</p>
<img src="images/2.2/wsds.png"><br>
<i>Web Services ODA</i>
<p>
This new driver allows the report developer to specify a WSDL URL or file location.  In addition a custom Java connection class can be specified to allow refined control of how the SOAP request is made.  Once the data source is set up the developer can build a web service data set responsible for sending the SOAP request and parsing the SOAP response.
</p>
<img src="images/2.2/soapreq.png"><br>
<i>Web Services ODA - SOAP Request</i>
<p>
In this example the ItemSearch method is selected from the available Amazon web services calls.  The SOAP Request node displays the automatically generated SOAP request.  Any part of the SOAP request can be modified and/or linked to a data set parameter.  Once the SOAP request is constructed the response can be parsed.  The Web Services ODA is built on the XML Data Source technology.  This means that the SOAP response is parsed using XPath syntax.  As illustrated below, the ItemSearch call returns a list of items that match the keyword search.  These items are then parsed and mapped to a data set row.  As with the XML Data Source, the XPath syntax is generated automatically by selecting the nodes in the XML Structure pane, but can be modified manually or programmatically.
</p>
<img src="images/2.2/soapres.png"><br>
<i>Web Services ODA - SOAP Response</i>
<p>
After completing the mapping, standard Data Set features such as filtering, sorting and computed columns can be utilized.  An example of a completed report is shown below.
</p>
<img src="images/2.2/wsreport.png"><br>
<i>Web Services ODA - Example Report</i>

<h1><a name="jump_4">Charting Improvements</a></h1>
<p>
BIRT currently provides scripting support for chart events.  By implementing scripts for these events the developer can modify the behavior and appearance of the chart.  As an example, a user may implement the beforeDrawAxisTitle event handler to modify the label the chart engine renders for the X, Y, and Z axis titles. While this method works well, modifying the chart outside of these events can be somewhat difficult.  To better facilitate programmatic chart modifications, BIRT now supplies a simple Chart API.  This API can be called within the BIRT scripting environment and from the design/report engine API to modify chart properties.
</p>
<img src="images/2.2/chartsimpleapi.png"><br>
<i>Simple Chart API</i><br><br>
<p>
In the above illustration, the beforeFactory event is used to modify the chart title content and color.  See <a href="http://wiki.eclipse.org/index.php/BPS66">BPS 66</a> for more details and the class diagrams.
</p>
<p>
A new BIRT project type is also available.  This project type allows the Chart Engine and Tag library to be published as a Web Project using Web Tools Platform project mechanisms.
</p>
<img src="images/2.2/chartwebwiz.PNG"><br>
<i>New Charting Project Wizard</i>

<p>
The wizard deploys the necessary files and builds the directory structure for a web-based charting application.
</p>
<img src="images/2.2/chartproj.png"><br>
<i>Example Charting Project</i>
<p>
Charting interactivity is now supported in Swing and SWT-based applications, packaging has been improved to include all chart components in a single download, and Tube, Cone, and Pyramid charts are available as new chart types.
</p>

<h1><a name="jump_5">PPT Emitter</a></h1>
<p>
BIRT Reports can be delivered in PDF, HTML, Paginated HTML, XLS, DOC, and Postscript formats.  These output formats are generated using the BIRT emitter extension.  With Release Candidate 0, an emitter has been added to support Microsoft Powerpoint as an output format. 
</p>
<img src="images/2.2/pptemitter.png"><br>
<i>PPT Emitter</i>

<h1><a name="jump_6">Miscellaneous</a></h1>
<p>
Release Candidate 0 contains many additional features and improvements, including a simpler scripting interface to the design engine API, logging per report, performance enhancements, better PDF font support, and improved support for HTML text when outputting to PDF. 
</p>

<br>
<br>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
