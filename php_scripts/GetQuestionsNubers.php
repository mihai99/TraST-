<?php
    session_start();
    $postponed = count($_SESSION["postponedQuestions"]);
    $currentQuestion = count ($_SESSION["showedQuestions"]);
 //   echo $currentQuestion;
 //   echo $postponed;
   // echo $postponed;
    $response = array(
        $currentQuestion,
        $_SESSION["correctQuestions"],
        $_SESSION["failedQuestions"]);
    echo json_encode($response);
?>
