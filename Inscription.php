<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .registration-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .registration-container h2 {
            text-align: center;
        }

        .registration-container form {
            display: flex;
            flex-direction: column;
        }

        .registration-container input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .registration-container button {
            background: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .registration-container button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="Inscription.php" method="POST">
            <input type="text" name="name" placeholder="Name" id="name" required>
            <input type="email" name="email" placeholder="Email" id="email"required>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value ="Register">
        </form>
    </div>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

require("./db/dbConnection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$mdp = $_POST['password'];

$sql = "INSERT INTO user (nom,courriel,mdp,permission) VALUES ('$name','$email','$mdp', '1')";
$pdo->exec($sql);

header("location: ./index.php");
exit();
}
?>
