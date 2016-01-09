<?php	
	session_start();  //Starting the session
	if(!isset($_SESSION['username'])){   // Check whether the session variable username has been set
		header('Location:index.php');    // If it has been not set then redirect to home page
	}
	else{
   		$username=$_SESSION['username']; // Assign the value of session variable into a local variable
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>Patient Welcome</title>
     <link rel="stylesheet" type="text/css" href="CSS/patientWelcome.css">
     <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
     <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
     <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
  </head>

  <body class="oneColElsCtrHdr">

     <div id="container">
       <div id="header">
         <div align="right"><a href="logout.php"><strong>Logout</strong></a></div>
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
            <p>&nbsp;</p>
         </ul>
         <p class="style1">&nbsp;</p>
      </div> <!-- end #header -->
    
    <div id="mainContent">
        <form id="form1" name="form1" method="post" action="">
         <p>
         <?php
            echo '<p class="heading" >Welcome '.$username.' </p>';  // Print the username of the patient along with the word Welcome
	  	 ?>	
         </p>
         
         <p class="style2">What do you want now ?</p>
         <table width="1050" border="0" cellpadding="10" cellspacing="19" bordercolor="#666666" style="padding-left:79px;">
            <tr bordercolor="#666666">
               <td width="272" bgcolor="#FFFFFF" style="width:200px; border-radius:10px" ><p align="center" class="style13">Check Your Messages</p>
                 <p align="center" class="style12"><a href="message.php"><img src="images/message.jpg" alt="Check your messages" width="200" height                     ="147" /></a></p>
               </td>
          
               <td width="287" bgcolor="#FFFFFF" style="width:200px; border-radius:10px"><p align="center" class="style14">Meet Doctors</p>
                  <p align="center" class="style12"><a href="meetDoctor.php"><img src="images/meet doctor.jpg" alt="Meet Doctor" width="200" height                     ="147" /></a></p>
               </td>
           </tr>
           <tr bordercolor="#666666"> 
               <td width="272" bgcolor="#FFFFFF" style="width:200px; border-radius:10px" ><p align="center" class="style13">Check Your Health Level                    </p>
                    <p align="center" class="style12"><a href="calculator.php"><img src="images/calculator.jpg" alt="Health Calculator" width="200"                    height="147" /></a></p>
               </td>
       
               <td width="264" bgcolor="#FFFFFF" style="width:200px; border-radius:10px"><p align="center" class="style12">Health Questions &amp;                     Answers</p>
                    <p align="center" class="style12"><a href="questions.php"><img src="images/questions.jpg" alt="Questions with Answers" width=                    "200" height="147" /></a></p>
               </td>
          </tr>
      </table>
    </form>
   </div>
   
   <div id="footer">
     <p class="style2">© 2014 Rakshitha</p>
   </div><!-- end #footer -->
  </div><!-- end #container -->

  <script type="text/javascript">

    var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:    "SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
 </body>
</html>
