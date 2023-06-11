<?php 
include 'connect.php';
if(isset($_POST['sign']))
{
    $name=$_POST['name'];
    $userName=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="INSERT into users (name,user_name,email,password)
    values ('$name','$userName','$email','$pass')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
       header('location:login.php');
    }
    else{
        die(mysqli_connect_error());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>register</title>
</head>
<body>
    <div class="logo">
        <h3>Food Time</h3>
    </div>
    <div class="wrapper">
        <h1>Sign Up</h1>
        <div class="form-content">
            <form action="" method="POST">
                <input class="main-input" type="text" name="name" placeholder="enter your name">
                <input class="main-input" type="text" name="username" placeholder="enter your user name">
                <input class="main-input" type="email" name="email" placeholder="enter your e-mail">
                <input class="main-input" type="password" name="pass" placeholder="enter your password">
                <input class="main-input" type="password" name="pass" placeholder="reenter your password">
                <button class="btn" name="sign">Sign UP</button>
            </form>
            
            <div class="member">
                Already a member? <a href="login.php">login here</a>
            </div>
        </div>
    </div>
</body>
</html>