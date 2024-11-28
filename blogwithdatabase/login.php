<?php

session_start();

if (isset($_SESSION["user_login"]) || isset($_SESSION["user_login"]) == true) {
    header("Location: index.php");
}

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);




    // Check email condition if user email is already in the database
    if (mysqli_num_rows($result) > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            
            $_SESSION["user_login"] = true;
            $_SESSION["username"] = $user["username"];
            $_SESSION["useremail"] = $user["email"];


            header("Location: index.php");
        } else {
            $loginError = 'Invalid credentials.';
        }
    } else {
        $loginError = 'User not found.';
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f7f7f7;
            font-family: 'Arial', sans-serif;
        }

        .main {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }

        .inputDiv {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .inputDiv input {
            width: 100%;
            height: 40px;
            border-radius: 8px;
            padding: 0 15px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        .inputDiv input:focus {
            border-color: #007bff;
        }

        .inputDiv button {
            width: 100%;
            height: 40px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .inputDiv button:hover {
            background-color: #0056b3;
        }

        .inputDiv a {
            text-align: center;
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }

        .inputDiv a:hover {
            text-decoration: underline;
        }

        .alert {
            margin-bottom: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="login-form">
            <h1>Login</h1>
            
            <?php if (isset($loginError)): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $loginError; ?>
                </div>
            <?php endif; ?>
            
            <form action="login.php" method="POST">
                <div class="inputDiv">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                    <a href="signup.php">Don't have an account? Sign up</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
