<?php
include 'connect.php';
if(isset($_GET['delete_id']))
{
    $id=$_GET['delete_id'];
    $sql="DELETE FROM products where product_id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:dashboard.php');
    }else{
        die(mysqli_connect_error());
    }
}

?>