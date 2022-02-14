<section class="my-1">
  <div class="py-1">

    <div class="container-fluid">
     <div class="row">
      <div id="demo" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Missing/images/help.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="images/caro11.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img src="images/caro3.jpeg" alt="Third Slide">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

<div>
  <div class="col-sm">
<br>
    <form action="Missing Person Case.php">
    <input type="submit" value="View Missing Person Data" <INPUT type="text" STYLE="color: white; font-family: Times New Roman;  font-size: 24px; background-color:#0000FF;" size="10" maxlength="30">
  </form><br>
  <form action="Identified Person Case.php">
  <input type="submit" value=" View Found Person Data" <INPUT type="text" STYLE="color: white; font-family: Times New Roman;  font-size: 24px; background-color:#0000FF;" size="10" maxlength="30">
  </form>

</div>
<br>
<div class="col-sm">  <form action="Publish Missing Case.php">
  <input type="submit" value="Register a Missing Person " <INPUT type="text" STYLE="color: white; font-family: Times New Roman;  font-size: 24px; background-color:#0000FF;" size="10" maxlength="30">
  </form>
  <br>
    <form action="Publish Identified Case.php">
    <input type="submit" value="Register a Found Person" <INPUT type="text" STYLE="color: white; font-family: Times New Roman;  font-size: 24px; background-color:#0000FF;" size="10" maxlength="30">
    </form>
    <br>
      <?php include 'Login.php' ?>
  </div>

</div>
</section>
