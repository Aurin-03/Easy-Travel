<?php 

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Edit About Us </h6>
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
                
                $query = "SELECT * FROM aboutus WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST">

                           <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_title" value="<?php echo $row['Title'] ?>" class="form-control"
                                    placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <label>Sub Title</label>
                                <input type="text" name="edit_subtitle" value="<?php echo $row['Subtitle'] ?>" class="form-control"
                                    placeholder="Enter Subtitle">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="edit_description" value="<?php echo $row['Description'] ?>"
                                    class="form-control" placeholder="Enter Description">
                            </div>

                            <a href="aboutus.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="update_btn" class="btn btn-primary"> Update </button>

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