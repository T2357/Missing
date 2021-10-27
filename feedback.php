
 <!DOCTYPE html>
<html>
<head>
  <title> Feedback Form </title>
  <link rel="stylesheet" type="text/css" href="feedback.css">
  </head>
  
<body style="background-color:#E6E6FA;">

  <section></section>
  <div class="container">
    <form action="FEED_BACK.php" method="post">
    <h1> Give Your Feedback</h1>
    <div class="id">
      <input type="text" name="NAME" placeholder="Full Name">

      </div>
      <div <div class="id">
        <input type="email" name="EMAIL" placeholder="Email Address">

    </div>
    <textarea cols="15" rows="5" placeholder="Enter your opinions here.." name="FEEDBACK"></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</body>



</html>

<style>
*{
   margin:0;
   padding:0;
   font-family: sans-serif;
   box-sizing: border-box;
   outline: none;
   color:#fff;
 }
   section{
     position: absolute;
     height: 100%;
     width: 100%;
   background-image: url(Tilt-Shift-5.jpg);
   background-position: center;
   background-size: cover;
   filter:blur(2px) brightness(30%);
}
body{
  display: flex;
  min-height: 100vh;
  align-items:center;
  justify-content: center;
}
.container{
width: 360px;
background: #000;
box-shadow: 0 0 8px rgba(250,250,250, 0.9);
opacity: 0.8;
}
.container form{
  width:100%;
  text-align: center;
  padding: 25px 20px;
}
form h1{
  padding:10px 0;
}
form .id{
  position: relative;
}
form input{
width:100%;
height:50px;
margin:4px 0;
border:1px solid #5c5c5c;
border-radius:3px;
background: #181717;
padding: 0 15px;
padding-right: 45px;
font-size: 20px;
}
form textarea{
  padding:5px 15px;
  border:1px solid #5c5c5c;
  border-radius: 3px;
  background: #181717;
  font-size:20px;
  width:100%;
  margin:4px 0;
}
form button{
  margin-top: 5px;
  border: none;
  background: #00fff0;
  color:#222;
  padding: 10px 0;
  width:100%;
  font-size: 20px;
  font-weight: 800;
  cursor: pointer;
  border-radius: 3px;
}
form input:focus,,
form textarea:focus{
  border:1px solid #00fff0;
  color:#00fff0;
  transition: all 0.3s ease;
}

form input:focus::placeholder,
form textarea:focus::placeholder{
  padding-left: 4px;
  color:#00fff0;
  transition: all 0.3s ease;
}

</style>
