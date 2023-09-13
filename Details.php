<?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login"; 
    $con = mysqli_connect($host, $user, $password, $db_name);
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $sql = "select *from userdetails where Email = '$email' and Password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count == 1){  
        echo "<h1><center> Login successful </center></h1>";  
    } 
    else {
        echo "Invalid username or password.";
      } 
?>