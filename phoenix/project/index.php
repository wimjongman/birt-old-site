<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project";
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
	$currentPage			= "";
	$linkToTop				= linkToTop();
	$projectLinksSideItem  	= getProjectLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#organization">Project Organization</a></li>
				<li><a href="#about">About the BIRT Project</a></li>
				<li><a href="#help">Getting Help on Using BIRT</a></li>
				<li><a href="#resources">Project Resources</a></li>
				<li><a href="#processes">Project Processes</a></li>
				<li><a href="#pmc_minutes">PMC Minutes</a></li>
				<li><a href="#projects">Projects</a></li>
			</ul>
		</blockquote>

		<h2><a name="organization"></a>Project Organization</h2>
		<p>
Welcome to the Business Intelligence and Reporting Tools (BIRT) Project pages. 
The Eclipse BIRT Project is an open source Top Level Project of the Eclipse Foundation. 
The Project Charter describes the organization of the project, roles and responsibilities of the participants, 
and top-level development process for the project. The Top Level Project is overseen 
by a <a href="http://www.eclipse.org/birt/phoenix/project/pmc.php">Project Management Committee (PMC)</a>. 
The PMC organizes the Top-Level Project into Projects coordinating identified resources of the 
Projects against a Development Plan and working against a CVS repository. 
		</p>


		<h2><a name="about"></a>About the BIRT Project</h2>
		<p>
The BIRT project addresses a wide range of reporting needs within a typical Java application. 
Reporting capabilities in an application are often implemented in an ad hoc fashion by the application 
developer, using technology that is not ideally suited to the task, or through the development of a one-off 
solution for that application. This is expensive and time-consuming, and provides limited reporting capabilities 
for the end users of the application. BIRT addresses this problem by providing Eclipse-based open source and 
extensible tools and frameworks that allow developers to easily incorporate reporting functionality 
within their applications. 
		</p>
		<p>
We encourage active participation in the BIRT project - read on and get involved through 
the <a href="news://news.eclipse.org/eclipse.birt">BIRT newsgroup</a> and 
the <a href="http://www.eclipse.org/projects/dev_process/development_process.php">Eclipse Development Process</a>.
		</p>

		<h2><a name="help"></a>Getting Help on Using BIRT</h2>
		<p>
The rest of these pages provide information for people who want to know more about the BIRT project,
 how it runs and how to contribute. If you are trying to use BIRT and have questions, try 
 the <a href="http://www.eclipse.org/birt/phoenix/birthelp.php">Get Help pages</a>.		
		</p>
		<h2><a name="resources"></a>Project Resources</h2>
		<p>
The material here is for people who want know more about the BIRT project or who wish to contribute to BIRT.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/project/description.php" class="page">Project Description and Scope</a> –

				Description of the project and it's scope.
			</li>
			<li>
				<a href="/birt/phoenix/project/charter.php">Project Charter</a> –

				The Charter under which this project is run.
			</li>
			<li>
				<a href="/birt/phoenix/project/principles.php">Project Principles</a> –

				The key principles on which this project is run.
			</li>
			<li>
				<a href="/birt/phoenix/project/pmc.php">Project Management Committee (PMC) and Project Leads</a> –

				Who is running the project?
			</li>
			<li>
				<a href="/birt/phoenix/project/contribute.php">How to Contribute to the BIRT Project</a> –

				Find out how to contribute development work to the BIRT project.
			</li>
			<li>
				<a href="/birt/phoenix/project/contributors.php">Project Contributors and Committers</a> –

				List of the project contributors and committers.
			</li>

		</ul>
		<h2><a name="processes"></a>Project Processes</h2>
		<p>
The BIRT Project leverages and follows the processes used by the Eclipse Platform projects 
and others within the Eclipse Foundation. Below are links to help answer frequently asked questions in this area.		
		</p>
		<ul class="midlist">
			<li>
				<a href="http://www.eclipse.org/projects/dev_process/development_process.php" class="page">Eclipse Development Process</a> –
				Information on how projects work within the Eclipse ecosystem.
			</li>

			<li>
				<a href="http://www.eclipse.org/projects/dev_process/index.php" class="page">Eclipse Contributions FAQ</a> –
				Common questions around contributing to the Eclipse community.
			</li>
			<li>
				<a href="http://www.eclipse.org/birt/phoenix/project/contribute.php" class="page">How to Contribute to the BIRT Project</a> –
				Find out how to contribute development work to the BIRT project.
			</li>
			<li>
				<a href="http://www.eclipse.org/birt/phoenix/project/developmentdiscussions.php" class="page">Development Discussions in the BIRT Project Community</a> –
				Learn how development discussions happen in the BIRT community.
			</li>

		</ul>		

		<h2><a name="pmc_minutes"></a>PMC Minutes</h2>
		<p>
			The BIRT PMC meets weekly. All minutes are posted to the
			<a href="http://dev.eclipse.org/mailman/listinfo/birt-dev">birt-dev</a>
			mailing list. Past minutes can be found in the birt-dev mailing list
			<a href="http://dev.eclipse.org/mhonarc/lists/birt-dev/maillist.html">archive</a>.
		</p>


		<h2><a name="projects"></a>Projects</h2>
		<p>
			Projects within BIRT include the following.
		</p>
		<ul class="midlist">
			<li>
				Eclipse Report Designer (ERD)
				<br>
The Eclipse Report Designer is an Eclipse-based desktop authoring environment for report development. Eclipse Report Designer enables application and report developers to create simple and complex reports for use within their organization. The tool caters to the broad range of report development skills from the non-programmer report developer focused on report layout to the application developer looking for sophisticated control over report creation. 
			</li>
			<li>
				Eclipse Report Engine (ERE)
				<br>
The Report Engine allows Java application developers to quickly integrate powerful report generation and viewing capabilities into their applications without having to build the infrastructure from lower level Java components. The Report Engine project enables reports to be generated using the XML report designs created by the Eclipse Report Designer, Web Based Report Designer or any other tool. To support this, the Report Engine provides two core services: generation and presentation. The generation service within the Report Engine is responsible for connecting to the specified data source(s), retrieving and processing the data (sorting, grouping, aggregations, etc), creating the report layout and generating the report document. The presentation service within the Report Engine provides a rich set of viewing capabilities for report content. This includes the infrastructure for viewing a document online; for printing a document; and for generating alternate output documents such as PDF. 
			</li>
			<li>
				Eclipse Charting Engine (ECE)
				<br>
The Chart Engine project provides a rich business chart generation capability that can be used as a standalone charting component, as well as providing the chart generation service within the Report Engine project. Visual presentation of business data in the form of charts is a common, and key, aspect of many reports and other forms of business intelligence. As such, a robust charting capability is essential within the overall Business Intelligence and Reporting Tools project
			</li>
		</ul>

	</div>
	$projectLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
