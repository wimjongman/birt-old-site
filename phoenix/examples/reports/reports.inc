<?php
/*
*/
?>

<?php

$linkArray = array(
	array("/birt/examples/reports/charting", "Charting"),
	array("/birt/examples/reports/chartingsubreport", "Chart as a Sub Report"),
	array("/birt/examples/reports/datasetfilter", "Dataset Filtering"),
	array("/birt/examples/reports/dynamictext", "Dynamic Text"),
	array("/birt/examples/reports/grouping", "Grouping"),
	array("/birt/examples/reports/highlighting", "Conditional Highlighting"),
	array("/birt/examples/reports/hyperlinking", "Hyperlinking"),
	array("/birt/examples/reports/image", "Image"),
	array("/birt/examples/reports/listing", "Listing"),
	array("/birt/examples/reports/mapping", "Mapping"),
	array("/birt/examples/reports/mysql", "MySQL Data Source"),
	array("/birt/examples/reports/parallel", "Parallel Reports"),
	array("/birt/examples/reports/parameters", "Parameters"),
	array("/birt/examples/reports/subreports", "Sub Report")
);

function getReportsLinksSideItem($currentPage)
{
	global $linkArray;
	$return = <<<PRE
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Example Reports</h6>
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