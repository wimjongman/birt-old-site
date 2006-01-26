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
	$stepNumber				= 6;
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
				<li><a href="#layout">Report Layout</a></li>
				<li><a href="#items">Report Items</a></li>
				<li><a href="#detail">Create the Table Detail</a></li>
				<li><a href="#state_group">Create the State Group</a></li>
				<li><a href="#city_group">Create the City Group</a></li>
				<li><a href="#column">Add a Table Column</a></li>
				<li><a href="#headings">Create Column Headings</a></li>
			</ul>
		</blockquote>

		<h2><a name="layout"></a>Report Layout</h2>
		<p>
			Our customer listing report will display customer information in the form of a table: just like an HTML table, with the added ability to iterate over report data. The Grouped Listing template we chose earlier created the table for us, we just need to fill in the details. Before we do, let's introduce the various BIRT report items.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="items"></a>Report Items</h2>
		<p>
			BIRT provides a variety of report items for use when creating your report. Report items appear in the Palette view. Report items include:
		</p>
		<ul class="midlist">
			<li>
				Text -
				Text that can include HTML formatting and computed values. Used to create
				headings, form letters, "mail-merge" effects, etc.
			</li>
			<li>
				Label -
				Displays a simple piece of text such as "Customer Name".
			</li>
			<li>
				Data -
				Displays a database column or a computed value. Provides formatting.
			</li>
			<li>
				Image -
				Any kind of image supported by a web browser. Images can be embedded
				in the report, or links to a file on your web server.
			</li>
			<li>
				Grid -
				Provides a tabular arrangement of report items, much like an HTML table.
			</li>
			<li>
				List -
				Presents data from a data set in any kind of format. Used when the layout for
				each row is more sophisticated than a simple table row.
			</li>
			<li>
				Table -
				Presents data from a data set in the form of a table. Can contain grouping levels.
				Like an HTML table that has a table row for each data set row.
			</li>
			<li>
				Chart -
				Displays a business chart such as a pie chart, line chart, etc.
			</li>
		</ul>
		<p>
			This tutorial will use all the elements except for List and Chart.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="detail"></a>Create the Table Detail</h2>
		<p>
			The New Report dialog created a starter report that contains a table item with
			one level of grouping. If we'd chosen a blank report, we could create the table
			simply by dragging it from the palette.
		</p>
		<p>
			The next step is to add some content to the table. We'll start with the detail
			band which repeats to display each row from our data set. Here's how:
		</p>
		<ul class="midlist">
			<li>
				Display the Data Explorer if it's not already visible.
			</li>
			<li>
				Expand the Data Sets node of the tree.
			</li>
			<li>
				Expand the entry for the Customers data set that we created. This will display
			the columns available from the data set.
			</li>
			<li>
				Select the CUSTOMERNAME column.
			</li>
			<li>
				Locate the detail band within the table. (It is has a gray "Detail" label.)
			</li>
			<li>
				Drag the CUSTOMERNAME column into the detail band cell second from the
				left. Notice that the designer automatically adds the corresponding column header.
			</li>
			<li>
				Drag the PHONE column into the last cell in the detail band.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="state_group"></a>Create the State Group</h2>
		<p>
			We want our customer listing to be grouped by state, then city. Using a group causes all rows within the same state to appear together. Let's create the group heading for states:
		</p>
		<ul class="midlist">
			<li>
				Locate the group header row in your table. It has a light gray "Group Header" label.
			</li>
			<li>
				Drag the STATE column into the leftmost cell within the Group Header row.
			</li>
		</ul>
		<div class="homeitem3col">
			<h3>Creating Groups on your Own</h3>
			<p>
				We are using the group created for us by the New Report dialog. If we'd started
				by dragging the table from the palette, we'd create this first group as we'll
				explain in the next section.
			</p>
			<p>
				You must bind (associate) the table to a data set
				before you
				can create a group. The binding happened automatically when we dropped the
				first data set column into the table. However, if you build a table on your
				own, you can use the Binding tab in the Property Editor to bind the table to
				a data set.
			</p>
		</div>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="city_group"></a>Create the City Group</h2>
		<p>
			Next, we'll create a city group within the state. This groups customers first by state, then by city.
		</p>
		<ul class="midlist">
			<li>
				Click on the table tab (as described above) to display the table scaffolding.
			</li>
			<li>
				Click on the row header for the state group header.
			</li>
			<li>
				Choose Insert Group?Below.
				The Group Properties dialog appears.
			</li>
			<li>
				Chose the CITY column in the Group On field.
			</li>
			<li>
				Click OK.
			</li>
		</ul>
		<p>
			Notice that BIRT automatically inserted the a Data report item for the city group. Hover the cursor over the "@expression" to see the actual expression: row["CITY"].
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="column"></a>Add a Table Column</h2>
		<p>
			We need another table column to display our group heading:
		</p>
		<ul class="midlist">
			<li>
				Ensure the table scaffolding appears. Click on the shaded column header for the first column.
			</li>
			<li>
				Choose Insert&rarr;Column to the Right from the context menu. A new column appears.
			</li>
			<li>
				Move the CITY expression from (the expression in the first column of the second group heder) the second column of the second group header.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="headings"></a>Create Column Headings</h2>
		<p>
			We're almost done with the basic setup of our table. We just need to refine our column headings. BIRT added headings for us for each column we added to the table.
		</p>
		<ul class="midlist">
			<li>
				Double-click on the first column header text to change it. Type "State" and press Enter.
			</li>
			<li>
				Drag a label from the palette into the second column heading, type "City" and press Enter.
			</li>
			<li>
				Change the third column header to "Name".
			</li>
			<li>
				Change the last column header to "Phone".
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
