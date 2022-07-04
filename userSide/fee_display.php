<?php
$con = mysqli_connect("localhost","root","","mospy");
if(mysqli_connect_error()){
	echo "cannot connect";
}
//error_reporting(0);
$cd = $_GET['cid'];

$sql="SELECT pdf FROM fee_table WHERE com='$cd'";
$query=mysqli_query($con,$sql);

while($info=mysqli_fetch_array($query)){
    ?>

<embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="100%" height="800">

<?php
}

?>