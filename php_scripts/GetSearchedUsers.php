<?php 
session_start();
error_reporting(0);
require_once("../controllers/usersController.php");
if (isset($_GET['name'])) {
    $name = $_GET['name']; 
    echo json_encode(UsersController::GetSearchedUsers($name));
} else {
    echo "Task Failed Succesfully";
}
?>