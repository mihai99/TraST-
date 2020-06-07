<?php
    error_reporting(0);
    require_once("../controllers/usersController.php");

    $result = UsersController::UpdateUserDetails($_POST["name"], $_POST["email"], $_POST["username"], $_POST["phone"]);

    if($result instanceof ChangeDataError) {
        echo $result->error;
    } else {
        if($_FILES["imageToUpload"]["name"]) {
            $result = UsersController::UpdateUserPhoto($_FILES["imageToUpload"],  dirname(__FILE__) ."\\..\images\profiles\\");
            if($result instanceof ChangeDataError) {
                echo $result->error;
            } else {
                echo true;
            }
        } else {
            echo true;
        }
    }
?>