<?php

session_start();
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    
<body>
    
    <form 
    class="shadow-md" 
    action="login_process.php" 
    method="post">

        <div>
            <label>
             Username
            </label>
            <input 
            class="focus:ring-2 focus:ring-blue-500" 
            type="text" 
            name="userName" 
            placeholder="Enter Your Username" 
            required>
        </div>

        <!-- <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input class="w-full mt-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" placeholder="Enter your Email" required>
        </div> -->

        <div>
            <label>
             Password
            </label>
            <input 
            class="focus:ring-2 focus:ring-blue-500" 
            type="password" 
            name="password" 
            placeholder="Enter your Password" 
            required>
        </div>

        <div>
            <input 
            type="submit" 
            value="Log In">
        </div>

    </form>
<p class="text-blue-900">Don't have an account yet? <a href="sign_up.php" class="hover:text-blue-400 underline">Sign Up</a></p>
</body>
</html>

