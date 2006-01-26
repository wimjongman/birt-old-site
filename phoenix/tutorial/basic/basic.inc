<?php
/*
*/
?>

<?php

$linkArray = array(
	array("index.php", "Introduction"),
	array("basic02.php", "Creating a Report"),
	array("basic03.php", "Brief UI Tour"),
	array("basic04.php", "Building a Data Source"),
	array("basic05.php", "Building a Data Set"),
	array("basic06.php", "Building a Table"),
	array("basic07.php", "Testing Your Report"),
	array("basic08.php", "Setting Visual Properties"),
	array("basic09.php", "Setting Data Properties"),
	array("basic10.php", "Using Styles"),
	array("basic11.php", "Cascading Styles"),
	array("basic12.php", "Using a Grid"),
	array("basic13.php", "Using a Text Item"),
	array("basic14.php", "Next Steps")
);

function getTutorialLinksSideItem($currentPage)
{
	global $linkArray;
	$return = <<<PRE
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Tutorial</h6>
			<ul>
PRE;
	$i = 1;
	foreach ($linkArray as $link)
	{
		if ($i == $currentPage) 
		{
			$return .= "<li>". $link[1] . "</li>";
		}
		else
		{
			$return .= "<li><a href=\"" . $link[0] . "\">" . $link[1] . "</a></li>\n";
		}
		$i++;
	}
	$return .= <<<POST
			</ul>
		</div>
	</div>
POST;
	return $return;
}

function getTutorialStepNavigator($step)
{
	global $linkArray;
	$max = count($linkArray);
	
	$previousStepLink 	= $linkArray[($step - 2)][0];
	$previousStepTitle	= $linkArray[($step - 2)][1];
	$nextStepLink 		= $linkArray[$step][0];
	$nextStepTitle 		= $linkArray[$step][1];
	
	$previousStep		= "<td><p align=\"left\"><small><a href=\"" . $previousStepLink . "\">Previous:  " . $previousStepTitle. "</a></small></p></td>";
	$nextStep		= "<td><p align=\"right\"><small><a href=\"" . $nextStepLink . "\">Next:  " . $nextStepTitle . "</a></small></p></td>";
	
	switch($step)
	{
		case 1:
			$previousStep 	= "";
		break;
		case $max:
			$nextStep	= "";
		break;
	}
	
	$return = <<<EONAV
		<table width="100%">
			<tr>
				$previousStep
				$nextStep
			</tr>
		</table>
EONAV;
	return $return;
}

?>