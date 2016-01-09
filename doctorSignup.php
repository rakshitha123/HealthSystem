<?php
       session_start();   //starting the session
  	   if(isset($_POST['regNo']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['category']) && isset(       $_POST['hospital']) && isset($_POST['university']) && isset($_POST['qualifications']) && isset($_POST['password'])){
		           $regNo=$_POST['regNo'];   // Assigning values of text fields into variables
				   $firstName=$_POST['firstName'];
		           $lastName=$_POST['lastName'];
		           $category=$_POST['category'];
		           $hospital=$_POST['hospital'];
				   $university=$_POST['university'];
				   $qualifications=$_POST['qualifications'];
		           $password=$_POST['password'];	
     
	 			   mysql_connect('localhost','root','rakshitha');   // Connect to the database
	 			   mysql_select_db('health');
	  			   $query="INSERT INTO health.doctor                    (regNo,firstName,lastName,category,hospital,university,qualifications,password) VALUES ('".$regNo."','".$firstName."','".$lastName."','".$category."','".$hospital."','".$university."','".$qualifications."','".$password."');";  // Write the details entered by doctor into doctor table
	  			   $result=mysql_query($query);
	               mysql_close();           //Close connection with database 
				   $_SESSION['regNo']=$regNo;       // Assigning the value of registration number text field into a session variable regNo
				   header('Location: doctorWelcome.php');   // Redirecting to doctorWelcome page
		}
?>	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Doctor Signup</title>
    <link rel="stylesheet" type="text/css" href="CSS/signup.css">
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
    
    
     <script type="text/javascript">
	   function signupValidate(form){     //JavaScript function to check whether the doctor has entered values into all fields of sign up form
	       if (document.getElementById("regNo").value=='' ||document.getElementById("firstName").value=='' || document.getElementById("lastName").value=='' ||document.getElementById("category").value=='' ||document.getElementById("hospital").value=='' ||document.getElementById("university").value=='' ||document.getElementById("qualifications").value=='' ||document.getElementById("password").value==''){           
		     // Check whether the doctor has entered values for all the fields
		      window.alert("Please fill all the fields");   // If not providing an alert
			  return false;
		   }
		   
		   if(!document.getElementById("regNo").value.match(/[0-9]{6}[A-Z]/)){   // Check whether the registration number has the pattern of six                                                                                     digits and an upper case letter
		      window.alert("Please enter your valid registration number");   // If not providing an alert
			  return false;
		   }
		   return true;  // This function will only return true when doctor has entered values for all fields in signup form and registration                            number has the required format
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
        <form id="form1" name="form1" method="post" action="" onsubmit="return signupValidate(this);" >
           <p class="style14">Doctor Signup</p>
          
           <table width="500" border="1" align="center" cellspacing="30" bordercolor="#666666">
             <tr bordercolor="#666666" bgcolor="#666666">
               <td>Reg No :</td>
               <td><input name="regNo" type="text" id="regNo" size="35" /></td>
             </tr>
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
               <td>Category</td>
               <td bgcolor="#666666">
                 <label>
                    <select name="category" id="category">
                      <option selected="selected">Cardiologist</option>
                      <option>ENT Surgeon</option>
                      <option>Eye Surgeon</option>
                      <option>Gynaecologist</option>
                      <option>Neuro Physician</option>
                      <option>Oncologist</option>
                      <option>Rheumatologsist</option>
                    </select>
                 </label>
               </td>
             </tr>
             <tr>
               <td>Hospital</td>
               <td bgcolor="#666666"><input name="hospital" type="text" id="hospital" size="35" /></td>
             </tr>
             <tr>
               <td>University</td>
               <td bgcolor="#666666">
                 <label>
                      <input name="university" type="text" id="university" size="35" />
                 </label>
               </td>
             </tr>
             <tr>
               <td>Qualifications</td>
               <td bgcolor="#666666">
                      <input name="qualifications" type="text" id="qualifications" size="35" /></td>
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
