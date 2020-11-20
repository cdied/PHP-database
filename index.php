<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>PHP Database</title>
</head>
<body>
    
    <!-- main container -->
    <div class="container-fluid p-5" id="body">
        <!-- welcome text - header -->
        <div class="col p-3 text-center">
            <h3>Welcome to MySQL database</h3>
        </div>
        <div class="p-3"></div>
        
        <!-- 3 div in row to select between options 
        by clicking buttons selected div will appear in the buttom -->
        <div class="row d-flex justify-content-center">
            <div class="p-3">
                <a class="btn btn-primary" data-toggle="collapse" data-target="#table" href="#table">Show table</a>
            </div>
            <div class="p-3">
                <a class="btn btn-primary" data-toggle="collapse" data-target="#insert">Insert data</a>
            </div>
            <div class="p-3">
                <a class="btn btn-primary" data-toggle="collapse" data-target="#update">Update data</a>
            </div>
            <div class="p-3">
                <a class="btn btn-primary" data-toggle="collapse" data-target="#delete">Delete data</a>
            </div>
        </div>

        <!-- table div - getting databases table from table.php -->
        <div id="table" class="collapse" data-parent="#body">
            <div class="p-2"></div>
            <div class="d-flex p-5 justify-content-around">
                
                <!-- including file: table.php to return a table -->
                <?php include "table.php";?>
            </div>
        </div>

        <!-- insert div - form inputs -->
        <div id="insert" class="collapse" data-parent="#body">
            <div class="p-2"></div>
            <div class="d-flex p-5 justify-content-around">
                <form action="insert.php" method="POST" class="col-xl" id="form">
                    <div class="form-group">
                        <label for="firstname">Firstname: </label>
                        <input class="form-control"  type="text" name="firstname" id="firstname" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname: </label>
                        <input class="form-control"  type="text" name="lastname" id="lastname" placeholder="Lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone: </label>
                        <input class="form-control"  type="number" name="phone" id="phone" placeholder="00000000" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input class="form-control"  type="email" name="email" id="email" placeholder="mail@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birth-date: </label>
                        <input class="form-control"  type="text" name="birthdate" id="birthdate" placeholder="YYYY-MM-DD" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status: </label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>

        <!-- Update div - form inputs -->
        <div id="update" class="collapse" data-parent="#body">
            <div class="p-2"></div>
            <div class="d-flex p-5 justify-content-around">
                <form action="update.php" method="POST" class="col-xl" id="form">
                    <div class="form-group">
                        <label for="lastname">Lastname: </label>
                        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <label for="data">Data: </label>
                        <select class="form-control" name="data" id="data" required>
                            <option value="firstname">Firstname</option>
                            <option value="lastname">Lastname</option>
                            <option value="phone">Phone</option>
                            <option value="email">Email</option>
                            <option value="birthdate">Birth-date</option>
                            <option value="user_admin">Status</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="value">New value: </label>
                        <input class="form-control" type="text" name="value" id="value" placeholder="New value">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>

        <!-- delete div - form inputs -->
        <div id="delete" class="collapse" data-parent="#body">
            <div class="p-2"></div>
            <div class="d-flex p-5 justify-content-around">
                <form action="delete.php" method="POST" class="col-xl" id="form">
                    <div class="form-group">
                        <label for="lastname">Lastname: </label>
                        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="mail@example.com">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>
    
    <!-- to reset form inputs after reloading the page -->
    <script>
        document.getElementById("form").reset();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
