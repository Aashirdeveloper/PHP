<?php

$cookie_name="last_visited";
$cookie_value=date("D-M-Y h:i:s");

//setcookie($cookie_name, $cookie_value,    time() + (86400*30), "/");

//setting cookie
if (isset($_COOKIE['last_visited'])) {
    echo "Your cookie is set"            .      $_COOKIE['last_visited'];
    
} else{
    setcookie($cookie_name, $cookie_value,    time() + (86400*30), "/");

}



//setcookie($cookie_name, $cookie_value,    time() - 3600);
?>