<?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "login"; 
    $con = mysqli_connect($host, $user, $password, $db_name);
    $Username = $_POST['Username'];
    $email = $_POST['Email'];  
    $password = $_POST['password'];
    $sql = "INSERT INTO userdetails(Username, Email, Password) VALUES ('$Username','$email','$password')";  
    $result = mysqli_query($con, $sql);  
    if($result==TRUE){
        echo "New record created successfully";
    }
    else {
        echo "Error: ";
    }
?>