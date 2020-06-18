<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/adminlogin.css" type="text/css">
    <title>View Books</title>
</head>
<body>

    <div class="container-fluid box1"><p class="admin">ADMIN PANEL</p>

</div>
<img src="images/white.jpg" class="img4"/>
    <div class="container-fluid box100">
        <img src="images/techno123.jpg" class="img1"/>
        <img src="images/ardent1.png" class="img2"/>
        <img src="images/white.jpg" class="img3"/>
        
    </div>
		
        <div class="container-fluid box2"></div>
        <div class="container-lg box3">
        <a href="adminprofile.php"><p class="home1 homelink">Home</p></a>
           <div class="container home"><a href="viewbooks.php"> <p class="viewbook viewlink">View</p></a></div>
            <div class="triangle-right"></div>
            <div class="triangle-right1"></div>
            <a href="uploadbooks.php"><p class="uploadbook uploadlink">Upload</p></a>
            <a href="uploadand.php"><p class="deletebook link">Update And Delete</p></a>
            <div class="triangle-right2"></div>
         
            
            
		
			  </div>
			  

        </div>
    
<?php 
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

   header ("Location: adminlogin.html");
   
   }
   else{
if (isset ($_POST ['done'])){
echo "THE BOOKS ARE LISTED BELOW";
}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');
$sql="SELECT * FROM uploadbooks";
$execute=mysqli_query($con,$sql) or die (mysqli_error($con));
/*if(mysqli_num_rows($execute)>0){
	echo "no such record: ",mysqli_num_rows($execute);}*/
 ?>
 <div class="container table2">
 
 <table class="table table-bordered table-condensed table1 table-striped">
 <thead>
 	<tr>
 		
 		<th class="col1">Id</th>
 		<th class="col2">Date of Upload</th>
 		<th class="col3">Book Name</th>
         <th class="col4">Book file</th>
     
 	
 	</tr>
 </thead>
 <?php 
 while($row=mysqli_fetch_array($execute)){
 	?>
 	<tr>
 		
 		<td><?php echo $row['id'] ?></td>
 		<td><?php echo $row['date'].'/'.$row['month'].'/'.$row['year']?></td>
 		<td><?php echo $row['bookname'] ?></td>
        <td><?php echo $row['bookfile'] ?></td>
    </tr>
     
     
 <?php } ?>
 </table>
 </div>
 

 <?php } ?>

	<div class="container-fluid footer">
		<p class="footer1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
 </div>

 <div class="container-fluid iem">
		<p class="iem1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>
 </div>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>