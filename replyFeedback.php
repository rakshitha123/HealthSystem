<?php	
	session_start();  //Starting the session
	if(!isset($_SESSION['regNo'])){   // Check whether the session variable regNo has been set
		header('Location:index.php'); // If it has been not set then redirect to home page
	}
	else{
   		$regNo=$_SESSION['regNo'];  // Assign the value of session variable into a local variable
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Feedback</title>
     <link rel="stylesheet" type="text/css" href="CSS/message.css">
     <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
     <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
     <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
  </head>

  <body class="oneColElsCtrHdr">
     <div id="container">
         <div id="header">
             <div align="right"><a href="logout.php" style="color:#FFFFFF"><strong>Logout</strong></a></div>
             <h1 class="style1 style2">HEALTH SYSTEM</h1>
             <p class="style1 style2"><strong>Your Personal Health Assistant</strong></p>
             <ul id="MenuBar1" class="MenuBarHorizontal">
                <li><a href="#index.php" title="Home" target="top">Home</a></li>
                <li><a href="#about.php" title="About us" target="top">About</a></li>
                <li><a href="#" title="Our Services" target="top" class="MenuBarItemSubmenu">Services</a>
                  <ul>
                     <li><a href="#">Health Level</a></li>
                     <li><a href="#">Meet Doctor</a></li>
                  </ul>
                </li>
                <li><a href="#contact.php" title="Contact Us" target="top">Contact</a></li>
             </ul>
             <p class="style1">&nbsp;</p>
         </div>
         
         <div id="mainContent" style="height:314px;">
             <div id="box">
                 <p><a href="doctorWelcome.php"><strong>Inbox</strong></a></p>
                 <p><a href="doctorSentItems.php"><strong>Sent Items</strong></a></p>
             </div>
             
             <div id="message" style="padding-bottom:140px;">
                 <form id="form1" name="form1" method="post" action="">
                    <p><span class="style7" style="color:#003300; font-size:large;">Your message was sent successfully ...</span></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p align="right" style="padding-right:20px"><a href="doctorWelcome.php"><strong>Back to Inbox</strong></a></p>
                 </form>
             </div>
             <p>&nbsp;</p>
        </div>
        
        <div id="footer">
            <p class="style2">© 2014 Rakshitha</p>
        </div><!-- end #footer -->
    </div><!-- end #container -->
    
    <script type="text/javascript">
         var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:         "SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
  </body>
</html>
