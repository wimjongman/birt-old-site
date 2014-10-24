<?php

	# set default theme
	$_theme = "solstice";
	$theme = "solstice";
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
    #$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=birt", "_self", 1);	
    $Nav->addNavSeparator("BIRT Home", "http://www.eclipse.org/birt/", "_self");
	$Nav->addCustomNav("About", "http://www.eclipse.org/birt/about/", "_self", 1);
	$Nav->addCustomNav("Getting Started", "http://www.eclipse.org/birt/getting-started/", "_self", 1);
	$Nav->addCustomNav("Download", "http://download.eclipse.org/birt/downloads/", "_self", 1);
	$Nav->addCustomNav("Demos", "http://www.eclipse.org/birt/demos/", "_self", 1);
	$Nav->addCustomNav("Documentation", "http://www.eclipse.org/birt/documentation/", "_self", 1);
	$Nav->addCustomNav("Community", "http://www.eclipse.org/birt/community/", "_self", 1);
	$Nav->addCustomNav("Built with BIRT", "http://www.eclipse.org/birt/built-with-birt", "_self", 1);
    #$Nav->addCustomNav("Introduction", "http://www.eclipse.org/birt/phoenix/intro", "_self", 1);
	#$Nav->addCustomNav("Download", 			"http://download.eclipse.org/birt/downloads", 	"_self", 	1);
	#$Nav->addCustomNav("Install", 			"http://www.eclipse.org/birt/phoenix/build/", 	"_self", 							1);
	#$Nav->addCustomNav("Tutorial", 			"http://www.eclipse.org/birt/phoenix/tutorial", 	"_self", 									1);
	#$Nav->addCustomNav("Sample Database", 		"http://www.eclipse.org/birt/phoenix/db", 	"_self", 										1);
	#$Nav->addCustomNav("Examples", 			"http://www.eclipse.org/birt/phoenix/examples", 	"_self", 									1);
	#$Nav->addCustomNav("Integration", 		"http://www.eclipse.org/birt/phoenix/deploy", 	"_self", 										1);
	#$Nav->addCustomNav("FAQ/Wiki", 			"http://wiki.eclipse.org/index.php/BIRT_Project", 	"_self", 						1);
	#$Nav->addCustomNav("Community", 		"http://www.eclipse.org/birt/phoenix/community.php", 	"_self", 								1);
	#$Nav->addCustomNav("Reference", 		"http://www.eclipse.org/birt/phoenix/ref", 	"_self", 											1);
	#$Nav->addCustomNav("Project Organization", 	"http://www.eclipse.org/birt/phoenix/project", 	"_self", 									1);
	#$Nav->addCustomNav("Project Development Plan", 	"http://www.eclipse.org/birt/phoenix/project/plan.php", 	"_self", 	1);
	#$Nav->addCustomNav("Building BIRT", 		"http://www.eclipse.org/birt/phoenix/build/buildInstructions.php", 	"_self", 									1);
	#$Nav->addCustomNav("Search", 			"/birt/search.html", 	"_self", 								1);

?>
