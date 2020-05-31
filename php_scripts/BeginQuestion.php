<?php
    session_start();
    $_SESSION["currentQuestion"] = 0;
    $_SESSION["correctQuestions"] = 0;
    require_once('../controllers/questionsController.php');
    echo QuestionsController::beginTest();

?>