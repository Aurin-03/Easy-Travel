<?php 

include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Booked Tickets</h6>
</div>

<div class="card body">


    <div class="table-responsive">
      
    <?php

                $server = "localhost";
                $user = "root";
                $pass = "";
                $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);

                    $sql = " SELECT * FROM `bookticket` ";
                    $result = mysqli_query($conn, $sql);
    ?>


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Travellers</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                  if($result->num_rows > 0)
                  {
                        while($row = mysqli_fetch_assoc($result))
                        {
                  
                ?>
                <tr>
                    <td> <?php echo $row['id']; ?> </td>
                    <td> <?php echo $row['name']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['phone']; ?> </td>
                    <td> <?php echo $row['address']; ?> </td>
                    <td> <?php echo $row['location']; ?> </td>
                    <td> <?php echo $row['date']; ?> </td>
                    <td> <?php echo $row['travelers']; ?> </td>
                    
                    
                </tr>
                <?php
                        }
                    }
                    else{
                         echo "No record Found";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>

</div>




<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>