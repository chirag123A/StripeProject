<?php

session_start();
if (isset($_SESSION['username'])){
    header('location:index.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="app.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="validation.php" method="post">
        <div class="heading"><h4>Login to your Account</h4></div>
        <label for="email" class="form"><b>Email</b></label>
        <input type="email" name="email">
        <label for="pass" class="form"><b>Password</b></label>
        <input type="password" name="pass">
        <input type="checkbox" value="lsRememberMe" name="rememberMe"> <label for="rememberMe">Remember me</label>
        <br></br>
        <input type="submit" value="Login" onclick="lsRememberMe()">
        <div class="signin">New to MyApp? <a href="index.php">Sign Up</a></div>
    </form>
</body>
</html>
<?php
}
?>