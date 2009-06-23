<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.5";
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
				<li><a href="#jump_2">Default Parameter Values</a></li>
				<li><a href="#jump_3">Page Management Improvements</a></li>
				<li><a href="#jump_4">Page Level Variables and Events</a></li>				
				<li><a href="#jump_5">Chart Improvements: Z-Ordering, Empty Chart Messages, Cursor Types, Pie Chart Coverage, and Label Spans</a></li>
				<li><a href="#jump_6">Study Charts</a></li>
				<li><a href="#jump_7">Independent Locale Formatting</a></li>
				<li><a href="#jump_8">Pasting Formatted Text</a></li>
				<li><a href="#jump_9">Expressions Changes</a></li>
				<li><a href="#jump_10">XML Data Source Parameters</a></li>
				<li><a href="#jump_11">Crosstab Time Dimensions and separate Measure/Measure Total columns/rows</a></li>				
				<li><a href="#jump_12">Designer Improvements: Resource Folder setting improvements</a></li>
				<li><a href="#jump_13">Style Editor Improvement</a></li>		
				<li><a href="#jump_14">Styling Hyperlinks</a></li>
				<li><a href="#jump_15">Text Wrapping</a></li>
				<li><a href="#jump_16">Image Enhancements</a></li>				
				<li><a href="#jump_17">508 Properties and Diagonal lines</a></li>
				<li><a href="#jump_18">Duration Script Functions</a></li>
				<li><a href="#jump_19">Progress Monitoring Information</a></li>	
				<li><a href="#jump_20">Event Handler Performance Improvement</a></li>
				<li><a href="#jump_21">Data Connection Profile Exports</a></li>					
						
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Galileo release, the BIRT team is pleased to announce the availability of BIRT 2.5. The features in this release expand on the already impressive features of BIRT 2.3 and offer improvements in many areas such as page management and creation, study charts, parameter scripts, and event hander performance improvements. Below is a description of some of the key features that are now available.
</p>
<p>
To review the projects included in the 2.5 release, see the project plan, which is available <a href="http://www.eclipse.org/projects/project-plan.php?projectid=birt">here</a>.</p>

<h1><a name="jump_2">Default Parameter Values</a></h1>
<p>
Most report use parameters to customize reports to the consumer’s needs.  BIRT provides fully functional parameter capabilities, including dynamic parameters, where values are retrieved from a dataset to populate list and combo boxes.  Parameters can be required or optional and when a user does not enter a value for a parameter BIRT provides the capability to use a default parameter.  In BIRT 2.5, this feature has been improved to support both JavaScript expressions and event scripting.  
</p>
<p>
The Parameter editor now provides an expression builder button to set the default value for a parameter using a JavaScript expression.  In the example illustrated below, the expression is just converting the current date into a string, for the default value of a string parameter.  
</p>
<img src="images/2.5/defaultvalueexpression.PNG"><br>
<i>Default Parameter Value Expression</i>
<p>
In addition to the default value expression, two new events have been added to parameters that allow you to set the default selection list and values for a parameter within the script editor.  In the following example a multi-select list parameter is shown.  The getSelectionValueList script is used to populate the available options for the list parameter and the getDefaultValueList script is used to preselect two of these values.  The resultant parameter entry box that the end user sees is also displayed.
</p>
<img src="images/2.5/parameterscripts.PNG"><br>
<i>Parameter Scripts</i>
<h1><a name="jump_3">Page Management Improvements</a></h1>
<p>
BIRT 2.5 contains many improvements to page management and creation.  Some of the key new features are listed here.  
</p>
<p>
The page breaks before, after and inside options now support avoid.
</p>
<img src="images/2.5/avoidoption.PNG"><br>
<i>Page Break Avoid</i>
<p>
Master pages can now use an SVG image for the background and support setting border properties using the advanced tab within the master page property editor.
</p>
<img src="images/2.5/masterpageborder.PNG"><br>
<i>Master Page Borders</i>
<p>
Column page breaks for crosstabs and tables have also been improved.  Within a crosstab it is now possible to set a page break interval for columns.  The engine will then insert a page break every n columns where n is the page break interval.
</p>
<img src="images/2.5/crosstabpagebreakinterval.PNG"><br>
<i>Cosstab Page Break Interval</i>
<p>
Table page breaks can now be set on the column using the onCreate script in addition to the GUI.  Using this feature will allow page breaks to be made conditional.
</p>
<img src="images/2.5/tablescriptpagebreak.PNG"><br>
<i>Table Column Page Break Script</i>

<h1><a name="jump_4">Page Level Variables and Events</a></h1>
<p>
In addition to the new page management features BIRT now includes new page scripts that can be used in conjunction with new page variables to provide such features as individual group page numbering, first and last page contents, and page level aggregation.  
</p>
<p>
Page Variables are created using the Data Explorer view and can be one of two types: Report Variable or Page Variable.  Report Variables are evaluated when the report is complete and Page Variables are evaluated at the time a page is written.  Either type can be placed on the master page by selecting the Palette View and selecting the Variable AutoText field.
</p>
<img src="images/2.5/pagevars1.PNG"><br>
<i>Page Variables</i>
<p>
The page level events (OnPageStart and OnPageEnd) are set at the report level and the master page level.  These events fire for each page created when using two task (Run then Render ie /frameset) to create a report.  After all instances of report items have been created for a specific page, the OnPageStart event is fired for the report and then the specific master page.  Every report item instance that appears on the page will then have its OnPageBreak event fired.  The OnPageEnd events for the master page and the report will be triggered next. Finally the page will be created.  This process is then repeated for subsequent pages, followed by the render events.  
</p>
<img src="images/2.5/pagevars2.PNG"><br>
<i>Page Scripts Event Order</i>
<p>
Note that in the above diagram it is possible that certain report items OnCreate events will be fired but will not be placed on the current page due to constraints like the keep-together flag.  This will result in the OnCreate event only be fired once for the item and its OnPageBreak event being fired on the next page.
</p>
<p>
To get access to the page variables the report context has been enhanced to provide getter and setter methods for the variables.  For example to create a header that shows the first and last customers numbers for a specific page and the total number of customers can be accomplished using the OnPageStart event and the OnPageBreak event for the customer number data element as illustrated below.
</p>
<img src="images/2.5/pagevars3.PNG"><br>
<i>Page Script Example - First & Last</i>
<p>
In this example the Report Variable TOTAL_CUSTOMERS is updated every time the customer number changes and the Page Variable FIRST_CUSTOMER is set once for the entire page and the Page Variable LAST_CUSTOMER is set on every customer number page break, resulting in the last customer on the page being written to the page.  Similar techniques can be used to display page numbers for individual groups.
</p>
<img src="images/2.5/pagevars4.PNG"><br>
<i>Page Script Example - Group Page Numbers</i>


<h1><a name="jump_5">Chart Improvements: Z-Ordering, Empty Chart Messages, Cursor Types, Pie Chart Coverage, and Label Spans</a></h1>
<p>
The charting package has been enhanced to support many new features as described below. 
</p>
<p>
With the release of BIRT 2.5 it is now possible to set Z-order rendering priority for combination charts.  
</p>
<img src="images/2.5/combochart.PNG"><br>
<i>Z-Order for Combination Charts</i>
<p>
In this example the bar series will be rendered in front of the area chart because it has a higher Z order value.
</p>
<p>
Currently when the engine processes charts and the dataset for the chart is empty, BIRT does not display the chart.  In some cases it is desirable to display a message to the end user that the data returned empty.  BIRT 2.5 provides this capability now which a change to the chart model and UI.
</p>
<img src="images/2.5/emptychart.PNG"><br>
<i>Empty Chart Message</i>
<p>
The message can be externalized and supports font customization, such as text rotation.
</p>
<p>
When rendering pie charts the actual diameter of the chart is computed by the chart engine based on the number of data points, legend size and specific label formatting.  In previous releases of BIRT this made it difficult to size two pie charts to the same size if they contained a different number of points or label styling.  In this release it is now possible to set the percentage of the plot area that is used to render the actual pie slices.
</p>
<img src="images/2.5/piechartcoverage.PNG"><br>
<i>Pie Chart Coverage</i>
<p>
The chart engine and chart builder now support specifying a cursor type for interactivity.  This feature works with all chart renderers, but will not work with SVG and Image formats displayed in Internet Explorer.
</p>
<img src="images/2.5/cursor.PNG"><br>
<i>Interactivity Cursor</i>
<p>
Stock charts have also been improved to support better rendering when using the optional Y-Series grouping feature. Now sub groups are rendered side by side as illustrated below.
</p>
<img src="images/2.5/stockgroup.PNG"><br>
<i>Stock Chart Grouping</i>
<p>
BIRT has supported using images for makers for some time now, but with this release you can now specify the marker image which will then be embedded into the chart model.
</p>
<img src="images/2.5/markerimage.PNG"><br>
<i>Marker Images</i>
<p>
In order to allow the developer to control how a chart is presented, the model has been altered to allow a fixed point of thickness for the both the X-axis and Y-axis labels.  This should allow users to line up multiple charts within the same report.
</p>
<img src="images/2.5/labelspan.PNG"><br>
<i>Chart Axis Label Span</i>
<p>
In addition the chart APIs have been changed to accommodate setting the scaling factor’s for the x and y axis.  More information on this feature is available
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=210913">here<a/>.
Changes were also made to the API to support right mouse click trigger events for charts that are rendered to SWT or Swing.
</p>
<h1><a name="jump_6">Study Chart</a></h1>
<p>
In addition to the above chart improvements, BIRT now supports study charts which allow stacked Y axes.  This can be enabled with any multi-y-axis chart by selecting the format chart tab of the chart wizard and clicking the enable study layout checkbox.  
</p>
<img src="images/2.5/studychart.PNG"><br>
<i>Study Chart Creation</i>
<p>
To configure how much of the available chart axis space is consumed by each y-axis, select the Axis tree node and set the Axis Percent for each of the available axes.
</p>
<img src="images/2.5/studychart2.PNG"><br>
<i>Study Chart Creation Axis Configuration</i>
<p>
</p>
<img src="images/2.5/studychart3.PNG"><br>
<i>Study Chart Example</i>

<h1><a name="jump_7">Independent Locale Formatting</a></h1>
<p>
BIRT currently supports automatic formatting of report elements based on the current user’s or server’s locale. This feature has been enhanced to allow users to define a given locale for strings, numbers, currencies, and dates.  This feature is available in the report designer, within the properties editor for any given element that allows formatting.  In the example illustrated below, two elements an aggregation element and a date element are formatted using the German locale.  The rest of the report is formatted based on the English locale.
</p>
<img src="images/2.5/localeformatiting2.PNG"><br>
<i>Locale Formatting</i>
<h1><a name="jump_8">Pasting Formatted Text</a></h1>
<p>
With BIRT 2.5 a new feature has been added to the designer to allow pasting of formatted text (RTF or HTML) into a text element.  This feature is available in the context menu of the Text Item editor and is labeled “Paste Formatted Text”.</p>
<img src="images/2.5/rtfcutandpaste.PNG"><br>
<i>Pasting Formatted Text</i>

<h1><a name="jump_9">Expression Changes</a></h1>
<p>
BIRT uses expressions to evaluate many values at runtime.  These include connection properties, data values, hyperlinks, and table of contents items to name a few.  Expressions are JavaScript snippets that are evaluated by the Rhino engine and return a value.  In some cases when the user only wants to set a string or simple value, using the expression can be a performance impact and often requires quoting strings.  BIRT 2.5 offers a new feature where report items that use expressions can also use constants.  For example to set a hyperlink that is constant the user can use this new feature and the hyperlink will not be evaluated at runtime and does not need to be quoted.  The Design Engine API has also been modified to accommodate setting the appropriate values.
</p>
<img src="images/2.5/expressions.PNG"><br>
<i>Expressions</i>

<h1><a name="jump_10">XML Data Source Parameters</a></h1>
<p>
BIRT now provides support for data set parameters when using the XML data source.  Parameters can be placed in the XPath syntax using the {?parametername?} syntax.  For example assume an XML data source is retrieving all book nodes within a library master node.  The XPath syntax for the Row Mapping in the XML data set would be written like: library/book.   This syntax can now be modified to supply a data set parameter.  If the book node has an attribute that specifies the category of book, the XPath syntax could be modified to only retrieve a specific category of book based on a parameter like: library/book/[@category=”{?p1?}”].  This example is illustrated below.
</p>
<img src="images/2.5/xmldsparm.PNG"><br>
<i>XML Data Source Parameters</i>
<h1><a name="jump_11">Crosstab Time Dimensions and separate Measure/Measure Total columns/rows</a></h1>
<p>
BIRT uses the crosstab report item to display hierarchal data that is constructed using BIRT data cubes.  With this release many crosstab improvements have been made.  One feature that has been available since 2.3 of BIRT is the ability to show empty values.  This feature has been improved to better support time dimensions where corresponding dates do not exist in the data source.  For example, suppose we have crosstab that shows the number of cancelled orders for a product over time.  It may be desirable to show all the months and quarters for data points that are not present in the database.  The Empty Rows/Columns property has been enhanced to support this feature.  The following illustration demonstrates how to achieve this using BIRT.
</p>
<img src="images/2.5/emptytimerows.PNG"><br>
<i>Crosstab Empty Rows (Time Dimension)</i>
<p>
The data explorer view also feature new icons for dimension attributes, which will allow the developer to drag attributes directly into the crosstab.
</p>
<img src="images/2.5/dimensionattributes.PNG"><br>
<i>Dimension Attributes</i>
<p>
When using totals within a crosstab it is often desirable to show these totals without actually showing their detail values.  In prior releases of BIRT if the visibility of a measure was set to hide, the totals would also not be shown.  Totals are now treated separately.
</p>
<img src="images/2.5/separatemeasurettl.PNG"><br>
<i>Separate Measure/Total Support</i>

<h1><a name="jump_12">Designer Improvements: Resource Folder setting improvements</a></h1>
<p>
Many changes have been made to the designer in the way of usability and features.  Some of these key features are described below.
</p>
<p>
BIRT uses a resource folder for storing images, external scripts and report libraries.  The resource folder works as a common area for a project to share content across reports.  When the Web Viewer is deployed the resource folder is configurable within the web.xml for the application.  In this release the design time preference for the resource folder has been enhanced to support setting this folder to either a workspace folder, system folder or an Eclipse variable.
</p>
<img src="images/2.5/resourcefolder.PNG"><br>
<i>Resource Folder Setting</i>
<p>
As with previous releases of BIRT the resource folder can be configured on a project basis, supporting multiple projects within one workspace.
</p>
<p>
The property editor has been improved to support resetting default properties and added support for listing properties by alphabetical, local, or grouped categories.
</p>
<img src="images/2.5/propertyeditor.PNG"><br>
<i>Property Editor</i>


<h1><a name="jump_13">Style Editor Improvement</a></h1>
<p>
BIRT uses styles to format report content.  These styles can be imported, referenced, or created using the BIRT style editor.  Standard report styles can be overridden or new styles can be created.  When using the style editor it is now possible to determine which style properties for a given style have been altered.  In addition a restore defaults button is also available.
</p>
<img src="images/2.5/newstyleindicators.PNG"><br>
<i>Style Editor Improvements</i>

<h1><a name="jump_14">Styling Hyperlinks</a></h1>
<p>
When using external style sheets it is now possible to set the style for hyperlinks.  These styles can be set globally for the report or for a specific report style.
</p>
<img src="images/2.5/hyperlinkstyle.PNG"><br>
<i>Styling Hyperlinks</i>

<h1><a name="jump_15">Text Wrapping</a></h1>
<p>
BIRT 2.5 now supports controlling the text block whitespace no wrapping style property.
</p>
<img src="images/2.5/nowrap.PNG"><br>
<i>Text Wrapping</i>




<h1><a name="jump_16">Image Enhancements</a></h1>
<p>
Image DPI can now be set using an advanced property on the report design and the engine will use this setting when rendering.  If the report design dpi setting is set to 0, the engine will interrogate the image to retrieve the dpi.
</p>
<img src="images/2.5/imagedpi.PNG"><br>
<i>DPI</i>
<p>
Additionally images now have a fit to container property that will allow them to be scaled based on the size of a container report item instead of being clipped. 
</p>
<img src="images/2.5/imagescale.PNG"><br>
<i>fit to container</i>


<h1><a name="jump_17">508 Properties and Diagonal lines</a></h1>
<p>
In an effort to continue to better support 508 compliance, three new properties are now available on table cells (headers, scope, and bookmark). 
</p>
<img src="images/2.5/508cells.PNG"><br>
<i>508 Properties</i>
<p>
More information on this feature is available <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=178171">here</a>. 
</p>
<p>
In addition to the above advanced parameters, the engine now provides support for adding diagonal lines to cell containers.
</p>
<img src="images/2.5/diag.PNG"><br>
<i>Diagonal Lines</i>
<p>
The engine has also been enhanced to support more precise rendering when setting the height field for a report item and the report is using the fixed layout option.  This feature applies to label, text, image, and chart report items.
</p>


<h1><a name="jump_18">Duration Script Functions</a></h1>
<p>
Often applications use a duration data type to specify time intervals.  With previous releases of BIRT, developers needed to call JavaScript or Java functions to manipulate this data to be used within a report.  With the 2.5 release, the expression builder now provides a set of functions to manipulate a duration string.
</p>
<img src="images/2.5/duration.PNG"><br>
<i>Duration Functions</i>

<h1><a name="jump_19">Progress Monitoring Information</a></h1>
<p>
The Report Engine API has been improved to support the implementation of an interface that allows progress information to be gleaned from the various engine tasks.  This interface (IProgressMonitor) is fairly simple and only requires one method (onProgress) to be implemented.  This interface allows the tracking of starting and stopping BIRT tasks, as well as monitoring of queries starting and stopping, and when rows are fetched from a data set.  In addition the implementation will be notified when report generation for a page begins and ends.   A method (setProgressMonitor) is supplied for each task, to set a specific implementation of this interface.  An example implementation is illustrated below.
</p>
<img src="images/2.5/progressmonitor.PNG"><br>
<i>BIRT Progress Monitor</i>

<h1><a name="jump_20">Event Handler Performance Improvement</a></h1>
<p>
BIRT provides a framework where events are fired during the lifecycle of report generation and presentation.  These events can be hooked using either Java or JavaScript to control the behavior of report items.  In previous releases of BIRT when an event handler was implemented in Java, an instance of the handler was created for every instance of the report item.  For example when using an event handler for a data item located in a table, the handler class would be instantiated for every runtime instance of the data element.  This can have an adverse effect on performance.  BIRT 2.5 now provides an advanced property that allows the designer to control how the event handlers are instantiated.  
</p>
<img src="images/2.5/eventhandler.PNG"><br>
<i>Event Handler Instance Property</i>
<p>
This property “New handler on each event” can be set to true or false on any report item that uses event handlers.  If the value is set to false the event handler will only be instantiated once per design instance of the report item.  In the specific case described above the data element event handler will only be created once.  If the data event handler is used on another data element then two instances would be created for each of the design instances, no matter how many runtime instances of the report item are created.
</p>

<h1><a name="jump_21">Data Connection Profile Exports</a></h1>
<p>
When building a BIRT report the designer has many options for data sources.  One of these options is the connection profile feature, which stores connection information externally from the report.  In BIRT 2.5 the user can now create a data source as normal and then export that data source to a connection profile, for use in other locations or by different users.
</p>
<img src="images/2.5/connectionprofileexport.PNG"><br>
<i>Connection Profile Export</i>














<br><br>



</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
