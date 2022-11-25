<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

h3{
 text-align:center;
 font-family:Arial;
 font-size:50px
}
</style>
<body>
    
<!-- add data -->



<ul>
<li><a href="">Welcome to Tour&Travels Places</a></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="header.php">About</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li style="float:right"><a class="active" href="login_form.php">Login</a></li>
  <li style="float:right"><a class="active" href="register_form.php">Register</a></li>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>





<!-- form Contact form Data  -->

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  
  </form>
</div>


<!-- end form contact Data -->


      
     
   </div>
</div>
<center>
     <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>

      
<a href="logout.php" class="logout">logout</a>
     </center>
 

</body>
</html>