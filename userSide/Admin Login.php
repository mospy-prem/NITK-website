<!doctype html>

<?php
session_start();
/*$servername="localhost";
$username="root";
$password="";
$dbname="mospy";*/
//$con = mysqli_connect();
//echo("conneciton");
include 'db.php';
if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];

if($user!="" && $pass!=""  && $usertype!=""){

$query = "SELECT * FROM `login` WHERE username= '$user' and password = '$pass' and usertype = '$usertype'";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
$_SESSION['username'] = $user;
if($count>0){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';

}
if($usertype=="academic"){
?>
<script type="text/javascript">
window.location.href="ug.php"</script>
<?php

}else if($usertype=="ranking"){
?>
<script type="text/javascript">
window.location.href="insert.php"</script>
<?php

}
}else{
echo "<script> alert('incorrect user id password')</script>";
}
}
}
$_SESSION['Login'] = true;

?>

<html>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
</style>

<head>
    <title>HTML_NEW</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="mycss.css">
</head>

<body>
     <center><div class="login-form">
        <h2>ADMIN LOGIN</h2>
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="user">
            </div>
            <br>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="pass">
            </div>
            <br>
            Select user type: <select name="usertype">
<option value="academic">Academic</option>
<option value="ranking">Ranking</option>
</select>   
            <button type="submit" name="Login">Sign In</button> 
            
        </form>
    </div>
</center>

   
</body>

</html>