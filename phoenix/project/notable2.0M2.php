<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.0 Milestone 2";
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

	<div align=LEFT style="padding-left: 185px">

		<h1><a name="top"></a>$pageTitle</h1>

<h1>General</h1>
<p>The BIRT team has been hard at work developing BIRT 2.0, which is slated for release late this year and has reached a major milestone.  Milestone 2 has officially been released to the public.  Below is a description of some of the key features that are now available in the M2 build.  Keep in mind, as with all milestone releases, the product continues to evolve.
The complete list of features for the final 2.0 release is available at http://www.eclipse.org/birt/phoenix/project/project_plan_R2_0_0.html.
</p>

<h1>Dynamic Parameters/Cascading Parameters</h1>
<p>Most applications, which require reporting will have a need for culling or filtering the data that is used within the report.  This allows tailoring the report to a specific user without the need to highly customize the report design.  This is often done with report parameters that are used within the report logic and/or the SQL query.  The issue, then, becomes how to present and collect the parameter information from the consumer of the report.  BIRT 2.0 addresses this issue by adding sophisticated dynamic and cascading parameter support.
With the new Dynamic Parameter feature, the report designer can present the consumer a list of options for a parameter that is interactive and based on live content.
</p>
<img src="images/dynp1b.JPG" width="602" height="576"/>
<p>In the above example, a Dynamic Parameter is created that presents the report user with a list of Countries to choose from.  This is done, by allowing the report designer the ability to create a BIRT data set, which can then be used to dynamically populate a parameter list box. </p>
<img src="images/dynp2b.JPG" width="603" height="564"/>
<p>In addition to Dynamic Parameters, it is often desirable to present the user a set of interlinked parameter choices.  For example, a user wishes to run a report that displays all of his/her employees that work in the Pasadena office.  You would not want to display a list of all possible employee cities.  Ideally a Country list would be displayed, and then possibly a State/Province, followed finally by a City list.  BIRT 2.0 accomplishes this by delivering a Cascading Parameter Feature.</p>
<img src="images/dynp3a.JPG" width="605" height="631"/>
<p>The Cascaded parameter list provides nested selection. In the above example, the Customer’s Country is selected and this choice restricts the Customer’s City choices.  As with Dynamic Parameters, the choices are based on a BIRT Data Set.
There are some known limitations with Dynamic and Cascading parameters in the M2 release. These will be corrected in future nightly and stable builds.
</p>
<img src="images/dynp4a.JPG" width="603" height="609"/>
<h1>Expression Builder</h1>
<p>The Expression Builder has been replaced with an improved GUI, which presents a more streamlined and intuitive interface for building JavaScript expressions. The new Expression builder includes features like line numbers, cut and paste functionality, object browsing and tool tips.  Additional changes continue to be made to the expression builder, including auto complete and syntax highlighting, which are slated for the final 2.0 release.</p>
<img src="images/express1.JPG" width="602" height="545"/>
<h1>Importing of Style Sheets</h1>
<p>While Style Sheets offer a wide range of formatting and design features, with earlier versions of BIRT, styles had to be defined individually within the report design.  To overcome this limitation, BIRT 2.0 delivers the capability to import Style Sheets into the report design, from an external source.</p>
<img src="images/importcss.JPG" width="601" height="453"/>
<p>Using this feature, it is now easier to present a consistent look and feel across multiple report designs without having to create separate style instances for each. In addition, the feature makes it possible to easily coordinate report look and with web site look and feel, which can be particularly important when BIRT reports are included in extranets and web portals.
This feature will continue to be refined and will be encapsulated within the Library functionality that is still in development for the BIRT 2.0 release.
</p>
<h1>Report XML Editor</h1>
<p>Expanding on the capabilities of the Report Designer, a new XML source editor tab is now available to the report designer.  The Source tab presents the entire report design in color-coded XML format, allowing direct modifications the XML design that are persisted immediately.</p>
<img src="images/xmleditor.JPG" width="798" height="598"/>
<h1>Passing of External Object to Custom Data Sources</h1>
<p>Often the BIRT engine is embedded in or is part of an existing Java EE application.  The ODA layer, which is responsible for data access, occasionally needs access to objects in the Context of the encapsulating application.  This might include things like security credentials, connection handles, or parameter objects.  To accommodate this requirement, BIRT 2.0 has added a Context Object within the ODA layer, which can be passed in from the external application.  This object can take many forms and can be used for all of the items mentioned above.</p>
<h1>Stored Procedures</h1>
<p>With the release of M2, BIRT now supports calling stored procedures.  Within the Data Set Editor, the stored procedures are now displayed and can be used to build complex Data Sets.</p>
<img src="images/StoredProcs.JPG" width="603" height="547"/>
<p>In the above example, “OrdersByProducts” is being called to return a quantity of products sold, based on Product Name, which is passed as a parameter to the stored procedure.</p>
<h1>CLOB/BLOB  Support</h1>
<p>The Data Set data types have been expanded to include Character Large Object (CLOB) and Binary Large Object (BLOB) items.  In addition to adding support for these types within the ODA framework, these items can now be bound to certain controls within the designer.  CLOB columns can be bound to Text controls and BLOB columns can be bound to Image controls.</p>
<img src="images/blobtype.JPG" width="603" height="457"/>
<p>In the example above, the logo image is stored as a BLOB type.  The Image Builder has been enhanced to allow the BLOB image to be retrieved from the database and inserted into an Image control.</p>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
