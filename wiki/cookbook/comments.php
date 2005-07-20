<?php if (!defined('PmWiki')) exit();

	/*  Copyright 2004 Ilya Zverev (zverik@int.spb.ru)
	Updated 200412 by Jeffrey Barke (jbarke@milwaukeedept.org) for PmWiki 2.0
    You can redistribute this file and/or modify
    it under the terms of the GNU General Public License as published
    by the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.  

    This file enables commenting of pages in PmWiki.
	Tested with PmWiki 2.0
	Simply copy this file into the 'local/' subdirectory or some other
    suitable place and then do

        include_once('local/comments.php');


	History:
	
	Dec 8 - Updated for PmWiki 2.0

	Oct 29 - Handling '\r' chars in input
	         CommentsCount() function caused warnings
	         Now allows authorized users to delete comments
	         Added forgotten fclose() in HandlePostComment()

	Sep 29 - first version
*/

SDV($HandleActions['comments'], 'HandleComments');
SDV($CommentsFileName, 'CommentsFileName');
SDV($PageAttributes['passwdremovecomment'],'$[dataconsort]: ');
SDV($DefaultPasswords['removecomment'],'*');

// feel free to choose :)
# InitComments();
InitCommentsStyled();

// Initializes $RecentComments array.
if( !isset($RecentComments) ) {
	// Mindlessly stolen from Cookbook.ChangeSummary
	$RecentComments['$Group.RecentComments'] = 
	  "* [[\$PageUrl?action=comments#comments \$Group/\$Title]] . . . \$CurrentTime by \$AuthorLink";
	$RecentComments['Main.AllRecentComments'] = 
	  "* [[\$PageUrl?action=comments#comments \$Group.\$Title]] . . . \$CurrentTime by \$AuthorLink";
}

// thought it'd be better here
BasicCommentSetup();

// Initializes structures with plain content
function InitComments() {
	global $CommentFmt, $CommentStartFmt, $NoCommentsFmt, $CommentEditFmt,
		$NewCommentButtonsFmt, $EditCommentButtonsFmt, $CommentsFooterFmt;

	SDV($CommentFmt, "$PageText ----\n'''\$Author''' %color=green%[-(\$Time)-]%% [-[[\$RemoveURL [X] ]]-]\n\n\$Text\n\n");
	SDV($CommentStartFmt, array(
		"<a name=\"comments\"></a>",
		"$PageText ''$[Comments]''"
	));
	SDV($NoCommentsFmt, array(
		"<a name=\"comments\"></a>",
		"$PageText ''$[No comments]''"
	));
	SDV($CommentEditFmt, array("<form action='\$PageUrl' method='post'>
		<input type='hidden' name='pagename' value='\$PageName' />
		<input type='hidden' name='action' value='comments' />
		<input type='hidden' name='uid' value='\$CommentUid' />
		$[Enter your comment]:<br />
		<textarea name='text' rows='8' cols='60'>\$CommentText</textarea><br />
		$[Author]: <input type='text' name='author' value='\$Author' />
		\$CommentButtonsFmt
		</form>", &$CommentsFooterFmt));
	SDV($NewCommentButtonsFmt, "
		<input type='submit' name='post' value=' $[Submit] ' />
	");
	SDV($EditCommentButtonsFmt, "
		<input type='submit' name='post' value=' $[Update] ' />
		<input type='submit' name='delete' value=' $[Delete] ' onclick='javascript:text.value=\"\";' />
		<input type='button' value=' $[Reset] ' onclick='javascript:text.value=\"\"; uid.value=\"0\"'/>
	");
	SDV($CommentsFooterFmt, "wiki:$[PmWiki.CommentsFooter]");
}

// Initializes structures with styled content
function InitCommentsStyled() {
	global $CommentFmt, $CommentStartFmt, $NoCommentsFmt, $CommentEditFmt,
		$NewCommentButtonsFmt, $EditCommentButtonsFmt, $CommentsFooterFmt;

	SDV($CommentFmt, array(
		"<div style='padding: 4px; border-bottom: 1px dotted gray;'>",
		"<span style='font-weight: bold; float: left;'>\$Author</span><span style='float: right; font-style: italic; font-size: x-small; color: green;'>\$Time <a href='\$RemoveURL' style='font-style: normal; text-decoration: none;'>[X]</a></span><br>",
		"$PageText \$Text",
		"</div>"
	));
	SDV($CommentStartFmt, "<a name=\"comments\"></a><div style='margin-top: 2em; text-align: center; font-weight: bold; border: 1px black solid; background-color: #DDD;'>$[Comments]</div>");
	SDV($NoCommentsFmt, "<a name=\"comments\"></a><div style='margin-top: 2em; text-align: center; font-weight: bold; border: 1px black solid; background-color: #DDD;'>$[No comments]</div>");
	SDV($CommentEditFmt, array("<form action='\$PageUrl' method='post'>
		<input type='hidden' name='pagename' value='\$PageName' />
		<input type='hidden' name='action' value='comments' />
		<input type='hidden' name='uid' value='\$CommentUid' />
		$[Enter your comment]:<br />
		<textarea name='text' rows='8' cols='60'>\$CommentText</textarea><br />
		$[Author]: <input type='text' name='author' value='\$Author' />
		\$CommentButtonsFmt
		</form>", &$CommentsFooterFmt));
	SDV($NewCommentButtonsFmt, "
		<input type='submit' name='post' value=' $[Submit] ' />
	");
	SDV($EditCommentButtonsFmt, "
		<input type='submit' name='post' value=' $[Update] ' />
		<input type='submit' name='delete' value=' $[Delete] ' onclick='javascript:text.value=\"\";' />
		<input type='button' value=' $[Reset] ' onclick='javascript:text.value=\"\"; uid.value=\"0\"'/>
	");
	SDV($CommentsFooterFmt, "wiki:$[PmWiki.CommentsFooter]");
}

// aquires special params (uid & text) and initializes buttons.
// useful when PatchCommentBrowseFmt() is called from outside.
function BasicCommentSetup() {
	global $CommentText, $Author, $CommentUid,
		$CommentButtonsFmt, $NewCommentButtonsFmt;

	$CommentText = $_REQUEST['text'];
	SDV($Author, $_REQUEST['author']); // should I?
	$CommentUid = $_REQUEST['uid'];

	if( !isset($CommentUid) ) {
		// always must be not empty.
		$CommentUid = 0;
	}

	// edit buttons are displayed only right after posting.
	$CommentButtonsFmt = $NewCommentButtonsFmt;
}

// Handles action=comments
function HandleComments( $pagename ) {
	global $CommentUid,
		$CommentButtonsFmt, $NewCommentButtonsFmt, $EditCommentButtonsFmt;

	if( strlen($_REQUEST['remove']) >= 6 ) {
		RetrieveAuthPage($pagename, 'removecomment');
		RemoveComment($pagename, $_REQUEST['remove']);
	}

	if( strlen($CommentUid) > 0 ) {
		// uid is either 0 or md5 of something
		HandlePostComment($pagename);
	}

	if( strlen($CommentUid) > 1 ) {
		// uid is not 0
		$CommentButtonsFmt = $EditCommentButtonsFmt;
	} else {
		$CommentButtonsFmt = $NewCommentButtonsFmt;
	}

	// cheat! cheat! :)
	PatchCommentBrowseFmt();
	HandleBrowse($pagename);
}

// Prints out all the comments
function PrintComments($pagename) {
	global $CommentFmt, $NoCommentsFmt, $CommentStartFmt, $TimeFmt,
		$Newline, $CommentsFileName;

	// Actually I don't know how to use Lock() function.
	Lock(0);
	$wascomment = false;
	if( $comfile = @fopen($CommentsFileName($pagename), "r") ) {
		$idx = 0;
		while(!feof($comfile)) {
			// Note: $Newline is not stored in the comments file.
			$comment = explode("|",str_replace($Newline, "\n", rtrim(fgets($comfile, 4096))));
			if( count($comment) == 5 ) {
				$com_template = $CommentFmt;
				// either author name or ip. Wish it was prettier :)
				$author = $comment[2] ? $comment[2] : $comment[1];
				$remove_id = $idx.'-'.substr($comment[0],0,4);
				$remove_url = FmtPageName('$PageUrl?action=comments&remove='.$remove_id.'#comments',$pagename);
				$com_template = str_replace("\$Author", $author, $com_template);
				$com_template = str_replace("\$Time", strftime($TimeFmt, $comment[3]), $com_template);
				$com_template = str_replace("\$Text", $comment[4], $com_template);
				$com_template = str_replace("\$RemoveURL", $remove_url, $com_template);
				if( !$wascomment ) {
					PrintFmt($pagename, $CommentStartFmt);
					$wascomment = true;
				}
				PrintFmt($pagename, $com_template);
			}
			$idx++;
		}
		fclose($comfile);
	}

	if( !$wascomment ) {
		// no comments =)
		PrintFmt($pagename, $NoCommentsFmt);
	}
}

// Returns file name for the comments for current page
// You may want to alter this function.
// Then do so :)
function CommentsFileName($pagename) {
	global $WorkDir;
	return $WorkDir.'/'.$pagename.".Comments";
}
// Creates/updates/deletes comments
function HandlePostComment( $pagename ) {
	global $CommentText, $CommentUid, $Author, $Now, $Newline, $CommentsFileName;

	// Have I said that I have no idea how does Lock() work? :)
	Lock(2);
	if( !$CommentUid ) {
		// new comment
		// note that condition is either uid is not set, empty string or numeric 0.
		if( !($comfile = @fopen($CommentsFileName($pagename), "a")) ) {
			// major total super mega crash: cannot create file.
			return;
		}
		// major total super mega unique id :)
		$CommentUid = md5(uniqid(rand(), 1));
		$line = $CommentText ? join("|", array($CommentUid, $_SERVER['REMOTE_ADDR'], $Author, $Now, str_replace("\r","",stripmagic($CommentText)))) : "";
		fputs($comfile, str_replace("\n", $Newline, $line)."\n");
		fclose($comfile);
	} else {
		// change comment
		// note that this assignment is exactly line the one above.
		// if you have any idea how to beautify this, please mail me.
		$line = $CommentText ? join("|", array($CommentUid, $_SERVER['REMOTE_ADDR'], $Author, $Now, str_replace("\r","",stripmagic($CommentText)))) : "";
		$comments = file($CommentsFileName($pagename));
		if( !($comfile = @fopen($CommentsFileName($pagename), "w")) ) {
			return;
		}
		foreach( $comments as $idx => $cmt ) {
			$cmt = str_replace($Newline, "\n", rtrim($cmt));
			$comment = explode("|",$cmt);
			if( count($comment) == 5 ) {
				if( $comment[0] == $CommentUid ) {
					$cmt = $line;
					$comments[$idx] = $cmt;
				}
				fputs($comfile, str_replace("\n", $Newline, $cmt)."\n");
			}
		}
		fclose($comfile);
	}

	if( !$CommentText ) {
		$CommentUid = 0;
	} else {
		CommentsNotify($pagename);
	}
}

// Counts comments for the current page
function CommentsCount($pagename) {
	global $CommentsFileName;

	$lines = 0;
	if( $comments = @file($CommentsFileName($pagename)) ) {
		// count($comments) is not enough: there may be empty lines
		foreach( $comments as $cmt ) {
			$comment = explode("|",rtrim($cmt));
			if( count($comment) == 5 ) {
				$lines++;
			}
		}
	}
	return $lines;
}

// Displays comments count. Useful in <!--function:...-->
function DisplayCommentsCount($pagename) {
	echo CommentsCount($pagename);
}

// Displays comments underneath the page
function PatchCommentBrowseFmt() {
	global $HandleBrowseFmt, $PageStartFmt, $PageRedirectFmt,
		$PageEndFmt, $CommentEditFmt;

	// todo: upgrade it to find '$PageText' and to
	// include my two lines right after it.
	// todo2: think over if todo1 is really needed.
	$HandleBrowseFmt = array(&$PageStartFmt,
		&$PageRedirectFmt,'$PageText',
		'function:PrintComments',
		&$CommentEditFmt,
		&$PageEndFmt);
}

// Updates RecentComments pages
function CommentsNotify($pagename) {
	global $RecentComments, $RCDelimPattern;

	// copy-n-paste from pmwiki.php, version 1.0.8
	foreach($RecentComments as $rcfmt => $pgfmt) {
		$rcname=FmtPageName($rcfmt,$pagename); if (!$rcname) continue;
		$pgtext=FmtPageName($pgfmt,$pagename); if (!$pgtext) continue;
		if (@$seen[$rcname]++) continue;
		$rcpage = ReadPage($rcname,"");
		$rcelim = preg_quote(preg_replace("/$RCDelimPattern.*$/",' ',$pgtext),'/');
		$rcpage['text'] = preg_replace("/[^\n]*$rcelim.*\n/","",$rcpage['text']);
		if (!preg_match("/$RCDelimPattern/",$rcpage['text'])) 
			$rcpage['text'] .= "$pgtext\n";
		else 
			$rcpage['text'] = preg_replace("/([^\n]*$RCDelimPattern.*\n)/",
				"$pgtext\n$1",$rcpage['text'],1);
		WritePage($rcname,$rcpage);
	}
}

// Removes specified comment on the page.
// Comments are numbered from top starting at 0.
function RemoveComment($pagename, $id) {
	global $CommentsFileName;

	Lock(2);
	$idx = explode('-',$id);
	if( count($idx) != 2 || strlen($idx[1]) != 4 ) return; // $id must be like '4-f2a8'
   	$comments = file($CommentsFileName($pagename));
	$cline = explode("|",$comments[$idx[0]]);
	$idcheck = substr($cline[0], 0, 4);
	if( $idx[1] != $idcheck ) return;

   	if( !($comfile = @fopen($CommentsFileName($pagename), "w")) ) {
   		return;
   	}
	array_splice($comments, $idx[0], 1);
	fputs($comfile, implode("", $comments));
	fclose($comfile);
}

?>