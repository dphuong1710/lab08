<?php
session_start();
if(isset($_SESSION['user'])) {
    include 'header.inc';
    echo "<h1>Welcome, ".$_SESSION['user']. "!</h1>";
    include 'footer.inc';
} else {
    header('Location:login.php');
}
?>