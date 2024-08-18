<?php
echo "<h1>There are four types of Loops which are given below:</h1>";
echo"<h2><ul>
<li>While Loop</li>
<li>Do While Loop</li>
<li>ForLoop</li>
<li>Foreach Loop</li>
</ul></h2>";

// while

// $x = 1;

// while ($x <= 5) {
//     echo "The number is :" . $x . "<br>";
//     $x++;
// }

// do while

// do {

//    echo "The number is:" . $x . "<br>"; 
//     $x++;
// }while($x<=5);

//  for


// for ($x=1; $x <=10; $x++) { 

//     echo "The number is :" .$x ."<br>";
    
// }



// for ($x=1; $x <=10 ; $x++) { 
//     echo "2 x $x = " . (2 * $x) . "<br>";
// }


// foreach


$color=array("red", "blue", "Yellow", "Brown");
 foreach($color as $value){
    echo "The color is ". $value . "<br>";
 }



?>