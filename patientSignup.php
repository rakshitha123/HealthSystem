<?php
     session_start();    //starting the session
	 if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['city']) && isset($_POST['username']) &&     isset($_POST['password'])){    // Check whether the values for all fields have been entered by patient
		  $firstName=$_POST['firstName'];     // Assigning values of text fields into variables
		  $lastName=$_POST['lastName'];
		  $city=$_POST['city'];
		  $username=$_POST['username'];
		  $password=$_POST['password'];
			
		  mysql_connect('localhost','root','rakshitha');    // Connect to the database
	      mysql_select_db('health');
	      $query="INSERT INTO health.patient (firstName,lastName,city,username,password) VALUES ('".$firstName."','".$lastName.                   "','".$city."','".$username."','".$password."');";       // Write the details entered by patient into patient table
	      $result=mysql_query($query);
	      mysql_close();      //Close connection with database 
		  $_SESSION['username']=$username;           // Assigning the value of username text field into a session variable username
		  header('Location: patientWelcome.php');     // Redirecting to patientWelcome page
      }
?>	  
	  
      
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Patient Signup</title>
   <link rel="stylesheet" type="text/css" href="CSS/signup.css">
   <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
   <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
   <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
   
   <script type="text/javascript">
	   function signupValidate(form){     //JavaScript function to check whether the patient has entered values into all fields of sign up form
	       if (document.getElementById("firstName").value=='' || document.getElementById("lastName").value=='' ||document.getElementById("city")             .value=='' ||document.getElementById("username").value=='' ||document.getElementById("password").value==''){           
		     // Check whether the patient has entered values for all the fields
		      window.alert("Please fill all the fields");   // If not providing an alert
			  return false;
		   }
		   return true;  // This function will only return true when patient has entered values for all fields in signup form
	   }
  </script>
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
            <li><a href="#">Health Level</a></li>
            <li><a href="#">Meet Doctor</a></li>
          </ul>
         </li>
         <li><a href="#contact.php" title="Contact Us" target="top">Contact</a></li>
     </ul>
     <p class="style12"></p>
    </div>
    
    <div id="mainContent">
          <form id="form1" name="form1" method="post" action=" " onsubmit="return signupValidate(this);" >
             <p class="style14">Patient Signup</p>
             <table width="500" border="1" align="center" cellspacing="30" bordercolor="#666666">
                <tr bordercolor="#666666" bgcolor="#666666">
                   <td><span class="style13">First Name</span></td>
                   <td>
                       <label>
                        <input name="firstName" type="text" id="firstName" size="35" />
                       </label>
                   </td>
                </tr>
                <tr>
                   <td><span class="style13">Last Name</span></td>
                   <td bgcolor="#666666">
                       <label>
                        <input name="lastName" type="text" id="lastName" size="35" />
                       </label>
                   </td>
               </tr>
               <tr>
                   <td><span class="style13">City</span></td>
                    <td bgcolor="#666666">
                       <label>
                        <input name="city" type="text" id="city" size="35" />
                       </label>
                    </td>
               </tr>
               <tr>
                    <td><span class="style13">Username</span></td>
                    <td bgcolor="#666666">
                       <label>
                        <input name="username" type="text" id="username" size="35" />
                       </label>
                    </td>
              </tr>
              <tr>
                    <td><span class="style13">Password</span></td>
                    <td bgcolor="#666666">
                       <label>
                        <input name="password" type="password" id="password" size="35" />
                       </label>
                    </td>
             </tr>
             <tr>
                    <td>
                       <label>
                        <input type="submit" name="signup" value="Sign Up" />
                       </label>
                    </td>
                    <td bgcolor="#666666">&nbsp;</td>
             </tr>
         </table>
         <p class="style12">
            <label>
               <div align="justify">
               <div align="justify"></div>
            </label>
        </form>
     </div>
     
     <div id="footer">
        <p class="style2">© 2014 Rakshitha</p>
     </div>
   </div>
   
   <script type="text/javascript">
   var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:   "SpryAssets/SpryMenuBarRightHover.gif"});
   </script>
 </body>
</html>
