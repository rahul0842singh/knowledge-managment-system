<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="css/search.css" type="text/css">
    <title>Search Results</title>
</head>
<body>

<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

   header ("Location: login.html");
   
   }

   else
   {
$con = mysqli_connect('localhost','root');
$db=  mysqli_select_db($con,'kms');
if(isset($_POST['techno']))
{
    $bookname=$_POST['bookname'];

    $query = "SELECT * FROM uploadbooks where bookname='$bookname'";
    $query_run=mysqli_query($con,$query);
    ?>
    <div class="container table2">
<table class="table table-bordered table-condensed table1 table-striped ">
 <thead class="thread-dark">
 	<tr>
 	    <th class="table-light one">Id</th>
 		<th class="table-light">Date of Upload</th>
 		<th class="table-light">Book Name</th>
         <th class="table-light">Book file</th>
         <th class="table-light two">Download</th>
     </tr>
 </thead>

    <?php
    if($row=mysqli_fetch_array($query_run)){
        ?>
        <tr>
            
            <td  class="table-primary three"><?php echo $row['id'] ?></td>
            <td  class="table-primary"><?php echo $row['date'].'/'.$row['month'].'/'.$row['year']?></td>
            <td class="table-primary"><?php echo $row['bookname'] ?></td>
           <td  class="table-primary"><?php echo $row['bookfile'] ?></td>

           <td class="table-primary four"> <button class="btn btn-success" onclick="window.location.href = 'download.php?id=<?php echo $row['id'] ?>';">Download</button></td>
           
           
       </tr>
    
    <?php } 
    

   else 
    {
          echo "<script type='text/javascript'>alert('wrong details');
        window.location='adminprofile.html';
        </script>";
    }    
    

}
?>
<?php } ?>
</table>
</div>

<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>