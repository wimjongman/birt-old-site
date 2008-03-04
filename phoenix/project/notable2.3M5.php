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
BIRT 2.2 Milestone 5 has officially been released to the public.  Below is a description of some of the key features that are now available in the M5 build.  Keep in mind, as with all milestone releases, the product continues to evolve.   
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>
<h1><a name="jump_2">BIRT JavaScript Debugger</a></h1>
<p>
</p>
<img src="images/2.3/debugprofile.png"><br>
<i>Report Debug Launch Configuration</i>
<p>
</p>
<p>
</p>
<img src="images/2.3/rundebugger.png"><br>
<i>Report Debug</i>
<p>
</p>
<img src="images/2.3/debugging.png"><br>
<i>Debugging a Report</i>
<p>
</p>
<h1><a name="jump_3">Improved JavaScript Editor</a></h1>
<p>
</p>
<img src="images/2.3/codefoldingandbreakpoints.png"><br>
<i>Improved JavaScript Editor</i>
<p>
</p>
<img src="images/2.3/scriptvalidation.png"><br>
<i>JavaScript Validation</i>
<p>
</p>
<img src="images/2.3/expressionevaluator.png"><br>
<i>Expression Validation</i>
<p>
</p>
<img src="images/2.3/bettererrorsupport.png"><br>
<i>Better Error Support</i>

<h1><a name="jump_4">Copy and Paste Formatting</a></h1>
<p>
</p>
<img src="images/2.3/copypasteformat.png"><br>
<i>Copy and Paste Formatting</i>

<h1><a name="jump_5">Crosstab Improvements</a></h1>
<p>
</p>
<img src="images/2.3/beforefilter.png"><br>
<i>Crosstab with Header</i>
<p>
</p>
<img src="images/2.3/measurefilter.png"><br>
<i>Crosstab Measure Filtering</i>
<p>
</p>
<img src="images/2.3/afterfilter.png"><br>
<i>Crosstab Measure Filtering Output</i>
<p>
</p>
<img src="images/2.3/emptyrows.png"><br>
<i>Crosstab Empty Rows/Columns configuration</i>
<p>
</p>
<img src="images/2.3/crosstabchart.png"><br>
<i>Crosstab Chart View</i>
<p>
</p>
<img src="images/2.3/crosstabchartoutput.png"><br>
<i>Crosstab Chart View Output</i>



<h1><a name="jump_6">Multi-View Items</a></h1>
<p>
</p>
<p>
</p>
<img src="images/2.3/createchartview.png"><br>
<i>Table Create Chart View</i>

<p>
</p>
<img src="images/2.3/multiview.png"><br>
<i>Table Create Chart View Output</i>



<h1><a name="jump_7">BIRT Chart Improvements</a></h1>
<p>
</p>
<img src="images/2.3/chartsortingandgrouping.png"><br>
<i>Chart Wizard Data Grouping and Sorting</i>
<p>
</p>

<h1><a name="jump_8">Project Specific Settings</a></h1>
<p>
</p>
<img src="images/2.3/projectspecificsetting.png"><br>
<i>Project Specific Settings</i>

<h1><a name="jump_9">Connection Profile Wizard</a></h1>
<p>
</p>
<img src="images/2.3/connectionprofile.png"><br>
<i>Connection Profile Wizard</i>

<h1><a name="jump_10">Miscellaneous</a></h1>
<p>
</p>



<br><br>



</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
