<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

echo "<h2>Welcome ".$_SESSION['username']."</h2>";

echo "<a href='logout.php'>Logout</a>";
?>