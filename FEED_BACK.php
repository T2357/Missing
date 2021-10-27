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
$EMAIL = $_POST['EMAIL'];
$FEEDBACK =$_POST['FEEDBACK'];

$query1="INSERT INTO `feedback` (`NAME`, `EMAIL`, `FEEDBACK`) VALUES ('$NAME', '$EMAIL', '$FEEDBACK')";
$sql=mysqli_query($con,$query1);

header("location:FEED_BACK.php");
?>
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
?>
<div>
<?php
$sql = "SELECT * FROM `Feedback`";
$result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result) > 0) {
?>
    <table>

    <tr>

      <td> NAME</td>
      <td> EMAIL </td>
      <td>FEEDBACK</td>

    </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($result)) {
  ?>
  <tr>

      <td><?php echo $row["NAME"]; ?></td>
      <td><?php echo $row["EMAIL"]; ?></td>
      <td><?php echo $row["FEEDBACK"]; ?></td>
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
  header("location:index.php")
  ?>

</div>
