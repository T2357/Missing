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

$L_NAME = $_POST["L_NAME"];
$PASSWORD = $_POST["PASSWORD"];

$query="SELECT * FROM `LOGIN` WHERE `L_NAME`='$L_NAME' && `PASSWORD`='$PASSWORD'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num==1){
  $_SESSION['L_NAME'] = $L_NAME;
  header("location:index.php");
}
else{
  echo "Login Name or Password is Wrong.";
}
?>
