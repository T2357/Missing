
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:#E6E6FA">
<?php include 'navbar.php' ?>
<div>
<style>
    /*set border to the form*/

    form {
        border: 3px solid #f1f1f1;
    }
    /*assign full width inputs*/

    input[type=name],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    /*set a style for the buttons*/

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 6px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/

    button:hover {
        opacity: 1.2;
    }
    /*set extra style for the cancel button*/

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }
    /*centre the display image inside the container*/

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }
    /*set image properties*/

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }
    /*set padding to the container*/

    .container {
        padding: 16px;
    }
    /*set the forgot password text*/

    span.psw {
        float: right;
        padding-top: 16px;
    }
    /*set styles for span and cancel button on small screens*/

    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>

<body>

    <!--Step 1 : Adding HTML-->
    <form method="post" action="Sign_up.php">
        <div class="imgcontainer">
            <img src=images/logo.JPG alt="logo" height="250" width="600">

        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="name" placeholder="Enter Username" name="UNAME" id="UNAME" required>

            <label><b>Email</b></label>
            <input type="email" placeholder="Email" name="EMAIL" id="EMAIL" required>

            <label><b>Mobile</b></label>
            <input type="numeric" placeholder="Mobile Number" name="MOBILE" id="MOBILE_N" required>

            <button type="submit">REGISTER</button>

        </div>

    </form>

</div>
<H5>Already a registered User</H5>
<?php include 'login.php' ?>
<?php include 'footers.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
