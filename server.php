<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
</head>
<body>

<h2>Server Information</h2>

<?php

echo "Server Name: ".$_SERVER['SERVER_NAME']."<br><br>";

echo "Request Method: ".$_SERVER['REQUEST_METHOD']."<br><br>";

echo "Current Script: ".$_SERVER['PHP_SELF']."<br><br>";

echo "Visitor IP Address: ".$_SERVER['REMOTE_ADDR']."<br><br>";

?>

</body>
</html>