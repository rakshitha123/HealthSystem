<?php
	session_start();   //starting the session

	$username='';   //Declaration of username and password variables 
	$password='';

	if (isset($_POST['username']) && isset($_POST['password']) ) {   // Check whether username and password  have been entered by user
		$username=$_POST['username'];  // Getting the value of username text box into a variable
		$password=$_POST['password'];  // Getting the value of password text box into a variable
	
		mysql_connect('localhost','root','rakshitha');   // Connect to the database
		mysql_select_db('health');
		$query="SELECT * FROM patient WHERE username='".$username."';";      // Select the row which contains the details of the  user from patient                                                                              table
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);    // Get the user details into an array called row
		if($row[4]==$password){       //Check whether the password entered by user is equal to the password in user details row
			$_SESSION['username'] = $username;        // If the above two are equal getting the username into a session variable
   	 		header('Location: patientWelcome.php');   // Redirecting to patientWelcome page
			mysql_close();    //Close connection with database
		}
		else{
		    header('Location: patientLogin.php');
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Patient Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
	<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    
   <script type="text/javascript">
	   function loginValidate(form){     //JavaScript function to check whether the user has entered values into username and password text boxes
	       if (document.getElementById("username").value==''){           // Check whether the user has entered the username
		                
			  if (document.getElementById("password").value==''){      // Check whether the user has entered the username and password
		          window.alert("Please enter your Username and Password");  // If not providing an alert
			      return false;
		      }
			  window.alert("Please enter your Username");    // If username and password are empty then providing an alert
			  return false;
		   }
		   else if (document.getElementById("password").value==''){ // Check whether the user has entered the password
		      window.alert("Please enter your Password");      // If not providing an alert
			  return false;
		   }
           else{
		  	  return true;  // This function will only return true when user has entered values for both usrename and password fields
		   }
	   }
  </script>
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
       		<p class="style12"></p>
       	</div>
        
  		<div id="mainContent">
    		<form id="form1" name="form1" method="post" action=" " onsubmit="return loginValidate(this)" >
           		<p class="style15">Patient Login</p>
      			<p class="style2"> User name</p>
      			<p>
          			<label>
          				<input name="username" type="text" class="style13" id="username" size="35" maxlength="50" />
          			</label>
      			</p>
          		<p class="style2">Password</p>
				<p>
          			<label>
          			<input name="password" type="password" id="password" size="35" />
          			</label>
          		</p>
   		        <p>
            		<label>
            			<input type="submit" name="submit" value="Login"/>
            		</label>
      			</p>
                <p class="style14"><span class="style2">Do not have an account ? </span><strong><a href="patientSignup.php">Signup                         Now</a></strong></p>
    		</form>
      </div>
      
  	  <div id="footer">
    		<p class="style2">© 2014 Rakshitha</p>
      </div>
   </div>

   <script type="text/javascript">
       var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:       "SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
 </body>
</html>
