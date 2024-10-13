<?php
include "database/connection.php";
session_start();


if (isset($_POST["login"])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];

       echo '<script>alert("Login successful! Welcome");
       window.location.href = "social_media.php";
       </script>';
    } else {
        echo '<script>alert("Username or Password Incorrect");
         window.location.href = "index.html";
       

        </script>';
    }

}


// Close connection
// $conn->close();
