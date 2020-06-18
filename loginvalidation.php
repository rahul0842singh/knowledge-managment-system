<?php
session_start();

$username  =$_POST['username'];
$password  =$_POST['password'];
$firstname     =$_POST['firstname'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');
$q="Select * from user where  email='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
   $_SESSION['username']=$username;
   
  
   header('location:http://localhost/techno/home.php');

}
else
{  
   echo "<script type='text/javascript'>alert('wrong crendtials');
    window.location='login.html';
    </script>";
}
?>

