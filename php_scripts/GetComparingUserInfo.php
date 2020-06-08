<?php 
    error_reporting(0);
    session_start();
    require_once('../controllers/usersController.php');
    if(isset($_GET["id"]) && $_GET["id"] != $_SESSION["id"]) {
        $result = UsersController::GetUserById($_GET["id"]);
        $result->password = "";
        echo json_encode($result);
    } else {
        echo "error";
    }
?>