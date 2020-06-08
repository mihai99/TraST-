<?php
    session_start();
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
        echo 'Nice try, guy!';
    } else {
        require_once 'DatabaseConnectionManager.php';

        $username = $_POST['username'];
        $sql = "SELECT id FROM users where username=:username";
        $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        if (!$stmt->rowCount()) {
            echo 'Utilizatorul nu exista!';
        } else {
            $id = $stmt->fetch()['id'];
            $sql = "DELETE FROM admins where user_id=:id";
            $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            if (!$stmt->rowCount()) {
                echo 'Utilizatorul nu este admin!';
            } else {
                echo 'Utilizatorului i-au fost eliminate drepturile de admin!';
            }
        }
    }