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
$con = mysqli_connect("localhost","root","","admin_login");
if(mysqli_connect_error()){
  echo "cannot connect";
}
$query = "SELECT * FROM course_table";
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
 $query = "SELECT *FROM `pg_course_table`";
$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0)
{
    while($row=mysqli_fetch_array($result)):
      $dname = $row['Dept_name'];

      // count the esal in each ename
      $sql2 = "SELECT * FROM pg_course_table WHERE Dept_name = '$dname'";
      $result2 = mysqli_query($con,$sql2);
      $count_result2 = mysqli_num_rows($result2);

    
    ?>
      <tr >
        <td rowspan="<?php echo $count_result2; ?>"><?php echo $row['Dept_name']; ?></td>
        <?php
          // loop each esal
          while($row2 = mysqli_fetch_array($result2)):
          ?>
              <td><?php echo $row2['Course_name']; ?></td>
            </tr>
          <?php
          endwhile; // endwhile for each esal looping
    endwhile; // endwhile for the main looping
    }?>

     
</div>
</tbody>
</table>
</center>
</div>
<center><a href="insertpg.php" class="button1">Add Course</a></button></center>
