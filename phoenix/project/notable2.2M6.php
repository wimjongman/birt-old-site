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
				<li><a href="#jump_2">BIRT Chart Improvements</a></li>
				<li><a href="#jump_3">XLS Emitter Prototype</a></li>
				<li><a href="#jump_4">Linking Cascading Style Sheets</a></li>
				<li><a href="#jump_5">BIRT Viewer Changes</a></li>
				<li><a href="#jump_6">Report Examples View</a></li>
				<li><a href="#jump_7">Dynamic Connection Profiles</a></li>
				<li><a href="#jump_8">Report Parameter Changes</a></li>
				<li><a href="#jump_9">Miscellaneous</a></li>

				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.2 Milestone 6 has officially been released to the public.  Below is a description of some of the key features that are now available in the M6 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">BIRT Chart Improvements</a></h1>
<p>
BIRT Charting provides many options for chart building and deployment.  Not only can the chart engine be used outside of the BIRT designer, the Chart Builder can be used externally to create xml chart models.  To better facilitate deployment of stand alone charts, BIRT Milestone 6 now supports a new Chart Tag library and Chart Viewer Servlet.  An example of using the Chart Viewer and the Tag library is now available in the runtime download and is displayed below.
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
In addition to the new Chart Viewer, M6 offers an improved Chart Engine API which supports a more centralized and accessible framework.  Starting up the chart engine, creating a generator, getting a renderer, or retrieving the serializer can now all be done through a single entry point into the API. 
</p>
<br><br>

<h1><a name="jump_3">XLS Emitter Prototype</a></h1>
<p>
BIRT provides output in various formats, such as PDF and HTML.  These output formats are generated using BIRT emitters.  The framework provides Eclipse extension points to allow additional emitters to be created.  Milestone 6 provides a new prototype XLS emitter.  It is early in development and the BIRT team is looking for your feedback.
</p>
<img src="images/2.2/xlsemitter.PNG"><br>
<i>Prototype XLS Emitter</i>


<h1><a name="jump_4">Linking Cascading Style Sheets</a></h1>
<p>
BIRT Style formatting is based on CSS and allows users to import specific styles to apply formatting to various elements within the report.  This is beneficial in that elements do not have to be formatted individually.  In prior versions of BIRT, developers could import a CSS and apply the styles to elements using the right mouse button context menu.  With the Milestone 6 build BIRT 2.2 has been enhanced to support linking to external style sheets that reside in the resource folder.  Prior to this improvement if reports shared style sheets with the containing web site and a change was required, the external style sheet would be modified and re-imported into each report.  A new menu item is now available that allows a report design to use a CSS File which sets up the link to the external CSS file.  
</p>
<img src="images/2.2/linkcss1.PNG"><br>
<i>Setting up a link to external CSS</i><br><br>

<img src="images/2.2/linkcss2.PNG"><br>
<i>Linked CSS</i>
<p>
Now changing any of the linked external CSS file’s styles will be automatically reflected in all report designs which make use of this feature. 
</p>

<h1><a name="jump_5">BIRT Viewer Changes</a></h1>
<p>
The Table of Contents feature of BIRT allows quick navigation within a report when using the BIRT Viewer.  Milestone 6 introduces the ability to apply styles to TOC elements.  This can be done in the Table of Contents property for standard elements and in the group editor for groups as shown below.
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
<h1><a name="jump_6">Report Examples View</a></h1>
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


<h1><a name="jump_7">Dynamic Connection Profiles</a></h1>
<p>
BIRT currently supports the ability to import connection information from a profile created with the Data Tools Platform project’s Data Source Explorer View.  This is very convenient when sharing of connection credentials across applications is necessary.  Prior to Milestone 6 the connection information was imported into the report design.  This has been changed to support linking to the connection profile, ensuring that changes made to profile are reflected in the BIRT Report.  This link is established when a data source is created from a connection profile and the Use externalized properties in the Connection Profile Store checkbox is selected.
</p>
<img src="images/2.2/connectionprofile.PNG"><br>
<i>Dynamic Connection Profile</i>

<h1><a name="jump_8">Report Parameter Changes</a></h1>
<p>
BIRT provides support for various types of parameters.  Several parameter changes were made in Milestone 6 to improve usability and provide additional functionality.  Dynamic parameters for instance allow users to select a parameter value from a list or combo box that is populated with a dataset from the report.  As part of building a report that uses a dynamic parameter a developer is allowed to enter a dataset column to use in the report and another to display to the end user of the report.  For example, the report could use customer number but would allow the report consumer to select the customer name.  This functionality has been extended to provide BIRT expressions in addition to dataset column names.  This can be very useful in cases where the dataset columns do not contain all the information you wish to use or present to the end user of the report.  As an example suppose you wanted to present a dynamic parameter that contained order numbers to the end user.  The end user could then select the order number and get the details for the selection.  This is an effective way of culling the data for detail reporting, but most users are not going to be familiar with order or customer numbers.  Using the new expression capability report developers can add extra information to help the end user get exactly what they need.  In the above example a report developer can now set the parameter value column to be order number and use an expression like dataSetRow["CUSTOMERNAME"] + "---Order:" + dataSetRow["ORDERNUMBER"] for the parameter display text.  
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
<h1><a name="jump_9">Miscellaneous</a></h1>
<p>
Milestone 6 contains many other changes including the prototype crosstab element which will be discussed more in the RC0 release of the new and notable, support for Boolean, Time and Date data types, better binding support for nested tables, locale based font configuration files and enhanced postscript options such as fit to page.
</p>

<br>
<br>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
