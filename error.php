<?php
   session_start();  // Starting the session
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Error</title>
      <link rel="stylesheet" type="text/css" href="CSS/login.css">
      <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
      <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
      <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
  </head>

  <body class="oneColElsCtrHdr">
      <div id="container">
         <div id="header">
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
         
         <div id="mainContent">
           <form id="form1" name="form1" method="post" action=" " >
            <p class="style15">Please login before continue...</p>
            <p class="style2">If you are a patient, login from <a href="patientLogin.php"><strong>Patient Login</strong></a></p>
            <p class="style14"><span class="style2">Do not have an account ? </span><strong><a href="patientSignup.php">Signup Now</a></strong></p>
            <p class="style14">&nbsp;</p>
            <p class="style2">If you are a doctor, login from <a href="doctorLogin.php"><strong>DoctorLogin</strong></a></p>
            <p class="style14"><span class="style2">Do not have an account ? </span><strong><a href="doctorSignup.php">Signup Now</a></strong></p>
           </form>
        </div>
        <p class="style1">&nbsp;</p>
        <div id="footer">
            <p class="style2">© 2014 Rakshitha</p>
        </div><!-- end #footer -->
    </div><!-- end #container -->
    
    <script type="text/javascript">
         var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:         "SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
 </body>
</html>

