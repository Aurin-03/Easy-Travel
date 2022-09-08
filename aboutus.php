<?php 

include('includes/header.php');
include('includes/navbar.php');
?>



<!-- Modal -->
<div class="modal fade" id="addaboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <form action="code.php" method="POST">     
      <div class="modal-body">

        <div class="from-group">
            <label> Title </label>
            <input type= "text" name="title" class="form-control" placeholder="Enter Title">
        </div>

        <div class="from-group">
            <label>Sub Title </label>
            <input type= "text" name="subtitle" class="form-control" placeholder="Enter Sub Title">
        </div>

        <div class="from-group">
            <label> Description </label>
            <input type= "text" name="description" class="form-control" placeholder="Enter Description">
        </div>

      </div>
      <div class="modal-footer">
        <a href="aboutus.php" class="btn btn-danger"> Close </a>
        <button type="submit" name="about_save" class="btn btn-primary">Save</button>
      </div>
</form>  
    </div>
  </div>
</div>




<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">About Us
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addaboutus">
              Add  </button>

        </h6>
</div>

<div class="card body">

<!--msg print-->
<?php
      if(isset($_SESSION['success']) && $_SESSION['success'] != '')
      {
        echo '<h2 class="bg-primary text-white">  '.$_SESSION['success'].' </h2>';
        unset($_SESSION['success']);
      }

      if(isset($_SESSION['status']) && $_SESSION['status'] != '')
      {
        echo '<h2 class="bg-danger text-white">  '.$_SESSION['status'].' </h2>';
        unset($_SESSION['status']);
      }
?>
<!--msg print-->
    <div class="table-responsive">
      
    <?php

                $server = "localhost";
                $user = "root";
                $pass = "";
                $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);

                    $sql = "SELECT * FROM aboutus";
                    $result = mysqli_query($conn, $sql);
    ?>


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                    <td> <?php echo $row['Title']; ?> </td>
                    <td> <?php echo $row['Subtitle']; ?> </td>
                    <td> <?php echo $row['Description']; ?> </td>
                    <td>
                        <form action="about_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> Delete</button>
                        </form>
                    </td>
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