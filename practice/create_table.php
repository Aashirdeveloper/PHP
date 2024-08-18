
<?php

require "create_db.php";

$sql= "CREATE TABLE aashir(

user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(30) NOT NULL,
user_email VARCHAR (30) NOT NULL UNIQUE,
user_password VARCHAR (30) NOT NULL,

register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
echo "DataBase table created successfully";

    
}

?>