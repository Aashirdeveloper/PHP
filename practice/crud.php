<?php
require "create_db.php";
require "create_table.php";

$name = $email = $password = $error = "";
$nameErr = $emailErr = "";

require "insert_data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="title">
    <h1>Please Register Yourself</h1>
</div>

<!-- input form -->
<div class="input">
    <form action="crud.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            <span class="text-danger"><?php echo $nameErr; ?></span>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <span class="text-danger"><?php echo $emailErr; ?></span>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <span class="text-danger"><?php echo $error; ?></span>
    </form>
</div>

<div class="title">
    <h2>Our Registered Users Data</h2>
</div>

<?php

require "select_data.php";
require "delete_data.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
