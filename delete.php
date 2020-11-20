<!-- linking bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
// connect to databse
include "connect.php";

// posting inputs from delete form
$lastname = $_POST["lastname"];
$email = $_POST["email"];

// html body to return result
$action = '<div class="container p-5"><div class="p-3"></div><div class="d-flex p-3 justify-content-center"><div class="p-4 text-center"><h3 style="color: green;">Data inserted successfully</h3><br><br><a class="btn btn-primary" href="index.php">Return to Home page</a></div></div></div>';
$error = '<div class="container p-5"><div class="p-3"></div><div class="d-flex p-3 justify-content-center"><div class="p-4 text-center"><h3 style="color: red;">Somethin went wrong!!</h3><br><br><a class="btn btn-primary" href="index.php">Return to Home page</a></div></div></div>';

// select needed table data
$sql = "SELECT lastname, email FROM testphp";
$result = $conn->query($sql);

// fetching table rows
$row = $result->fetch_array();

// checking if inputs are equal to table rows
if ($row["lastname"] == $lastname and $row["email"] == $email) {

    // deleting data
    $sqld = "DELETE FROM testphp WHERE lastname='$lastname' and email='$email'";
    
    // checking result
    if ($conn->query($sqld) === TRUE) {
      echo $action;
    } else {
      echo $error. "<br><br><br>" . $conn->error;
    }
} else {
  echo $error. "<br><br><br>" .$conn->error;
}

$conn->close();
?> 