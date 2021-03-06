<?php  				

Header("Location: /birt/documentation/sample-database.php");																										require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Sample Database";
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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PW8LFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#schema">Schema</a></li>
				<li><a href="#install">Install</a></li>
				<li><a href="#usage">Usage</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			The BIRT sample database provides a simple set of tables and data that form
			the basis for BIRT sample reports. The schema is for Classic Models, a retailer
			of scale models of classic cars. The database contains typical business data
			such as customers, orders, order line items, products and so on. It was designed
			to illustrate many of the features of the BIRT report designer.
		</p>

		<p>
			The sample database is open source; you are free to use it for your own use
			to experiment with other tools; to create samples for other tools, etc. The
			sample database is provided under the terms Eclipse.org
			<a href="http://www.eclipse.org/legal/notice.html">Software User Agreement</a>.
		</p>


		<h2><a name="schema">Schema</a></h2>
		<p>
			The database consists of eight tables:
		</p>
		<ul class="midlist">
			<li>
				Offices: sales offices
			</li>
			<li>
				Employees: All employees, including sales reps who work with customers.
			</li>
			<li>
				Customers
			</li>
			<li>
				Orders: Orders placed by customers
			</li>
			<li>
				Order Details: Line items within an order.
			</li>
			<li>
				Payments: Payments made by customers against their account
			</li>
			<li>
				Products: The list of scale model cars
			</li>
			<li>
				Product Lines: The list of product line classifcation
			</li>
		</ul>
		<p>
			This <a href="/birt/phoenix/db/dbschema/ClassicModelsDBSchema.jpg" target="_new">ER-diagram</a> shows the
			table structure and relationships.
			(<a href="/birt/phoenix/db/dbschema/ClassicModelsDBSchema.pdf" target="_new">PDF version</a>)
		</p>


		<h2><a name="install"></a>Install</h2>
		<p>
			The sample database is available in two forms:
		</p>
		<ul class="midlist">
			<li>
				Apache Derby database, which is included in the BIRT download
			</li>
			<li>
				<a href="#mysql">Scripts to load a MySQL database</a>
			</li>
		</ul>
		<p>
			The scripts to load a MySQL database are contained in the <a href="mysqlscr/birt-database-2_0_1.zip">sample database</a> zip file.  This zip also has documentation
			and logos for the sample database.
		</p>
		<h3><a name="mysql"></a>MySQL Version</h3>
		<p>
			To install the MySQL version of the sample database, you must have MySQL
			installed. See <a href="http://www.mysql.com">mysql.com</a> for instructions.
		</p>

			Install the MySQL JDBC driver into BIRT:
		</p>
		<ul class="midlist">
			<li>
				Download and unzip MySQL Connector/J 3.1 JDBC driver located at:
  				<a href="http://dev.mysql.com/downloads/">http://dev.mysql.com/downloads/</a>
			</li>
			<li>
				Install the JDBC driver using the instructions on the
				<a href="/birt/phoenix/build">install page</a>.
				Enter the following for the URL template:
				<blockquote>
					jdbc:mysql://[host][,failoverhost...][:port]/[database]?
				</blockquote>
			</li>
		</ul>
		<p>
			You are now ready to create the Classic Models database:
		</p>
		<ul class="midlist">
			<li>
				<a href="mysqlscr/birt-database-2_0_1.zip">Download the zip file</a> containing the MySQL database scripts.
			</li>
			<li>
				Expand the zip file into a convenient location.
			</li>
			<li>
				Expanding the zip file created the ClassicModels/mysql directory with some MySQL scripts. From the command line, move to the this directory:
								
				<blockquote>
					% cd <location of the zip file contents>/ClassicModels/mysql
				</blockquote>
			</li>
			<li>
				Start the mysql utility, giving the name (and password, if needed) of a user permission to create databases. For example, to use the default root user:
				<blockquote>
					% mysql --user=root
				</blockquote>
			</li>
			<li>
				Create the ClassicModels database and load the schema. (Loading the schema the schema the first time will give error messages as it attemps to empty any existing tables, just ignore these.)
				<blockquote>
					mysql> create database ClassicModels;
					mysql> use ClassicModels;
					mysql> source create_classicmodels.sql;
				</blockquote>
			</li>
			<li>
				Load the table contents:
				<blockquote>
					mysql> source load_classicmodels.sql;
				</blockquote>
			</li>
			<li>
				Exit from mysql:
				<blockquote>
					mysql> quit;
				</blockquote>
			</li>
		</ul>
		<h3>Localized Version of the Sample Database</h3>
		<p>
			Following is the Derby Database localized into French, German, Spanish, Japanese, Korean, and Simplified Chinese.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/db/localizeddb/Localized_Derby_Sample_DB.zip">Localized Derby Sample Database</a>
			</li>
		</ul>


		<h2><a name="usage"></a>Usage</h2>
		<p>
			You can now use the sample database within BIRT to create reports. The key information you need to get started is how to create a data source for the database. The details vary depending on the database system you selected.
		</p>
		<h3>Apache Derby</h3>
		<p>
			The Apache Derby version of the database is included in the BIRT download as a built-in data source. To access it, simply select the "Classic Models Inc. Sample Database" entry in the new data source dialog.
		</p>
		<h3>MySQL</h3>
		<p>
			Data source properties for the MySQL sample database:
			<table class="simple-table">
				<tbody>
					<tr>
						<td>
							Driver Class:
						</td>
						<td>
							com.mysql.jdbc.Driver
						</td>
					</tr>
					<tr>
						<td>
							URL:</td>
						<td>
							jdbc:mysql://localhost/classicmodels
						</td>
					</tr>
					<tr>
						<td>
							User Name:
						</td>
						<td>
							root
						</td>
					</tr>
					<tr>
						<td>
							Password:
						</td>
						<td>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>
		</p>


	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
