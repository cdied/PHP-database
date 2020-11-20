<!-- linking bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
//connect to database
include "connect.php";

// posting inputs from insert form
$lastname = $_POST["lastname"];
$data = $_POST["data"];
$value = $_POST["value"];

// update the given value
$sql = "UPDATE testphp SET $data='$value' WHERE lastname='$lastname'";

// html body to return result
$action = '<div class="container p-5"><div class="p-3"></div><div class="d-flex p-3 justify-content-center"><div class="p-4 text-center"><h3 style="color: green;">Data inserted successfully</h3><br><br><a class="btn btn-primary" href="index.php">Return to Home page</a></div></div></div>';
$error = '<div class="container p-5"><div class="p-3"></div><div class="d-flex p-3 justify-content-center"><div class="p-4 text-center"><h3 style="color: red;">Somethin went wrong!!</h3><br><br><a class="btn btn-primary" href="index.php">Return to Home page</a></div></div></div>';

// checking result
if ($conn->query($sql) === TRUE) {
  echo $action;
} else {
  echo $error . $sql . "<br><br><br>" . $conn->error;
}

$conn->close();
?> 