<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$database = "travelproject";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

if(isset($_POST['update_btn']))
{  
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $subtitle = $_POST['edit_subtitle'];
    $description = $_POST['edit_description'];

    $query = "UPDATE aboutus SET Title='$title', Subtitle='$subtitle', Description='$description'  WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "About us Updated";
        header('location: aboutus.php');
    }

    else
    {
        $_SESSION['status'] = "Not Updateds";
        header('Location: aboutus.php');
    }

}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM aboutus WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: aboutus.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: aboutus.php'); 
    }    
}



if(isset($_POST['about_save']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];

    $query = "INSERT INTO aboutus (Title,Subtitle,Description) VALUES ('$title','$subtitle','$description')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "About us Added";
        header('location: aboutus.php');
    }

    else
    {
        $_SESSION['status'] = "Not Added";
        header('Location: aboutus.php');
    }
}

if(isset($_POST['gallery_save'])){

    //$name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = $_POST['description'];

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'upload/'.$image;
 
 
 
    //$select_product_name = mysqli_query($conn, "SELECT name FROM `gallery` WHERE name = '$name'") or die('query failed');
    if(file_exists("upload/" . $_FILES["image"]["name"]))
    {
               $store = $_FILES["image"]["name"];
               $_SESSION['status'] = "Image already exists '.$store.'";
               header('location: gallery.php'); 
    }
    else{
        $add_product_query = mysqli_query($conn, "INSERT INTO `gallery`(description, image) VALUES('$description',  '$image' )") or die('query failed');
 
       if($add_product_query){
          if($image_size > 20000000000){
             $message[] = 'image size is too large';
          }else{
             move_uploaded_file($image_tmp_name, $image_folder);
             //move_uploaded_file($Php_tmp_name, $php_folder);
             $message[] = 'image added successfully!';
             header('location: gallery.php');
          }
       }else{
          $message[] = 'image can not be added!';
       }
    }
       
    
 }


 if(isset($_POST['gupdate_btn'])){

    $update_p_id = $_POST['edit_id'];
    $description = $_POST['edit_description'];

    $update_image = $_FILES['imageupdate']['name'];
    $update_image_tmp_name = $_FILES['imageupdate']['tmp_name'];
    $update_image_size = $_FILES['imageupdate']['size'];
    $update_folder = 'upload/'.$update_image;
    $update_old_image = $_POST['update_old_image'];
 
    mysqli_query($conn, "UPDATE `gallery` SET description = '$description', image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
 
 
    if(!empty($update_image)){
       if($update_image_size > 200000000){
          $message[] = 'image file size is too large';
       }else{
          mysqli_query($conn, "UPDATE `gallery` SET  description = '$description', image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
          move_uploaded_file($update_image_tmp_name, $update_folder);
          unlink('upload/'.$update_old_image);
 
        
       }
    }
 
    header('location:gallery.php');
 
 }


if(isset($_GET['gdelete_btn']))
{
    $delete_id = $_GET['gdelete_id'];
    mysqli_query($conn, "DELETE FROM `gallery` WHERE id = '$delete_id'") or die('query failed');
    header('location:gallery.php');
}

/*blog er jonno */

if(isset($_POST['blog_save'])){

    //$name = mysqli_real_escape_string($conn, $_POST['name']);
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'upload/'.$image;
 
 
 
    //$select_product_name = mysqli_query($conn, "SELECT name FROM `gallery` WHERE name = '$name'") or die('query failed');
    if(file_exists("upload/" . $_FILES["image"]["name"]))
    {
               $store = $_FILES["image"]["name"];
               $_SESSION['status'] = "Image already exists '.$store.'";
               header('location: blog.php'); 
    }
    else{
        $add_product_query = mysqli_query($conn, "INSERT INTO `blog`(title,description,date, image) VALUES('$title','$description', '$date', '$image' )") or die('query failed');
 
       if($add_product_query){
          if($image_size > 2000000){
             $message[] = 'image size is too large';
          }else{
             move_uploaded_file($image_tmp_name, $image_folder);
             //move_uploaded_file($Php_tmp_name, $php_folder);
             $message[] = 'image added successfully!';
             header('location: blog.php');
          }
       }else{
          $message[] = 'image can not be added!';
       }
    }
       
    
 }

 if(isset($_POST['bupdate_btn'])){

    $update_p_id = $_POST['edit_id'];
    $update_t_id = $_POST['edit_title'];
    $description = $_POST['edit_description'];
    $update_d_id = $_POST['edit_date'];

    $update_image = $_FILES['imageupdate']['name'];
    $update_image_tmp_name = $_FILES['imageupdate']['tmp_name'];
    $update_image_size = $_FILES['imageupdate']['size'];
    $update_folder = 'upload/'.$update_image;
    $update_old_image = $_POST['update_old_image'];
 
    mysqli_query($conn, "UPDATE `blog` SET title = '$update_t_id',description = '$description', date = '$update_d_id', image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
 
 
    if(!empty($update_image)){
       if($update_image_size > 200000000){
          $message[] = 'image file size is too large';
       }else{
          mysqli_query($conn, "UPDATE `blog` SET title = '$update_t_id',description = '$description', date = '$update_d_id', image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
          move_uploaded_file($update_image_tmp_name, $update_folder);
          unlink('upload/'.$update_old_image);
 
        
       }
    }
 
    header('location:blog.php');
 
 }

if(isset($_GET['bdelete_btn']))
{
    $delete_id = $_GET['bdelete_id'];
    mysqli_query($conn, "DELETE FROM `blog` WHERE id = '$delete_id'") or die('query failed');
    header('location:blog.php');
}


/* hotel er jonno*/

if(isset($_POST['hotel_save'])){

    //$name = mysqli_real_escape_string($conn, $_POST['name']);
    $name = $_POST['name'];
    $place = $_POST['place'];
    $address = $_POST['address'];

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'upload/'.$image;
 
 
 
    //$select_product_name = mysqli_query($conn, "SELECT name FROM `gallery` WHERE name = '$name'") or die('query failed');
    if(file_exists("upload/" . $_FILES["image"]["name"]))
    {
               $store = $_FILES["image"]["name"];
               $_SESSION['status'] = "Image already exists '.$store.'";
               header('location: hotel.php'); 
    }
    else{
        $add_product_query = mysqli_query($conn, "INSERT INTO `hotel`(name,place,address, image) VALUES('$name','$place', '$address', '$image' )") or die('query failed');
 
       if($add_product_query){
          if($image_size > 2000000){
             $message[] = 'image size is too large';
          }else{
             move_uploaded_file($image_tmp_name, $image_folder);
             //move_uploaded_file($Php_tmp_name, $php_folder);
             $message[] = 'image added successfully!';
             header('location: hotel.php');
          }
       }else{
          $message[] = 'image can not be added!';
       }
    }
       
    
 }

 if(isset($_POST['hupdate_btn'])){

   $update_p_id = $_POST['edit_id'];
   $update_t_id = $_POST['edit_name'];
   $description = $_POST['edit_place'];
   $update_d_id = $_POST['edit_address'];

   $update_image = $_FILES['imageupdate']['name'];
   $update_image_tmp_name = $_FILES['imageupdate']['tmp_name'];
   $update_image_size = $_FILES['imageupdate']['size'];
   $update_folder = 'upload/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   mysqli_query($conn, "UPDATE `hotel` SET name = '$update_t_id',place = '$description', address = '$update_d_id', image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');


   if(!empty($update_image)){
      if($update_image_size > 200000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `hotel` SET name = '$update_t_id',place = '$description', address = '$update_d_id', image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('upload/'.$update_old_image);

       
      }
   }

   header('location:hotel.php');

}

if(isset($_GET['hdelete_btn']))
{
    $delete_id = $_GET['hdelete_id'];
    mysqli_query($conn, "DELETE FROM `hotel` WHERE id = '$delete_id'") or die('query failed');
    header('location:hotel.php');
}

?>