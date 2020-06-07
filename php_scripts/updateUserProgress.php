<?php
    require_once 'DatabaseConnectionManager.php';
    session_start();

    //inregistram progresul utilizatorului in baza de date, cand acesta raspunde corect la o intrebare
    ++$_SESSION['progres'];
    $sql = "UPDATE user_progress SET intrebari_invatare=" . $_SESSION['progres'] .
        " WHERE user_id=" . $_SESSION['id'];
    $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
    $stmt->execute();
    echo $sql;
