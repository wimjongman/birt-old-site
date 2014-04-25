<?php  				

Header("Location: /birt/documentation/tutorial/tutorial-4.php");																										require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$stepNumber				= 4;
	$linkToTop				= linkToTop();
	$tutorialLinksSideItem  = getTutorialLinksSideItem($stepNumber);
	$stepNavigator			= getTutorialStepNavigator($stepNumber);


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

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#about">About Data Sources and Data Sets</a></li>
				<li><a href="#build">Build a Data Source</a></li>
				<li><a href="#edit">Editing your Data Source</a></li>
			</ul>
		</blockquote>

		<h2><a name="about"></a>About Data Sources and Data Sets</h2>
		<p>
			BIRT reports use a data source element to connect to a database or other data provider. BIRT uses a data set element to retrieve data from the data provider. Think of the data source as a connection, and the data set as a query.
		</p>


		<h2><a name="build"></a>Build a Data Source</h2>
		<p>
			Let's build our data source:
		</p>
		<ul class="midlist">
			<li>
				Open the Data Explorer View, if it is not already visible.
			</li>
			<li>
				Select the Data Sources node within the tree view.
			</li>
			<li>
				Right-click to open the context menu.
			</li>
			<li>
				Choose New Data Source. The New Data Source dialog appears.
			</li>
			<li>
				Choose Classic Models Inc. Sample Database.
			</li>
			<li>
				In the Data Source Name field, enter "Sample".
			</li>
			<li>
				Click Next.
			</li>
			<li>
				Click Finish.
			</li>
		</ul>
		<p>
			Your new data source appears within the Data Sources node in the Data Explorer.
		</p>


		<h2><a name="edit"></a>Editing your Data Source</h2>
		<p>
			For future reference, let's review how you would go about changing the data source:
		</p>
		<ul class="midlist">
			<li>
				Find or open the Data Explorer View.
			</li>
			<li>
				Open the Data Sources node.
			</li>
			<li>
				Double-click the data source.
			</li>
			<li>
				The Data Source editor opens. You can make any needed changes.
			</li>
			<li>
				Click OK to save your changes.
			</li>
		</ul>


		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
