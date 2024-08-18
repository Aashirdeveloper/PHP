<?php

require "class.php";

// $object =new user();
// $object2 =new user();
//email
// $object3 =new user();


// $set_name=$object->set_name("Aashir");
// $get_name=$object->get_name();

// $set_name2=$object2->set_name("Jamil");
// $get_name2=$object2->get_name();

// $set_email=$object3->set_email("aashir.devpro@gmail.com");
// $get_email=$object3->get_email();


// echo $get_name;
// echo $get_name2;
// echo"<br>";
// for email
// echo $get_email;

    //using cosntructor


$object =new user();
//$object2 =new user();
//email
//$object3 =new user();


// $set_name=$object->set_name("SEO");
$get_name=$object->get_name();

//$set_name2=$object2->set_name("Jamil");
$get_name2=$object->get_name2();

//$set_email=$object3->set_email("aashir.devpro@gmail.com");
$get_email=$object->get_email();



echo $get_name;
echo"<br>";
//echo $get_name2;
echo $get_name2;
echo"<br>";
// for email
echo $get_email;


// static method
$static=user::static_method();







?>