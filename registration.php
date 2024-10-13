<?php
include "database/connection.php";



if (isset($_POST["register"])){

        $fname = $_POST["fname"];
    $lname = $_POST['lname'];
    $username = $_POST["username"];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $email = $_POST["email"];

    $stmt = $pdo->prepare("INSERT INTO users (fname, lname, username, email, password) VALUES (?, ?, ?, ?, ?)");
    try {
        $stmt->execute(params: [$fname,$lname,$username,$email,$hashed_password]);
        header("location: social_media.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
   


}


