<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.2 Milestone 5";
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
				<li><a href="#jump_3">Viewer Improvements</a></li>
				<li><a href="#jump_4">Emitters</a></li>
				<li><a href="#jump_5">Advanced Properties</a></li>
				<li><a href="#jump_6">Miscellaneous</a></li>
				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.2 Milestone 5 has officially been released to the public.  Below is a description of some of the key features that are now available in the M5 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">BIRT Chart Improvements</a></h1>
<p>
The Charting package continues to be a highlight for BIRT and with each milestone additional features are added to its already impressive set of capabilities.  Some of the improvements include new icons, better error support, x-axis labels at tick marks, textual values on the y-axis for bubble charts, linear time scales for bar and line series, and the ability to use different aggregate functions per series when grouping data within the chart.  As an example, if a data set exists that contains orders by date, a chart can be built to display a summation of quantity of orders and a count of orders grouped by day.
</p>
<img src="images/2.2/multiaggr.png"><br>
<i>Multiple Aggregate Chart</i>
<br><br>

<h1><a name="jump_3">Viewer Improvements</a></h1>
<p>
The BIRT Web Viewer example offers an AJAX based framework for viewing and navigating paginated HTML reports.  Deployment of this example has been addressed with a new specific WTP project wizard and a BIRT tag library.  You can get more detail on these improvements in the <a href="notable2.2M4.php">milestone 4 New and Notable</a>.  With milestone 5 the Viewer addresses some cleanup issues by implementing a session listener which removes temporary files that are created during a user session.  Additionally the script tag which allows a Text element to contain client side JavaScript now functions as expected in the Web Viewer.  This particular improvement will allow reports to be created which contain additional interactivity.  For example, scripts can be added that rerun the report periodically, display checkboxes interspersed with data values, or perform client side validation of user input.  Presented below is a report that executes every ten seconds.  The check boxes determine a columns visibility with the next execution.
</p>
<img src="images/2.2/script.png"><br>
<i>Using Client Side Script</i>


<h1><a name="jump_4">Emitters</a></h1>
<p>
Emitters are used within the BIRT Reporting framework to format a specific output.  Emitters can be added by implementing a set of Extension Points provided by the framework.  Currently BIRT supports HTML, paginated HTML, PDF and Word emitters.  Milestone 5 adds the ability to emit BIRT reports as PostScript documents.  Additionally, the PDF emitter has been improved to support print to fit functionality as illustrated below.  When print to fit is set correctly within the engine the PDF emitter will automatically scale the report output to fit on a single PDF page.
</p>
<img src="images/2.2/printtofit.png"><br>
<i>Print to Fit PDF Setting</i>


<h1><a name="jump_5">Advanced Properties</a></h1>
<p>
Properties for any element in a BIRT report design can be set using the Property Editor.  These include properties such as size, font, hyperlinks, and visibility.  With Milestone 5 an advanced page is now available within the property editor that displays all properties for a given report element.
</p>
<img src="images/2.2/advancetab.png"><br>
<i>BIRT Property Editor</i>


<h1><a name="jump_6">Miscellaneous</a></h1>
<p>
Milestone 5 includes many other changes including better predicate support within the XML data source, design engine API changes to support the upcoming crosstab report element, and changes to the new tag libraries to improve deployment.
</p>

<br>
<br>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
