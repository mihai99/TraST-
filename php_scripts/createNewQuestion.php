<?php
    session_start();
    if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
        echo 'Nice try, guy!';
    } else {
        $text = $_POST['text'];
        $ans1 = $_POST['ans1'];
        $ans2 = $_POST['ans2'];
        $ans3 = $_POST['ans3'];
        $ans = substr($_POST['ans'], -1);
        $difficulty = substr($_POST['dif'], -1);

        if (empty($text) || empty($ans1) || empty($ans2) || empty($ans3) || empty($ans) || empty($difficulty)) {
            echo 'error';
        } else {
            require_once 'DatabaseConnectionManager.php';

            $sql = "INSERT INTO questions
                    values(NULL, :text, :ans1, :ans2, :ans3, :ans, '', :dif)";
            $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
            $stmt->bindParam(':text', $text);
            $stmt->bindParam(':ans1', $ans1);
            $stmt->bindParam(':ans2', $ans2);
            $stmt->bindParam(':ans3', $ans3);
            $stmt->bindParam(':ans', $ans);
            $stmt->bindParam(':dif', $difficulty);

            $stmt->execute();

            if (!$stmt->rowCount()) {
                echo 'Intrebarea nu a putut fi introdusa in baza de date!';
            } else {
                echo 'Intrebarea a fost introdusa cu succes in baza de date!';
            }
        }
    }