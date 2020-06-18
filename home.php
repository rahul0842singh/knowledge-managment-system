<?php
session_start();
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'kms');
   
    $result=mysqli_query($con,"SELECT phonenumber,firstname,middlename,lastname,email,about,date,month,year,occupation,address,gender,profilepicture FROM user WHERE email='$email'");
    $retrive = mysqli_fetch_array($result);
    $about = $retrive['about'];
    $firstname = $retrive['firstname'];
    $email = $retrive['email'];
    $date = $retrive['date'];
    $month = $retrive['month'];
    $year = $retrive['year'];
    $occupation = $retrive['occupation'];
    $address = $retrive['address'];
    $gender = $retrive['gender'];
    $phonenumber = $retrive['phonenumber'];
    $middlename = $retrive['middlename'];
    $lastname = $retrive['lastname'];

    
   
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/userprofile.css" type="text/css">
    <title>USER HOME</title>
    <script src="js/home.js" type="text/javascript"></script>
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
    <a class="nav-item nav-link" id="nav-edit-tab" data-toggle="tab" href="#nav-edit" role="tab" aria-controls="nav-edit" aria-selected="false">Edit Profile</a>
    <a class="nav-item nav-link" id="nav-faq-tab" data-toggle="tab" href="#nav-faq" role="tab" aria-controls="nav-faq" aria-selected="false">FAQ</a>
    <label class="search-download">Search and Download</label> <ion-icon class="forward" name="chevron-forward-sharp"></ion-icon>
        <form action="search.php" method="post">
            <input type="text" class="textbox" name="bookname" placeholder="bookname or filename">
            <input title="Search" value="" type="submit"  name="techno" class="button">
          </form>
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
    <p class="email">Email:</p>     <p class="email1"><?php echo $email; ?></p>
    <p class="dob">DOB:</p>     <p class="dob1"><?php echo $date.'/'.$month.'/'.$year; ?></p>
    <p class="gender">Gender:</p>     <p class="gender1"><?php echo $gender; ?></p>
    <p class="occ">Occupation:</p>     <p class="occ1"><?php echo $occupation; ?></p>
    <p class="add">Address:</p>     <p class="add1"><?php echo $address; ?></p>
    <p class="phone">Phone:</p>     <p class="phone1"><?php echo $phonenumber; ?></p>
<div class="card card1">
 <div class="card-body">
   <h5 class="card-title">ABOUT USER<ion-icon  class="userinfo" name="layers-outline"></ion-icon></h5>

 
   <p class="card-text"><?php echo $about; ?></p>

   
   <a href="logout.php" class="btn btn-danger">Logout<ion-icon name="exit-outline"></ion-icon></a>
 </div>
</div>
        <div class="container imagecontainer">
            <?php if($retrive>0){ ?>
        <img class="rahulpic" src="<?php echo $retrive['profilepicture']; ?>"/>

            <?php } ?>

            
  
        <div class="container imgfooter"><ion-icon class="icon1" name="person-add-sharp"></ion-icon><p
        class="friends"> Friends</p></div>
        <div class=" send container">
        <ion-icon class="msg" name="chatbox"></ion-icon><p class="msg1">SendMessage</p>
        </div>
        <button class="btn btn-dark" onclick="window.location.href = 'changepassword.php';">Change Password</button>
      </div>
     
</div>

<!--edit-->
<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'kms');
if(isset($_POST['submit']))
{
    $email=$_SESSION['username'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
   
    $q="update user set firstname='$firstname', middlename='$middlename', lastname='$lastname', date='$date', month='$month', year='$year', email='$email', phonenumber='$phonenumber' where email='$email'";
    $exec = mysqli_query($con,$q);
   
  
    if($exec==1)
    {
      echo '<script>alert("updation successful")</script>';
    }
else{
    
  echo '<script>alert("error")</script>';
}
}
?>
<div class="tab-pane fade" id="nav-edit" role="tabpanel" aria-labelledby="nav-edit-tab">

<form onsubmit="return (phonenumbervalidation() && space() && validateemail())" method="post" action="" >
<table>

<tr>
<td>First name:</td>
<td><input name="firstname" type="text" id="first1" class="input1" value="<?php echo $firstname ?>" required/></td>
<p class="td1">   </p>

</tr>

<tr>
<td>Middle name:</td>
<td><input name="middlename" type="text" class="input1" id="middle1" value="<?php echo $middlename ?>" required/></td>
<p class="td2"></p>
</tr>

<tr>
<td>Last name:</td>
<td><input name="lastname" type="text" id="last1" class="input1" value="<?php echo $lastname ?>" required/></td>
<p class="td3"> </p>
</tr>

<tr>
                  <td><p class="DOB">DOB :</p></td>
                  <td>
                  <select name="date" class="date1">
        <option><?php echo $date ?></option>
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
        <option><?php echo $month ?></option>
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
        <option ><?php echo $year ?></option>
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
<td><input name="email" id="email1" type="text" class="input1" value="<?php echo $email ?>" required/></td>
<p class="td4">  </p>
</tr>



<tr>
<td>Phone Number:</td>
<td><input name="phonenumber" id="eight" type="text" class="input1" value="<?php echo $phonenumber ?>" required/></td>
<p class="td5"> </p>
</tr>


<tr>
<td></td>
<td> <button name="submit" class="btn btn-success">Update</button></td>
</tr>



</table>
</form>


</div>
<div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">

<h2 class="heading2"><ion-icon name="help-circle-outline"></ion-icon>Can I Change Profile Picture? </h2>
<p class="ans1"> No, you can't change the profile picture once you have downloaded. </p>

<h2 class="heading3"><ion-icon name="help-circle-outline"></ion-icon>Which fields can I edit in edit profile? </h2>
<p class="ans2"> You can edit 1..First name, 2..Middle name , 3..Last name, 4..email, 5..phone number, 6..DOB. </p>

<h2 class="heading4"><ion-icon name="help-circle-outline"></ion-icon>Can I change Login Password?</h2>
<p class="ans3"> Yes You can change Password!!</p>


<h2 class="heading5"><ion-icon name="help-circle-outline"></ion-icon>Can I download books?</h2>
<p class="ans4"> Yes You can!!</p>






</div>
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

