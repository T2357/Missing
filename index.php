<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>

<title>MISSING PERSON WEBSITE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:#E6E6FA; color:red">
  <?php include 'navbar.php' ?><div>
    <a href="adminl.php" style="color:red">Are you a Admin</a>
      <p class="text-right" style="font-size:20px; color:red"> Welcome USER <?php echo $_SESSION['L_NAME']; ?></p>
  <?php include 'Carousel.php' ?>
  <h4 style="color:#0000FF">
Among all the persons who are reported to be missing, actually only few of them are out of our reach. Most of them are waiting somewhere for someone to help them connect with their family.
<b>That “Someone” can be you or anyone like us.If you wish to do something visit our site.</h4>
  <a href='https://www.stat-counter.org/'>Stat-Counter</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=6f8c229d713578900410ab2d591c31c3f1cd3821'></script>
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/774949/t/2"></script>
  <?php include 'footers.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
