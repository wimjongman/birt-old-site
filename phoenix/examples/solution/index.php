<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Solution Reports";
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
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#listing">Listing</a></li>
				<li><a href="#forms">Business Forms</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			The example reports here show just a few of the things you can
			do with BIRT. Unless otherwise noted, the reports are meant to be run
			against the "Classic Models Inc." sample database that is included in
			the BIRT download.
		</p>
		<p>
			Preview a report by clicking on the title link. To try a report for
			yourself, click on the rptdesign link to display the ROM file, save it
			to disk and then use File--&gt;Import to bring the file into your
			Eclipse workspace. If the report uses the Classic Models database, you
			should be able to run the report immediately. If the report uses
			another database, follow the instructions provided in the "Other Notes"
			section of its description.
		</p>

		<h2><a name="listing"></a>Listing</h2>
		<ul class="midlist">
			<li>
				<b>
					<a href="/birt/phoenix/examples/solution/ProductCatalog.html" target="_blank" class="top">Product Catalog</a>
					(<a href="/birt/phoenix/examples/solution/ProductCatalog.rptdesign" target="_blank">rptdesign</a>)
				</b>
				<br>
				Prints the Classic Models product catalog, grouped by product category.
				Provides product name, cost and description. Demonstrates one level
				grouping and using a grid within a table row to structure spacing. Also
				shows image inclusion and use of the <em>&lt;value-of&gt;</em> tag in text item to include
				the content of a database column. Finally, the report makes  use of styles to simplify maintenance
				and achieve a consistent look.
			</li>
			<li>
				<b>
					<a href="/birt/phoenix/examples/solution/TopSellingProducts.html" target="_blank" class="top">Top Selling Products</a>
					(<a href="/birt/phoenix/examples/solution/TopSellingProducts.rptdesign" target="_blank">rptdesign</a>)
				</b>
				<br>
				Displays a pie chart showing revenue by product line. Lists the top
				selling products, sorted by revenue. Demonstrates use of a chart and
				sorting a result set. Also shows image inclusion and use of grid and
				tables to organize report content. Finally, the report makes use of
				styles to simplify maintenance and achieve a consistent look.
			</li>			
			<li>
				<b>
					<a href="/birt/phoenix/examples/solution/TopNPercent.html" target="_blank" class="top">Top N / Top M% Customers</a>
					(<a href="/birt/phoenix/examples/solution/TopNPercent.rptdesign" target="_blank">rptdesign</a>)
				</b>
				<br>
				Making use of the top n and top precent filter capabilities added in BIRT 2.0, 
				this report shows a bar chart with the top N customers by revenue, followed by
				a listing of the top M% customers by revenue sorted by customer name. 
				This requires multiple passes over the data, but it is all done "under the covers" by the BIRT report engine. 
				N and M are passed into the report as parameters to allow report users to select the number and percentage at run time.
			</li>
		</ul>


		<h2><a name="forms"></a>Business Forms</h2>
		<ul class="midlist">
			<li>
				<b>
					<a href="/birt/phoenix/examples/solution/SalesInvoice.html" target="_blank" class="top">Sales Invoice</a>
					(<a href="/birt/phoenix/examples/solution/SalesInvoice.rptdesign" target="_blank">rptdesign</a>)
				</b>
				<br>
				Prints an invoice for the selected order, including customer and
				invoice details and products ordered. Demonstrates use of a parameter
				to select the order to invoice and expressions for several calculated
				fields, including discount and order total. Uses expression to build
				customer address string and illustrates suppression of nulls in
				database fields with javascript function <em>replace</em>.
				Also shows image inclusion and sophisticated use of grids and tables to
				organize report content. Finally, the report makes use of styles to
				simplify maintenance and achieve a consistent look.
			</li>
		</ul>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
