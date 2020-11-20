<?php
// connect to database
include "connect.php";

// select everything from table
$sql = "SELECT * FROM testphp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    // table headers
    echo "<table class='table table-secondary'><thead class='thead-dark'><tr><th>Firstname</th><th>Lastname</th><th>Phone</th><th>Email</th><th>Birth-date</th><th>status</th></tr></thead>";
    
    // fetch table rows in table datas
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["email"]. "</td><td>" . $row["birthdate"]. "</td><td>" . $row["user_admin"]. "</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>