<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  label {
  color:  #AF002A	;
  font-weight: bold;
  padding: 4px;
  text-transform: uppercase;
  font-family: Verdana;
}
h3{
  color:  #AF002A	;
}
p{
  color:  #AF002A	;
}
  </style>
</head>
<body style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCjWuXc3TyxQpFRU_pVtMsZsBN6es8pKdOWA&usqp=CAU');background-repeat: no-repeat;  background-position: center; background-size: cover;">
<?php include 'navbar.php' ?>
<h3>ADD A FOUND PERSON CASE</h3>
<form action="Publish Identified.php" method="post">
  <div class="form-group row">
    <label for="inputName" class="col-lg-5 col-md-5 col-10 col-form-label">Name</label>
    <div class="col-sm-8">
      <input type="Name" class="form-control" name="NAME" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAge" class="col-lg-5 col-md-5 col-10 col-form-label">Age</label>
    <div class="col-sm-8">
      <input type="Age" class="form-control" name="AGE" placeholder="Age">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputgender" class="col-lg-5 col-md-5 col-10 col-form-label">Gender</label>
    <div class="col-sm-8">
      <input type="Gender" class="form-control" name="GENDER" placeholder="Gender">
    </div>
  </div>
  <div class="form-group row">
      <label for="inputDate" class="col-lg-5 col-md-5 col-10 col-form-label">Date of Founding</label>
      <div class="col-sm-8">
        <input type="date" class="form-control" name="DATEOFFOUNDING" placeholder="Date">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputCity" class="col-lg-5 col-md-5 col-10 col-form-label">Place of Founding</label>
        <div class="col-sm-8">
          <input type="City" class="form-control" name="PLACEOFFOUNDING" placeholder="Place of founding">
        </div>
      </div>
          <div class="form-group row">
              <label for="inputBody" class="col-lg-5 col-md-5 col-10 col-form-label">Body</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="BUILD" placeholder="Body-build">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputComplexion" class="col-lg-5 col-md-5 col-10 col-form-label">Complexion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="COMPLEXION" placeholder="Complexion">
                </div>
              </div>
                <div class="form-group row">
                    <label for="inputHeight" class="col-lg-5 col-md-5 col-10 col-form-label">Height</label>
                    <div class="col-sm-8">
                      <input type="Height" class="form-control" name="HEIGHT" placeholder="Height in ft & inches or Cm">
                    </div>
                  </div>

    <div class="form-group">
    <label for="exampleFormControlFile1">Picture(less than 20kbs)</label>
    <input type="file" class="form-control-file" name="PICTURE">
  </div>
  <h3><b>Please Provide your contact information for Identification </b></h3>
  <div class="form-group row">
    <label for="inputMobile" class="col-lg-5 col-md-5 col-10 col-form-label">Mobile Number</label>
    <div class="col-sm-8">
      <input type="Numeric" class="form-control" name="MOBILES" placeholder="Mobile Number">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-lg-5 col-md-5 col-10 col-form-label">Email ID</label>
    <div class="col-sm-8">
      <input type="Email" class="form-control" name="EMAIL" placeholder="Email Id">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-1">
      <button type="submit" class="btn btn-primary">Add Case</button>
    </div>
  </div>
</form>
</div>
<div>
  <h3>Only Registered Users can post a case</h3>
    <h3>New user?<a href="signup.php">SignUp Now</h3></a>
    <?php include 'login.php'?>
</div>
</div>
</div>
<?php include 'footers.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
