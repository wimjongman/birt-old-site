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

    $Nav->addCustomNav("Introduction", "/birt/intro", "_self", 1);
	$Nav->addCustomNav("Download", 			"http://download.eclipse.org/birt/downloads", 	"_self", 	1);
	$Nav->addCustomNav("Install", 			"/birt/build/", 	"_self", 							1);
	$Nav->addCustomNav("Tutorial", 			"/birt/tutorial", 	"_self", 									1);
	$Nav->addCustomNav("Sample Database", 		"/birt/db", 	"_self", 										1);
	$Nav->addCustomNav("Examples", 			"/birt/examples", 	"_self", 									1);
	$Nav->addCustomNav("Integration", 		"/birt/deploy", 	"_self", 										1);
	$Nav->addCustomNav("FAQ", 			"/wiki/index.php?n=FAQ.FAQ", 	"_self", 						1);
	$Nav->addCustomNav("Community", 		"/birt/community", 	"_self", 								1);
	$Nav->addCustomNav("Reference", 		"/birt/ref", 	"_self", 											1);
	$Nav->addCustomNav("Project Organization", 	"/birt/project", 	"_self", 									1);
	$Nav->addCustomNav("Project Development Plan", 	"/birt/project/plan.php", 	"_self", 	1);
	$Nav->addCustomNav("Building BIRT", 		"/birt/build", 	"_self", 									1);
	$Nav->addCustomNav("Search", 			"/birt/search.html", 	"_self", 									1);

?>
