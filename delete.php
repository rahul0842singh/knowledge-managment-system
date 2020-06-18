<?php 
if ($_SERVER['REQUEST_METHOD'] === "GET")
{
    // connection
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');

    $id=$_GET['id'];
    // delete record by id
    $statement ="DELETE FROM uploadbooks WHERE id='$id'";
     $execute_statement = mysqli_query($con,$statement) or die (mysqli_error($con));

    if($execute_statement ==1 ){
   ?>
   <script>
            alert('Data delete success');
            window.location.href ="uploadand.php";
    </script>
    <?php
    }
   

 }
 ?>
