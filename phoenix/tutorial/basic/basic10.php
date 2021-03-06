<?php  	

Header("Location: /birt/documentation/tutorial/tutorial-10.php");																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$stepNumber				= 10;
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
				<li><a href="#about">About Styles</a></li>
				<li><a href="#creating">Creating a Style</a></li>
				<li><a href="#applying">Applying a Style</a></li>
				<li><a href="#editing">Editing a Style</a></li>
			</ul>
		</blockquote>

		<h2><a name="about"></a>About Styles</h2>
		<p>
			We mentioned that BIRT uses CSS to define the styles for report items. BIRT also allows you to define the properties in a style sheet, then to apply the style to a report item, just as in HTML. The result is that you create the style once and use it multiple times. If you need to change the look of a report, you can change the style in one place rather then in many different report items. If you've defined your own styles when creating HTML pages, you're well on your way to understanding the BIRT style system.
			Styles can also be placed into BIRT libraries (Using Themes) and shared across reports.
		</p>


		<h2><a name="creating"></a>Creating a Style</h2>
		<p>
			Let's use the style feature to format the table header. Let's make the table header a blue bar with contrasting text. Instead of formatting each label one-by-one, we'll define a style, then apply it.  To do this:
		</p>
		<ul class="midlist">
			<li>
				Select the first label (State label) in the Table Header band.
			</li>
			<li>
				Right-click and select Style&rarr;New Style from the context menu.
			</li>
			<li>
				The Style Properties dialog appears.
			</li>
			<li>
				Enter "Header" in the Custom Style (Name) field on the General page and make sure that the Custom Style radio button is selected.
			</li>
			<li>
				Switch to the Background page from the left most column of the New Style dialog.
			</li>
			<li>
				Click the Background color button and choose the same blue: third from the right in the top row.
			</li>
			<li>
				Switch to the Font page.
			</li>
			<li>
				Set the Color to white.
			</li>
			<li>
				Set the Weight to Bold.
			</li>
			<li>
				Click OK.
			</li>
		</ul>
		<p>
			Notice that the new style has been applied to the label.
		</p>


		<h2><a name="applying"></a>Applying a Style</h2>
		<p>
			Next, let's apply the style to the other three header labels. (We could have done this in a single step by selecting all four when we defined the style. We're doing it in two steps just to show how it's done.)
		</p>
		<ul class="midlist">
			<li>
				Select the other three labels: click on the City label, then use Ctrl+click to add the other two to the selection.
			</li>
			<li>
				Choose Style&rarr;Apply Style&rarr;Header from the context menu.
			</li>
		</ul>
		<p>
			The other three cells are now also formatted.
		</p>

		<h2><a name="editing"></a>Editing a Style</h2>
		<p>
			Suppose we wanted to change the style we just created. Here's how we find and change it.
		</p>
		<ul class="midlist">
			<li>
				Find or open the Outline view.
			</li>
			<li>
				Scroll down to the bottom and find the Styles node.
			</li>
			<li>
				Open the Styles node to reveal our styles.
			</li>
			<li>
				Double-click the style you want to edit.
			</li>
			<li>
				You can also edit a style by selecting Style&rarr;Edit Style&rarr;Style Name from the context menu when a report item is selected.
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
