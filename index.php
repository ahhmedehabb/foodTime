<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css files-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/normalize.css">
    
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;500;600&family=Poppins:ital,wght@0,400;0,600;1,300;1,400&display=swap" rel="stylesheet">
    <title>Food Time</title>
   <style>
    .join a{
        text-decoration: none;
        color:#fff;
    } 
    .card img{
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
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
    <!-- start slide-->
    <div class="slide">
        <div class="slide-text">
            <h3>Order food online from your favourite local restaurants.</h3>
            <h5>Freshly made food delivered to your door.</h5>
            <form class="location">
            <i  class="vec" ></i>
                <img src="./photos/Vector6.png" alt="" class="icon">
                <input type="search" placeholder="            enter your location" class="loc" name="loc" id="locat"/>
                <button class="btn-search" id="search" >
                   <img src="./photos/Vector.png" alt="">
                    Search
                </button>
            </form>    
            
        </div>
        <div class="dish"><img src="./photos/image 1.png" alt="" />
        </div>
        <img src="./photos/—Pngtree—hand-painted noise green leaf element_4054582 1.png" class="test" />
        <img src="./photos/—Pngtree—hand-painted noise green leaf element_4054582 1.png" class="test1" />
    </div>
    <!--end slide-->
   <!-- start fav-food-->
   <div class="fav">
        <div class="text">
            <h3>Explore your favourite city’s food.</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Ornare massa nunc nibh tristique. Non ligula tristique ut ut libero sit convallis maecenas. At egestas auctor porta mattis.</p>
            <button class="btn-exp">
                Explore
                <img src="./photos/Vector5.png" alt="">
            </button>
        </div>
        <div class="bike">
            <img class="img1"src="./photos/Group 2.png" />
        </div>
    </div>
    <!--end fav-food-->
    <!--start order-->
    
    <div class="product-container">
        <h3>Our Menu</h3>
        <div class="order-container">
          <?php 
            $sql='select * from products';
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    $p_id=$row['product_id'];
                    $p_name=$row['product_name'];
                    $price=$row['price'];
                    $quantity=$row['quantity'];
                    $img=$row['img'];
                    echo '<div class="card">
                        <img src="'.$img.'" >
                        <div class="text-container">
                            <h4>'.$p_name.'</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <h5>'.$price.'.00$</h5>
                            <h5>quantity:'.$quantity.'</h5>
                            <button class="order-now"><a href="product.php ? order_id='.$p_id.'"> Order Now</a></button>
                        </div>
                     </div>';
                }
            }
          ?>
        </div>
    </div>
    <!--end order-->
    <!-- start photo-->
    <div class="photo-container">
        <div class="inner">
            <img src="./photos/image 3.png" class="img" />
            <div class="text-over">
                <h3>Want to be a part of Foodtime?</h3>
                <h5>List your restaurant or shop on foodtime.</h5>
                <button class="btn-inner" id="show">Get Started<img src="./photos/Vector5.png" alt=""></button>
            </div>
        </div>
    </div>
    <!--start hidden div-->
    <div id="my-div" style="display:none">
        <h3>join us</h3>
        <div class="join">
            <button id="btn-log"><a href="login.php"> Login</a></button>
            <button id="btn-reg"><a href="register.php"> SignUp</a></button>
        </div>
    </div>
    <!--end photo-->
    <!--start contact us-->
    <div class="form-container">
        <h3>contact us</h3>
        <div class="content">    
            <form action="" method="post">
                <input class="main-input" type="text" name="name" placeholder="enter your name" />
                <input class="main-input" type="email" name="email" placeholder="enter your email" />
                <textarea class="main-input" name="message" placeholder="enter your message" ></textarea>
                <input type="submit" value="send Message" />
            </form>
        </div> 
    </div>
    <!---end contact us-->
    <!--start app-->
    <div class="app">
        <div class="app-text">
            <h3> Put us in your pocket</h3>
            <p> Download our app from google play or app store and you don’t have to be worry about your food anymore.</p>
            <div- class="app-g">
                <img src="./photos/App Store Black.png">
                <img src="./photos/Google Play Black.png">
            </div->
        </div>
        <div class="app-img">
            <img src="./photos/sushibar-mockup copy 1.png" alt="">
        </div>
    </div>
    <!--end app-->
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
    
    <!--Js-->
    <script src="java.js"></script>
</body>
</html>