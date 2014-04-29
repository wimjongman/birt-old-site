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
		$metaTitle 		= "About";
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
					<h1 class="eclipse-title-main">Project Description and Scope</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/about/design.php">BIRT Design Overview</a></li>
		                    <li><a href="/birt/about/architecture.php">Architecture Overview</a></li>
		                    <li><a href="/birt/about/designer.php">Designer Overview</a></li>
		                    <li><a href="/birt/about/customization.php">Customization Overview</a></li>
		                    <li><a href="/birt/about/extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="index.php">Project Organization</a>
		                    	<ul>
		                    		<li><a href="description.php">Description and Scope</a></li>
		                    		<li><a href="charter.php">Charter</a></li>
		                    		<li><a href="principles.php">Principles</a></li>
		                    		<li><a href="committee.php">Management Committee</a></li>
		                    		<li><a href="contributors.php">Contributors</a></li>
		                    	</ul>
		                    </li>
		                    <li><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="/birt/about/birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">Background</h2>
			        <p>The Eclipse Business Intelligence and Reporting Tools Project addresses a broad range of needs in the business intelligence and reporting space using the Eclipse platform.</p>
			        <p>The business intelligence and reporting space is focused on tools and capabilities that extract data from data sources, process that data, and present the processed information to the end users. The information may be needed to enable the users to perform their operational or analytical job functions, or it may be customer-centric information such as a transaction statement. The capabilities can range from application- and production-level reporting, through ad hoc user-driven query tools, to highly interactive multi-dimensional online analytical processing (OLAP) and data mining tools. While many business intelligence and reporting applications access operational data sources, it is often the case that developers provide specific data warehouses to support the business intelligence and reporting needs of an application. The tools in this space can include facilities to help build these data warehouses.</p>
			        <p>It should be noted that a given application often needs a range of complementary capabilities in this area to meet the needs of different users of the application. For example, consider components of an online order processing application: The individual order invoices will be printed for inclusion in the shipping box and the shipping clerk will need an online or printed shipping list (both production-level reports); while a product line manager may want to perform ad hoc queries to see which products generate the most returns; while the purchasing agent may use analytics to look for trends and improve stocking levels. Providing a range of coordinated and complementary capabilities under the Eclipse Business Intelligence and Reporting Tools Project is intended to ensure that the developed technology can effectively be used to meet this broad range of needs.</p>
			        
			        <h2 class="topic-section-header padding-top-small">Initial Goals</h2>
			        <p>Initially, the Project will focus on leveraging the Eclipse platform to provide infrastructure and tools for the designing, deploying, generating and viewing of reports in an organization, including ad hoc query and reporting tools. While not an initial focus, the BIRT project scope includes complementing these reporting capabilities with Online Analytical Processing (OLAP) and Business Intelligence dashboard functionality. Over time, but not in the initial scope, the creation of additional projects is anticipated and encouraged to address additional aspects of business intelligence, such as Executive Information Systems (EIS), statistical analysis, modeling capabilities (what-if analysis), Data Mining Tools, Data Warehouse Modeling Tools, Extract Transform and Load (ETL) tools and Data Quality Tools.</p>
			        <p>The initial deliverable of the Eclipse Business Intelligence and Reporting Tools Project is to provide a robust platform that can be used to quickly and effectively create and deploy reports with any degree of complexity without having the developer create the data access, processing and formatting logic using Java code or components. In the majority of cases, the report developer will design a report within the Eclipse framework using a 100% visual design paradigm. However, in recognition of the fact that the variety of report layouts and complexity of data access is infinite, the project will also support extensive programmatic customization of the report generation processes, including programmatic creation of report designs.</p>
			        
			        <h2 class="topic-section-header padding-top-small">About Reports</h2>			        
					<p>Reports extract data from a data source or sources, perform manipulations and calculations on the data to answer business questions, and present the results as information in a formatted and convenient form for the business user to use. This information is then typically used for operational or decision support purposes within an organization. Reports vary dramatically in size, content and complexity and will include or combine characteristics such as:
					<ul class="eclipse-list">
						<li>Listings of information - Example: Transactions in an account.</li><br />
						<li>Sorting, grouping and aggregation of data with and without subtotals - Example: A listing of all product sales for each sales person, grouped by state.</li><br />
						<li>Charts to present information in easy to understand formats - Example: Pie chart showing an investor's portfolio allocation by High Growth/Growth/Income/etc. categories.</li><br />
						<li>Matrix or cross-tab layouts - Example: Financial budget reports with cost codes as rows, columns for each month, and cells containing numerical data for that cost code/month.</li><br />
						<li>Delivery of information as one or a combination of web pages, PDF files, printed documents, Excel files, etc. - Example: Frequent flyer statement delivered as a web page online and a printed document in the mail.</li><br />
						<li>Precise, highly formatted layouts - Examples: Bank statements, utility bills, commission statements, invoices, and government forms.</li><br />
						<li>Page navigation for long reports - Examples: Hundreds of pages corporate cell phone usage bill with First Page, Next Page, Go to Page, etc. buttons).</li><br />
						<li>Table of Contents - Example: Multi-page Investment Portfolio summary with Table of Contents to quickly navigate to Account Summary, Fund History, etc.</li><br />
						<li>Keyword or content search within a report - Example: find information on a customer in a 1000 page customer account report.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Target Users</h2>
					<p>For report development, the project broadly targets three classes of developer:
					<ul class="eclipse-list">
						<li>Application Developers - These are Java developers who are creating applications that include the need to retrieve data and present that data in the form of reports. This is likely to be a subset of the overall application and will include many of the characteristics discussed above. In this case, the report generation and viewing will be embedded in the overall application.</li><br />
						<li>Report Developers - Report developers are not typically skilled in writing Java code. They expect to use a visual desktop tool to create any type of report - including defining database connections, report content and report layout. These reports may then be deployed as part of an application, or through an easy to use deployment framework.</li><br />
						<li>Business Users - Business users often want to create their own report layouts or customize existing reports. They work through a very easy-to-use web-based report creation and editing facility to answer business questions on an ad hoc basis.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Architecture</h2>
					<p>The project will address both the design time needs of report creation as well as the run-time requirements of report generation and deployment. A high-level architecture diagram is provided below. The project will adopt and support accepted open standards wherever feasible.</p>
					<img src="/birt/img/birtarch.png" />
					<p>The Eclipse Business Intelligence and Reporting Project is divided into a number of sub-projects that reflect the initial focus on the reporting aspects of business intelligence and the high-level architecture of the project. These are discussed in the sub-project section below. As discussed above, the creation of additional sub-projects is anticipated and encouraged to address additional aspects of business intelligence.</p>
					<p>Due to the wide variety of potential applications, it is recognized that BIRT cannot meet all the requirements of all applications. It is therefore a core design principle for the projects within BIRT to support a broad range of extension points within the tools and frameworks that allow developers to address additional needs. These extension points may be utilized for adding value in commercial products using BIRT, or may be developed and contributed into the Eclipse open source community.</p>
					<p>For example, logging tools can use BIRT's data extension point to plug-in a data query user interface and access logic to read and process log files, use BIRT's report engine to present the information in the log, and extend BIRT's output/rendering adaptor to email or send a short message to a user with the report output in a format targeted for that device</p>
					<p>We expect the Business Intelligence and Reporting Tools Project to produce functional requirements that are more appropriately satisfied through the Eclipse Project or other Eclipse foundational projects. In such cases, the Business Intelligence and Reporting Tools Project PMC will coordinate the corresponding Project PMCs the design and implementation of the corresponding contribution.</p>


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