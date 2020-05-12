<?php 
    error_reporting(0);
    require_once('./AccountsManager.php');
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeat-password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo AccountManager::registerUser($name, $username, $password, $repeatPassword, $email, $phone);
?>