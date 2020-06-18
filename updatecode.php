<?php
if(isset($_POST['techno'])){
    #connection
	$id=$_GET['id'];
	$date=$_POST['date'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$bookname=$_POST['bookname'];
	


	$con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'kms');


	if(!empty($_FILES['bookfile']['name'])){
    // file attribute
    $filename=$_FILES['bookfile']['name'];
    $filesize=$_FILES['bookfile']['size'];
    $filetype=$_FILES['bookfile']['type'];

    

      $serverpath="uploadbooks/".rand(000,999).$filename;
      # file upload
      $tmp_file = $_FILES['bookfile']['tmp_name'];
      #move the temp file
      $move=move_uploaded_file($tmp_file, $serverpath) or die ($_FILES['bookfile']['error']);
  
	$prepare ="UPDATE uploadbooks SET date='$date' month='$month' year='$year',bookname='$bookname',bookfile='$serverpath' WHERE id='$id'";
	#execute
	$exec = mysqli_query($con,$prepare) or die (mysqli_error($con));

	if($exec==1){
		?><script>
		alert('data updated successfully');
		window.location.href="uploadand.php";
		</script>
		<?php
	}
}


}
?>