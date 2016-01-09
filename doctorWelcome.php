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
       <title>Doctor Welcome</title>
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
         
         <div id="mainContent" style="height:543px;">
             <p class="heading style13" >Inbox</p>
             
             <?php  // Code to show the number of new messages available for the doctor
                  mysql_connect('localhost','root','rakshitha');  // Connect to database
	              mysql_select_db('health');
                  $query="SELECT * FROM messages WHERE regNo='".$regNo."';"; // Get the records from messages table related with the doctor
	              $result=mysql_query($query) or die(mysql_error());
	         	  $count=0;       // This variable is used to keep a count of the number of new messages
	              while($row=mysql_fetch_array($result)){
	                  if($row['status']=='N'){   // The field 'status' in messages table says whether the doctor has replied the message or not
		                  $count++;             // If it contains 'N', then the message has been not replied by the doctor and it is a new message                                                for the doctor
		              }                         // Then, count variable should be increased by one
	              }
	              if($count==0){
	                  echo '<p class="styleTemp">You have no new messages</p>';   // Printing the number of new messages to the patient
	              }
	              else if($count==1){
	                  echo '<p class="styleTemp">You have one new message</p>';
	              }	
	              else{
	                  echo '<p class="styleTemp">You have '.$count.' new messages</p>';
	              } 
	              mysql_close();  
	        ?>
            
            <div id="box">
                 <p><a href="doctorWelcome.php"><strong>Inbox</strong></a></p>
                 <p><a href="doctorSentItems.php"><strong>Sent Items</strong></a></p>
            </div>
            <div id="message">
                 <form id="form1" name="form1" method="post" action="">
                     <table cellpadding="5" cellspacing="20" align="center" style="margin-left:0px">
			            <tr style="font-weight:300">
            	           <td style="width:276px"><b>Sender</b></td>
                           <td style="width:230px"><b>Subject</b></td>
                           <td style="width:186px"><b>Location</b></td>
                           <td> </td>
                        </tr>
                        
                        <?php  // PHP code to show the details of messages to the doctor
			               mysql_connect('localhost','root','rakshitha');   //Connect to database
	  		               mysql_select_db('health');
       			           $query1="SELECT * FROM messages WHERE regNo='".$regNo."';";  // Get the records from messages table related with                                                                                        the doctor
	   			           $result1=mysql_query($query1) or die(mysql_error());
              	           while($row=mysql_fetch_array($result1)){
				               $id=$row['ID']; 
			                   echo '<tr>';    // Printing the details of the message such as sender, subject and sender's city
				               $query2="SELECT * FROM patient,messages WHERE patient.username='".$row['username']."' LIMIT 0,6; ";
				               $result2=mysql_query($query2);
				               $row2=mysql_fetch_array($result2);
				               echo '<td>'.$row2['firstName'].' '.$row2['lastName'].'</td>';
				               echo '<td>'.$row['subject'].'</td>';
				               echo '<td>'.$row2['city'].'</td>';
				               if($row['status']=='N'){
				                 echo '<td><a href="reply.php?id=' . $id . '">New</a></td>'; // Show New if it has been not replied by doctor 
				               }                                                              // Pass the id of the message to reply .php page
				               else{
				                 echo '<td><a href="reply.php?id=' . $id . '">Answered</a></td>'; // Show Answered if it has been replied by doctor
				               }                                                                  // Pass the id of the message to reply .php page
			               }
			           ?>
                       
                    </table>
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
