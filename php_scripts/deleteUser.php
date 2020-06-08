<?php
    session_start();
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
        echo 'Nice try, guy!';
    } else {
        require_once 'DatabaseConnectionManager.php';

        $sql = "DELETE FROM users WHERE username=:username";
        $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();
        if (!$stmt->rowCount()) {
            echo 'Utilizatorul nu a fost gasit!';
        } else {
            echo 'Utilizatorul a fost sters cu succes!';
        }
    }

