<?php
global $stepStone;
echo $stepStone;
?>

</td>
</tr>
</table>

<?php
function footLink( $text, $link )
{
	echo <<<END
<a href="{$link}" class="navhead">{$text}</a>
END;
}
?>

<table BORDER=0 CELLSPACING=0 CELLPADDING=3 WIDTH="100%" BGCOLOR="#6699CC" >
<tr><td width="126px"></td>
<td>
<?php
	global $fileTimeStamp;
	if ( $fileTimeStamp > 0 )
	{
?>
<span style="color: white; font-size: x-small">Last Updated: 
<?php echo date( "M j, Y", $fileTimeStamp ); ?>
</span>
<?php
	}
?>
</td><td class="navhead" style="text-align: right; color: #006699">
<?php footLink( "webmaster", "mailto:webmaster@eclipse.org" ); ?>
<!--
|
<?php footLink( "contact", "foo.html" ); ?> |
<?php footLink( "sitemap", "foo.html" ); ?>
-->
&nbsp;</td></tr></table>

</body>
</html>
