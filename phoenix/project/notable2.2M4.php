<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.2 Milestone 4";
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
	<div align=LEFT style="padding-left: 150px">

		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">BIRT WTP Integration</a></li>
				<li><a href="#jump_3">Word Emitter</a></li>
				<li><a href="#jump_4">XML Source Editor</a></li>
				<li><a href="#jump_5">Property Editor Changes</a></li>
				<li><a href="#jump_6">Highlight Style</a></li>
				<li><a href="#jump_7">Miscellaneous</a></li>
				
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
BIRT 2.2 Milestone 5 has officially been released to the public.  Below is a description of some of the key features that are now available in the M2 build.  Keep in mind, as with all milestone releases, the product continues to evolve.
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">BIRT WTP Integration</a></h1>
<p>
The BIRT Web Project, added in milestone 2 creates a web application that embeds the BIRT Web Viewer. This project was implemented to address deployment concerns and leverages the Web Tools Platform Project (WTP).  This feature has been expanded to include a BIRT tag library and a new BIRT JSP template.
</p>
<img src="images/2.2/jsptemplate.png"><br>
<i>JSP BIRT Template</i>
<p>
The new Tag library provides four tags: param, report, viewer, and requestor.  The param tag allows setting parameter values, prior to report execution. The BIRT Viewer supports rendering reports in HTML, paginated HTML or PDF.  When rendering reports in paginated HTML the Viewer uses an AJAX based framework to support complex operations such as table of contents, data exports and page navigation.  The report tag is used to display a report as a PDF document or as a single HTML page.  Alternatively, the viewer tag can be used to display the AJAX based viewer with report content emitted as paginated HTML.  When using the report or viewer tags, users are prompted for parameters.  The parameter entry screen is auto generated based on parameter definitions within the report design.  Often developers prefer to design their own parameter entry pages.  Using the requestor tag allows a developer to hook a custom parameter page.  
</p>
<img src="images/2.2/birttag.png"><br>
<i>BIRT Tag Selection</i>
<p>
An example of using the new requestor tag is illustrated below.  Selecting the submit button will automatically submit the parameterized report to the BIRT Viewer.  Each new Tag supports multiple attributes to allow configuration and customization.
</p>
<img src="images/2.2/birttagrequestor.png"><br>
<i>BIRT Requestor Page</i>
<br><br>
<img src="images/2.2/birttagrequestoroutput.png"><br>
<i>BIRT Custom Requestor Output</i>
<br><br>

<h1><a name="jump_3">Word Emitter</a></h1>
<p>
BIRT currently outputs report content to HTML, paginated HTML and PDF.  BIRT offers many extension points to improve or add to the existing features.  One key extension is the emitter framework, which allows developers to plug in additional output generators.  A new Word emitter is available with Milestone 4.  This emitter is still being developed and feedback is appreciated. 
</p>
<img src="images/2.2/wordoutpput.png"><br>
<i>BIRT Word Emitter</i>


<h1><a name="jump_4">XML Source Editor</a></h1>
<p>
BIRT Reports are essentially XML designs.  The Report Editor reads and writes the XML file based on developer choices while in the designer.  The source for this XML file can be viewed and edited directly using the XML Source Editor, within the Report Designer Perspective.  This editor has been revised to leverage the WTP XML Editor.  With this change, the XML Source editor now supports features such as code complete, formatting and error reporting.
</p>
<img src="images/2.2/xmleditoroutline.png"><br>
<i>XML Source Editor</i>


<h1><a name="jump_5">Property Editor Changes</a></h1>
<p>
The look and feel of the BIRT Property Editor has been improved and now provides access to report element properties using a tabbed style editor.  The underlying APIs were also improved to allow reuse and customization of the editor.
</p>
<img src="images/2.2/propertyeditor.png"><br>
<i>BIRT Property Editor</i>

<h1><a name="jump_6">Highlight Style</a></h1>
<p>
BIRT currently supports many runtime customizations of report content, including visibly on the column, row and element level, mapping, sorting and highlighting.  Prior to this release, highlighting was accomplished by adding rules to an element, such as a row, which instructs the engine to alter the display properties based on runtime conditions.  Highlight rules can now apply styles in addition to setting individual element properties.
</p>
<img src="images/2.2/highlight.png"><br>
<i>Example Row Highlight</i>
<br><br>
<img src="images/2.2/highlightresult.png"><br>
<i>Example Output</i>


<h1><a name="jump_7">Miscellaneous</a></h1>
<p>
Milestone 4 includes many other changes including chart improvements to support better scaling, data previewing and palette configuration.  The engine has been optimized to support better PDF generation, large-scale multi-pass aggregations, and generation performance.  
</p>
<p>
BIRT Milestone 4 release now supports the Eclipse 3.3 and Java 1.5 stack.
</p>

<br>
<br>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
