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


		<h2><a name="items"></a>Report Items (Elements)</h2>
		<p>
			BIRT provides a variety of report items or Elements for use when creating your report. Report items appear in the Palette view. Report items include:
		</p>
		<ul class="midlist">
			<li>
				Label -
				Displays a simple piece of text such as "Customer Name".
			</li>
			<li>
				Text -
				Text that can include HTML formatting and computed values. Used to create
				headings, form letters, "mail-merge" effects, etc.
			</li>
			
			<li>
				Dynamic Text -
				 Displays a database column that can contain HTML formatted (CLOB) data. 
				 Allows for advanced CLOB data manipulation through expressions.	
			</li>			
			<li>
				Data -
				Displays a database column or a computed value. Provides formatting.
			</li>
			<li>
				Image -
				Any kind of image supported by a web browser. Images can be embedded
				in the report, referenced through a URI, read from the resource folder or retrieved from a BLOB field in a data set.
			</li>
			<li>
				Grid -
				Provides a tabular arrangement of report items, much like an HTML table.  This element 
				doesnt iterate over data sets like a List or a Table.
			</li>
			<li>
				List -
				Presents data from a data set in any kind of format. Used when the layout for
				each row is more sophisticated than a simple table row.  This Element will iterate over a bound Data Set.
			</li>
			<li>
				Table -
				Presents data from a data set in the form of a table. Can contain grouping levels.
				Like an HTML table that has a table row for each data set row.  This Element, like a list will iterate over a bound
				Data Set.
			</li>
			<li>
				Chart -
				Displays a business chart such as a pie chart, line chart, etc.
			</li>
		</ul>
		<p>
			This tutorial will use all the elements except for List, Chart and Dynamic Text.
		</p>


		<h2><a name="detail"></a>Create the Table Detail</h2>
		<p>
			The New Report dialog created a starter report that contains a table item with
			one level of grouping. If we'd chosen a blank report, we could create the table
			simply by dragging it from the palette.
		</p>
		<p>
			The next step is to add content to the table. We'll start with the detail
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
				Locate the detail band within the table. (It is has a gray "Detail Row" label.)
			</li>
			<li>
				Drag the CUSTOMERNAME column into the detail band cell second from the
				left. Notice that the designer automatically displays the Binding Editor.  
				This operation adds a Data Element and a Label Element to the Table Element.
				The Binding Editor maps the Data Element to the Data Set row column CUSTOMERNAME.
				You can change this value by selecting the ellipse next to the expression within the Binding Editor. 
				You will now see that the Table Element contains the new Label Element and the new Data Element.
			</li>
			<li>
				Click OK.
			</>
			<li>
				Drag the PHONE column into the rightmost cell of the detail band.
			</li>
			<li>
				Click OK
			</li>
		</ul>


		<h2><a name="state_group"></a>Create the State Group</h2>
		<p>
			We want our customer listing to be grouped by state, then city. Using a group causes all rows within the same state to appear together. Let's create the group header for states:
		</p>
		<ul class="midlist">
			<li>
				Locate the group header row in your table. It has a light gray "Group Header Row" label.
			</li>
			<li>
				Drag the STATE column into the leftmost cell within the Group Header row.
			</li>
			<li>
				Click OK.
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


		<h2><a name="city_group"></a>Create the City Group</h2>
		<p>
			Next, we'll create a city group within the state. This groups customers first by state, then by city.
		</p>
		<ul class="midlist">
			<li>
				Hover the cursor over the table and a Table tab will be displayed.
		   </li>
			<li>
				Click on the Table tab to display the table scaffolding.
			</li>
			<li>
				Select the Property Editor&rarr;Binding Tab. You will see that the Table is bound to the
				Customers Data Set.  Under Data Column Binding you will notice the three Table columns that have already been created.
			</li>
			<li>
				Select Add.  The BIRT Expression Builder will be displayed.
			</li>
			<li>
				Select Available Data Sets under Category, Customers under Sub-Category and then double-click on the CITY column.
			</li>
			<li>
				Select OK and change the Binding name from New Binding to CITY.  The Data Set Row column CITY is now available to be used within the Table.
			</li>
			<li>
				Right-click on the row header for the state group header and a context menu will be displayed.
			</li>
			<li>
				From the context menu choose Insert Group&rarr;Below. The Group Details dialog appears.
			</li>
			<li>
				Chose the CITY column in the Group On field and type City in the Name field.
			</li>
			<li>
				Click OK.
			</li>
		</ul>
		<p>
			Notice that BIRT automatically inserted a Data element for the city group.
		</p>


		<h2><a name="column"></a>Add a Table Column</h2>
		<p>
			We need another table column to display our group heading:
		</p>
		<ul class="midlist">
			<li>
				Ensure the table scaffolding appears. Right-click on the shaded column header for the first column.
			</li>
			<li>
				Choose Insert&rarr;Column to the Right from the context menu. A new column appears.
			</li>
			<li>
				Move the CITY Data Element (the Element in the first column of the second group header) to the second column of the second group header by dragging it.
			</li>
		</ul>


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


		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
