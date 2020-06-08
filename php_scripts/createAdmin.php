<?php
    session_start();
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
        echo 'Nice try, guy!';
    } else {
        require_once 'DatabaseConnectionManager.php';

        $sql = "SELECT id FROM users WHERE username=:username";
        $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->execute();

        if (!$stmt->rowCount()) {
            echo 'Utilizatorul nu a fost gasit!';
        } else {
            $id = $stmt->fetch()['id'];
            $sql = "INSERT INTO admins values(:id)";
            $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            if (!$stmt->rowCount()) {
                echo 'Utilizatorul este deja admin!';
            } else {
                echo 'Utilizatorul este acum admin!';
            }
        }
    }