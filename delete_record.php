<?php
include './database/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the DELETE statement
    $sql = "DELETE FROM records WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Bind the parameter
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record deleted successfully";
        header("Location: social_media.php");
        exit; // Make sure to exit after header redirect
    } else {
        echo "Error deleting record: " . $stmt->errorInfo()[2];
    }
} else {
    echo "No ID provided.";
}
?>
