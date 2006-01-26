<?php
/*
*/
?>

<?php

$linkArray = array(
	array("/birt/deploy/viewerSetup.php", "Viewer Setup"),
	array("/birt/deploy/viewerUsage.php", "Viewer Usage"),
	array("/birt/deploy/usingPHP.php", "Using PHP"),
	array("/birt/deploy/designEngineAPI.php", "Design Engine API"),
	array("/birt/deploy/reportEngineAPI.php", "Report Engine API"),
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