<?php                                require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App  = new App(); $Nav = new Nav(); $Menu  = new Menu();  include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
 #
 # Begin: page-specific settings.  Change these.
 $pageTitle   = "BIRT Aggregate Extension Example";
 $pageKeywords = "";
 $pageAuthor  = "";
 # Add page-specific Nav bars here
 # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
 # $Nav->addNavSeparator("My Page Links",  "downloads.php");
 # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
 # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
 # End: page-specific settings
 #
 require "../../../birt.inc";
 $linkToTop    = linkToTop();
 
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
    <li><a href="#sourcecode">Source Code</a></li>
    <li><a href="#reports">Reports</a></li>
   </ul>
  </blockquote>
  <h2><a name="introduction"></a>Introduction</h2>
  <p>
   This example shows how to create a BIRT Aggregate Data Extension
  </p>
  <p>
   Imagine your manager wants you to create a new more optimistic way to sum up data in a report.  Is there a way that you can create a common solution that can be consistently re-used across all of your reports?  Through the Birt Aggregate Data Extension you can create new custom functions that show up as native BIRT functions.
  </p>
  <h2><a name="demonstration"></a>Demonstration</h2>
  <ul class="midlist">
   <li>
    <a href="http://download.eclipse.org/birt/downloads/examples/extension/aggregate/aggregate.html" target="_blank" class="top">Aggregate Data Extension Flash Demo</a> –
    An eleven minute demo that show how to build a BIRT Aggregate Data Extension.
   </li>
  </ul>
  <h2><a name="sourcecode"></a>Source Code</h2>
  <ul class="midlist">
   <li>
    <a href="/birt/phoenix/examples/extending/aggregate/optimiticSum.zip" target="_blank">Example Source Code</a> –
    Source Code for the example demonstrated in the video.
   </li>
  </ul>
 <h2><a name="reports"></a>Reports</h2>
  <ul class="midlist">
   <li>
    <a href="/birt/phoenix/examples/extending/aggregate/optim.rptdesign" target="_blank" >Example Report</a> –
   Example report to test the created aggregate function.
   </li>
  </ul>
 </div>
 $reportLinksSideItem
</div>

EOHTML;

 # Generate the web page
 $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

