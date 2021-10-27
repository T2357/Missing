<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
    <form action="CREATELOGIN.php" method="post">
        <div class="imgcontainer">
            <img src=images/logo.jpg>

        </div>

        <div class="container">
            <label><b>LOGIN NAME</b></label>
            <input type="NAME" placeholder="CREATE LOGIN NAME" name="L_NAME"  required>

            <label><b>PASSWORD</b></label>
            <input type="PASSWORD" placeholder="PASSWORD" name="PASSWORD"  required>

            <button type="submit">CREATE</button>

        </div>

    </form>

</div>
<?php include 'LOGIN.php' ?>
<?php include 'footers.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
