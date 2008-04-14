<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.3 Milestone 6";
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
				<li><a href="#jump_2">SQL Query Builder Prototype</a></li>
				<li><a href="#jump_3">Scripting Improvements</a></li>
				<li><a href="#jump_4">Chart Improvements</a></li>
				<li><a href="#jump_5">Preview Extension Point</a></li>
				<li><a href="#jump_6">Miscellaneous</a></li>				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.3 Milestone 6 has officially been released to the public.  Below is a description of some of the key features that are now available in the M6 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
<p>
To review the projects slated for the 2.3 release, see the project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_3_0.php">here</a>.</p>
<h1><a name="jump_2">SQL Query Builder Prototype</a></h1>
<p>
BIRT 2.3M6 delivers a prototype feature that adopts the DTP SQL Query Builder tool (SQB) and use of the DTP Database connectivity framework. The integrated SQB provides both a textual editor and a graphical builder for users to build a SQL query.  User edits made in either the textual or graphical pane are automatically reflected in the other.  It is enabled by a built-in SQL parser, with knowledge of the database catalog found in a connected JDBC data source.  See Bugzilla entry 
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=204344#c9">204344</a> for the known limitations in the M6 version.  This new ODA data source is an early adoption of the SQB feature in DTP.  In order to get early feedback on its usability and functionalities, this feature is introduced as a prototype, and does not claim any backward compatibility support.
</p>
<img src="images/2.3/sqlbuilder.png"><br>
<i>SQL Query Builder Prototype</i>
<p>
To use this feature when creating a data source, select the “create from a connection profile in the profile store” radial in the New Data Source wizard.  Using the connection profile wizards create a new profile.
</p>
<img src="images/2.3/createconnprof.png"><br>
<i>New Connection Profile</i>
<p>
Once the data source is created, create a new data set and the Query Builder Prototype should be available in the Data Set Type drop-down control.
</p>
<img src="images/2.3/newdatasource.png"><br>
<i>New Data Set Wizard</i>
<h1><a name="jump_3">Scripting Improvements</a></h1>
<p>
BIRT uses the Mozilla Rhino JavaScript engine to implement server side scripting, for event handling and building BIRT expressions.  One of the major improvements for 2.3 was the release of the JavaScript debugger in the previous milestone.  In an effort to continue to improve scripting, several report elements have been enhanced to support additional event triggers.  The cross tab element now supports onPrepare, onCreate, and onRender events for the cross tab and for each cell within the cross tab.  Using these new events the rendered cross tab element can be altered in many ways.  The following screenshot illustrates script that alters the cross tab element in its onPrepare method and alters the individual cell element instances based on data within the cross tab.
</p>
<img src="images/2.3/crosstabscript.png"><br>
<i>Cross Tab Script</i>
<img src="images/2.3/crosstabscriptview.png"><br>
<i>Cross Tab Script Output Example</i>
<p>
In addition to the new events for the cross tab element, chart scripting has been improved to support beforeDrawMarker and afterDrawMarker events.  Using these events the individual markers for the chart and legend can be altered.  For example, the following screenshot illustrates script that hides legend entry graphics and changes the size, type, and color of the chart markers based on the chart data.
</p>
<img src="images/2.3/markerscripts.png"><br>
<i>Marker Scripts</i>
<p>
Finally, Group elements have been improved to support onCreate and onRender events.
</p>

<h1><a name="jump_4">Chart Improvements</a></h1>
<p>
Charting has been improved to support many new features.  With this release, charts can now consume data from report cubes.  This is in addition to the existing support for BIRT data sets and report items.
</p>
<img src="images/2.3/multisourcecharts.png"><br>
<i>Chart Editor Wizard</i>
<p>
Charts created from cubes can also be filtered based on the values selected for value and category series as well as the optional Y series grouping.  
</p>
<img src="images/2.3/chartfilter.png"><br>
<i>Chart Filter Example</i>
<p>
Cross tabs cells can also contain charts.  In this milestone, individual charts can now be added for each measure and can be generated against the vertical or horizontal dimension.  Charts can also be used for cells containing total elements.
</p>
<img src="images/2.3/xtabmultichart.png"><br>
<i>Chart/Crosstab Examples</i>
<p>
With milestone 6 it is now possible to set the start angle of the first slice in a pie chart.  This can be done by using the Pie Rotation slider in the Format Chart tab of the Edit Chart wizard.
</p>
<img src="images/2.3/pierotation.png"><br>
<i>Pie Chart Rotation</i>
<p>
Other chart improvements include the ability to display individual charts for each measure within a cross tab cell and ellipsis support for long axis labels.  
</p>

<h1><a name="jump_5">Preview Extension Point</a></h1>
<p>
BIRT currently uses an Application Context object to store engine configuration information, such as image locations, URL configurations when generating hyperlinks, and setting image formats for chart generation. This Application Context object is available throughout the generation and rendering phases of the reporting pipeline.  This object can be manipulated in the Report Engine API and with the use of session variables, before executing a report.  This can be beneficial for storing your custom objects in the application context, which can then be retrieved using BIRT expressions or scripting.  Testing reports that use this feature within the designer can be somewhat difficult, as your custom objects are usually not available.  To address this issue, BIRT now provides a preview extension point.  This extension point allows the developer to create a plug-in that can modify the application context within the designer, before a report is executed.  
</p>
<p>
This extension point provides two methods.  The getName method is used to name your implementation and the getAppContext method is used to retrieve the application context object from your plug-in.  In the following example we are implementing a preview extension point to add a test string to the application context.
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
<h1><a name="jump_6">Miscellaneous</a></h1>
<p>
Many additional features are included in this milestone.  BIRT currently supports extracting of data results using a data extraction task.  In the example viewer this task is used to export data to various output formats such as CSV.  An extension point is now available that will allow developers to create a plug-in that controls how the extracted data is formatted and stored.  Cross tab elements now support derived measures.  These can be created by using the Derived Measure dialog, which is launched with the menu context item “Add Derived Measure”.  The BIRT Expression builder is used to construct these derived measures and all cross tab bound items are available for use within the expression.  This milestone also supports generating a report document directly from the report, while in the designer.  To access this feature, select the Generate Document item located within the Run menu.
</p>



<br><br>



</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
