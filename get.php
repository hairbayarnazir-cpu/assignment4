<!DOCTYPE html>
<html>
<head>
    <title>GET Method</title>
</head>
<body>

<form method="get">

Name:
<input type="text" name="name"><br><br>

Email:
<input type="email" name="email"><br><br>

<input type="submit" value="Submit">

</form>

<?php

if(isset($_GET['name']) && isset($_GET['email']))
{
    $name = $_GET['name'];
    $email = $_GET['email'];

    echo "<h3>User Information</h3>";
    echo "Name: ".$name."<br>";
    echo "Email: ".$email;
}

?>

</body>
</html>