<?php
    require_once './DatabaseConnectionManager.php';

    session_start();

    $_SESSION['progres'] = $_SESSION['progres']+1;
    $sql = "UPDATE user_progress SET intrebari_invatare=" . $_SESSION['progres'] .
        " WHERE user_id=" . $_SESSION['id'];
    $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
    $stmt->execute();

?>