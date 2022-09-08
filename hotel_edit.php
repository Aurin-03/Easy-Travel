<?php 

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Hotel Indormations </h6>
        </div>
        <div class="card-body">
        <?php
                $server = "localhost";
                $user = "root";
                $pass = "";
                $database = "travelproject";

                $conn = mysqli_connect($server, $user, $pass, $database);
            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM `hotel` WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype="multipart/form-data">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="edit_name" value="<?php echo $row['name'] ?>"
                                    class="form-control" placeholder="Enter Name">

                                <label>Place</label>
                                <input type="text" name="edit_place" value="<?php echo $row['place'] ?>"
                                    class="form-control" placeholder="Enter Place">    

                                <label>Address</label>
                                <input type="text" name="edit_address" value="<?php echo $row['address'] ?>"
                                    class="form-control" placeholder="Enter Address"> 

                                <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
                                    <img src="upload/<?php echo $fetch_update['image']; ?>" alt="">

                                <label>Upload Image</label>
                                <input type="file" name="imageupdate" accept="image/jpg, image/jpeg, image/png" class="form-control">
                            </div>

                            <a href="hotel.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="hupdate_btn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>