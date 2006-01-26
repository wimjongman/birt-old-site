<?php
/*
*/
?>

<?php

$resourceLinkArray = array(
	array("/birt/phoenix/project/description.php", "Project Description and Scope"),
	array("/birt/phoenix/project/charter.php", "Project Charter"),
	array("/birt/phoenix/project/principles.php", "Project Principles"),
	array("/birt/phoenix/project/pmc.php", "Project Management Committee"),
	array("/birt/phoenix/project/contributors.php", "Project Contributors"),
);

$projectLinkArray = array(
	array("http://www.eclipse.org/erd/", "Eclipse Report Designer"),
	array("http://www.eclipse.org/ere/", "Eclipse Report Engine"),
	array("http://www.eclipse.org/ece/", "Eclipse Charting Engine"),
	array("http://www.eclipse.org/wrd/", "Web Based Report Designer")
);

function getProjectLinksSideItem($currentPage)
{
	global $resourceLinkArray;
	global $projectLinkArray;
	$return = <<<PRE
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Project Resources</h6>
			<ul>
PRE;
	foreach ($resourceLinkArray as $link)
	{
		if ($link[1] == $currentPage) 
		{
			$return .= "<li>". $link[1] . "</li>";
		}
		else
		{
			$return .= "<li><a href=\"" . $link[0] . "\">" . $link[1] . "</a></li>\n";
		}
	}
	$return .= <<<POST
			</ul>
		</div>
	</div>
POST;
	$return .= <<<PRE
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Projects</h6>
			<ul>
PRE;
	foreach ($projectLinkArray as $link)
	{
		if ($link[1] == $currentPage) 
		{
			$return .= "<li>". $link[1] . "</li>";
		}
		else
		{
			$return .= "<li><a href=\"" . $link[0] . "\">" . $link[1] . "</a></li>\n";
		}
	}
	$return .= <<<POST
			</ul>
		</div>
	</div>
POST;
	return $return;
}

?>