<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.3 Milestone 5";
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
				<li><a href="#jump_2">BIRT JavaScript Debugger</a></li>
				<li><a href="#jump_3">Improved JavaScript Editor</a></li>
				<li><a href="#jump_4">Copy and Paste Formatting</a></li>
				<li><a href="#jump_5">Crosstab Improvements</a></li>
				<li><a href="#jump_6">Multi-View Items</a></li>
				<li><a href="#jump_7">BIRT Chart Improvements</a></li>
				<li><a href="#jump_8">Project Specific Settings</a></li>
				<li><a href="#jump_9">Connection Profile Wizard</a></li>
				<li><a href="#jump_10">Miscellaneous</a></li>
				
				
				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.3 Milestone 5 has officially been released to the public.  Below is a description of some of the key features that are now available in the M5 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
BIRT provides an extensive event model that allows handlers, written in Java or JavaScript, to be called during the generation and presentation of BIRT reports.  These event handlers can be used to modify report content based external code or on data currently being processed by the report engine.  BIRT event handlers, written in Java, can be debugged using the Eclipse Debug perspective.  BIRT provides a Report debug launch configuration to setup the debug session.  This debug method works well, for Java event handlers, but does not provide debugging capabilities for JavaScript event handlers.  This method also launches a new copy of Eclipse to debug the selected report.  With the 2.2 M5 release, BIRT now provides a native JavaScript debugger.  This debugger works with the Report debug launch configuration, which has been improved to support many new features.
<p>
To review the projects slated for the 2.3 release, see the project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_3_0.php">here</a>.</p>
<h1><a name="jump_2">BIRT JavaScript Debugger</a></h1>
<p>
BIRT provides an extensive event model that allows handlers, written in Java or JavaScript, to be called during the generation and presentation of BIRT reports.  These event handlers can be used to modify report content based external code or on data currently being processed by the report engine.  BIRT event handlers, written in Java, can be debugged using the Eclipse Debug perspective.  BIRT provides a Report debug launch configuration to setup the debug session.  This debug method works well, for Java event handlers, but does not provide debugging capabilities for JavaScript event handlers.  This method also launches a new copy of Eclipse to debug the selected report.  With the 2.2 M5 release, BIRT now provides a native JavaScript debugger.  This debugger works with the Report debug launch configuration, which has been improved to support many new features.
</p>
<img src="images/2.3/debugprofile.png"><br>
<i>Report Debug Launch Configuration</i>
<p>
This debug configuration allows the debugger to run within the current instance of Eclipse and supports Java and Java Script events.  The currently loaded BIRT engine can be used to process the report, or a separate instance can be specified using the Engine home setting.  In addition, the specific engine task can be specified to match the deployed environment.  This task type setting supports the RunAndRender, Run, and Render tasks provided by the BIRT engine.  The task type can also be set to perform a Run task followed by a Render task.  By using the Classpath tab, specific Java event handler projects can be added to the classpath to support debugging Java event handlers.
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
Writing event handlers in JavaScript can be accomplished in BIRT by left clicking on a report item and selecting the Script tab.  This will display the JavaScript editor.  A combo box at the top of the editor will list all available events for the selected report item.  The developer can select the desired event and enter the JavaScript that is to be processed when the event occurs.  BIRT 2.3 M5 offers many enhancements to the JavaScript editor including code folding, breakpoints, and script validation.
</p>
<img src="images/2.3/codefoldingandbreakpoints.png"><br>
<i>Improved JavaScript Editor</i>
<p>
These features will hasten the development of JavaScript event handlers, allowing some code errors to be discovered prior to the execution of the report.
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

<h1><a name="jump_4">Copy and Paste Formatting</a></h1>
<p>
BIRT supports linking and importing style sheets that can be applied to report elements.  This allows a set of reports to share common formatting.  Milestone 5 adds the ability to copy the formatting specified for a report element to another report element.
</p>
<img src="images/2.3/copypasteformat.png"><br>
<i>Copy and Paste Formatting</i>

<h1><a name="jump_5">Crosstab Improvements</a></h1>
<p>
Displaying data in a cross tabulated format offers many advantages for data interpretation and analysis, and is often a requirement for information delivery applications.  BIRT offers dynamic cross table and data cube elements to achieve this requirement.  The data cube element appears in the Data Explorer view and allows the developer to build cubes based on existing data sets.  These cubes are constructed using dimensions and measures. The dynamic cross table element can be placed on the report canvas and bound to a cube.  The dynamic cross table permits specification of dimensions for the columns and rows while measures are defined at the intersection point.  Milestone 5 provides many enhanced features for the cross table element.  For example, report elements can now be placed in the cross table header.
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
Measures represent the intersection point for the column and row values and are by default displayed as a text value.  New for BIRT 2.3 M5 is the ability to display these values graphically. 
</p>
<img src="images/2.3/crosstabchart.png"><br>
<i>Crosstab Chart View</i>
<p>
When showing the data graphically, the chart used to represent the measure can be configured using the BIRT chart wizard.  For example, the following shows the amount measure presented as a tube chart.
</p>
<img src="images/2.3/crosstabchartoutput.png"><br>
<i>Crosstab Chart View Output</i>



<h1><a name="jump_6">Multi-View Items</a></h1>
<p>
BIRT currently binds data to report items such as charts, tables, and cross tables.  Data can be retrieved from BIRT datasets or another report item.  This feature has been further refined with this milestone to allow report items to have multiple views, wherein all views share the same data, filtering, and grouping. The view of the data determines how it is to be displayed and is essentially just another report item sharing the same graphical space and bound data.  Currently only tables and cross tables support this feature and the secondary view must be a chart.
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



<h1><a name="jump_7">BIRT Chart Improvements</a></h1>
<p>
The Charting package continues to be a highlight for BIRT and with this milestone many improvements have been made.  Some of the improvements are explained in the sections above, which describe multi-view report item support for tables and cross tables.  In addition, grouping and sorting for charts has been improved.  In previous releases of BIRT, categories and optional Y series grouping were available, but sorting these groups could not be done with a separate data value.  With this release of BIRT, a sort on field has been added to both the category and optional Y series grouping dialogs.  Many new grouping unit types are also available, including quarters for date time fields.  The interval for numeric data types can now be set to a decimal value.
</p>
<img src="images/2.3/chartsortingandgrouping.png"><br>
<i>Chart Wizard Data Grouping and Sorting</i>
<p>
Additional chart examples have also been added the Chart Examples view.
</p>

<h1><a name="jump_8">Project Specific Settings</a></h1>
<p>
BIRT uses properties defined in the preferences pages to configure how reports are generated and displayed.  For example, a resource folder setting is used to locate report libraries.  In previous versions of BIRT these settings where treated as global settings for the entire workspace.  Many of these settings can now be configured specifically for a given project.  This will allow multiple projects in the same workspace to configure separate specific settings.  These settings include chart data preview rows, crosstab settings, element names, resource and template folder locations.  Presented below is an example of setting the resource location for a specific BIRT report project.
</p>
<img src="images/2.3/projectspecificsetting.png"><br>
<i>Project Specific Settings</i>

<h1><a name="jump_9">Connection Profile Wizard</a></h1>
<p>
When creating a data source in BIRT, the developer has the option to use a connection profile to retrieve data source properties.  This connection profile can be created with the Data Tools Platform project’s (DTP) Data Source Explorer view and contains the needed information, such as username and password, to connect to the data source.  In order to use this feature, in earlier versions of BIRT, the connection profile needed to be created prior to designing the report.  In this release of BIRT, a new wizard is available that allows these connection profiles to be created within BIRT.  The connection profile can be created from within the BIRT data source wizard.
</p>
<img src="images/2.3/connectionprofile.png"><br>
<i>Connection Profile Wizard</i>

<h1><a name="jump_10">Miscellaneous</a></h1>
<p>
Milestone 5 contains many other features, including support for parameter retrieval while using a Java scripted data set, support for the includeScripts property in libraries, data engine changes to support cached result sets, and support for computed measures.  In addition many API changes have been made in the Report Engine, Design Engine, and the Chart Engine to support the new features described above.
</p>



<br><br>



</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
