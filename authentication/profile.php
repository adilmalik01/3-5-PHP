<?php
session_start();

if (isset($_SESSION["user_login"]) == true) {

    $user_name = $_SESSION["username"];
    echo $user_name;
} else {
    header("Location: login.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <ul>
       <li><a href="./dashboard.php">Home</a></li>
       <li><a href="./profile.php">Profile</a></li>
    </ul>

</body>

</html>