<?php
     $dbhost = 'localhost';
     $dbuser = 'username';
     $dbpass = 'password';
     $db = '2btask';
     $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
     
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
     }
?>