<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT 2.1 Project Plan";
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


<body>
<p class="head">BIRT Project DRAFT 2.1 Plan</p>

<p class="subhead">Last revised January 30, 2006 <br>
</p>

<h2><a name="Introduction"></a>Introduction</h2>

<p>This document lays out the feature and API set for the next feature
release of the Eclipse BIRT project after 2.0, designated release 2.1.</p>
<ul>
  <li><a href="#Deliverables">Release deliverables</a></li>
  <li><a href="#Milestones">Release milestones</a></li>
  <li><a href="#TargetOperatingEnvironments">Target operating
  environments</a></li>
  <li><a href="#Compatibility">Compatibility with previous releases</a></li>
  <li><a href="#Themes">Themes</a></li>
  <li><a href="#Projects">Projects</a></li>
  <li><a href="#Defects">Defects</a></li>
</ul>

<p>Plans do not materialize out of nowhere, nor are they entirely static. To
ensure the planning process is transparent and open to the entire Eclipse
community, plans are posted in an embryonic form and then revised from time
to time throughout the release cycle.</p>

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be clear
for any release, even if no features were to change.</p>

<p>The remainder of the plan consists of plan items for the projects under
the Eclipse BIRT project. Each plan item covers a feature or API that is to
be added, or some aspect that is to be improved. Each plan item has its own
entry in the Eclipse bugzilla database, with a title and a concise summary
(usually a single paragraph) that explains the work item at a suitably high
enough level so that everyone can readily understand what the work item is
without having to understand the nitty-gritty detail.</p>

<p>Please send comments about this draft plan to the <a
href="mailto:birt-dev@eclipse.org">BIRT Developer</a> mailing list.</p>

<h2><a name="Deliverables"></a>Release deliverables</h2>

<p>In order to improve the end user experience of downloading and installing
BIRT, the release deliverables will be revised. Details will become available
as progress is made on this project.</p>

<h2><a name="Milestones"></a>Release milestones</h2>

<p>The Eclipse BIRT 2.1 release milestones will be synchronized with the
Eclipse Callisto simultaneous release. The first BIRT 2.1 milestone will be
designated M5 in order to synchronize with the Callisto simultaneus release
numbering. All release deliverables will be available for download as soon as
the release has been tested and validated in the target operating
configurations listed below.</p>

<p>Release milestones:</p>
<ul>
  <li>Friday, March 3, 2006 BIRT 2.1 M5</li>
  <li>Friday, April 7, 2006 BIRT 2.1 Release Candidate 0</li>
  <li>Friday, April 14, 2006 BIRT 2.1 Release Candidate 1</li>
  <li>Friday, April 28, 2006 BIRT 2.1 Release Candidate 2</li>
  <li>Friday, May 12, 2006 BIRT 2.1 Release Candidate 3</li>
  <li>Friday, May 26, 2006 BIRT 2.1 Release Candidate 4</li>
  <li>Friday, June 16, 2006 BIRT 2.1 Release Candidate 5</li>
  <li>Wednesday, June 28, 2006 BIRT 2.1 Release Candidate 6</li>
</ul>
Our target is to complete and release BIRT 2.1 with the Callisto simultaneous
release, currently targeted for late June 2006.

<p>For information about new features assigned to each milestone please refer
to the <a href="https://bugs.eclipse.org/bugs">bugzilla database</a>. The
bugzilla database will be updated on an ongoing basis as the plan
progresses.</p>

<h2><a name="TargetOperatingEnvironments"></a>Target Operating
Environments</h2>

<p>In order to remain current, each release of an Eclipse project targets
reasonably current versions of underlying operating environments and other
Eclipse projects on which it depends. </p>

<p>Most of Eclipse, and all of BIRT, is &#8220;pure&#8221; Java&#8482; code and has no direct
dependence on the underlying operating system. For BIRT, the chief dependence
is on the Eclipse Platform, Graphical Editor Framework (GEF), Modeling
Framework (EMF), and on the Java 2 Platform that runs it. </p>

<p>The Eclipse BIRT 2.1 release depends on the following compatibility
stack:</p>
<b>BIRT 2.1 Reference Stack for Eclipse 3.2</b>
<ul>
  <li>Java 2 platform Java Development Kit (JDK) 1.4.2</li>
  <li>Eclipse Platform Runtime Binary 3.2</li>
  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>
  <li>Eclipse Modeling Framework (EMF) 2.2</li>
</ul>

<p>The Eclipse Platform and BIRT run in a variety of operating environments.
Testing is focused on a handful of popular <span class="header">combinations
of operating system and Java 2 Platform; these are our <em>reference
platforms</em>. Eclipse BIRT undoubtedly runs fine in many operating
environments beyond the reference platforms we test. However, since we do not
systematically test them we cannot vouch for them. Problems encountered when
running Eclipse BIRT on non-reference platforms that cannot be recreated on
any reference platform will be given lower priority than problems with
running Eclipse BIRT on a reference platform.</span></p>

<p>For BIRT 2.1, the project team plans to tests and validate the following
reference platforms:</p>

<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="4">
        <div align="center">
        <b><font size="+1">Eclipse BIRT Report Framework 2.1 and Eclipse BIRT
        RCP Report Designer 2.1 Reference Platforms</font></b></div>
      </th>
    </tr>
    <tr>
      <td width="205"><b>Operating system</b></td>
      <td width="76"><b>Processor architecture</b></td>
      <td width="59"><b>Window system</b></td>
      <td width="453"><b>Java 2 Platform</b></td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td>Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows 2000</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
  </tbody>
</table>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="4">
        <div align="center">
        <b><font size="+1">Eclipse BIRT Runtime 2.1 and Eclipse BIRT Charts
        2.1 Reference Platforms</font></b></div>
      </th>
    </tr>
    <tr>
      <td width="205"><b>Operating system</b></td>
      <td width="76"><b>Processor architecture</b></td>
      <td width="59"><b>Window system</b></td>
      <td width="453"><b>Java 2 Platform</b></td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">IBM SDK 1.4.2, 5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">IBM SDK 1.4.2, 5.0</td>
    </tr>
    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK*</td>
      <td width="453">BlackDown SDK 1.4.2</td>
    </tr>
    <tr>
      <td width="205">SUSE Linux Enterprise Server 9</td>
      <td width="76">Intel x86</td>
      <td width="59">YaST*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>
      <td width="205">SUSE Linux Enterprise Server 9</td>
      <td width="76">Intel x86</td>
      <td width="59">YaST*</td>
      <td width="453">BlackDown SDK 1.4.2</td>
    </tr>
  </tbody>
</table>
*Window system only required when displaying charts within SWT or SWING
windows.<br>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT Application Server Reference
        Platform</font></b></div>
      </th>
    </tr>
    <tr>
      <td width="405">Apache Tomcat 4.1.x, 5.5.x</td>
    </tr>
    <tr>
      <td width="405">JBoss AS 4.0.2</td>
    </tr>
  </tbody>
</table>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT JDBC Reference Platforms</font></b></div>
      </th>
    </tr>
    <tr>
      <td width="405">MySQL Connector/J 3.x JDBC driver</td>
    </tr>
    <tr>
      <td width="405">Derby V5.1 JDBC driver</td>
    </tr>
  </tbody>
</table>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT Browsers and Viewers Reference
        Platforms</font></b></div>
      </th>
    </tr>
    <tr>
      <td width="405">Mozilla Firefox 1.5</td>
    </tr>
    <tr>
      <td width="405">Microsoft Internet Explorer 6.0</td>
    </tr>
    <tr>
      <td width="405">Adobe Acrobat Reader 7.0</td>
    </tr>
  </tbody>
</table>
<br>


<h4>Internationalization</h4>

<p>Eclipse is designed as the basis for internationalized products. The user
interface elements provided by the various Eclipse projects, including
dialogs and error messages, are externalized. The English strings for BIRT
are provided as the default resource bundles. Translations are provided with
this release for French (fr_FR), German (de_DE), Spanish (es_ES), Japanese
(ja_JP), Simplified Chinese (zh_CN), and Korean (ko_KR).</p>

<h2><a name="Compatibility"></a>Compatibility with Previous Releases</h2>

<p>BIRT 2.1 will be compatible with earlier versions of BIRT to the greatest
extent possible. The nature and scope of some of the key plan items for BIRT
2.1 are such that the only feasible solutions might break compatibility. In
other regards, BIRT 2.1 will be compatible with 2.0 and 1.x. We also aim to
minimize the effort required to port an existing plug-in to the 2.1 APIs.</p>

<h3>Compatibility of Release 2.1 with 2.0 and 1.x</h3>

<p>BIRT 2.1 will be compatible with BIRT 2.0 and 1.x unless noted. The
detailed compatibility statement is listed below. In this statement, &quot;BIRT&quot;
refers to all BIRT components: BIRT Report Framework, BIRT Runtime, and BIRT
Chart SDK.</p>

<p><b>API Contract Compatibility:</b> BIRT 2.1 will be upwards
contract-compatible with BIRT 2.0 and 1.x to the greatest extent possible.
All incompatibility exceptions will be documented. Downward contract
compatibility is not supported. There is no guarantee that compliance with
BIRT 2.1 APIs will ensure compliance with BIRT 2.0 or 1.x APIs. Refer to
general Eclipse document on <a
href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving
APIs</a> for a discussion of the kinds of API changes that maintain contract
compatibility.</p>

<p>The BIRT Chart UI API v2.1 is compatible with the v2.0 API but not
compatible with the v1.x APIs due to a full redesign of the Chart UI in the
BIRT 2.0 release.</p>

<p><b>Binary (plug-in) Compatibility:</b> The BIRT 2.1 plug-in framework will
be upwards binary-compatible with BIRT 2.0 and 1.x plug-ins to the greatest
extent possible. Downward plug-in compatibility is not supported. Plug-ins
for BIRT 2.1 will not be usable in BIRT 2.0 or 1.x. Extension plug-ins for
BIRT 2.0 and 1.x will be upwards binary-compatible with BIRT 2.1.</p>

<p><b>Source Compatibility:</b> BIRT 2.1 will be upwards source-compatible
with BIRT 2.0 and 1.x to the greatest extent possible. This means that source
files written to use BIRT 2.0 or 1.x APIs will successfully compile and run
against BIRT 2.1 APIs. Downward source compatibility is not supported. If
source files use new BIRT APIs, they will not be usable with an earlier
version of BIRT.</p>

<p><b>Report Design Compatibility:</b>BIRT 2.1 will be upwards report design
compatible with BIRT 2.0 and 1.x unless noted. This means that reports
created with BIRT 2.0 or 1.x can be successfully opened by BIRT 2.1 and
upgraded to a 2.1 format.</p>

<p><b>Non-compliant usage of API's: </b> All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are considered
implementation details which may vary between operating environment and are
subject to change without notice. Client plug-ins that directly depend on
anything other than what is specified in the BIRT API are inherently
unsupportable and receive no guarantees about compatibility within a single
release much less with an earlier releases.</p>

<h2><a name="Themes">Themes</a></h2>

<p>Continuing on the themes for previous releases of BIRT, the BIRT project's
overriding release 2.1 theme remains extending the Eclipse platform to
provide infrastructure and tools that allow application developers to design,
deploy, generate and view reports within their applications. In this context,
the BIRT project also adopts and supports key themes within the overall
Eclipse planning process.</p>
<ul>
  <li><b>Scaling up and Enterprise Ready</b> The Eclipse platform 3.2
    continues to improve on scalability and readiness for the enterprise.
    BIRT 2.1 leverages the support that 3.2 provides by ensuring that it is
    tested and it supports Eclipse 3.2.</li>
  <li><b>Simple to Use - </b>BIRT 2.1 includes ease of use enhancements such
    as improvements to the distribution and installation of BIRT.
    Additionally, BIRT 2.1 continues to provide the RCP based report designer
    which is targeted at the report developer.</li>
  <li><b>Appeal to a Broader Community - </b>BIRT 2.1 will broaden the appeal
    of BIRT by its integration with the Eclipse Callisto simultaneous
    release. In addition, providing support forFirefox 1.5 and JDK 5.0 for
    the BIRT runtime widens BIRT's appeal.</li>
</ul>

<h2><a name="Projects">Projects</a></h2>

<p>Project planning is still under way for BIRT 2.1 and this plan will be
updated in the coming weeks to add new projects as they are identified.
Projects already identified are:</p>

<blockquote>
  <p><b>Integration with Eclipse Callisto Simultaneous Release</b> The goal
  of the Callisto Simultaneous Release is to release ten major Eclipse
  projects at the same time to support the needs of the ecosystem members who
  integrate Eclipse frameworks into their own software and products. Callisto
  is about developers helping developers serve the whole Eclipse community.
  [Theme: Appeal to a Broader Community]</p>

  <p><b>Provide support for the Eclipse 3.2 Platform</b> The BIRT 2.1 release
  will be tested on the Eclipse 3.2 Platform Release. [Theme: Scaling up and
  Enterprise Ready]</p>

  <p><b>Improve distribution and installation of BIRT</b> Users of BIRT,
  especially new users, can sometimes be overwhelmed by the complexity of the
  installation of BIRT and all the components that it depends on. This
  project aims to improve the end user experience of downloading and
  installing BIRT and all of its related components. [Theme: Simple to
  Use]</p>

  <p><b>ICU4J Integration</b> Integrating the International Components for
  Unicode for Java will enable BIRT 2.1 to work with text in any language for
  any place in the world. ICU4J continues to extend Java's Unicode and
  internationalization support, improving performance, staying current with
  the Unicode standard, and providing richer APIs, while remaining as
  compatible as possible with the original Java text and internationalization
  API design. [Theme: Appeal to a Broader Community]</p>
</blockquote>

<h2><a name="Defects">Defects</a></h2>
BIRT 2.1 will address defects reported by project members and the community.
The <a
href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.1.0+Final&amp;">list
of defects</a> targeted for resolution in BIRT 2.1 can be found in the
bugzilla database on <a
href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.</body>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
