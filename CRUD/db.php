<?php
$server_name="localhost";
$user_name="root";
$password="";
$database="wp-academy";


$connection= new mysqli($server_name, $user_name, $password, $database);

if ($connection->connect_error) {
   die ("Connection faild," . $connection->connect_error) ;
    
}else{
    //echo"Connected successfully" ;
}
?>