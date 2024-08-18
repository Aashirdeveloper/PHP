<?php
echo "<h1>Here we learn different PHP built-in and Custom Fuctions</h1>";

$number=rand(50, 100); //it will generate a random number between the range of 50 and 100
echo $number;
echo "<br>";

$date =date("d m y");
echo $date;
echo "<br>";

// custom function
function sum(){
    $n1=10;
    $n2=5;
    $s=$n1+$n2;
    echo $s;

}
sum();
echo "<br>";


// custom function which is based on logic
function site_title($custom=" "){ //default value is empty settled
    if ($custom==" ") {

        echo "Shopify";
    }
    else{
        echo $custom . " | Shopify";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php site_title("Home") ?></title>
</head>
<body>

<?php site_title() ?>
    
</body>
</html>