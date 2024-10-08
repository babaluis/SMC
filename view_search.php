<?php
include './database/connection.php';

$sql = "SELECT id, name FROM records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
       // Start table
       echo "<table border='1' class='table'>
       <thead>
           <tr>
               <th>Position</th>
               <th>Social Media</th>
              
               <th>Action</th>
           </tr>
       </thead>
       <tbody>";

// Loop through the result set and populate the table
while ($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row["id"] . "</td>";
   echo "<td>" . $row["name"] . "</td>";
   echo "<td><a href='delete_record.php?id=" . $row["id"] . "'>Delete</a></td>";
   echo "</tr>";
}

// Close table body and table tag
echo "</tbody></table>";
} else {
echo "0 results";
}