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
	$stepNumber				= 11;
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
				<li><a href="#about">About Style Cascade</a></li>
				<li><a href="#properties">Setting Report-Wide Properties</a></li>
				<li><a href="#styles">Other Default Styles</a></li>
				<li><a href="#report">Check the Report</a></li>
			</ul>
		</blockquote>

		<h2><a name="about"></a>About Style Cascade</h2>
		<p>
			We've mentioned that BIRT uses CSS to define the styles for report items,
			and we saw how to define and apply our own style. BIRT also follows the
			"cascade" part of Cascading Style Sheets: you can set a property once for the
			report, or a container, and have that value <i>cascade</i> down through the
			contents of the container.
		</p>
		<p>
			In BIRT, Grid, List and Table items are containers: they can hold other
			report items. The report itself is the ultimate container for all report items.
		</p>


		<h2><a name="properties"></a>Setting Report-Wide Properties</h2>
		<p>
			Our report currently uses the default font: a serif style. (Actually, by default
			BIRT uses the font set in your browser. Many browsers use a serif style by default,
			but if you've changed your default browser font, that is how the report will
			appear.)
		</p>
		<p>
			Let's use a sans-serif
			style instead. We do this by  using a BIRT-defined style.
			If you familiar with CSS, this is like defining a style that selects the HTML
			body tag.
		</p>
		<ul class="midlist">
			<li>
				Open or locate the Outline view.
			</li>
			<li>
				Scroll down to the bottom to find the Styles node.
			</li><li>
				Open the Styles node.
			</li>
			<li>
				Find the style named "report". Double-click it to open the Style editor.
			</li>
			<li>
				In the Font page, choose "sans serif" as the font type.
			</li>
			<li>
				Click OK.
			</li>
		</ul>
		<p>
			All items in your report will change to sans-serif font.
		</p>
		<p>
			The names "serif" and "sans-serif" are defined by CSS: they are generic font
			styles that don't depend on the specific fonts installed on a machine. CSS
			generic font names avoid dependencies on specific fonts installed on the browser
			machine; something that is important if your reports will be appear
			as part of a public web site. You can also use font lists as in CSS. For
			example: "Helvetica, Arial, sans-serif".
		</p>

		<h2><a name="styles"></a>Other Default Styles</h2>
		<p>
			BIRT defines default styles for most report items and for list and table bands.
			See the <a href="/birt/phoenix/ref/ROM_Styles_SPEC.pdf">ROM Styles Specification</a>
			for the complete list.
		</p>
		<p>
			The Styles node displays the styles that apply to each of the report items.
			However, there are additional styles that apply to grouping levels and other
			contexts. If you wish to use one of these, simply create a style with the
			required name.
		</p>

		<h2><a name="report"></a>Check the Report</h2>
		<p>
			Let's click the preview tab to see how our report looks after the formatting. Not bad, but we still need the report heading.
		</p>


		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
