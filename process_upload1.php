<?php
require "functions.php";
require "templates/header.php";
?>
    <section id="content">
        <div class="container">
            <div class="upload-status">
                <h1>Upload Status</h1>
                <div class="status-result">
                <?php
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["myFile"]["name"]);
                    $error = 0;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    //echo $imageFileType;

                    //Check if file is an image
                    if(isset($_POST["submit"])) {
                        $is_image = getimagesize($_FILES["myFile"]["tmp_name"]);
                        if($is_image !== false) {
                            //echo "File is an Image ".$is_image["mime"];
                            $error = 0;
                        } else {
                            //echo "File is NOT an Image ".$is_image["mime"];
                            $error = 1;
                        }
                    }

                    //Check if file already exists
                    if(file_exists($target_file)) {
                        $random = rand(1,1000000);
                        $target_file = $target_dir .$random."-". basename($_FILES["myFile"]["name"]);
                        //echo "File already exists <br>";
                        $error = 0;
                    }

                    //Check file size
                    if($_FILES["myFile"]["size"] > 500000) {
                        echo "File Size is too large <br>";
                        $error = 1;
                    }

                    //Check File Type
                    if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
                        echo "Only JPG, PNG & GIF Images are allowed <br>";
                        $error = 1;
                    }

                    //Check if there are no errors
                    if($error == 1) {
                        echo "Sorry, your image was not uploaded <br>";
                    } else {
                        if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file)) {
                            echo "The file <strong>". basename($_FILES["myFile"]["name"])."</strong> was uploaded <br>";
                        } else {
                            echo "Sorry, there was an error uploadi ng your file. If the issue persist, please contact server administrator <br>";
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </section>

<?php include "templates/footer.php" ?>