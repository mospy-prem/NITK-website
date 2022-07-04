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
    <h2>UPDATION OF FEE STRUCTURE</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="input-box">
        <input type="number" placeholder="YEAR" name="year"required>
      </div>
      
      <div class="input-box">
            Select fee type: <select name="feetype">
        <option value="HOSTEL">HOSTEL</option>
        <option value="INSTITUTE">INSTITUTE</option>
        </select>
      </div>
      <div class="input-box">
        <input id="pdf" type="file"  name="pdf" value="" required>
      </div>

      <div class="input-box button">
        <input id="upload" type="submit" value="UPLOAD" name="submit">
      </div>
      
    </form>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $pdf=$_FILES['pdf']['name'];
  $pdf_type=$_FILES['pdf']['type'];
  $pdf_size=$_FILES['pdf']['size'];
  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
  $location="C:/xampp/htdocs/complab/userSide/pdf/";
  $pdf_store=$location.$pdf;

  move_uploaded_file($pdf_tem_loc,$pdf_store);
  $cid = $_POST['year'];
//$pdf = $_POST['pdf'];
$feetype=$_POST['feetype'];

$query = "insert into fee_table values ('$cid','$feetype','$pdf','$cid.$feetype')";
$result = mysqli_query($con,$query);

if($result){
  echo '<script>alert("Data inserted successfully")</script>';
}
else{
  echo '<script>alert("Failed to insert data")</script>';
}
}
?>


