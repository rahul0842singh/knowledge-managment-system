<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<title>SIGNUP</title>
	<script src="js/validation.js" type="text/javascript"></script>
</head>
<body>
	<div class="container-fluid header"></div>


	<img src="techno.jpg" alt="" width="100" height="100" class="img">
	<img src="ardent.png" alt="" width="100" height="95" class="img1">


	<p class="kms">Knowledge Managment System</p>
	<p class="break">(2020)</p>
	<div class="container-liquid signup1 round">
		<p class="font-weight-bold header1">Techno Main Salt Lake</p>
		<div class="container-lg signup2"></div>
		
		<div class="container-lg rahulkumar">
			<div class="container-lg honey1"></div>
			<div class="container-lg honey">
				<b id=personaldetail> PERSONAL DETAILS</b>
			</div>
			
			<form onsubmit="return (phonenumbervalidation() && space() && validateemail() && validatedob())" action=" " method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="badge badge-primary text-wrap textwrap1 ">    <p class="firstname">First Name :</p></td>
					<p class="validateusername"  id="eleven"> Invalid Firstname </p>
					<td> <input type="text" name="firstname" required    id="one" class="input1"/></td> 
				</tr>

				<tr>
					<td  class="badge badge-primary text-wrap textwrap2 " class="middlename"><p class="middlename">Middle Name :</p></td>
					<p class="validmiddlename" id="twe"> Invalid MiddleName </p>
					<td> <input type="text" name="middlename"  required  id="two" class="input1"/></td>
				</tr>

				<tr>
					<td class="badge badge-primary text-wrap textwrap3 "><p  class="lastname1">Last Name :</p></td>
					<p class="validlastname" id="thir"> Invalid LastName </p>
					<td> <input type="text" name="lastname"  class="input1"  required id="three"/></td>
				</tr>

				<tr>
					<td class="badge badge-primary text-wrap textwrap3"><p class="DOB">DOB :</p></td>
					<p class="validdob" id="dobone"> Invalid Date Of Birth </p>
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
					<td class="badge badge-primary text-wrap textwrap3"><p class="gender">Gender :</p></td>
					<td> <input type="radio" name="gender" class="male1" required value="male"><label class="male2">Male</label></td>
					<td><input type="radio" name="gender" class="female1" required  value="female" /><label class="female2">Female</label></td>
				</tr>


				<tr>
					<td class="badge badge-primary text-wrap textwrap3"><p class="occupation1">Occupation :</p></td>
					<p class="validoccupation" id="occ"> Invalid Occupataion </p>
					<td> <input type="text" name="occupation" required class="input1" id="five"/></td>
				</tr>

				<tr>
					<td class="badge badge-primary text-wrap textwrap3"><p class="about1">About :</p></td>
					<p class="validabout" id="abt"> Invalid About </p>
					<td> <input type="text" name="about" required   class="input1" id="six"/></td>
				</tr>

				<tr>
					<td class="badge badge-primary text-wrap textwrap5"> <p class="profilepicture1">Profile Picture :</p></td>
					<td> <input type="file" required name="profilepicture" class="upload1" /></td>
				</tr>


				<div class="conatainer-lg honey2">
					<b class="contact"> CONTACT DETAILS</b>
				</div>
			<div class="container-lg honey3"></div>

			<tr>
				<td class="badge badge-primary text-wrap textwrap4">   <p class="email1">Email :</p></td>
				<p id="email123" class="validemail"> Invalid Email </p>
				<td> <input type="text" name="email"  required  class="input2"   id="email1"/></td>
			</tr>

			
			<tr>
				<td class="badge badge-primary text-wrap textwrap6">   <p class="address1">Address :</p></td>
				<p class="validaddress" id="add"> Invalid Address </p>
				<td> <input type="text" name="address"  required  class="input3" id="seven"/></td>
			</tr>

			<tr>
				<td class="badge badge-primary text-wrap textwrap7">   <p class="phonenumber1">Phonenumber :</p></td>
				<p class="validphonenumber" id="phone1"> Invalid Phonenumber </p>
				<td> <input type="text" name="phonenumber"   required class="input4" id="eight"/></td>
			</tr>

			<div class="conatainer-lg honey4">
				<b class="choosepassword">CHOOSE PASSWORD</b>
			</div>
			<div class="container-lg honey9"></div>

			<tr>
				<td class="badge badge-primary text-wrap textwrap8">   <p class="password1">Password :</p></td>
				<p class="validpassword" id="passd"> Invalid Paasword </p>
				<td> <input type="password" name="password" required  maxlength="15" minlength="5" class="input10" id="nine"/></td>
			</tr>

			
			<tr>
				<td class="badge badge-primary text-wrap textwrap9">   <p class="password2"> Confirm Password :</p></td>
				<p class="validconfirmpassword" id="cpassd"> Invalid  confirm Paasword </p>
				<td> <input type="password" name="confirmpassword" maxlength="15" minlength="5" required   class="input11" id="ten"/></td>
			</tr>

			<tr>
			<td><input class="btn btn-primary button1" type="submit" name="techno" value="Submit"></td>
			</tr>

			<tr>
				<td><input class="btn btn-primary button2" type="reset" value="Reset"/></td>
			</tr>

			


			
			<div class="container-liquid footer">
				<p class="footer1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
			</div>
		</div>
		
		
		</div>
	
		

		
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php
if((isset($_POST['techno'])))
{
$firstname          =$_POST['firstname'];
$middlename	        =$_POST['middlename'];
$lastname           =$_POST['lastname'];
$email              =$_POST['email'];
$password           =$_POST['password'];
$date               =$_POST['date'];
$month              =$_POST['month'];
$year               =$_POST['year'];
$gender				=$_POST['gender'];
$occupation         =$_POST['occupation'];
$address            =$_POST['address'];
$about              =$_POST['about'];
$phonenumber        =$_POST['phonenumber'];
if(!empty($_POST['confirmpassword'])){
	$confirmpassword = $_POST['confirmpassword'];


if($password!==$confirmpassword){
   echo '<script> alert("password are not same");</script>';
}


else{

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');

if(!empty($_FILES['profilepicture']['name'])){
	// file attribute
	$filename=$_FILES['profilepicture']['name'];
	$filesize=$_FILES['profilepicture']['size'];
	$filetype=$_FILES['profilepicture']['type'];
 
	#server directory where the file will get uploaded
	#create a directory first

	if($filetype!="image/jpg" && $filetype!="image/png" && $filetype!="image/jpeg")
	 {
		echo '<script> alert("Olny jpg , jpeg and png extenstions are allowed")</script>';
	}
	
	else if($filesize>="2097152")
	{
		echo '<script> alert("image less than 2mb are allowed")</script>';
	}
	
		
	
	else{
		$serverpath="private/".rand(000,999).$filename;
		# file upload
		$tmp_file = $_FILES['profilepicture']['tmp_name'];
		#move the temp file
		$move=move_uploaded_file($tmp_file, $serverpath) or die ($_FILES['profilespicture']['error']);
	  
	
	$q = "INSERT INTO user(firstname,middlename,lastname,email,password,date,month,year,gender,occupation,address,about,phonenumber,profilepicture
) VALUES ('$firstname','$middlename','$lastname','$email','$password','$date','$month','$year','$gender','$occupation','$address','$about','$phonenumber','$serverpath')";
	
if(mysqli_query($con,$q))
{
	echo'<script>alert("User Registration Sucessful")</script>';
}
	
mysqli_close($con);
	}
	
}
}
}
}
?>