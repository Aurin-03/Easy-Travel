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


if(isset($_POST['review_save']))
{
    
    $description = $_POST['description'];
    $name = $_POST['name'];
    

    $query = "INSERT INTO review (description,name) VALUES ('$description','$name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['success'] = "review Added";
        header('location: review.php');
    }

    else
    {
        $_SESSION['status'] = "Not Added";
        header('Location: review.php');
    }
}


?>