<?php

	# set default theme
	$_theme = "";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	$Nav->setLinkList( array() );
    $Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=birt", "_self", 1);
    $Nav->addNavSeparator("BIRT Home", "http://www.eclipse.org/birt/phoenix", "_self");
    $Nav->addCustomNav("Introduction", "/birt/phoenix/intro", "_self", 1);
	$Nav->addCustomNav("Download", 			"http://download.eclipse.org/birt/downloads", 	"_self", 	1);
	$Nav->addCustomNav("Install", 			"/birt/phoenix/build/", 	"_self", 							1);
	$Nav->addCustomNav("Tutorial", 			"/birt/phoenix/tutorial", 	"_self", 									1);
	$Nav->addCustomNav("Sample Database", 		"/birt/phoenix/db", 	"_self", 										1);
	$Nav->addCustomNav("Examples", 			"/birt/phoenix/examples", 	"_self", 									1);
	$Nav->addCustomNav("Integration", 		"/birt/phoenix/deploy", 	"_self", 										1);
	$Nav->addCustomNav("FAQ/Wiki", 			"http://wiki.eclipse.org/index.php/BIRT_Project", 	"_self", 						1);
	$Nav->addCustomNav("Report a Bug", 			"/birt/phoenix/reportabug.php", 	"_self", 						1);
	$Nav->addCustomNav("Community", 		"/birt/phoenix/community.php", 	"_self", 								1);
	$Nav->addCustomNav("Reference", 		"/birt/phoenix/ref", 	"_self", 											1);
	$Nav->addCustomNav("Project Organization", 	"/birt/phoenix/project", 	"_self", 									1);
	$Nav->addCustomNav("Project Development Plan", 	"/birt/phoenix/project/plan.php", 	"_self", 	1);
	$Nav->addCustomNav("Building BIRT", 		"/birt/phoenix/build/buildInstructions.php", 	"_self", 									1);
	#$Nav->addCustomNav("Search", 			"/birt/search.html", 	"_self", 									1);

?>
