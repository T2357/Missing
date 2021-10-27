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
if(isset($_POST["UNAME"])){
$UNAME = $_POST['UNAME'];}
$MOBILE = $_POST['MOBILE'];
$EMAIL = $_POST['EMAIL'];


$query1 ="INSERT INTO `user` ( `UNAME`, `MOBILE`, `Email`) VALUES ( '$UNAME', '$MOBILE', '$EMAIL')";

$sql=mysqli_query($con,$query1);

header('location:Create.php');
?>
