<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Dynamic Parameters";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../../birt.inc";
	$linkToTop				= linkToTop();



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
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#demonstration">Demonstration</a></li>
				<li><a href="#attchments">Attachments</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			In this example we will create a BIRT report submission form.  The form will be constructed
			of HTML controls that are dynamically created and populated based on the BIRT report design.
			Each control will be created as the control type specified when the report
			parameters were defined during the report design session.  The control's selection list will optionally
			be populated from the report's database.

			For futher information, please review the <a href="http://download.eclipse.org/birt/downloads/examples/integrating/DynamicParameters/readme.doc" target="_blank" class="top">readme</a>.
		</p>


		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DynamicParameters/partOne/part1/part1.html" target="_blank" class="top">Dynamic Parameters Part 1 Flash Example</a> –

				This demonstration shows the final results and what is done in the BIRT design session.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DynamicParameters/partTwo/part2/part2.html" target="_blank" class="top">Dynamic Parameters Part 2 Flash Example</a> –

				This demonstration explains the source code.
			</li>
		</ul>


		<h2><a name="attchments"></a>Attachments</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DynamicParameters/DynParmsBin.zip" target="_blank" class="top">Deployable Code</a> –

				Jar file, database configuration, SQL script and JSP Page.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DynamicParameters/DynParmsSource.zip" target="_blank" class="top">Source Code</a> –

				Source Code for the example.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
