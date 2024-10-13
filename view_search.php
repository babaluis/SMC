<?php
include './database/connection.php';

$sql = "SELECT id, name FROM records";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

if (count($result) > 0) {
    // Start table
    echo "<table border='1' class='table' id='popularApps'>
    <thead>
        <tr>
            <th>Position</th>
            <th>Social Media</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>";

    // Loop through the result set and populate the table
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td><a href='delete_record.php?id=" . htmlspecialchars($row["id"]) . "'>Delete</a></td>";
        echo "</tr>";
    }

    // Close table body and table tag
    echo "</tbody></table>";
} else {
    echo "0 results";
}
?>
