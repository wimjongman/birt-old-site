<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT 2.3 Project Plan";
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


<p class="head">Draft BIRT Project 2.3 Plan</p>


<p>Last revised September 21, 2007</p>


<h2><a name="Introduction" id="Introduction"></a>Introduction</h2>


<p>This document lays out the feature and API set for the next
feature
release of the Eclipse BIRT project after 2.2, designated release 2.3.</p>


<ul>


  <li><a href="#Deliverables">Release deliverables</a></li>


  <li><a href="#Milestones">Release milestones</a></li>


  <li><a href="#TargetOperatingEnvironments">Target
operating environments</a></li>


  <li><a href="#CommunityOperatingEnvironments">Community
tested operating environments</a></li>


  <li><a href="#Compatibility">Compatibility with
previous releases</a></li>


  <li><a href="#Themes">Themes</a></li>


  <li><a href="#Projects">Projects</a></li>


  <li><a href="#Defects">Defects</a></li>


</ul>


<p>Plans do not materialize out
of nowhere, nor are they entirely
static. To
ensure the planning process is transparent and open to the entire
Eclipse
community, plans are posted in an embryonic form and then revised from
time
to time throughout the release cycle.</p>


<p>The first part of the plan
deals with the important matters of
release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be
clear
for any release, even if no features were to change.</p>


<p>The remainder of the plan
consists of plan items for the
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


<p>Please send comments about
this draft plan to the <a href="mailto:birt-dev@eclipse.org">BIRT
Developer</a>
mailing list.</p>


<h2><a name="Deliverables" id="Deliverables"></a>Release
deliverables</h2>


<p>This&nbsp;release of BIRT will focus on providing the
same
downloads as BIRT 2.2.</p>


<h2><a name="Milestones" id="Milestones"></a>Release
milestones</h2>


<ul>


  <li>The BIRT 2.3 Release&nbsp;<span class="939140701-28062007">will follow the Ganymede
simultaneous release milestones</span></li>


</ul>


<p>Our target is to complete and release BIRT 2.3 with the
Ganymede
Coordinated&nbsp; release.</p>


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


<p>The Eclipse BIRT 2.3 release depends on the following
compatibility
stacks:</p>


<p><b>BIRT 2.3 Reference Stack for JDK 1.4.2</b></p>


<ul>


  <li>Java 2 platform Java Development Kit (JDK) 1.4.2</li>


  <li>Eclipse Platform Runtime Binary 3.4</li>


  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>


  <li>Eclipse Modeling Framework (EMF) 2.2</li>


  <li>Data Tools Platform Project 1.6 (DTP)</li>


  <li>Web Tools Project (WTP) 3.4</li>


</ul>


<p><b>BIRT 2.3 Reference Stack for JDK 1.5</b></p>


<ul>


  <li>Java 2 platform Java Development Kit (JDK) 1.5</li>


  <li>Eclipse Platform Runtime Binary 3.4</li>


  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>


  <li>Eclipse Modeling Framework (EMF) 2.3</li>


  <li>Data Tools Platform Project 1.6 (DTP)</li>


  <li>Web Tools Project (WTP) 3.4</li>


</ul>


<p dir="ltr"><b>BIRT 2.3 Reference Stack for JDK 1.6
</b>(This is only a proposal and depends on whether various
projects provide support for JDK 1.6)</p>


<div dir="ltr">
<ul>


  <li>Java 2 platform Java Development Kit (JDK) 1.6 </li>


  <li>Eclipse Platform Runtime Binary &lt;TBD&gt; </li>


  <li>Graphical Editor Framework (GEF) Runtime
&lt;TBD&gt; </li>


  <li>Eclipse Modeling Framework (EMF) &lt;TBD&gt; </li>


  <li>Data Tools Platform Project (DTP) &lt;TBD&gt; </li>


  <li>Web Tools Project (WTP) &lt;TBD&gt;</li>


</ul>


</div>


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


<p>For BIRT 2.3, the project team plans to tests and validate
the following
reference platforms:</p>


<br>


<table style="width: 825px; height: 188px;" border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="4">
      
      <div align="center"> <b><font size="+1">Eclipse
BIRT Report Framework 2.3 and Eclipse BIRT RCP Report Designer 2.3
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


      <td width="205">Microsoft Windows Server 2003</td>


      <td width="76">Intel x86</td>


      <td width="59">Win32</td>


      <td width="453">Sun Java 2 Standard Edition, version
5.0</td>


    </tr>


    <tr>


      <td>Microsoft Windows Vista</td>


      <td>Intel x86</td>


      <td>Win32</td>


      <td>Sun Java 2 Standard Edition, version 5.0</td>


    </tr>


    <tr>


      <td width="205">
      
      <p>Red Hat Enterprise Linux WS 4.0</p>


      </td>


      <td width="76">Intel x86</td>


      <td width="59">GTK</td>


      <td width="453">Sun Java 2 Standard Edition, version
5.0</td>


    </tr>


  
  </tbody>
</table>


<br>


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="4">
      
      <div align="center"> <b><font size="+1">Eclipse
BIRT Runtime 2.3 and Eclipse BIRT Charts 2.3 Reference Platforms</font></b></div>


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


      <td>Microsoft Windows Vista</td>


      <td>Intel x86</td>


      <td>Win32*</td>


      <td>Sun Java 2 Standard Edition, version
1.4.2, version 5.0</td>


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
windows.<br>


<br>


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


<br>


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


<br>


<table border="1">


  <tbody>


    <tr bgcolor="#cccccc">


      <th colspan="1">
      
      <div align="center"> <b><font size="+1">BIRT
Browsers and Viewers Reference Platforms</font></b></div>


      </th>


    </tr>


    <tr>


      <td width="405">Mozilla Firefox&nbsp;2.0 </td>


    </tr>


    <tr>


      <td width="405">Microsoft Internet Explorer 6.0, 7.0</td>


    </tr>


    <tr>


      <td width="405">Adobe Acrobat Reader 7.0, 8.0</td>


    </tr>


  
  </tbody>
</table>


<br>


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


<h2><span style="font-weight: bold;"><a name="CommunityOperatingEnvironments" id="CommunityOperatingEnvironments">Community
Tested Operating Environments</a></span></h2>


Due to the finite resources available to the BIRT project, we would
like to encourage the BIRT community to contribute to testing BIRT in
operating environments other than those listed as target operating
environments for the 2.3 release of BIRT and to share this
information with the rest of the community. If you have been able to
test BIRT in a non-targeted operating environment please take a few
minutes to update this <a href="http://wiki.eclipse.org/BIRT_Community_Tested_Operating_Environments_for_2.3">wiki
page</a> and report this information there. If
you have encountered bugs during your testing, please report these in
bugzilla.
<p></p>


<h2><a name="Compatibility" id="Compatibility"></a>Compatibility
with
Previous Releases</h2>


<p>BIRT 2.3 will be compatible with earlier versions of BIRT to
the greatest
extent possible. The nature and scope of some of the key plan items for
BIRT
2.3 are such that the only feasible solutions might break
compatibility. In
other regards, BIRT 2.3 will be compatible with 2.x and 1.x. We also
aim to
minimize the effort required to port an existing plug-in to the 2.3
APIs.</p>


<h3>Compatibility of Release 2.3 with Prior Releases</h3>


<p>BIRT 2.3 will be compatible with prior releases of BIRT unless
noted otherwise. The detailed compatibility statement is listed below.
In this
statement, &quot;BIRT&quot; refers to all BIRT components: BIRT Report Framework,
BIRT
Runtime, and BIRT Chart SDK.</p>


<p><b>API Contract Compatibility:</b> BIRT 2.3 will
be upwards
contract-compatible with BIRT prior releases
to the greatest
extent possible. All incompatibility exceptions will be documented.
Downward
contract compatibility is not supported. There is no guarantee that
compliance with BIRT 2.3 APIs will ensure compliance with prior BIRT
release APIs. Refer to general Eclipse document on <a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">Evolving
APIs</a> for a discussion of the kinds of API changes that
maintain contract
compatibility.</p>


<p>The BIRT Chart UI API&nbsp;2.3 is compatible with the
2.x.x API's
but not compatible with the v1.x APIs due to a full redesign of the
Chart UI
in the BIRT 2.0 release.</p>


<p><b>Binary (plug-in) Compatibility:</b> The BIRT
2.3 plug-in framework will
be upwards binary-compatible with prior BIRT release plug-ins to
the greatest extent possible. Downward plug-in compatibility is not
supported. Plug-ins for BIRT 2.3 will not be usable in prior BIRT
releases. Extension plug-ins for prior BIRT releases will be
upwards
binary-compatible with BIRT 2.3.</p>


<p><b>Source Compatibility:</b> BIRT 2.3 will be
upwards source-compatible
with prior BIRT releases to the greatest
extent possible.
This
means that source files written to use prior BIRT release APIs
will successfully compile and run against BIRT 2.3 APIs. Downward
source
compatibility is not supported. If source files use new BIRT APIs, they
will
not be usable with an earlier version of BIRT.</p>


<p><b>Report Design Compatibility:</b>BIRT 2.3 will
be upwards report design
compatible with prior BIRT releases&nbsp;unless
noted otherwise. This means
that
reports created with prior BIRT releases can be
successfully
opened
by BIRT 2.3 and upgraded to a 2.3 format.</p>


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
Ganymede Eclipse platform continues to improve on scalability and
readiness
for the enterprise. BIRT 2.3 leverages the support that Ganymede
provides by
ensuring that it is tested and it is supported.</li>


  <li><b>Simple to Use - </b>BIRT 2.3 includes ease
of use enhancements such as improvements to the BIRT report designer.</li>


  <li><b>Appeal to a Broader Community - </b>BIRT
2.3 will broaden the appeal of BIRT by its integration with the Eclipse
Ganymede simultaneous release.</li>


</ul>


<h2><a name="Projects" id="Projects">Projects</a></h2>


The following is a proposed list of projects for this release. Please
communicate other desired projects to the BIRT PMC.<br>


<br>


<div style="margin-left: 40px;"><span style="font-weight: bold;">Crosstab Enhancements</span><br>


<span style="font-weight: bold;">
</span></div>


<div style="margin-left: 80px;"><span style="font-weight: bold;"></span><br>


</div>


<div style="margin-left: 80px;"><span style="font-weight: bold;"><span style="font-weight: bold;">Filter on Measures </span></span>This
project looks at providing the ability to filter a crosstab based on
measures. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=193235">193235</a>]<br>


<span style="font-weight: bold;"><span style="font-weight: bold;"></span><br>


Show Empty Rows and
Columns</span> The property editor will be enhanced to provide
properties to display empty rows and columns in a crosstab item.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=187327">187327</a>]<br>


<span style="font-weight: bold;"></span><br>


</div>


<div style="margin-left: 80px;"><span style="font-weight: bold;">Computed Columns&nbsp;</span>This
project adds the ability to&nbsp;create
computed columns in a crosstab. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=197206">197206</a>]<br>


<br>


</div>


<div style="margin-left: 80px;"><span style="font-weight: bold;">Scripting Support</span>
This project provides the ability to add scripting on a crosstab.
[Bugzilla
ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=183874">183874</a>]<br>


<br>


<span style="font-weight: bold;"></span><span style="font-weight: bold;">Support for Sorting Using
Expressions</span> This project looks at providing sorting
support in a crosstab by specifying an expression. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192411">192411</a>]<br>


<br>


<span style="font-weight: bold;">Highlight Rows by
Comparing Dimension Values</span> Highlighting crosstab rows
using expressions based on the values of a dimension is the focus of
this project. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=193910">193910</a>]<br>


</div>


<br>


<div style="margin-left: 40px;"><span style="font-weight: bold;">Charts to Inherit Crosstab Data </span>Crosstabs
are a powerful feature in BIRT. Charts that are based on
cubes for its data would be an equally powerful addition to this new
feature. This project looks at letting charts inherit data from a
crosstab.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=197304">197304</a>]<br>


<br>


<span style="font-weight: bold;">Improved Label
Positioning in Charts </span>The layout of various chart
elements becomes complicated when there are a lot of data points. This
project will focus on automatically setting font sizes based on the
chart size, auto wrapping, and auto positioning of X-Axis labels.
[Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=178310">178310</a>]<br>


<br>


<span style="font-weight: bold;">Allow Specification of
Alt= Tags on All Report Items&nbsp;for Improved Accessibility</span>
In order to improve accessibility this project provides the ability to
specify 'Alt' tags for all report items. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=201668">201668</a>]<br>


<br>


<span style="font-weight: bold;">Support Multi-select
Parameters</span> This project looks at providing the ability to
define list or combo report parameters that allow end-users to select
multiple values. [Bugzilla ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=131089">131089</a>]<br>


<br>


<span style="font-weight: bold;"><span style="font-weight: bold;"></span></span><span style="font-weight: bold;">Initial Integration of DTP&nbsp;SQL Query Editor </span>This
project provides an initial level of integration with the SQL Query
builder from the DTP project. The DTP SQL Query Builder will be built
on top of the existing textual Query Editor, and will have a visual
builder available as an option.&nbsp; Editing done in either the
textual or visual pane will be reflected in the other.&nbsp;[Bugzilla
ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=201783">201783</a>]<span style="font-weight: bold;"></span><span style="font-weight: bold;"></span><span style="font-weight: bold;"><span style="font-weight: bold;"></span></span><br>


<br>


<span style="font-weight: bold;">Report Designer Usability
Enhancements</span> As increasing numbers of report developers
adopt BIRT, usability becomes critical to the wide adoption of BIRT.
This project will study areas for improvement with the report designer
and propose improvements. Some possible areas of improvement include
the expression builder, the aggregation builder, and the crosstab
editor. Another area of improvement is better error handling. [Bugzilla
ID: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=201499">201499</a>]<br>


</div>

<br>

<ul>


</ul>


<h2><a name="Defects" id="Defects"></a>Defects</h2>


BIRT 2.3 will address defects reported by project members and the
community. The <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=BIRT&amp;product=BIRT&amp;target_milestone=2.3.0&amp;target_milestone=2.3.0+M1&amp;target_milestone=2.3.0+M2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">list
of defects</a> targeted for resolution in BIRT 2.3 can be found
in the bugzilla database on <a href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.
</body>
<br>
<br>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
