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
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 100%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

#h3{
   font-size:30px
}

#p{
   font-size:15px;
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


<!-- close data -->


<div class="container">
   <div class="content">
   <h2>About Information</h2>
<p>You will Get all Detailes In the form of Data .</p>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQ5acarkMqUuj0v6dVhOgNIv8FDqyK0XdrHNbO41iUgt0hCPbMBzl8GJG21PiiS7K8GD8BCmU2OJwohi_TNA7MEbg" alt=""  width="100%">
      <h3 id="h3">Gurudwara Shri Bangla Sahib</h3>
      <p id="p">Gurudwara Bangla Sahib is one of the most prominent Sikh gurdwaras, or Sikh house of worship, in Delhi, India, and known for its association with the eighth Sikh Guru, Guru Har Krishan, as well as the holy pond inside its complex, known as the "Sarovar." It was first built as a small shrine by Sikh General Sardar Baghel Singh in 1783, on the bungalow donated by king Raja Jai Singh of Amer,</p>

    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.holidayrider.com/wp-content/uploads/2019/01/optimized-twzz-1200x900.jpg" alt="" width="100%">
      <h3 id="h3">Lotus Temple Information</h3>
      <p id="p">The Lotus Temple, located in Delhi, India, is a Baháʼí House of Worship that was dedicated in December 1986. Notable for its flowerlike shape, it has become a prominent attraction in the city. Like all other Bahá’í Houses of Worship, the Lotus Temple is open to all, regardless of religion or any other qualification</p>

    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="https://images.thrillophilia.com/image/upload/s--h4B-AQNo--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/040/923/original/1556284488_shutterstock_214982728.jpg.jpg" alt="" width="100%">
      <h3 id="h3">Gateway of India (25 km from Mumbai Airport)</h3>
      <p id="p">One of the most distinguishing landmarks that signify the city, the Gateway of India came into existence in the year 1924 during the British Raj to celebrate the arrival of King George V and Queen Mary to Bombay. The structure marks the area as one of India’s major ports which formally symbolised elements of British grandeur. Located in the waterfront area of Apollo Bunder, today it is one of the most popular tourist places in Mumbai for people from all over the globe who flock just for a glance at this monument.</p>

    </div>
  </div>




  <div class="column">
    <div class="card">
      <img src="https://images.thrillophilia.com/image/upload/s--f_EHE_Dc--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/040/939/original/1521614653_places_to_visit_in_Mumbai.jpg.jpg" alt="" width="100%">
      <h3 id="h3">Marine Drive (22 km from Mumbai Airport)</h3>
      <p id="p">Popularly referred to as the Queen’s Necklace, Marine Drive is a 4 km long promenade located in South Bombay. One of the most beautiful roads in Mumbai, a birds-eye view of this stretch looks magnificent at night with the lights making the entirety resemble a queen’s necklace. This beautiful place in Mumbai comes alive in the evenings when people relax and admire the brilliant view or take a walk on the promenade overlooking the Arabian Sea that is surprisingly therapeutic to the soul. Chai-wallas, chat-wallas are added bonuses to the place making it another must-visit tourist place as well as an important part of the Mumbai nightlife.</p>

    </div>
  </div>
</div>
      
      
      <p>your email : <span><?php echo $_SESSION['usermail']; ?></span></p>

      
      <a href="logout.php" class="logout">logout</a>
 
   </div>
</div>

</body>
</html>