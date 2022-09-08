<?php 

include('includes/header.php');
include('includes/navbar.php');
?>



<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Reviews</h6>
</div>

<div class="card body">


    <div class="table-responsive">
      
    <?php

                $server = "localhost";
                $user = "root";
                $pass = "";
                $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);

                    $sql = "SELECT * FROM review";
                    $result = mysqli_query($conn, $sql);
    ?>


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Name</th>
                    
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
                    <td> <?php echo $row['description']; ?> </td>
                    <td> <?php echo $row['name']; ?> </td>
                    
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