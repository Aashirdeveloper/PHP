<?php

session_start();
$_SESSION['user id']=1;
$_SESSION['username']="Aashir";

if  ( isset($_SESSION['user id']) && isset($_SESSION['username']) ) {

    echo "Welcome back, " . $_SESSION['username'];
    
}

?>