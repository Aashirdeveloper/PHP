<?php
// require "functions.php";
// require "templates/header.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <section id="content">
        <div class="container">
            <div class="upload-form">
                <h1>PHP File Upload</h1>
                <form action="process_upload.php" method="post" enctype="multipart/form-data">
                    <label for="fuile">Select image to upload:</label>
                    <input type="file" name="myFile" id="myFile">
                    <input type="submit" value="Upload Image" name="submit" class="submit-btn">
                </form>
            </div>
        </div>
    </section>




<?php 
// include "templates/footer.php" 
?>
    </body>
</html>

