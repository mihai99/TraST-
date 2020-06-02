<?php
 session_start();
 error_reporting(0);
 require_once("../controllers/questionsController.php");
 if (isset($_GET['answer'])) {
     $answer = $_GET['answer']; 
     echo QuestionsController::checkAnswer($answer);
 } else {
     echo "Task Failed Succesfully";
 }
?>