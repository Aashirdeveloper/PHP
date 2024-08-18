<section id="content">
    <div class="container">
        <div class="upload-status">
            <h1>Upload Status</h1>
            <div class="status-result">


                <?php
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES["myFile"]["name"]);
                    $error = 0;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    if(isset($_POST["submit"])) {
                        $is_image = getimagesize($_FILES["myFile"]["tmp_name"]);
                        if($is_image !== false) {
                            $error = 0;
                        } else {
                            $error = 1;
                        }
                    }

                    if(file_exists($target_file)) {
                        $random = rand(1,1000000);
                        $target_file = $target_dir .$random."-". basename($_FILES["myFile"]["name"]);
                        $error = 0;
                    }

                    
                    if($_FILES["myFile"]["size"] > 500000) {
                        echo "File Size is too large <br>";
                        $error = 1;
                    }

                    if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "webp") {
                        echo "Only JPG, PNG & GIF Images are allowed <br>";
                        $error = 1;
                    }

                    if($error == 1) {
                        echo "Sorry, your image was not uploaded <br>";
                    } else {
                        if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file)) {
                            echo "The file <strong>". basename($_FILES["myFile"]["name"])."</strong> was uploaded <br>";
                        } else {
                            echo "Sorry, there was an error uploading your file. If the issue persists, please contact the server administrator <br>";
                        }
                    }

                ?>
            </div>
        </div>
    </div>
</section>