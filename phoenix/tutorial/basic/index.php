<?php  		

Header("Location: /birt/documentation/tutorial/tutorial-1.php");																												require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$stepNumber				= 1;
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
		<h1>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
			</ul>
		</blockquote>

		<h2>Introduction</h2>
		<p>
			This brief tutorial walks you through building a simple report with BIRT. It introduces the major UI features, and many of the BIRT reporting elements. At the completion of this tutorial, you should be able to start building your own reports using your own database.
		</p>
		<p>
			We'll create a simple customer listing report, with the customers grouped by state and city. For each customer, we'll display a name and phone number.
		</p>
		<hr class="clearer" />

		<h3>Install BIRT</h3>
		<p>
			If you have not yet done so, install Eclipse, GEF, EMF and BIRT. You'll find complete
			instructions for doing so on the
			<a href="/birt/phoenix/build">BIRT Install</a> page.
		</p>
	
		<h3>Open BIRT</h3>
		<p>
			BIRT is a perspective within Eclipse. To open it, use the Window item on the
			Eclipse main menu. Choose Open Perspective, then Report Design. If report Design
			does not appear directly in the Open Perspective window, then choose Other... A list of perspectives
			will appear. Choose Report Design.
		</p>
		<p>
			Eclipse will switch to display the BIRT perspective.
		</p>

		<h3>Example Report</h3>
		<p>
			If you get stuck as you work through the tutorial, or if you want to see the finished report right away, simply download it:
		</p>
		<ul class="midlist">
			<li>
				Use your browser to download the report:
				<a href="/birt/phoenix/tutorial/basic/customers.rptdesign">customers.rptdesign</a>.
			</li>
			<li>
				Save the file into an Eclipse project directory. (See the next page if you don't yet have a project.)
			</li>
			<li>Your browser may store this as an XML file. If so, rename it back the the name above.
			</li>
			<li>
				Within Eclipse, select your project in the Navigator view and choose Refresh from the right-click context menu.
			</li>
			<li>
				Double-click the report to open it in the BIRT report designer.
			</li>
		</ul>
		$linkToTop
		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
