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
      <title>Question</title>
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
          
          <div id="mainContent" style="height:443px;">
      
              <?php  // PHP code to print the subject of the message
	             $id=$_GET['id'];   // Assinging the id of message, pass into this page through GET method
                 mysql_connect('localhost','root','rakshitha');  // Connect to database
	             mysql_select_db('health');
                 $query="SELECT * FROM messages WHERE ID='".$id."';";  // Get the records from messages table related with the above specific id
	             $result=mysql_query($query) or die(mysql_error());
	             $row=mysql_fetch_array($result);
	             echo '<p class="style13" >'.$row['subject'].'</p>';  // Print the subject of the message
	        	 mysql_close();  
	          ?>
              
             <div id="box">
                 <p><a href="message.php"><strong>Inbox</strong></a></p>
                 <p><a href="patientSentItems.php"><strong>Sent Items</strong></a></p>
                 <p><a href="patientWelcome.php"><strong>Other Services</strong></a></p>
             </div>
             
             <div id="message">
                 <form id="form1" name="form1" method="post" action="">
      
                    <?php
	                    mysql_connect('localhost','root','rakshitha');  // Connect to database
	  		            mysql_select_db('health');
       			        $query1="SELECT * FROM messages,doctor WHERE doctor.regNo=messages.regNo AND messages.ID='".$id."';";
						// Join the two tables, messages and doctor to get the details about the doctor 
	   			        $result1=mysql_query($query1) or die(mysql_error());
              	        $row=mysql_fetch_array($result1);
				        echo '<table cellspacing="10">';
				        echo '<tr><td><b>To: </b></td><td>Dr. '.$row['firstName'].' '.$row['lastName'].'</td></tr>';  // Print doctor's name
				        echo '<tr><td><b>Category: </b></td><td>'.$row['category'].'</td></tr>';  //Print doctor category
				        echo '</table>';
				        echo '<p style="padding-left:13px;">'.$row['question'].'</p>';  // Print the question asked by the patient
		            ?>
                    
                    <p>&nbsp;</p>
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

