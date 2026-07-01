<?php

if(isset($_POST['color']))
{
    setcookie("favoriteColor", $_POST['color'], time()+3600);

    header("Location: ".$_SERVER['PHP_SELF']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Color</title>
</head>
<body>

<form method="post">

Choose Your Favorite Color:

<input type="text" name="color">

<input type="submit" value="Save">

</form>

<?php

if(isset($_COOKIE['favoriteColor']))
{
    echo "<h3>Welcome Back!</h3>";

    echo "Your favorite color is: ".$_COOKIE['favoriteColor'];
}

?>

</body>
</html>