<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #999999;
	background-color: #000000;
	width: auto;
	border-color: #CCCCCC;
}

/* Tips for Elastic layouts 
1. Since the elastic layouts overall sizing is based on the user's default fonts size, they are more unpredictable. Used correctly, they are also more accessible for those that need larger fonts size since the line length remains proportionate.
2. Sizing of divs in this layout are based on the 100% font size in the body element. If you decrease the text size overall by using a font-size: 80% on the body element or the #container, remember that the entire layout will downsize proportionately. You may want to increase the widths of the various divs to compensate for this.
3. If font sizing is changed in differing amounts on each div instead of on the overall design (ie: #sidebar1 is given a 70% font size and #mainContent is given an 85% font size), this will proportionately change each of the divs overall size. You may want to adjust based on your final font sizing.
*/
.oneColElsCtrHdr #container {
	width: 1000px;  /* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
	background: #CCCCCC;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	text-align: left; /* this overrides the text-align: center on the body element. */
	background-color: #FFFFFF;
}
.oneColElsCtrHdr #header {
	background: #065F33;
	padding: 0 10px 0 20px;  /* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
	height: 150px;
	border-color: #CCCCCC;
} 
.oneColElsCtrHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}
.oneColElsCtrHdr #mainContent {
	padding: 0 20px; /* remember that padding is the space inside the div box and margin is the space outside the div box */
	background: #FFFFFF;
	border-color: #CCCCCC;
}
.oneColElsCtrHdr #footer {
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#065F33;
} 
.oneColElsCtrHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}
.style1 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {color: #FFFFFF}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
a:link {
	color: #000066;
}
a:visited {
	color: #990099;
}
a:hover {
	color: #0000CC;
}
.style12 {
	font-size: x-large;
	color: #000033;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body class="oneColElsCtrHdr">

<div id="container">
  <div id="header">
    <h1 class="style1 style2">HEALTH SYSTEM</h1>
    <p class="style1 style2"><strong>Your Personal Health Assistant</strong></p>
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="#index.php" title="Home" target="top">Home</a>        </li>
      <li><a href="#about.php" title="About us" target="top">About</a></li>
      <li><a href="#" title="Our Services" target="top" class="MenuBarItemSubmenu">Services</a>
          <ul>
            <li><a href="#">Health Level</a>              </li>
            <li><a href="#">Meet Doctor</a></li>
        </ul>
      </li>
      <li><a href="#contact.php" title="Contact Us" target="top">Contact</a></li>
    </ul>
    <p class="style1">&nbsp;</p>
    <p class="style12"></p>
    <p></p>
    <p></p>
  <!-- end #header --></div>
  <div id="mainContent">
    
          <p>&nbsp;</p>
          </div>
  <div id="footer">
    <p class="style2">© 2014 Rakshitha</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
