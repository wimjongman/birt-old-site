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

<p class="subhead">Last revised 9 December, 2005 <br>
<img src="/birt/phoenix/project/new.gif" alt="New since last update" width="12" height="12"> marks interesting changes since the previous draft of 28 September, 2005</p>
<h2><a name="Introduction"></a>Introduction</h2><p>
This document lays out the feature and API set for the next feature release of the Eclipse BIRT project after 1.0.1, designated release 2.0.
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

<p>
Plans do not materialize out of nowhere, nor are they entirely static. To ensure
the planning process is transparent and open to the entire Eclipse community, plans
are posted in an embryonic form and then revised from time to time throughout the
release cycle.
</p>

<p>
The first part of the plan deals with the important matters of release deliverables,
release milestones, target operating environments, and release-to-release compatibility.
These are all things that need to be clear for any release, even if no features were
to change.
</p>

<p>
The remainder of the plan consists of plan items for the projects under the Eclipse
BIRT project. Each plan item covers a feature or API that is to be added, or some aspect
that is to be improved. Each plan item has its own entry in the Eclipse bugzilla
database, with a title and a concise summary (usually a single paragraph) that explains
the work item at a suitably high enough level so that everyone can readily understand
what the work item is without having to understand the nitty-gritty detail.
</p>

<p>
Please send comments about this draft plan to the <a href="mailto:birt-dev@eclipse.org">BIRT
Developer</a> mailing list.
</p>

<h2><a name="Deliverables"></a>Release deliverables</h2>

<p>The release deliverables are:</p>
<ul>
  <li>Source code release for Eclipse BIRT, available as versions tagged &quot;R2.0&quot; in
the eclipse.org <a href="http://dev.eclipse.org/viewcvs">CVS repository</a>.</li>
  <li>Eclipse BIRT Report Framework 2.0.</li>
  <li>Eclipse BIRT RCP Report Designer 2.0.</li>
  <li>Eclipse BIRT Runtime 2.0</li>
  <li>Eclipse BIRT Charts 2.0</li>
  <li>Eclipse BIRT Test Suites 2.0</li>
</ul>

<h2><a name="Milestones"></a>Release milestones</h2>
<p>
The Eclipse BIRT 2.0 release is targeted for release on December 30th 2005,
pending community release review. All release deliverables will be available
for download as soon as the release has been tested and validated in the
target operating configurations listed below.
</p>

<p>Release milestones:</p>
<ul>
  <li>Friday, September 16, 2005 BIRT 2.0 M1</li>
  <li>Monday, October 24, 2005 BIRT 2.0 M2</li>
  <li>Monday, November 21, 2005 BIRT 2.0 M3</li>
  <li>Friday, December 30, 2005 BIRT 2.0 Release Candidate </li>
  <li>Friday, January 20, 2006 BIRT 2.0</li>
</ul>

<p>
For information about new features assigned to each milestone please refer to the
<a href="https://bugs.eclipse.org/bugs">bugzilla database</a>. The bugzilla database
will be updated on an ongoing basis as the plan progresses.
</p>

<h2><a name="TargetOperatingEnvironments"></a>Target Operating
Environments</h2>

<p>In order to remain current, each release of an Eclipse project targets
reasonably current versions of underlying operating environments and other
Eclipse projects on which it depends. </p>

<p>
Most of Eclipse, and all of BIRT, is &#8220;pure&#8221; Java&#8482; code and has no direct
dependence on the underlying operating system. For BIRT, the chief dependence
is on the Eclipse Platform, Graphical Editor Framework (GEF), Modeling
Framework (EMF), and on the Java 2 Platform that runs it.
</p>

<p>The Eclipse BIRT 2.0 release depends on the following compatibility stack:</p>
<b>BIRT 2.0 Reference Stack for Eclipse 3.1</b>
<ul>
  <li>Java 2 platform Java Development Kit (JDK) 1.4.2</li>
  <li>Eclipse Platform Runtime Binary 3.1</li>
  <li>Graphical Editor Framework (GEF) Runtime 3.1</li>
  <li>Eclipse Modeling Framework (EMF) 2.1.0</li>
</ul>
<p>
The Eclipse Platform and BIRT run in a variety of operating environments. Testing
is focused on a handful of popular <span class="header">combinations of operating system and Java 2
Platform; these are our <em>reference platforms</em>. Eclipse BIRT undoubtedly runs fine in
many operating environments beyond the reference platforms we test. However, since
we do not systematically test them we cannot vouch for them. Problems encountered
when running Eclipse BIRT on non-reference platforms that cannot be recreated on any
reference platform will be given lower priority than problems with running Eclipse
BIRT on a reference platform.</span></p>

<p>For BIRT 2.0, the project team plans to tests and validate the following reference
platforms:</p>

<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="4">
        <div align="center">
        <b><font size="+1">Eclipse BIRT Report Framework 2.0 and Eclipse BIRT RCP
Report Designer 2.0 Reference Platforms</font></b></div>
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
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version 5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows 2000</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version 5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version 5.0</td>
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
        <b><font size="+1">Eclipse BIRT Runtime 2.0 and Eclipse BIRT Charts 2.0
Reference Platforms</font></b></div>
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
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">IBM SDK 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">IBM SDK 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, BlackDown SDK 1.4.2</td>
    </tr>
    <tr>
      <td width="205">SUSE Linux Enterprise Server 9</td>
      <td width="76">Intel x86</td>
      <td width="59">YaST*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, BlackDown SDK 1.4.2</td>
    </tr>
  </tbody>
</table>
*Window system only required when displaying charts within SWT or SWING windows.<br>
<br>
<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT Application Server Reference Platform</font></b></div>
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
        <b><font size="+1">BIRT Browsers and Viewers Reference Platforms </font></b></div>
      </th>
    </tr>
    <tr>
      <td width="405">Mozilla Firefox 1.0</td>
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
interface elements provided by the various Eclipse projects, including dialogs
and error messages, are externalized. The English strings for BIRT are provided
as the default resource bundles. Translations are provided with this release
for French (fr_FR), German (de_DE), Spanish (es_ES), Japanese (ja_JP), Simplified
Chinese (zh_CN), and Korean (ko_KR).
</p>

<h2><a name="Compatibility"></a>Compatibility with Previous Releases</h2>

<p>BIRT 2.0 will be compatible with earlier versions of BIRT to the greatest
extent possible. The nature and scope of some of the key plan items for BIRT
2.0 are such that the only feasible solutions might break compatibility. In
other regards, BIRT 2.0 will be compatible with 1.0.1 and 1.0. We also aim to
minimize the effort required to port an existing plug-in to the 2.0 APIs.
</p>

<h3>Compatibility of Release 2.0 with 1.x</h3>

<p>BIRT 2.0 will be compatible with BIRT 1.x unless noted. The detailed
compatibility statement is listed below. In this statement, &quot;BIRT&quot; refers to
all BIRT components: BIRT Report Framework, BIRT Runtime, and BIRT Chart SDK.
</p>

<p><b>API Contract Compatibility:</b> BIRT 2.0 will be upwards contract-compatible
with BIRT 1.x to the greatest extent possible. All incompatibility exceptions will
be documented. Downward contract compatibility is not supported. There is no guarantee
that compliance with BIRT 2.0 APIs will ensure compliance with BIRT 1.x APIs. Refer
to general Eclipse document on
<a href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving
APIs</a> for a discussion of the kinds of API changes that maintain contract compatibility.</p>

<p>The BIRT Chart UI API v2.0 is not compatible with the v1.0 API due to a full redesign
of the Chart UI. However, older extension implementations are expected to be used with
the new version as noted below &#8211;</p>

<u>Support for Old Chart UI Extension Points</u><br>
<em>&#8216;uisheets&#8217; Extension Point: </em>The &#8216;uisheets&#8217; extension point will be supported
but in a slightly limited form. It will be used to populate the navigation tree in the
formatting task sheet only. All extensions will be displayed under a special &#8216;Custom
Properties&#8217; node of the tree. The structure of the nodes represented by the extensions
will be maintained.<br><br>
<em>&#8216;types&#8217; Extension Point: </em>This extension point will be supported with some new
functionality added to the interface. If the existing extension is created by
implementing the interface, it will need to be modified to implement the additional methods.
If it extends the default implementation, no changes will be needed. It will still be
suggested that the new functionality be reviewed so that its relevance to each extension
can be examined.<br><br>
<em>&#8216;changelisteners&#8217; Extension Point: </em>This extension point will NOT be supported.
The functionality that could be extended and controlled using this extension point will
not be available in the new User Interface.<br><br>
<em>&#8216;seriescomposites&#8217; Extension Point: </em>This extension point will be supported and
will have the same use as it did in version 1.0 viz. to provide UI components to set
attribute and data properties for custom series types. The location and use of these
custom composites however will be a little different in the new UI. In this case, the
data composite will be used in the data screen to allow setting of the data definition
for the series components. The attribute composite will be used in the advanced popup
for the series.

<p><b>Binary (plug-in) Compatibility:</b> The BIRT 2.0 plug-in framework will be upwards
binary-compatible with BIRT 1.x plug-ins to the greatest extent possible. Downward
plug-in compatibility is not supported. Plug-ins for BIRT 2.0 will not be usable in BIRT
1.x. Extension plug-ins for BIRT 1.x will be upwards binary-compatible with BIRT 2.0.</p>

<p><b>Source Compatibility:</b> BIRT 2.0 will be upwards source-compatible with BIRT 1.x to
the greatest extent possible. This means that source files written to use BIRT 1.x APIs
will successfully compile and run against BIRT 2.0 APIs. Downward source compatibility is
not supported. If source files use new BIRT APIs, they will not be usable with an earlier
version of BIRT.
</p>

<p><b>Report Design Compatibility:</b>BIRT 2.0 will be upwards report design
compatible with BIRT 1.x unless noted. This means that reports created with BIRT
1.x can be successfully opened by BIRT 2.0 and upgraded to a 2.0 format.
</p>

<p><b>Non-compliant usage of API's: </b> All non-API methods and classes, and certainly
everything in a package with &quot;internal&quot; in its name, are considered implementation
details which may vary between operating environment and are subject to change without
notice. Client plug-ins that directly depend on anything other than what is specified in
the BIRT API are inherently unsupportable and receive no guarantees about compatibility
within a single release much less with an earlier releases.</p>

<h2><a name="Themes">Themes</a></h2>

<p>
Continuing on the theme for BIRT 1.x, the BIRT project's overriding release 2.0 theme
remains extending the Eclipse platform to provide infrastructure and tools that allow
application developers to design, deploy, generate and view reports within their
applications. In this context, the BIRT project also adopts and supports key themes
within the overall Eclipse planning process.
</p>

<ul>
  <li><b>Scaling Up - </b>BIRT 2.0 targets the needs of report developers who report on
         large datasets generating large report documents with thousands of pages. This
         release also provides the capability to store report documents persistently.</li>
  <li><b>Design for Extensibility - </b>BIRT 2.0 extends the extension points in the BIRT
         framework by implementing additional extensions on the framework. Some examples
         include support for XML as an additional data source and support for templates.</li>
  <li><b>Simple to Use - </b>BIRT 2.0 includes a number of enhancements in this area such as
         scripting using Java, enhanced charting wizard functionality, improvements to the
         expression builder, and ease of use enhancements to the ROM API. Additionally, BIRT
         2.0 continues to provide the RCP based report designer which is targeted at the report
         developer.</li>
  <li><b>Appeal to a Broader Community - </b>BIRT 2.0 will broaden the appeal of BIRT by enabling
         additional applications of BIRT technology. This will be made possible by the availability
         of support for numerous additional types of reports.</li>
</ul>

<h2><a name="Projects">Projects</a></h2>

<h4>Report Types, Layouts, and Controls</h4>

<blockquote>
  <p><b>Multi-pass Aggregate, Sorting and Filtering</b>
Some queries require multiple passes over the data. For example, a report may wish to display a
listing of top deals. The entry in the report for each deal might show the size of the deal as a
percentage of the total sales for that quarter. Such &#8220;two-pass&#8221; aggregates require BIRT to make
one pass over the data to compute the total for the quarter, then a second pass to generate the
report. This multi-pass aggregation is not supported by all data sources. This project therefore
extends BIRT to provide support for multi-pass aggregates for all data sources. [Bugzilla
ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110640">110640</a>][Theme: Simple to
use, Appeal to a Broader Community]</p>

  <p><b>Top N / Bottom N Report Layout</b>
Top N / Bottom N reports display information that is typically sorted by an aggregated number, for
example, a report that lists the top 3 performing sales people. This project will provide
capabilities to easily create a Top N / Bottom N type report section. [Bugzilla ID:
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110641">110641</a>][Theme: Simple to use]</p>

  <p><b>Provide support for binding Blob/Clob data to report controls</b>
Many database  schemas, such as those used for call center or customer support applications,  contain columns defined as character large objects (CLOBs). These fields  contain, for example, the variable length and free format text notes that the  call center representative takes when speaking to a customer. <img src="/birt/phoenix/project/new.gif" alt="New since last update to plan" width="12" height="12">In addition, an  human resources system might store pictures of employees in a database as  binary large objects (BLOBS). This project will provide easy support for  displaying BLOBS/CLOBs in a BIRT report. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110642">110642</a>][Theme: Simple to use, Appeal to a Broader Community]</blockquote>

<h4>BIRT Java Script Objects</h4>
<blockquote>

<p>BIRT 1.0 included support for many of the scripting object capabilities that are in JavaScript.
This project is intended to add more scripting objects. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110644">110644</a>][Theme: Simple to use]

</blockquote>

<h4>Interactive Report Viewing</h4>

<blockquote>
  <p><b>Page-on-Demand Navigation</b>
Page-on-demand is a mechanism for dealing efficiently with large report documents over a
remote connection such as to the internet. Instead of reading an entire report into memory
or sending an entire report over a network, pages are requested by the application and sent
as needed. This method of data transfer improves response time for the end user and optimizes
resource usage. When integrating BIRT into applications, particularly web applications,
page-on-demand capabilities are needed to ensure that the application can be built with
acceptable performance.

This feature consists of two projects:
1) providing the application developer with page-on-demand viewing API&#8217;s. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110645">110645</a>]
2) including an exemplary implementation of a viewing framework that allows application
developers to easily integrate viewing functionality into their applications and customize
the viewing capabilities they choose. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110646">110646</a>]
[Theme: Scaling up]


<p><b>Report Paging</b>
Long reports need to be divided into pages for effective use. This division can occur either
automatically, or with specific page breaks determined by the report developer. Multi-page
report support will allow the report developer to design reports that have controlled page
breaks (such as for each new group value), or using automatic page breaks, and for the
application developer to integrate page navigation of BIRT reports into the application itself.
The definition of a page in this context needs to be flexible to accommodate differing physical
characteristics, or logical constructs such as a page for each customer. This project enables
BIRT to support multi-page report output. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110671">110671</a>]
[Theme: Scaling up]
<p><b>Hyperlinks to Other Reports</b>
This project provides the report developer the capability to link easily to another report while
not hard wiring the report to a particular environment. Additionally, if a user navigates to
another report, it also provides the mechanisms to retain the state of the original report.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110648">110648</a>]
[Theme: Simple to use]

<p><b>Bookmarks (Hyperlinks into a Report Body)</b>
It is often desirable to hyperlink into a specific point in a report document, for example, to
a chart that has sales summaries for the Western Region. Many report items can be the target of
hyperlinks. The BIRT bookmark feature is a string that uniquely identifies the item instance
within the report. This project provides support for the bookmark concept in BIRT reports.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110651">110651</a>]
[Theme: Simple to use]

<p><b>Table of Contents Support in Viewer</b>
A table of contents shows the hierarchical structure of a report to the end user and allows
the user to easily and quickly navigate to sections of the report. The hierarchy is defined by
the report grouping and sub report structure, with customizations possible by the report developer,
such as providing custom text for each node in the hierarchy. TOC features include: ability to
expand the TOC one level at a time, handle arbitrarily large groups at any node/level in the
hierarchy, and links from the group title jump to the first page of that group. Note that this
project is focused on TOC as a navigational mechanism in the report viewer, rather than providing a
TOC element that can be embedded in a report. This later item is a separate feature that is not
scheduled for this release. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110655">110655</a>]
[Theme: Simple to use]
</blockquote>

<h4>Report Engine Scalability and Performance</h4>

<blockquote>
<p><b>Memory Usage Efficiency Improvement</b>
This project intends to enhance the BIRT engine to utilize memory more efficiently.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110656">110656</a>]
[Theme: Scaling up]

<p><b>Concurrent User Scalability Large Numbers of Active Users</b>
When BIRT is deployed in a production environment with various kinds of application servers, it
is expected that there will be hundreds of users who concurrently need to run a BIRT report.
BIRT needs to be able to scale to handle running reports concurrently for large numbers of users.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110658">110658</a>][Theme: Scaling up]

</blockquote>

<h4>Data Engine Scalability and Performance</h4>
<blockquote>
<p><b>Disk-Based Sorting and Data Manipulation</b>
Reports against large data sets with millions of rows often require the report engine to sort the data and perform aggregation. To support these scenarios, this project incorporates a sorting and aggregation capability within the BIRT Engine, which, due to the potentially large data sets, can use a combination of memory and disk for the task. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110659">110659</a>]
[Theme: Scaling up]

<p><b>Cache Query Results while Developing</b>
While designing a report, the developer specifies a data set to report on. If the number of
records in the data set is large, then the iterative process of making changes to a report
followed by previewing those changes slows down because the large data set has to be fetched
for each preview operation. This slowdown can hinder quick report design and adversely affect
the developer experience and productivity associated with BIRT. This project allows a report
developer to specify a property on a data set that limits the number of records that are
fetched during the development process, and that those results are cached as much as possible.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110660">110660</a>][Theme: Simple to use]

</blockquote>

<h4>Report Document</h4>
<blockquote>
<p><b>Persistent Storage of Report Output</b>
It is often desirable to run a report and then store the results of that report for viewing later.
For example, generating a large (1000s of pages) report and then viewing pages individually as
needed. To support this scenario, this project extends BIRT to offer a way to persistently save a
report for viewing at some point in the future. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110661">110661</a>][Theme: Scaling up]
</blockquote>

<h4><strong><img src="/birt/phoenix/project/new.gif" alt="New since last update" width="12" height="12">Improved PDF Output  Generation </strong></h4>
<blockquote>
Robust PDF generation is a key component for reporting since many users generate PDF versions of the report for portability, printing and distribution. For BIRT, the PDF support needs to be very high quality. This project addresses issues related to PDF generation using FOP such as slow performance, limited support for lines and borders, and others. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=120143">120143</a>][Theme: Scaling up]
</blockquote>

<h4><strong>Report Template</strong></h4>
<blockquote>
When creating a new report, BIRT provides the ability to select a template for the report design.
With BIRT 1.0, these templates are from a predefined list that is built into the user interface.
In order to support context specific uses of BIRT, the application developer wants to be able to
add new templates into the user interface. In addition, BIRT will allow templates to be added to
the user interface, and for cheat sheets to be associated with the template. It will also be
possible to include associations to a style sheet and/or library with the template design. This
would allow the developer to provide the person consuming the template with pre-defined styles
and/or visual components from a library. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110662">110662</a>][Theme: Design for extensibility]

</blockquote>

<h4>BIRT Library</h4>
<blockquote>
Libraries contain report components or functions for reuse in multiple report designs. A report
or library developer creates a library, then places it in a shared location for others to use.
Libraries improve developer productivity and promote report design consistency, and maintainability.
This project will provide library support within BIRT. This includes simple components and compound
compounds such as a page header with a logo and address. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110663">110663</a>]
[Theme: Simple to use]

</blockquote>

<h4>BIRT Style and CSS Style Sheet</h4>
<blockquote>
<p><b>External Style Sheets for Use Across Multiple Report Designs</b>
This project extends the concept of styles to allow the definition of a style to be contained in a
separate style sheet file that can be shared across multiple reports. This will make it easy to
establish a common look across all the reports in an application, and if needed, to be able to
quickly change the look across many reports just by editing the style sheet. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110746">110746</a>]
[Theme: Scaling up, Simple to use]

<p><b>Ability to import CSS Style Sheets</b>
When designing a report that is going to be deployed in a corporate application, the developer of
the report should not have to recreate the styles that have already been defined for the look and
feel of the web site. This project allows the BIRT report developer to &quot;point&quot; to an existing CSS
style sheet file and import this for use within their report design to define various elements of
the report such as fonts, colors, and others. A future project will look at using a CSS style sheet
directly without the need to import. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110664">110664</a>]
[Theme: Simple to use]

</blockquote>

<h4>Code Editor for BIRT Scripting</h4>
<blockquote>
BIRT supports the ability to script, or code, the behavior of reports in a number of ways. To
improve code editing, BIRT will leverage an Eclipse perspective for working with code in BIRT.
Perspectives exploit the power of Eclipse to the report designer&#8217;s benefit.  In addition, they
are a way to provide rich functionality by leveraging the Eclipse environment. This project will
provide support for and a perspective for Java Code Editing for BIRT reports. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110665">110665</a>]
[Theme: Simple to use]

</blockquote>

<h4>Dynamic Parameter Selection List</h4>
<blockquote>
Parameterized BIRT reports can be used to provide a highly personalized experience. End-users
can choose to view the information that matters most to them when they want to see it. Parameter
values change as quickly as the business itself. For example, a sales manager may want to view
total sales closed by a particular salesperson. In order to support the more complex scenario,
BIRT should allow report developers to specify that the list of values for a parameter be
dynamically populated at run time. The goal of this project is to provide built-in support for
dynamic parameters. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110666">110666</a>]
[Theme: Simple to use]

</blockquote>

<h4><img src="/birt/phoenix/project/new.gif" alt="New since last update" width="12" height="12">Cascading Dynamic Parameter Lists</h4>
<blockquote>
Parameterized BIRT reports can be used to provide a highly personalized experience. Building on the support for Dynamic Parameter Lists, a report may require an end user, at run time, to specify more than 1 parameter that are cascaded together. For example, a regional sales report may require the user to specify parameters for the State and City. Suppose the user selects California for the state. The user may then want to see the sales information for a specific city. The user would then specify a value for the City parameter of the report. However, the values for the City parameter list would depend on the value selected for the State parameter and would dynamically at run time be populated with cities in California. This project concerns itself with providing the report developer with the ability to define dynamic parameters that are cascaded together as described above. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=120145">120145</a>][Theme: Simple to use]

</blockquote>
<h4>Chart Builder and Wizard</h4>
<blockquote>
BIRT includes support for including charts within a report design. The goal for this project
is to improve the usability of the chart control. We will be looking at both a Wizard/Builder
approach for common usage/charts, in addition to a more advanced capability for report
developers who want to control the chart in more detail. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110667">110667</a>]
[Theme: Simple to use]

</blockquote>

<h4>Property Editor for Chart Report Item</h4>
<blockquote>
BIRT provides a Property Editor for accessing commonly used properties for visual and
non-visual components in a report. The Property Editor is not currently available for elements
in a chart within a report design. For consistency and developer productivity reasons, this
project aims to allow the Property Editor to be used for commonly changed properties in a
chart. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110668">110668</a>]
[Theme: Simple to use]
</blockquote>

<h4>Chart component improvements</h4>
<blockquote>
This project looks at the charting component of BIRT to make a number of significant improvements
in chart specification and generation. Examples of improvements to be made include, the ability
to use report styles in charts, handling the situation when labels on the X-axis overlap,
specifying a legend title, or marker shapes. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110669">110669</a>]
[Theme: Simple to use]
</blockquote>

<h4>Scripting of Charts</h4>
<blockquote>
Some Report developers will want to customize the behavior of a chart in a report to meet
specific needs requested by their end users. For example, to highlight specific visual elements
in a chart based on data values such as expanding the pie slice for the median data value. This
project will provide the ability within BIRT to control the behavior of a chart with methods on
the chart control. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110670">110670</a>]
[Theme: Simple to use]
</blockquote>

<h4>Expression  Builder</h4>
<blockquote>
With the Expression Builder in BIRT 1.0, it is awkward to build the expression using the user
interface. There are a number of improvements that can be made to make it easier to navigate
around the functions, and to provide the user with help on each of the functions that are
available. This project implements those usability improvements. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110672">110672</a>]
[Theme: Simple to use]
</blockquote>

<h4><img src="/birt/phoenix/project/new.gif" alt="New since last update" width="12" height="12">View/Edit XML Report Designs</h4>
<blockquote>
For developers working with report designs visually in the Layout View, it is useful to be able to see the XML associated with the report design they are working on. With BIRT 1.0, it is only possible to see the XML report design if you close the visual editor and open the design file in the Eclipse XML editor. In BIRT 1.0, it was not possible to easily switch between the visual and XML view. This project provides a mechanism for the report developer to easily switch between the visual and XML views of a report design, and to be able to edit the report in either view.[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=120923">120923</a>][Theme: Simple to use]
</blockquote>

<h4>XML Data Sources</h4>
<blockquote>
With the rapid adoption of XML as the lingua franca for business information exchange, and for
the exchange of information within an application, a large number of developers would like to
report against XML data sources. Additionally, most ERP and CRM applications now provide
interfaces to deliver data in XML. This project provides an out of the box adapter to access
XML data sources. This can be used &quot;as is&quot; or as an example ODA connector that can be adapted
for other purposes. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110673">110763</a>]
[Theme: Simple to use, Appeal to a Broader Community]
</blockquote>

<h4>Dataset parameters</h4>
<blockquote>
Certain data sources, such as those accessing data in RDBMS's, support the concept of stored
procedures and functions. These constructs provide the capability to pass in parameters as well as
pass out resulting data values. This project concerns itself with building the capability to access
the output parameters from these types of constructs via BIRT scripting capability. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110765">110765</a>]
[Theme: Simple to use, Appeal to a Broader Community]
</blockquote>

<h4>Report Object Model API</h4>
<blockquote>
The BIRT Design Engine API allows developers to programmatically manipulate a report design using
an API, rather than manipulating the XML directly. This API was introduced in BIRT 1.0 and is used
extensively within the BIRT project itself. This project makes some enhancements to the Design
Engine API based on feedback from the community and the BIRT project&#8217;s own use of the API. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110676">110676</a>]
[Theme: Design for extensibility]
</blockquote>

<h4>ODA framework migration to DTP</h4>
<blockquote>
<p><b>Move ODA Runtime Extension Point and Java Interfaces to DTP</b> The ODA Runtime Extension Point
and Java Interface components will be part of the Eclipse Data Tools Project (DTP) going forward.
This BIRT project will move these components from the BIRT areas of Eclipse to DTP and make any
naming changes as needed. This includes reviewing and removing any BIRT project dependency and
allowing this to use the DTP project instead. The BIRT project team members originally working on
this component will continue to work on this project within the DTP project. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110677">110677</a>]
[Theme: Design for extensibility]

<p><b>Provide Plug-in Adapter for BIRT ODA Drivers to DTP ODA</b>
The ODA Runtime Extension Point and Java Interface components will be part of the Eclipse Data Tools
Project (DTP) going forward. All ODA Consumer applications are expected to upgrade and adopt the DTP
ODA framework and namespace in lieu of the BIRT ODA namespace. For compatibility with existing
adapters, this project will provide a plug-in adapter for BIRT ODA drivers that implement the BIRT
ODA 2.0.x interfaces. This will allow a DTP ODA consumer application to consume existing BIRT ODA
data providers without any source code or binary build changes.  However, if an ODA data provider
wants to implement any of the enhancements added to ODA version 3.0 or later, its implementation
must migrate and adopt the DTP ODA interfaces. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110678">110678</a>]
[Theme: Design for extensibility]
</blockquote>

<h4>Export Report Data</h4>
<blockquote>
<p><b>Data Extraction from a Saved Report</b>
This project supports data extraction from a report at several different levels: 1) Report
level 2) Dataset level 3) Report item level for a table, list, or chart items 4) Report item
instance. Extraction at the report level can be achieved by repeatedly retrieving data for each
dataset. Extraction at the report item instance level would include computed columns as normal
columns. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110679">110679</a>]
[Theme: Simple to use, Appeal to a Broader Community]

<p><b>Ability to Export Report Data as CSV</b>
Building on the infrastructure of exporting data from a report, this project allows the end user
to extract report data as a CSV formatted file. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110680">110680</a>]
[Theme: Simple to use, Appeal to a Broader Community]
</blockquote>

<h4>Pass-through of external context objects</h4>
<blockquote>
The BIRT engine is often embedded as part of a middle-tier application server, where the BIRT
components are added to the mix of various J2EE components. During report run-time, some of these
other components may instantiate context objects, which are served to the BIRT engine for its custom
data source to use. The BIRT engine will thus need to pass through such external Java objects into
the BIRT data source components for consumption. These context objects are assumed to be dynamically
instantiated at report run-time, and are not statically defined in a report design. The scope of this
project thus focuses on data source specific run-time Java objects which are instantiated external to
BIRT, and are passed through to a custom data source provider plugged in the BIRT engine. Some
examples of the types of external context objects that may be passed through to a BIRT data source
provider include, an open JDBC connection, a pooled connection, user authorization keys, or query
parameter values collected outside of BIRT. 
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110682">110682</a>]
[Theme: Design for extensibility]
</blockquote>

<h2><a name="Defects">Defects</a></h2>
BIRT 2.0 will address defects reported by project members and the community. The
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=BIRT&target_milestone=2.0.0+Final&target_milestone=2.0.0+M1&target_milestone=2.0.0+M2&target_milestone=2.0.0+M3&target_milestone=2.0.0+M4&tar">list of defects</a>
targeted for resolution in BIRT 2.0 can be found in the bugzilla database on
<a href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
