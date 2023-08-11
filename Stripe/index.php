<?php

session_start();
if (isset($_SESSION['username'])){
    header('location:signin.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
    <form action="registration.php" method="post">
        <div class="heading"><h4>Create Account</h4></div>
        <label for="name" class="form"><b>Name</b></label>
        <input type="name" name="name">
        <label for="email" class="form"><b>Email</b></label>
        <input type="email" name="email">
        <label for="pass" class="form"><b>Password</b></label>
        <input type="password" name="pass">
        <input type="checkbox" value="lsRememberMe" name="rememberMe"> <label for="rememberMe">Remember me</label>
        <br></br>
        <input type="submit" value="Sign Up" onclick="lsRememberMe()">
        <div class="signin">Already have an account? <a href="signin.php">Login</a></div>
    </form>
</body>
</html>
<?php
}
?>