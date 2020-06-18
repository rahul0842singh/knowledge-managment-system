<?php 
session_start();

$username  =$_POST['username'];
$password  =$_POST['password'];
$useremail=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');
$q="Select * from admin where email='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
   $_SESSION['username']=$username;
   header('location:http://localhost/techno/adminprofile.php');

}
else
{
    echo "<script type='text/javascript'>alert('wrong crendtials');
    window.location='adminlogin.html';
    </script>";
   
}
?>
   