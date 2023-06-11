<?php
include 'connect.php';
if(isset($_POST['add']))
{
    $productName=$_POST['pname'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $image=$_POST['img'];
    $sql="insert into products(product_name,price,quantity,img)
    values('$productName','$price',$quantity,'$image')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:dashboard.php");
    }
    else{
        die( mysqli_connect_error());
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
      <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        body{
            background-color: rgb(107, 145, 66,.1);
            margin:0;
            padding: 0;
        }
       .form-container{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
       }
       .form-container h3{
            text-align: center;
            font-family: 'Poppins';
            font-size: 30px;
            color: #3F3F3F;
            margin-top:50px;
        }
        .form-container .content form{
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            flex-basis: 70%;
            width:100%;
        }
        .form-container .content form .main-input{
            padding:15px;
            border: 1px solid rgba(0, 0, 0, 0.3);
            margin-bottom: 35px;
            width: 100%;
        }
        .form-container .content form button{
            background-color:  #396C03;
            display: flex;
            justify-content: center;
            align-items: center;
            border:none;
            margin-left: auto;
            margin-right: auto;
            padding: 15px;
            font-family: 'Poppins';
            font-size: 15px;
            border-radius: 30px;
            color: #FFFFFF;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <div>
            <h3>add Product</h3>
        </div>
        <div class="content">    
            <form action="" method="post">
                <input class="main-input" type="text" name="pname" placeholder="Enter Product Name" />
                <input class="main-input" type="text" name="price" placeholder="Enter Product Price" />
                <input class="main-input" type="text" name="quantity" placeholder="Enter Product quantity" />
                <input class="main-input" type="file" name="img" placeholder="Enter Product Img" accept="image/*">
                <button name="add">Add Product</button>
            </form>
        </div> 
    </div>
</body>
</html>