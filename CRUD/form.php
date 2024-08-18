<?php
// $name= $_GET['name'];    // this is by using get method, it show result in url
// echo "Hello," . $name;

//$name= $_POST['name'];   //this is by using post method, it does not show result in url

//echo "Hello," . $name;
require "db.php";



$name = $email = $password = $gender = $error = "";

$nameErr = $emailErr =  "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    //Function to clean the submitted data
    function clean_input($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }

    $name= clean_input($_POST['name']);
    $email= clean_input($_POST['email']);
    $password= clean_input($_POST['password']);
    $gender=  clean_input($_POST['gender']);

    if(isset($name) && $name != "" && isset($email) && $email !="" && isset($password) && $password !=""  ){

       
        // validating further input values
if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white spaces are allowed";
}

// Check valid email ID with built-in function
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Enter a valid Email ID";
}

    
}
 else{
    $error= "Please fill out the all fields.";
}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <form action="signup.php" method="POST">


        

            <div class="mb-3">
                <label for="name" class="form-label">Name *</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                    placeholder="Name" value="<?php echo $name;  ?>">
                <?php
                    if ($nameErr) {
                        echo $nameErr;
                    }

                   
        
                    ?>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address *</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Email" value="<?php echo $email;  ?>">

                    <?php
                    if ($emailErr) {
                        echo $emailErr;
                    }

                   
        
                    ?>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password *</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <!-- radio buttons -->

            

            <br>
            <button type="signup" class="btn btn-primary">Sign Up </button>

            <div class="err-row">
                <?php
                if ($error) {
                    echo '<span style="display:block; color:white;">' . $error . '</span>';
                    
                }
                ?>
            </div>
        </form>
    </div>





    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>