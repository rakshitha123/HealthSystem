<?php
	session_start();     //starting the session
  
	if(!$_SESSION['username']){
    	header('Location:index.php');  // If username session variable has not been set then redirect to home page
	}
	else{
    	$user=$_SESSION['username'];
		$reg=$_GET['regNo'];
	 	if(isset($_POST['message']) && isset($_POST['subject'])){
	    	$subject=$_POST['subject'];    // Assigning values of text fields into variables
	   		$question=$_POST['message'];
	    	mysql_connect('localhost','root','rakshitha');  // Connect with database
			mysql_select_db('health');
			$query="INSERT INTO messages (username,regNo,subject,question,reply,status) VALUES ('".$user."','".$reg."','".$subject."','".                     $question."','','N');";   // Write data into messages table such as patient, doctor, question, subject 
			$result=mysql_query($query) or die(mysql_error());
			mysql_close();         //Close connection with database
			header('Location:feedback.php');  // Redirect to feedback page for message sending
	   }
   }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>  
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Send Message</title>
       <link rel="stylesheet" type="text/css" href="CSS/meetDoctors.css">
       <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
       <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
       <link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
       
       <script type="text/javascript">
	     function validate(form){     //JavaScript function to check whether the user has entered values into subject and message fields
	       if (document.getElementById("subject").value==''){           // Check whether the user has entered a subject
		      if (document.getElementById("message").value==''){      // Check whether the user has entered a subject and a question
		          window.alert("Please enter a Subject and a Question");  // If not providing an alert
			      return false;
		      }
			  window.alert("Please enter a Subject");               // If user has not entered a subject then providing an alert
			  return false;
		   }
		   if (document.getElementById("message").value==''){ // Check whether the user has entered a question
		      window.alert("Please enter your Question");      // If not providing an alert
			  return false;
		   }
		   else if(document.getElementById("message").value.match(/^(Dear|dear)/)){
		      window.alert("You do not need to include a salutation. See Examples");
			  return false;
		   }
		   return true;  // This function will only return true when user has entered values for both subject and question fields
	    }
      </script>
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
        
        <div id="sidebar1" style="padding-bottom:382px; margin-bottom:9px;">
             <h3 class="style2" align="center"> Other Services</h3>
             <table width="302" border="0" align="center" cellspacing="0" bordercolor="#666666">
               <tr>
                 <td width="266"><p align="center" class="style2">Check Your Messages</p>
                    <p align="center" class="style2"><a href="message.php"><img src="images/message.jpg" alt="Check Your messages" width="200"                      height="147" /></a></p>
                 </td>
               </tr>
               <tr>
                 <td width="266"><p align="center" class="style2">Check Your Health Level</p>
                    <p align="center" class="style2"><a href="calculator.php"><img src="images/calculator.jpg" alt="Health Calculator" width="200"                      height="147" /></a></p>
                </td>
               </tr>
               <tr>
                <p align="center" class="style2">Health Questions &amp; Answers</p>
                <p align="center" class="style2"><a href="questions.php"><img src="images/questions.jpg" alt="Questions and Answers" width="200"                 height="147" /></a></p></td>
               </tr>
            </table>
       </div>
       
       <form name="form2" action="" method="post" onsubmit="return validate(this);">
            <img src="images/doctor3.jpg" alt="Meet Doctors"/>
              <table width="830" height="94" border="0" bgcolor="#999999" style="margin-bottom:9px; padding-left:10px;padding-bottom:20px;" >
                <tr>
                    <td width="496" style="padding-left:10px; border-color:#999999"><p class="style6" style="color:#FFFFFF">Meet Doctors ....</br>                      </br></p>
                    <p class="style7" style="color:#FFFFFF">
                    
                    <?php 
	                      $reg=$_GET['regNo'];  // Assign regNo into a variable which is passed by get method
	                      mysql_connect('localhost','root','rakshitha');  // Connect to database
	                      mysql_select_db('health');
	                      $query="SELECT * FROM doctor WHERE regNo='".$reg."';";  // Getting doctor data from database through regNo
	                      $result=mysql_query($query) or die(mysql_error());
	                      $row=mysql_fetch_array($result);
	                      echo '<b>Dr.'.$row['firstName'].' '.$row['lastName'].' (Reg No:'.$row['regNo'].')</b></br>';
	                      echo $row['qualifications'].'</br>';      // Showing doctor details to the patient
	                      echo $row['university'].'</br></br>';
	                      echo 'Main Visiting Hospital : '.$row['hospital'];
	                      mysql_close();      // Close connection to database
	               ?>
                   
                   </br></br></br></br><b>Please type only your question below breifly. Want to see Examples? <a href="examples.php">Click here</a>                   </b></p>
                   <p class="style7" style="color:#FFFFFF">Subject</p>
                   <input name="subject" type="text" id="subject" size="70">
                   </br>
                   <p class="style2">Question</br></p>
                   <p>
                      <textarea name="message" id="message" cols="75" rows="5"></textarea>
                   </p>
                   <p class="style7">
                      <label>
                          <input type="submit" name="sendMessage" value="Send Message" />
                      </label>
                   </p>
                   <p class="style7">&nbsp;</p>      
                 </td>
              </tr>
           </table>
        </form>
        
        <div id="footer">
           <p><span class="style2">© 2014 Rakshitha</span></p>
        </div><!-- end #footer -->
     </div><!-- end #container -->
     
     <script type="text/javascript">
        var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:        "SpryAssets/SpryMenuBarRightHover.gif"});
     </script>
  </body>
</html>
