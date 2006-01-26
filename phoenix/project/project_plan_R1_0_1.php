<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Plan and Deliverables";
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

<p class="subhead">Last revised 23 June, 2005</p>

<h1>Introduction</h1>

<p>This document lays out the plans for the first feature release
of the Eclipse BIRT project.

<p>Plans do not materialize out of nowhere, nor are they entirely static. To
ensure the planning process is transparent and open to the entire Eclipse
community, plans are posted in an embryonic form and then revised from time to
time throughout the release cycle.

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be clear for
any release, even if no features were to change.

<p>Please send comments about this draft plan to the
<a href="mailto:birt-dev@eclipse.org">BIRT developer mailing list</a>.</p>

<h1>Release Deliverables</h1>

<p>The release deliverables are:

<ul>
  <li>Source code release for Eclipse BIRT, available as versions tagged
  &quot;R1.0.1&quot; in the eclipse.org
  <a href="http://dev.eclipse.org/viewcvs/?cvsroot=Birt_Project">
  CVS repository for BIRT </a>. </li>
  <li>Eclipse BIRT Report Designer 1.0.1</li>
  <li>Eclipse BIRT Report Engine 1.0.1</li>
  <li>Eclipse BIRT Chart Component 1.0.1</li>
  <li>Eclipse BIRT RCP Report Designer 1.0.1 </li>
</ul>

<h1>Release Milestones</h1>

<p>The Eclipse BIRT 1.0.1 release is targeted for general availability on July 25th, 2005.
All release deliverables will be available for download as soon as the release has been tested
and validated in the target operating configurations listed below.</p>

<p>Release milestones:</p>

<ul>
  <LI>Monday July 11, 2005 - BIRT 1.0.1 M1 (Including RCP version) </LI>
  <LI>Monday July 25, 2005 - BIRT 1.0.1</LI>
</ul>

<h1>Target Operating Environments</h1>

<p>In order to remain current, each release of an Eclipse project targets reasonably current versions
of underlying operating environments and other Eclipse projects on which it depends.</p>

<p>Most of Eclipse is &quot;pure&quot; Java<sup>TM</sup> code and has no direct
dependence on the underlying operating system. The chief dependence is on the
Eclipse Platform, and on the Java 2 Platform that runs it.</p>

<p>The Eclipse BIRT 1.0.1 release depends on one of the following two compatibility stacks:</p>

<dl class="bold-list">
<dt>BIRT 1.0.1 Reference Stack for Eclipse 3.1</dt>
<dd>Java 2 platform Java Development Kit (JDK) 1.4.2<br>
  Eclipse Platform Runtime Binary 3.1
<br>Graphical Editor Framework (GEF) Runtime 3.1
<br>Eclipse Modeling Framework (EMF) 2.1.0</dd>

<dt>BIRT 1.0.1 Reference Stack for Eclipse 3.0.1</dt>
<dd>Java 2 platform Java Development Kit (JDK) 1.4.2
<br>Eclipse Platform SDK 3.0.1
<br>Graphical Editor Framework (GEF) Runtime 3.0.1
<br>Eclipse Modeling Framework (EMF) 2.0.1</dd>
</dl>

<p>The Eclipse Platform runs in a variety of operating environments. Testing is
focused on a handful of popular
combinations of operating system and Java 2 Platform; these
are our <em>reference platforms</em>. Eclipse BIRT undoubtedly runs fine in many
operating environments beyond the reference platforms we test. However, since we
do not systematically test them we cannot vouch for them. Problems encountered
when running Eclipse on non-reference platform that cannot be recreated on any
reference platform will be given lower priority than problems with running
Eclipse on a reference platform.</p>

<p>For BIRT 1.0.1, the project team plans to tests and validate the
 following reference platforms:</p>
<table border="1">
  <tr bgcolor="#CCCCCC">
    <th colspan="4">
      <div align="center">
        <b><font size="+1">BIRT Report Designer  Reference Platforms</font></b>
      </div>
    </th>
  </tr>
  <tr>
    <td width="205"><b>Operating system</b></td>
    <td width="76"><b>Processor architecture</b></td>
    <td width="59"><b>Window system</b></td>
    <td width="453"><b>Java 2 Platform</b></td>
  </tr>
  <tr>
    <td>Microsoft Windows XP </td>
    <td>Intel x86 </td>
    <td>Win32</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2, version 5.0 </td>
  </tr>
  <tr>
    <td>Microsoft Windows 2000 </td>
    <td>Intel x86 </td>
    <td>Win32</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2, version 5.0 </td>
  </tr>
  <tr>
    <td>Microsoft Windows Server 2003 </td>
    <td>Intel x86 </td>
    <td>Win32 </td>
    <td>Sun Java 2 Standard Edition, version 1.4.2, version 5.0 </td>
  </tr>
  <tr>
    <td>Red Hat Enterprise Linux WS 3.0 </td>
    <td>Intel x86 </td>
    <td>GTK</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2</td>
  </tr>
</table>

<br>

<table border="1">
  <tr bgcolor="#CCCCCC">
    <th colspan="4"> <div align="center"> <b><font size="+1">BIRT Report Engine and Chart Component Reference Platforms</font></b> </div></th>
  </tr>
  <tr>
    <td width="205"><b>Operating system</b></td>
    <td width="76"><b>Processor architecture</b></td>
    <td width="59"><b>Window system</b></td>
    <td width="453"><b>Java 2 Platform</b></td>
  </tr>
  <tr>
    <td>Microsoft Windows XP </td>
    <td>Intel x86 </td>
    <td>Win32*</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2</td>
  </tr>
  <tr>
    <td>Microsoft WIndows XP </td>
    <td>Intel x86 </td>
    <td>Win32*</td>
    <td>IBM SDK 1.4.2 </td>
  </tr>
  <tr>
    <td>Microsoft Windows Server 2003 </td>
    <td>Intel x86</td>
    <td>Win32*</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2</td>
  </tr>
  <tr>
    <td>Microsoft Windows Server 2003</td>
    <td>Intel x86 </td>
    <td>Win32*</td>
    <td>IBM SDK 1.4.2 </td>
  </tr>
  <tr>
    <td>Red Hat Enterprise Linux WS 3.0 </td>
    <td>Intel x86 </td>
    <td>GTK*</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2, BlackDown SDK 1.4.2 </td>
  </tr>
  <tr>
    <td>SUSE Linux Enterprise Server 9 </td>
    <td>Intel x86 </td>
    <td>YaST*</td>
    <td>Sun Java 2 Standard Edition, version 1.4.2, BlackDown SDK 1.4.2 </td>
  </tr>
</table>

<p>* Window system only required when displaying charts within SWT or
SWING windows.</p>
<table border="1">
  <tr bgcolor="#CCCCCC">
    <th width="808"> <div align="center"> <b><font size="+1">BIRT Application Server Reference Platform </font></b></div></th>
  </tr>
  <tr>
    <td> Apache Tomcat 4.1.x, 5.5.x </td>
  </tr>
  <tr>
    <td> JBoss AS 4.0.2 </td>
  </tr>
</table>
<br>
<table border="1">
  <tr bgcolor="#CCCCCC">
    <th width="808"> <div align="center"> <b><font size="+1">BIRT JDBC Reference Platforms</font></b> </div></th>
  </tr>
  <tr>
    <td> MySQL Connector/J 3.x JDBC driver</td>
  </tr>
  <tr>
    <td> Derby V5.1 JDBC driver </td>
  </tr>
</table>
<br>

<table border="1">
  <tr bgcolor="#CCCCCC">
    <th width="808"> <div align="center"> <b><font size="+1">BIRT Browsers and Viewers Reference Platforms </font></b></div></th>
  </tr>
  <tr>
    <td>Mozilla Firefox 1.0 </td>
  </tr>
  <tr>
    <td> Microsoft Internet Explorer 6.0 </td>
  </tr>
  <tr>
    <td><p>Adobe Acrobat Reader 7.0 </p></td>
  </tr>
</table>

<h1>Compatibility with Previous Releases</h1>

<h2>Compatibilty of Release 1.0.1 with 1.0</h2>

<p>BIRT 1.0.1 will be compatible with BIRT 1.0. The detailed compatibility statement is listed below.
In this statement, &quot;BIRT&quot; refers to all BIRT components: BIRT Report Framework, BIRT Runtime,
and BIRT Chart SDK.</p>

<dl class="bold-list">
<dt>API Contract Compatibility</dt>
<dd>BIRT 1.0.1 will be upwards contract-compatible with BIRT 1.0 unless otherwise noted. All
incompatibility exceptions will be documented in release notes. Downward contract compatibility is not
supported. There is no guarantee that compliance with BIRT 1.0.1 APIs will ensure compliance with BIRT
1.0 APIs. Refer to general Eclipse document on Evolving APIs for a discussion of the kinds of API changes
that maintain contract compatibility.</dd>

<dt>Binary (plug-in) Compatibility</dt>
<dd>BIRT 1.0.1 pug-ins will be upwards binary-compatible with BIRT 1.0 plug-ins. Downward plug-in
compatibility is not supported. Plug-ins for BIRT 1.0.1 will not be usable in BIRT 1.0. Extension plug-ins
for BIRT 1.0 will be upwards binary-compatible with BIRT 1.0.1.</dd>

<dt>Source Compatibility</dt>
<dd>BIRT 1.0.1 will be upwards source-compatible with BIRT 1.0. This means that source files written to
use BIRT 1.0 APIs will successfully compile and run against BIRT 1.0.1 APIs. Downward source compatibility
is not supported. If source files use new BIRT APIs, they will not be usable with an earlier version of
BIRT.</dd>

<dt>Report Design Compatibility</dt>
<dd>BIRT 1.0.1 will be upwards report design compatible with BIRT 1.0 unless noted. This means that
reports created with BIRT 1.0 can be successfully opened by BIRT 1.0.1 and upgraded to a 1.0.1 format.</dd>

<dt>Non-compliant usage of API's</dt>
<dd>All non-API methods and classes, and certainly everything in a package with &quot;internal&quot; in
its name, are considered implementation details which may vary between operating environment and are
subject to change without notice. Client plug-ins that directly depend on anything other than what is
specified in the BIRT API are inherently unsupportable and receive no guarantees about compatibility
within a single release much less with an earlier releases.</dd>
</dl>

<h1>Themes</h1>

<p>Continuing on the theme for BIRT 1.0, the BIRT project's overriding release 1.0.1 theme remains
extending the Eclipse platform to provide infrastructure and tools that allow application developers
to design, deploy, generate and view reports within their applications. In this context, the BIRT project
also adopts and supports key themes within the overall Eclipse planning process.</p>

<dl class="bold-list">
<dt>Scaling up and EnterpriseReady</dt>
<dd> The Eclipse platform 3.1 has made great strides in improving scalability and readiness for the
enterprise. BIRT 1.0.1 leverages the support that 3.1 provides by ensuring that it is tested and it
supports Eclipse 3.1.</dd>

<dt>Rich Client Platform</dt>
<dd>Eclipse's goal is to make the Eclipse RCP a mainstream development platform for both ISVs and
enterprise developers. The BIRT RCP Report Designer will work to further this goal of enabling Eclipse
to be used in a wide range of end-user applications that are not IDE&rsquo;s. The BIRT RCP Report
Designer masks the complexities of the IDE from typical report designers making it easier for them to
create reports.</dd>
</dl>

<h1>Projects</h1>
<dl class="bold-list">
  <dt>Provide Support for the Eclipse 3.1 Platform Release (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=100964" target="_blank">100964</a>)</dt>
  <dd> This maintenance release will be tested on the Eclipse 3.1 Platform Release.</dd>

  <dt>BIRT RCP Report Designer (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=100965" target="_blank">100965</a>)</dt>
  <dd>The BIRT Report Designer 1.0 is targeted primarily at the Java developers who work with Eclipse
  (and Eclipse-based) IDEs. It is a series of plug-ins that work within the Eclipse IDE, and work within
  the general IDE model that Eclipse provides (for example, the concept of &ldquo;projects&rdquo; with
  files within those projects). While this model is very familiar to, and expected by, the typical Java
  developer, it is not as familiar to the typical report developer who uses products such as Crystal
  Reports. In the traditional report development model, the report developer simply works with standalone
  report design files in a dedicated report designer tool. In order to broaden the appeal of BIRT beyond
  the Java developer, the BIRT RCP Report Designer aims to provide an Eclipse Rich Client Platform (RCP)
  version of BIRT that does not utilize or expose the IDE concepts and work process. The RCP version of
  BIRT will provide a simpler tool that is dedicated to the task of report development &ndash; without
  the additional complexities of the IDE, which is unfamiliar to the typical report developer.</dd>

  <dt>Provide Daily Build Test Reports on Eclipse.org/BIRT Web Site (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=100968" target="_blank">100968</a>)</dt>
  <dd> To help the community understand the quality level of a given BIRT build, the results from the
  automated test runs on each BIRT build should be posted on the Eclipse web site. This should include
  summary level and detailed information (particularly for failures) so that a developer can determine
  if they should attempt to use a given build. For example, a build might indicate that there were
  problems in the BIRT charting area and a developer may still decide to use that build since she is
  not using the charting features.</dd>
</dl>

<h1>Defects</h1>

<p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=BIRT&target_milestone=1.0.1+M1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=n" target="_blank">List of defects targeted for BIRT 1.0.1 M1</a></p>

<p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=BIRT&target_milestone=1.0.1+Final&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-" target="_blank">List of defects targeted for BIRT 1.0.1</a><br></p>


	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
