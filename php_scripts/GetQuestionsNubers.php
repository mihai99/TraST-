<?php
    session_start(); 
    $response = array(
        $_SESSION["currentQuestion"],
        $_SESSION["correctQuestions"],
        $_SESSION["currentQuestion"]-$_SESSION["correctQuestions"]);
    echo json_encode($response);
?>