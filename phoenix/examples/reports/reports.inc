<?php
/*
*/
?>

<?php

$linkArray = array(
	array("/birt/phoenix/examples/reports/charting", "Charting"),
	array("/birt/phoenix/examples/reports/chartingsubreport", "Chart as a Sub Report"),
	array("/birt/phoenix/examples/reports/datasetfilter", "Dataset Filtering"),
	array("/birt/phoenix/examples/reports/dynamictext", "Dynamic Text"),
	array("/birt/phoenix/examples/reports/grouping", "Grouping"),
	array("/birt/phoenix/examples/reports/highlighting", "Conditional Highlighting"),
	array("/birt/phoenix/examples/reports/hyperlinking", "Hyperlinking"),
	array("/birt/phoenix/examples/reports/image", "Image"),
	array("/birt/phoenix/examples/reports/listing", "Listing"),
	array("/birt/phoenix/examples/reports/mapping", "Mapping"),
	array("/birt/phoenix/examples/reports/mysqlex", "MySQL Data Source"),
	array("/birt/phoenix/examples/reports/parallel", "Parallel Reports"),
	array("/birt/phoenix/examples/reports/parameters", "Parameters"),
	array("/birt/phoenix/examples/reports/subreports", "Sub Report")
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