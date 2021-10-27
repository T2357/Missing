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
$query = "SELECT `VISITOR_ID` FROM `visitor` ";
$result = mysqli_query($connection,$query);
$total_visitor=mysqli_num_rows($result);

?>
<div class="wrapper">
  <h5> Visitor Count
  </h5><h5><? php echo $total_visitor;?> </h5>
</div>
