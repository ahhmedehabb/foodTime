<?php 
include 'connect.php';
$id=$_GET['order_id'];
$sqlSelect="select quantity from products where product_id=$id";
$selectResult=mysqli_query($conn,$sqlSelect);
$row=mysqli_fetch_assoc($selectResult);
$quant=$row['quantity'];
if(isset($_GET['order_id']))
{
    $quant--;
    $sql="UPDATE products set quantity=$quant where product_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:index.php');
    }else{
        die(mysqli_connect_error());
    }
}
?>