<?php
session_start();
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

    header ("Location: adminlogin.html");
    
    }
  else{
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/uploadbooks.css" type="text/css">
    <title>upload</title>
    <script src="js/uploadbooks.js" type="text/javascript"></script>
</head>
<body>
    <a href="adminprofile.php"><p class="home100">Home</p></a>
    <div class="loginbox">
      
    <img src="images/avatar.png" class="avatar">
        <h1>UPLOAD</h1>
        <form onsubmit="return (space() && upload())" action="uploadbooksvalidation.php" name="form1" method="POST" enctype="multipart/form-data">
            <table>
            <tr>
                <td><p class="dob">Upload Date:</p></td>
               <td>
                <select class="date1" name="date" class="date1">
                <option value="1"> 01 </option>
                <option value="2"> 02 </option>
                <option value="3"> 03 </option>
                <option value="4"> 04 </option>
                <option value="5"> 05 </option>
                <option value="6"> 06 </option>
                <option value="7"> 07 </option>
                <option value="8"> 08 </option>
                <option value="9"> 09 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
            
            
                </select>

                <select class="month1" name="month" class="month1">
                <option value="1"> 01 </option>
                <option value="2"> 02 </option>
                <option value="3"> 03 </option>
                <option value="4"> 04 </option>
                <option value="5"> 05 </option>
                <option value="6"> 06 </option>
                <option value="7"> 07 </option>
                <option value="8"> 08 </option>
                <option value="9"> 09 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                
                </select>

                <select class="year1" name="year" class="year1">
                <option value="2000"> 2000 </option>
                <option value="2001"> 2001 </option>
                <option value="2002"> 2002 </option>
                <option value="2003"> 2003 </option>    
                <option value="2004"> 2004 </option>
                <option value="2005"> 2005 </option>
                <option value="2006"> 2006 </option>
                <option value="2007"> 2007 </option>
                <option value="2008"> 2008 </option>
                <option value="2009"> 2009 </option>
                <option value="2010"> 2010 </option>
                <option value="2011"> 2011 </option>
                <option value="2012"> 2012 </option>
                <option value="2013"> 2013 </option>
                <option value="2014"> 2014 </option>
                <option value="2015"> 2015 </option>
                <option value="2016"> 2016 </option>
                <option value="2017"> 2017 </option>
                <option value="2018"> 2018 </option>
                <option value="2019"> 2019 </option>
                <option value="2020"> 2020 </option>
                
                </select>
                </td>
            </tr>

            <tr>
            <td><p class="name">Book Name</p></td>
           <td><input type="text" id="bookname1" name="bookname" placeholder="Enter book name"></td>
           </tr>


           <br>

            <tr>
			<td><p class="file">Book File</p></td>
            <td><input type="file" id="bookfile1" accept=".pdf" class="upload1" name="bookfile"></td>
            </tr>

            <tr>
                <td></td>
                <td><input class="submit1" type="submit"  name="techno" value="Upload"></td>
            </tr>
            </table>

        </form>
       
    </div>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

  <?php } ?>