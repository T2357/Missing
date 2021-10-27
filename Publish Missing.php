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
$RESIDENCE = $_POST['RESIDENCE'];
$BUILD = $_POST['BUILD'];
$COMPLEXION = $_POST['COMPLEXION'];
$HAIRCOLOR = $_POST['HAIRCOLOR'];
$HEIGHT = $_POST['HEIGHT'];
$SPECIALATTRIBUTE = $_POST['SPECIALATTRIBUTE'];
$FIR = $_POST['FIR'];
$POLICESTATION = $_POST['POLICESTATION'];
$CITY = $_POST['CITY'];
$LOCALITY = $_POST['LOCALITY'];
$DATEOFMISSING = $_POST['DATEOFMISSING'];
$MOBILE = $_POST['MOBILE'];
$EMAIL = $_POST['EMAIL'];
$query1 = "INSERT INTO `missing person case` (`NAME`, `AGE`, `GENDER`, `PICTURE`, `RESIDENCE`, `BUILD`, `COMPLEXION`, `HAIRCOLOR`, `HEIGHT`, `SPECIALATTRIBUTE`, `FIR`, `POLICESTATION`, `CITY`, `LOCALITY`, `DATEOFMISSING`, `MOBILE`, `EMAIL`)
Values ('$NAME','$AGE','$GENDER','$PICTURE','$RESIDENCE','$BUILD','$COMPLEXION','$HAIRCOLOR','$HEIGHT','$SPECIALATTRIBUTE','$FIR','$POLICESTATION','$CITY','$LOCALITY','$DATEOFMISSING','$MOBILE','$EMAIL')";

$query2 = "SELECT `USER_ID` FROM `user`";
$query3 = "INSERT INTO `missing person case`(`USER_ID`)Values('$USER_ID')";
$sql=mysqli_query($con,$query1);
header ("location:index.php");
?>
