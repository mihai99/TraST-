<?php
    require_once '../models/learningProgressModel.php';

    session_start();

    ++$_SESSION['progres'];
    $sql = "UPDATE user_progress SET intrebari_invatare=" . $_SESSION['progres'] .
        " WHERE user_id=" . $_SESSION['id'];
    $stmt = DatabaseConnectionManager::get_conn()->prepare($sql);
    $stmt->execute();
    LearningProgressModel::AddLearningDay();

?>