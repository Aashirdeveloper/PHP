<?php  require "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data from Database</title>
    
</head>
<body>
    <div class="container">
    <table class="table table-striped mt-5">

        <?php
            //Select All Data and Limit to 2 records with offset value of 2

            // it can arrange the data with descending order
              $sql = "SELECT * FROM aashir ORDER BY user_id DESC ";

            //Select All Data and Limit to 2 records with offset value of 2 with shorthand
            //$sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT 2, 2";

            //Select Specific Data
          // $sql = "SELECT * FROM aashir  ";
            $result = $connection->query($sql);
        ?>

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                
                <th scope="col">Registered</th>
                <th scope="col">Actions</th>
                
            </tr>
        </thead>
        <tbody>

            <?php 
            if($result->num_rows > 0) {
                //echo $result->num_rows;
                while($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <th scope="row"><?php echo $row["user_id"] ?></th>
                <td><?php echo $row["user_name"] ?></td>
                <td><?php echo $row["user_email"] ?></td>
               
                <td><?php echo $row["register_date"] ?></td>
                <td><a href="user_detail.php?id=<?php echo $row["user_id"] ?> ">Edit</a> &nbsp; <a href="delete_user.php?id=<?php echo $row["user_id"]?>&confirm=false">Delete</a></td>
                
            </tr>

            <?php } } else {?>
                <tr>
                    <th scope="row">No Records Found</th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>