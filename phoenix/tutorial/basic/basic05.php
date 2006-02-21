<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Tutorial";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../birt.inc";
	require "basic.inc";
	$stepNumber				= 5;
	$linkToTop				= linkToTop();
	$tutorialLinksSideItem  = getTutorialLinksSideItem($stepNumber);
	$stepNavigator			= getTutorialStepNavigator($stepNumber);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#build">Build a Data Set</a></li>
				<li><a href="#pages">Data Set Editor Pages</a></li>
				<li><a href="#browser">Database Browser</a></li>
				<li><a href="#create_query">Create the Query</a></li>
				<li><a href="#test_query">Test the Query</a></li>
				<li><a href="#edit">Edit a Data Set</a></li>
			</ul>
		</blockquote>

		<h2><a name="build"></a>Build a Data Set</h2>
		<p>
			Now we're ready to build and test our data set.
		</p>
		<ul class="midlist">
			<li>
				Find or open the Data Explorer view.
			</li>
			<li>
				Select the Data Sets node in the tree view.
			</li>
			<li>
				Right-click to open the context menu. (We'll just say "open the context menu" or "choose x from the context menu" from now on.)
			</li>
			<li>
				Select New Data Set. The New Data Set dialog will appear.
			</li>
			<li>
				Enter "Customers" for the Data Set Name field.
			</li>
			<li>
				Ensure that the Data Source field shows the Sample data source created above.
			</li>
			<li>
				Ensure that the Data Set Type field shows "SQL Select Query".
			</li>
			<li>
				Click Finish.
			</li>
		</ul>


		<h2><a name="pages"></a>Data Set Editor Pages</h2>
		<p>
			The data set editor now opens. We'll use this to define our query. Before we do, let's take a look at the pages within this editor. The data set editor provides the following pages:
		</p>
		<ul class="midlist">
			<li>
				Query -
				Displays your SQL SELECT statement. This is where you create and change your
				SQL query. Once you have the basic query, you can  add a WHERE clause, adjust the set of selected columns, and
				more. Use the SQL editor to add computed columns that are to be calculated by
				the database engine. Give such columns a name using the SQL ALIAS clause.</td></tr>
			</li>
			<li>
				Data Source  -
				Displays the name of the data source for this data set so you can view or change it. 
			</li>
			<li>
				Preview Results -
				Lets you test your query and see the output. Very handy to make sure that the data is right before you proceed with report design.</td></tr>
			</li>
			<li>
				Computed Columns -
				Computed columns are calculated by BIRT and appear
				to the rest of the report just like any other column. You can use JavaScript
				expressions, and even call into Java for advanced business logic.</td></tr>
			</li>
			<li>
				Parameters -
				SQL SELECT statements can include input
				parameters that pass data into the query. They are marked using the SQL "?"
				symbol in the query. This page lets you give the parameters a name, a default
				value, and so on. There must be a one-to-one correspondence between entries
				on this page and the "?" symbols in your query.
			</li>
			<li>
				Filters -
				Additional filters that BIRT applies to your data. Filters restrict
				the data passed to the report. The WHERE clause
				is also a filter: one executed by the database. This tab lets you define additional
				filters using BIRT (JavaScript) scripting.
			</li>
			<li>
				Output Columns -
				Shows the columns within the query, and lets you define
				a column alias for use in the report. Note that this view shows the columns
				as the report will see them. The Query page shows the columns as selected from
				the database.
			</li>
			
		</ul>


		<h2><a name="browser"></a>Database Browser</h2>
		<p>
			Switch to the Query page if you're not already there. This page provides a simple database browser.
		</p>
		<ul class="midlist">
			<li>
				Expand the Sample data source to see the schemas within this database.
				There is only one: "CLASSICMODELS".
			</li>
			<li>
				Expand "CLASSICMODELS" to see the list of tables in the database.
			</li>
			<li>
				Expand a table to see its columns.
			</li>
			<li>
				Drag and drop a table or column to add its name to the SQL editor.
			</li>
		</ul>

		<hr class="clearer" />

		<h2><a name="create_query"></a>Create the Query</h2>
		<p>
			Our query is very simple, so we'll just type it in:
		</p>
		<p>
			<h3>Simple Query</h3>
			SELECT *<br>
			FROM CUSTOMERS<br>
			WHERE COUNTRY = 'USA'<br>
		</p>
		<br>



		<h2><a name="test_query"></a>Test the Query</h2>
		<p>
			With the data set editor open, do the following:
		</p>
		<ul class="midlist">
			<li>
				Click on the Preview Results item.
			</li>
		</ul>
		<p>
			The preview page appears. This page shows the columns selected in your query listed across the top. The actual rows in your query appear down the page.
		</p>
		<ul class="midlist">
			<li>
				Verify that the list of customers appears.
			</li>
			<li>
				Click OK to close the data set editor.
			</li>
		</ul>
		<p>
			If an error dialog appears, check the following:
		</p>
		<ul class="midlist">
			<li>
				Your Eclipse is installed in a directory without spaces.
			</li>
			<li>
				You have typed the SQL statement as shown above.
			</li>
			<li>
				You have not put a semi-colon at the end of your statement.
			</li>
		</ul>


		<h2><a name="edit"></a>Edit a Data Set</h2>
		<p>
			Your new data set appears in the Data Explorer along with your data source. We can use the data set editor to change the data set, and to test it to make sure it returns the correct data.
		</p>
		<ul class="midlist">
			<li>
				Find or open the Data Explorer.
			</li>
			<li>
				Open the Data Sets node.
			</li>
			<li>
				Double-click the Customers data set. The Data Set editor opens.
			</li>
		</ul>


		$stepNavigator
	</div>
	$tutorialLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
