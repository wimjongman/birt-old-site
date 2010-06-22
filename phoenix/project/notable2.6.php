<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.6";
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
				<li><a href="#jump_2">Charting Improvements</a></li>
				<li><a href="#jump_3">Charting Improvements: Polar/Radar Chart</a></li>
				<li><a href="#jump_4">Charting Improvements: Palette Hashing</a></li>				
				<li><a href="#jump_5">Charting Improvements: Pie Chart Rotation</a></li>
				<li><a href="#jump_6">Charting Improvements: Chart Background Images</a></li>
				<li><a href="#jump_7">Charting Improvements: Sort Locale and Strength</a></li>
				<li><a href="#jump_8">*Charting Improvements: Outside Axis Range</a></li>
				<li><a href="#jump_9">*Charting Improvements: Better Cube Filter Support</a></li>
				<li><a href="#jump_10">*Charting Improvements: Native PDF Drawing from SVG</a></li>
				<li><a href="#jump_11">Overridden Library Properties</a></li>				
				<li><a href="#jump_12">*Viewtime-value-of</a></li>
				<li><a href="#jump_13">*SQL Query Builder</a></li>		
				<li><a href="#jump_14">*Designer Classpath Configuration</a></li>
				<li><a href="#jump_15">*Sorting Enhancement</a></li>
				<li><a href="#jump_16">*Crosstab Cheat Sheet and Template</a></li>				
				<li><a href="#jump_17">Multiple Resource Files</a></li>
				<li><a href="#jump_18">ODA Context Sensitive Help</a></li>
				<li><a href="#jump_19">Miscellaneous</a></li>	
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Helios release, the BIRT team is pleased to announce the availability of BIRT 2.6.  This release encompasses over five hundred bugzilla entries, refines many of the existing features within BIRT, and adds new capabilities. This document describes the significant new features that are available within the 2.6 release.
</p>
<p>
Many of the new features where also back ported to BIRT 2.5.2.  These features are noted with an asterisk in the feature header.
</p>
<p>
To review the projects included in the 2.6 release, see the project plan, which is available <a href=" http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/birt/project/plan/birt_project_plan_2_6.xml">here</a>.
</p>
<h1><a name="jump_2">Charting Improvements</a></h1>
<p>
BIRT provides a very extensible Chart Engine with support for thirteen main chart types and many subtypes.  These charts can be displayed in many image formats and SVG.  The engine also supports interactivity allowing such things as drill through to details, multiple hyper linking and browser side scripting.  With the release of BIRT 2.6 the charting package has been further refined and enhanced.
</p>
<p>
Some of the more significant chart changes are listed below.  Other chart improvements not documented below include proper chart rendering on AIX, horizontal scroll bar support within the chart builder, better jpg quality and proper data inheritance when nesting charts in existing containers.
</p>
<h1><a name="jump_3">Charting Improvements: Polar/Radar Chart</a></h1>
<p>
Extensibility is a key advantage when using any Eclipse based product, and the BIRT Chart Engine contains many extension points that allow the package to be enhanced and customized.  These include adding new chart types, output formats, and data processors.  The framework has been extended in this release of BIRT to better support using these extension points.  Building on some of the extension points is a new Radar/Polar style chart type.  
</p>
<img src="images/2.6/radarcharttype.png"><br>
<i>Radar/Polar Chart Type</i>
<p>
This chart type supports standard radar style, bulls-eye, and spider charts.  Series points can be plotted as disconnected lines, filled and unfilled polygons, or as single points when using optional grouping.
</p>
<img src="images/2.6/radarout.png"><br>
<i>Radar/Polar Examples</i>
<p>
To better support the community the source for this chart type is also available in the org.eclipse.birt.chart.examples plugin as an illustrative example on how to add your own chart types to BIRT.
</p>
<h1><a name="jump_4">Charting Improvements: Palette Hashing</a></h1>
<p>
The Chart Palette has also been improved.  Currently the palette supports adding custom colors, gradients, images, and positive/negative combination entries.  With this release, pattern support has been added to the palette.
</p>
<img src="images/2.6/chartpalette.png"><br>
<i>Chart Palette</i>
<p>
Using the new pattern editor you can select foreground and background colors.  You can also choose a predefined pattern or create your own.
</p>
<img src="images/2.6/patterneditor.png"><br>
<i>Palette Pattern Editor</i>
<img src="images/2.6/patternouts.png"><br>
<i>Pattern Examples</i>
<h1><a name="jump_5">Charting Improvements: Pie Chart Rotation</a></h1>
<p>
Currently a report designer can set the start angle of a pie chart, which will dictate where the first slice of the chart will be rendered.  These charts have been further enhanced to allow the direction in which the slices are rendered to be set to clockwise or counter clockwise.
</p>
<img src="images/2.6/pieclockwise.png"><br>
<i>Pie Chart Rotation Direction</i>

<h1><a name="jump_6">Charting Improvements: Chart Background Images</a></h1>
<p>
Chart Background images can now be set to not repeat using standard BIRT styles.
</p>
<img src="images/2.6/chartimagebackground.png"><br>
<i>Chart Background Images</i>

<h1><a name="jump_7">Charting Improvements: Sort Locale and Strength</a></h1>
<p>
When configuring chart data in the chart builder, the designer can specify sort order and sort column on the category and optional grouping data points.  This allows a chart to be grouped by one field and sorted by another.  While this feature works well, in previous releases of BIRT it was not possible to sort based on a different locale or sort strength.  With this release both options have been added to chart sorting.
</p>
<img src="images/2.6/sortstr.png"><br>
<i>Sort Locale and Strength</i>


<h1><a name="jump_8">*Charting Improvements: Outside Axis Range</a></h1>
<p>
When manually setting a scale for a bar/tube/pyramid/cone chart users can now select the Show values outside Axis range and a visual indicator will be rendered when series values fall outside of the axis range. 
</p>
<img src="images/2.6/outsiderange.png"><br>
<i>Outside Range Indication</i>

<h1><a name="jump_9">*Charting Improvements: Better Cube Filter Support</a></h1>
<p>
When using a data cube as a data source for a chart, filters can be applied to all dimensions and measures defined in the cube.  In prior versions of BIRT filtering was only available to dimensions and measures used in the chart.
</p>
<img src="images/2.6/chartcubefiltering.png"><br>
<i>Chart Cube Filtering</i>

<h1><a name="jump_10">*Charting Improvements: Native PDF Drawing from SVG</a></h1>
<p>
If using the report engine API, rendering of PDF files now supports native PDF drawing commands when emitting a report that contains an SVG chart.  This will result in a larger PDF, but charts will be presented in much more detail.  To enable this feature simply add SVG to the supported image format string using the PDFRenderOption.
</p>
<code>
<pre>
		PDFRenderOption options = new PDFRenderOption();
		options.setOutputFileName("output/resample/topn.pdf");
		options.setSupportedImageFormats("PNG;GIF;JPG;BMP;SWF;SVG");
		options.setOutputFormat("pdf");
</pre>
</code>
<p>

</p>
<h1><a name="jump_11">Overridden Library Properties</a></h1>
<p>
BIRT provides library support for commonly used report items that need to be shared across many reports.  These items can include such things as logos, data sources, charts, or standard labels.  When incorporating report items provided by a library, the report designer can further customize the specific component for a particular design.  In previous releases of BIRT it was not obvious which items had been modified.  In the 2.6 release of BIRT, the outline view has been enhanced to give a visual indication of report items that are linked to a library which have been further customized by the report designer.  In addition, in the general properties of the item, the user is given an indication as well as a revert button to remove customized properties on the report item.
</p>
<img src="images/2.6/override.png"><br>
<i>Overridden Library Components</i>

<h1><a name="jump_12">*Viewtime-value-of</a></h1>
<p>
When using a text report item, a new tag is available to allow report developers to enter expressions that are evaluated at render time.  This tag (entered like &lt;viewtime-value-of&gt;expression&lt;/viewtime-value-of&gt; is similar to the existing value-of tag.  The value-of tag is evaluated at generation time of the report.  The viewtime-value-of tag is evaluated at render time.  Suppose the expression for a text report item is entered as:
</p>
<code>
<pre>
&lt;VALUE-OF&gt;new Date();&lt;/VALUE-OF&gt;
</pre>
</code>
<p>
The text element will be populated with the current date when the report is executed.  If using the viewer or a run task in the Report Engine API, a report document will be created.  If this report document is rendered at a later date the following expression will display the render date.
</p>
<code>
<pre>
&lt;VIEWTIME-VALUE-OF&gt;new Date();&lt;/VIEWTIME-VALUE-OF&gt;
</pre>
</code>
<p>
This feature can also be used to display pageNumber and totalPage within the report body as opposed to or in conjunction with the auto text element on the master page.
</p>
<h1><a name="jump_13">*SQL Query Builder</a></h1>
<p>
The SQL Query Builder is now directly available without creating a connection profile.  When adding a new data source, the query builder is listed as one of the data sources available.
</p>
<img src="images/2.6/newdatasource.png"><br>
<i>SQB Data Source</i>
<p>
After selecting the Query Builder data source you are prompted with a list of available databases.  Once you select the type of database you can then specify the specific driver and connection properties that will be used.
</p>
<img src="images/2.6/driver.png"><br>
<i>SQB Data Source Driver</i>
<p>
One of the advantages to using this driver is that the jar location of the driver is a data source property and can be changed using Property Binding or an Event Handler Script.
</p>
<code>
<pre>
&lt;property name="jarList"&gt;C:\birt\mysql\mysql-connector-java-5.0.4-bin.jar&lt;/property&gt;
</code>
</pre>
<p>
After the data source is created, you create a dataset just like you would with any other BIRT data source.  The editor allows graphic query creation as shown in the following image.
</p>
<img src="images/2.6/newdataset.png"><br>
<i>SQB Data Set</i>


<h1><a name="jump_14">*Designer Classpath Configuration</a></h1>
<p>
In prior releases of BIRT, the classloader while in the designer would search all projects within the workspace to locate a class that was used within the design.  This would happen for classes invoked used in expressions or JavaScript event handlers.  Event handlers written in Java where located in this fashion as well.  BIRT now allows you to configure the classpath for the workspace or for the individual project.  To set this preference select the window->preferences->Report Design->Classpath entry.
</p>
<img src="images/2.6/classpath.png"><br>
<i>Designer Classpath</i>

<h1><a name="jump_15">*Sorting Enhancement</a></h1>
<p>
BIRT provides sorting on many report items, such as tables, group sections, and crosstabs.  BIRT now features the ability to set the collation strength and locale for the sorter.  This same improvement is available for Charting and is described above.
</p>
<img src="images/2.6/sort.png"><br>
<i>Sort Strength and Locale</i>




<h1><a name="jump_16">*Crosstab Cheat Sheet and Template</a></h1>
<p>
A new Report Template and Cheat Sheet are available for creating a cross tab style report.
</p>
<img src="images/2.6/xtab.png"><br>
<i>Crosstab Template and Cheat Sheet</i>


<h1><a name="jump_17">Multiple Resource Files</a></h1>
<p>
BIRT currently supports localization of many items through the use of a resource file.  These settings are available in the properties editor’s localization tab for most report items.  The chart editor provides an externalized text editor for many of the labels used by the chart engine.  Messages from the resource file can also be selected using script.
</p>
<img src="images/2.6/localize.png"><br>
<i>BIRT Localization</i>
<p>
In this release of BIRT, localization support has been enhanced to support multiple resource files.  This will allow a designer to share resource elements across multiple reports without having to create a resource file specific for each report.  To add additional resource files, select the report and choose the Resources tab under the properties editor.
</p>
<img src="images/2.6/multipleresources.png"><br>
<i>Multiple Resource Files</i>




<h1><a name="jump_18">ODA Context Sensitive Help</a></h1>
<p>
BIRT uses the Data Tools Platform (DTP) project's Open Data Access (ODA) functionality to provide access to data. This provides BIRT with many out of the box data sources and supplies the capability for developers to implement their own data sources that can be packaged and shared.  BIRT 2.6 enhances the use of the ODA framework to allow developers to supply their own specific context sensitive help for their data source properties in the BIRT Data Source and Data Set Editors. 
</p>
<p>
See <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=302357">Bug 302357</a> for more details and a reference implementation.
</p>

<h1><a name="jump_19">Miscellaneous</a></h1>
<p>
The BIRT team has spent a great deal of time improving and refining existing features such as data handling and performance of large datasets, PDF image inclusion performance, accessibility improvements to the dataset editor, and proper BIDI support for BIRT emitters
</p>



<br><br>




</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
