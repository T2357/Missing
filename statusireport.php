<?php
$servername = "localhost";
$username = "root";
$password = "root";
// Create connection
$con = mysqli_connect($servername, $username, $password);

if($con){
  echo "connection successful";
}else {
  echo "no connection";
}
mysqli_select_db($con,'outlook');
$NAME_IDENTIFIED = $_POST['NAME_IDENTIFIED'];
$LOCATION = $_POST['LOCATION'];
$CONDITION = $_POST['CONDITION'];
$MOBILE_NO = $_POST['MOBILE_NO'];
$PICTURE = $_POST['PICTURE'];
$USERNAME = $_POST['USERNAME'];
$query1 = "INSERT INTO `status` (`NAME_IDENTIFIED`,`LOCATION`, `CONDITION`, `MOBILE_NO`,`PICTURE`,`USERNAME`)
VALUES ('$NAME_IDENTIFIED','$LOCATION','$CONDITION','$MOBILE_NO','$PICTURE','$USERNAME')";


$sql=mysqli_query($con,$query1);
header("location:index.php")
?>
