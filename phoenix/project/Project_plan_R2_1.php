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
<p class="head">BIRT Project 2.1 Plan</p>

<p>Last revised May 30, 2006</p>

<p class="subhead"><img src="new.gif" alt="New since last update" width="12"
height="12"> marks interesting changes since the previous draft of January
30, 2006 <br>
</p>

<h2><a name="Introduction" id="Introduction"></a>Introduction</h2>

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

<h2><a name="Deliverables" id="Deliverables"></a>Release deliverables</h2>

<p>In order to improve the end user experience of downloading and installing
BIRT, the release deliverables will be revised. Details will become available
as progress is made on this project.</p>

<h2><a name="Milestones" id="Milestones"></a>Release milestones</h2>

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

<p>Our target is to complete and release BIRT 2.1 with the Callisto
simultaneous release, currently targeted for late June 2006.</p>

<p>For information about new features assigned to each milestone please refer
to the <a href="https://bugs.eclipse.org/bugs">bugzilla database</a>. The
bugzilla database will be updated on an ongoing basis as the plan
progresses.</p>

<h2><a name="TargetOperatingEnvironments"
id="TargetOperatingEnvironments"></a>Target Operating Environments</h2>

<p>In order to remain current, each release of an Eclipse project targets
reasonably current versions of underlying operating environments and other
Eclipse projects on which it depends. </p>

<p>Most of Eclipse, and all of BIRT, is &#8220;pure&#8221; Java&#8482; code and has no direct
dependence on the underlying operating system. For BIRT, the chief dependence
is on the Eclipse Platform, Graphical Editor Framework (GEF), Modeling
Framework (EMF), and on the Java 2 Platform that runs it. </p>

<p>The Eclipse BIRT 2.1 release depends on the following compatibility
stack:</p>

<p><b>BIRT 2.1 Reference Stack for Eclipse 3.2</b></p>
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
      <td width="205">Red Hat Enterprise Linux WS 3.0

        <p><img src="new.gif" alt="New since last update" width="12"
        height="12">Red Hat Enterprise Linux WS 4.0</p>
      </td>
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
      <td width="405"><img src="new.gif" alt="New since last update"
        width="12" height="12">Apache Tomcat 5.0.x, 5.5.x</td>
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

<h2><a name="Compatibility" id="Compatibility"></a>Compatibility with
Previous Releases</h2>

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

<h2><a name="Themes" id="Themes">Themes</a></h2>

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

<h2><a name="Projects" id="Projects">Projects</a></h2>

<p>Projects identified are:</p>

<blockquote>
  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><b>Integration with Eclipse Callisto Simultaneous Release</b>
  The goal of the Callisto Simultaneous Release is to release ten major
  Eclipse projects at the same time to support the needs of the ecosystem
  members who integrate Eclipse frameworks into their own software and
  products. Callisto is about developers helping developers serve the whole
  Eclipse community. This project will ensure that 1) BIRT is integrated with
  the Callisto Simultaneous Release 2) BIRT plug-ins will be made available
  in jar files 3) BIRT will use message bundles and capabilities. [Bugzilla
  ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133665">133665</a>]
  [Theme: Appeal to a Broader Community]</p>

  <p><b>Provide support for the Eclipse 3.2 Platform</b> The BIRT 2.1 release
  will be tested on the Eclipse 3.2 Platform Release. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133666">133666</a>][Theme:
  Scaling up and Enterprise Ready]</p>

  <p><b>Improve distribution and installation of BIRT</b> Users of BIRT,
  especially new users, can sometimes be overwhelmed by the complexity of the
  installation of BIRT and all the components that it depends on. BIRT 2.1
  aims to improve the end user experience of downloading and installing BIRT
  and all of its related components. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133665">133669</a>][Theme:
  Simple to Use]</p>

  <p><b>ICU4J Integration</b> Integrating the International Components for
  Unicode for Java will enable BIRT 2.1 to work with text in any language for
  any place in the world. ICU4J continues to extend Java's Unicode and
  internationalization support, improving performance, staying current with
  the Unicode standard, and providing richer APIs, while remaining as
  compatible as possible with the original Java text and internationalization
  API design. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133665">127012</a>][Theme:
  Appeal to a Broader Community]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Report Viewing</span></p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">Improved Drill
  Through</span> The developer of a report likely does not know what sections
  of that report are interesting enough to serve as destinations for links
  from other reports. Instead of requiring the developer to guess at defining
  bookmarks in the report, this project will focus on developing the
  capability to link to the table of contents of a target report as well as
  to link to a column name and value. This mechanism will provide more
  flexibility and make report linking easier to use. Additionally, when
  linking a report to another via the drill through mechanism, there is
  currently no way of knowing which report parameters if any, are absolutely
  required. The drill through builder will list whether a report parameter is
  required. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=124710">124710</a>][Theme:
  Simple to Use]</p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">Reportlet HTML
  Output </span>Web pages often use HTML tables to organize and position
  their content. In order to provide more flexibility for integrating report
  content into a web page, it becomes necessary to introduce a new set of
  formats that return content as &#8216;Reportlets&#8217;, or partial DHTML pages. These
  Reportlets can then be included within web pages generated by a web
  application. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110681">110681</a>][Theme:
  Simple to Use]</p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">Page Break
  Enhancements</span> Page breaks are currently supported for various report
  items such as tables and grid rows. Additionally, page breaks are required
  in a customer order report that groups information by customer and inserts
  a page break before or after each customer's orders. However, an option is
  required so that the last blank page is suppressed in the case that a page
  break is inserted after every group. Similarly, in the case that a page
  break is inserted before each group, an option should suppress the first
  blank page. When a page break is inserted after every group, the group
  header should automatically be repeated. This project also aims to improve
  the documentation of pagination. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=121275">121275</a>, <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=124585">124585</a>, <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126120">126120</a>, and
  <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119580">119580</a>][Theme:
  Scaling Up]</p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">Determine
  Columns Bound To A Table</span> In order to improve application
  performance, the report developer needs to be able to tell what columns
  from a dataset have been bound to a table. This will allow the developer to
  then optimize the SQL statement. For example, if only 2 columns from a
  dataset with 10 columns have been bound, then the select list does not need
  to fetch all 10 columns from the database. This reduces the data fetch
  thereby improving performance. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133678">133678</a>][Theme:
  Scaling Up]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Total Page Count and Pagination
  Hints For PDF Output</span> When generating PDF output from a BIRT report
  there is no way of determining the total page count for the report. This
  project fixes this shortcoming. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=121159">121159</a>]
  Pagination hints for HTML output are stored in the report document file.
  These hints can not be utilized by the PDF emitter. This project also
  generates PDF pagination hints which get stored in the report document
  file. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=131624">131624</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Data Sources</span></p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">Support
  Enhanced ODA Framework</span> BIRT 2.1 will incorporate enhancements to the
  Open Data Access component of the Data Tools Project such as: Upgrades to
  the ODA 3.0 design framework; specialized implementation in oda.jdbc.ui to
  support the DTP textual SQL Editor and exposed database definition model;
  embedding and launching the ODA custom designer's wizard and editor pages
  in the data explorer. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133681">133681</a>][Theme:
  Appeal to a Broader Community] Additionally, the Design Engine ROM will be
  updated to support the DTP 3.0 model changes. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133682">133682</a>][Theme:
  Appeal to a Broader Community]</p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">XML Data
  Source Enhancements</span> The following items are included in BIRT 2.1: 1)
  BIRT 2.0 supports URL's (with or without parameters) and XML files as input
  streams for the XML Data Source. This project extends this capability by
  using Java classes as input streams for the XML Data Source. Additionally,
  web services as input streams are becoming an accepted method of
  interacting with XML data streams. This will be considered as well. 2) The
  XML Data Set builder appears complex to use for non Java developers who may
  not be familiar with Xpath syntax. This project will explore options to
  improve the usability of the builder. 3) XML files can contain large trees
  and therefore users need a way to filter parts of the tree so that only the
  interesting parts appear in the data set builder. This project will enhance
  the BIRT XML ODA Driver to display non-English strings properly. [Bugzilla
  ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=129424">129424</a>][Theme:
  Appeal to a Broader Community]</p>

  <p style="text-indent: 25pt"><span style="font-weight: bold">Join Two Data
  Sets </span>It is a commonly requested feature that a BIRT table or list be
  able to consume data from two or more data sets joined together with a set
  of join conditions. This feature is very similar to SQL table joins. In
  comparing BIRT&#8217;s data set join to SQL joins, a BIRT data set is equivalent
  to a SQL table, while a data set column is equivalent to a column in a
  table. Data set joins in BIRT are achieved via the introduction of a new
  type of data set called Joint Data Set. A Joint Data Set is a derived data
  set whose data comes from joining two data sets. Users can create a data
  set that is the join of two data sets and can define one and only one join
  key, outer/inner join, and filtering condition. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=131040">131040</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Template Creation From Report
  Design</span> There is no obvious way to create a report template from a
  report design. This project will address this shortcoming. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=122575">122575</a>]
  Some key usability improvements planned in this project include: 1)
  Publishing a template from the right mouse button click in the outline
  view. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126064">126064</a>] 2)
  Indicating that the template display name is required in the template
  publishing dialog. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126074">126074</a>] 3)
  Providing a name for a report item when converting it to a template report
  item. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126103">126103</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Highlighting Top N or Bottom N
  rows</span> Highlighting is a powerful way to draw attention to report
  items that meet certain conditions. For instance, in a product inventory
  report, if the inventory level of a product drops below the minimum
  stocking level, then that row in the report should be highlighted. This
  project enhances the highlighting feature by supporting the capability to
  highlight the top N or bottom N rows in a result set. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=123726">123726</a>]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Highlight Applies To Any Report
  Element</span> When creating alternating bands of highlighted rows, the
  backgrounds for the cells are not contiguous. This leaves white spaces
  between highlighted cells in a band especially if the data value in a cell
  is not available. Highlighting will now be applicable to any report element
  and will not be cascading removing any gaps in highlight bands. [Bugzilla
  ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102511">102511</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Data Set Editor UI
  Improvements</span> In order to make the data set editor consistent with
  the Eclipse look and feel the following items are planned: 1)
  Double-clicking on the data field should work exactly like drag and drop 2)
  Arrows in the right corner will allow the user to navigate to the
  next/previous option. 3) Make Preview Results option the last in the list;
  4) Apply button will appear on each panel and apply the changes made
  without closing the dialog; 5) Clicking the Preview Results button will
  apply the changes made and switch to the Preview Results pane, populating
  it with the data corresponding to the current query; 6) Add progress bar
  (similar to the one in Report Preview) to the Preview Results operation; 7)
  Aesthetic changes such as positioning of items in the dialog and size in
  pixels of items. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126083">126083</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Chart Enhancements</span> A
  number of enhancements are planned for this project. Some key ones include:
  1) Support bar/stick display for Stock series - The bar/stick display
  represents prices as a vertical line from the high to the low, with a left
  tick representing the opening price and a right tick representing the
  closing price. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113179">113179</a>] 2)
  Auto-wrapping/size of legend - Charts auto size and legends wrap so that
  large data sets are handled. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=116709">116709</a>] 3)
  %value for Pie Charts and expressions for data point labels - Provide the
  ability to display the % value of the chart section in addition to
  Orthogonal Value, Base Value and Series Value. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=117566">117566</a>] 4)
  Support tool tips on various chart elements &#8211; Tool tips are used to
  annotate chart components with extra information. Chart components that
  should have tool tips are: chart title, axes, legend items, data sets, and
  data point values. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119136">119136</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Accelerator Keys</span> In
  order to conform to the Accessibility guidelines for the Eclipse UI, this
  project will provide accelerator keys for setting preferences. This will
  enhance the adoption of BIRT in commercial products. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125122">125122</a>][Theme:
  Appeal to a Broader Community]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Ease Report Migration</span> To
  encourage the use of BIRT by the development community, it must be easy for
  developers to migrate BIRT reports across environments such as from
  development to testing to production. To support this goal, BIRT 2.1 should
  provide capabilities in the Eclipse environment that make it easy for the
  developer to deploy the BIRT reports in their application using visual
  tools. This includes packaging up reports and all their dependent
  components such as libraries, scripted data source (Java class files), war
  files for the BIRT runtime, images, and other related artifacts. [Bugzilla
  ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133697">133697</a>][Theme:
  Enterprise Ready]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Include BIRT source code with
  downloads </span>Current downloads of Eclipse BIRT do not provide an SDK
  like package which includes the source code for BIRT. There is a need for
  such a package so that users do not have to handle the additional
  complexities of downloading the source code from CVS. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=104310">104310</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Specifying Report Item Event
  Handlers</span> This project will provide an easier method of specifying
  the class that implements the event handling for a particular report item.
  [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126109">126109</a>][Theme:
  Simple to Use]</p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Multiple Master Pages <span
  style="font-weight: normal">This project will provide support for multiple
  master pages in a report. For each page break before a report item, a new
  master page can be identified. This will remain in effect until the next
  page break that identifies a different master page. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132316">132316</a>][Theme:
  Simple to Use]</span></span></p>

  <p><img src="new.gif" alt="New since last update" width="12"
  height="12"><span style="font-weight: bold">Data Binding in Master Pages
  </span>An often requested feature is the ability to provide data bindings
  on the master page of a report. This project will provide the capability to
  retrieve the first row in the dataset that binds to report items in the
  master page. [Bugzilla ID: <a
  href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132316">122419</a>][Theme:
  Simple to Use]</p>
</blockquote>

<h2><a name="Defects" id="Defects">Defects</a></h2>

<p>BIRT 2.1 will address defects reported by project members and the
community. The <a
href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.1.0+Final&amp;">list
of defects</a> targeted for resolution in BIRT 2.1 can be found in the
bugzilla database on <a
href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.</p>

<p></p>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
