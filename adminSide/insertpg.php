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
    <h2>Update PG courses</h2>
    <form action="" method="POST">
      <div class="input-box">
        <input type="text" placeholder="Enter Dept ID" name="deptId" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Dept name" name="deptName" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter Course ID" name="courseId" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter course name" name="course" required>
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
$did = $_POST['deptId'];
$dname = $_POST['deptName'];
$cid = $_POST['courseId'];
$cname = $_POST['course'];
$cduration = $_POST['duration'];
$sems = $_POST['semsters'];


if($did!="" && $dname!="" && $cname!="" && $cduration!=""  && $sems!=""){

$dup1 = "select *from pg_course_table where Course_id='$cid' ";
$result1 = mysqli_query($con,$dup1);

if((mysqli_num_rows($result1))<1){

$query = "insert into pg_course_table values ( '$did', '$dname', '$cid','$cname','$cduration','$sems')";
$result = mysqli_query($con,$query);
$dup2="select *from department where Dept_id='$did' ";
$result2 = mysqli_query($con,$dup2);
if((mysqli_num_rows($result2))<1){
  $query2= "insert into department values('$did','$dname')";
 // if (mysqli_errno() == 1062) {
  //  print 'no way!';
  //mysqli_query($con,$query2);
}
if($result){
  echo '<script>alert("Data inserted successfully")</script>';
}

}
else{
  echo '<script>alert("Failed to insert data: maybe record is already in database")</script>';
}
}
}
?>