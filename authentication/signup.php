<?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);



    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo  '
        <div class="alert alert-danger" role="alert">
         Email Already Exist
        </div>
        ';
    } else {
        $sql = "INSERT INTO   users(username,email,password) VALUES ('$username','$email','$password')";
        if ($conn->query($sql) === TRUE) {

            echo  '
            <div class="alert alert-success" role="alert">
             User Signup
            </div>
            ';

            header("Location: login.php");
        } else {

            echo  '
            <div class="alert alert-danger" role="alert">
             Invalid User
            </div>
            ';
        }
    }
}


$conn->close();

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {

            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;

        }

        form {
            width: 40%;
            height: 60vh;
            background-color: white;
            border-radius: 20px;
            display: flex;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            justify-content: center;
            gap: 40px;
            align-items: center;
            flex-direction: column;

        }

        .inputDiv {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            width: 80%;
        }

        .inputDiv input {
            width: 70%;
            height: 40px;
            border-radius: 8px;
            padding: 0 5px;
            border: 1px solid gray;
            outline: none;
        }

        .inputDiv button {
            width: 40%;
            height: 40px;
            border: 8px;
            border: 1px solid gray;
            outline: none;
        }
    </style>
</head>

<body>


    <div class="main">

        <form action="signup.php" method="POST">
            <h1>SIGN UP</h1>
            <div class="inputDiv">

                <input type="text" name="username" placeholder="Username.........">
                <input type="email" name="email" placeholder="Email.........">
                <input type="password" name="password" placeholder="Password.........">

                <button>Sign up</button>
            </div>
        </form>

    </div>














</body>

</html>