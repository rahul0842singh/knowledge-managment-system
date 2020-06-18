<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

   header ("Location: login.html");
   
   }
   else
   {
   if(isset($_POST['techno']))
      {
         

         $con = mysqli_connect('localhost','root');
         mysqli_select_db($con,'kms');
          $select = "select * from user";
         $query=mysqli_query($con,$select);              
         $data = mysqli_fetch_assoc($query);

         $current = $_POST['currentpassword'];
         $new = $_POST['newpassword'];
         $confirm = $_POST['cpassword'];
         $username=$_SESSION['username'];
         $oldpwd=$data['password'];


         if($current==$oldpwd)
         {
            if($new==$confirm)
            {
               $update = "update user set password = '$new' where $_SESSION[username]=$username";
               $q = mysqli_query($con,$update);

               if($q>0)
               {
                  echo '<script> alert("Password Changed")</script>';
               }

               else{
                  echo 'error';
               }
            }
            else
            {
               echo 'your both password dont match';
            }
         }
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
	<link rel="stylesheet" href="css/changepassword.css" type="text/css">
	
   <title>Password Change</title>
   <script src="js/changepassword.js" type="text/javascript">
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
                  <div class="container-lg honey1"></div>
			<div class="container-lg honey">
                <b id=personaldetail> Change Password</b>
                
                <form action="" method="post" onsubmit="return checkForm(this);">
                    <table>
                        <tr>
                            <td></td>
                            <td><input class="old" type="password" name="currentpassword" placeholder="Current Password" /></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input class="current" type="password" name="newpassword" placeholder="New Password" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="new" type="password" name="cpassword" placeholder="Confirm Password" /></td>
                        </tr>

                        <tr>
				<td><input class="btn btn-primary button2" name="techno" type="submit" value="Change Password"/></td>
			</tr>


                    </table>
</form>
<button class="btn btn-dark home1" onclick="window.location.href = 'home.php';"><ion-icon name="home-sharp"></ion-icon>Home</button>
</div>
</div>
</div>
</div>



   <div class="conatainer-fluid footer">
      <p class="footer1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
   </div>
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
