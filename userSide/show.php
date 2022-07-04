<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="mospy";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT * FROM `user_login`  ";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
//$_SESSION['username'] = $user;
if($count>0){
while($row=mysqli_fetch_array($result)){
//echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['username'].'")</script>';
    //header("location:https://mospy-prem.github.io/portfolio/");
    echo "<a href='".$row['file']."'>".$row['file']."</a>";
}
//https://mospy-prem.github.io/portfolio/
}
    ?>
