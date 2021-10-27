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
$NAME = $_POST['NAME'];
$AGE = $_POST['AGE'];
$GENDER = $_POST['GENDER'];
$PICTURE = $_POST['PICTURE'];
$BUILD = $_POST['BUILD'];
$COMPLEXION = $_POST['COMPLEXION'];
$HEIGHT = $_POST['HEIGHT'];
$PLACEOFFOUNDING = $_POST['PLACEOFFOUNDING'];
$DATEOFFOUNDING = $_POST['DATEOFFOUNDING'];
$EMAIL = $_POST['EMAIL'];
if(isset($_POST['MOBILES'])){
$MOBILES = $_POST['MOBILES'];}
$query = "INSERT INTO `identified person case` (`NAME`, `AGE`, `GENDER`, `PICTURE`, `BUILD`, `COMPLEXION`, `HEIGHT`, `PLACEOFFOUNDING`, `DATEOFFOUNDING`,`MOBILES`,`EMAIL`)
Values ('$NAME','$AGE','$GENDER','$PICTURE','$BUILD','$COMPLEXION','$HEIGHT','$PLACEOFFOUNDING','$DATEOFFOUNDING','$MOBILES','$EMAIL')";
$sql=mysqli_query($con,$query);

header("location:identified person case.php");

?>
