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




<div class="book-form" id="book-form">

    <form method="POST">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Name</span>
            <input type="text" id="name" name="name" value=""  class="form-control name" placeholder="Name" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Email</span>
            <input type="text" id="email" name="email" value=""  class="form-control" placeholder="Email" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Phone</span>
            <input type="text" id="phone" name="phone" value=""  class="form-control" placeholder="Phone" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Address</span>
            <input type="text" id="address" name="address" value=""  class="form-control" placeholder="Address" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>Location</span>
            <input type="text" id="location" name="location" value=""  class="form-control" placeholder="Location" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>Date</span>
            <input type="date" id="date" name="date" value=""  class="form-control" placeholder="Date" required>
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span> Number of travelers</span>
            <input type="number" id="travelers" name="travelers" value=""  class="form-control" placeholder="Number of travelers" required>
        </div>
        <div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" name="book" class="btn" value="Book now" />
        </div>



        <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);

                    

                    if(isset($_POST["book"]))
                    {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        $location = $_POST['location'];
                        $date = $_POST['date'];
                        $travelers = $_POST['travelers'];
                        
                        
                    
                    
                            $query = "INSERT INTO `bookticket` (`name`, `email`,`phone`, `address`, `location`,`date`, `travelers`) VALUES ('{$name}',  '{$email}','{$phone}',  '{$address}',  '{$location}','{$date}',  '{$travelers}');";
                            $query_run = mysqli_query($conn, $query);

                            
                    
                        
                    }


            ?>



    </form>

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