<?php

require "create_db.php";





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to clean the submitted data
    function clean_input($field) {
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }

    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    if (!empty($name) && !empty($email) && !empty($password)) {
        if (preg_match("/^[a-zA-Z ]*$/", $name)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $stmt = $conn->prepare("INSERT INTO aashir(user_name, user_email, user_password) VALUES(?, ?, ?)");
                $stmt->bind_param("sss", $name, $email, $password);

                if ($stmt->execute() === TRUE) {
                    echo "Congratulations! Your account has been registered successfully.";
                } else {
                    echo "Oops! Something went wrong: " . $conn->error;
                }
                $stmt->close();
            } else {
                $emailErr = "Enter a valid Email ID";
            }
        } else {
            $nameErr = "Only letters and white spaces are allowed";
        }
    } else {
        $error = "Please fill out all the fields.";
    }
}
        
        ?>
        

