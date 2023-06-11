<?php 
include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
      <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <style>
        *{
            -webkit-box-sizing:border-box ;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        body{
            background-color: rgb(107, 145, 66,.1);
            }
         .container{
            height: 750px;
            width:100%;
            display:flex;
            align-items: center;
            justify-content: space-between;
        }
        .left{
            height:100%;
            width: 20%;
            background-color:rgb(255,249,242);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:flex-start;
            position: relative;
        }
        .logo{
            width:100%;
            border-bottom: 2px solid #000;
        }
        .logo h3{
            text-align: center;
            margin-top:50px;
            margin-bottom: 50px;
            font-family: 'Merienda';
            font-size: 25px;
            line-height: 90%;
            color: #396C03;
        }
        .btn{
            font-size:15px;
            margin-top :7rem;
            padding:10px 0;
            border-radius: 15px;
            outline:none;
            border:none;
            width:45%;
            color:#fff;
            cursor:pointer;
            background-color: #006a6c;

        }
        .btn:hover{
            background-color: rgba(17,107,143,.877);
        }
          /*table css*/
        .container .table-container{
            width:75%;
            height:650px;
        }
        .container .table-container table{
            width: 100%;
            border-collapse: collapse;
            overflow-x:auto ;
        }
        th {
           background-color: #006a6c;
           color:#fff;
        }
        td{
            background-color:#c5f0ee ;
            color:#000;
        }
        .container .table-container table,th,td{
            font-weight: 400;
            height: 70px;
            text-align: center;
            border : 2px solid #ffff;
            font-family: 'Poppins';
           
        }
        .edit,.del{
            cursor: pointer;
            width: 70px;
            height: 30px;
            text-align: center;
            margin: 10px;
            border-radius: 10px;
            font-size:15px;
            border:none;
            font-family: 'Courier New', Courier, monospace;
            color:aliceblue;
        }
        a{
            text-decoration: none;
            font-family: 'Poppins';
            color:#ffff;}
        .del{
            background-color: #8c1221;
        }
        .edit{
            background-color: #7c9b9c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="logo">
                <h3>Food Time</h3>
            </div>
            <button class="btn"><a href="insert.php">New Product</a></button>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>price</th>
                    <th>Quantity</th>
                    <th>Product IMG</th>
                    <th>operation</th>
                </tr>
                <?php
                    $sql="select * from products";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $p_id=$row['product_id'];
                            $p_name=$row['product_name'];
                            $price=$row['price'];
                            $quantity=$row['quantity'];
                            $img=$row['img'];
                            echo '<tr>
                                <td>'.$p_id.'</td>
                                <td>'.$p_name.'</td>
                                <td>'.$price.'</td>
                                <td>'.$quantity.'</td>
                                <td><img src="'.$img.'" width="100px" height="100px"></td>
                                <td>
                                <button class="edit" name="edit"><a href="update.php ? update_id='.$p_id.'">Update</a></button>
                                <button class="del" name="delete" onclick="myDel()"><a href="delete.php ? delete_id='.$p_id.'">Delete</a></button>
                                </td>                         
                                </tr>';
                        }
                    }
                ?>
            </table>
        </div>
    </div>

    
    <script>
        function myDel() {
        alert("product deleted successfully");
        }
    </script>
   
</body>
</html>