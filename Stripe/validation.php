<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'richpanel');

$email = $_POST['email'];
$pass = $_POST['pass'];

$s = " select * from usersignup where email = '$email' && pass = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:plan.php');
}else{
    header('location:signin.php');
    echo "User Not Registered";
}

?>