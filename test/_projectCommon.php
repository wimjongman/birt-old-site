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
    $Nav->addNavSeparator("<img src='http://www.eclipse.org/birt/img/logo/Birt-logo.png' style='padding-bottom:20px;'/>", "http://www.eclipse.org/birt/", "_self");
	$Nav->addCustomNav("About", "http://www.eclipse.org/birt/about/", "_self", 1);
	$Nav->addCustomNav("Getting Started", "http://www.eclipse.org/birt/getting-started/", "_self", 1);
	$Nav->addCustomNav("Download", "http://download.eclipse.org/birt/downloads/", "_self", 1);
	$Nav->addCustomNav("Demos", "http://www.eclipse.org/birt/demos/", "_self", 1);
	$Nav->addCustomNav("Documentation", "http://www.eclipse.org/birt/documentation/", "_self", 1);
	$Nav->addCustomNav("Community", "http://www.eclipse.org/birt/community/", "_self", 1);
	$Nav->addCustomNav("Built with BIRT", "http://www.eclipse.org/birt/built-with-birt", "_self", 1);

?>
