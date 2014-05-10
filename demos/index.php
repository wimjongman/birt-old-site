<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "Demos";
		$metaKeywords	= "Eclipse,BIRT,Java,Java EE,Web,RCP,Data,Visualization,Reports,Reporting,Embed,Rich-Client,Dashboards";
		$metaAuthor		= "";
		$metaDescription = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		$ogTitle		= "Eclipse BIRT Project Home";
		$ogImage		= "http://www.eclipse.org/birt/img/logo/Birt-logo.png";
		$ogDescription  = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		
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
		                <ul>
		                    <li><a href="#introduction">Introduction</a></li>
		                    <li><a href="#birtdemo">BIRT Demo</a></li>
		                    <li><a href="#examples">Examples</a>
		                    	<ul>
		                    		<li><a href="#solution">Solution Reports</a></li>
		                    		<li><a href="#features">Reporting Features</a></li>
		                    		<li><a href="#scripting">Scripting</a></li>
		                    		<li><a href="#integrating">Integrating BIRT</a></li>
		                    		<li><a href="#extending">Extending BIRT</a></li>
		                    	</ul>
		                    </li>
		                </ul>

			        </div>

			        <a name="introduction"></a>
					<h2 class="topic-section-header padding-top-small">Introduction</h2>
					<p>Welcome to the examples section of the BIRT site. Here you will find examples that illustrate some of the features of BIRT. This section will be changed frequently to add new examples. The example types are classified below. Feel free to make comments within the news group. Let us know what examples you would like to see.</p>
					
					<a name="birtdemo"></a>
					<h2 class="topic-section-header padding-top-small">BIRT Demo</h2>
					<p><a href="http://download.eclipse.org/birt/downloads/examples/misc/BIRT2.1Demo/EclipseDemo.html">BIRT Demo</a> - This demonstration is a Flash presentation of BIRT that showcases some of its powerful features including summary and line graphs, JavaScript for dynamic images, style usage, highlighting, grouping and detail drill down..</p>
					
					<a name="examples"></a>
					<h2 class="topic-section-header padding-top-small">Examples</h2>
					<p>If a preview exists, you can see it by clicking on the title link. To try a report for yourself, click on the rptdesign link to display the ROM file, save it to disk and then use File-->Import to bring the file into your Eclipse workspace. If the report uses the Classic Models database, you should be able to run the report immediately. If the report uses another database, follow the instructions provided in the "Other Notes" section of its description. If there is a demo or other downloads required, there will also be a link for those with the .rptdesign download link.</p>
					<a name="solution"></a>
					<h3>Solution Reports</h3>
					<p>The example reports here show just a few of the things you can do with BIRT. Unless otherwise noted, the reports are meant to be run against the "Classic Models Inc." sample database that is included in the BIRT download.
					<ul class="eclipse-list">
						<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/ProductCatalog.html" target="_blank">Product Catalog</a> (<a href="https://wiki.eclipse.org/images/1/16/BIRTDemosProductCatalog.zip" target="_blank">rptdesign</a>) - Prints the Classic Models product catalog, grouped by product category. Provides product name, cost and description. Demonstrates one level grouping and using a grid within a table row to structure spacing. Also shows image inclusion and use of the <value-of> tag in text item to include the content of a database column. Finally, the report makes use of styles to simplify maintenance and achieve a consistent look.</li><br />
						<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/TopSellingProducts.html" target="_blank">Top Selling Products</a> (<a href="/birt/resources/demos/TopSellingProducts.rptdesign" target="_blank">rptdesign</a>) - Displays a pie chart showing revenue by product line. Lists the top selling products, sorted by revenue. Demonstrates use of a chart and sorting a result set. Also shows image inclusion and use of grid and tables to organize report content. Finally, the report makes use of styles to simplify maintenance and achieve a consistent look.</li><br />
						<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/TopNPercent.html" target="_blank">Top N / Top M% Customers</a> (<a href="/birt/resources/demos/TopNPercent.rptdesign" target="_blank">rptdesign</a>) - Making use of the top n and top precent filter capabilities added in BIRT 2.0, this report shows a bar chart with the top N customers by revenue, followed by a listing of the top M% customers by revenue sorted by customer name. This requires multiple passes over the data, but it is all done "under the covers" by the BIRT report engine. N and M are passed into the report as parameters to allow report users to select the number and percentage at run time.</li><br />
						<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/crosstab.html" target="_blank">Annual Sales By Product Lines</a> (<a href="/birt/resources/demos/StaticCrosstab.rptdesign" target="_blank">rptdesign</a>) - This example illustrates building a static crosstab report using the BIRT Total function. The report presents annual sales revenue by quarter for each of the product lines that Classic Models Inc currently sales. In addition totals are aggregated across horizontal and vertical dimensions. The BIRT Total function can accept a second parameter that filters the aggregate data. In this example this feature is used to only display values that pertain to a product offering, such as Trains. The first parameter in the Total function is the value to aggregate, and in this example it is set to quantity sold multiplied by price each. The second parameter is the filter. So if the filter where specified as dataSetRow["Products::PRODUCTLINE"]=="Motorcycles", only the Motorcycles product line would be aggregated.</li>
						<li><a href="http://www.eclipse.org/birt/phoenix/examples/solution/SalesInvoice.html" target="_blank">Sales Invoice</a> (<a href="/birt/resources/demos/SalesInvoice.rptdesign" target="_blank">rptdesign</a>) - Prints an invoice for the selected order, including customer and invoice details and products ordered. Demonstrates use of a parameter to select the order to invoice and expressions for several calculated fields, including discount and order total. Uses expression to build customer address string and illustrates suppression of nulls in database fields with javascript function replace. Also shows image inclusion and sophisticated use of grids and tables to organize report content. Finally, the report makes use of styles to simplify maintenance and achieve a consistent look.</li>
					</ul>
					</p>
					
					<a name="features"></a>
					<h3>Reporting Feature Examples</h3>
					<p>This section of Examples focuses on the feature set within BIRT. Simple reports are used to illustrate a function within BIRT. Most examples will have a before and after report that can be downloaded. In addition, the example is illustrated in a Flash presentation. The examples use popups to explain the process and provide no sound.
					<ul class="eclipse-list">
						<li><a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/xmlds/after.jpg" target="_blank">XML Data Source</a> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/xmlds/XMLDS_After.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/xmlds/Classic-Models-Minimal-M-Trans%20(smaller).png" target="_blank">image</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/xmlds/XMLDS.html" target="_blank">demo</a>) - This example demonstrates how BIRT can be used to build reports on XML data sources. An XML file or an URI can serve as data sources for a BIRT report. In this example, we utilize URI's to the Eclipse RSS Newsfeed as the data source for a report.</li><br />
						<li><strong>Libraries</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/Newsfeeds_After.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/Newsfeeds.rptlibrary" target="_blank">rptlibrary</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/blue.css" target="_blank">CSS1</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/green.css" target="_blank">CSS2</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/CreatingLibrary/CreatingLib.html" target="_blank">creating demo</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/UsingLibrary/UsingLib.html" target="_blank">using demo</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/lib/UpdatingLibrary/UpdatingLib.html" target="_blank">updating demo</a>) - This example demonstrates how BIRT can be used to build reusable component report libraries. In this example, we start by creating a library. We utilize URI's to the Eclipse RSS Newsfeed as the data source for a report and store it in the library. We then publish the library to a resource folder. This example demonstrates the creation of non-visual items in a library. It is important to note that visual items can also be created and stored in a library.</li><br />
						<li><a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/combochart/final.JPG" target="_blank">Combination Chart</a> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/combochart/CustomerOrdersFinal.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/combochart/combinationchart.html" target="_blank">demo</a>) - This example demonstrates how a Combination Chart can be created within BIRT. In addition this example also demonstrates how to add drill to details, using internal bookmarks and the Chart Interactivity Editor. The combination chart presents the outstanding debt for the top 5 customers in Bar Chart format with a Line series representing each customers credit limit superimposed. The bars within the chart are then linked to order details for each customer.</li><br />
						<li><strong>Cascaded Parameter</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/cascade/cascade.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/cascade/cascade.html" target="_blank">demo</a>) - This example demonstrates how to build a BIRT report that uses a cascaded parameter group. A cascaded parameter group allows a group of parameters to be interlinked, where selecting a value for the first parameter affects the choices available in the subsequent parameters. Cascaded parameters can be tied to one or more Data Sets. The Data Sets populate each level of the cascade. Combined with Data Set parameters this offers very good flexibility for culling of returned data for a report.<br /><br />
						In this particular example we demonstrate cascading parameters by producing a order details report. The user of the report is presented with a cascaded parameter group that contains customers and orders. When a customer is selected the orders for the customer is updated in the parameter selection. After the order is selected a order detail report is generated for the selected order. This report contains three Data Sets. The customers Data Set is used to retrieve customers for the first level of the cascade. The orders Data Set is used to display orders in the parameter cascade for the selected customer. This Data Set uses the customer selected as part of the where clause and demonstrates tying a report parameter to a Data Set parameter. The final Data Set is orderdetails and uses the order report parameter in its where clause to retrieve the details about the selected order. This is the only Data Set used in the actual output of the report.
						</li><br />
						<li><strong>Query Modifications</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/querymod/OrderDetailsAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/querymod/querymod.html" target="_blank">demo</a>) - This example demonstrates how to modify a JDBC query using Property Binding or Script. Property Binding is a feature within BIRT that allows run time modification of Data Source and Data Set public properties. This can be useful to add context sensitive information to either element. As an example, the where clause can be modified to retrieve the user name from session or the database URL can be switched between development and production based on a report parameter.</li><br />
						<li><strong>Drill to Details</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/drill/OrderMasterAfter.rptdesign" target="_blank">master rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/drill/OrderDetailAfter.rptdesign" target="_blank">detail rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/drill/drill.html" target="_blank">demo</a>) - This example demonstrates building a master report and a detail report. The master report list orders and allows the report user to click on a particular order number to drill into a detail report for the selected order. This example illustrates using a simple parameter to cull results in the detail report and the hyperlink property within the master report to pass this parameter to the detail report. The hyperlink property within the master report is generated dynamically based on results retrieved from a query.</li><br />
						<li><strong>Report Elements</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/elements/ProductLinesAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/elements/elements.html" target="_blank">demo</a> | <a href="" target="_blank">image</a>) - This example demonstrates using Label, Text, Dynamic Text, Data, and Image elements within a report design. Some key features and differences between the elements are also identified. This example also illustrates retrieving BLOB and CLOB data from a datasource.</li><br />
						<li><strong>Sub Reports</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/subreport/OrdersAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/subreport/subreport.html" target="_blank">demo</a>) - This example demonstrates building a report that uses nested tables. The query that is bound to the inner table is parameterized to return order details for a given order number in the outer table. This example also illustrates referencing outer table columns within a nested table. This allows BIRT reports to be designed with master detail information contained within th same report. As the outer table is processing its rows the inner table query is re-executed based on information from the outer table.</li><br />
						<li><strong>Mapping and Sorting</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/mappingsorting/CustomerListAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/mappingsorting/mappingsorting.html" target="_blank">demo</a>) - This example demonstrates using the Mapping and Sorting features of BIRT. Mapping allows a BIRT report element to display a different value based on an expression. For example if a query returns a numerical field for month (1-12) the mapping feature can be used to present January - December. In this example we use mapping to display a credit rank for Classic Models customers. Sorting is used in many places in BIRT and is very flexible. In this example we demonstrate adding a sort expression to a Table element that is tied to a report parameter. The parameter allows entering a search string, which is then used in the sort expression to set the sort order for the table.</li><br />
						<li><strong>Parallel Report</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/parallel/EmployeeAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/parallel/parallel.html" target="_blank">demo</a>) - This example demonstrates how to build a report with parallel sections. It also illustrates using table filters to cull the data displayed. The report uses a grid element to layout two columns. In each column a set of nested tables are added to retrieve employee information and group by position hierarchy. The tables are filtered by office code.</li><br />
						<li><strong>Highlighting and Conditional Formatting</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/highlighting/ProductListAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/highlighting/highlighting.html" target="_blank">demo</a>) - This example demonstrates how to add highlighting and conditional formatting to a BIRT report. A Products list report is developed that displays all company products. The example report uses alternating row colors and highlights rows that represent a product that is low in quantity. This report also illustrates adding a script to the onCreate event of a row to modify the row style to italics for products with high markup values.</li><br />
						<li><strong>Grouping</strong> (<a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/grouping/CustomerListAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/reports/2.1/grouping/grouping.html" target="_blank">demo</a>) - This example demonstrates building a grouped report in BIRT. The example report shows a list of customers and groups these by country. Key BIRT features that are covered in this demonstration are grouping, page breaks, table of contents, and aggregrating data per group or as a total.</li>
					</ul>
					</p>
					
					<a name="scripting"></a>
					<h3>Scripting</h3>
					<p>This section of Examples focuses on scripting within BIRT. Simple reports are used to illustrate scripting functionallity. Most examples will have a before and after report that can be downloaded. In addition, the example is illustrated in a Flash presentation.
					<ul class="eclipse-list">
						<li><a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/after.html" target="_blank">Scripted Data Source</a> (<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/reports/ScriptedDatasourceExampleAfter.rptdesign" target="_blank">rptdesign</a> | <a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/javacode/SimpleClass.java" target="_blank">Java code</a> | <a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/scripteddatasource.html" target="_blank">demo</a>) - This example is intended to illustrate using BIRT's Scripted Data Source. This example simulates retrieving results from an online survey. The results of the survey are accessed using a Java Object, which is called from a BIRT Scripted Data Source.</li>
					</ul>
					</p>
					
					<a name="integrating"></a>
					<h3>Integrating BIRT</h3>
					<p>This section of Examples focuses on integrating BIRT. You can find several examples demonstrating the design engine API and the report engine API in the <a href="https://wiki.eclipse.org/Integration_Examples_(BIRT)" target="_blank">wiki</a>. These examples focus on using the BIRT APIs, to embedd or integrated BIRT. </p>
					
					<a name="extending"></a>
					<h3>Extending BIRT</h3>
					<p>This section of Examples focuses on Extending BIRT. The examples here focus on implementing BIRT supplied extension points, giving the BIRT developer the capability to add to, or change the default behavior of the designer or runtime engine. This includes adding Chart Types, aggregate functions, Data Sources and Report Items.
					<ul class="eclipse-list">
						<li><strong>Aggregate Function Extension Point</strong> (<a href="http://www.eclipse.org/birt/phoenix/examples/extending/aggregate/optim.rptdesign" target="_blank">rptdesign</a> | <a href="http://www.eclipse.org/birt/phoenix/examples/extending/aggregate/optimiticSum.zip" target="_blank">Java code</a> | <a href="http://download.eclipse.org/birt/downloads/examples/extension/aggregate/aggregate.html" target="_blank">demo</a>) - This example shows how to create a BIRT Aggregate Data Extension. Imagine your manager wants you to create a new more optimistic way to sum up data in a report. Is there a way that you can create a common solution that can be consistently re-used across all of your reports? Through the Birt Aggregate Data Extension you can create new custom functions that show up as native BIRT functions.</li><br />
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