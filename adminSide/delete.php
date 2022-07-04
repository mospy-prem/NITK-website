<?php
$con = mysqli_connect("localhost","root","","mospy");
if(mysqli_connect_error()){
	echo "cannot connect";
}
//error_reporting(0);
$courseid = $_GET['cid'];


$query = "delete from course_table where courseId ='$courseid'";

$result = mysqli_query($con,$query);
if($result){
	echo "<font color= 'green'> Record deleted from database";

}
else{
	echo "<font color= 'red'>Failed to delete Record from database";
}
?>