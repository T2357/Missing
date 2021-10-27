<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "outlook";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db_name);

if($con){
  echo "connection successful";
}else {
  echo "no connection";
}

mysqli_select_db($con,'outlook');

$ADMIN = $_POST["ADMINNAME"];
$PASSWORD = $_POST["PASSWORD"];

$query="SELECT * FROM `admin` WHERE `ADMINNAME`='$ADMIN' && `PASSWORD`='$PASSWORD'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num==1){
  $_SESSION['ADMINNAME'] = $ADMIN;
  header("location:adminpage.php");
}
else{
  echo "Login Name or Password is Wrong.";
}
?>
