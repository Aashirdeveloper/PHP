<?php 
/*
* Insert data into Databse
*/
require "db.php";
//Declare Variables for field values and error messages
$name = $email = $password =  $error = "";

//Check if form is submitted with POST method
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    //Function to clean the submitted data
    function clean_input($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }

    //Assign form field values to variables and also apply clean function
    $id = clean_input($_POST['id']);
    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);
    
    

    //Check if all the required fields are submitted
    if(isset($name) && $name != "" && isset($email) && $email !="" && isset($password) && $password !="" ){

        $sql = "UPDATE aashir SET user_name = '$name', user_email = '$email', user_password = '$password'  WHERE user_id = $id";

        if($connection->query($sql) === TRUE) {
            echo "Record has been updated successfully.";
        } else {
            echo "There was an error updating the record: ".$connection->error;
        }
        
        $connection->close();

    }
    //If required fields are not submitted then show the error.
    else {
        $error = "You must fill all the required fields";
    }
    //echo "Hello, ".$name;
} else {
    die("Please use form submit");
}

?>