<?php
$con = mysqli_connect("localhost","root","","mospy");
if(mysqli_connect_error()){
	echo "cannot connect";
}
//error_reporting(0);
$courseid = $_GET['cid'];



$query = "delete from fee_table where com ='$courseid' ";

$result = mysqli_query($con,$query);
if($result){
    ?>
	<h1 style="font-size:40px; background-color:tomato;color:white;font-family:arial;text-align:center;">RECORD DELETED</h1>

<?php
}
else{
	echo "<font color= 'red'>Failed to delete Record from database";
}
?>