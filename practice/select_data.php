<?php require "create_db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data from Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-striped mt-5">
            <?php
                // Select all data
                $sql = "SELECT * FROM aashir ORDER BY user_id";
                $result = $conn->query($sql);
            ?>
            <thead>
                <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Registered</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sno = 1; // Initialize serial number
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"><?php echo $sno++; ?></th>
                    <td><?php echo $row["user_id"]; ?></td>
                    <td><?php echo $row["user_name"]; ?></td>
                    <td><?php echo $row["user_email"]; ?></td>
                    <td><?php echo $row["register_date"]; ?></td>
                    <td>
                        <a href="user_detail.php?id=<?php echo $row["user_id"]; ?>">Edit</a> &nbsp;
                        <a href="delete_data.php?id=<?php echo $row["user_id"]; ?>&confirm=false">Delete</a>
                    </td>
                </tr>
                <?php } } else { ?>
                <tr>
                    <td colspan="6">No Records Found</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
