<?php
    error_reporting(0);
    require_once('./AccountsManager.php');
    $name = $_POST['rname'];
    $username = $_POST['rusername'];
    $password = $_POST['rpass'];
    $repeatPassword = $_POST['rrpass'];
    $email = $_POST['remail'];
    $phone = $_POST['rphone'];
    AccountManager::registerUser($name, $username, $password, $repeatPassword, $email, $phone);
