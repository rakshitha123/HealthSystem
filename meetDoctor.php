<?php
      session_start();  // Starting the session
      if(!isset($_SESSION['username'])){   // Check whether the session variable username has been set
         header('Location:error.php');     // If it has been not set then redirect to error.php page
      }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Meet Doctors</title>
    <link rel="stylesheet" type="text/css" href="CSS/meetDoctors.css">
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="twoColElsRtHdr">
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
      
       <div id="sidebar1" style="padding-bottom:350px;">
         <h3 class="style2" align="center"> Other Services</h3>
         <table width="302" border="0" align="center" cellspacing="15" bordercolor="#666666">
           <tr>
              <td width="266"><p align="center" class="style2">Check Your Messages</p>
                <p align="center" class="style2"><a href="message.php"><img src="images/message.jpg" alt="Check Your messages" width="200" height=                  "147" /></a></p>
              </td>
           </tr>
           <tr>
              <td width="266"><p align="center" class="style2">Check Your Health Level</p>
                <p align="center" class="style2"><a href="calculator.php"><img src="images/calculator.jpg" alt="Health Calculator" width="200"                    height="147" /></a></p>
              </td>
           </tr>
           <tr>
                <td>
                <p align="center" class="style2">Health Questions &amp; Answers</p>
                <p align="center" class="style2"><a href="questions.php"><img src="images/questions.jpg" alt="Questions and Answers" width="200"                  height="147" /></a></p></td>
           </tr>
         </table>
       </div>
       <img src="images/doctor3.jpg" alt="Meet Doctors"/>
       <table width="830" height="94" border="0" bgcolor="#FFFFFF" style="margin-bottom:9px; padding-left:10px;" >
         <tr>
           <td width="496" style="padding-left:10px">
                 <p class="style6">Meet Doctors ....</p>
                 <p class="style7">Now, you can easily connect with experienced doctors through our site.</p>
                 <p class="style7">Select a category before proceed ....</p>
                 <table width="436" height="250" border="1" cellpadding="10" cellspacing="10" bordercolor="#FFFFFF">
                    <tr>
                      <td width="392"><a href="cardiologist.php"><strong>Cardiologists</strong></a></td>
                    </tr>
                    <tr>
                      <td><a href="entSurgeons.php" class="style3">ENT Surgeons</a></td>
                    </tr>
                    <tr>
                      <td><a href="eyeSurgeons.php"><strong>Eye Surgeons</strong></a></td>
                    </tr>
                    <tr>
                      <td><a href="gynaecologists.php"><strong>Gynaecologists</strong></a></td>
                    </tr>
                    <tr>
                      <td><a href="neuro.php"><strong>Neuro Physicians</strong></a></td>
                    </tr>
                    <tr>
                      <td><a href="oncologists.php"><strong>Oncologists</strong></a></td>
                    </tr>
                    <tr>
                      <td><a href="rheumatologsists.php"><strong>Rheumatologsists</strong></a></td>
                    </tr>
                 </table>
                 <p class="style7">&nbsp;</p>
              </td>
          </tr>
       </table>
  
       <div id="footer">
          <p><span class="style2">© 2014 Rakshitha</span></p>
       </div><!-- end #footer -->
    </div><!-- end #container -->

    <script type="text/javascript">
       var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:       "SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
  </body>
</html>
