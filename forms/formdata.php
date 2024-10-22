<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>



    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $user_fullname = $_POST["fullName"];
        $password = $_POST["password"];

        echo  '
        <div class="alert alert-success" role="alert">
          Student Name : ' . $user_fullname  . ' Email: ' . $email .  ' And Password : ' . $password .  '
        </div>
        ';
    }

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>