<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "travelproject";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charser="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1.0">
    <title>Easy Travel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="ugallerycss.css">
    <link rel="stylesheet" href="style1.css">
    <!--swipper link-->
    <linkrel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="http://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="http://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js" defer></script>
</head>
   
<body>

<!--php-->


<!--header section starts-->

<header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-paper-plane"></i>EasyTravel </a>
      
         <nav class="navbar">
                      
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#destination>Destinations</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#services>Services</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="ugallery.php">Gallery</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="ublog.php">Blogs</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#contact>Contact Us</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="review.php" data-toggle="modal" data-target="#reviewmodal">Review</a>
                      <!--
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="#login-form" class="loginbtn" onclick="document.getElementById('login-form').style.display='block'">LogIn</a> -->
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="logout.php" class="loginbtn" >Logout</a>
        </nav>
         
         <a data-aos="zoom-in-left" data-aos-delay="300" href="#book-form" class="bookbtn">Book Now</a>
</header> 

<!--showing pictures-->

<section class="show-products">

   <div class="box-container">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `gallery`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <div class="box">
         <img src="admin/upload/<?php echo $fetch_products['image']; ?>"  alt="">
         <div class="name"><?php echo $fetch_products['description']; ?></div>
         
         
      </div>
      <?php
         }
      }
      ?>
   </div>

   </section>




   <script>

AOS.init({
    duration: 800,
    offset:150,
});

</script>



</body>
</html>
<!DOCTYPE html>