<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Eclipse BIRT Contest";
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


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div align=LEFT style="padding-left: 185px">



		<h1><a name="top"></a>$pageTitle</h1>

<h1>Welcome to the Eclipse BIRT Report Contest</h1>
<p class="subhead">Last revised May 1, 2006 <br>
<img src="new.gif" alt="New since last update" width="12" height="12"> marks
interesting changes since the last update <br>
</p>

<h2>Enter to Win a Sony PSP. Submit your favorite report.</h2>

<p>The Eclipse BIRT Contest is about encouraging creative use of BIRT.
Perhaps, you've built an extension, or, you have a report that is remarkable
for its stylistic elements. You could win a Sony PSP by exercising your
creativity and sharing the details.</p>

<h2>Contest Details</h2>
<ul>
  <li>There are two categories of awards
    <ul>
      <li>Technical merit award: Recognizes a report that exercises the
        extensions, innovatively uses the API's, or deploys BIRT reports in a
        creative way.</li>
      <li>Style merit award: Recognizes a report that excels in the
        presentation aspects of a report.</li>
    </ul>
  </li>
  <li>The judging criteria for the &quot;best&quot; report in each category will
    include but not be limited to visual layout, interesting data sources,
    extensions built, the kinds of integration and deployment, complexity,
    and real world application.</li>
  <li>The prizes will include
    <ul>
      <li>The best reports in each category will receive a Sony PSP</li>
      <li>There will be five second prizes. Each second prize will be a set
        of the upcoming BIRT books -
        <ul>
          <li>&quot;BIRT: A Field Guide to Reporting&quot;</li>
          <li>&quot;Integrating and Extending BIRT&quot;</li>
        </ul>
      </li>
    </ul>
  </li>
  <li><img src="new.gif" alt="New since last update" width="12"
    height="12">Winners will be notified on Friday June 30, 2006. By entering
    this contest, you agree that your name and report may be showcased on <a
    href="http://www.eclipse.org/birt">http://www.eclipse.org/BIRT</a>.</li>
</ul>

<h2>Submission Details</h2>
<ul>
  <li>A submission should include report designs, all related files, and a
    one page description in a text file (collectively, &quot;Submission&quot;). All
    components needed to run the report by judges must be included.</li>
  <li>Submissions are to be emailed to <span style="font-weight: bold"><a
    href="mailto:birtcontest@eclipse.org">birtcontest@eclipse.org</a></span>.
    A submission must include the name and email address of the submitters.
    Multiple submissions are allowed.</li>
  <li>Winners will receive email requesting contact information in order to
    receive award.</li>
  <li>To facilitate judging all files and sample data must be included with
    the report designs. Using the ClassicModels sample database is encouraged
    but not required.</li>
  <li>Submitter understands and agrees that all Submissions are being made
    under <a href="http://www.eclipse.org/org/documents/epl-v10.php">Eclipse
    Public License - v 1.0</a>.</li>
  <li><img src="new.gif" alt="New since last update" width="12"height="12">The deadline for all Submissions is Friday, June 30, 2006, 5 pm Pacific
    Standard Time.</li>
</ul>
If you have questions, please email <a
href="mailto:birtcontest@eclipse.org">birtcontest@eclipse.org</a>.</body>
</html>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
