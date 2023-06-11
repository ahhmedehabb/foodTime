<?php
include 'connect.php';
$id=$_GET['update_id'];
$sqlSelect="select * from products where product_id=$id";
$selectResult=mysqli_query($conn,$sqlSelect);
$row=mysqli_fetch_assoc($selectResult);
$pName=$row['product_name'];
$price=$row['price'];
$quant=$row['quantity'];
$pic=$row['img'];
if(isset($_POST['add']))
{
    $productName=$_POST['pname'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $image=$_POST['img'];
    $sql="update products set product_id=$id,product_name='$productName',price='$price',quantity='$quantity',img='$image'
    where product_id=$id";
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
            <h3>Update Product</h3>
        </div>
        <div class="content">    
            <form action="" method="post">
                <input class="main-input" type="text" name="pname" placeholder="Enter Product Name" value=<?php echo $pName ?> />
                <input class="main-input" type="text" name="price" placeholder="Enter Product Price"  value=<?php echo $price ?> />
                <input class="main-input" type="text" name="quantity" placeholder="Enter Product quantity"  value=<?php echo $quant ?> />
                <input class="main-input" type="file" name="img"  accept="image/*" >
                <button name="add">Update Product</button>
            </form>
        </div> 
    </div>
    <script>
        // Get a reference to our file input
        const fileInput = document.querySelector('input[type="file"]');
    
        // Create a new File object
        const myFile = new File(['product_img'], '<?php echo $pic ?>', {
            type: 'image/plain',
            lastModified: new Date(),
        });
    
        // Now let's create a DataTransfer to get a FileList
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        fileInput.files = dataTransfer.files;
    </script>
</body>
</html>