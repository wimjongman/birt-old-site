<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "BIRT Home";
		$metaKeywords	= "Eclipse Keywords";
		$metaAuthor		= "";
		$metaDescription = "Eclipse Super Description for SEO in da House";
		$ogTitle		= "This is the OG Super Title";
		$ogImage		= "http://www.actuate.com/images/logo.png";
		$ogDescription  = "This is the ogDescription to be displayed in share options.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ***Only usable values are 'index', 'noindex'
		$robotsFollow	= "follow"; // ***Only usable values are 'follow', 'nofollow'
		$canonicalTag	= ""; //this is a canonical tag used for duplicate content *** DO NOT USE UNLESS YOU KNOW WHAT YOU ARE DOING *** Default is blank! ex:http://www.actuate.com/products/
	 	
	 	# Generate Meta Info
		echo $PagePart->getMetaInfo($metaTitle, $metaKeywords, $metaAuthor, $metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag);
	 ?>
	 <script type="text/javascript" src="jquery-1.5.1.min.js"></script>
<script type="text/javascript">function get_feed_json(url) {

	if (window.XMLHttpRequest)
  		objXml = new XMLHttpRequest();
	else
  		objXml = new ActiveXObject("Microsoft.XMLHTTP");

    objXml.open("GET","load.php?url="+url,false);
    objXml.send(null);
  	
	var src=objXml.responseText;
	src = src.replace(/\n/g, "");
	return gfj_parse_feed(src);
}

function gfj_parse_feed(src) {
	
	var fa = src.match(/(<[^!](.*?)>)|(!(.*?)\]\])|([^\s<][^<>]+)/ig);  
	var str="", last = [], sta="", initem=false, cseq=false, lclosest=false; 
	
	for (var i=0; i<fa.length; i++) {	
		
		$("#debug").append(fa[i].replace(/</g, "&lt;").replace(/>/g, "&gt;")+"<br>");
		
		var li = "" + /[^<> ]+/.exec(fa[i]);
		
		if ( fa[i].substr(0,1) == "<" ) {
			
			if ( li.substr(0,1) == "/" ) {
				var tl = last.pop();
				if (cseq) str += '""'; cseq=false; 
				if (tl == sta) 	str += " }";
				sta = last[last.length-1];
				if (initem) {
					if ( li == "/item" && /[^<> ]+/.exec(fa[i+1]) != "item" ) {str += "] "; initem=false;}
					if ( li == "/entry" && /[^<> ]+/.exec(fa[i+1]) != "entry" ) {str += "] "; initem=false;}
				}
				
			} else
			{	
				if (li.substr(0,1) != "?") {
					
				lta = last[last.length-1]; cseq=true;
				
				if (lta != sta) { str += "{ "; } else { str += ", "; }
								
				if ( !/\/[\s]?>$/.test(fa[i]) )
				{					
				  if (li == "item" || li == "entry") {  
					if (!initem) {
						str += "\""+li+"\" : ["; initem=true; 
					}
				  } else str += "\""+li+"\" : ";
				
				  last.push(li);  
				
				} else {
					sta = last[last.length-1];				
					var tag = fa[i].match(/[\s]+(.*?)\s*=\s*(("[^"]*")|('[^']*'))/ig);
					
					str += "\""+li+"\" : ";
					lclosest=true;
					var intag = "";
					for (var xi in tag) {
						x = tag[xi].split("=");
						x[0] = /[^\s]+/i.exec(x[0]); x[1]=x[1].replace(/^\s\s*/, '').replace(/\s\s*$/, '').replace(/^[\"\']/,"").replace(/[\"\']$/,"");
						intag += "\""+x[0]+"\" : \""+x[1]+"\", ";
					}
					intag = intag.replace(/,\s$/,"");
					if (intag) str += "{ "+intag+ "} "; else str += '""';
					cseq = false;
				}
				}
			}
		}
		else
		{
			cseq = false;
			if (li.substr(0,3) != "!--" ) {
				var cont = fa[i]; cont = cont.replace( /(\!\[CDATA\[)/i,"").replace( /(\]\])/i,"").replace(/&lt;/g,"<").replace(/&gt;/g,">");
				str += "\""+cont.replace(/\"/g, "\\\"")+"\"";
			}
		}
		 
	} str += "} ";
	
	return str;		
	
}</script>
</head>	

<body>

<?php echo $PagePart->getAfterBody(); ?>

<script>
var anfeed=0, ai;
var  afeed, aitems;
$().ready(function() { 
	

	 afeed = jQuery.parseJSON(get_feed_json("http://www.tomshardware.com/feeds/atom/tom-s-hardware-us,18-2.xml"));
	 aitems = afeed.feed.entry; 

	display_feed(); 
	setTimeout( function() { display_atom_feed(); }, 5000);
})


function display_atom_feed() {
		
		ai=anfeed;
		anfeed++; if (anfeed == aitems.length) anfeed=0;
				
		$("#amain").fadeOut(1000, function() {
			$("#amain").html("<div><b><a href='"+aitems[ai].link.href+"' target='_black'><h3>"+aitems[ai].title+"<h3></a></b></div>");
			var afDate = new Date(aitems[ai].updated);
			$("#amain").append("<h4><a href='"+afeed.feed.link.href+"' target='_black'>"+afeed.feed.title+"</a>&nbsp;&nbsp;&nbsp;&nbsp;"+afDate+"</h4>");
			$("#amain").append("<div>"+aitems[i].summary+"</div>");
			$("#amain").fadeIn("fast");
		});		

		var t=setTimeout("display_atom_feed()",10000);
		
};
</script>

<div id="amain" > </div>



	
	<footer>
		<?php echo $PagePart->getFooter(); ?>
	</footer>
</div>
</body>
</html>