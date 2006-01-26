<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Tutorial";
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
	require "basic.inc";
	$stepNumber				= 2;
	$linkToTop				= linkToTop();
	$tutorialLinksSideItem  = getTutorialLinksSideItem($stepNumber);
	$stepNavigator			= getTutorialStepNavigator($stepNumber);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#create_a_project">Create a Project</a></li>
				<li><a href="#create_a_report">Create a Report</a></li>
				<li><a href="#choose_a_template">Choose a Template</a></li>
			</ul>
		</blockquote>

		<h2><a name="create_a_project"></a>Create a Project</h2>
		<p>
			Eclipse uses projects to organize your files. So, the first step is to create a new project. For this demo, let's create a project called "My Reports":
		</p>
		<ul class="midlist">
			<li>
				Choose File&rarr;New&rarr;Project. The new project dialog appears.
			</li>
			<li>
				Open the "Business Intelligence and Reporting Tools" group and choose "Report Project".
			</li>
			<li>
				Click Next.
			</li>
			<li>
				Type "My Reports" (without the quotes) as the project name.
			</li>
			<li>
				Click Finish.
			</li>
			<li>
				Click OK if asked to switch to the Report Design perspective. (This occurs if you create a BIRT project while in a perspective other than Report Design.)</li>
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="create_a_report"></a>Create a Report</h2>
		<p>
			We're now ready to create our first report:
		</p>
		<ul class="midlist">
			<li>
				Choose File&rarr;New&rarr;Report. The new report dialog appears.
			</li>
			<li>
				In the tree view, choose the project we just created: My Reports.
			</li>
			<li>
				Enter the following in the file name field: Customers.rptdesign.
			</li>
			<li>
				Click Next.
			</li>
		</ul>
		<p>
			You can create a report in three ways: as a blank report, by using a BIRT-defined template, or by copying one of your report designs. The second page of the New Report dialog provides two of these options. Since we want to use a template, do the following:
		</p>
		<ul class="midlist">
			<li>
				Select "Create Report from a predefined template"
			</li>
			<li>
				Click Next.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="choose_a_template"></a>Choose a Template</h2>
		<p>
			The next page of the New Report dialog presents a selection of report templates. Before we choose the one we want, let's walk though what's available.
		</p>
		<ul class="midlist">
			<li>
				Blank Report -
				A simple blank report with no content.
			</li>
			<li>
				My First Report -
				Starts a report template that takes you through a
				tutorial using on-line help. (That tutorial will eventually replace this one.)</td></tr>
			</li>
			<li>
				Simple Listing -
				A tabular listing with no grouping.
			</li>
			<li>
				Grouped Listing -
				A tabular listing with grouping. Grouping shows
				repeated values just once. Grouping also allows you to create
				subtotals.
			</li>
			<li>
				Dual Column Listing -
				Produces a listing with two columns side-by-side.</td></tr>
			</li>
			<li>
				Chart &amp; Listing -
				A tabular listing that adds a chart to the top
				of the report.
			</li>
			<li>
				Dual Chart &amp; Listing -
				Combines charts and tables so you can display two
				sets of related data in a single report.
			</li>
			<li>
				Side by Side Chart &amp; Listing -
				A visual variation of the above.
			</li>
			<li>
				Letter -
				A form letter in which database data is "mail-merged" into the
				text. The letter text can be formatted using a subset of HTML.
			</li>
		</ul>
		<p>
			We're now ready to choose our template:
		</p>
		<ul class="midlist">
			<li>
				Select the Grouped Listing.
			</li>
			<li>
				Click Finish.
			</li>
		</ul>
		<p>
			BIRT opens your new report in the Eclipse workspace.
		</p>
		$linkToTop
		<hr class="clearer" />
		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
