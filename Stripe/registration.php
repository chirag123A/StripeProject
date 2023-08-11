<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:index.php');
} else {
    session_start();
    header('location:signin.php');
}
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'richpanel');

$name = $_POST['name'];
$email = $_POST['email'];
$pass =$_POST['pass'];

$s = " select * from usersignup where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Usename Already Taken";
}else{
    $reg= " insert into usersignup(name , email, pass) values ('$name' , '$email', '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>