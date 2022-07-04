<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert PDF</title>
    <style media="screen">
      div{
        border: 2px solid black;
        width: 500px;
        margin-left: 370px;
        margin-top: 50px;
        padding: 30px;
      }
      form{
        margin-left: 70px;
      }
      label{
        font-size: 40px;
        font-weight: bold;
      }
      #pdf{
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
        color:#12D640;
      }
      #upload{
        font-size: 20px;
        font-weight: bold;
        margin-left: 100px;
        color:#12D640;
        background:#6b32a8;
      }
      body{
        background: #1a0118;
      }
    </style>
  </head>
  <body>
    <h1 style="font-size:60px; background-color:tomato;color:white;font-family:arial;text-align:center;">RANKING UPDATION</h1>
    <div class="">
      <form class="" action="insert.php" method="post" enctype="multipart/form-data">
      <span style="color:#12D640;"> YEAR</span>: <input id="upload" type="number" name="rollno" required>
        <br>
        <label for=""><span style="color:#12D640;">Choose Your PDF File</span></label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="upload">
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="pdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);
          $val=$_POST["rollno"];
          $sql="INSERT INTO peppa(id,path) VALUES('$val','$pdf')";
          $query=mysqli_query($con,$sql);

        }

         ?>

      </form>

    </div>

  </body>
</html>