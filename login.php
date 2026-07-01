<?php
session_start();

if(isset($_POST['username']))
{
    $_SESSION['username'] = $_POST['username'];

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="post">

Username:
<input type="text" name="username">

<input type="submit" value="Login">

</form>

</body>
</html>