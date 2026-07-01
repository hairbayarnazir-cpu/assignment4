<!DOCTYPE html>
<html>
<head>
    <title>POST Method</title>
</head>
<body>

<form method="post">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" value="Login">

</form>

<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "<h3>Login Details</h3>";
    echo "Username: ".$username."<br>";
    echo "Password: ".$password;
}

?>

</body>
</html>