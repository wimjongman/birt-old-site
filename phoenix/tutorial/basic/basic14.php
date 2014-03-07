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
	$stepNumber				= 14;
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
				<li><a href="#wrap_up">Wrap Up</a></li>
				<li><a href="#next_steps">Next Steps</a></li>
				<li><a href="#more_information">More Information</a></li>
			</ul>
		</blockquote>

		<h2><a name="wrap_up"></a>Wrap Up</h2>
		<p>
			In this tutorial we created a simple listing that touched on many of the features of the BIRT Report Designer and Report Object Model (ROM). Now that you are familiar with BIRT, you're ready to learn more about it.
		</p>


		<h2><a name="next_steps"></a>Next Steps</h2>
		<p>
			Additional BIRT topics include:
		</p>
		<ul class="midlist">
			<li>
				Charting with interactivity
			</li>
			<li>
				Scripting and Expressions using JavaScript
			</li>
			<li>
				Custom data access extensions
			</li>
			<li>
				Advanced formatting
			</li>
			<li>
				Advanced queries
			</li>
			<li>
				Multi-part reports (multiple lists, side-by-side lists, master-detail reports, etc.)
			</li>
			<li>
				Conditional formatting
			</li>
			<li>
				Extended data items
			</li>
			<li>
				Dynamic and cascaded parameters
			</li>
			<li>
				Joined Data Sets
			</li>
			
		</ul>


		<h2><a name="more_information"></a>More Information</h2>
		<p>
			A number of resources are available to help you learn more:
		</p>
		<ul class="midlist">
			<li>
				The extensive online help included within BIRT. Select Help&rarr;Help Contents from the Eclipse menu and then click on the BIRT Developer Guide.
			</li>
			<li>
				<a href="/birt/phoenix/ref">Reference material, including ROM (Report Object Model) specifications.</a>
			</li>
			<li>
				<a href="/birt/phoenix/examples">Additional example reports.</a>
			</li>
			<li>
				<a href="/birt/phoenix/community/index.php">BIRT newsgroup</a>
			</li>
			<li>
				<a href="/birt/phoenix/birthelp.php">How to get help on using BIRT.</a>
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
