<?php
    error_reporting(0);
    require_once('../controllers/questionsController.php');
    echo json_encode(QuestionsController::getNextQuestion());
?>