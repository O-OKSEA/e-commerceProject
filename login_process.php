<?php

session_start();

include 'connection.php'; 
include 'user_protection.php';


if(isset($_POST['submit'])){
    $userName=$_POST['userName'];
    $password_typed=$_POST['password'];

    $sql="SELECT id, username, password FROM users WHERE username=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$userName);
    $stmt->execute();
    $result=$stmt->get_result();
    
    if($row=$result->fetch_assoc()){

    if(password_verify($password_typed, $row['password'])){
        $_SESSION['user_id']=$row['id'];
        $_SESSION['username']=$row['username'];
        header('location:homepage.php');
        exit();
    }
    else{
        header('location:login.php?error=Incorrect_Password');
        exit();
    }
   }
   else{
    header('location:login.php?error=Username_Not_Found!');
    exit();
   }
}
else{
    header('location:login.php');
    exit();
}


?>