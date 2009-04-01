<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.5 Milestone 6";
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
				<li><a href="#jump_2">Chart Improvements: Z-Ordering, Empty Chart Messages, Cursor Types, Pie Chart Coverage, and Label Spans</a></li>
				<li><a href="#jump_3">Designer Improvements: Resource Folder setting improvements</a></li>
				<li><a href="#jump_4">508 Properties and Diagonal lines</a></li>
				<li><a href="#jump_5">Duration Script Functions</a></li>
				<li><a href="#jump_6">Miscellaneous</a></li>				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.5 Milestone 6 has officially been released to the public.  Below is a description of some of the key features that are now available in the M6 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
<p>
To review the projects slated for the 2.5 release, see the project plan, which is available <a href="http://www.eclipse.org/projects/project-plan.php?projectid=birt">here</a>.</p>

<h1><a name="jump_2">Chart Improvements: Z-Ordering, Empty Chart Messages, Cursor Types, Pie Chart Coverage, and Label Spans</a></h1>
<p>
The charting package has been enhanced to support many new features as described below. 
</p>
<p>
With the milestone 6 release of BIRT 2.5 it is now possible to set Z-order rendering priority for combination charts.  
</p>
<img src="images/2.5/combochart.PNG"><br>
<i>Z-Order for Combination Charts</i>
<p>
In this example the bar series will be rendered in front of the area chart because it has a higher Z order value.
</p>
<p>
Currently when the engine processes charts and the dataset for the chart is empty, BIRT does not display the chart.  In some cases it is desirable to display a message to the end user that the data returned empty.  Milestone 6 provides this capability now which a change to the chart model and UI.
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

<h1><a name="jump_3">Designer Improvements: Resource Folder setting improvements</a></h1>
<p>
Many changes have been made to the designer in the way of usability and features.  Some of these key features are described below.
</p>
<p>
BIRT uses a resource folder for storing images, external scripts and report libraries.  The resource folder works as a common area for a project to share content across reports.  When the Web Viewer is deployed the resource folder is configurable within the web.xml for the application.  In this milestone the design time preference for the resource folder has been enhanced to support setting this folder to either a workspace folder, system folder or an Eclipse variable.
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

<h1><a name="jump_4">508 Properties and Diagonal lines</a></h1>
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
<h1><a name="jump_5">Duration Script Functions</a></h1>
<p>
Often applications use a duration data type to specify time intervals.  With previous releases of BIRT, developers needed to call JavaScript or Java functions to manipulate this data to be used within a report.  With the M6 build, the expression builder now provides a set of functions to manipulate a duration string.
</p>
<img src="images/2.5/duration.PNG"><br>
<i>Duration Functions</i>
<h1><a name="jump_6">Miscellaneous</a></h1>
<p>
Many other features are available with this build, including support for aggregating derived measures within a crosstab, better support for the ‘avoid’ property within page break settings, and master page border support.
</p>

<br><br>



</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
