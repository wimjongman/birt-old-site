<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.5 Milestone 7";
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
				<li><a href="#jump_3">Independent Locale Formatting</a></li>
				<li><a href="#jump_4">Pasting Formatted Text</a></li>
				<li><a href="#jump_5">XML Data Source Parameters</a></li>
				<li><a href="#jump_6">Crosstab Time Dimensions and separate Measure/Measure Total columns/rows</a></li>				
				<li><a href="#jump_7">Style Editor Improvement</a></li>		
				<li><a href="#jump_8">Progress Monitoring Information</a></li>		
						
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.5 Milestone 7 has officially been released to the public.  Below is a description of some of the key features that are now available in the M7 build.  Keep in mind, as with all milestone releases, the product continues to evolve.     
</p>
<p>
To review the projects slated for the 2.5 release, see the project plan, which is available <a href="http://www.eclipse.org/projects/project-plan.php?projectid=birt">here</a>.</p>

<h1><a name="jump_2">Default Parameter Values</a></h1>
<p>
Most report use parameters to customize reports to the consumer’s needs.  BIRT provides fully functional parameter capabilities, including dynamic parameters, where values are retrieved from a dataset to populate list and combo boxes.  Parameters can be required or optional and when a user does not enter a value for a parameter BIRT provides the capability to use a default parameter.  In milestone 7, this feature has been improved to support both JavaScript expressions and event scripting.  
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
<h1><a name="jump_3">Independent Locale Formatting</a></h1>
<p>
BIRT currently supports automatic formatting of report elements based on the current user’s or server’s locale. This feature has been enhanced to allow users to define a given locale for strings, numbers, currencies, and dates.  This feature is available in the report designer, within the properties editor for any given element that allows formatting.  In the example illustrated below, two elements an aggregation element and a date element are formatted using the German locale.  The rest of the report is formatted based on the English locale.
</p>
<img src="images/2.5/localeformatiting2.PNG"><br>
<i>Locale Formatting</i>
<h1><a name="jump_4">Pasting Formatted Text</a></h1>
<p>
With milestone 7 a new feature has been added to the designer to allow pasting of formatted text (RTF or HTML) into a text element.  This feature is available in the context menu of the Text Item editor and is labeled “Paste Formatted Text”.</p>
<img src="images/2.5/rtfcutandpaste.PNG"><br>
<i>Pasting Formatted Text</i>
<h1><a name="jump_5">XML Data Source Parameters</a></h1>
<p>
BIRT now provides support for data set parameters when using the XML data source.  Parameters can be placed in the XPath syntax using the {?parametername?} syntax.  For example assume an XML data source is retrieving all book nodes within a library master node.  The XPath syntax for the Row Mapping in the XML data set would be written like: library/book.   This syntax can now be modified to supply a data set parameter.  If the book node has an attribute that specifies the category of book, the XPath syntax could be modified to only retrieve a specific category of book based on a parameter like: library/book/[@category=”{?p1?}”].  This example is illustrated below.
</p>
<img src="images/2.5/xmldsparm.PNG"><br>
<i>XML Data Source Parameters</i>
<h1><a name="jump_6">Crosstab Time Dimensions and separate Measure/Measure Total columns/rows</a></h1>
<p>
BIRT uses the crosstab report item to display hierarchal data that is constructed using BIRT data cubes.  With this milestone many crosstab improvements have been made.  One feature that has been available since 2.3 of BIRT is the ability to show empty values.  This feature has been improved to better support time dimensions where corresponding dates do not exist in the data source.  For example, suppose we have crosstab that shows the number of cancelled orders for a product over time.  It may be desirable to show all the months and quarters for data points that are not present in the database.  The Empty Rows/Columns property has been enhanced to support this feature.  The following illustration demonstrates how to achieve this using BIRT.
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
<h1><a name="jump_7">Style Editor Improvement</a></h1>
<p>
BIRT uses styles to format report content.  These styles can be imported, referenced, or created using the BIRT style editor.  Standard report styles can be overridden or new styles can be created.  When using the style editor it is now possible to determine which style properties for a given style have been altered.  In addition a restore defaults button is also available.
</p>
<img src="images/2.5/newstyleindicators.PNG"><br>
<i>Style Editor Improvements</i>
<h1><a name="jump_8">Progress Monitoring Information</a></h1>
<p>
The Report Engine API has been improved to support the implementation of an interface that allows progress information to be gleaned from the various engine tasks.  This interface (IProgressMonitor) is fairly simple and only requires one method (onProgress) to be implemented.  This interface allows the tracking of starting and stopping BIRT tasks, as well as monitoring of queries starting and stopping, and when rows are fetched from a data set.  In addition the implementation will be notified when report generation for a page begins and ends.   A method (setProgressMonitor) is supplied for each task, to set a specific implementation of this interface.  An example implementation is illustrated below.
</p>
<img src="images/2.5/progressmonitor.PNG"><br>
<i>BIRT Progress Monitor</i>

<br><br>



</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
