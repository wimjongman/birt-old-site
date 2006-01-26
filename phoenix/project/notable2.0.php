<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.0";
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

		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">New BIRT Viewer</a></li>
				<li><a href="#jump_3">JavaScript/Java Events And Report Debugging</a></li>
				<li><a href="#jump_4">Runtime Data Source Property Binding</a></li>
				<li><a href="#jump_5">Chart Builder and SVG Output</a></li>
				<li><a href="#jump_6">Templates</a></li>
				<li><a href="#jump_7">Libraries</a></li>
				<li><a href="#jump_8">XML ODA</a></li>
				<li><a href="#jump_9">URL Builder</a></li>
				<li><a href="#jump_10">Multi-pass Aggregate, Sorting and Filtering</a></li>
				<li><a href="#jump_11">Improved Report Performance and PDF Fidelity</a></li>
				<li><a href="#jump_12">Dynamic Parameters/Cascading Parameters</a></li>
				<li><a href="#jump_13">Expression Builder</a></li>
				<li><a href="#jump_14">Importing of Style Sheets</a></li>
				<li><a href="#jump_15">Report XML Editor</a></li>
				<li><a href="#jump_16">Passing of External Object to Custom Data Sources</a></li>
				<li><a href="#jump_17">Stored Procedures</a></li>
				<li><a href="#jump_18">CLOB/BLOB  Support</a></li>
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</h1>		

<p>The BIRT Team is pleased announce the release of BIRT 2.0.</p>
<p>BIRT now supports HTML pagination, CSV output, and a Table Of Contents with the supplied BIRT Viewer.  In addition, features such as Libraries, Templates, Multi-Pass aggregates, flexible Charting Wizard and XML as a data source all contribute to making BIRT 2.0 a powerful platform for your reporting needs.</p>

<p>This release represents the culmination of a community-driven development cycle that has facilitated the development of quite a list of features and functions.  Some of these features are highlighted below, but the complete list for 2.0 is available
<a href=http://www.eclipse.org/birt/phoenix/project/project_plan_R2_0_0.html>here</a></p>
<p>The BIRT Team would like to thank the BIRT community for the valuable feedback and support you have provided.
</p>
<h1><a name="jump_2">New BIRT Viewer</a></h1>

<p>Traversing a large HTML report to locate a particular piece of information can be cumbersome.  To allow better navigation of report data, BIRT 2.0 features a new and improved Viewer, based on AJAX technology.  The new Viewer paginates the emitted HTML following report design properties, allowing it to display pages on demand via the page controls in the Viewer navigation bar.</p>
<p>In addition to pagination, the new Viewer supports Table Of Contents (TOC) functionality which allows someone viewing a report to jump to a particular section.  For example, in the Customer Orders report presented below, the HTML spans seven pages.  The TOC is displayed in a collapsible frame to the left of the report and represents a hierarchy of content for the entire report.  Selecting any entry in the TOC automatically loads the desired page.  TOC entries can be nested, as the Order Number is nested below the Customer Number in the example below.</p>
<p>The TOC is formatted with the standard BIRT Expression Builder.</p>
<img src="/birt/phoenix/project/images/toc.jpg" width="768" height="576"/>
<p>The Viewer also supports data extraction to CSV format.  This is accomplished by clicking the "Export Data" icon located on the toolbar.</p>

<img src="/birt/phoenix/project/images/export1.jpg" width="768" height="576"/>
<p>A dialog is presented allowing the user to select the columns to export to CSV.</p>
<img src="/birt/phoenix/project/images/export3a.png" width="370" height="408"/>

<h1><a name="jump_3">JavaScript/Java Events And Report Debugging</a></h1>

<p>BIRT currently supports event scripting using JavaScript.  Event handlers are coded in the BIRT Script Editor, which now supports syntax color-coding and code completion.  The Editor also offers improved access to report item properties.</p>
<img src="/birt/phoenix/project/images/ScriptEditor.jpg" width="768" height="576"/>
<p>BIRT 2.0 has extended the script model to allow coding of event handlers in Java as well as JavaScript.  This feature gives the Java developer greater flexibility when building complex reports.  An additional benefit of coding in Java is the ability to debug the events using the new BIRT Report Launch Configuration under the Java Development Tools (JDT).</p>
<p>To create a Java event the developer first builds the event Class in Java.</p>
<img src="/birt/phoenix/project/images/javaevent1.jpg" width="768" height="576"/>
<p>Next the Class is assigned to the Event Handler Property for the given Report Item.  In the case illustrated below, the Java Event Handler Class is assigned to a table row.</p>

<img src="/birt/phoenix/project/images/javaevent2.jpg" width="768" height="576"/>
<p>The Report can now be debugged within the JDT.</p>
<img src="/birt/phoenix/project/images/javaevent3.jpg" width="768" height="576"/>


<h1><a name="jump_4">Runtime Data Source Property Binding</a></h1>

<p>It is often desirable to use one set of credentials for developing a report and separate set(s) for production usage.  BIRT 2.0 accomplishes this using a Data Source Property Binding Wizard, which allows several properties for the data source to be changed at runtime.  For example, the report below uses the Username and Password parameters that are passed to it to connect to the data source.</p>
<img src="/birt/phoenix/project/images/Datasource1.jpg" width="768" height="576"/>
<p>The values used in the wizard can be more than simple parameters, including complex statements built using the Expression Builder.  For example assume we wish to use a test database while in development and a production database when the report is complete.  This can be accomplished by swapping the JDBC Driver URL at run time as shown below.</p>
<img src="/birt/phoenix/project/images/PropertyBinding.jpg" width="768" height="576"/>





<h1><a name="jump_5">Chart Builder and SVG Output</a></h1>

<p>A new chart builder is available in BIRT 2.0.  This wizard is designed to expedite chart development by separating the process into three easy to use dialogs: Select Chart Type, Select Data, and Format Chart.  SVG rendering of charts has also been added.</p>
<img src="/birt/phoenix/project/images/chart1a.jpg" width="768" height="576"/>
<p><i>Select Chart Type.</i></p>
<img src="/birt/phoenix/project/images/chart2a.jpg" width="591" height="573"/>
<p><i><c>Select Chart Data.</c></i></p>
<img src="/birt/phoenix/project/images/chart3a.jpg" width="504" height="497"/>
<p><i>Format Chart.</i></p><br>

<p>Additional functionality has been added to the Chart wizard to enhance support for user interactivity.  As shown below, additional events and actions have been added to support such things as scripting and drill-through.</p>
<img src="/birt/phoenix/project/images/interactcol.jpg" width="627" height="503"/>

<h1><a name="jump_6">Templates</a></h1>

<p>BIRT now provides report developers the ability to build and publish report templates.  Consistent look and feel can be difficult to achieve and maintain when building report applications. In addition, productivity and adoption by a broader range of report developers can be fostered by providing a pre-built report elements. Templates address these concerns and can range from skeletal outlines with predefined themes to complete reports.</p>
<p>Building a BIRT report template is very similar to building a standard BIRT report.  One notable difference is that items within the report can be converted to template report items, which allow the template creator to set up indications where template user input is required.</p>
<img src="/birt/phoenix/project/images/TemplateItem.jpg" width="768" height="576"/>
<img src="/birt/phoenix/project/images/TemplateItemDetail.jpg" width="595" height="210"/>
<p><i>Enter Prompts for Template Users.</i></p><br>
<p>A new Template Publishing wizard has also been added.  The location of the template directory is configurable.</p>

<img src="/birt/phoenix/project/images/TemplatePublish.jpg" width="768" height="576"/>
<p><i>Publish Wizard.</i></p><br>
<p>The Template wizard allows the designer to populate a display name, description and image file.  The template is now available to use.</p>
<img src="/birt/phoenix/project/images/TemplateUsage.jpg" width="768" height="576"/>
<p><i>Using a newly Created Template.</i></p><br>


<h1><a name="jump_7">Libraries</a></h1>

<p>BIRT 2.0 introduces the concept of libraries to BIRT.  With this feature, commonly used functions and report items can be encapsulated within a library.  These libraries can then be imported into any number of reports for reuse.  For example, a BIRT developer may wish to build a complex scripted data source and then encapsulate it within a BIRT library, freeing other members of the reporting team from implementing the same code.</p>
<img src="/birt/phoenix/project/images/lib3a.jpg" width="768" height="576"/>
<p><i>Building a library.</i></p><br>

<p>A new project item type is now available for library creation.  By dragging items from the palette to the Report Items node within the library Outline, the report developer can customize these components for reuse.  Data Sources and Sets, Report Parameters, Report Items, Themes, Master Pages and Images can be added to the library.</p>
<p>After the library is created, it can be shared with report developers, who can import the library into their own designs.</p>
<img src="/birt/phoenix/project/images/lib5a.jpg" width="768" height="576"/>
<p><i>Using a library.</i></p><br>
<p>The BIRT team has also added a new view to the BIRT perspective for browsing and importing the available libraries.  Existing libraries within the workspace automatically show up in the Library Explorer. (In this screenshot, the Explorer has been pinned to the left side with the Palette and Data Explorer.)</p>
<p>Using a library is as easy as importing it and then dragging the desired items to required report location.</p>
<p>Reports that reference libraries automatically update when executed.  This is very useful in cases where business or technical changes require report rework. For example, imagine that a database schema changes or the company logo is altered.  If these details are encapsulated in libraries, only the library would need to change and all referencing reports would be automatically updated to reflect the changes.</p>

<h1><a name="jump_8">XML ODA</a></h1>

<p>Building on the existing drivers that BIRT already supplies, BIRT 2.0 delivers an XML ODA for retrieving XML data.  The data can be streamed or reside within a file.  This driver uses XPath syntax for XML to relational data mapping.</p>
<img src="/birt/phoenix/project/images/xml2.jpg" width="800" height="522"/>
<p><i>Use XPath expression to map an XML node to a row.</i></p><br>
<img src="/birt/phoenix/project/images/xml3.jpg" width="800" height="522"/>
<p><i>Use XPath syntax to map node and attribute values to columns.</i></p><br>


<h1><a name="jump_9">URL Builder</a></h1>

<p>BIRT 2.0 offers a new URL Builder to quickly support summary to detail Drill-through linking as well as standard Bookmark and URL creation.</p>
<img src="/birt/phoenix/project/images/url3a.jpg" width="768" height="576"/>
<p><i>Define the URL.</i></p><br>

<img src="/birt/phoenix/project/images/url2a.jpg" width="768" height="576"/>
<p><i>Drill-through Illustration.</i></p><br>

<h1><a name="jump_10">Multi-pass Aggregate, Sorting and Filtering</a></h1>

<p>Several improvements have been added to support advanced aggregate, filtering and sorting of report data.  For example, computed columns can now use aggregate functions.</p>
<img src="/birt/phoenix/project/images/aggr1a.jpg" width="768" height="576"/>
<p><i>Computed column with aggregation.</i></p><br>
<p>In addition, the group dialog now supports adding multiple sorting and filtering expressions. </p>
<img src="/birt/phoenix/project/images/aggr2a.jpg" width="768" height="576"/>
<p><i>New Filtering and Sorting tabs.</i></p><br>


<h1><a name="jump_11">Improved Report Performance and PDF Fidelity</a></h1>

<p>BIRT 2.0 includes an enhanced data engine with the ability to process large data sets via a combination of memory and disk cache. The BIRT team has done tests that show that the engine can now handle reports of well over a million rows with linear response time and bounded memory usage.  BIRT has also incorporated the iText PDF library to improve PDF generation fidelity.</p>


<h1><a name="jump_12">Dynamic Parameters/Cascading Parameters</a></h1>

<p>Most applications, which require reporting, will have a need for culling or filtering the data that is used within the report.  This allows tailoring the report to a specific user without the need to highly customize the report design.  This is often done with report parameters that are used within the report logic and/or the SQL query.  The issue, then, becomes how to present and collect the parameter information from the consumer of the report.  BIRT 2.0 addresses this issue by adding sophisticated dynamic and cascading parameter support.</p>
<p>With the new Dynamic Parameter feature, the report designer can present the consumer a list of options for a parameter that is interactive and based on live content.</p>
<img src="/birt/phoenix/project/images/dynp1b.JPG" width="602" height="576"/>

<p>In the above example, a Dynamic Parameter is created that presents the report user with a list of Countries to choose from.  This is achieved, by allowing the report designer the ability to create a BIRT data set, which can then be used to dynamically populate a parameter list box.</p>
<img src="/birt/phoenix/project/images/dynp2b.JPG" width="603" height="564"/>
<p>In addition to Dynamic Parameters, it is often desirable to present the user a set of interlinked parameter choices.  For example, a user wishes to run a report that displays all of his/her employees that work in the Pasadena office.  You would not want to display a list of all possible employee cities.  Ideally a Country list would be displayed, and then possibly a State/Province, followed finally by a City list.  BIRT 2.0 accomplishes this by delivering a Cascading Parameter Feature.</p>
<img src="/birt/phoenix/project/images/dynp3a.JPG" width="605" height="631"/>
<p>The Cascaded parameter list provides nested selection. In the above example, the Customer’s Country is selected and this choice restricts the Customer’s City choices.  As with Dynamic Parameters, the choices are based on a BIRT Data Set.</p>
<img src="/birt/phoenix/project/images/dynp4a.JPG" width="603" height="609"/>


<h1><a name="jump_13">Expression Builder</a></h1>

<p>The Expression Builder has been replaced with an improved GUI, which presents a more streamlined and intuitive interface for building JavaScript expressions. The new Expression builder includes features like line numbers, cut and paste functionality, object browsing and tool tips.</p>
<img src="/birt/phoenix/project/images/express1.JPG" width="602" height="545"/>

<h1><a name="jump_14">Importing of Style Sheets</a></h1>

<p>While Style Sheets offer a wide range of formatting and design features, with earlier versions of BIRT, styles had to be defined individually within the report design.  To overcome this limitation, BIRT 2.0 delivers the capability to import Style Sheets into the report design, from an external source.</p>
<img src="/birt/phoenix/project/images/importcss.JPG" width="601" height="453"/>
<p>Using this feature, it is now easier to present a consistent look and feel across multiple report designs without having to create separate style instances for each. In addition, the feature makes it possible to easily coordinate report look and with web site look and feel, which can be particularly important when BIRT reports are included in extranets and web portals.</p>

<h1><a name="jump_15">Report XML Editor</a></h1>

<p>Expanding on the capabilities of the Report Designer, a new XML source editor tab is now available to the report designer.  The Source tab presents the entire report design in color-coded XML format, allowing direct modifications the XML design that are persisted immediately.</p>
<img src="/birt/phoenix/project/images/xmleditor.JPG" width="798" height="598"/>

<h1><a name="jump_16">Passing of External Object to Custom Data Sources</a></h1>

<p>Often the BIRT engine is embedded in or is part of an existing J2EE application.  The ODA layer, which is responsible for data access, occasionally needs access to objects in the Context of the encapsulating application.  This might include things like security credentials, connection handles, or parameter objects.  To accommodate this requirement, BIRT 2.0 has added a Context Object within the ODA layer, which can be passed in from the external application.  This object can take many forms and can be used for all of the items mentioned above.</p>

<h1><a name="jump_17">Stored Procedures</a></h1>

<p>BIRT now supports calling stored procedures.  Within the Data Set Editor, the stored procedures are now displayed and can be used to build complex Data Sets.</p>
<img src="/birt/phoenix/project/images/StoredProcs.JPG" width="603" height="547"/>
<p>In the above example, "OrdersByProducts" is being called to return a quantity of products sold, based on Product Name, which is passed as a parameter to the stored procedure. </p>

<h1><a name="jump_18">CLOB/BLOB  Support</a></h1>

<p>The Data Set data types have been expanded to include Character Large Object (CLOB) and Binary Large Object (BLOB) items.  In addition to adding support for these types within the ODA framework, these items can now be bound to certain controls within the designer.  CLOB columns can be bound to Text controls and BLOB columns can be bound to Image controls.</p>
<img src="/birt/phoenix/project/images/blobtype.JPG" width="603" height="457"/>
<p>In the example above, the logo image is stored as a BLOB type.  The Image Builder has been enhanced to allow the BLOB image to be retrieved from the database and inserted into an Image control.</p>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
