    <TABLE WIDTH=402 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<?php if ($thisPage=="home") { ?><IMG SRC="images/topnav1_01.gif" WIDTH=74 HEIGHT=34 ALT="Home" border="0"><?php } else { ?><A HREF="index.php" onmouseover="imgOn('img1')" onmouseout="imgOff('img1')"><IMG name=img1 SRC="images/topnav_01.gif" WIDTH=74 HEIGHT=34 ALT="Home" border="0"></a><?php } ?></TD>
		<TD><SCRIPT LANGUAGE="JavaScript">
// message to show in IE browsers
var txt2 = "<IMG name=img2 border=0 SRC='images/topnav_02.gif' WIDTH=122 HEIGHT=34 ALT='Bookmark Our Site'>";

// message to show in non-IE browsers
var txt = "<IMG name=img2 border=0 SRC='images/topnav_02.gif' WIDTH=122 HEIGHT=34 ALT='Bookmark Our Site'>";

// url you wish to have bookmarked
var url = "http://www.butlerlabs.ufl.edu";

// caption to appear with bookmark
var who = "Butler Polymer Research Labs at UF";

// do not edit below this line
// ===========================

var ver = navigator.appName
var num = parseInt(navigator.appVersion)
if ((ver == "Microsoft Internet Explorer")&&(num >= 4)) {
   document.write('<A onMouseOver=\"imgOn\(\'img2\'\)\" onMouseOut=\"imgOff\(\'img2\'\)\" HREF="javascript:window.external.AddFavorite(url,who);">' + txt2 + '</a>');
}else{
   document.write(txt)
} 
        </script><noscript>
        <A HREF="javascript:bookmarksite('Butler Labs - UF Chemistry', 'http://butlerlabs.chem.ufl.edu')">" onmouseover="imgOn('img2')" onmouseout="imgOff('img2')"><IMG name=img2 border=0 SRC="images/topnav_02.gif" WIDTH=122 HEIGHT=34 ALT="Bookmark Our Site"></a></noscript></TD>
		<TD>
			<?php if ($thisPage=="refer") { ?><IMG SRC="images/topnav1_03.gif" WIDTH=97 HEIGHT=34 ALT="Refer Our Site" border="0"><?php } else { ?><A HREF="refer.php" onmouseover="imgOn('img3')" onmouseout="imgOff('img3')"><IMG name=img3 SRC="images/topnav_03.gif" WIDTH=97 HEIGHT=34 ALT="Refer Our Site" border="0"></a><?php } ?></TD>
		<TD>
			<?php if ($thisPage=="contact") { ?><IMG SRC="images/topnav1_04.gif" WIDTH=109 HEIGHT=34 ALT="Contact Us" border="0"><?php } else { ?><A HREF="contact-us.php" onmouseover="imgOn('img4')" onmouseout="imgOff('img4')"><IMG name=img4 SRC="images/topnav_04.gif" WIDTH=109 HEIGHT=34 ALT="Contact Us" border="0"></a><?php } ?></TD>
	</TR>

</TABLE>