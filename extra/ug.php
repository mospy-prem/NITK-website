<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment3</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    
    <link rel="stylesheet" href="table.css">
    
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>
<body>
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
</div>