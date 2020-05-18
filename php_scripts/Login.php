<?php
    session_start();
    error_reporting(0);
    require_once('./AccountsManager.php');
    if (isset($_POST['lsubmit'])) {
        $username = $_POST['lusername'];
        $password = $_POST['lpassword'];
        $remember = $_POST['lremember-me'];

        AccountManager::loginUser($username, $password);
    }
