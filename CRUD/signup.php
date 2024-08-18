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

    //  check if all the fields are valid and fill
    

    if(isset($name) && $name != "" && isset($email) && $email !="" && isset($password) && $password !=""){


                //insertion query to insert data in a database table(aashir)
       
        // $sql = "INSERT INTO aashir(user_name, user_email, user_password) VALUES('$name', '$email', '$password' )";
        // if ($connection->query($sql)===TRUE) {

        //     echo "Congratulations! Your aacount has been registered successfully.";
        // }else{
        //     echo "Oops! There is something went wrong." . $connection->error;
        // }


                // optimized

        $stmt = $connection ->prepare ("INSERT INTO aashir(user_name, user_email, user_password) VALUES(?, ?, ?)");

       $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()===TRUE) {

            echo "Congratulations! Your aacount has been registered successfully.";
         
        }
             else {
                echo "Oops! There is something went wrong: " . $connection->error;
            }
        
        
        
        
        
        
        $stmt->close();
       
       
       
       
       
       
       
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





