<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Tutorial";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../birt.inc";
	require "basic.inc";
	$stepNumber				= 7;
	$linkToTop				= linkToTop();
	$tutorialLinksSideItem  = getTutorialLinksSideItem($stepNumber);
	$stepNavigator			= getTutorialStepNavigator($stepNumber);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#test">Test your Report</a></li>
				<li><a href="#preview_html">Preview as HTML</a></li>
				<li><a href="#preview_pdf">Preview as PDF</a></li>
			</ul>
		</blockquote>

		<h2><a name="test"></a>Test your Report</h2>
		<p>
			We're now ready to test the report layout. We verified the
			data set earlier, so now we want to verify that the report is presenting the
			data as we expected.
		</p>
		<p>
			We preview the report by clicking on the Preview tab within the report editor.
			If our report had parameters, the GUI would ask us for them. But, since this
			report does not have parameters, it simply runs.
		</p>
		<p>
			The window that appears is a simple web browser, and displays the report in
			HTML. The report appears as a single page. This works best for  small
			amount data sets. Since the sample database has quite a bit of data data, we used
			a WHERE clause to limit the amount of data. We could also use
			a report parameter and a data set filter to limit the amount of data displayed
			at any one time.
		</p>
		<div class="homeitem3col">
			<h3>Release 1.0.1 Note</h3>
			<p>
				BIRT Release 1.0.1 displays the report as a single HTML page. Future releases will display the report as a series of pages.
			</p>
		</div>
		<p>
			Seeing the report in the preview suggests a number of ways we can improve the report's appearance:
		</p>
		<ul class="midlist">
			<li>
				Add a title to the top of the report.
			</li>
			<li>
				Add some color to enhance the column headings.
			</li>
			<li>
				Shrink the size of the city and state columns.
			</li>
			<li>
				Add some color to make the state and city group headers stand out.
			</li>
			<li>
				Format the phone numbers.
			</li>
			<li>
				Sort customers by name.
			</li>
		</ul>
		<p>
			Before we fix these issues, let's look at other ways to preview the report.
		</p>


		<h2><a name="preview_html"></a>Preview as HTML</h2>
		<p>
			The Preview tab is handy for a quick review of your report. BIRT runs the report each
			time you switch to Preview. However, you can have either the Layout or the
			Preview tab open, but not both.
		</p>
		<p>
			Instead, we can preview the report in a separate window. Find the Preview button in
			the toolbar. Use the little arrow next to it to open the pull-down. You can then
			Preview as HTML in a separate window. This allows you to switch back and forth
			between your layout editor and your preview without rerunning the report.
		</p>


		<h2><a name="preview_pdf"></a>Preview as PDF</h2>
		<p>
			You can also choose Preview as PDF. This converts the layout to a multi-page PDF format.
		</p>
		<div class="homeitem3col">
			<h3>Release 1.0.1 Note</h3>
			<p>
				BIRT Release 1.0.1 uses the Apache XML-FO Processor (FOP) package. Limitations in the current version of FOP cause problems with the way the report appears in PDF. The BIRT team is aware of the problems and is working to address them in a later release.
			</p>
		</div>


		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
