<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Status Report</title>
</head>
<body>
  <form class="box" action="statusireport.php" method="POST">
    <h1 style="color:blue">
      STATUS REPORT
    </h1>
    <input type="text" name="NAME_IDENTIFIED" placeholder="Enter Found Person Name" required>
      <input type="text" name="LOCATION" placeholder="PLACE AT WHICH YOU FOUND">
      <input type="text" name="CONDITION" placeholder="CONDITION OF PERSON">
      <input type="text" name="MOBILE_NO" placeholder="MOBILE NUMBER FOR REFERENCE" required>
        <input type="text" name="USERNAME" placeholder="USER NAME" required>
      <div class="form-group">
      <label for="exampleFormControlFile1">Picture</label>
      <input type="file" class="form-control-file" name="PICTURE" required>
    </div>
        <input type="submit" name="SUBMIT">
      </form>

</body>
</html>

<style>

body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image:url('https://images.squarespace-cdn.com/content/v1/5d3929415ec5dd0001920562/1570080379344-5JG8PYC99LJIR68NQK1S/ke17ZwdGBToddI8pDm48kKeSIxxqRjE1JmQnV4lz0iFZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVGiNudOiwNEJtL2gT8Xq9JnDHe6iCNwDNbTZpWUoytV2Cb8BodarTVrzIWCp72ioWw/rart-deco-design-light-gray-solid-color_shop_preview.png');
  background-position:bottom;
  background-size: cover;
}
.box{
  width:300px;
  padding: 30px;
  top:50%;
  left: 50%;
  transform: translate(-50%,-50%);
  position: absolute;
  background: rgba(0, 0, 0,);
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 700;
}
.box input[type="text"],.box input[type="password"]
{
  border:0;
  background: none;
  display: block;
  margin:20px auto;
  text-align: center;
  border: 3px solid rgb(255,0,0);
  padding: 14px 10px;
  width:220px;
  outline:none;
  color:green;
  border-radius: 24px;
  transition: 0.25px;
}

.box input[type="submit"]{
  border:0;
  background: none;
  display: block;
  margin:20px auto;
  text-align: center;
  border: 3px solid rgb(255,0,0);
  padding: 14px 35px;
  outline:none;
  color:white;
  border-radius: 24px;
  transition: 0.25px;
  cursor: pointer;
}
.box input[type="submit"]:hover{
  background:#ffc400ec;
}

</style>
