<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/test/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "Demos";
		$metaKeywords	= "Eclipse Keywords";
		$metaAuthor		= "";
		$metaDescription = "Eclipse Super Description for SEO in da House";
		$ogTitle		= "This is the OG Super Title";
		$ogImage		= "http://www.actuate.com/images/logo.png";
		$ogDescription  = "This is the ogDescription to be displayed in share options.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ** *Only usable values are 'index', 'noindex'
		$robotsFollow	= "follow"; // ***Only usable values are 'follow', 'nofollow'
		$canonicalTag	= ""; //this is a canonical tag used for duplicate content *** DO NOT USE UNLESS YOU KNOW WHAT YOU ARE DOING *** Default is blank! ex:http://www.actuate.com/products/
	 	
	 	# Generate Meta Info
		echo $PagePart->getMetaInfo($metaTitle, $metaKeywords, $metaAuthor, $metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag);
	 ?>
</head>	

<body>

<?php echo $PagePart->getAfterBody(); ?>

<div style="background-color:#f4f4f4;">
	<div class="content-area">
		<div class="content-area-inner" style="padding-top:40px;">
			
			<div class="actu-eclipse-side-menu">
				
				<?php echo $PagePart->getSideMenu(); ?>

			</div>


			<div class="dev-main eclipse-main">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">Demos</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ol>
		                    <li><a href="#introduction">Introduction</a></li>
		                    <li><a href="#birtdemo">BIRT Demo</a></li>
		                    <li><a href="#examples">Examples</a></li>
		                </ol>

			        </div>

			        <a name="introduction"></a>
					<h2 class="topic-section-header padding-top-small">Introduction</h2>
					<p>Welcome to the examples section of the BIRT site. Here you will find examples that illustrate some of the features of BIRT. This section will be changed frequently to add new examples. The example types are classified below. Feel free to make comments within the news group. Let us know what examples you would like to see.</p>
					
					<a name="birtdemo"></a>
					<h2 class="topic-section-header padding-top-small">BIRT Demo</h2>
					<p><a href="http://download.eclipse.org/birt/downloads/examples/misc/BIRT2.1Demo/EclipseDemo.html">BIRT Demo</a> - This demonstration is a Flash presentation of BIRT that showcases some of its powerful features including summary and line graphs, JavaScript for dynamic images, style usage, highlighting, grouping and detail drill down..</p>
					
					<a name="examples"></a>
					<h2 class="topic-section-header padding-top-small">Examples</h2>
					<p><strong>Solution Reports</strong> - The example reports here show just a few of the things you can do with BIRT. Unless otherwise noted, the reports are meant to be run against the "Classic Models Inc." sample database that is included in the BIRT download.</p>
					<p>Preview a report by clicking on the title link. To try a report for yourself, click on the rptdesign link to display the ROM file, save it to disk and then use File-->Import to bring the file into your Eclipse workspace. If the report uses the Classic Models database, you should be able to run the report immediately. If the report uses another database, follow the instructions provided in the "Other Notes" section of its description.
					<ul class="eclipse-list">
						<li>Listing
							<ul class="eclipse-list">
								<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/ProductCatalog.html" target="_blank">Product Catalog</a> (<a href="" target="_blank">rptdesign</a>) - Prints the Classic Models product catalog, grouped by product category. Provides product name, cost and description. Demonstrates one level grouping and using a grid within a table row to structure spacing. Also shows image inclusion and use of the <value-of> tag in text item to include the content of a database column. Finally, the report makes use of styles to simplify maintenance and achieve a consistent look.</li><br />
								<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/TopSellingProducts.html" target="_blank">Top Selling Products</a> (<a href="" target="_blank">rptdesign</a>) - Displays a pie chart showing revenue by product line. Lists the top selling products, sorted by revenue. Demonstrates use of a chart and sorting a result set. Also shows image inclusion and use of grid and tables to organize report content. Finally, the report makes use of styles to simplify maintenance and achieve a consistent look.</li><br />
								<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/TopNPercent.html" target="_blank">Top N / Top M% Customers</a> (<a href="" target="_blank">rptdesign</a>) - Making use of the top n and top precent filter capabilities added in BIRT 2.0, this report shows a bar chart with the top N customers by revenue, followed by a listing of the top M% customers by revenue sorted by customer name. This requires multiple passes over the data, but it is all done "under the covers" by the BIRT report engine. N and M are passed into the report as parameters to allow report users to select the number and percentage at run time.</li><br />
								<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/crosstab.html" target="_blank">Annual Sales By Product Lines</a> (<a href="" target="_blank">rptdesign</a>) - This example illustrates building a static crosstab report using the BIRT Total function. The report presents annual sales revenue by quarter for each of the product lines that Classic Models Inc currently sales. In addition totals are aggregated across horizontal and vertical dimensions. The BIRT Total function can accept a second parameter that filters the aggregate data. In this example this feature is used to only display values that pertain to a product offering, such as Trains. The first parameter in the Total function is the value to aggregate, and in this example it is set to quantity sold multiplied by price each. The second parameter is the filter. So if the filter where specified as dataSetRow["Products::PRODUCTLINE"]=="Motorcycles", only the Motorcycles product line would be aggregated.</li>
							</ul>
						</li><br />
						<li>Business Forms
							<ul class="eclipse-list">
								<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/SalesInvoice.html" target="_blank">Sales Invoice</a> (<a href="http://www.eclipse.org/birt/phoenix/examples/solution/SalesInvoice.rptdesign" target="_blank">rptdesign</a>) - Prints an invoice for the selected order, including customer and invoice details and products ordered. Demonstrates use of a parameter to select the order to invoice and expressions for several calculated fields, including discount and order total. Uses expression to build customer address string and illustrates suppression of nulls in database fields with javascript function replace. Also shows image inclusion and sophisticated use of grids and tables to organize report content. Finally, the report makes use of styles to simplify maintenance and achieve a consistent look.</li>
							</ul>
						</li>
					</ul>
					</p>
					
					<p><strong>Reporting Feature Examples</strong> - This section demonstrates features and functions of the BIRT Report Designer.
					<ul class="eclipse-list">
						<li></li><br />
					</ul>
					</p>
					
					<p><strong>Scripting</strong> - This section contains examples of scripting within the BIRT Designer.
					<ul class="eclipse-list">
						<li></li><br />
					</ul>
					</p>
					
					<p><strong>Integrating BIRT</strong> -  This section demonstrates several examples of deploying and using the APIs of BIRT.
					<ul class="eclipse-list">
						<li></li><br />
					</ul>
					</p>
					
					<p><strong>Extending BIRT</strong> - This section covers extending the feature set of BIRT, such as Open Data Access (ODA), Report Items, etc.
					<ul class="eclipse-list">
						<li></li><br />
					</ul>
					</p>

				</div>
			</div>

		</div>
	</div>

	
	<footer>
		<?php echo $PagePart->getFooter(); ?>
	</footer>
</div>
</body>
</html>