<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Contributors";
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
	$currentPage			= "Project Contributors";
	$linkToTop				= linkToTop();
	$projectLinksSideItem  	= getProjectLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#committers">Project Committers</a></li>
				<li><a href="#initial_contribution">Initial Code Contribution</a></li>
			</ul>
		</blockquote>

		<h2><a name="committers"></a>Project Committers</h2>
		<p>
			Companies that are contributing committer's time to the project are:
		</p>
		<ul class="midlist">
			<li>
				Actuate –
				<http://www.birt-exchange.com" target="_blank">http://www.birt-exchange.com</a> and				
				<a href="http://www.actuate.com" target="_blank">http://www.actuate.com</a>
			</li>
			<li>
				Innovent Solutions –
				<a href="http://www.innoventsolutions.com" target="_blank">
				http://www.innoventsolutions.com</a>
			</li>
			<li>
				IBM –
				<a href="http://www.ibm.com" target="_blank">
				http://www.ibm.com</a>
			</li>
			<li>
				InetSoft –
				<a href="http://www.inetsoft.com" target="_blank">
				http://www.inetsoft.com</a>
			</li>
			<li>
				Tsinghua University (Beijing, China)  –
				<a href="http://www.sist.tsinghua.edu.cn/Article_show_eng1.asp?articleID=486" target="_blank">
				http://www.sist.tsinghua.edu.cn/Article_show_eng1.asp?articleID=486</a> and
				<a href="http://www.sist.tsinghua.edu.cn/index.asp">http://www.sist.tsinghua.edu.cn/index.asp</a>
			</li>			




		</ul>
		<p>
			BIRT uses the standard <a href="http://www.eclipse.org/projects/dev_process/new-committer.php">Eclipse process</a> to elect new committers. 
		</p>



		<h2><a name="initial_contribution"></a>Initial Code Contribution</h2>
		<p>
During the six months prior to the creation of the Eclipse BIRT project, Actuate was actively researching and developing capabilities that correspond to the initial BIRT projects. This involved researching the requirements, developing design for the BIRT XML Report Design, and development of initial code. Actuate seeded the BIRT project by donating the work from this research and development. Specifically:
		</p>
		<ul class="midlist">
			<li>
				<b>XML Report Design Schema</b>
				<br>
				A schema for representing the data access
				  and layout aspects of reports ranging from simple listing style reports
				  through complex, highly formatted reports.
			</li>
			<li>

				<b>Report Design Object Model Component</b>
				<br>
A component that encapsulates the logic of resolving report element properties based on report object hierarchy, style sheets and report scripting, as well as providing report design read/write and persistency. Initial design work, implementation, and unit tests were contributed.
			</li>
			<li>
				<b>Report Execution and Rending Engine Component</b>
				<br>
A component that takes a report design file as input and generates various report output format such as HTML, PDF, and PostScript for printing. Initial design work, implementation, and unit tests were contributed.
			</li>
			<li>
				<b>Report Designer</b>
				<br>
An Eclipse plug-in that helps users design report layout through a user friendly GUI. Initial design work, implementation, and unit tests were contributed.
			</li>
		</ul>
		<p>
Innovent and Actuate have over 10 years of experience each in the business intelligence market. 
The initial contribution for the BIRT project involved a significant number of experienced developers in 
this field and, going forward, the project is working with the Eclipse community to build on this initial code 
to deliver market leading reporting functionality to the open source Eclipse ecosystem.
		</p>
		<p>
In addition to the Actuate research and development work, 
Actuate is working with other Eclipse members to leverage existing code in other areas.
		</p>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
