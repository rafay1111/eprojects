<?php


include('config.php');



$id = $_GET['id'];

$query = "DELETE FROM `testing` where `t_id` = $id";

$result=mysqli_query($conn,$query);

if($result)
{
    header("location:testing.php");
}









?>