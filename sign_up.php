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
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <form action="registration.php" method="post" >
       <div>
            <label>
                Username
            </label>
            <input 
            class="focus:ring-2 focus:ring-blue-500"
            type="text" 
            placeholder="Enter Your Username" 
            name="username"
            required>
       </div>
        <div>
            <label>
             Email
            </label>
            <input 
            class="focus:ring-2 focus:ring-blue-500"
            type="email" 
            name="email" 
            placeholder="Enter Your Email"
            required>
        </div>
        <div>
            <label>
             Password
            </label>
            <input 
            class="focus:ring-2 focus:ring-clue-500"
            type="password" 
            name="password" 
            placeholder="Create a Password"
            required>
        </div>
        <div>
            <input
            type="submit"
            value="Sign Up">
        </div>
    </form>
    <p class="text-blue-900">Already have an account? <a href="login.php" class="hover:text-blue-400 underline">Log In</a>
</body>
</html>