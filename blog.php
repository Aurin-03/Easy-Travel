<?php 

include('includes/header.php');
include('includes/navbar.php');
?>



<!-- Modal -->
<div class="modal fade" id="gallerymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a New Picture</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

<!--insertion-->

 <form action="code.php" method="POST" enctype="multipart/form-data">     
      <div class="modal-body">

        <div class="from-group">
            <label> Title </label>
            <input type= "text" name="title" class="form-control" placeholder="Enter Title">
        </div>

        <div class="from-group">
            <label> Description </label>
            <input type= "text" name="description" class="form-control" placeholder="Enter Description">
        </div>

        <div class="from-group">
            <label> Date </label>
            <input type= "text" name="date" class="form-control" placeholder="Enter Date">
        </div>

        <div class="from-group">
            <label> Upload an image </label>
           <!-- <input type= "file" name="gallery_images" id="gallery_images" accept=".jpg, .jpeg, .png"
              class="form-control" > -->

              <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="form-control" required>
        </div>

      </div>
      <div class="modal-footer">
        <a href="blog.php" class="btn btn-danger"> Close </a>
        <button type="submit" name="blog_save" class="btn btn-primary">Save</button>
      </div>
</form>  
    </div>
  </div>
</div>




<div class="container-fluid">

<div class="cardd shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Blog
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallerymodal">
             Post  </button>

        </h6>
</div>

<div class="card body">

<!--msg print-->
<?php
      if(isset($_SESSION['success']) && $_SESSION['success'] != '')
      {
        echo '<h2 class="bg-primary text-black">  '.$_SESSION['success'].' </h2>';
        unset($_SESSION['success']);
      }

      if(isset($_SESSION['status']) && $_SESSION['status'] != '')
      {
        echo '<h2 class="bg-danger text-black">  '.$_SESSION['status'].' </h2>';
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

                    $sql = "SELECT * FROM blog";
                    $result = mysqli_query($conn, $sql);
    ?>


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
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
                    <td> <?php echo $row['title']; ?> </td>
                    <td> <?php echo $row['description']; ?> </td>
                    <td> <?php echo $row['date']; ?> </td>
                    
                   <!--  '<img src="upload/'.$row['images'].' "  width= "100px;" height ="100px;"alt="Image">'  -->
                    <td> <img src="upload/<?php echo $row['image']; ?> "width= "100px;" height ="100px;" alt="">  </td>
                    <td>
                        <form action="blog_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="code.php" method="get">
                                            <input type="hidden" name="bdelete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="bdelete_btn" class="btn btn-danger"> Delete</button>
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