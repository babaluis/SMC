<?php

include_once "database/connection.php";

if (isset($_POST["mediabtn"])){
    $name = $_POST["social"];
    $desc = $_POST["desc"];

    $stmt = $pdo->prepare("insert into records(name, description) values(?, ?)");
    try{
        $stmt->execute([$name, $desc]);
        echo '<script>alert("Data added");
         window.location.href = "social_media.php";
         </script>';
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}
