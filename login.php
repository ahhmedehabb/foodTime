<?php
include 'connect.php';
if(isset($_POST['login_button']))
{
    $userName=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where user_name='$userName' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row['user_id']==1 || $row['user_id']==3)
    {
        header('location:dashboard.php');
    }
    else{
        header('location:index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css files-->
    <link rel="stylesheet" href="css/login.css">
    
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Login</title>
</head>
<body>
    <div class="logo">
        <h3>Food Time</h3>
    </div>
    <div class="wrapper">
        <h1>Login</h1>
        <div class="form-content">
            <form method="post">
                <input class="main-input" type="text" name="username" placeholder="enter your user name" required>
                <input class="main-input" type="password" name="password" placeholder="enter your password" required>
                <button class="btn" name="login_button">Login</button>
            </form>
            <div class="member">
                not a member? <a href="register.php">create new account</a>
            </div>
        </div>
    </div>
</body>
</html>