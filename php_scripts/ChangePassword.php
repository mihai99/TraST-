<?php
    error_reporting(0);
    require_once("../controllers/usersController.php");

    $oldPassword = $_POST["current-password"];
    $newPassword = $_POST["new-password"];
    $verifyPassword = $_POST["repeat-password"];

    $result == UsersController::UpdatePassword($oldPassword, $newPassword, $verifyPassword);
    if($result instanceof ChangeDataError) {
        echo $result->error;
    } else {
            echo true;        
    }
?>