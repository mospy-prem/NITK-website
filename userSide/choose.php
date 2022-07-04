<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIRF</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">

</head>
<style>
 *{
  margin:0;
  padding:0;
    }
    .container {
  position: relative;
  text-align: center;
  color: white;
}
.cen{
    margin-left: auto;
    margin-right: auto;
    width: 8em
}
.chk{
    font-family: Arial, Helvetica, sans-serif;
  font-size: 40px; 
  color: green;
}
/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 40px;
  left: 30px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 40px;
}
</style>
<body>

<!--header-->

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
            <li><a href="#home" >Home</a></li>
            

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
            	<li><a href="fee_struct.php">Fee structure</a></li>
            	<li><a href="#Programmes">Programmes</a>
            		<ul>
            			<li><a href="ug.php" target="_blank">UG</a></li>
            			<li><a href="pg.php" target="_blank">PG</a></li>
            		</ul>
            	</li>
            	<li><a href="#Notice">Academic calendar</a></li>
            	<li><a href="#Notice">Scholarships and Awards</a></li>
            	<li><a href="#Notice">Convocation</a></li>
            	<li><a href="#Notice">Notices and Forms</a></li>
            </ul>

        </li>
           <li><a href="#careers">Ranking</a>
		   <ul>
			<li><a href="#" target="_blank">ARIIA</a></li>
			<li><a href="choose.php" target="_blank">NIRF</a></li>
		</ul>
         </ul>
</nav>
</div>



    
        <div class="container">
        <img src="mo.jpg" alt="unable to load image" width="100%" height="500">
        <div class="bottom-left"><b>NIRF </b></div>
</div>
         


        <?php
  include 'db.php';
  $sql="SELECT * from peppa";
  $query=mysqli_query($con,$sql);
   ?>
   <div class="chk">
<ul>
   <?php
  while($info=mysqli_fetch_array($query)){
      ?>

  <li><b>NIRF<?php echo$info['id'] ?></b></li>

       <?php
  }
?>
  </ul>   
 </div> 
 <div class="cen">
 <form class="" action="display_pdf.php"  method="post" enctype="multipart/form-data">
 <label for="">CHOOSE NIRF</label><br>
 YEAR: <input type="number" name="rollno" required> <br>
    <input id="upload" type="submit" name="submit" value="click here"><br>
</form>
</div>

<!--footer-->
<script src="slideshow.js"></script>

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


</body>
</html>