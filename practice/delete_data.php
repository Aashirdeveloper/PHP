<?php 
/*
* Delete Record from Database 
*/
require "create_db.php";
if(isset($_GET["id"]) && $_GET["id"] != "") {

    $user_id = intval($_GET["id"]);
    $confirm = $_GET["confirm"];

    if($confirm == "true") {
        $sql = "DELETE FROM aashir WHERE user_id = $user_id";

        if($conn->query($sql) === TRUE) {
            echo "Record has been deleted";
        } else {
            echo "There was an error: ".$conn->error;
        }
    }


} 

?>
Are you sure? <a href="delete_data.php?id=<?php echo $user_id ?>&confirm=true">Yes</a>