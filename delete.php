<?php


include('config.php');



$id = $_GET['id'];

$query = "DELETE FROM `products` where `p_id` = $id";

$result=mysqli_query($conn,$query);

if($result)
{
    header("location:products.php");
}









?>