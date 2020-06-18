<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/uploadand.css" type="text/css">
    <title>Upload And Delete</title>
</head>
<body>

    <div class="container-fluid box1"><p class="admin">ADMIN PANEL</p></div>
    <div class="container-fluid box100">
        <img src="images/techno123.jpg" class="img1"/>
        <img src="images/ardent1.png" class="img2"/>
        <img src="images/white.jpg" class="img3"/>
        
    </div>
		
        <div class="container-fluid box2"></div>
        <div class="container-lg box3">
            <a href="adminprofile.php"><p class="home1">Home</p></a>
            <a href="viewbooks.php"> <p class="viewbook viewlink">View</p></a>
            <div class="triangle-right"></div>
            <div class="triangle-right1"></div>
            <a href="uploadbooks.php"><p class="uploadbook uploadlink">Upload</p></a>
            <div class="container home"><a href="uploadand.php"><p class="deletebook link">Update And Delete</p></a></div>
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
 <table class="table table-bordered table-condensed table100 table-striped">
 <thead>
 	<tr>
 		
 		<th>id</th>
 		<th>Date of Upload</th>
 		<th>Book Name</th>
 		<th>Book file</th>
 		<th>Delete</th>
    <th>Update</th>
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
    <td>  <button class="btn btn-danger" onclick="window.location.href = 'delete.php?id=<?php echo $row['id']?>';">Delete</button></td>
    <td>  <button class="btn btn-warning" onclick="window.location.href = 'update.html?id=<?php echo $row['id']?>';">Update</button></td>
 		
    
    
 		
 	</tr>
 <?php } ?>
 </table>




 <div class="container-fluid edge">
		<p class="edge1">Disclaimer: This site is designed and hosted by RAHUL SINGH & PRIYANSHU RAJ SINGH and the contents are provided by ARDENT . For any further information, please contact to ARDENT. (Ver 1.0.48.2.1)</p>

 <?php } ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>