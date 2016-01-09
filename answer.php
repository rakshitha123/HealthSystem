<?php	
	session_start();     //starting the session
	if(!isset($_SESSION['regNo'])){
		header('Location:index.php');   // If regNo session variable has not been set then redirect to home page
	}
	else{
   		$regNo=$_SESSION['regNo'];
		$id=$_GET['id'];   // Get the message id using get method to uniquely identify the message
		if(isset($_POST['reply'])){
			$reply=$_POST['reply'];       // Get the value of reply field into a variable
        	mysql_connect('localhost','root','rakshitha');  // Connect with database
	    	mysql_select_db('health');
			$queryTemp="UPDATE health.messages SET reply='".$reply."',status='Y' WHERE messages.ID='".$id."';";   // Update the status of message                                                                                             which shows whether the doctor replied to the question
			$result=mysql_query($queryTemp) or die(mysql_error());
			mysql_close();     // Close connection with database
			header('Location:replyFeedback.php');  // Redirect to feedback page for replying messages
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Reply</title>
      <link rel="stylesheet" type="text/css" href="CSS/message.css">
      <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
      <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
      <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
      
      <script type="text/javascript">
	    function replyValidate(form){     //JavaScript function to check whether the doctor has entered reply into reply field
	       if (document.getElementById("reply").value==''){    // Check whether the doctor has entered a reply
		      window.alert("Please enter a reply");     // If not providing an alert
			  return false;
		   }
		   return true;  // This function will only return true when doctor has entered a reply
	    }
      </script>
   </head>

   <body class="oneColElsCtrHdr" >
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
         
         <div id="mainContent" style="height:383px;">
      
             <?php
	             mysql_connect('localhost','root','rakshitha'); //Connect to database
	             mysql_select_db('health');
                 $query="SELECT * FROM messages WHERE ID='".$id."';"; // Get the records from messages table related with the above specific id
	             $result=mysql_query($query) or die(mysql_error());
	             $row=mysql_fetch_array($result);
	             echo '<p class="style13">RE: '.$row['subject'].'</p>';   // Showing the subject of the message through message table
	      	     mysql_close();  
	         ?>
             
             <div id="box">
                <p><a href="doctorWelcome.php"><strong>Inbox</strong></a></p>
                <p><a href="doctorSentItems.php"><strong>Sent Items</strong></a></p>
             </div>
             
             <div id="message" style="padding-bottom:73px; background-color:#666666;">
                <form id="form1" name="form1" method="post" action="" onsubmit="return replyValidate(this)">
                   <p align="right">
                      <input type="submit" value="Send" style="margin-right:13px">
                      
                      <?php
			              mysql_connect('localhost','root','rakshitha'); // Connect to database
	  		              mysql_select_db('health');
       			          $query1="SELECT * FROM messages,patient WHERE patient.username=messages.username AND messages.ID='".$id."';"; 
						  // Join the two tables, messages and patient to get the details about the patient
	   			          $result1=mysql_query($query1) or die(mysql_error());
              	          $row=mysql_fetch_array($result1);
				          echo '<p class="styleTemp"><b style="margin-left:10px;" >To: </b>'.$row['firstName'].' '.$row['lastName'].'</p>';
			              //Showing the name of the receiver who will receive the reply 
					  ?>                                                
                      
                   <p>
            
                   </p> 
                   <textarea style="margin-left: 11px;" name="reply" id="reply" rows="8" cols="88"></textarea>
               </form>
             </div>
             <p>&nbsp;</p>
       </div>
       
       <div id="footer">
             <p class="style2">© 2014 Rakshitha</p>
       </div><!-- end #footer -->
    </div><!-- end #container -->
    
    <script type="text/javascript">
       var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:       "SpryAssets/SpryMenuBarRightHover.gif"});
    </script>
  </body>
</html>
