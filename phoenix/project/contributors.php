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
				<li><a href="#participants">Project Participants</a></li>
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
		</ul>
		<p>
			BIRT uses the standard Eclipse process to elect new committers. The list of	current committers is <a href="http://eclipse.org/birt/commit.html">here</a>.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="participants"></a>Project Participants</h2>
		<p>
			Companies or entities that are providing feedback on requirements, design or testing the software:
		</p>
		<ul class="midlist">
			<li>
				Siebel –
				<a href="http://www.siebel.com" target="_blank">
				http://www.siebel.com</a>
			</li>
			<li>
				PeopleSoft –
				<a href="http://www.peoplesoft.com" target="_blank">
				http://www.peoplesoft.com</a>
			</li>
			<li>
				Data Beacon –
				<a href="http://www.databeacon.com" target="_blank">
				http://www.databeacon.com</a>
			</li>
			<li>
				Niku Corporation –
				<a href="http://www.niku.com" target="_blank">
				http://www.niku.com</a>
			</li>
			<li>
				State Street Bank –
				<a href="http://www.statestreetbank.com" target="_blank">
				http://www.statestreetbank.com</a>
			</li>
			<li>
				Accept Software Corporation –
				<a href="http://www.acceptsoft.com" target="_blank">
				http://www.acceptsoft.com</a>
			</li>
			<li>
				Tsinghua University (Beijing, China) –
				<a href="http://www.sist.tsinghua.edu.cn/Article_show_eng1.asp?articleID=486" target="_blank">
				http://www.sist.tsinghua.edu.cn/Article_show_eng1.asp?articleID=486</a>
				and <a href="http://www.sist.tsinghua.edu.cn/index.asp" target="_blank">
				http://www.sist.tsinghua.edu.cn/index.asp</a>
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="initial_contribution"></a>Initial Code Contribution</h2>
		<p>
			During the six months prior to the creation of the Eclipse BIRT project, Actuate has been actively researching and developing capabilities that correspond to the initial BIRT projects. This has involved researching the requirements and needs for the XML Report Design, development of initial code, and investigating utilizing existing commercial code from other Actuate products. Actuate is seeding the BIRT project by donating the work from this research and development. Specifically:
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
				A component that encapsulates
				  the logic of resolving report element properties based on report object
				  hierarchy, style sheets and report scripting, as well as providing report
				  design read/write and persistency. A subset of the functionality with
				  unit test programs has been completed.
			</li>
			<li>
				<b>Report Execution and Rending Engine Component</b>
				<br>
				A component that takes
				  a report design file as input and generates various report output format
				  such as HTML, PDF, and PostScript for printing. A subset of the functionality
			</li>
			<li>
				<b>Report Designer</b>
				<br>
				An Eclipse plug-in that helps users design report
				  layout through a user friendly GUI. A subset of the functionality with
				  unit test program has been completed.
			</li>
		</ul>
		<p>
			Innovent and Actuate have 10 years of experience in the business intelligence
			market. The BIRT project will involve a significant number of experienced
			developers in this field and will work with the Eclipse community to build
			on this initial code to deliver capabilities to market as soon as possible.
		</p>
		<p>
			In addition to the Actuate research and development work, Actuate is working
			with other Eclipse members to leverage existing code in other areas.
		</p>
		$linkToTop
		<hr class="clearer" />
	</div>
	$projectLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
