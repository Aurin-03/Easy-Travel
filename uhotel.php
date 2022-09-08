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


<!--showing pictures-->
<div class="hotel">
    <div class="input-group">
        <button name="submit" class="btn"> <a href="uservice.php">Search Here </a> </button>
    </div>
</div>

<section class="show-products">
     
   <div class="box-container">

      <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `hotel`") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <div class="box">
         <img src="admin/upload/<?php echo $fetch_products['image']; ?>"  alt="">
         <div class="name"><?php echo $fetch_products['name']; ?></div>
         <div class="place"><?php echo $fetch_products['place']; ?></div>
         <div class="address"><?php echo $fetch_products['address']; ?></div>
       
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