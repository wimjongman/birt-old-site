<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Technical Reference";
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
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#documentation">Report Object Model Documentation</a></li>
				<li><a href="#suite">Report Object Model Specification Suite</a></li>
			</ul>
		</blockquote>

		<h2><a name="concepts"></a>Concepts</h2>
		<p>
			<span style="color: red; font-weight: bold;">
				New!
			</span>
			The <a href="/birt/phoenix/ref/rom/index.html" target="_new">ROM documentation</a> is now
			in new "RomDoc" format complete with indexes, cross references, information taken
			directly from implementation, and so on.  This version is an early draft. Note the following caveats:
		</p>
		<ul class="midlist">
			<li>
				Documentation is not yet done for the Style element and its properites.
			<\li>
			<li>
				Some elements have no documenation at all.
			<\li>
			<li>
				Some elements are not in Release 1. These show up in the index, but are not yet flagged as "reserved."
			<\li>
			<li>
				Some of the wording needs correction and improvement.
			<\li>
			<li>
				Overview text from the ROM specs are not yet incorporated. Refer to the ROM Specs below for this overview material.
    		</li>
    	</ul>
		<p>
			Key features include:
		</p>
    	<ul class="midlist">
    		<li>
				A "Since" field indicates if the element or property is in Release 1.0, or is "reserved" for a future release.
			<\li>
			<li>
				Alphabetical index of structures and elements.
			<\li>
			<li>
				Lots of details such as data types, XML names, choice details, JavaScript types, etc.
			<\li>
			<li>
				Auto-generated from the implementation: prevents the specs from being out of sync with respect to the code.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="suite"></a>Report Object Model Specification Suite</h2>
		<p>
			The Report Object Model (ROM) is the report design format that the ERD
			creates and the ERE executes. The following suite of documents provides
			a full description of the model.  Note: these are the original design specs, and are now somewhat out of date with
			respect to the implementation. See the above "RomDocs" for the most recent details.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/ref/ROM_Overview_SPEC.pdf" target="_new">Overview</a> –

				Overall introduction to the ROM (read this first.)
			</li>
			<li>
				<a href="/birt/phoenix/ref/ROM_Base_Elements_SPEC.pdf" target="_new">Base Elements</a> –

				Properties common to all ROM elements
			</li>
			<li>
				<a href="/birt/phoenix/ref/ROM_Design_SPEC.pdf" target="_new">Report Design</a> –

				Report design, report libraries and report parameters
			</li>
			<li>
				<a href="/birt/phoenix/ref/ROM_Layout_SPEC.pdf" target="_new">Layout Model </a> –

				Layout rules and elements: grids and free-form>
			<li>
				<a href="/birt/phoenix/ref/ROM_List_and_Table_SPEC.pdf" target="_new">Lists &amp; Tables</a> –

				The two elements for displaying data from a data set>
			<li>
				<a href="/birt/phoenix/ref/ROM_Text_SPEC.pdf" target="_new">Textual Elements</a> –

				Including  Data, Label, Text and Multi-Line Data>
			<li>
				<a href="/birt/phoenix/ref/ROM_Page_Setup_SPEC.pdf" target="_new">Page Setup</a> –

				Master pages and page sequences>
			<li>
				<a href="/birt/phoenix/ref/ROM_Styles_SPEC.pdf" target="_new">Styles</a> –

				Defines BIRT-defined and user-defined styles.>
			</li>
			<li>
				<a href="/birt/phoenix/ref/ROM_Scripting_SPEC.pdf" target="_new">Expressions &amp; Scripting</a> –

				The programming model and objects
			</li>
			<li>
				Data –

				The data source and data set classes (coming soon)
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
