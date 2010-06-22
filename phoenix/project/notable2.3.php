<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.3";
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
				<li><a href="#jump_2">BIRT JavaScript Debugger</a></li>
				<li><a href="#jump_3">Improved JavaScript Editor</a></li>
				<li><a href="#jump_4">Crosstab Improvements</a></li>
				<li><a href="#jump_5">Multi-View Items</a></li>
				<li><a href="#jump_6">BIRT Chart Improvements</a></li>
				<li><a href="#jump_7">Bidirectional (Bidi) Support</a></li>
				<li><a href="#jump_8">Scripting Improvements</a></li>
				<li><a href="#jump_9">Improved External Style Sheet Support</a></li>
				<li><a href="#jump_10">Horizontal Page Break Support</a></li>
				<li><a href="#jump_11">Library Changes</a></li>
				<li><a href="#jump_12">Multi ResultSet Stored Procedure Support</a></li>
				<li><a href="#jump_13">Project Specific Settings</a></li>
				<li><a href="#jump_14">Connection Profile Wizard</a></li>
				<li><a href="#jump_15">SQL Query Builder Prototype</a></li>
				<li><a href="#jump_16">Copy and Paste Formatting</a></li>
				<li><a href="#jump_17">Preview Extension Point</a></li>
				<li><a href="#jump_18">Miscellaneous</a></li>			
				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Ganymede release, the BIRT team is pleased to announce the availability of BIRT 2.3. The features in this release expand on the already impressive features of BIRT 2.2 and offer improvements in many areas such as Query Building, Charting, Usability, Cross Tables and Emitters. 
Below is a description of some of the key features that are now available. 
</p>
<p>
To review project details for the 2.3 release, see the project plan pages, which are available <a href="http://wiki.eclipse.org/BIRT_Project_Plan">here</a>.</p>

<h1><a name="jump_2">BIRT JavaScript Debugger</a></h1>
<p>
BIRT provides an extensive event model that allows handlers, written in Java or JavaScript, to be called during the generation and presentation of BIRT reports.  These event handlers can be used to modify report content based external code or on data currently being processed by the report engine.  BIRT event handlers, written in Java, can be debugged using the Eclipse Debug perspective.  BIRT provides a Report debug launch configuration to setup the debug session.  This debug method works well, for Java event handlers, but does not provide debugging capabilities for JavaScript event handlers.  This method also launches a new copy of Eclipse to debug the selected report.  With the 2.3 release, BIRT now provides a native JavaScript debugger.  This debugger works with the Report debug launch configuration, which has been improved to support many new features.
</p>
<img src="images/2.3/debugprofile.png"><br>
<i>Report Debug Launch Configuration</i>
<p>
This debug configuration allows the debugger to run within the current instance of Eclipse and supports Java and Java Script events.  The currently loaded BIRT engine can be used to process the report, or a separate instance can be specified using the Engine home setting.  In addition, the specific engine task can be specified to match the deployed environment.  The task type setting supports the RunAndRender, Run, and Render tasks provided by the BIRT engine.  The task type can also be set to perform a Run task followed by a Render task.  By using the Classpath tab, specific Java event handler projects can be added to the classpath to support debugging Java event handlers.
</p>
<p>
The debug configuration can be launched through the Debug perspective, or by selecting the run menu item within the Report Design perspective.
</p>
<img src="images/2.3/rundebugger.png"><br>
<i>Report Debug</i>
<p>
When the debug configuration is launched the report will be processed as described in the launch configuration, and will break on any breakpoints encountered in either the JavaScript or Java event handlers.
</p>
<img src="images/2.3/debugging.png"><br>
<i>Debugging a Report</i>
<p>
The JavaScript debugger supports many of the same types of features provided by the Java debugger.  These include adding expressions, monitoring variables, and stepping into and over code. 
</p>

<h1><a name="jump_3">Improved JavaScript Editor</a></h1>
<p>
Writing event handlers in JavaScript can be accomplished in BIRT by left clicking on a report item and selecting the Script tab.  This will display the JavaScript editor.  A combo box at the top of the editor will list all available events for the selected report item.  The developer can select the desired event and enter the JavaScript that is to be processed when the event occurs.  BIRT 2.3 offers many enhancements to the JavaScript editor including code folding, breakpoints, and script validation.
</p>
<img src="images/2.3/codefoldingandbreakpoints.png"><br>
<i>Improved JavaScript Editor</i>
<p>
The automatic validation feature will help with the development of JavaScript event handlers, allowing some code errors to be discovered prior to the execution of the report.
</p>
<img src="images/2.3/scriptvalidation.png"><br>
<i>JavaScript Validation</i>
<p>
In addition to automatic JavaScript validation within the JavaScript editor, BIRT now provides a validate button within the Expression Builder.  Expressions are small JavaScript snippets that are used throughout the design process to create such items as highlight rules, data filters, default parameter values, and sorting rules.  Clicking the validate button will verify the JavaScript syntax used within a BIRT expression.
</p>
<img src="images/2.3/expressionevaluator.png"><br>
<i>Expression Validation</i>
<p>
In addition to validation of scripts, the error descriptions within BIRT have been improved to better diagnose problems.
</p>
<img src="images/2.3/bettererrorsupport.png"><br>
<i>Better Error Support</i>



<h1><a name="jump_4">Crosstab Improvements</a></h1>
<p>
Displaying data in a cross tabulated format offers many advantages for data interpretation and analysis, and is often a requirement for information delivery applications.  BIRT offers dynamic cross table and data cube elements to meet this requirement.  The data cube element appears in the Data Explorer view and allows the developer to build cubes based on existing data sets.  These cubes are constructed using dimensions and measures. The dynamic cross table element can be placed on the report canvas and bound to a cube.  The dynamic cross table permits specification of dimensions for the columns and rows while measures are defined at the intersection point.  BIRT 2.3 provides many enhanced features for the cross table element.  For example, report elements can now be placed in the cross table header.
</p>
<img src="images/2.3/beforefilter.png"><br>
<i>Crosstab with Header</i>
<p>
Filters, which cull the data displayed in the cross table, can now be applied to measures.  In prior releases of BIRT filters could only be applied to the dimensions.
</p>
<img src="images/2.3/measurefilter.png"><br>
<i>Crosstab Measure Filtering</i>
<p>
In this example, the amount measure is filtered to only show values over 50,000, which results in the following cross table output.
</p>
<img src="images/2.3/afterfilter.png"><br>
<i>Crosstab Measure Filtering Output</i>
<p>
Cross tables can now be set to display empty rows and columns.  In addition, the text to display in an empty cell can also be configured. 
</p>
<img src="images/2.3/emptyrows.png"><br>
<i>Crosstab Empty Rows/Columns configuration</i>
<p>
Measures represent the intersection point for the column and row values and are by default displayed as an alphanumeric value.  New for BIRT 2.3 is the ability to display these values graphically. 
</p>
<img src="images/2.3/crosstabchart.png"><br>
<i>Crosstab Chart View</i>
<p>
When showing the data graphically, the chart used to represent the measure can be configured using the BIRT chart wizard.  For example, the following shows the amount measure presented as a tube chart.
</p>
<img src="images/2.3/crosstabchartoutput.png"><br>
<i>Crosstab Chart View Output</i>
<p>
Individual charts can be displayed for each measure and can be generated against the vertical or horizontal dimension.  Charts can also be used for cells containing total elements.
</p>
<img src="images/2.3/xtabmultichart.png"><br>

<p>
Cross tab elements now support derived measures.  These can be created by using the Derived Measure dialog, which is launched with the menu context item “Add Derived Measure”.  The BIRT Expression builder is used to construct these derived measures and all cross tab bound items are available for use within the expression.
</p>
<img src="images/2.3/derivedmeasure.png"><br>
<i>Crosstab DerivedMeasure</i>
<i>Chart/Crosstab Examples</i>


<h1><a name="jump_5">Multi-View Items</a></h1>
<p>
BIRT currently binds data to report items such as charts, tables, and cross tables.  Data can be retrieved from BIRT datasets or another report item.  This feature has been further refined with this release to allow report items to have multiple views, wherein all views share the same data, filtering, and grouping. The view of the data determines how it is to be displayed and is essentially just another report item sharing the same graphical space and bound data.  Currently only tables and cross tables support this feature and the secondary view must be a chart.
</p>
<p>
The chart view can be created by right clicking on the table or cross table report element and selecting the “Create Chart View” menu item.  
</p>
<img src="images/2.3/createchartview.png"><br>
<i>Table Create Chart View</i>

<p>
This will launch the Chart Wizard.  After the chart is created, the view displayed of the data can be selected using the view tab at the bottom of the report element.
</p>
<img src="images/2.3/multiview.png"><br>
<i>Table Create Chart View Output</i>





<h1><a name="jump_6">BIRT Chart Improvements</a></h1>
<p>
The Charting package continues to be a highlight for BIRT and with this release many improvements have been made.  Some of the improvements are explained in the sections above, which describe multi-view report item support for tables and cross tables.  In addition, grouping and sorting for charts has been improved.  In previous releases of BIRT, categories and optional Y series grouping were available, but sorting these groups could not be done with a separate data value.  With this release of BIRT, a sort on field has been added to both the category and optional Y series grouping dialogs.  Many new grouping unit types are also available, including quarters for date time fields.  The interval for numeric data types can now be set to a decimal value.
</p>
<img src="images/2.3/chartsortingandgrouping.png"><br>
<i>Chart Wizard Data Grouping and Sorting</i>
<p>
Charts, embedded in reports, can now consume data from report cubes.  This is in addition to the existing support for BIRT data sets and report items.
</p>
<img src="images/2.3/multisourcecharts.png"><br>
<i>Chart Editor Wizard</i>
<p>
Charts created from cubes can also be filtered based on the values selected for value and category series as well as the optional Y series grouping.  
</p>
<img src="images/2.3/chartfilter.png"><br>
<i>Chart Filter Example</i>

<p>
With BIRT 2.3 it is now possible to set the start angle of the first slice in a pie chart.  This can be done by using the Pie Rotation slider in the Format Chart tab of the Chart Editor wizard.
</p>
<img src="images/2.3/pierotation.png"><br>
<i>Pie Chart Rotation</i>
<p>
Additional chart examples have also been added the Chart Examples view.
Other chart improvements include ellipsis support for long axis labels.  
</p>



<h1><a name="jump_7">Bidirectional (Bidi) Support</a></h1>
<p>
As a rule, directionality of a whole document or its piece is made consistent with the language it is written in. For instance, predominantly Arabic or Hebrew content should be oriented from right to left (RTL), while that written in English or German - from left to right (LTR).
</p>
<p>
To address this requirement, BIRT 2.3 delivers a new feature - customizable content direction.
</p>
<p>
Direction of the entire report or a particular element can be expressed by "bidiLayoutOrientation" and/or "bidiTextDirection" properties respectively.  These properties are not yet exposed in the GUI layer. To apply them when creating a report in the Designer, use the XML Source editor view.
</p>
<p>
For example to set the direction for an entire report add the “bidiLayoutOrientation” setting to the top level report properties.  Valid values are rtl or ltr.
</p>
<img src="images/2.3/bidireport.png"><br>
<i>Specifying report orientation</i>
<p>
To set the direction for a given element, add the “bidiTextDirection” setting to the properties for the specific report element.
</p>
<img src="images/2.3/bidilabel.png"><br>
<i>Specifying report element text direction</i>
<p>
This feature is extended to all currently supported formats.  Illustrated below is an example in PDF format.
</p>
<img src="images/2.3/bidireportexample.png"><br>
<i>Right to left example report in PDF format</i>
<p>
Direction can be also manipulated programmatically using the Design Engine API, for example:
<pre>
         DesignConfig dconfig = new DesignConfig();
         dconfig.setBIRTHome("/birt/engine");
         Platform.startup( dconfig );
         IDesignEngineFactory factory = (IDesignEngineFactory)
                Platform.createFactoryObject( IDesignEngineFactory.EXTENSION_DESIGN_ENGINE_FACTORY );
         IDesignEngine engine = factory.createDesignEngine( dconfig );
         SessionHandle session = engine.newSessionHandle( ULocale.ENGLISH ) ;
         ReportDesignHandle designHandle = session.createDesign();
         designHandle.setProperty("bidiLayoutOrientation", "rtl");
         ............
         LabelHandle labelHandle = designHandle.getElementFactory( ).newLabel( null );
         labelHandle.setProperty("bidiTextDirection", "ltr");
         designHandle.getBody( ).add( label );
         ............
</pre>
</p>





<h1><a name="jump_8">Scripting Improvements</a></h1>
<p>
BIRT uses the Mozilla Rhino JavaScript engine to implement server side scripting, for event handling and building BIRT expressions.  One of the major improvements for 2.3 is the release of the JavaScript debugger.  In an effort to continue to improve scripting, several report elements have been enhanced to support additional event triggers.  The cross tab element now supports onPrepare, onCreate, and onRender events for the cross tab and for each cell within the cross tab.  Using these new events the rendered cross tab element can be altered in many ways.  The following screenshot illustrates script that alters the cross tab element in its onPrepare method and alters the individual cell element instances based on data within the cross tab.
</p>
<img src="images/2.3/crosstabscript.png"><br>
<i>Cross Tab Script</i><br>
<img src="images/2.3/crosstabscriptview.png"><br>
<i>Cross Tab Script Output Example</i>
<p>
In addition to the new events for the cross tab element, chart scripting has been improved to support beforeDrawMarker and afterDrawMarker events.  Using these events the individual markers for the chart and legend can be altered.  For example, the following screenshot illustrates script that hides legend entry graphics and changes the size, type, and color of the chart markers based on the chart data.
</p>
<img src="images/2.3/markerscripts.png"><br>
<i>Marker Scripts</i>
<p>
Often it is a requirement to write a JavaScript function that is called multiple times.  Currently this is possible within a report by creating the function in the beforeGeneration event and using the reportContext object to store it for global consumption.  With BIRT 2.3 this feature has been extended with a GUI change that allows the developer to add JavaScript files that are located in the resource folder to the report design.  Once the JavaScript file is added, the developer can call functions defined in the file, from BIRT expressions or within event handler implementations.  This button is available within the resources tab of the general properties for the report.
</p>
<img src="images/2.3/addjsbutton.png"><br>
<i>Marker Scripts</i>


<h1><a name="jump_9">Improved External Style Sheet Support</a></h1>
<p>
BIRT currently supports styling of report elements, by either creating a new style that is stored in the report, importing an existing style sheet, which is also stored in the report, or by linking to an external style sheet.  In prior versions of BIRT, if using a linked style sheet, the css file had to be located in the resource folder for the given project.  With the 2.3 release, BIRT provides the ability to link the style sheet at view time, and it can be referenced as a full or relative URL.
</p>
<img src="images/2.3/externalstylesheets.png"><br>
<i>View Time External Style Sheets</i>
<p>
This feature creates a link tag that references the style sheet in the emitted html, and supplies the proper class names for all styled content.
</p>

<h1><a name="jump_10">Horizontal Page Break Support</a></h1>
<p>
When developing reports that contain tables or cross tables that contain many columns, page width may become a problem.  This is especially true, if the report needs to be printed or the developer wants to prevent excessive scrolling.  To address these issues BIRT 2.3 now supports a horizontal page break setting for tables and crosstabs.  To use this feature, within a table select the column(s) you wish a page break to occur and navigate to the Page Break field in the Properties View.  Then select “Always” either for the “Before” or “After” setting.  This setting will instruct the report engine to insert a page break at that column.  To configure this setting for a crosstab element, select the crosstab and navigate to the Column Area tab, then select the Page Break field and add the appropriate page break setting.  Illustrated below is an example of setting the horizontal page break for a table.
</p>
<img src="images/2.3/horizontalpagebreak.png"><br>
<i>Table Horizontal Page Break</i>


<h1><a name="jump_11">Library Changes</a></h1>
<p>
The Library Explorer View has been renamed to Resource Explorer and supports multiple enhancements, including navigating all resources within the specific resource folder.  These include images, scripts, jars and libraries that located in the resource folder.  Many UI changes have also been made to the Resource Explorer view to facilitate better resource management.  These changes include the ability to add or create new content within the resource folder using an improved context menu.  In addition, adding content to libraries has been improved with BIRT 2.3 to support publishing any report element to a library by using the context menu.
</p>
<img src="images/2.3/exporttolibrary.png"><br>
<i>Marker Scripts</i>

<h1><a name="jump_12">Multi ResultSet Stored Procedure Support</a></h1>
<p>
BIRT currently supports calling stored procedures through the JDBC driver.  BIRT 2.3 offers an improvement to the data set editor that now allows the developer to specify a result set number or name when calling stored procedures that return more than one resultset.  Oracle stored procedures that have output parameters that are reference cursors are supported as well.
</p>
<img src="images/2.3/MultiReportResultSetSupport.png"><br>
<i>Multi-Result Set Support</i>

<h1><a name="jump_13">Project Specific Settings</a></h1>
<p>
BIRT uses properties defined in the preferences pages to configure how reports are generated and displayed.  For example, a resource folder setting is used to locate report libraries.  In previous versions of BIRT these settings where treated as global settings for the entire workspace.  Many of these settings can now be configured specifically for a given project.  This will allow multiple projects in the same workspace to configure separate specific settings.  These settings include chart data preview rows, crosstab settings, element names, resource and template folder locations.  Presented below is an example of setting the resource location for a specific BIRT report project.
</p>
<img src="images/2.3/projectspecificsetting.png"><br>
<i>Project Specific Settings</i>

<h1><a name="jump_14">Connection Profile Wizard</a></h1>
<p>
When creating a data source in BIRT, the developer has the option to use a connection profile to retrieve data source properties.  This connection profile can be created with the Data Tools Platform project’s (DTP) Data Source Explorer view and contains the needed information, such as username and password, to connect to the data source.  In order to use this feature, in earlier versions of BIRT, the connection profile needed to be created prior to designing the report.  In this release of BIRT, a new wizard is available that allows these connection profiles to be created within the data source editor.
</p>
<img src="images/2.3/connectionprofile.png"><br>
<i>Connection Profile Wizard</i>



<h1><a name="jump_15">SQL Query Builder Prototype</a></h1>
<p>
BIRT 2.3 delivers a prototype feature that adopts the DTP SQL Query Builder tool (SQB) and use of the DTP Database connectivity framework. The integrated SQB provides both a textual editor and a graphical builder for users to build a SQL query.  User edits made in either the textual or graphical pane are automatically reflected in the other.  It is enabled by a built-in SQL parser, with knowledge of the database catalog found in a connected JDBC data source.  See Bugzilla entry 
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=204344#c9">204344</a> for the known limitations in this version.  This new ODA data source is an early adoption of the SQB feature in DTP.  In order to get early feedback on its usability and functionalities, this feature is introduced as a prototype, and does not claim any backward compatibility support.
</p>
<img src="images/2.3/sqlbuilder.png"><br>
<i>SQL Query Builder Prototype</i>
<p>
To use this feature when creating a data source, select the “create from a connection profile in the profile store” radial in the New Data Source wizard.  Using the connection profile wizards create a new profile or
select the pre-defined connection profile named "BIRT Classic Models Sample Database".   Using the sample database profile is shown below. 
</p>
<img src="images/2.3/createconnection.png"><br>
<i>New Connection Profile - Using predefined sample db</i><br>


<img src="images/2.3/createconnection2.png"><br>
<i>Select Connection Profile - Using predefined sample db</i><br>

<p>
Once the data source is created, create a new data set and the Query Builder Prototype should be available in the Data Set Type drop-down control.
</p>
<img src="images/2.3/createconnection3.png"><br>
<i>New Data Set Wizard</i>



<h1><a name="jump_16">Copy and Paste Formatting</a></h1>
<p>
BIRT supports linking and importing style sheets that can be applied to report elements.  This allows a set of reports to share common formatting.  BIRT 2.3 adds the ability to copy the formatting specified for a report element to another report element.
</p>
<img src="images/2.3/copypasteformat.png"><br>
<i>Copy and Paste Formatting</i>


<h1><a name="jump_17">Preview Extension Point</a></h1>
<p>
BIRT currently uses an application context object to store engine configuration information, such as image locations, URL configurations when generating hyperlinks, and setting image formats for chart generation. This application context object is available throughout the generation and rendering phases of the reporting pipeline.  This object can be manipulated in the Report Engine API and with the use of session variables, before executing a report.  This can be beneficial for storing your custom objects in the application context, which can then be retrieved using BIRT expressions or scripting.  Testing reports that use this feature within the designer can be somewhat difficult, as your custom objects are usually not available at design time.  To address this issue, BIRT now provides a preview extension point.  This extension point allows the developer to create a plug-in that can modify the application context within the designer, before a report is executed.  
</p>
<p>
This extension point provides two methods.  The getName method is used to name your implementation and the getAppContext method is used to retrieve the application context object from your plug-in.  In the following example we implement a preview extension point to add a test string to the application context.
</p>
<img src="images/2.3/previewextpt1.png"><br>
<i>Preview Extension Point</i>
<p>
Once the plug-in is created and deployed to your designer, you can enable it in the preferences.
</p>
<img src="images/2.3/previewextpt2.png"><br>
<i>Preview Extension Point Preference</i>
<p>
The test string can now be referenced in BIRT expressions and scripting within the designer by entering testStr.
</p>



<h1><a name="jump_18">Miscellaneous</a></h1>
<p>
This release contains many other features, including support for parameter retrieval while using a Java scripted data set, support for the includeScripts property in libraries, and support for computed measures.<br>  
In addition to these some other features of note include:
<ul>  
<li>BIRT currently supports extracting of data results using a data extraction task.  In the example viewer, this task is used to export data to various output formats such as CSV.  An extension point is now available that will allow developers to create a plug-in that controls how the extracted data is formatted and stored.</li>
<li>This release also supports generating a report document directly from the report, while in the designer.  To access this feature, select the Generate Document item located within the Run menu.</li>
<li>Borders have also been improved to support Groove, Ridge, Inset, and Outset styles.</li> 
<li>The pdf and postscript emitter algorithms have been improved to reduce the size of these document types.</li>
<li>A new CONCATENATE function is available to the aggregation element, bringing the total number of available functions to thirty.  This function can be used to concatenate row values in table and group footers.</li>
<li>The application context object now offers a setting to allow the JDBC driver classpath to be set at runtime.  This setting ("OdaJDBCDriverClassPath") can be passed in to the report viewer or set using the reportContext object.</li>
</ul><br>
In addition many API changes have been made in the Report Engine, Design Engine, and the Chart Engine to support the new features described above.

</p>

<br><br>



</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
