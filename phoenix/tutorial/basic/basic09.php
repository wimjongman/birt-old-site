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
	$stepNumber				= 9;
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
				<li><a href="#about">About Data Properties</a></li>
				<li><a href="#setting_sort">Setting the Detail Sort</a></li>
			</ul>
		</blockquote>

		<h2><a name="about"></a>About Data Properties</h2>
		<p>
			In addition to the visual properties we just saw, BIRT provides a set of
			data-related properties for each report item. We'll use these to control the
			sort order of the customers within our report.
		</p>
		<p>
			Data sets in BIRT are reusable: you can use the same data set multiple times.
			For example, suppose you want to show year-to-date (YTD) sales three ways: by
			month, by sales rep, and as a chart. With BIRT, you define the data set once,
			but present it three times. Each use of the data set can provide data properties
			that customize the data set to that particular use.
		</p>
		<p>
			Data properties include:
		</p>
		<ul class="midlist">
			<li>
				Data set binding: lets you specify the data set to use with any given report item.
			</li>
			<li>
				Parameter binding: you can pass data into the data set. For example, you can create a
				"master/detail" subreport by using data set parameters to pass
			  	data from the current row in the master report to the detail for the
			 	subreport. For example, you can obtain a list of customers from one database,
			  	then have the subreport display orders from a different database.
			</li>
			<li>
				Filters: provide filter conditions unique to a given presentation. For
			  	example, a list of transactions might list all transactions, but then use
			  	filters to display sales in one chart, returns in another.
			</li>
			<li>
				Groups: provide ability to create subtotals in addition to visual affects we've seen so far.
			</li>
			<li>
				Sorting: controls the order of the detail rows within a table. This is the property we'll use.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="setting_sort"></a>Setting the Detail Sort</h2>
		<p>
			We're ready to specify the sort order for customers within our report.
		</p>
		<ul class="midlist">
			<li>
				Select the table.</li>
			<li>
				Choose the Sorting tab within the Property Editor. (Note: Sorting is a tab on the bottom, not a page on the left as we've used thus far.)
			</li>
			<li>
				Click the Add button to add a new line.
			</li>
			<li>
				Use the pull-down under Sort Key to choose "CUSTOMERNAME".
			</li>
			<li>
				Leave the Sort Direction at Ascending.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
