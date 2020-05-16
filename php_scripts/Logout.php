<?php
    session_start();
    $_SESSION = array();
    $_SESSION['logged_out'] = true;
    header("location:/index.php");
    exit;
