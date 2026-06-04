<?php

include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        #d{
            &:hover{
                cursor:pointer;
            }
        }
    </style>
</head>
<body>
    
<body 
 class="bg-gray-100 h-screen flex flex-col justify-center items-center">
    
    <form 
    class="bg-white p-6 rounded-lg shadow-md w-80 flex flex-col gap-4" 
    action="registration.php" 
    method="post">

        <div>
            <label 
             class="block text-sm font-medium text-blue-700">
             Username
            </label>
            <input 
            class="w-full mt-1 p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
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
            <label 
             class="block text-sm font-medium text-blue-700">
             Password
            </label>
            <input 
            class="w-full mt-1 p-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
            type="password" 
            name="password" 
            placeholder="Enter your Password" 
            required>
        </div>

        <div>
            <input 
            id="d" 
            type="submit" 
            value="Log In"
            class="border px-2 py-1.5 bg-blue-400 text-white rounded font-medium transition duration-200">
        </div>

    </form>
<p>Don't have an account yet? <a href="sign_up.php" class="hover:text-blue-400, underline">Sign Up</a></p>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    header('location:homepage.php');
}
else{
    header('location:sign_up.php');
}
?>