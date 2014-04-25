<?php  			

Header("Location: /birt/about/design.php");	
																											require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Overview";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

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
		<h1>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Report Introduction</a></li>
				<li><a href="#anatomy">The Anatomy of a Report</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Report Introduction</h2>
		<p>
			BIRT is an Eclipse-based open source reporting system for web applications,
			especially those based on Java and Java EE. BIRT has two main components: a report
			designer based on Eclipse, and a runtime component that you can add to your
			app server.
			BIRT also offers a charting engine that lets you add charts to your own application.
		</p>
		<p></p>
		<p>
			We encourage you to download BIRT, try it, and give us your feedback though the <a href="../community.php">newsgroups and Bugzilla</a>.
		</p>
		<p></p>
		<p>
			With BIRT, you can add a rich variety of reports to your application.
		</p>

		<hr class="clearer" />
		<ul class="midlist">
			<li>
				Lists -
				The simplest reports are lists of data. As the lists get longer, you can add
				grouping to organize related data together (orders grouped by customer, products
				grouped by supplier). If your data is numeric, you can easily add totals, averages
				and other summaries.
			</li>
			<li>
				Charts -
				Numeric data is much easier to understand when presented as a chart. BIRT
				provides pie charts, line &amp; bar charts and many more.  BIRT charts can be rendered in
				SVG and support events to allow user interaction.
			</li>
			<li>
				Crosstabs -
				Crosstabs (also called a cross-tabulation or matrix) shows data in two
				dimensions: sales per quarter or hits per web page. 
			</li>
			<li>
				Letters &amp; Documents -
				Notices, form letters, and other textual documents are easy to create with BIRT.
				Documents can include text, formatting, lists, charts and more.
			</li>
			<li>
				Compound Reports -
				Many reports need to combine the above into a single document. For example, a
				customer statement may list the information for the customer, provide text about
				current promotions, and provide side-by-side lists of payments and charges. A
				financial report may include disclaimers, charts, tables all with extensive formatting
				that matches corporate color schemes.
			</li>
		</ul>

		<h2><a name="anatomy"></a>The Anatomy of a Report</h2>
		<p>
			BIRT reports consist of four main parts: data, data transforms,
			business logic and presentation.
		</p>

		<ul class="midlist">
			<li>
				Data -
				Databases, web services, Java objects all can supply data to your BIRT report.
				BIRT provides JDBC, XML, Web Services, and Flat File support, as well as support for using code to get at
				other sources of data. BIRT's use of the Open Data Access (ODA) framework allows anyone to
				build new UI and runtime support for any kind of tabular data. Further, a single
				report can include data from any number of data sources. BIRT also supplies a feature that
				allows disparate data sources to be combined using inner and outer joins.
			</li>
			<li>
				Data Transforms -
				Reports present data sorted, summarized, filtered and grouped to fit the user's
				needs. While databases can do some of this work, BIRT must do it for "simple" data
				sources such as flat files or Java objects. BIRT allows sophisticated operations
				such as grouping on sums, percentages of overall totals and more.
			</li>
			<li>
				Business Logic -
				Real-world data is seldom structured exactly as you'd like for a report.
				Many reports require business-specific logic to convert raw data into information
				useful for the user. If the logic is just for the report, you can script it using
				BIRT's JavaScript support. If your application already contains the logic, you can
				call into your existing Java code.
			</li>
			<li>
				Presentation -
				Once the data is ready, you have a wide range of options for presenting it to
				the user. Tables, charts, text and more. A single data set can appear in multiple
				ways, and a single report can present data from multiple data sets.
			</li>
		</ul>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Overview</h6>
			<ul>
				<li><a href="index.php">Overview</a></li>
				<li><a href="intro02.php">Integration</a></li>
				<li><a href="intro03.php">Designer</a></li>
				<li><a href="intro04.php">Developing</a></li>
				<li><a href="intro05.php">Extensibility</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
