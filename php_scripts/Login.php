<?php 
    error_reporting(0);
    require_once('./AccountsManager.php');  
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    echo AccountManager::loginUser($username, $password);
?>