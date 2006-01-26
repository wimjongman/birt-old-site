<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 1.0.1";
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

<h1>Support for Eclipse 3.1</h1>
<p>BIRT 1.0.1 provides support for the Eclipse 3.1 platform release.</p>

<h1>RCP Report Designer</h1>
<p>The Eclipse Rich Client Platform (RCP) enables ISVs and enterprise developers to leverage Eclipse technology to quickly create highly functional applications for their user community based on a common framework. BIRT 1.0.1 includes an example RCP implementation of BIRT that illustrates how RCP can be used to broaden the appeal and usage of BIRT technology. The BIRT RCP Report Designer is an example of providing a simpler tool that is dedicated to the task of report development – without the additional complexities of the IDE, which is unfamiliar to the typical report developer.</p>
<img src="../images/rcp.JPG" width="798" height="570"/>
<h1>Visual Indication of Problems in a Report</h1>
<p>When a BIRT report has a problem detected in it, an error icon is displayed alerting the developer to the existence of the problem. For example, when the data source is deleted an error icon is displayed next to the dependent data set.<p>
<img src="../images/errordata.JPG" width="221" height="112"/>

<h1>Map Feature for Easy Decoding of Database Values</h1>
<p>An easy way to map data values is now available in the property editor. For example, to map credit rank codes, "A" and "B" to “Excellent" and "Standard", you would use the Map feature, which is available as a tab under the property editor view, as shown in the following illustration.</p>
<img src="../images/map.jpg" width="728" height="285"/>
<p>When BIRT generates a report that displays values from the data column specified in the Condition, the defined Display Value is used in place of the actual data value. The report displays unmapped values without changing them, as shown in the following illustration.</p>
<img src="../images/mapresults.jpg" width="329" height="227"/>
<h1>Easy Deployability</h1>
<p>The BIRT 1.0.1 Runtime Engine is now available as WAR file allowing it to be deployed in application servers.</p>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
