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
	$stepNumber				= 3;
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
				<li><a href="#brief_ui_tour">Brief UI Tour</a></li>
				<li><a href="#cheat_sheets">Cheat Sheets</a></li>
				<li><a href="#layout_editor">Layout Editor</a></li>
				<li><a href="#views">Views</a></li>
				<li><a href="#displaying_views">Displaying Views</a></li>
			</ul>
		</blockquote>

		<h2><a name="brief_ui_tour"></a>Brief UI Tour</h2>
		<p>
			Before we start work on the report, let's take a quick tour of the UI. We'll be looking at most of the UI in detail as we build our report.
		</p>


		<h2><a name="cheat_sheets"></a>Cheat Sheets</h2>
		<p>
			Notice at the right of your Eclipse workspace (for the default configuration) is
			a view called "Cheat Sheets." This view walks you though the process of building
			a report based on the template you selected.
		</p>
		<p>
			For now, let's go ahead and close that window since we'll be following the
			steps in this tutorial.
		</p>

		<h2><a name="layout_editor"></a>Layout Editor</h2>
		<p>
			The main area is the Layout Editor. This is the place where you create your report design. The editor has three tabs:
		</p>
		<ul class="midlist">
			<li>
				Layout -
				Where you edit your report design.
			</li>
			<li>
				Preview -
				Runs your report and shows the output.
			</li>
			<li>
				Code -
				Where you add code to your report using JavaScript.
			</li>
		</ul>


		<h2><a name="views"></a>Views</h2>
		<p>
			Around the editor are a number of views:
		</p>
		<ul class="midlist">
			<li>
				Palette -
				Shows the standard <i>report items</i> you can add to your report
				using drag &amp; drop.
			</li>
			<li>
				Outline -
				Shows the structure of your report as a tree view.
			<li>
			</li>
				Navigator -
				Standard Eclipse view that shows your projects, and the reports
				within your projects.
			</li>
			<li>
				Data Explorer -
				Shows your data sources (connections), data sets
				(queries) and report parameters. You also use this view to add data set
				columns to your report layout.
			</li>
			<li>
				Property Editor -
				Displays properties for many report items. It has
				tabs and groupings that organize properties into categories.
			</li>
			<li>
				Properties View -
				Standard Eclipse view that shows all properties for
				a report item as a simple list. This view is optional, and we'll not use it in
				this tutorial.
			</li>
		</ul>


		<h2><a name="displaying_views"></a>Displaying Views</h2>
		<p>
			You can arrange your views any way you like. You can also hide them by clicking
			the "X" button next to the view tab. If you accidentally hide a view, you can
			display it again by using the Window&rarr;Show View menu item.
		</p>
		<p>
			Many people find that a convenient layout is to have the Palette, Navigator, Outline
			and Data Explorer docked at the left edge of your workspace, and the Property
			Editor and Properties view docked at the bottom of the workspace.
		</p>


		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
