<?php
    session_start(); 
    $response = array(
        $_SESSION["currentQuestion"] + count($_SESSION["postponedQuestions"]),
        $_SESSION["correctQuestions"],
        $_SESSION["currentQuestion"]-$_SESSION["correctQuestions"]-count($_SESSION["postponedQuestions"]));
    echo json_encode($response);
?>