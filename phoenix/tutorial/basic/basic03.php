<?php  			

Header("Location: /birt/documentation/tutorial/tutorial-3.php");																											require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PW8LFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

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
			For now, let's go ahead and close that view by clicking on the X (close)
			button in the upper left corner of the view, since we'll be following the steps in this tutorial. 
		</p>

		<h2><a name="layout_editor"></a>Layout Editor</h2>
		<p>
			The central area is the Layout Editor. This is the place where you create your report design. The editor has five tabs:
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
				Script -
				Where you add JavaScript to your report to customize its behavior.
			</li>
			<li>
				XML Source -
				You can view and modify the XML source of a report from here.
			</li>
			<li>
				Master Page -
				Used to format page data such as page headers.
			</li>						
		</ul>


		<h2><a name="views"></a>Views</h2>
		<p>
			Around the editor are a number of views:
			
			The views below can be arranged to the left, right or bottom of the Layout Editor 			
			
			
		</p>
		<ul class="midlist">
			<li>
				Palette -
				BIRT View that shows the standard <i>report items</i> you can add to your report
				using drag &amp; drop.
			</li>
			<li>
				Outline -
				BIRT View that shows the structure of your report as a tree view.
			<li>
			</li>
				Navigator -
				Standard Eclipse view that shows your projects, and the reports
				within your projects.
			</li>
			<li>
				Data Explorer -
				BIRT View that shows your data sources (connections), data sets
				(queries) and report parameters. You also use this view to add data set
				columns to your report layout.
			</li>
			<li>
				Property Editor -
				BIRT View that displays properties for many report items. It has
				tabs and groupings that organize properties into categories.
			</li>
			<li>
				Properties View -
				Standard Eclipse view that shows all properties for
				a report item as a simple list. This view is optional, and we will not use it in
				this tutorial.
			</li>
			<li>
				Library Explorer View -
				BIRT allows the reuse of report objects, such as tables, data sources and styles.
				Objects created for reuse are stored in a library file.  The Library Explorer will display
				Libraries that exist in the resource folder.  Developed libraries can be added to the resource folder by
				selecting File&rarr;Publish Library to Resource Folder or by right clicking in Library Explorer and selecting 
				add.  The resource folder location can be configured at:<br> 
				Window&rarr;Preferences&rarr;Report Design&rarr;Resource.
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
