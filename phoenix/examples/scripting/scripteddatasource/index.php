<?php  		

Header("Location: /birt/demos/");																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports";
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
				<li><a href="#reports">Reports</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This example is intended to illustrate using BIRT's Scripted Data Source.
		</p>
		<p>
			This example simulates retrieving results from an online survey.  The results of the survey are accessed using a
			Java Object, which is called from a BIRT Scripted Data Source.
		</p>

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/scripteddatasource.html" target="_blank" class="top">Scripted Data Source Flash Example</a> –

				This example demonstrates using a Scripted Data Source, to access data within a BIRT report.
			</li>
		</ul>


		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/before.html" target="_blank" class="top">Customer Survey Results Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/reports/ScriptedDatasourceExampleBefore.rptdesign" target="_blank">rptdesign</a>) –

				Presents a list of the current stock of products.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/after.html" target="_blank" class="top">Customer Survey Results After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/reports/ScriptedDatasourceExampleAfter.rptdesign" target="_blank">rptdesign</a>)
				–
				Presents a list of the current stock of products. The after report
				includes changes made, using the Highlight feature for readability and
				low stock indication.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/scripting/scripteddatasource/javacode/SimpleClass.java" target="_blank" class="top">Sample Java Code</a>
				 –
				Sample Java code used within the example.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
