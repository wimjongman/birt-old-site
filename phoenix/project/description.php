<?php  		

Header("Location: /birt/about/project-organization/description.php");																												require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Description and Scope";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	require "project.inc";
	$currentPage			= "Project Description and Scope";
	$linkToTop				= linkToTop();
	$projectLinksSideItem  	= getProjectLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#background">Background</a></li>
				<li><a href="#goals">Initial Goals </a></li>
				<li><a href="#about">About Reports</a></li>
				<li><a href="#users">Target Users </a></li>
				<li><a href="#architecture">Architecture</a></li>
			</ul>
		</blockquote>

		<h2><a name="background"></a>Background</h2>
		<p>
			The Eclipse Business Intelligence and Reporting Tools Project addresses
			a broad range of needs in the business intelligence and reporting space
			using the Eclipse platform.
		</p>

		<p>
			The business intelligence and reporting space is focused on tools and
			capabilities that extract data from data sources, process that data, and
			present the processed information to the end users. The information may
			be needed to enable the users to perform their operational or analytical
			job functions, or it may be customer-centric information such as a transaction
			statement. The capabilities can range from application- and production-level
			reporting, through ad hoc user-driven query tools, to highly interactive
			multi-dimensional online analytical processing (OLAP) and data mining
			tools. While many business intelligence and reporting applications access
			operational data sources, it is often the case that developers provide
			specific data warehouses to support the business intelligence and reporting
			needs of an application. The tools in this space can include facilities
			to help build these data warehouses.
		</p>

		<p>
			It should be noted that a given application often needs a range of complementary
			capabilities in this area to meet the needs of different users of the
			application. For example, consider components of an online order processing
			application: The individual order invoices will be printed for inclusion
			in the shipping box and the shipping clerk will need an online or printed
			shipping list (both production-level reports); while a product line manager
			may want to perform ad hoc queries to see which products generate the
			most returns; while the purchasing agent may use analytics to look for
			trends and improve stocking levels. Providing a range of coordinated and
			complementary capabilities under the Eclipse Business Intelligence and
			Reporting Tools Project is intended to ensure that the developed technology
			can effectively be used to meet this broad range of needs.
		</p>

		<h2><a name="goals"></a>Initial Goals</h2>
		<p>
			Initially, the Project will focus on leveraging the Eclipse platform
			to provide infrastructure and tools for the designing, deploying, generating
			and viewing of reports in an organization, including ad hoc query and
			reporting tools. While not an initial focus, the BIRT project scope includes
			complementing these reporting capabilities with Online Analytical Processing
			(OLAP) and Business Intelligence dashboard functionality. Over time, but
			not in the initial scope, the creation of additional projects is anticipated
			and encouraged to address additional aspects of business intelligence,
			such as Executive Information Systems (EIS), statistical analysis, modeling
			capabilities (what-if analysis), Data Mining Tools, Data Warehouse Modeling
			Tools, Extract Transform and Load (ETL) tools and Data Quality Tools.
		</p>

		<p>
			The initial deliverable of the Eclipse Business Intelligence and Reporting
			Tools Project is to provide a robust platform that can be used to quickly
			and effectively create and deploy reports with any degree of complexity
			without having the developer create the data access, processing and formatting
			logic using Java code or components. In the majority of cases, the report
			developer will design a report within the Eclipse framework using a 100%
			visual design paradigm. However, in recognition of the fact that the variety
			of report layouts and complexity of data access is infinite, the project
			will also support extensive programmatic customization of the report generation
			processes, including programmatic creation of report designs.
		</p>

		<h2><a name="about"></a>About Reports</h2>
		<p>
			Reports extract data from a data source or sources, perform manipulations
			and calculations on the data to answer business questions, and present
			the results as information in a formatted and convenient form for the
			business user to use. This information is then typically used for operational
			or decision support purposes within an organization. Reports vary dramatically
			in size, content and complexity and will include or combine characteristics
			such as:
		</p>
		<ul class="midlist">
			<li>
				Listings of information –
				Example: Transactions in an account.
			</li>
			<li>
				Sorting, grouping and aggregation of data with and without subtotals –
				Example: A listing of all product sales for each sales person, grouped
				by state.
			</li>
			<li>
				Charts to present information in easy to understand formats –
				Example:
				Pie chart showing an investor's portfolio allocation by High Growth/Growth/Income/etc.
				categories.
			</li>
			<li>
				Matrix or cross-tab layouts –
				Example: Financial budget reports with
				cost codes as rows, columns for each month, and cells containing numerical
				data for that cost code/month.
			</li>
			<li>
				Delivery of information as one or a combination of web pages, PDF
				files, printed documents, Excel files, etc. –
				Example: Frequent flyer
				statement delivered as a web page online and a printed document in the
				mail.
			</li>
			<li>
				Precise, highly formatted layouts –
				Examples: Bank statements; utility
				bills; commission statements; invoices; government forms.
			</li>
			<li>
				Page navigation for long reports –
				Examples: Hundreds of pages corporate
				cell phone usage bill with First Page, Next Page, Go to Page, etc. buttons).
			</li>
			<li>
				Table of Contents –
				Example: Multi-page Investment Portfolio summary
				with Table of Contents to quickly navigate to Account Summary; Fund
				History; etc.
			</li>
			<li>
				Keyword or content search within a report –
				Example: find information
				on a customer in a 1000 page customer account report.
			</li>
		</ul>
		<p>
			This can be contrasted with data-driven JSP pages where the data manipulation
			and presentation needs are more transaction driven and do not include
			recurring reporting needs such as complex aggregation (performed outside
			of the database) and highly complex layouts.
		</p>


		<h2><a name="users"></a>Target Users</h2>
		<p>
			For report development, the project broadly targets three classes of developer:
		</p>
		<ul class="midlist">
			<li>
				<b>Application Developers</b> –
				 These are Java developers who are
				  creating applications that include the need to retrieve data and present
				  that data in the form of reports. This is likely to be a subset of the
				  overall application and will include many of the characteristics discussed
				  above. In this case, the report generation and viewing will be embedded
				  in the overall application.
			</li>
			<li>
				<b>Report Developers</b> –
				Report developers are not typically skilled
				  in writing Java code. They expect to use a visual desktop tool to create
				  any type of report - including defining database connections, report
				  content and report layout. These reports may then be deployed as part
				  of an application, or through an easy to use deployment framework.
			</li>
			<li>
				<b>Business Users</b> –
				Business users often want to create their
				  own report layouts or customize existing reports. They work through
				  a very easy-to-use web-based report creation and editing facility to
				  answer business questions on an ad hoc basis.
			</li>
		</ul>


		<h2><a name="architecture"></a>Architecture</h2>
		<p>
			The project will address both the design time needs of report creation
			as well as the run-time requirements of report generation and deployment.
			A high-level architecture diagram is provided below. The project will
			adopt and support accepted open standards wherever feasible.
		</p>
		<p>
			<img src="/birt/phoenix/project/chart1.jpg" height="237" width="658">
		</p>
		<p>
			The Eclipse Business Intelligence and Reporting Project is divided into
			a number of sub-projects that reflect the initial focus on the reporting
			aspects of business intelligence and the high-level architecture of the
			project. These are discussed in the sub-project section below. As discussed
			above, the creation of additional sub-projects is anticipated and encouraged
			to address additional aspects of business intelligence.
		</p>
		<p>
			Due to the wide variety of potential applications, it is recognized that
			BIRT cannot meet all the requirements of all applications. It is therefore
			a core design principle for the projects within BIRT to support a broad
			range of extension points within the tools and frameworks that allow developers
			to address additional needs. These extension points may be utilized for
			adding value in commercial products using BIRT, or may be developed and
			contributed into the Eclipse open source community.
		</p>
		<p>
			For example, logging tools can use BIRT's data extension point to plug-in
			a data query user interface and access logic to read and process log files,
			use BIRT's report engine to present the information in the log, and extend
			BIRT's output/rendering adaptor to email or send a short message to a
			user with the report output in a format targeted for that device.
		</p>
		<p>
			We expect the Business Intelligence and Reporting Tools Project to produce
			functional requirements that are more appropriately satisfied through
			the Eclipse Project or other Eclipse foundational projects. In such cases,
			the Business Intelligence and Reporting Tools Project PMC will coordinate
			the corresponding Project PMCs the design and implementation of the corresponding
			contribution.
		</p>

	</div>
	$projectLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
