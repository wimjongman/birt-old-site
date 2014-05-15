<?php  			

Header("Location: /birt/community/);																												require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT: Reporting Bugs and Requesting Enhancements";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "birt.inc";
	
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



<p>
BIRT uses the Eclipse Bugzilla system to track bugs and enhancements.


		<ul class="midlist">
				<li>
					<a href="https://bugs.eclipse.org/bugs/">
						Sign Up
					</a>
					Create a Bugzilla account. Learn how to use Bugzilla.					
				</li>
				<li>
					<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=BIRT">
						Report a Bug or Enhancement
					</a>
					When reporting a bug, please give the exact steps to reproduce the problem.
					Please explain what went wrong, and what you expected to happen. For an enhancement,
					please explain how you'd use the new feature.					
				</li>
		</ul>

<p>
BIRT bugs are often associated with a report design. Please attach your design to
your Bugzilla entry.
<p>
If you encounter a problem such as "An error occurred", or failure to open views or editors, please attach your Eclipse log file. To see the exception, use Window&rarr;Show View&rarr;Other. Open the PDE Runtime group and choose Error Log. Within the error log window, find the BIRT exception (if any) that just occurred. Double click on the error in question and you’ll see a stack trace. Paste that into your bug report, preferably as a file attachment. 

		<ul class="midlist">
				<li>
					<a href="https://bugs.eclipse.org/bugs/query.cgi?product=BIRT">
						Search Bugs
					</a>
					Find BIRT-related bugs using the Bugzilla search facility.					
				</li>
		</ul>





	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
