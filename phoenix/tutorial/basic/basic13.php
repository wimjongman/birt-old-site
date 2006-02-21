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
	$stepNumber				= 13;
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
				<li><a href="#about">About Text Items</a></li>
				<li><a href="#create">Create a Text Item</a></li>
				<li><a href="#dynamic_text">Dynamic Text</a></li>
				<li><a href="#test">Final Test</a></li>
			</ul>
		</blockquote>

		<h2><a name="about"></a>About Text Items</h2>
		<p>
			The final step in our report is to create the actual header text. We want it to look something like this:
		</p>
		<p align="center">
			<font color="blue" size="4">Customer Listing</font>
			<br>
			<i>For internal use only</i>
		</p>
		<p>
			We could build this up with two labels. But, we'll take this opportunity to try out the Text element which allows us to use HTML formatting directly within the text.
		</p>


		<h2><a name="create"></a>Create a Text Item</h2>
		<p>
			Let's create our text item.  To do this:
		</p>
		<ul class="midlist">
			<li>
				Drag a Text item from the palette and drop it into the center cell within our grid.
			</li>
			<li>
				The Edit Text Item dialog appears.
			</li>
			<li>
				In the top combo box, choose HTML/Dynamic Text. The dialog displays a variety of HTML tags we can insert.
			</li>
			<li>
				Using the button next to Formatting, pull down the list and choose Layout.
			</li>
			<li>
				Click the &lt;CENTER&gt; tag to add it.
			</li>
			<li>
				From the list near the top of the dialog, insert a &lt;FONT&gt; element.
			</li>
			<li>
				In the attributes provided, set the size to 6 and the color to blue. Erase the face attribute. The text should now look like this:
			</li>
		</ul>
		<blockquote>
			&lt;CENTER&gt;<br>
			&lt;FONT size="6" color=blue&gt;<br><br>

			&lt;/FONT&gt;<br>
			&lt;/CENTER&gt;<br>
		</blockquote>
		<ul class="midlist">
			<li>
				Continue adding elements and typing to create the finished HTML:
			</li>
		</ul>
		<blockquote>
			&lt;CENTER&gt;<br>
			&lt;FONT size="6" color=blue&gt;<br>
			Customer Listing<br>
			&lt;/FONT&gt;<br>
			&lt;BR&gt;<br>
			&lt;I&gt;For internal use only&lt;/I&gt;<br>
			&lt;/CENTER&gt;<br>
		</blockquote>
		<ul class="midlist">
			<li>
				Click OK to save your changes.
			</li>
		</ul>


		<h2><a name="dynamic_text"></a>Dynamic Text</h2>
		<p>
			While we won't use it in this tutorial, there is one other feature of text items to note. Select the Dynamic Text category and you'll see a <value-of> tag. This allows you to insert expressions directly into your HTML. For example, to display an address line in US format, we could say:
		</p>
		<blockquote>
			&lt;value-of&gt;row.city&lt;/value-of&gt;,<br>
			&lt;value-of&gt;row.state&lt;/value-of&gt;<br>
			&lt;value-of format="@@@@@-@@@@"&gt;row.zip&lt;value-of&gt;
		</blockquote>


		<h2><a name="test"></a>Final Test</h2>
		<p>
			We're now ready to give the report a final test. Click the Preview tab to see the report with formatting applied.
		</p>



		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
