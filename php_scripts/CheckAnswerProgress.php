<?php
    session_start();
    error_reporting(0);
    require_once("../controllers/questionsController.php");
    if (isset($_GET['answer'])) {
        $id = $_GET['id'] - 1;
        $answer = $_GET['answer'];

        $question = Question::GetQuestionWithId($id);
        if ($question->CheckAnswer($answer))
            echo "true";
        else echo "false";
    } else {
        echo "Task Failed Succesfully";
    }