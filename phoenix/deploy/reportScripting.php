<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Report Scripting";
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
	require "deploy.inc";
	$currentPage			= "Report Engine API";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	<div align=LEFT style="padding-left: 185px">
	$deployLinksSideItem


		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#background">Background</a></li>
				<li><a href="#events">Events</a></li>
				<li><a href="#context">reportContext and this</a></li>
				<li><a href="#eventsreportelement">Report Level Events</a></li>
				<li><a href="#reportitemexamples">Report Elements Events</a></li>
				<li><a href="#reportitemexamples">Report Element Event Examples</a></li>
				<li><a href="#datasource">Report Data Source(Set) Events</a></li>

			</ul>
		</blockquote>




<h2><a name="background">Background</a></h2>

<p>
BIRT provides a rich scripting model based on the Mozilla Rhino engine.  The processes that the 
Report engine uses to create reports can be classified in two phases, Report Generation and Presentation.
The Generation phase consumes the report design and creates an intermediate file, called the report document.
The Presentation phase uses the report document to render to HTML or PDF.  The report creation pipeline can execute
these phases as one task or in two task.  If executed in one phase the report document is created in memory.  This
is the default behavior of the designer when "Preview as HTML" is chosen.  If executed in two phases the report document
is created and stored to disk.  This is the default behavior of the designer when "Preview in Web Viewer" is selected.
</p>
<p>
Events within each phase can be overridden to alter report content.  BIRT allows these events to be overridden in either JavaScript or Java.
This page illustrates scripting in JavaScript.  If you wish to script in Java, go here.  If you code your event in both Java and JavaScript the
JavaScript version will be executed by default.
</p>


<img src="overview.jpg" width="766" height="375" /><br/><br/>

<h2><a name="events">Events</a></h2>
<p>
Script events are defined for three objects, Report Object, Report Elements, and Data Source(Sets).  The phase the engine is processing determines 
what events and which properties of the object are available for customization. The diagram below illustrates what Script Events are available in a 
particular phase, for a given object.
</p>
<img src="events.jpg" width="728" height="444" /><br/><br/>

<h2><a name="context">reportContext and this</a></h2>
<p>
Selecting the Palette view while in the Script editor will display functions and variables that are available in the
given event for the selected report element.  For example the screenshot below is for the onCreate method of a Data element.
</p>
<img src="palette.jpg" width="266" height="476" /><br/><br/>
<p>
Using the <b><font color="purple">this</font></b> operator list available methods and properties for the given element in the
given event and is used to view or alter styles, values etc.  See examples illustrated later.
</p>
<p>
Use of reportContext allows accessing or modifying of report wide properties.
Using reportContext a developer can set global variables to share between elements.  For example:
<pre style="font-size: 10pt">
onInitialize of the report
reportContext.setPersistentGlobalVariable("testglobal", "test global string");
</pre>

use of the Persistent version allows the variable to be persisted across generation and presentation.
Also note that the variable is an Object type allowing greater flexibility.

<pre style="font-size: 10pt">
onPrepare of a data control in a table
this.valueExpr = "reportContext.getPersistentGlobalVariable('testglobal');"
</pre>
The reportContext also allows access to session variables.
<pre style="font-size: 10pt">
//attributeBean is a Birt Viewer supplied session variable
myAttributeBean = reportContext.getHttpServletRequest().getAttribute('attributeBean');
reportDoc = myAttributeBean.getReportDocumentName( );
this.valueExpr = "reportDoc";
</pre>
The reportContext allows reading and modifying the context for use within scripts.  For example:
<pre style="font-size: 10pt">
onInitialize of the report
appContext = reportContext.getAppContext();
importPackage(Packages.java.util)
myArrList = new ArrayList();
myArrList.add("one");
myArrList.add("two");
appContext.put("AppContextTest", myArrList);
</pre>
This loads the current application context and modifies it for later use.
On a data element's onPrepare event, it could then be used as follows:

<pre style="font-size: 10pt">
appContext = reportContext.getAppContext();
myObject = appContext.get("AppContextTest");
this.valueExpr = "myObject.size()";
</pre>

The above example could have also been implemented using:

<pre style="font-size: 10pt">
reportContext.setPersistentGlobalVariable("testglobal", myArrList);
</pre>

Using Global variables and application context can be very useful when adding your own Java objects to the script context.  This method alleviates the need to use the Report Engine API.
Combining this approach with report templates offers a nice reusable
solution.
<br>
The reportContext can be used to retrieve the current Locale and messages stored within a resource file.
</p>
<h2><a name="eventsreportelement"></a>Report Level Events</h2>
<ul class="midlist">
<li>afterFactory 
The afterFactory event executes upon terminating the generation phase. 
<li>afterRender 
The afterRender event executes at the end of the presentation phase. 
<li>beforeFactory 
The beforeFactory event executes prior to beginning the generation phase.  
<li>beforeRender 
The beforeRender event executes just prior to beginning the presentation phase.  
<li>initialize 
A script that executes before the report begins to execute in both the generation or presentation phase.
</ul>
<p>
Within the initialize event you can define global functions, variables and objects.
For example to create a global JavaScript function:

<pre style="font-size: 10pt">
function gTest(v)
{
       return "Global Function:" + v;
}
//this line is only required if using the function within Chart Scripts
reportContext.setPersistentGlobalVariable("gTest", gTest);
</pre>
To use this function just call 
<pre style="font-size: 10pt">
gTest("MyTest");
or
gTest = reportContext.getPersistentGlobalVariable("gTest");
val = gTest("Use Persistent");
</pre>
In the beforeFactory event there are several methods that allow accessing elements within the report.
The elements usually require a name.  For example, using a Data Set named "orders", I want to display the
query that was executed in a Dynamic Text field named "TestHeader".  This can be achieved by entering the following
script in beforeFactory
<pre style="font-size: 10pt">
query = this.getDataSet("orders").queryText
this.getDynamicText("TestHeader").valueExpr = "query;";
</pre>
</p>


<h2><a name="eventsreportelement"></a>Report Element Events</h2>
<p>
<ul class="midlist">
<li>onPrepare:
This event gets called in the report generation phase. It is called once for each report element in the design.
This is an opportunity to change the element design. The changes will affect all instances of the element, i.e. all table rows.
<li>onCreate:
Also a generation phase event. Here, the instance of the element can be modified and accessed. For example, an instance of a table row might be changed (setting every 10th rows background to red for example). 
Here you also have access to available data (for a data item, cell or row element).
<li>onRender:
Presentation phase event. Similar to onCreate in that the instance is modifiable. Access to data is not available.
</ul>
</p>
<p>
Here are is a very simple scripting example:

For a detail row in a table:
<pre style="font-size: 10pt">
onPrepare;
this.getStyle().backgroundColor = "red";//This would change all row instances

onCreate:
if (this.rowData.getExpressionValue(3) > 100)
this.getStyle().backgroundColor="red";//This will only change the row instance

For a table with 100 rows, onPrepare will be called once (to change the 
design), and onCreate and onRender will be called 100 times (to change the 
instance).
</pre>
</p>

<h2><a name="reportitemexamples"></a>Report Element Event Examples</h2>

<h4>Setting Label, Text, Dynamic Text and Data Item values</h4>
<p>
Setting the value of a Label item can be achieved by overriding the onPrepare or onCreate event and entering similar code presented below:
<pre style="font-size: 10pt">
this.text = "My New Label"
</pre>
Obviously this is a simple example and the value could be set simply by double clicking on the Text item.  Using the JavaScript editor allows
complex logic can be implemented.<br>
Setting the value of a Text item can be done in the onPrepare event by entering the following code:

<pre style="font-size: 10pt">
this.content= = "My New Text"
</pre>

When setting the value of a Data or Dynamic Text item you will need to specify a value expression.  This
value expression gets evaluated when generating the report.
For either of these controls overriding the onPrepare event allows changing the value expression.
<pre style="font-size: 10pt">
this.valueExpr = "row[0]";
</pre>
It is important to note that valueExpr expects a string.  This is similar to what you would enter in the Expression Builder, but wrapped in quotes.
So if you want to enter a string or partial string use single quotes.

<pre style="font-size: 10pt">
this.valueExpr = this.valueExpr = "'my row count: ' + (row[0] + 1)";
</pre>

<h4>Setting TOC Entries in Script</h4>
The TOC expression is similar to value expressions in that it expects a string.
  
<pre style="font-size: 10pt">
this.tocExpression=this.tocExpression = "'tocbyrownumber: ' + row[0]";
</pre>

<h4>Using row data within scripts</h4>

Row Data is available on the row event's onCreate event.
This allows you to examine the values that will be used on the current row
of a Table or List.  

<pre style="font-size: 10pt">
this.getRowData().getExpressionValue(int) 
</pre>

should give you the value of the expression 
in the i:th column in your table.
<br>
<pre style="font-size: 10pt">
this.getRowData().getExpressionValue("some_expression") 
</pre>

should give you the value of 
the provided expression for the row.  This expression has to be defined on the table.
<br>


Examples:
<pre style="font-size: 10pt">

Table(2 columns):
row["product"]    |    row["price"]

Result:

product1    |    $20
product2    |    $30

Script on row.onCreate:
if (this.rowData.getExpressionValue(1) == "product1")
    this.getStyle().backgroundColor = "red";

if (this.rowData.getExpressionValue("row[price]") == "$20")
    this.getStyle().backgroundColor = "blue";

Result of script:

First row should be red, second row should be blue.

Remember that the the expressions are the one defined on the table, not the 
dataset. So if a table has the following expression: row["price"]/100, the 
following if ok:
the.getRowData().getExpressionValue("row[price]/100")
but this is not:
this.getRowData().getExpressionValue("row[price]")
</pre>

<h4>Modifying Hyperlinks</h4>
The hyperlink for a data control can be modified in the onPrepare by using code similar to:

<pre style="font-size: 10pt">
this.getAction().URI = "'http://www.google.com'";
</pre>
Notice the single quotes within the double quotes.

<h4>Using getStyle</h4>
<p>
Using the getStyle method allows customizing properties for a
given element.
</p>
<p>
<img src="getStyle.jpg" width="483" height="221" /><br/><br/>
</p>
<p>
for example to bold a particular control:
</p>
<pre style="font-size: 10pt">
this.getStyle().fontWeight = "bold";
</pre>

<h4>Using getParent</h4>
The getParent method allows access  to elements that contain the element you are currently working with.
If you were scripting an onPrepare event for a table row, getParent would return a handle to the table.
If you were scripting an onPrepare event for a data control, to access the table you will need to call getParent several times.

<pre style="font-size: 10pt">
this.getParent().getParent().getParent()
This corresponds to 
dataElement->Cell->Row->Table
</pre>
So to change the color of the table background from a data element would look like this:
<pre style="font-size: 10pt">
this.getParent().getParent().getParent().getStyle().backgroundColor = "Silver";
</pre>

<h4>Using getValue</h4>
<p>
Often it is required to alter the visual appearance of an item based on its value.  This can be usually done within the mapping or highlights tab.
When more complex logic is required it can be accomplished by using the getValue method within the onCreate of a row or data element.

On the data element
<pre style="font-size: 10pt">
if( this.getValue() > 30 ){
	this.getStyle().fontFamily = "Arial"
	this.getStyle().backgroundColor = "Yellow"
}

on the row
if (this.getRowData().getExpressionValue("row[QtyOrdered]") > 30){
	this.getStyle().fontFamily = "Arial"
	this.getStyle().backgroundColor = "Yellow"
}
</pre>
<h4>Using Named Expressions</h4>
<p>
A named expression is an expression that is created on an element and given a name.
The expression definition can be edited in onPrepare, and the value of the evaluated expression can be accessed in onCreate and onRender events.
These are often useful when scripting in Java and use of a function like Total is needed.
For example a named expression my be defined as totalCreditValue and it's value set to Total.sum(row[“CREDITLIMIT”]).  The named expression would then
be available to other elements in JavaScript as well as Java.
<br>
So if you define a Named Expression on a table named 'RWC' and set it's value to row[0], you would access it on the
row like:
<pre style="font-size: 10pt">
rc = this.parent.getNamedExpressionValue("RWC");
</pre>

</p>





<h2><a name="datasource"></a>Report Data Source(Set) Events</h2>
<p>The events available with Data Source and Data Sets will depend on the type of source that is being used.

<h4>Data Source Events</h4>
The common events for the Data Source are:
<ul class="midlist">
<li>afterClose 
A script that executes after BIRT closes the data source connection. 
<li>afterOpen 
A script that executes after BIRT opens the data source connection for data access. 
<li>beforeClose 
A script that executes before BIRT closes the data source connection. 
<li>beforeOpen 
A script that executes before BIRT opens the data source connection for data access. 
</ul>
If you are building a Scripted Data Source, two additional events are available:
<ul class="midlist">
<li>Open
A script that executes to open the Data Source.
<li>Close
A script that executes to close the Data Source.
</ul>
With the property binding editor now available, setting properties using script is not always necessary.
An example of setting the password for the Data Source is as follows:

<pre style="font-size: 10pt">
Data Source beforeOpen 
currentPassword = this.getExtensionProperty("odaPassword");
DataSourceClass = new Packages.myExternalSecurity();
this.setExtensionProperty("odaPassword", DataSourceClass.getPassword());
</pre>

<h4>Data Set Events</h4>
The common events for the Data Sets are:
<ul class="midlist">
<li>afterClose 
A script that executes after BIRT closes the data set.
<li>afterOpen 
A script that executes after BIRT opens the data set.
<li>beforeClose 
A script that executes before BIRT closes the data set.
<li>beforeOpen 
A script that executes before BIRT opens the data set.
<li>onFetch 
A script that executes after fetching each row and before applying filters or calculating computed fields 
</ul>
If you are building a Scripted Data Source, four additional events are available:
<ul class="midlist">
<li>describe
A script that is used to create the columns of a Scripted Data Source dynamically. 
<li>open 
A script that executes upon opening the data set. 
<li>close 
A script that executes after the fetch event returns false. 
<li>fetch 
A script that executes to retrieve the data. 
</ul>

With the property binding editor now available, setting Data Set properties can usually be done in the properites editor.<br>
An example of changing the query with JavaScript is presented below.

<pre style="font-size: 10pt">
beforeOpen of the Data Set
this.queryText = "SELECT * FROM Customers where CustomerID IN (" + params["customersInClause"] +")";
</pre>

When implementing a Scripted Data Set, use the open event to initialize variables, classes etc.
Use the Fetch event to load your row data.  Remember to return false when your data set is finished.
Use close to close any external objects.
</p>
<p>
To illustrate a Scripted Data Set, assume that you have an external Java Object that returns an ArrayList.
To use this with the scripted data set do the following.
</p>
<pre style="font-size: 10pt">
open event of the Data Set
importPackage(Packages.test.my.ds)
myDataSet = new DS();
myArrayList = myDataSet.getList();
myIter = myArrayList.iterator();


fetch event of the Data Set
if( !myIter.hasNext() ){
	return false;
}
//myOnlyColumn must be manually defined or defined in the describe event
row["myOnlyColumn"] = iter.next();
return true;
</pre>













</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
