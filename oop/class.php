<!-- here we mmake our class for OOp -->


<?php

namespace Data; //to avoid from class confliction

class user{

 // properties
// public $name;
// public $email;


// methods

// public function set_name($name){
//     $this->name=$name;
// }

// public function set_email($email){
//     $this->email=$email;
// }

// public function get_name(){
//     return $this->name;
// }

// public function get_email(){
//     return $this->email;
// }





 // properties
public $name;
public $name2;
public $email;


// constructor to initialize the value

function __construct(){
    $this->name="Aashir";
    $this->name2="Jamil";
    $this->email="aashirwebmaven.tech@gmail.com";
}



// methods
// modifier function functionname
public function set_name($name){
    $this->name=$name;
}

public function set_email($email){
    $this->email=$email;
}

public function get_name(){
    return $this->name;
}
 
//    without set, using constructor
public function get_name2(){
    return $this->name2;
}

public function get_email(){
    return $this->email;
}

// static method, it call without using any class object
public static function static_method(){
    echo"<br>Aashir suna ki haaL v.";
    return "Static Method";
}


// destruct, it execute at the end of a code script

function __destruct(){
    echo "<br> Thank You for visiting us {$this->name}";
}


}


?>