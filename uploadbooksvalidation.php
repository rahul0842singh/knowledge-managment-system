<?php
session_start();
if((isset($_POST['techno'])))
{
$date=         $_POST['date'];
$month=        $_POST['month'];
$year=         $_POST['year'];
$nameofbook=   $_POST['bookname'];
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');

if(!empty($_FILES['bookfile']['name'])){
    // file attribute
    $filename=$_FILES['bookfile']['name'];
    $filesize=$_FILES['bookfile']['size'];
    $filetype=$_FILES['bookfile']['type'];
    
    #server directory where the file will get uploaded
    #create a directory first

    if(!file_exists("uploadbooks")){
      #CREATE A DIRECTORY
      mkdir("uploadbooks");

    }
    #SET SERVER PATH
    
      $serverpath="uploadbooks/".rand(000,999).$filename;
      # file upload
      $tmp_file = $_FILES['bookfile']['tmp_name'];
      #move the temp file
      $move=move_uploaded_file($tmp_file, $serverpath) or die ($_FILES['bookfile']['error']);
    }
    else{
          $serverpath= '';
    }
    $q = "INSERT INTO uploadbooks(date,month,year,bookname,bookfile) VALUES ('$date','$month','$year','$nameofbook','$serverpath')";
    
    }
$run=mysqli_query($con,$q);
if($run>0)
    {
      echo "<script type='text/javascript'>alert('Upload Sucessful');
window.location='uploadbooks.php';
</script>";
      
    }

    else
    {
      echo '<script> alert("Failed")</script>';
    }
      
mysqli_close($con);

?>