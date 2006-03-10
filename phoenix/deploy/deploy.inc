<?php
/*
*/
?>

<?php

$linkArray = array(
	array("/birt/phoenix/deploy/viewerSetup.php", "Viewer Setup"),
	array("/birt/phoenix/deploy/viewerUsage.php", "Viewer Usage"),
	array("/birt/phoenix/deploy/usingPHP.php", "Using PHP"),
	array("/birt/phoenix/deploy/reportScripting.php", "Report Scripting"),
	array("/birt/phoenix/deploy/designEngineAPI.php", "Design Engine API"),
	array("/birt/phoenix/deploy/reportEngineAPI.php", "Report Engine API"),
);

function getDeployLinksSideItem($currentPage)
{
	global $linkArray;
	$return = <<<PRE
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Integration</h6>
			<ul>
PRE;
	foreach ($linkArray as $link)
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