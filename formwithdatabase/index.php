<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "aptech";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("" . $conn->connect_error);
};





if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $fullName = $_POST["fullName"];


    $sql = "INSERT INTO   users(email,fullName,password) VALUES ('$email','$fullName','$password')";


    if ($conn->query($sql) === TRUE) {
      
        echo  '
        <div class="alert alert-success" role="alert">
         Data Inserted In Database
        </div>
        ';

    } else {
        
        echo  '
        <div class="alert alert-danger" role="alert">
         Data Not Inserted In Database
        </div>
        ';
        
    }


}



$conn->close();



?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms || PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>


    <div class="container mt-5 p-5">
        <form action="index.php" method="POST">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullName" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </form>

    </div>