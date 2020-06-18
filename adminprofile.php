<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

    header ("Location: adminlogin.html");
    
    }
    else{
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/adminprofile.css" type="text/css">
    <title>Admin Profile</title>
    <script src="js/adminprofile.js" type="text/javascript"></script>
</head>
<body>
    <div class="container-fluid wrapper">

        <button class="btn btn20 btn-secondary" onclick="window.location.href = 'adminlogout.php';">Logout <ion-icon class="power" name="power"></ion-icon></button>
        <button class="btn btn21 btn-secondary" onclick="window.location.href = 'viewbooks.php';">View Books <ion-icon class="power" name="book-sharp"></ion-icon></button>
       
    </div>
    <img src="images/logo.png" class="img1" alt="">
    <div class="container wrapper2">
        <i class="admin">ADMIN PROFILE</i>
       
    </div>
    <div class="container wrapper3">
        <ion-icon class="skill" name="flask-sharp"></ion-icon>
        <p class="skill1">SKILL</p>

        <ion-icon class="arr1" name="chevron-forward-circle-outline"></ion-icon> <P class="php">(PHP)</P>
        <ion-icon class="shar1" name="star-sharp"></ion-icon>
        <ion-icon class="shar2" name="star-sharp"></ion-icon>
        <ion-icon  class="shar3" name="star-sharp"></ion-icon>
        <ion-icon class="shar4" name="star-sharp"></ion-icon>
        <ion-icon class="shar5" name="star-sharp"></ion-icon>
        <div class="container wrapper4" >   <p class="profile btn btn-info" >PROFILE</p></div>


        
        <ion-icon class="arr2" name="chevron-forward-circle-outline"></ion-icon> <P class="java">(JAVASCRIPT)</P>
        <ion-icon class="shar6" name="star-sharp"></ion-icon>
        <ion-icon class="shar7" name="star-sharp"></ion-icon>
        <ion-icon  class="shar8" name="star-sharp"></ion-icon>
        <ion-icon class="shar9" name="star-sharp"></ion-icon>



        <ion-icon class="arr3" name="chevron-forward-circle-outline"></ion-icon> <P class="illu">(ILLUSTATOR)</P>
        <ion-icon class="shar10" name="star-sharp"></ion-icon>
        <ion-icon class="shar11" name="star-sharp"></ion-icon>
        <ion-icon  class="shar12" name="star-sharp"></ion-icon>
        <ion-icon class="shar13" name="star-sharp"></ion-icon>
        <ion-icon class="shar14" name="star-sharp"></ion-icon>


        <ion-icon class="arr4" name="chevron-forward-circle-outline"></ion-icon> <P class="photo">(PHOTOSHOP)</P>
        <ion-icon class="shar15" name="star-sharp"></ion-icon>
        <ion-icon class="shar16" name="star-sharp"></ion-icon>
        <ion-icon  class="shar17" name="star-sharp"></ion-icon>



        <ion-icon class="arr5" name="chevron-forward-circle-outline"></ion-icon> <P class="com">(COMMUNICATION)</P>
        <ion-icon class="shar18" name="star-sharp"></ion-icon>
        <ion-icon class="shar19" name="star-sharp"></ion-icon>
        <ion-icon  class="shar20" name="star-sharp"></ion-icon>
        <ion-icon class="shar21" name="star-sharp"></ion-icon>
        <ion-icon class="shar22" name="star-sharp"></ion-icon>

       
   
        <div class="container wrapper4" >   <p class="profile btn btn-info" >PROFILE</p></div>
      
    </div>
    
    <div class="container content">
        <ion-icon class="man" name="person"></ion-icon>
        <h3 class="man1">ABOUT</h3>
        <ion-icon class="arr" name="triangle-sharp"></ion-icon>

        <p class="first">First Name:</p>   <p class="first1">Rahul</p>
        <p class="last">Last Name:</p>     <p class="last1">Singh</p>
        <p class="user">Username:</p>        <p class="user1">rahulsingh3211</p>
        <p class="email">Email:</p>         <p class="email1">kumar_rahulkkcs@yahoo.com</p>
        <p class="city">City:</p>            <p class="city1">Bokaro</p>
        <p class="country">Country:</p>      <p class="country1">India</p>
        <p class="website">website:</p>       <p class="website1">https://www.ardentollaborations.com</p>
        <P class="intrest">Intrest</P>       <p class="intrest1">Net Surffing,Football</p>
        <p class="birthday">Birthday:</p>     <p class="birthday1">4th May,1996</p>
        <p class="phone">Phone:</p>          <p class="phone1">8340251638</p>
        <br>

    <div class="container hr"></div>
        

        <ion-icon class="exp" name="reader-outline"></ion-icon>
    
        
        <h3 class="exp1">EXPERIENCE</h3>
        <ion-icon class="circle" name="ellipse-outline"></ion-icon>
        
        <p class="ard">Qwner</p><p class="at">At</p> <p class="ard1">Ardent And Techno India</p>
        <ion-icon class="circle1" name="ellipse-outline"></ion-icon>
        <p class="ceo">CEO </p><p class="at1">At</p> <p class="kri">Kridhatutor</p>
        
        <ion-icon class="circle2" name="ellipse-outline"></ion-icon>
        <p class="student">Student</p><p class="at2">At</p><p class="student1">Techno India</p>
        
        <p class="student2">(From 2017 to 2021)</p>

        <ion-icon class="edu" name="school-sharp"></ion-icon>
        <p class="edu1">EDUCATION</p>

        
            <ion-icon class="circle3" name="ellipse-outline"></ion-icon>
            <p class="school">Matriculation From M G M</p>
            <P class="school1">(at 2014)</P>

            <ion-icon class="circle4" name="ellipse-outline"></ion-icon>
            <p class="board">High School From M G M</p>
            <P class="board2">(at 2016)</P>

            <ion-icon class="circle5" name="ellipse-outline"></ion-icon>
            <p class="btech">Bachelor's Degree From M G M</p>
            <P class="btech1">(at 2021)</P>

            <table class="table table-bordered table-condensed table1 table-striped table-sm">
                <tr>
                <td class="status">Status</td><td><button type="button" class="btn btn-success btn1">active</button></td>
                </tr>
                <tr>
                    <td class="rating">Rating</td><td>
                        <ion-icon class="star" name="star-sharp"></ion-icon>
                        <ion-icon class="star" name="star-sharp"></ion-icon>
                        <ion-icon class="star" name="star-sharp"></ion-icon>
                        <ion-icon class="star" name="star-sharp"></ion-icon>
                        <ion-icon  class="star" name="star-sharp"></ion-icon>
                    </td>
                    </tr>
                    <tr>
                        <td class="member">Member Since</td> <td><p class="date">15 JAN, 2017</p> </p></td>
                        </tr>
                
            </table>



        
    </div>
    <div class="container imgcontainer">
        
        <img src="admin/rahul.jpg" class="rahul"/>
        <div class="container imgfooter"> <ion-icon class="icon1" name="person-add-sharp"></ion-icon><p id="friemds1" class="friends"> Friends</p>
           
        </div>
        <div class="container message"><ion-icon class="msg" name="mail"></ion-icon><p class="msg1">SendMessage</p></div>

        <h1  class="head">RAHUL SINGH</h1>
        <h4 class="head2">Owner At Techno India Salt Lake</h4>
        <p class="para">Rahul Singh – Founder of Knowledge Mangment Sysetm, Mentor and Chairman, Chancellor,KMS & first generation successful technopreneur. He started his Career in the year 2017 with only 5 INR.His philantrophic approach- His notable contribution towards uplifting the standard of life.</p>
      
    </div>
    
    <div class="container-fluid iem">
		<p class="iem1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
 </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
    <?php } ?>