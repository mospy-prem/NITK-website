<?php
session_start();

//session_destroy();
if(!isset($_SESSION['username'])){
  echo "you are successfully logged out";
header('location:Admin Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment3</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
   
    <link rel="stylesheet" href="css/table.css">
     <style>
*{ margin:0;
     padding: 0;
}
  .title{
  display: flex;
  align-items: center;
  background: #1f3457;
  height: 10vh;
  color: #e6e6e6;
  font-size: 3vh;

}

.button1 {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2 {
  background-color: grey; /* Green */
  border: none;
  color: white;

  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
   
   border-radius: 12px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
</style>


</head>

<body>
  <header>
<div class ="title">
<p style="margin-left: 75vh;font-weight: bold;font-size: 25px;">WELCOME TO NITK ADMIN PANEL</p>
<a href="logout.php" <button class="button2" style="margin-left: 25vw"><h4>Logout</h4></a></button>
</div>
</header>
   
<h1 style="font-size:40px; background-color:tomato;color:white;font-family:arial;text-align:center;">UG UPDATION</h1>

<div>
  <center><table class="content-table">
  <thead>
    <tr>
      <th>courseid</th>
      <th>CourseName</th>
      <th>Duration(years)</th>
      <th>Semsters</th>
      <th>Operations</th>
    </tr>
  </thead>

  <tbody>

<?php
$con = mysqli_connect("localhost","root","","mospy");
if(mysqli_connect_error()){
  echo "cannot connect";

}$query = "SELECT * FROM course_table";
$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_array($result)) {
  echo "
   <tr>
    <td>".$row['courseId']."</td>
    <td>".$row['CourseName']." </td>
    <td>".$row['Duration']."</td>
    <td>".$row['Semsters']." </td>
    <td><a href='delete.php?cid=$row[courseId]'>Delete</td>
</tr>";

}
}
?>
    
  </tbody>
</table>
</center> 

<center><a href="insert.php" class="button1">Add Course</a></button></center>
<h1 style="font-size:40px; background-color:tomato;color:white;font-family:arial;text-align:center;">PG UPDATION</h1>

  <center><table class="content-table">
  <thead>
    <tr>
      
      <th>Department</th>
      <th>Courses</th>
      <th>Duration(years)</th>
      <th>Semsters</th>
    </tr>
  </thead>
  <tbody>
  <?php
 
  $query = "SELECT * FROM department";
$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0)
{
    while($row=mysqli_fetch_array($result)):
     // echo mysqli_num_rows($result);
      $dname = $row['Dept_name'];

      // count the esal in each ename
      $sql2 = "SELECT * FROM pg_course_table INNER JOIN department ON pg_course_table.Dept_name = department.Dept_name where department.Dept_name='$dname'";
      $result2 = mysqli_query($con,$sql2);
     
      if(mysqli_num_rows($result2) > 0)
      {
      $count_result2 = mysqli_num_rows($result2);

      //echo  "prem".$count_result2;
    ?>
      <tr >
        <td rowspan="<?php echo $count_result2; ?>"><?php echo $row['Dept_name']; ?></td>
        <?php
          // loop each esal
          while($row2 = mysqli_fetch_array($result2)):
          ?>
              <td><?php echo $row2['Course_name']; ?></td>
              <td><?php echo $row2['duration']; ?></td>
              <td><?php echo $row2['sems']; ?></td>
              
            </tr>
          <?php
          endwhile; // endwhile for each esal looping
    }
    endwhile; // endwhile for the main looping
    }

    ?>

     
</div>
</tbody>
</table>
</center>
</div>
<center><a href="insertpg.php" class="button1">Add Course</a></button></center><br>
<h1 style="font-size:40px; background-color:tomato;color:white;font-family:arial;text-align:center;">FEE STRUCTURE UPDATION</h1>



<center><table class="content-table">
  <thead>
    <tr>
      <th>YEAR</th>
      <th>Feetype</th>
      <th>Feename</th>
      <th>Operations</th>
    </tr>
  </thead>

  <tbody>

<?php
$con = mysqli_connect("localhost","root","","mospy");
if(mysqli_connect_error()){
  echo "cannot connect";

}$query = "SELECT * FROM fee_table";
$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0)
{

while($row = mysqli_fetch_array($result)) {
  echo "
   <tr>
    <td>".$row['year']."</td>
    <td>".$row['feetype']."</td>
    <td>".$row['pdf']." </td>
    <td><a href='fee_delete.php?cid=$row[year].$row[feetype]'>Delete</td>
</tr>";

}
}


?>
    
  </tbody>
</table>
</center>

<center><a href="fee_insert.php" class="button1">Upload</a></button></center>