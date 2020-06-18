
<?php
session_start();
if((isset($_POST['techno'])))
{
$email =$_POST['email'];
$phonenumber =$_POST['phonenumber'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');
$q="Select * from user where email='$email' &&  phonenumber='$phonenumber' ";
$result=mysqli_query($con,$q);
$num=mysqli_fetch_array($result);
if($num>0)
{
	 echo  '<script> alert("your Password is '."  ".'*****'.$num["password"].'*****")</script>';
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
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/resetpassword.css" type="text/css">
	
   <title>Reset Password</title>
   <script src="js/resetpassword.js" type="text/javascript">
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

   <ul>
      <li class="li1">In Order To Change Your Password First You Have to Get Your Password From Here<br>Then Login Your Profile And Change Your Password From There.</li>
      <li class="li2" >Your Username Should Be Kept Secret.</li>
      <li class="li3">Passwords Should Be Changed Regularly.</li>
      <li class="li4">Username Should Be Changed Regularly.</li>
      <li class="li5">All Details Should Be Filled Correctly.</li>
      <li class="li6">Contact Number Should Be Same As Registration.</li>
</ul>

   
     <div class="container honey">
      <form onsubmit="return(phonenumbervalidation() && validateemail())" action="" method="post">
         <table>

         <tr>
            <td> </td>
            <td><input class="input40" type="text" id="email1" name="email" placeholder="Email" /></td>
         </tr>

         <tr>
            <td> </td>
            <td><input class="input41" type="text" id="eight" name="phonenumber" placeholder="Contact Number" /></td>
         </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary button1" type="submit" name="techno"  value="Get Password"/></td>
         </tr>
        
             </table>
      </form>
      <a href="login.html"><p class="login1">Login</p> </a>
</div>

 <div class="conatainer-fluid footer">
      <p class="footer1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
      
	</body>
</html>
   </div>
   <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
