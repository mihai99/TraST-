<?php
    session_start();
    session_destroy();
    $_SESSION['logged_out'] = true;
    header("location:/index.php");
    exit;
