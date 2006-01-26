<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Plan Summary";
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
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#summary">Executive Summary of Current Plan</a></li>
				<li><a href="#statement">Forward Looking Statement</a></li>
			</ul>
		</blockquote>

		<h2><a name="summary"></a>Executive Summary of Current Plan</h2>
		<p>
			As a new project within the Eclipse Foundation, the BIRT project's overriding release 1.0 theme is to extend the Eclipse platform to provide infrastructure and tools that allow application developers to design, deploy, generate and view reports within their applications. In this context, the BIRT project also adopts and supports key themes within the overall Eclipse planning process:
		</p>
		<ul class="midlist">
			<li>
				<b>Appealing to a Broader Community</b><br>

				BIRT will address a new problem space for Eclipse that broadens the appeal of
				the Eclipse platform. By addressing this new market for Eclipse, BIRT aims to bring
				a new class of developers - report developers - into the Eclipse community.
			</li>
			<li>
				<b>Simple to Use</b><br>

				From the outset, the BIRT project regards ease-of-use to be a key objective
				for the project. Reporting technology is used by a broad range of users with a
				wide variety of skill sets - therefore the tool needs to be approachable and
				intuitive. The BIRT project team are focused on ensuring that users can quickly
				become productive with the technology.
			</li>
			<li>
				<b>Enterprise Ready</b><br>

				BIRT 1.0 will leverage the surrounding Eclipse infrastructure for Enterprise
				activities such as source code management and deployment of BIRT reports in the
				application. In addition, the initial release of BIRT will provide for support for
				key enterprise data bases such as Oracle and DB2.
			</li>
			<li>
				<b>Design for Extensibility: Be a Better Platform</b><br>

				Extensibility is a core principle behind the BIRT project. Extensibility
				will be supported in a number of areas: data access (both design time and runtime);
				report output formats; chart types; report components; and business logic.
			</li>
		</ul>
		<p>
			In addition to these goals, the BIRT PMC want to ensure that the initial release
			of BIRT provides usable value to Java application developers. Even at the 1.0
			release level, the BIRT PMC has targeted common report types and a very approachable
			user interface design to ensure the release is immediately appealing to the Java
			development community.
		</p>
		<p>
			Details on the current plan(s) can be found at:
		</p>
		<ul class="midlist">
			<li>
				Business Intelligence and Reporting Tools (BIRT)
				<a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R1_0.html">
				1.0 release plan</a>
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="statement"></a>Forward Looking Statement</h2>
		<p>
			Looking beyond the BIRT 1.0 release, the project PMC's goals are to increase the number of applications and users that can successfully adopt the Eclipse platform and BIRT technology. This can be categorized into three initiatives -- increasing the types of reports that BIRT supports; adding more features and capabilities to the initial BIRT projects that target the typical report developer (rather than the Java developer); and developing additional business intelligence capabilities as part of the BIRT top-level project. These initiatives align well with the broader goals of the Eclipse platform and details on the first two are presented in the context of those themes:
		</p>
		<ul class="midlist">
			<li>
				<b>Appealing to the Broader Community</b><br>

				This is the most significant overall theme for the BIRT project since, as
				discussed above, BIRT does introduce the Eclipse platform to a new class of
				users and applications -- the report developers in the broader Business
				Intelligence market. Due to it's significance, this continues to be a theme
				that the BIRT PMC will push beyond the initial 1.0 release. In fact, it's
				significance cuts across other themes as will be seen below. Items that the
				PMC will specifically be looking at in addition to those mentioned below
				relate to the types of reports that BIRT can support. BIRT 1.0 will support a
				set of commonly used listing and grouping type reports, with future releases
				needing to add support for report styles such as cross-tab or matrix style
				reports, as well as free-form reports. By supporting a large range of report
				types, BIRT will appeal to a broad number of applications that have a
				reporting need.
			</li>
			<li>
				<b>Scaling Up</b><br>

				BIRT 1.0 targets the smaller 1 to 10 page reports, with relatively simple
				data sources, that are found in many web applications. In these cases, the
				processing of the data and reports can be handled in-memory and the desire to
				persistently store the output documents is often not a requirement. However, as
				BIRT is adopted by more and more applications, we anticipate community feedback
				that the complex processing of large datasets, the generation of large report
				documents (1000s of pages) and the persistent storage of those report documents
				will become a frequent request. Future versions of BIRT will need to provide
				support for these larger report types.
			</li>
			<li>
				<b>Design for Extensibility</b><br>

				Beyond BIRT 1.0, the PMC aim to further exercise the extension points in the
				BIRT framework by implementing additional extensions on the framework. A clear
				example at this stage is for additional data sources -- although we expect
				community feedback and participation will highlight demand, and provide
				implementations, in other areas. This will bring two benefits to the project
				and community as a whole: a) proof points that the extension interfaces
				work (or don't) and solid data on what needs to be improved (which will allow
				us to move rapidly towards a stable API set). And b) through those extension
				implementations to be able to support additional application scenarios and
				increase the adoption of Eclipse and BIRT (for example, by supporting XML as a
				data source).
			</li>
			<li>
				<b>Simple to Use</b><br>

				In BIRT 1.0, the tool will be simple to use for the Java developer.
				While we anticipate that the tool will also be very approachable for the
				typical report developer, we expect that there will be areas where we can
				improve ease of use for this audience in subsequent releases. This non-Java
				developer audience is largely new for the Eclipse platform and we expect some
				of the feedback we receive in this area will also drive requirements into other
				parts of the platform. At this stage, it is hard to predict exactly what
				enhancements will requested by the community but this will be watched closely
				going forward.
			</li>
			<li>
				<b>Enterprise Ready</b><br>

				As mentioned above, BIRT 1.0 will leverage many Enterprise features of
				the Eclipse platform with regards to code management etc. As the platform
				continues to enhance the Enterprise deployment capabilities, the BIRT PMC
				will need to adopt these in the BIRT Report Designer environment. For example,
				as outlined in the overall Eclipse Themes, making it easier to configure
				workspaces in an Enterprise deployment. Capabilities in this area will also
				support the BIRT PMC's goal of having BIRT appeal to a wider range of users
				since it will enable deployments of Eclipse BIRT to, for example, hide more
				complex code-development features from a report developer -- therefore making
				the tool more approachable.
			</li>
		</ul>
		<p>
			For the 3rd initiative over time the BIRT PMC aims to add additional projects
			in the business intelligence space. Projects that are anticipated and
			encouraged would address
			other aspects of business intelligence, such as Ad Hoc Query &amp; Reporting;
			Online Analytical Processing (OLAP); Business Intelligence dashboards;
			Executive Information
			Systems (EIS); and statistical analysis. These also fit within the theme of
			Appealing to the Broader Community by addressing additional segments of the
			business intelligence market.
		</p>
		<p>
			As BIRT 1.0 becomes available and the community is able to use the project,
			we expect further themes and  needs will emerge. The BIRT PMC encourages feedback,
			comments and participation from the community on the
			<a href="news://news.eclipse.org/eclipse.birt">BIRT newsgroup</a>.
		</p>
		$linkToTop
		<hr class="clearer" />

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
