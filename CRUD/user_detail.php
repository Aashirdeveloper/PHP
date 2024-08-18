<?php 
/*
* User Registration form for MySQL INSERT DATA 
*/
require "db.php";
if(isset($_GET["id"]) && $_GET["id"] != "") {

    $user_id = intval($_GET["id"]);

    $sql = "SELECT * FROM aashir WHERE user_id = $user_id";
    $result = $connection->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user_name = $row["user_name"];
            $user_password = $row["user_password"];
            $user_email = $row["user_email"];
            
        }
    } else {
        echo "No record Found".$connection->error;
    }


} else {
    die("No valid user ID found");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form Validation</title>
    
   
</head>
<body>
    <div class="wrap">
        <form action="update_user.php" method="post" class="signup-form">
            <input type="hidden" name="id" value="<?php echo $user_id ?>">
            <div class="form-row">
                <input type="text" name="name" placeholder="Full Name *" value="<?php echo $user_name ?>">
            </div>
            <div class="form-row">
                <input type="text" name="email" placeholder="Email Address *" value="<?php echo $user_email ?>">
            </div>
            <div class="form-row">
                <input type="password" name="password" placeholder="Password *" value="<?php echo $user_password ?>">
            </div>
            
            <div class="form-row">
                <input type="submit" value="Update User" class="signup-btn">
                <input type="reset" value="Reset Form" class="reset-btn">
            </div>
        </form>
    </div>
</body>
</html>