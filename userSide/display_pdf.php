<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display pdf</title>
</head>
<style>
    .container {
  position: relative;
  text-align: center;
  color: white;
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


<?php
include 'db.php';
  $val=$_POST["rollno"];
  $sql="SELECT * from peppa WHERE id='$val'";
  $query=mysqli_query($con,$sql);
   
  while($info=mysqli_fetch_array($query)){
      ?>
           <div class="container">
            <img src="mo.jpg" alt="unable to load image" width="100%" height="500">
            <div class="bottom-left"><b>NIRF <?php echo $info['id'] ;?></b></div>
            </div>
    <embed type="application/pdf" src="pdf/<?php echo $info['path'] ; ?>" width="100%" height="800">

  <?php
  }

?>


</body>
</html>