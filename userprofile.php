<?php
session_start();
if(isset($_POST['username'])){
$email=$_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');
$result=mysqli_query($con,"SELECT firstname,email,date,month,year,gender,occupation,address,phone FROM user WHERE email='$email'");
$retrive = mysqli_fetch_array($result);
$email = $retrive['email'];
$date = $retrive['date'];
$month = $retrive['month'];
$year = $retrive['year'];
$gender = $retrive['gender'];
$occupation = $retrive['occupation'];
$address = $retrive['address'];
$phone = $retrive['phone'];
$firstname = $retrive['firstname'];

while($retrive==1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/userprofile.css" type="text/css">
    <title>USER HOME</title>
</head>
<body>

  <!--header-->
    <div class="container-fluid-lg header">
           <div class="row">
             <div class="col-sm-12 row1">
               TECHNO INDIA
          </div>
    </div>
    <!--nav-->
    <nav>
  <div class="nav nav-tabs upper" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-edit-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-edit" aria-selected="false">edit</a>
    <a class="nav-item nav-link" id="nav-faq-tab" data-toggle="tab" href="#nav-faq" role="tab" aria-controls="nav-faq" aria-selected="false">FAQ</a>
  </div>
</nav>

<!--nav content-->
<div class="tab-content content1" id="nav-tabContent">

<!--home content-->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="container homeback">

  <div class="container innerdiv">
  <h1 class="head20"> Knowledge Managment System </h1>
  <p class="para1"> Knowledge management systems refer to any <br> kind of IT system that stores and retrieves kno<br>wledge, improves collaboration, locates knowl<br>edge sources, mines repositories for hidden kn<br>owledge, captures and uses knowledge, r in so<br>me other way enhances the KM process.</p>
  <p class="para2">A knowledge management system helps<br> you stay well-organized and up-to-date<br> when it comes to your organization’s do<br>cumentation. Whether you’re a SaaS com<br>pany supporting business customers, a co<br>nsumer product shipping out retail items<br> or  helpdesk manager dealing with internal</p>
  </div>
  <img class="backimg" src="images/book.jpg" alt="">
  </div>
  </div>

  <!--profile content-->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  
  <ion-icon class="man" name="person"></ion-icon>
    <p class="about">ABOUT</p>
    <p class="email">Email:</p>     <p class="email1">kumar_rahulkkcs@yahoo.com</p>
    <p class="dob">DOB:</p>     <p class="dob1">04/05/1996</p>
    <p class="gender">Gender:</p>     <p class="gender1">Male</p>
    <p class="occ">Occupation:</p>     <p class="occ1">Government Service</p>
    <p class="add">Address:</p>     <p class="add1">Sector 12/B house no 3177,<br> bokaro steel city jharkhand</p>
    <p class="phone">Phone:</p>     <p class="phone1">8340251638</p>
<div class="card card1">
 <div class="card-body">
   <h5 class="card-title">ABOUT USER<ion-icon  class="userinfo" name="layers-outline"></ion-icon></h5>
   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's contentThe Battle of Marshall's Elm was a skirmish that took place near Street, in the county of Somerset, South West England, on 4 August 1642. The engagement occurred during the build-up to formal beginning of the First English Civil War on 22 August, while the Royalists and Parliamentarians were recruiting men in the county. The Royalisby superior Parliamentarian numbers in the vicinity. The Royalist co which came across a force of between 500 and 600 Parliamentarian recruits travelling north across the Somerset Levels under the command of Sir John Pyne.mmander sent out a mounted patrol consisting of 60 to 80 cavalry and dragoons,ts had established their regional headquarters in Wells, but were threatened .</p>
   <a href="adminprofile.html" class="btn btn-danger">Logout<ion-icon name="exit-outline"></ion-icon></a>
 </div>
</div>
        <div class="container imagecontainer">
        <img class="rahulpic" src="images/rahul.jpeg">
        <div class="container imgfooter"><ion-icon class="icon1" name="person-add-sharp"></ion-icon><p
        class="friends"> Friends</p></div>
        <div class=" send container">
        <ion-icon class="msg" name="chatbox"></ion-icon><p class="msg1">SendMessage</p>
        </div>
      </div>
</div>


<!--edit-->
  <div class="tab-pane fade" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">

  <form method="post" action="method.php">
  <table>

  <tr>
  <td>First name:</td>
  <td><input name="firstname" type="text" class="input1" required/></td>
  <p class="td1"> rahul  </p>
  
  </tr>

  <tr>
  <td>Middle name:</td>
  <td><input name="middlename" type="text" class="input1" required/></td>
  <p class="td2">kumar</p>
  </tr>

  <tr>
  <td>Last name:</td>
  <td><input name="lastname" type="text" class="input1" required/></td>
  <p class="td3"> kumar </p>
  </tr>

  <tr>
					<td><p class="DOB">DOB :</p></td>
					<td>
					<select name="date" class="date1">
          <option value="date">date</option>
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
          <option value="month">month</option>
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
          <option value="year">year</option>
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
  <td>Email:</td>
  <td><input name="email" type="text" class="input1" required/></td>
  <p class="td4"> kumar_rahulkkcs@yahoo.com </p>
  </tr>



  <tr>
  <td>Phone Number:</td>
  <td><input name="phonenumber" type="text" class="input1" required/></td>
  <p class="td5"> 8340251638 </p>
  </tr>



  <tr>
  <td></td>
  <td> <button class="btn btn-success" onclick="window.location.href = 'edit.php';">Update</button></td>
  </tr>



  </table>
  </form>


  </div>
  <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">...</div>
</div>


<!--SIDE BAR-->
<div class="container-lg div2">
        <div class="row">
          <div class="col-sm row2">
              <p class="kms">KMS</p> 
              </div>                                                                           
            </div>
        </div>
        <div class="container-lg div3">
            <div class="row">
              <div class="col-sm row3">
                <ion-icon class="user" name="cloud-circle-sharp"></ion-icon>
               

                
                
              <p class="user1"><?php echo $firstname; ?></p>
               
            </div>
        </div>

			<div class="container-liquid footer">
				<p class="footer1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
			</div>
		</div>

     <script src="js/jquery.js"></script>
	 <script src="js/bootstrap.min.js"></script>
     <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>