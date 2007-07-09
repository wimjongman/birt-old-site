<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT 2.2 Project Plan";
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


<h1>BIRT 2.2 Project Plan</h1>


<p class="head">BIRT Project 2.2 Plan</p>


<p>Last revised June 27, 2007</p>


<p class="subhead"><img src="new.gif" alt="New since last update" height="12" width="12" />
marks interesting changes since the previous draft of February 7, 2007 </p>


<h2><a name="Introduction" id="Introduction"></a>Introduction</h2>


<p>This document lays out the feature and API set for the next
feature
release of the Eclipse BIRT project after 2.1.1, designated release 2.2.</p>


<ul>


  <li><a href="#Deliverables">Release deliverables</a></li>


  <li><a href="#Milestones">Release milestones</a></li>


  <li><a href="#TargetOperatingEnvironments">Target
operating environments</a></li>


  <li><a href="#Compatibility">Compatibility with
previous releases</a></li>


  <li><a href="#Themes">Themes</a></li>


  <li><a href="#Projects">Projects</a></li>


  <li><a href="#Defects">Defects</a></li>


</ul>


<p>Plans do not materialize out of nowhere, nor are they entirely
static. To
ensure the planning process is transparent and open to the entire
Eclipse
community, plans are posted in an embryonic form and then revised from
time
to time throughout the release cycle.</p>


<p>The first part of the plan deals with the important matters of
release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be
clear
for any release, even if no features were to change.</p>


<p>The remainder of the plan consists of plan items for the
projects under
the Eclipse BIRT project. Each plan item covers a feature or API that
is to
be added, or some aspect that is to be improved. Each plan item has its
own
entry in the Eclipse bugzilla database, with a title and a concise
summary
(usually a single paragraph) that explains the work item at a suitably
high
enough level so that everyone can readily understand what the work item
is
without having to understand the nitty-gritty detail.</p>


<p>Please send comments about this draft plan to the <a href="mailto:birt-dev@eclipse.org">BIRT Developer</a>
mailing list.</p>


<h2><a name="Deliverables" id="Deliverables"></a>Release
deliverables</h2>


<p>In order to improve the end user experience of downloading and
installing
BIRT, the release deliverables will be revised. Details will become
available
as progress is made on this project.</p>


<h2><a name="Milestones" id="Milestones"></a>Release
milestones</h2>


<p>The Eclipse BIRT 2.2 release is part of the
Eclipse Europa simultaneous release. All release deliverables will be
available for download as soon as the release has been tested and
validated in the target operating configurations listed below. The BIRT
2.2 release milestones will be synchronized with other projects as part
of the Europa release. For detailed dates refer to the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">
Europa simultaneous release</a>.
</p>


<ul>


</ul>


<p>For information about new features assigned to each milestone
please refer
to the <a href="https://bugs.eclipse.org/bugs">bugzilla
database</a>. The
bugzilla database will be updated on an ongoing basis as the plan
progresses.</p>


<h2><a name="TargetOperatingEnvironments" id="TargetOperatingEnvironments"></a>Target Operating
Environments</h2>


<p>In order to remain current, each release of an Eclipse project
targets
reasonably current versions of underlying operating environments and
other
Eclipse projects on which it depends.&nbsp;</p>


<p>Most of Eclipse, and all of BIRT, is
&ldquo;pure&rdquo; Java&trade; code and has no direct
dependence on the underlying operating system. For BIRT, the chief
dependence
is on the Eclipse Platform, Graphical Editor Framework (GEF), Modeling
Framework (EMF), and on the Java 2 Platform that runs it. </p>


<p>The Eclipse BIRT 2.2 release depends on the following
compatibility
stack:</p>


<p><b>BIRT 2.2 Reference Stack for JDK 1.4.2</b></p>


<ul>


  <li>Java 2 platform Java Development Kit (JDK) 1.4.2</li>


  <li>Eclipse Platform Runtime Binary 3.3</li>


  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>


  <li>Eclipse Modeling Framework (EMF) 2.2</li>


  <li>Data Tools Platform Project 1.5 (DTP)</li>


  <li>Web Tools Project (WTP) 2.0</li>


</ul>


<p><b>BIRT 2.2 Reference Stack for JDK 1.5</b></p>


<ul>


  <li>Java 2 platform Java Development Kit (JDK) 1.5</li>


  <li>Eclipse Platform Runtime Binary 3.3</li>


  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>


  <li>Eclipse Modeling Framework (EMF) 2.3</li>


  <li>Data Tools Platform Project 1.5 (DTP)</li>


  <li>Web Tools Project (WTP) 2.0</li>


</ul>


<p>The Eclipse Platform and BIRT run in a variety of operating
environments.
Testing is focused on a handful of popular <span class="header">combinations
of operating system and Java 2 Platform; these are our <em>reference
platforms</em>. Eclipse BIRT undoubtedly runs fine in many
operating
environments beyond the reference platforms we test. However, since we
do not
systematically test them we cannot vouch for them. Problems encountered
when
running Eclipse BIRT on non-reference platforms that cannot be
recreated on
any reference platform will be given lower priority than problems with
running Eclipse BIRT on a reference platform.</span></p>


<p>For BIRT 2.2, the project team plans to tests and validate the
following
reference platforms:</p>


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="4">
      
      <div align="center"> <b><font size="+1">Eclipse
BIRT Report Framework 2.2 and Eclipse BIRT RCP Report Designer 2.2
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


      <td width="59">Win32</td>


      <td>Sun Java 2 Standard Edition, version 5.0</td>


    </tr>


    <tr>


      <td width="205">Microsoft Windows 2000</td>


      <td width="76">Intel x86</td>


      <td width="59">Win32</td>


      <td width="453">Sun Java 2 Standard Edition, version 5.0</td>


    </tr>


    <tr>


      <td width="205">Microsoft Windows Server 2003</td>


      <td width="76">Intel x86</td>


      <td width="59">Win32</td>


      <td width="453">Sun Java 2 Standard Edition, version 5.0</td>


    </tr>


    <tr>


      <td width="205">Red Hat Enterprise Linux WS 3.0
      
      <p>Red Hat Enterprise Linux WS 4.0</p>


      </td>


      <td width="76">Intel x86</td>


      <td width="59">GTK</td>


      <td width="453">Sun Java 2 Standard Edition, version 5.0</td>


    </tr>


  
  </tbody>
</table>


<br />


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="4">
      
      <div align="center"> <b><font size="+1">Eclipse
BIRT Runtime 2.2 and Eclipse BIRT Charts 2.2 Reference Platforms</font></b></div>


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


      <td width="453">Sun Java 2 Standard Edition, version
1.4.2, version 5.0</td>


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


      <td width="453">Sun Java 2 Standard Edition, version
1.4.2, version 5.0</td>


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


      <td width="453">Sun Java 2 Standard Edition, version
1.4.2, version 5.0</td>


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


      <td width="453">Sun Java 2 Standard Edition, version
1.4.2, version 5.0</td>


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
windows.<br />


<br />


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="1">
      
      <div align="center"> <b><font size="+1">BIRT
Application Server Reference Platform</font></b></div>


      </th>


    </tr>


    <tr>


      <td width="405">Apache Tomcat 5.0.x, 5.5.x</td>


    </tr>


    <tr>


      <td width="405">JBoss AS 4.0.2</td>


    </tr>


  
  </tbody>
</table>


<br />


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="1">
      
      <div align="center"> <b><font size="+1">BIRT
JDBC Reference Platforms</font></b></div>


      </th>


    </tr>


    <tr>


      <td width="405">MySQL Connector/J 3.x JDBC driver</td>


    </tr>


    <tr>


      <td width="405">Derby V10.1.2.1 JDBC driver</td>


    </tr>


  
  </tbody>
</table>


<br />


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="1">
      
      <div align="center"> <b><font size="+1">BIRT
Browsers and Viewers Reference Platforms</font></b></div>


      </th>


    </tr>


    <tr>


      <td width="405">Mozilla Firefox 1.5, 2.0 <img src="new.gif" alt="New since last update" height="12" width="12" /> </td>


    </tr>


    <tr>


      <td width="405">Microsoft Internet Explorer 6.0</td>


    </tr>


    <tr>


      <td width="405">Adobe Acrobat Reader 7.0</td>


    </tr>


  
  </tbody>
</table>


<br />


<h4>Internationalization</h4>


<p>Eclipse is designed as the basis for internationalized
products. The user
interface elements provided by the various Eclipse projects, including
dialogs and error messages, are externalized. The English strings for
BIRT
are provided as the default resource bundles. Translations are provided
with
this release for French (fr_FR), German (de_DE), Spanish (es_ES),
Japanese
(ja_JP), Simplified Chinese (zh_CN), and Korean (ko_KR).</p>


<h2><a name="Compatibility" id="Compatibility"></a>Compatibility
with
Previous Releases</h2>


<p>BIRT 2.2 will be compatible with earlier versions of BIRT to
the greatest
extent possible. The nature and scope of some of the key plan items for
BIRT
2.2 are such that the only feasible solutions might break
compatibility. In
other regards, BIRT 2.2 will be compatible with 2.x and 1.x. We also
aim to
minimize the effort required to port an existing plug-in to the 2.2
APIs.</p>


<h3>Compatibility of Release 2.2 with 2.1, 2.1.1, 2.1.2, 2.1.3,
2.0.x and 1.x</h3>


<p>BIRT 2.2 will be compatible with BIRT 2.1, 2.1.1, 2.1.2,
2.1.3, 2.0.x and
1.x unless
noted. The detailed compatibility statement is listed below. In this
statement, &quot;BIRT&quot; refers to all BIRT components: BIRT Report Framework,
BIRT
Runtime, and BIRT Chart SDK.</p>


<p><b>API Contract Compatibility:</b> BIRT 2.2 will
be upwards
contract-compatible with BIRT 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and 1.x
to the greatest
extent possible. All incompatibility exceptions will be documented.
Downward
contract compatibility is not supported. There is no guarantee that
compliance with BIRT 2.2 APIs will ensure compliance with BIRT 2.1,
2.1.1, 2.1.2, 2.1.3,
2.0.x or 1.x APIs. Refer to general Eclipse document on <a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">Evolving
APIs</a> for a discussion of the kinds of API changes that
maintain contract
compatibility.</p>


<p>The BIRT Chart UI API v2.2 is compatible with the v2.1, 2.1.1,
2.1.2, 2.1.3, 2.0.x API
but not compatible with the v1.x APIs due to a full redesign of the
Chart UI
in the BIRT 2.0 release.</p>


<p><b>Binary (plug-in) Compatibility:</b> The BIRT
2.2 plug-in framework will
be upwards binary-compatible with BIRT 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x
and 1.x
plug-ins to
the greatest extent possible. Downward plug-in compatibility is not
supported. Plug-ins for BIRT 2.2 will not be usable in BIRT 2.1, 2.1.1,
2.1.2, 2.1.3, 2.0.x
or 1.x. Extension plug-ins for BIRT 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and
1.x will be
upwards
binary-compatible with BIRT 2.2.</p>


<p><b>Source Compatibility:</b> BIRT 2.2 will be
upwards source-compatible
with BIRT 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and 1.x to the greatest
extent possible.
This
means that source files written to use BIRT 2.1, 2.1.1, 2.1.2, 2.1.3,
2.0.x or 1.x
APIs
will successfully compile and run against BIRT 2.2 APIs. Downward
source
compatibility is not supported. If source files use new BIRT APIs, they
will
not be usable with an earlier version of BIRT.</p>


<p><b>Report Design Compatibility:</b>BIRT 2.2 will
be upwards report design
compatible with BIRT 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and 1.x unless
noted. This means
that
reports created with BIRT 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x or 1.x can be
successfully
opened
by BIRT 2.2 and upgraded to a 2.2 format.</p>


<p><b>Non-compliant usage of API's: </b> All non-API
methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are
considered
implementation details which may vary between operating environment and
are
subject to change without notice. Client plug-ins that directly depend
on
anything other than what is specified in the BIRT API are inherently
unsupportable and receive no guarantees about compatibility within a
single
release much less with an earlier releases.</p>


<h2><a name="Themes" id="Themes">Themes</a></h2>


<p>Continuing on the themes for previous releases of BIRT, the
BIRT project's
overriding release 2.2 theme remains extending the Eclipse platform to
provide infrastructure and tools that allow application developers to
design,
deploy, generate and view reports within their applications. In this
context,
the BIRT project also adopts and supports key themes within the overall
Eclipse planning process.</p>


<ul>


  <li><b>Scaling up and Enterprise Ready</b> The
Eclipse platform 3.3 continues to improve on scalability and readiness
for the enterprise. BIRT 2.2 leverages the support that 3.3 provides by
ensuring that it is tested and it supports Eclipse 3.3.</li>


  <li><b>Simple to Use - </b>BIRT 2.2 includes ease
of use enhancements such as improvements to the BIRT report designer.</li>


  <li><b>Appeal to a Broader Community - </b>BIRT
2.2 will broaden the appeal of BIRT by its integration with the Eclipse
Europa simultaneous release. In addition, BIRT 2.2 provides new report
types via additional report items such as the Crosstab report item.</li>


</ul>


<h2><a name="Projects" id="Projects">Projects</a></h2>


<p>The candidate projects being considered for this release
include the
following list. Please note that the final list will depend on sign off
from
the project committers.</p>


<p><span style="font-weight: bold;">Data Sources</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Web Service Data
Source</span> One of the key goals of BIRT is to support data
access for a
number of different data sources for reporting. Given the widespread
popularity of web services, this project enhances the XML ODA driver to
include the capability to treat web services as a data source. It also
allows
the report developer to specify data source parameters in order to
filter the
data that is fetched. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159490">159490</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Extend Flat File
Data Source</span> Instead of specifying the column data types in
the first
row of a CSV file, this project looks at specifying the column names
and
their data types when defining the flat file data source. In addition,
this
project makes the flat file data source more flexible by allowing
delimiters
other than just the comma character. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152210">152210</a>]</p>


<p style="text-indent: 25pt; text-decoration: line-through;"><span style="font-weight: bold;"></span><span style="font-weight: bold;"></span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Predicates in
XML Data Sets</span> It is not currently possible to apply
predicates such as
/city/[@iscapital=&quot;&quot;Y&quot;&quot;]/@name in order to fetch the name of a capital
city
using an XPath expression when defining an XML data source. This
project
extends the predicates that are supported in the XML data
source.[Bugzilla
ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152823">152823</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Dynamic
Reference to Connection Profile</span> A connection profile
contains all of
the necessary information to allow a BIRT report to connect to a data
source.
BIRT supports importing a connection profile when creating a data
source in a
report design. However, when changes are made to a connection profile
these
changes are not reflected in the BIRT report. This project aims to
provide
the capability to store a reference to an external connection profile
so that
any changes made to the profile are automatically picked up by the BIRT
report. This makes migration from a test to a production environment
easy.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=149945">149945</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Boolean Data
Type in Data Set</span> In a data set, when creating a computed
column it
currently is not possible to specify the data type as a Boolean data
type.
This project will now allow the creation of Boolean type computed
columns.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152443">152443</a>]</p>


<p><span style="font-weight: bold;">Emitters</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Microsoft Word, Excel, and
PowerPoint<img src="new.gif" alt="New since last update" height="12" width="12" />
Output</span>s Users who receive reports often want to
distribute
these reports to a wider audience via email in order to share
information. In
the process of doing this, they may want to export the report to a
common
format such as MS Word, Excel, or PowerPoint make the edits and then
distribute the
Word, Excel spreadsheet, or PowerPoint file. For usability, the
receiver of the email
would
rather access the document as an MS Office file. PDF is often not an
option
since the user wants to make edits to the file. The MS Word, Excel, and
PowerPoint
report
format converters approximate the look and spacing of elements in the
original report to Word, Excel, and PowerPoint formats respectively.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159491">159491</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Postscript
Output</span> The widespread availability and acceptance of
PostScript has
made it a language of choice for graphical output for printing
applications.
Providing a PostScript emitter from a BIRT report supports offloading
the CPU
workload involved in printing documents, transferring it to the
printer.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=158748">158748</a>]</p>


<p><span style="font-weight: bold;">Use of Eclipse
3.2 Features</span></p>


<p style="text-indent: 25pt;">This project aims to make
use of the new Eclipse
3.2 SWT widgets and upgrades to the latest version of EMF. [Bugzilla
ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159493">159493</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Extensible Data
Explorer View</span> This project aims to make the data explorer
view
extensible so that custom data sources can now be made available and
selected
from in the Data Explorer view. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159495">159495</a>]</p>


<p style="text-indent: 25pt; text-decoration: line-through;"><span style="font-weight: bold;"></span><span style="font-weight: bold;"></span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Improved and
Extensible Property Editor View</span> This project aims to make
the property
editor view extensible and improves its look and feel. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159497">159497</a>]</p>


<p><span style="font-weight: bold;">Contributions to
Eclipse's DTP
Project</span> This project will make several contributions to
the DTP
project. These include: 1) Enhance oda runtime API to provide
generalized
support of JDBC specialized features 2) Enhance oda.design utility to
facilitate oda host processing of oda.design response/request 3)
Extract
common behavior from BIRT odaconsumer to DTP oda.consumer 4) Migrate
BIRT
oda.xml plugins to DTP Enablement namespace. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159498">159498</a>]</p>


<p><span style="font-weight: bold;">Formatting</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Highlight Rule
References Style Element</span> Highlighting is a powerful way to
draw
attention to report items that meet certain conditions. For instance,
in a
product inventory report, if the inventory level of a product drops
below the
minimum stocking level, then that row in the report needs to be
highlighted
so that the consumer of the report can act on the information in a
timely
fashion. Instead of defining style elements in a highlighting rule,
this
project aims to allow the use of existing style elements in a BIRT
report.
This makes it easy for report developers to maintain changes to styles
and
highlighting rules. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=146642">146642</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Table of
Contents Formatting</span> The table of contents in a BIRT report
currently
do not support the use of styles. They also do not provide any
flexibility in
their layout. This project aims to allow the use of styles as well as
more
flexibility in the layout of the table of contents in a BIRT report.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159499">159499</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Reference to
External CSS file</span> Style sheets provide an easy to use and
productive
mechanism to establish a uniform style across documents. This is a
concept
with which many users are familiar. This project extends the concept of
styles to allow the definition of a style to be contained in a separate
style
sheet file that can be referred to from a BIRT report without importing
it.
This makes it easy to modify CSS files and have the changes reflected
in a
report design. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140619">140619</a>]</p>


<p><span style="font-weight: bold;">Report Item</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Dynamic Crosstab
Report Item</span> A cross tabulation report (often abbreviated
as a Crosstab
report) displays the relation between two variables in a tabular or
matrix
format. An example of a crosstab report might be a &ldquo;US Sales
By State and
Product&rdquo; report that displays the US states along the X-axis
and products
along the Y-axis. Each cell in this table could be the sum of the
amount
spent by all customers who live in a particular state AND have
purchased a
particular product. This project aims to provide a dynamic crosstab
report
item where the values displayed along the rows and columns are gleaned
from
the data set columns. This project enhances the ODA Design API to
support
OLAP data source metadata to populate the crosstab report item's
initial
configuration. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102521">102521</a>]</p>


<p><span style="font-weight: bold;">Parameters</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Designating
Default for a List of Values</span> Report parameters allow users
to tailor
the content of a report. Selecting a value for a parameter from a list
of
values that is fetched from a data set prevents the user from
incorrectly
supplying parameter values. When designing a report parameter that
presents a
list of values based on a data set, it is useful for the report
developer to
be able to examine the list and designate a default value from the
list. This
project aims to allow the report developer to define this default
value.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=153495">153495</a>]</p>


<p><span style="font-weight: bold;">Usability</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Debugging</span>
When designing a report the developer encounters errors occasionally.
The
productivity of the developer is greatly enhanced if the designer helps
in
pinpointing the location of that error quickly. This project looks at
ways to
improve this debugging capability. When the report developer clicks on
a
error in the Problem View, the focus would shift to the report item
that has
the error. If there is an error in the XML underlying the report
design, then
focus would shift to the line in the XML with the error. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159502">159502</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Aggregation Builder </span>Novice
users of BIRT sometimes find it challenging to define aggregations of
data in a BIRT report. This is especially true for some of the more
complex aggregation functions that take numerous parameters. This
project looks at alleviating this by making it easier to define
aggregations in a report.&nbsp;[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=130686">130686</a>]<img src="new.gif" alt="New since last update" height="12" width="12" />
</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Chart Designer
Usability</span> This project aims at improving the layout and
general
usability of the chart designer to include areas such as new icons,
better
grouping of
data, reorganize the UI for easier scripting for charts, quick access
to commonly used settings, the
interactivity UI, easy creation of drill-through URL's using chart
values as
parameters, navigation improvements, and Eclipse wizard-like error
notification.&nbsp;[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132040">132040</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;"></span>&nbsp;<span style="font-weight: bold;">Ease of Plugin
Development</span> The Open Data Access (ODA) framework is key
component of
the Data Tools Project (DTP). ODA presents the Java developer with a
robust
architecture to extend the capabilities of BIRT by being able to report
on
custom data sources. This project will make it easier to extend the
data
sources that BIRT can report on by providing a wizard to create an ODA
runtime and designer plugin with default implementation and stub source
code.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159503">159503</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Building
BIRT</span> This project focuses on making it easy for the
Eclipse community
to compile and build BIRT and therefore to make contributions to BIRT.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159504">159504</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Quick Start to
Report Development</span> First time users and novice users of
BIRT will
benefit from being able to examine sample reports as they go about
learning
to design reports. This project looks at making a set of sample reports
easily accessible by these users. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159505">159505</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Improved XML
Editor</span> This project will look at improving the
capabilities of the XML
editor by leveraging the capabilities of the XML editor from Eclipse's
Web
Tools Project. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159507">159507</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Improved
Extensibility of Emitters</span> BIRT provides a framework that
is highly
extensible. This project aims to make it easier for developers to add
new
types of emitters.[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=158714">158714</a>]</p>


<p><span style="font-weight: bold;">Scripting</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Scripting
Implementation</span> This project proposes to enhance the
scripting
capabilities so that both Java and JavaScript based scripting utilize
the
same implementation and therefore have very similar levels of
functionality.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159509">159509</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Documentation of
Scripting API's</span> This project looks at documenting the
current
scripting API's for both Java and JavaScript based scripting. [Bugzilla
ID:
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132031">132031</a>]</p>


<p><span style="font-weight: bold;">Deployment and
Integration</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Easy Deployment
and Integration</span> To encourage the use of BIRT by the
development
community, it must be easy for developers to integrate BIRT reports
into
their Java applications. To support this goal, BIRT should provide
capabilities that make it easy for the developer to deploy the BIRT
Runtime
and reports in their application using easy-to-use tools. This project
explores the use of tools from the WTP project in order to accomplish
this
goal. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159510">159510</a>]
This project also provides developers the ability to easily deploy
charts in their applications&nbsp;using easy-to-use tools from the
WTP project. [Bugzilla ID:
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=181746">181746</a>]<img src="new.gif" alt="New since last update" height="12" width="12" />
</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">JSP Tag Library
for Charts</span> Java Server Pages is a widely used technology
in web
application development. In order to simplify the integration of Charts
within a JSP based application, this project will provide a JSP tag
library.
This library can be used only with standalone charts. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159511">159511</a>]</p>


<p><span style="font-weight: bold;">Charting</span></p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">New Chart
Types</span> This project extends the different types of charts
available to
include Gantt, Bubble, Difference<span style="text-decoration: line-through;"></span>, Cones,
Tubes for
2d/2d+3d<span style="text-decoration: line-through;"></span>.
Enhancement of cone and pyramid types
to support stacking.<span style="font-size: 11pt; line-height: 115%; font-family: Calibri;"></span>
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147770">147770</a>]<img src="new.gif" alt="New since last update" height="12" width="12" />
</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Scaling and
Grouping</span> This project improves the scaling and grouping of
charts.
Items include improved datetime and range grouping; multiple Y
aggregates for X series grouping (each Y series can use its own
aggregate
function); support linear axis for Line/Bar/Area (non-stacked)
charts;
datetime scaling support; overflow data handling; steps number
customization. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159513">159513</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Chart API</span> This
project aims to provide a simple API for chart scripting inside BIRT
reports similar to the design engine script API, and that integrates
with it. This is another API to easily modify the chart model inside
BIRT report scripts. In addition, the chart engine API has been
centralized
into a single class called 'ChartEngine'. This provides access to all
the chart engine interfaces&nbsp;making it easier for a user to get
started with the chart engine API.[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159514">159514</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Multiple Aggregations per Series</span>
When doing base series aggregations, all orthogonal series definitions
have to share the same function. This project looks at allowing each
orthogonal series definition to specify its own aggregate function. The
aggregate function defined in the base series definition is treated as
the default function.[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170057">
170057</a>]</p>


<p style="text-indent: 25pt;"><span style="font-weight: bold;">Chart Examples View </span>A
new chart examples view lets developers get started
with
building chart&nbsp;by viewing charting examples. [Bugzilla ID:
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159608">159608</a>]<img src="new.gif" alt="New since last update" height="12" width="12" /></p>


<h2><a name="Defects" id="Defects">Defects</a></h2>


<p>BIRT 2.2 will address defects reported by project members and
the
community. The <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.2.0&amp;">list
of defects</a> targeted for resolution in BIRT 2.2 can be found
in the
bugzilla database on <a href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.</p>




</body>
<br>
<br>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
