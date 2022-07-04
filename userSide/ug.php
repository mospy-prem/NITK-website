<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment3</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/footer.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;

  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>

</head>
<body>
<header>
<div class ="title">
<i class="fa fa-envelope" style="font-size:23px; padding: 5px;margin-left: 20vw;"></i>	<p> registrar@nitk.ac.in </p>
<i class="fa fa-phone" style="font-size:18px;  padding: 25px; margin-left: 2vw;">0824 247 4000</i>
</div>
</header>

<div class="container2">
	<img src="images/1.png" alt="" style="width: 100vw;">
</div>
<div class="nav">
   <nav class="navbar">
        <ul>
            <li><a href="index.html" >Home</a></li>
            

            <li><a href="#Institute">Institute</a>
             <ul>
              <li><a href="#Fee">History</a></li>
              <li><a href="#">Campus</a>
              <li><a href="#">About us</a>
              <li><a href="#">Events Calendar</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#Notice">Contact us</a></li>
            
            </ul>
            </li>
            <li><a href="#Adminstration">Adminstration</a>
               <ul>
              <li><a href="#">Organizational chart</a></li>
              <li><a href="#">Chairperson</a>
              <li><a href="#">Director</a>
              <li><a href="#">Deputy Director</a></li>
              <li><a href="#">Registrars</a></li>
              <li><a href="#Notice">Deans</a></li>
              <li><a href="#Notice">Visitor</a></li>
            
            </ul>
            </li>
            <li><a href="#Academics">Academics</a>
            <ul>
              <li><a href="#Fee">Fee structure</a></li>
              <li><a href="#Programmes">Programmes</a>
                <ul>
                  <li><a href="ug.php" target="">UG</a></li>
                  <li><a href="pg.php" target="">PG</a></li>
                </ul>
              </li>
              <li><a href="#Notice">Academic calendar</a></li>
              <li><a href="#Notice">Scholarships and Awards</a></li>
              <li><a href="#Notice">Convocation</a></li>
              <li><a href="#Notice">Notices and Forms</a></li>
            </ul>

        </li>
           <li><a href="#careers">careers</a></li>
         </ul>
</nav>
</div>
<div>
	<center><table class="content-table">
  <thead>
    <tr>
      <th>S.no</th>
      <th>CourseName</th>
      <th>Duration(years)</th>
      <th>Semsters</th>
    </tr>
  </thead>
 <tbody>

<?php
$con = mysqli_connect("localhost","root","","mospy");
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
    
</tr>";

}
}
?>
    
  </tbody>
</table>
</center>
</div>
<!--<center><button class="button button2">Shadow on Hover</button></center>-->
<footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>NITK Surathkal</h4>
          <ul>
            <li style="color: #bbbbbb;">NH 66, Srinivasnagar</li>
            <li style="color: #bbbbbb;">Surathkal, Mangalore</a></li>
            <li style="color: #bbbbbb;">Karnataka 575025</a></li>
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>Our Campus</h4>
          <ul>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Guest House (GH)</a></li>
            <li><a href="#">Health Care Centre (HCC)</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Virtual Tour</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#">TEQIP</a></li>
            <li><a href="#">Career Development Centre (CDC)</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="iris.php">IRIS Portal</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>