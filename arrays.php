<?php

// Indexed array
$brands = array("Samsung", "Nokia", "Apple", "Motorola");

// Associative array
$persons = array("Kashif"=>"00123454", "Aslam"=>"012457896", "Rasahid"=>"6579478" );

// Multidimensional arrays

$products = array(
    array(1, "Galaxy S10",10,799),
    array(2, "iPhone 11", 20, 999),
    array(3, "Nokia 6.2", 10, 499),
    array(3, "Huawei 6.2", 10, 499),
);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php 
        foreach($brands as $value) {
            echo "<li>".$value."</li>";
        }
    ?>

    

    
    <h2>Persons</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($persons as $x => $y) {
                    echo "<tr><td>".$x."</td><td>".$y."</td></tr>";
                }
            ?>
        </tbody>
    </table>



    <h2>Products</h2>

    
    <table>
        <thead>
            <tr>
                <th>ID </th>
                <th>Product Name</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($products as $row) {
                    echo "<tr>";
                        foreach ($row as $col) {
                            echo "<td>".$col."</td>";
                        }
                    
                }
            ?>
        </tbody>
    </table>
    
  
    
</body>
</html>