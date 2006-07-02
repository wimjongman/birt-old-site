<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.1";
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
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">Charting Improvements</a></li>
				<li><a href="#jump_3">Improved Drill Through Support</a></li>
				<li><a href="#jump_4">Connection Pooling</a></li>
				<li><a href="#jump_5">Multiple Master Pages</a></li>
				<li><a href="#jump_6">Enhanced Cascaded Parameters</a></li>
				<li><a href="#jump_7">Joined Data Set</a></li>
				<li><a href="#jump_8">Internationalization and Accessibility</a></li>
				<li><a href="#jump_9">Binding Editor</a></li>
				<li><a href="#jump_10">Page Breaks</a></li>
				<li><a href="#jump_11">Miscellaneous</a></li>
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Callisto release, the BIRT team is pleased to announce the availability of BIRT 2.1.  The features in this release expand on the already impressive features of BIRT 2.0 and offer improvements in many areas such as context-sensitive help, Charting, Data Set creation, parameterization, Library creation and Template development.   Below is a description of some of the key features that are now available. 
</p>
<p>
The complete list of features for the final 2.1 release is available <a href="http://www.eclipse.org/birt/phoenix/project/Project_plan_R2_1.php">here</a>.
</p>


<h1><a name="jump_2">Charting Improvements</a></h1>

<p>BIRT 2.1 introduces many charting improvements.  Some of the more notable include a new Bar Stick subtype for Stock Charts, legend auto wrapping, improved interactivity and scripting, marker lines, enhanced axis scaling, legend text rotation, additional y axis support, added data point markers, and percentage pie charts.  Rendering of Pie, Area and 3D charts has also been improved and a new PDF Device renderer is available to the charting engine.
</p>

<img src="/birt/phoenix/project/images/2.1/chartingfinals.PNG" width="942" height="675"/>
<br>
<i>
Example Charts
</i>
<p>
The BIRT 2.1 Chart Builder features accessibility support, sticky dialogs and online help.
</p>

<h1><a name="jump_3">Improved Drill Through Support</a></h1>

<p>
BIRT provides a Hyperlink Editor, for the creation of links to other BIRT reports, external content, and bookmarks within the same report.  This editor has been improved to support features such as hyper linking to a report table of contents entry, discovering of required parameters and drilling to a report document.  These features can speed the development of reports intended for drill through applications.  For example if a detail report is created and that report is then grouped, another report can use the Hyperlink Editor to link to the TOC of the detail report.  This operation requires the developer to specify the target report and select the target TOC radial within the Hyperlink Editor.  No additional work is required.  
</p>
<img src="/birt/phoenix/project/images/2.1/drillthru1s.PNG" width="524" height="703"/>
<br>
<i>
Hyperlink Editor
</i>
<br><br><br>

<img src="/birt/phoenix/project/images/2.1/drillthru2s.PNG" width="800" height="600"/>
<br>
<i>
Drill Through Example
</i>
<p>
Specifying a report document as the target for a hyperlink can be useful in cases where the detail report is quite large or the data changes infrequently.  When the master report link is selected the detail report will not re-execute, but will use the report data that was retrieved during the last run of the detail report.
</p>




<h1><a name="jump_4">Connection Pooling</a></h1>
<p>
When deploying data centric applications to the Web tier it is often desirable to share pooled data base connections for performance and resource management reasons. BIRT 2.1 has expanded on the capabilities of the JDBC Data Source, by adding the option to specify a JNDI Name to look up a data source name service   for retrieving a pooled connection.  
</p>
<img src="/birt/phoenix/project/images/2.1/jndi.JPG" width="556" height="407"/>
<br>
<i>
JDBC Data Source Editor
</i>
<p>
The JNDI URL property can also be modified using BIRT property binding.  This would allow changing the JNDI URL based on parameters, session attributes or other script values, at runtime.  The enhanced JDBC Data Source also supports using a jndi.properties file for configuring the initial context environment.  By default this file will be read from the drivers directory within the JDBC plug-in.
</p>

<h1><a name="jump_5">Multiple Master Pages</a></h1>

<p>
Some reports need to alternate page layout properties, such as orientation, within a given design.  BIRT 2.1 now offers support for this feature, by adding a master page property for report elements.  The report designer has been enhanced to allow multiple master pages within the design.   When a page break occurs before an element, this property is checked and if needed the master page is changed.  Data Binding within the master pages is now possible as well.
</p>

<img src="/birt/phoenix/project/images/2.1/multiplemasterpages1.JPG" width="900" height="517"/>
<br>
<i>
Design View for Master Page Configuration
</i>
<br><br><br>
<img src="/birt/phoenix/project/images/2.1/multiplemasterpages2.PNG" width="820" height="615"/>
<br>
<i>
PDF Output of Multiple Master Pages
</i>


<h1><a name="jump_6">Enhanced Cascaded Parameters</a></h1>

<p>
Data filtering and report customization is often achieved with parameters.  How parameters are presented and collected is usually of paramount importance to the application developer.
</p>
<p>
BIRT currently has a very flexible parameter collection model, where the report designer can define very simple or complex parameters. One of the more sophisticated methodologies is to use is cascaded parameters.  With this approach, a group of parameters are defined in such a way that the each parameter choice affects the next parameter within the group.  This usually means the available selection list is reduced or changed for the subsequent parameter based on the prior parameter selection.  For example, if a report is written that is presenting geographic sales data, a user of this report may only want a particular region for a given country.  This can be achieved by creating a cascaded parameter group containing two parameters, country and region.  When presented to the end user, the country selection list would display all countries.  After selecting the desired country, the second parameter list for region would then be repopulated with only the regions for the desired country. 
</p>
<p>
In prior versions of BIRT, the above example required that a developer add a Data Set that queried the Data Source for country and region within one operation. This is no longer the case.  Cascaded parameters now support multiple Data Sets.  This allows the report designer to define at each subsequent level of the cascade an entirely new query, possibly even from a different Data Source.  The nested query can then use the prior parameters within its query to cull the result set.
</p>
<p>
Illustrated below is an example of a cascaded parameter that presents products by lines.  This cascade has two parameters.  This first is “ProductLines”, which queries the Data Source for all product lines.  The second is “Product”, which queries the Data Source for products and is culled based on the product line selection.
</p>
<img src="/birt/phoenix/project/images/2.1/multidatasetcascaded.JPG" width="863" height="696"/>
<br>
<i>
Design and Display of a Multiple Data Set Cascaded Parameter
</i>

<h1><a name="jump_7">Joined Data Set</a></h1>

<p>
Data Sets are one of the fundamental BIRT elements for retrieving data.  Data Sets contain tabular data, fetched from Data Sources, which can be used within the BIRT data container elements such as Tables and List. These BIRT elements are only bound to one Data Set.  If the report developer wishes to display data from multiple Data Sources within a given Table this becomes complex.  To address this issue, BIRT 2.1 now provides the ability to create a special Joined Data Set.  The Joined Data Set allows combining of two existing Data Sets using Inner and Outer Joins.  The new Joined Data Set also supports filtering and computed columns.  
</p>
<img src="/birt/phoenix/project/images/2.1/joineddataset1.JPG" width="770" height="585"/>
<br>
<i>
Joined Data Set Editor
</i>
<p>
After the Joined Data Set is created, it functions as any other Data Set in the design.  This feature is especially useful when combining data from multiple Data Sources.  For example, incorporating financial data from one Data Source with HR data from an entirely different Data Source.  Joined Data Sets can also be further joined with additional Data Sets.
</p>
<img src="/birt/phoenix/project/images/2.1/joineddataset2.JPG" width="335" height="257"/>


<h1><a name="jump_8">Internationalization and Accessibility</a></h1>

<p>
BIRT 2.1 supplies language packs for easy translation.  Currently twenty-two languages are available.
</p>
<p>
All of the BIRT offerings have been improved in the area of accessibility.  These include proper HTML formatting, shortcut keys, keyboard access to most functions and proper tagging of images and charts.
</p>


<h1><a name="jump_9">Binding Editor</a></h1>

<p>
BIRT 2.1 features a new Binding Editor, which allows more control over how data is bound to a container element, such as a Table.  BIRT data container elements are no longer bound directly to a Data Set but are now bound to an intermediate layer.  This intermediate layer can comprise data from a Data Set as well as computed columns.  This design approach makes a much clearer delineation between BIRT Tables and Data Sets and offers clearer scooping while using the Expression Builder. 
</p>
<p>
If a report is structured to display Orders, Order Details, and Products as nested Tables, in that order, linking these tables using just the Expression Builder can be tedious.  Pictured below is the Binding Editor for the Order Details in the example above.  The Status column of the Orders table is made available to this Table using the Binding Editor.
</p>
<img src="/birt/phoenix/project/images/2.1/bindingeditor1.JPG" width="590" height="375"/>
<br>
<i>
Binding Editor
</i>
<p>
Using the Expression Builder it is now clear what data is available to the selected container.  In the example below, a column has been added to the Products Table using the Binding Editor.  The Expression Builder shows that this column has access to three Tables: Products, OrderDetails, and Orders.  This reflects that the Tables are nested.
</p>
<img src="/birt/phoenix/project/images/2.1/bindingeditor2.JPG" width="695" height="531"/>
<br>
<i>
Expression Builder
</i>


<h1><a name="jump_10">Page Breaks</a></h1>
<p>
Within the Group Editor it is now possible to set page breaks before and after a group.  For every group change a new page can be added.  This feature supports suppressing the first and last page break.  An option has also been included in BIRT 2.1 to allow the group header to be repeated when the page change occurs.
</p>
<img src="/birt/phoenix/project/images/2.1/paging.JPG" width="589" height="684"/>
<br>
<i>
Group Editor
</i>

<h1><a name="jump_11">Miscellaneous</a></h1>
<p>
Many additional features and improvements have been made in BIRT 2.1.  
</p>
<p>
In the area of Data Sets and Data Sources, connection profiles are supported, Scripted Data Sets can now use parameters, Data Set Parameters can set Report Parameters as default values, and the Designer caches the Data Set metadata to allow disconnected report design.
</p>
<p>
A resource path is referenced for libraries and images, which aids in deploying reports to different environments.
</p>
<p>
The BIRT 2.1 Viewer provides a control for Printing of reports.
</p>


</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
