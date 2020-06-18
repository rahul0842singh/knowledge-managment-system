<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kms');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql="SELECT * FROM uploadbooks WHERE id=$id";
    $result=mysqli_query($con,$sql);
    $file=mysqli_fetch_assoc($result);
    $filepath='uploadbooks/'. $file['name'];
    if(file_exists($filepath)) 
    {
        header ('Content-Description: File Transfer');
        header ('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
         header('Pragma:public');
        header ('Content-Length:'. filesize('uploadbooks/'.$file['name']));
        
        readfile('uploadbooks/'.$file['name']);
        exit;
        
    
}
}

?>