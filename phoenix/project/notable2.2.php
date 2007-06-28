<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.2";
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
				<li><a href="#jump_4">BIRT Web Project Wizard</a></li>
				<li><a href="#jump_5">BIRT Tag Library</a></li>
				<li><a href="#jump_6">Open Data Access (ODA) Project Wizards</a></li>
				<li><a href="#jump_7">BIRT Chart Deployment</a></li>
				<li><a href="#jump_8">Charting Improvements</a></li>			
				<li><a href="#jump_9">New Chart Types</a></li>
				<li><a href="#jump_10">New Chart Examples View</a></li>				
				<li><a href="#jump_11">XLS Emitter</a></li>
				<li><a href="#jump_12">Word Emitter</a></li>
				<li><a href="#jump_13">PPT Emitter</a></li>
				<li><a href="#jump_14">Poscript Emitter</a></li>
				<li><a href="#jump_15">BIRT Viewer Changes</a></li>
				<li><a href="#jump_16">Linking Cascading Style Sheets</a></li>
				<li><a href="#jump_17">Report Examples View</a></li>
				<li><a href="#jump_18">Report Parameter Changes</a></li>
				<li><a href="#jump_19">Highlight Style</a></li>
				<li><a href="#jump_20">Flat File Data Source Changes</a></li>
				<li><a href="#jump_21">Joint Data Set Improvement</a></li>
				<li><a href="#jump_22">Dynamic Connection Profiles</a></li>
				<li><a href="#jump_23">Application Context Object pushed to Web Viewer</a></li>
				<li><a href="#jump_24">XML Source Editor</a></li>
				<li><a href="#jump_25">Property Editor Changes</a></li>
				<li><a href="#jump_26">Advanced Properties</a></li>				
				<li><a href="#jump_26">Miscellaneous</a></li>				


				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Europa release, the BIRT team is pleased to announce the availability of BIRT 2.2.  The features in this release expand on the already impressive features of BIRT 2.1 and offer improvements in many areas such as Deployment, Charting, Data Sources, Cross Tables and Emitters.   Below is a description of some of the key features that are now available. 

</p>
<p>
The complete list of features for the final 2.2 release is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">Dynamic Crosstab Support</a></h1>
<p>
Displaying data in a cross tabulated format offers many advantages for data interpretation and analysis, and is often a requirement for information delivery applications.  While this was possible with prior versions of BIRT, the number of columns had to been known beforehand or at the report development stage.   To address this issue, BIRT now offers dynamic cross table and data cube elements.  The data cube element appears in the Data Explorer view and allows the developer to build cubes based on existing data sets.  These cubes are constructed using dimensions and measures as illustrated below.
</p>
<img src="images/2.2/cubedesignerfinal.png"><br>
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
BIRT has many ways of collecting data for reporting purposes, including pushing objects into the report from session or an application, but the predominant way is using data sources that pull data.  BIRT Data Sources are based on the Open Data Access (ODA) specification which is implemented by the Eclipse Data Tools Platform project.  Currently BIRT supports accessing data from JDBC, XML, flat files and scripted data sources.  With the 2.2 release, BIRT now has the capability to retrieve data using a Web Service ODA driver.
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



<h1><a name="jump_4">BIRT Web Project Wizard</a></h1>
<p>Deploying and debugging the BIRT Viewer Example can be cumbersome.  To address this issue the BIRT Team has introduced a new project wizard that makes use of the Web Tools Platform (WTP) project.  The BIRT Web Project will automatically deploy the Viewer to the supported Application Servers.
</p>
<img src="images/2.2/webdeployment.png"><br>
<i>Birt Web Project Wizard</i>

<p>
Using this project type allows the traditional benefits of the J2EE perspective to be used when deploying the BIRT Viewer, such as adding servers, publishing, and debugging the application.
</p>
<img src="images/2.2/webprojjboss.png"><br>
<i>Example Project</i>
<br>

<h1><a name="jump_5">BIRT Tag Library</a></h1>
<p>
A new BIRT tag library and BIRT JSP template are included as part of the BIRT Web Project.
</p>
<img src="images/2.2/newtaglib.png"><br>
<i>JSP BIRT Template</i>
<p>
The new Tag library provides five tags: param, paramDef, parameterPage, report, and viewer.  The BIRT Viewer supports rendering reports in various output formats.  The Viewer uses an AJAX based framework to support complex operations such as table of contents, data exports and page navigation.  The viewer tag supports adding the Viewer to your JSP.  Alternatively, the report tag can be used to display report content without using the AJAX based framework.  When using the report or viewer tags, users are prompted for parameters.  The parameter entry screen is auto generated based on parameter definitions within the report design.  Often developers prefer to design their own parameter entry pages.  Using the parameterPage tag allows a developer to hook a custom parameter page.  The param tag allows setting parameter values, prior to report execution.  
</p>
<img src="images/2.2/birtexampletags.png"><br>
<i>BIRT Tag Selection</i>
<p>
An example of using the new parameterPage tag is illustrated below.  Selecting the submit button will automatically submit the parameterized report to the BIRT Viewer.  Each new Tag supports multiple attributes to allow configuration and customization.
</p>
<img src="images/2.2/exampleparameterpage.png"><br>
<i>BIRT Example Parameter Page</i>
<br><br>
<img src="images/2.2/birttagrequestoroutput.png"><br>
<i>BIRT Custom Parameter Page Output</i>
<br><br>


<h1><a name="jump_6">Open Data Access (ODA) Project Wizards</a></h1>

<p>
Data retrieval is of utmost importance for any reporting tool.  BIRT provides many ways to retrieve data, including JDBC, XML, flat file and scripted data sources.  These data sources are based on the Eclipse Data Tools Platform (DTP) project.  One of the main advantages of using DTP is new data sources can be implemented using extension points provided by the project.  To further ease the development of an ODA driver, the BIRT 2.2 release supports two new project wizards.
</p>
<img src="images/2.2/odawiz1.png"><br>
<i>ODA Project Types</i>
<br>
<p>
The ODA Designer Plug-in Project is used to create the GUI portions of an ODA driver and the ODA Runtime Driver Plug-in Project is used to develop the runtime portion of the driver.  Using the default values for the wizards will produce two plug-in projects that provide a simple working ODA driver.
</p>
<img src="images/2.2/odaprojects.png"><br>
<i>Example Projects</i>
<br>
<p>
The basic interfaces are stubbed out with sample data, allowing you to immediately run the new ODA driver.  Building a driver can be difficult, but the new project types provide an excellent example that should help developers get started creating their own.</p>
<img src="images/2.2/odadataset1.png"><br>
<i>Example Usage</i>
<br>



<h1><a name="jump_7">BIRT Chart Deployment</a></h1>
<p>
BIRT Charting provides many options for chart building and deployment.  Not only can the chart engine be used outside of the BIRT designer, the Chart Builder can be used externally to create xml chart models.  To better facilitate deployment of stand alone charts, BIRT 2.2 now supports a new Chart Tag library and Chart Viewer Servlet.  An example of using the Chart Viewer and the Tag library is now available in the runtime download and is displayed below.
</p>
<img src="images/2.2/charttag.PNG"><br>
<i>Example Source - new Chart Viewer Tag Library</i>
<p>
The Chart tag library supports attributes for height, width and output format.  In addition to these the library contains attributes for the chart model, chart data source, style processor and context.
</p>
<img src="images/2.2/charttag1.PNG"><br>
<i>Example - new Chart Viewer Tag Library</i>
<p>
See <a href="http://wiki.eclipse.org/index.php/BPS43">BPS 43</a> for more details on the Tag attributes and operation of the Chart Viewer Servlet.
</p>
<p>
In addition to the new Chart Viewer, 2.2 offers an improved Chart Engine API which supports a more centralized and accessible framework.  Starting up the chart engine, creating a generator, getting a renderer, or retrieving the serializer can now all be done through a single entry point into the API. 
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

<br>
<br>


<h1><a name="jump_8">Charting Improvements</a></h1>
<p>
BIRT currently provides scripting support for chart events.  By implementing scripts for these events the developer can modify the behavior and appearance of the chart.  As an example, a user may implement the beforeDrawAxisTitle event handler to modify the label the chart engine renders for the X, Y, and Z axis titles. While this method works well, modifying the chart outside of these events can be somewhat difficult.  To better facilitate programmatic chart modifications, BIRT now supplies a simple Chart API.  This API can be called within the BIRT scripting environment and from the design/report engine API to modify chart properties.
</p>
<img src="images/2.2/chartsimpleapi.png"><br>
<i>Simple Chart API</i><br><br>
<p>
In the above illustration, the beforeFactory event is used to modify the chart title content and color.  See <a href="http://wiki.eclipse.org/index.php/BPS66">BPS 66</a> for more details and the class diagrams.
</p>


<p>
Some additional improvements include new icons, better error support, x-axis labels at tick marks, textual values on the y-axis for bubble charts, linear time scales for bar and line series, and the ability to use different aggregate functions per series when grouping data within the chart.  As an example, if a data set exists that contains orders by date, a chart can be built to display a summation of quantity of orders and a count of orders grouped by day.
</p>

<img src="images/2.2/multiaggr.png"><br>
<i>Multiple Aggregate Chart</i>
<p>
Charting interactivity is now supported in Swing and SWT-based applications, packaging has been improved to include all chart components in a single download.
</p>
<br><br>

<h1><a name="jump_9">New Chart Types</a></h1>
<p>
Presenting information graphically is often an effective method for summarizing detail data for use 
in making business decisions.  BIRT offers a very robust charting package that can be used within the Report 
Designer or in a stand-alone fashion. BIRT 2.2 supports thirteen major chart types and many subtypes.  
Major types include bar, line, area, pie, meter, scatter, stock, bubble, difference, gantt, tube, cone and pyramid charts.  
Several of these support subtypes like stacked bar charts, super imposed meter charts, and candlestick stock charts.  
In addition, multiple chart types can be used in conjunction to create sophisticated combinational charts.
<img src="images/2.2/newcharts.JPG">
<br><br>
<img src="images/2.2/risers.png"><br>

</p>
<br>
<i>
Example Charts
</i>
<br>


<h1><a name="jump_10">New Chart Examples View</a></h1>

<p>
BIRT 2.2 now features a new view that provides quick access to the Charting API examples.  These examples include Java code to demonstrate building several chart types using the Chart Engine API (CE API).  This view can be accessed by selecting the “Window->Show View->Other” menu.</p>
<img src="images/2.2/chartexampleviewselect.JPG">
<br>
<i>
Chart Examples View
</i>
<br>
<p>
Once this view is opened, several examples are presented in a tree view.  When an example is selected a preview window illustrates the type of chart that the example constructs.  Selecting the open button will then open the Java snippet in the code window.
</p>

<img src="images/2.2/chartexampleview.JPG">
<br>
<i>
Chart Example
</i>


<h1><a name="jump_11">XLS Emitter</a></h1>
<p>
BIRT provides output in various formats, such as PDF and HTML.  These output formats are generated using BIRT emitters.  The framework provides Eclipse extension points to allow additional emitters to be created.  BIRT 2.2 provides a new XLS emitter.  
</p>
<img src="images/2.2/xlsemitter.PNG"><br>
<i>Prototype XLS Emitter</i>


<h1><a name="jump_12">Word Emitter</a></h1>
<p>
A new Word emitter is available with BIRT 2.2. 
</p>
<img src="images/2.2/wordoutpput.png"><br>
<i>BIRT Word Emitter</i>


<h1><a name="jump_13">PPT Emitter</a></h1>
<p>
An emitter has been added to support Microsoft Powerpoint as an output format. 
</p>
<img src="images/2.2/pptemitter.png"><br>
<i>PPT Emitter</i>

<h1><a name="jump_14">Postscript Emitter</a></h1>
<p>
BIRT 2.2 adds the ability to emit BIRT reports as PostScript documents.  Additionally, the PDF emitter has been improved to support print to fit functionality as illustrated below.  When print to fit is set correctly within the engine the PDF emitter will automatically scale the report output to fit on a single PDF page.
</p>
<img src="images/2.2/printtofit.png"><br>
<i>Print to Fit PDF Setting</i>



<h1><a name="jump_15">BIRT Viewer Changes</a></h1>
<p>
The Table of Contents feature of BIRT allows quick navigation within a report when using the BIRT Viewer. BIRT 2.2 introduces the ability to apply styles to TOC elements.  This can be done in the Table of Contents property for standard elements and in the group editor for groups as shown below.
</p>
<img src="images/2.2/tocstyle1.PNG"><br>
<i>New TOC Style Property</i>
<p>
This change allows the TOC to be formatted similar to report designs.
</p>
<img src="images/2.2/tocstyle2.PNG"><br>
<i>Example TOC</i>
<p>
In addition to these changes the Viewer now supports exporting the report to different formats and server side printing.
</p>
<img src="images/2.2/exportoptions.PNG"><br>
<i>Report Export</i><br>
<p>
<br>
</p>
<img src="images/2.2/serverprint.PNG"><br>
<i>Server Side Printing</i><br>
<p>
Server side printing can be disabled in the web.xml of the Viewer using the following setting.
</p>
<pre>
<code>
	&lt;context-param&gt;
		&lt;param-name&gt;BIRT_VIEWER_PRINT_SERVERSIDE&lt;/param-name&gt;
		&lt;param-value&gt;OFF&lt;/param-value&gt;
	&lt;/context-param&gt;

</code>
</pre>

<p>
The 2.2 Viewer addresses some cleanup issues by implementing a session listener which removes temporary files that are created during a user session.  Additionally the script tag which allows a Text element to contain client side JavaScript now functions as expected in the Web Viewer.  This particular improvement will allow reports to be created which contain additional interactivity.  For example, scripts can be added that rerun the report periodically, display checkboxes interspersed with data values, or perform client side validation of user input.  Presented below is a report that executes every ten seconds.  The check boxes determine a columns visibility with the next execution.
</p>
<img src="images/2.2/script.png"><br>
<i>Using Client Side Script</i>

<h1><a name="jump_16">Linking Cascading Style Sheets</a></h1>
<p>
BIRT Style formatting is based on CSS and allows users to import specific styles to apply formatting to various elements within the report.  This is beneficial in that elements do not have to be formatted individually.  In prior versions of BIRT, developers could import a CSS and apply the styles to elements using the right mouse button context menu.  With BIRT 2.2 this has been enhanced to support linking to external style sheets that reside in the resource folder.  Prior to this improvement if reports shared style sheets with the containing web site and a change was required, the external style sheet would be modified and re-imported into each report.  A new menu item is now available that allows a report design to use a CSS File which sets up the link to the external CSS file.  
</p>
<img src="images/2.2/linkcss1.PNG"><br>
<i>Setting up a link to external CSS</i><br><br>

<img src="images/2.2/linkcss2.PNG"><br>
<i>Linked CSS</i>
<p>
Now changing any of the linked external CSS file’s styles will be automatically reflected in all report designs which make use of this feature. 
</p>


<h1><a name="jump_17">Report Examples View</a></h1>
<p>
BIRT now provides an additional view to quickly open example report designs that illustrate commonly used features.  This new view is accessible in the show views dialog as illustrated below.
</p>
<img src="images/2.2/viewreportexamples.PNG"><br>
<i>New Report Examples View</i>
<p>
The examples contained in this view are categorized by feature and can be opened by selecting the open button in the upper right hand corner of the view.
</p>
<img src="images/2.2/reportexamples.PNG"><br>
<i>Report Example View</i>

<h1><a name="jump_18">Report Parameter Changes</a></h1>
<p>
BIRT provides support for various types of parameters.  Several parameter changes were made in BIRT 2.2 to improve usability and provide additional functionality.  Dynamic parameters for instance allow users to select a parameter value from a list or combo box that is populated with a dataset from the report.  As part of building a report that uses a dynamic parameter a developer is allowed to enter a dataset column to use in the report and another to display to the end user of the report.  For example, the report could use customer number but would allow the report consumer to select the customer name.  This functionality has been extended to provide BIRT expressions in addition to dataset column names.  This can be very useful in cases where the dataset columns do not contain all the information you wish to use or present to the end user of the report.  As an example suppose you wanted to present a dynamic parameter that contained order numbers to the end user.  The end user could then select the order number and get the details for the selection.  This is an effective way of culling the data for detail reporting, but most users are not going to be familiar with order or customer numbers.  Using the new expression capability report developers can add extra information to help the end user get exactly what they need.  In the above example a report developer can now set the parameter value column to be order number and use an expression like dataSetRow["CUSTOMERNAME"] + "---Order:" + dataSetRow["ORDERNUMBER"] for the parameter display text.  
</p>
<img src="images/2.2/dynamicparm1.PNG"><br>
<i>New Expression for Dynamic Parameters</i>
<p>
This produces a much more usable dynamic parameter.
</p>
<img src="images/2.2/dynamicparm2.PNG"><br>
<i>Dynamic Parameter Example</i>
<p>
Additional changes include the addition of a “is required” checkbox.  The “is required” checkbox replaces the “allow null” and “allow blank” checkboxes from earlier versions of BIRT and simplifies parameter creation.  If the “is required” check box is left blank nulls are allowed for all parameter types and blanks are allowed for strings.  If it is checked neither nulls nor blanks are allowed.
</p>


<br>

<h1><a name="jump_19">Highlight Style</a></h1>
<p>
BIRT currently supports many runtime customizations of report content, including visibly on the column, row and element level, mapping, sorting and highlighting.  Prior to this release, highlighting was accomplished by adding rules to an element, such as a row, which instructs the engine to alter the display properties based on runtime conditions.  Highlight rules can now apply styles in addition to setting individual element properties.
</p>
<img src="images/2.2/highlight.png"><br>
<i>Example Row Highlight</i>
<br><br>
<img src="images/2.2/highlightresult.png"><br>
<i>Example Output</i>


<h1><a name="jump_20">Flat File Data Source Changes</a></h1>
<p>
The Flat File ODA driver has been enhanced to support semicolon-separated values (SSV), tab-separated values (TSV), and pipe-separated values (PSV), in addition to the coma-separated values (CSV) currently supported.  With the 2.2 release, the flat file driver also supports adding column types to the data file.
</p>
<img src="images/2.2/psv.png"><br>
<i>New Flat File Driver</i>
<br>

<h1><a name="jump_21">Joint Data Set Improvement</a></h1>
<p>
Joint Data Sets where added to BIRT with the 2.1 release.  Data Sets are one of the fundamental BIRT elements for retrieving data.  Data Sets are typically tied to a container element such as a Table or List element.  This binding strategy only allows one Data Set for each container, although a nested container could use another Data Set.  This presents a problem when users wish to use a container to combine data from two or more Data Sets.  The Joint Data Set was created to address this issue.  Using the Joint Data Set the user can combine data from multiple data sources using a standard Join operation. Originally, only inner, left outer and right outer joins were supported; the 2.2 release adds support for full outer joins.
</p>
<img src="images/2.2/jointdataset.png"><br>
<i>New Joint Data Set</i>
<br>
<br>
<h1><a name="jump_22">Dynamic Connection Profiles</a></h1>
<p>
BIRT currently supports the ability to import connection information from a profile created with the Data Tools Platform project’s Data Source Explorer View.  This is very convenient when sharing of connection credentials across applications is necessary.  Prior to BIRT 2.2 the connection information was imported into the report design.  This has been changed to support linking to the connection profile, ensuring that changes made to profile are reflected in the BIRT Report.  This link is established when a data source is created from a connection profile and the Use externalized properties in the Connection Profile Store checkbox is selected.
</p>
<img src="images/2.2/connectionprofile.PNG"><br>
<i>Dynamic Connection Profile</i>

<h1><a name="jump_23">Application Context Object pushed to Web Viewer</a></h1>
<p>
BIRT currently uses an Application Context object to store engine configuration information, such as image locations, URL configurations when generating hyperlinks and setting image formats for chart generation.  This Application Context object is available throughout the generation and rendering phases of the reporting pipeline and can be manipulated using the Report Engine API (RE API).  Before BIRT 2.2, this object could not be manipulated outside of BIRT unless the RE API was used.  This precluded using the BIRT Web Viewer Example with applications that required manipulation of the Application Context Object.  The 2.2 release now supports passing in this context object from an existing Servlet/JSP page.  This is illustrated in the following code snippet:
</p>
<pre style="font-size: 10pt">
		String contextKey = "appContextKey"; 
		request.setAttribute( "AppContextKey",contextKey );
		HashMap appContext = new HashMap( );
		appContext.put( "key1", "value1" ); 
		request.setAttribute( "AppContextValue",appContext );
		request.getRequestDispatcher( "/frameset?__report=testappcontext.rptdesign").forward(request,response);
</pre>
<p>
This also allows passing application specific information to a customized data driver.  For example, if your application used a proprietary (non JNDI) method for retrieving connections to a data source, this feature would allow you to pass the connection to an extended BIRT JDBC driver.
</p>






<h1><a name="jump_24">XML Source Editor</a></h1>
<p>
BIRT Reports are essentially XML designs.  The Report Editor reads and writes the XML file based on developer choices while in the designer.  The source for this XML file can be viewed and edited directly using the XML Source Editor, within the Report Designer Perspective.  This editor has been revised to leverage the WTP XML Editor.  With this change, the XML Source editor now supports features such as code complete, formatting and error reporting.
</p>
<img src="images/2.2/xmleditoroutline.png"><br>
<i>XML Source Editor</i>


<h1><a name="jump_25">Property Editor Changes</a></h1>
<p>
The look and feel of the BIRT Property Editor has been improved and now provides access to report element properties using a tabbed style editor.  The underlying APIs were also improved to allow reuse and customization of the editor.
</p>
<img src="images/2.2/propertyeditor.png"><br>
<i>BIRT Property Editor</i>


<h1><a name="jump_26">Advanced Properties</a></h1>
<p>
Properties for any element in a BIRT report design can be set using the Property Editor.  These include properties such as size, font, hyperlinks, and visibility.  With 2.2 an advanced page is now available within the property editor that displays all properties for a given report element.
</p>
<img src="images/2.2/advancetab.png"><br>
<i>BIRT Property Editor</i>




<h1><a name="jump_27">Miscellaneous</a></h1>
<p>
BIRT 2.2 contains many additional features and improvements, including a simpler scripting interface to the design engine API, logging per report, performance enhancements, better PDF font support, and improved support for HTML text when outputting to PDF.  A new aggregation builder is also available to help in building reports that total data.  Scripting has also been enhanced with a script node in the outline view to denote where scripts are implemented within a report design. 
</p>

<br>
<br>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>