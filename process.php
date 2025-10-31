<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$correct_username = 'ducphuong';
$correct_password = '105714827';

if($username =='ducphuong' && $password =='105714827'){$_SESSION['user'] = $username;
header('Location: welcome.php');
} else {
    echo "Invalid login. <a hred='login.php'>Try again</a>";
}
?>