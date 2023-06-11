<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;500;600&family=Poppins:ital,wght@0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
    <title>Product</title>
    <style>
        .p-img img{    
        border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.5);;
        }
    </style>
</head>
<body>
     <!-- start nav bar-->
     <nav class="container">
        <div class="logo">
            <h3>Food Time</h3>
        </div>
        <div class="links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#" style="display: inline;">About Us</a></li>
                <li><a href="#">EN</a></li>
                <li><a  href="login.php" class="login" target="_blank">Login</a></li>
            </ul>
        </div>
    </nav>
    <!--end navbar-->
    <!--our product-->

    <div class="p-container">
        <?php 
            $id=$_GET['order_id'];
            $sql="select * from products where product_id=$id";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            $pName=$row['product_name'];
            $price=$row['price'];
            $quant=$row['quantity'];
            $pic=$row['img'];
            echo ' <div class="p-img">
            <img src="'.$pic.'" alt="">
             </div>
            <div class="info">
            <h4>'.$pName.'</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, eveniet dolor aspernatur culpa dolorem voluptas</p>
            <div class="price">
                <h5>'.$price.'.00$</h5>
                <h5>quantity:'.$quant.'</h5>
                <button class="order-now"><a href="order.php ? order_id='.$id.'"> Order Now</a></button>
            </div>
            </div>';
        ?>
       
    </div>

    <!--end our product-->
     <!--start footer-->

     <div class="footer-container">
        <div class="logo">
            <h2>Food Time</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Odio amet natoque tortor convallis. Bibendum sapien suspendisse ipsum urna malesuada elit. Bibendum vitae nibh scelerisque sed aliquam ullamcorper est.</p>
        </div>
        <div class="our-links">
            <div class="quick">
                <h4>Quick Links</h4>
                <h5>Browse Foodtime</h5>
                <h5>Browse Food tim</h5>
                <h5>Registrations</h5>
            </div>
            <div class="about">
                <h4>About</h4>
                <h5>About us`</h5>
                <h5>Minssion</h5>
                <h5>Contact</h5>
            </div>
            <div class="social">
                <h4>Social</h4>
                <h5>Instagram</h5>
                <h5>Facebook</h5>
                <h5>twitter</h5>
            </div>
        </div>
      
    </div>
    <footer class="foot">
        <p>© 2023 Nayeemur R Sakib</p>
    </footer>
    <!--end footer--> 
</body>
</html>