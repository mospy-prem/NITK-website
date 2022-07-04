<?php
$con = mysqli_connect("localhost","root","","mospy");
if(mysqli_connect_error()){
  echo "cannot connect";
}

?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="form.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Update UG courses</h2>
    <form action="" method="POST">
      <div class="input-box">
        <input type="text" placeholder="Enter Course ID" name="courseId" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Course name" name="course" required>
      </div>
      <div class="input-box">
        <input type="number" placeholder="Enter duration of course" name="duration"required>
      </div>
      <div class="input-box">
        <input type="number" placeholder="Number of semsters" name="semsters"required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Submit" name="submit">
      </div>
      
    </form>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$cid = $_POST['courseId'];
$cname = $_POST['course'];
$cduration = $_POST['duration'];
$sems = $_POST['semsters'];


if($cname!="" && $cduration!=""  && $sems!=""){

$query = "insert into course_table values ('$cid','$cname','$cduration','$sems')";
$result = mysqli_query($con,$query);

if($result){
  echo '<script>alert("Data inserted successfully")</script>';
}
else{
  echo '<script>alert("Failed to insert data")</script>';;
}
}
}
?>