



<?php
session_start();
if((isset($_POST['techno'])))
{
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname   =$_POST['lastname'];
$date       =$_POST['date'];
$month      =$_POST['month'];
$year       =$_POST['year'];
$phonenumber =$_POST['phonenumber'];


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');
$q="Select * from user where firstname='$firstname' && middlename='$middlename' && lastname='$lastname' && date='$date' && month='$month' && year='$year' && phonenumber='$phonenumber' ";
$result=mysqli_query($con,$q);
$num=mysqli_fetch_array($result);
if($num>0)
{
	 echo  '<script> alert("your email is '."  ".'('.$num["email"].')")</script>';
}
else
{
    echo '<script> alert("May be Some Details Are Incorrect") </script>';
}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/forgotemail.css" type="text/css">
	<title>Forgot Email</title>
	<script src="js/forgotemail.js" type="text/javascript">
   </script>
</head>
<body>
<div class="containner-fluid header1"></div>
   <img class="technoimg" src="techno.jpg" alt=""/>
   <img  class="ardentimg" src="ardent.png" alt=""/>
   <p class="kms">Knowledge Managment System</p>
	<p class="break">(2020)</p>
   <div class="container-fluid-lg header">
      <p class="font-weight-bold heading">Techno Main Salt Lake</p>
   </div>

   
   <div class="container-lg head2"></div>
            <div class="container-lg head3">
               <div class="container-lg head4">
                  <div class="container head6">
                     <ul>
                        <li class="li1">Your Email Is Your Username.</li>
                        <li class="li2">You Can Retrive Your Username By Providing Following Details.</li>
                        <li class="li3">All Details Must Be Matched with Database.</li>
					 </ul>
					 
					

					 
                  </div>
                  <p class="head60">READ INSTRUCTION</p>
			   </div>
			   
			   <div class="container-lg head5">
                  <p class="head70">FIND USERNAME?</p>
                  <div class="container head7">
				  <form onsubmit="return(phonenumbervalidation() && space())" action=" " method="POST">
                        <table>
                           <tr>
                              <td class="badge badge-primary text-wrap textwrap1"><p class="username">First Name :</p></td>
                              <td><input type="text" id="one" required name="firstname" placeholder="First name" class="input1"/></td>
                           </tr>

                           <tr>
                              <td class="badge badge-primary text-wrap textwrap2"><p class="password">Middle name :</p></td>
                              <td><input type="text" id="two" required name="middlename" class="input2" placeholder="Middle Name"/></td>
						   </tr>
						   
						   <tr>
                              <td class="badge badge-primary text-wrap textwrap3"><p class="lastname">Last name :</p></td>
                              <td><input type="text" id="three" required name="lastname" class="input3" placeholder="Last Name"/></td>
						   </tr>

						   <tr>
                              <td class="badge badge-primary text-wrap textwrap5"><p class="phonenumber">Mobile Number :</p></td>
                              <td><input type="text" id="eight" required name="phonenumber" class="input4" placeholder="Mobile Number"/></td>
						   </tr>

						   <tr>
						   <tr>
					<td class="badge badge-primary text-wrap textwrap4"><p class="DOB">DOB :</p></td>
				
					<td>
					<select name="date" class="date1">
					<option value="1"> 01 </option>
					<option value="2"> 02 </option>
					<option value="3"> 03 </option>
					<option value="4"> 04 </option>
					<option value="5"> 05 </option>
					<option value="6"> 06 </option>
					<option value="7"> 07 </option>
					<option value="8"> 08 </option>
					<option value="9"> 09 </option>
					<option value="10"> 10 </option>
					<option value="11"> 11 </option>
					<option value="12"> 12 </option>
					<option value="13"> 13 </option>
					<option value="14"> 14 </option>
					<option value="15"> 15 </option>
					<option value="16"> 16 </option>
					<option value="17"> 17 </option>
					<option value="18"> 18 </option>
					<option value="19"> 19 </option>
					<option value="20"> 20 </option>
					<option value="21"> 21 </option>
					<option value="22"> 22 </option>
					<option value="23"> 23 </option>
					<option value="24"> 24 </option>
					<option value="25"> 25 </option>
					<option value="26"> 26 </option>
					<option value="27"> 27 </option>
					<option value="28"> 28 </option>
					<option value="29"> 29 </option>
					<option value="30"> 30 </option>
					<option value="31"> 31 </option>
				
				
					</select>

					<select name="month" class="month1">
					<option value="1"> 01 </option>
					<option value="2"> 02 </option>
					<option value="3"> 03 </option>
					<option value="4"> 04 </option>
					<option value="5"> 05 </option>
					<option value="6"> 06 </option>
					<option value="7"> 07 </option>
					<option value="8"> 08 </option>
					<option value="9"> 09 </option>
					<option value="10"> 10 </option>
					<option value="11"> 11 </option>
					<option value="12"> 12 </option>
					
					</select>

					<select name="year" class="year1">
					<option value="2000"> 2000 </option>
					<option value="2001"> 2001 </option>
					<option value="2002"> 2002 </option>
					<option value="2003"> 2003 </option>
					<option value="2004"> 2004 </option>
					<option value="2005"> 2005 </option>
					<option value="2006"> 2006 </option>
					<option value="2007"> 2007 </option>
					<option value="2008"> 2008 </option>
					<option value="2009"> 2009 </option>
					<option value="2010"> 2010 </option>
					<option value="2011"> 2011 </option>
					<option value="2012"> 2012 </option>
					<option value="2013"> 2013 </option>
					<option value="2014"> 2014 </option>
					<option value="2015"> 2015 </option>
					<option value="2016"> 2016 </option>
					<option value="2017"> 2017 </option>
					<option value="2018"> 2018 </option>
					<option value="2019"> 2019 </option>
					<option value="2020"> 2020 </option>
					
					</select>
					</td>
				</tr>

						   
						 
                           <tr>
                              <td><input class="btn btn-primary button1" type="submit" name="techno" value="Submit"></td>
                              </tr>

                              
                              <button class="btn btn-success login1" onclick="window.location.href = 'login.html';">Login</button>
                     
                        </table>
                     </form>
                  </div>
               </div>
            </div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div class="conatainer-fluid footer">
      <p class="footer1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
   </div>
</body>
</html> 
