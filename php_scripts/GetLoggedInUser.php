<?php
    error_reporting(0);
    require_once('../controllers/usersController.php');
    echo json_encode(UsersController::GetLogedInUser());
?>