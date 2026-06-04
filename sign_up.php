<?php

session_start();
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label>Username</label>
        <input type="text" placeholder="Enter Your Username" name="username">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Your Email">
        <label>Password</labed>
        <input type="password" name="password" placeholder="Create a Password">
    </form>
</body>
</html>