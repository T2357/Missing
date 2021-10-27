<?php
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
if(isset($_POST['L_NAME'])){
$L_NAME = $_POST['L_NAME'];}
if(isset($_POST['PASSWORD'])){
$PASSWORD = $_POST['PASSWORD'];}

$query="INSERT INTO `login` (`L_NAME`, `PASSWORD`) VALUES ('$L_NAME', '$PASSWORD')";
$sql=mysqli_query($con,$query);

header("location:index.php");
?>
