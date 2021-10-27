<?php
session_start();
 ?>
 <?php include 'connection.php' ?>
<!DOCTYPE html>
<html>
<head>

<title>ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:	#E6E6FA; color:#5B84B1FF;">
  <?php include 'navbar.php' ?><div>
  <a href="admino.php"><button type="button" class="btn btn-danger" style="font-size:20px; color:yellow">LogOut</button></a>
      <p class="text-right" style="font-size:20px; color:BLUE"> Welcome Admin <?php echo $_SESSION['ADMINNAME']; ?></p>
<P STYLE="FONT-SIZE:20PX">MISSING PERSON REPORTING INFO</P><BR><div>
  <?php
  $sql = "SELECT * FROM `MISSING PERSON CASE`";
  $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0) {
 ?>
 <input type="search" id="myInput" name=""  placeholder="Search By names.." title="Type in a name" onkeyup="myFunction()">
 <input type="search" id="myInput1" name="" onkeyup="myFunction()" placeholder="Search By Age" title="Age">
 <input type="search" id="myInput2" name="" onkeyup="myFunction()" placeholder="Search for City" title="city">

      <table id="mytable" style="background-color:lightgreen; border: 3px solid  #1273;">

      <tr style="border: 2px solid  #1273;">

        <td style="border: 2px solid  #1273;"><b> NAME</b></td>
        <td style="border: 2px solid  #1273;"><b>AGE</b></td>
        <td style="border: 2px solid  #1273;"><b> GENDER</b> </td>
        <td style="border: 2px solid  #1273;"> <b>PICTURE</b> </td>
        <td style="border: 2px solid  #1273;"><b> BUILD</b> </td>
        <td style="border: 2px solid  #1273;"><b> COMPLEXION</b> </td>
        <td style="border: 2px solid  #1273;"><b> HAIR COLOR</b> </td>
        <td style="border: 2px solid  #1273;"><b> HEIGHT</b> </td>
        <td style="border: 2px solid  #1273;"><b> SPECIAL ATTRIBUTES</b> </td>
        <td style="border: 2px solid  #1273;"><b> CITY</b> </td>
        <td style="border: 2px solid  #1273;"><b> LOCALITY </b></td>
        <td style="border: 2px solid  #1273;"><b> DATE OF MISSING</b> </td>
        <td style="border: 2px solid  #1273;"><b> MOBILE</b> </td>
        <td style="border: 2px solid  #1273;"><b> EMAIL</b> </td>
        <td style="border: 2px solid  #1273;"><b> FIR</b> </td>
        <td style="border: 2px solid  #1273;"><b> RESIDENCE</b> </td>
        <td style="border: 2px solid  #1273;"><b> POLICESTATION</b> </td>


      </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>

        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["NAME"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["AGE"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["GENDER"]; ?></b></td>
      <td style="border: 2px solid  #1273;font-size:20px;"><?php   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['PICTURE'] ).'" height="200" width="200"/>';?></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["BUILD"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["COMPLEXION"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["HAIRCOLOR"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["HEIGHT"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["SPECIALATTRIBUTE"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["CITY"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["LOCALITY"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["DATEOFMISSING"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["MOBILE"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["EMAIL"]; ?></b></td>
       <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["FIR"]; ?></b></td>
       <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["RESIDENCE"]; ?></b></td>
       <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["POLICESTATION"]; ?></b></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>

     <?php
    }
    else{
        echo "No result found";
    }
    ?>
</div><br>
<P  STYLE="FONT-SIZE:20PX">IDENTIFIED PERSON REPORTING INFO</P>
<div>
  <?php
  $sql = "SELECT * FROM `IDENTIFIED PERSON CASE`";
  $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0) {
 ?>
 <input type="text" id="myInput" name="" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
 <input type="text" id="myInput" name="" onkeyup="myFunction()" placeholder="Search By Age" title="Age">
 <input type="text" id="myInput" name="" onkeyup="myFunction()" placeholder="Search for City" title="city">

      <table id="mytable"  style="background-color:lightgreen; border: 3px solid  #1273;">

      <tr style="border: 3px solid  #1273;">

        <td style="border: 3px solid  #1273;"><b> NAME</b></td>
        <td style="border: 3px solid  #1273;"><b>AGE</b></td>
        <td style="border: 3px solid  #1273;"><b> GENDER</b> </td>
        <td style="border: 3px solid  #1273;"><b> PICTURE</b> </td>
        <td style="border: 3px solid  #1273;"><b> BUILD</b> </td>
        <td style="border: 3px solid  #1273;"><b> COMPLEXION</b> </td>
        <td style="border: 3px solid  #1273;"><b> HEIGHT </b></td>
        <td style="border: 3px solid  #1273;"><b> PLACE OF FOUNDING </b></td>
        <td style="border: 3px solid  #1273;"><b> DATE OF FOUNDING </b></td>
        <td style="border: 3px solid  #1273;"><b>MOBILE </b></td>
        <td style="border: 3px solid  #1273;"><b>EMAIL </b></td>

      </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>

        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["NAME"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["AGE"]; ?></b></td>
        <td style="border: 3px solid  #1273;"><b><?php echo $row["GENDER"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;">   <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['PICTURE'] ).'" height="200" width="200"/>';?></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["BUILD"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["COMPLEXION"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["HEIGHT"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["PLACEOFFOUNDING"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["DATEOFFOUNDING"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["MOBILES"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["EMAIL"]; ?></b></td>

    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
     <?php
    }
    else{
        echo "No result found";
    }
    ?>

  </div><BR>
    <P  STYLE="FONT-SIZE:20PX">STATUS INFO</P>
  <div>
    <?php
    $sql = "SELECT * FROM `status`";
    $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0) {
   ?>


        <table id="mytable"  style="background-color:lighTGREEN; border: 3px solid  #1273;">

        <tr style="border: 3px solid  #1273;">

          <td style="border: 3px solid  #1273;"><b> PICTURE</b> </td>
          <td style="border: 3px solid  #1273;"><b> NAME OF MISSING PERSON</b> </td>
          <td style="border: 3px solid  #1273;"><b> NAME OF IDENTIFIED PERSON</b> </td>
          <td style="border: 3px solid  #1273;"><b> CONDITION </b></td>
          <td style="border: 3px solid  #1273;"><b> PLACE OF FOUNDING </b></td>
          <td style="border: 3px solid  #1273;"><b> MOBILE_NO.</b></td>
          <td style="border: 3px solid  #1273;"><b>USER NAME </b></td>
        </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>


          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['PICTURE'] ).'" height="100" width="100"/>';?></td>
          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo $row["NAME_MISSING"]; ?> </td>
          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo $row["NAME_IDENTIFIED"]; ?> </td>
          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo $row["CONDITION"]; ?></td>
          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo $row["LOCATION"]; ?></td>
          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo $row["MOBILE_NO"]; ?></td>
          <td style="border: 3px solid  #1273;font-size:20px;"><?php echo $row["USERNAME"]; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
      </table>
       <?php
      }
      else{
          echo "No result found";
      }
      ?>

  </div>
  <P style="font-size:20px">USER INFO</P>
  <div>
    <?php
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0) {
   ?>


        <table id="mytable"  style="background-color:lightblue; border: 2px solid #E74C3C;">

        <tr style="border: 3px solid #E74C3C;">

          <td style="border: 3px solid  #E74C3C;"><b>UNAME </b></td>
          <td style="border: 3px solid  #E74C3C;"><b> EMAIL</b></td>
          <td style="border: 3px solid  #E74C3C;"><b> MOBILE</b></td>

        </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td style="border: 3px solid  #E74C3C;font-size:20px;"><?php echo $row["UNAME"]; ?></td>
          <td style="border: 3px solid  #E74C3C;font-size:20px;"><?php echo $row["Email"]; ?></td>
          <td style="border: 3px solid  #E74C3C;font-size:20px;"><?php echo $row["MOBILE"]; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
      </table>
       <?php
      }
      else{
          echo "No result found";
      }
      ?>

  </div>
  <p style="font-size:20px">FEEDBACK INFO</p>
  <div>
    <?php
    $sql = "SELECT * FROM `feedback`";
    $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) > 0) {
   ?>


        <table id="mytable"  style="background-color:lightblue; border: 2px solid #E74C3C;">

        <tr style="border: 3px solid #E74C3C;">

          <td style="border: 3px solid  #E74C3C;"><b>NAME </b></td>
          <td style="border: 3px solid  #E74C3C;"><b> EMAIL</b></td>
          <td style="border: 3px solid  #E74C3C;"><b> FEEDBACK</b></td>

        </tr>
      <?php
      $i=0;
      while($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td style="border: 3px solid  #E74C3C;font-size:20px;"><?php echo $row["NAME"]; ?></td>
          <td style="border: 3px solid  #E74C3C;font-size:20px;"><?php echo $row["EMAIL"]; ?></td>
          <td style="border: 3px solid  #E74C3C;font-size:20px;"><?php echo $row["FEEDBACK"]; ?></td>
      </tr>
      <?php
      $i++;
      }
      ?>
      </table>
       <?php
      }
      else{
          echo "No result found";
      }
      ?>
  </div><br>
  <h5 style="font-size:28px; color:BLUE;"><b>As a Admin of the Site you have the duty to send emails to user and act as a mediator.</b></h5>
  <div style="font-size:20px; color:blue;">
    <form action="mailto:someone@example.com" method="post" enctype="text/plain">
Name:<br>
<input type="text" name="name"><br>
E-mail of User:<br>
<input type="text" name="mail"><br>
Message:<br>
<input type="text" name="comment" size="50"><br><br>
<input type="submit" value="Send" class="btn btn-success">
<input type="reset" value="Reset" class="btn btn-success" >
</form>

  </div>
  <?php include 'footers.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
