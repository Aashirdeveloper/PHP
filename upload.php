<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "File Upload";   ?></title>
    <link rel="stylesheet" href="style1.css">

  
</head>
<body>

<section id="content">
        <div class="container">
            <div class="upload-form">
                <h1>PHP File Upload</h1>
                <form class="frm" action="process_upload.php" method="post" enctype="multipart/form-data">
                    <label for="fuile">Select image to upload:</label>
                    <br>
                    <input type="file" name="myFile" id="myFile">
                    <br>
                    <!-- <input type="submit" value="Upload Image" name="submit" class="submit-btn"> -->
                    <button type="submit"  name="submit" class="submit-btn">Upload Now</button>
                </form>
            </div>
        </div>
    </section>





</body>
</html>