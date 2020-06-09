<?php
    error_reporting(0);
    session_start();
    require_once '../models/questionModel.php';

    echo json_encode(Question::GetQuestionWithId(intval($_SESSION['progres']) - 1));
?>