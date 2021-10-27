<!DOCTYPE html>
<html>
<head>
<title>BRING BACK TO HOME</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:	#E6E6FA; color:#5B84B1FF;">
  <?php include 'navbar.php' ?>
  <h5 style="font-size:35px;">MISSING PERSON LIST<br>STATUS:OPEN</h5>;
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db_name = "outlook";
  // Create connection
  $con = mysqli_connect($servername, $username, $password, $db_name);

  if($con){

  }else {
    echo "no connection";
  }
  ?>

  <?php
  $sql = "SELECT * FROM `MISSING PERSON CASE`";
  $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0) {
 ?>
 <input type="search" id="myInput" name=""  placeholder="Search By names.." title="Type in a name" onkeyup="myFunction()">
 <input type="search" id="myInput1" name="" onkeyup="myFunction()" placeholder="Search By Age" title="Age">
 <input type="search" id="myInput2" name="" onkeyup="myFunction()" placeholder="Search for City" title="city">

      <table id="mytable" style="background-color:lightgreen; border: 3px solid  #1273;">

      <tr style="border: 2px solid  #1273;">

        <td style="border: 2px solid  #1273;"><b> NAME</b></td>
        <td style="border: 2px solid  #1273;"><b>AGE</b></td>
        <td style="border: 2px solid  #1273;"><b> GENDER</b> </td>
        <td style="border: 2px solid  #1273;"> <b>PICTURE</b> </td>
        <td style="border: 2px solid  #1273;"><b> BUILD</b> </td>
        <td style="border: 2px solid  #1273;"><b> COMPLEXION</b> </td>
        <td style="border: 2px solid  #1273;"><b> HAIR COLOR</b> </td>
        <td style="border: 2px solid  #1273;"><b> HEIGHT</b> </td>
        <td style="border: 2px solid  #1273;"><b> SPECIAL ATTRIBUTES</b> </td>
        <td style="border: 2px solid  #1273;"><b> CITY</b> </td>
        <td style="border: 2px solid  #1273;"><b> LOCALITY </b></td>
        <td style="border: 2px solid  #1273;"><b> DATE OF MISSING</b> </td>
        <td style="border: 2px solid  #1273;"><b> MOBILE</b> </td>
        <td style="border: 2px solid  #1273;"><b> EMAIL</b> </td>

      </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>

        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["NAME"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["AGE"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["GENDER"]; ?></b></td>
      <td style="border: 2px solid  #1273;font-size:20px;"><?php   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['PICTURE'] ).'" height="200" width="200"/>';?></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["BUILD"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["COMPLEXION"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["HAIRCOLOR"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["HEIGHT"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["SPECIALATTRIBUTE"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["CITY"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["LOCALITY"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["DATEOFMISSING"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["MOBILE"]; ?></b></td>
        <td style="border: 2px solid  #1273;font-size:20px;"><b><?php echo $row["EMAIL"]; ?></b></td>

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
    ?>
    <script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>
  <h5 style="font-size :30px;color:orange">Have you Found someone Report here<a href="status.php"><button type="button" class="btn btn-info" style="font-size :35px">Status</button></a></h5>
  <?php include 'footers.php' ?>
</body>
</html>
