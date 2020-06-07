<?php
    error_reporting(0);
    session_start();
    require_once '../models/questionModel.php';

    //luam din baza de date intrebarea curenta la care se afla utilizatorul
    echo json_encode(Question::GetQuestionWithId(intval($_SESSION['progres']) - 1));
