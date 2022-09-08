<?php 

session_start();

if (!isset($_SESSION['username'])) {
    
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

    <link rel="stylesheet" href="style1.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

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
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#Home>Home</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#About>About</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#>Destinations</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#>Services</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#gallery>Gallery</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#blogs>Blogs</a>
                      <a data-aos="zoom-in-left" data-aos-delay="300" href=#>Contact Us</a>
                      <!--
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="#login-form" class="loginbtn" onclick="document.getElementById('login-form').style.display='block'">LogIn</a> -->
                      <a data-aos="zoom-in-left" data-aos-delay="300" href="index.php" class="loginbtn" >LogIn</a>
        </nav>
</header> 
     
     <!--log in er ager code-->
     <!--blog in er jnno-->
     

     <!--home start-->

         <div class="Home" id="Home">

            <div class="content">
               
                <h3>to the unknown</h3>
                <p>for your adventures</p>
            </div>
         </div>



     <!--home end-->

      <!--about start-->
      <div class="About" id="About">
        <div class="video-container" data-aos="fade-right" data-aos-delay="300">
            <video src="image/about1.mp4" muted autoplay loop class="video"></video>
            <div class="controls">
                <button class="control-btn" data-src="image/about1.mp4"></button>
                <button class="control-btn" data-src="image/about2.mp4"></button>
                <button class="control-btn" data-src="image/about3.mp4"></button>
            </div>
        </div>
    
        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <h4>why choose us?</h4>
            <h3>Nature's Majesty Awaits You</h3>
            <p>We will provide you comprehensive range of travel services in specific term of your desire rather.</p>
            
        </div>
      </div>
          

      <!--about end-->

      <!--gallery start-->
        
<div class="gallery" id="gallery">

    <div class="heading" data-aos="zoom-in-up" data-aos-delay="100">
        <h4>Our Gallery</h4>
        <h1>We Record Memories</h1>
    

    <div class="slides slowFade">
        <div class="slide">
            <img src="image/gallery1.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="image/gallery2.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="image/gallery3.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="image/gallery4.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="image/gallery5.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="image/gallery6.jpg" alt="img"/>
        </div>
    </div>
    </div>
    
</div>
    <!--gallery end-->

    <!--blogs start-->

    <div class="blogs" id="blogs">

        <div class="heading">
            <h4>Blogs & Posts</h4>
            <h1>The Untold Stroies</h1>
        
        <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="images">
                <img src = "image/blog1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem blahblahblahblah </p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="images">
                <img src = "image/blog2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem blahblahblahblah </p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="images">
                <img src = "image/blog3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="link">Life is a journey, not a destination</a>
                <p>Lorem blahblahblahblah </p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> 21st may, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by admin</a>
                </div>
            </div>
        </div>
     </div>

       </div>
    </div>
<!--blogs end-->


    <!--review start-->
       <div class="review">

          <div class="content" data-aos="fade-right" data-aos-delay="300">
             <h4>Testimonials</h4>
             <h3>Good news from our clients</h3>
             <p>We care for your opinions</p>
          </div>

          <div class="box-container" data-aos="fade-left" data-aos-delay="600">

             <div class="box">
                <p>Travel without any worries</p>
                <div class="user">
                    <img src="image/pic-1.png" alt="">
                    <div class="info">
                        <h3>John Deo</h3>
                        <span>Designer</span>
                    </div>
                </div>
             </div>

             <div class="box">
                <p>Can book my ticket any time!</p>
                <div class="user">
                    <img src="image/pic-2.png" alt="">
                    <div class="info">
                        <h3>Swarnali</h3>
                        <span>Engineer</span>
                    </div>
                </div>
             </div>
            
             
             <div class="box">
                <p>Best Travel website ever!</p>
                <div class="user">
                    <img src="image/pic-3.png" alt="">
                    <div class="info">
                        <h3>John Deo</h3>
                        <span>Designer</span>
                    </div>
                </div>
             </div>

             <div class="box">
                <p>I enjoy your all services.</p>
                <div class="user">
                    <img src="image/pic-4.png" alt="">
                    <div class="info">
                        <h3>John Deo</h3>
                        <span>Designer</span>
                    </div>
                </div>
             </div>

          </div>
       </div>
    <!--review end-->
   
    



    

</div>

</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


    <script>

        AOS.init({
            duration: 800,
            offset:150,
        });
    
    </script>



</body>
</html>
<!DOCTYPE html>