<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "blogging_website";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("" . $conn->connect_error);
};



$sql = "SELECT * FROM blogs";
$result = mysqli_query($conn, $sql);

$conn->close();



?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms || PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .main {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>


    <?php include 'navbar.php' ?>


    
    <h1 class="mt-4 ms-5">All Blogs</h1>


    <div class="container main">


        <?php foreach ($result as $post): ?>

            <div class="card mb-3">
                <div class="card-body">
                     
                    <h5 class="card-title"> <?php  echo $post["title"] ?></h5>
                    <p class="card-text"><?php  echo $post["content"] ?></p>
                    <p class="card-text"><small class="text-body-secondary"><?php  echo $post["author_name"] ?></small></p>
                </div>
            </div>

        <?php endforeach ?>

    </div>

</body>

</html>