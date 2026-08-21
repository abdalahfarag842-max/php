<?php

require "./connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['btn-register'])) {
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];

        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ];

        $result = $db->create('users', $data);
        header("location:register.php?successMessage=" . urlencode($result));
        exit;
    }

    if (isset($_POST['btn-login'])) {
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];

        $query = "SELECT * FROM users WHERE email=:email AND password=:password";
        $sqlQuery = $db->connection->prepare($query);
        $sqlQuery->execute([
            "email" => $email,
            "password" => $password,
        ]);
        $user = $sqlQuery->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            header("location:index.php");
            exit;
        } else {
            header("location:login.php?errorMessage=" . urlencode("Invalid email or password"));
            exit;
        }
    }
}
