<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT 2.2.1 Project Plan";
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
<p class="head">BIRT Project 2.2.1 Plan</p>



<p>Last revised June 28, 2007</p>



<h2><a name="Introduction" id="Introduction"></a>Introduction</h2>



<p>This document lays out the feature and API set for the next
feature
release of the Eclipse BIRT project after 2.2, designated release 2.2.1.</p>



<ul>



  <li><a href="#Deliverables">Release deliverables</a></li>



  <li><a href="#Milestones">Release milestones</a></li>



  <li><a href="#TargetOperatingEnvironments">Target
operating environments</a></li>



  <li><a href="#Compatibility">Compatibility with
previous releases</a></li>



  <li><a href="#Themes">Themes</a></li>



  <li><a href="#Projects">Projects</a></li>



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



<p>This maintenance release of BIRT will focus on providing the
same
downloads as BIRT 2.2.</p>



<h2><a name="Milestones" id="Milestones"></a>Release
milestones</h2>



<ul>



  <li>BIRT 2.2.1 Maintenance Release&nbsp;<span class="939140701-28062007">will follow 
the Europa simultaneous maintenance release milestones</span></li>



</ul>



<p>Our target is to complete and release BIRT 2.2.1 with the
Europa
Coordinated Maintenance release.</p>



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



<p>The Eclipse BIRT 2.2.1 release depends on the following
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



<p>For BIRT 2.2.1, the project team plans to tests and validate
the following
reference platforms:</p>



<br>



<table border="1">



  <tbody>



    <tr bgcolor="#cccccc">



      <th colspan="4">
      
      
      <div align="center"> <b><font size="+1">Eclipse
BIRT Report Framework 2.2.1 and Eclipse BIRT RCP Report Designer 2.2.1
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



      <td>Microsoft Windows Vista</td>



      <td>Intel x86</td>



      <td>Win32</td>



      <td>Sun Java 2 Standard Edition, version 5.0</td>



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



<br>



<table border="1">



  <tbody>



    <tr bgcolor="#cccccc">



      <th colspan="4">
      
      
      <div align="center"> <b><font size="+1">Eclipse
BIRT Runtime 2.2.1 and Eclipse BIRT Charts 2.2.1 Reference Platforms</font></b></div>



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



      <td width="405">Mozilla Firefox 1.5, 2.0 </td>



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



<p>BIRT 2.2.1 will be compatible with earlier versions of BIRT to
the greatest
extent possible. The nature and scope of some of the key plan items for
BIRT
2.2.1 are such that the only feasible solutions might break
compatibility. In
other regards, BIRT 2.2.1 will be compatible with 2.x and 1.x. We also
aim to
minimize the effort required to port an existing plug-in to the 2.2.1
APIs.</p>



<h3>Compatibility of Release 2.2.1 with 2.2, 2.1, 2.1.1, 2.1.2,
2.1.3,
2.0.x and 1.x</h3>



<p>BIRT 2.2.1 will be compatible with BIRT 2.2, 2.1, 2.1.1,
2.1.2,
2.1.3, 2.0.x and
1.x unless
noted. The detailed compatibility statement is listed below. In this
statement, &quot;BIRT&quot; refers to all BIRT components: BIRT Report Framework,
BIRT
Runtime, and BIRT Chart SDK.</p>



<p><b>API Contract Compatibility:</b> BIRT 2.2.1 will
be upwards
contract-compatible with BIRT 2.2, 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and
1.x
to the greatest
extent possible. All incompatibility exceptions will be documented.
Downward
contract compatibility is not supported. There is no guarantee that
compliance with BIRT 2.2.1 APIs will ensure compliance with BIRT 2.2,
2.1,
2.1.1, 2.1.2, 2.1.3,
2.0.x or 1.x APIs. Refer to general Eclipse document on <a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">Evolving
APIs</a> for a discussion of the kinds of API changes that
maintain contract
compatibility.</p>



<p>The BIRT Chart UI API&nbsp;2.2.1 is compatible with the
2.2, 2.1, 2.1.1,
2.1.2, 2.1.3, 2.0.x API
but not compatible with the v1.x APIs due to a full redesign of the
Chart UI
in the BIRT 2.0 release.</p>



<p><b>Binary (plug-in) Compatibility:</b> The BIRT
2.2.1 plug-in framework will
be upwards binary-compatible with BIRT 2.2, 2.1, 2.1.1, 2.1.2, 2.1.3,
2.0.x
and 1.x
plug-ins to
the greatest extent possible. Downward plug-in compatibility is not
supported. Plug-ins for BIRT 2.2.1 will not be usable in BIRT 2.2, 2.1,
2.1.1,
2.1.2, 2.1.3, 2.0.x
or 1.x. Extension plug-ins for BIRT 2.2, 2.1, 2.1.1, 2.1.2, 2.1.3,
2.0.x and
1.x will be
upwards
binary-compatible with BIRT 2.2.1.</p>



<p><b>Source Compatibility:</b> BIRT 2.2.1 will be
upwards source-compatible
with BIRT 2.2, 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and 1.x to the greatest
extent possible.
This
means that source files written to use BIRT 2.2, 2.1, 2.1.1, 2.1.2,
2.1.3,
2.0.x or 1.x
APIs
will successfully compile and run against BIRT 2.2.1 APIs. Downward
source
compatibility is not supported. If source files use new BIRT APIs, they
will
not be usable with an earlier version of BIRT.</p>



<p><b>Report Design Compatibility:</b>BIRT 2.2.1 will
be upwards report design
compatible with BIRT 2.2, 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x and 1.x
unless
noted. This means
that
reports created with BIRT 2.2, 2.1, 2.1.1, 2.1.2, 2.1.3, 2.0.x or 1.x
can be
successfully
opened
by BIRT 2.2.1 and upgraded to a 2.2.1 format.</p>



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



<p>This release is primarily aimed at addressing identified bugs
in BIRT
2.2.</p>



<h2><a name="Projects" id="Projects">Projects</a></h2>



<ul>



  <li>Provide support for Microsoft Windows Vista as a reference platform [Bugzilla ID:
    <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=183643">
183643</a>]</li>



</ul>



BIRT 2.2.1 will address defects reported by project members and the
community. The <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=BIRT&product=BIRT&target_milestone=2.2.1&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=plan&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">list
of defects</a> targeted for resolution in BIRT 2.2.1 can be found
in the bugzilla database on <a href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.

</body>
<br>
<br>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
