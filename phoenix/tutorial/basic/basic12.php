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
	$stepNumber				= 12;
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
				<li><a href="#grid">Create a Grid</a></li>
				<li><a href="#row_properties">Row Properties</a></li>
				<li><a href="#column_properties">Column Properties</a></li>
				<li><a href="#image">Insert an Image</a></li>
				<li><a href="#run_date">Insert the Run Date</a></li>
			</ul>
		</blockquote>

		<h2><a name="grid"></a>Create a Grid</h2>
		<p>
			Let's add a suitable heading to our report.
			It will use the classic "left/center/right" layout: a logo on the
			left, the report title in the center, and the run date on the right.  
			Before you do this you may want to remove the current basic heading, which simply says “Report Header”. To do this:
			<ul>
			<li>
				Select the Grid item containing the “Report Header”which is located above your table.
			</li>
			<li>
				Delete it by right-clicking on it and selecting the delete option from the context menu.
			</li>
			</ul>
		</p>
		<p>
			The easiest way to create such a layout is to use a grid. A grid is like an
			HTML table, it tells BIRT the desired layout, and BIRT does the work to make it
			happen. In this case, we want a one-row grid with three columns each 1/3 the
			width of the page.
		</p>
		<ul class="midlist">
			<li>
				Drag a Grid item from the palette into your report above your table. The Insert Grid dialog appears.
			</li>
			<li>
				Choose 3 columns and 2 rows.
			</li>
			<li>
				Click OK.
			</li>
		</ul>


		<h2><a name="row_properties"></a>Row Properties</h2>
		<p>
			We want the contents of the header to be top-aligned. And we'll use the second row as a spacer between the header proper and the report body:
		</p>
		<ul class="midlist">
			<li>
				Select the entire first row of the Grid that you just added. 
			</li>
			<li>
				In the General page of the Property Editor, set the vertical alignment to Top.
			</li>
			<li>
				Select the second row.
			</li>
			<li>
				In the General page of the Property Editor, set the height to 0.25 in.
			</li>
		</ul>


		<h2><a name="column_properties"></a>Column Properties</h2>
		<p>
			We want each of the three columns to be 1/3 the width of the page, and we want them to be left, center and right aligned:
		</p>
		<ul class="midlist">
			<li>
				Select the first column header.
			</li>
			<li>
				Switch to the General tab in the Property Editor. Notice that the width	is unset. As in HTML,
				if the column width is not set, BIRT will size the column to its content.
			</li>
			<li>
				Set the column widths to 33%. Do this by typing "33" in the width field,
				then selecting "%" from the adjacent pull-down.
			</li>
			<li>
				Select the middle column.
			</li>
			<li>
				Repeat the step above to set the width to 33%.
			</li>
			<li>
				In the General page of the Property Editor, set the text alignment to Center.
			</li>
			<li>
				Select the rightmost column.
			</li>
			<li>
				Repeat the step above to set the width to 33%.
			</li>
			<li>
				In the General page of the Property Editor, set the text alignment to Right.
			</li>
		</ul>


		<h2><a name="image"></a>Insert an Image</h2>
		<p>
			Let's click the preview tab to see how our report looks after the formatting. Not bad, but we still need the report heading.  To do this:
		</p>
		<ul class="midlist">
			<li>
				Drag an Image item from the palette into the left-most cell of your grid.
			</li>
			<li>
				The Image Builder dialog appears.
			</li>
			<li>
				Ensure that the URL radio button is selected.
			</li>
			<li>
				Enter the following URL: "http://www.eclipse.org/birt/phoenix/tutorial/basic/multichip-4.jpg". (don’t forget to add the quotes.)
			</li>
			<li>
				Click the Preview button to ensure that the URL is correct.
			</li>
			<li>
				Click Insert to add the image to your report.
			</li>
		</ul>
		<p>
			You can also embed an image from your local disk. Embedding the image copies the image into the report design. Using a URL is more efficient.
		</p>



		<h2><a name="run_date"></a>Insert a Run Date</h2>
		<p>
			Next, let's display the current date in the right-most cell in the heading.  To do this:
		</p>
		<ul class="midlist">
			<li>
				Drag a Data item from the Palette into the right-most cell of your grid.
			</li>
			<li>
				The expression builder will appear.
			</li>
			<li>
				Type "new Date( )" (without the quotes) to display the current date.
			</li>
			<li>
				Click OK.
			</li>
			<li>
				Set the date format. Select the Format DateTime page within the Property Editor.
			</li>
			<li>
				Choose the date format that looks like this: May 12, 2005. (The actual date will be today's date.) This is the BIRT "Medium Date" date format.
			</li>
		</ul>
		<p>
			BIRT uses Java formatting (based on Microsoft Excel) for dates, numbers and
			strings. In addition, BIRT adds a number of specialized, locale-aware date formats
			described in the <a href="/birt/phoenix/ref/ROM_Styles_SPEC.pdf">ROM Styles Specification</a>.
		</p>



		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
