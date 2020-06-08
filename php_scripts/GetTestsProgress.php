<?php
    require_once("../controllers/progressController.php");
    session_start();
    if(isset($_GET["userId"])) {
        $result = ProgressController::GetUserTestProgress($_GET["userId"]);
    } else {
        $result = ProgressController::GetUserTestProgress($_SESSION["id"]);
    }
    if($result != "error" || count($result)) {
        echo json_encode($result);
    } else {
        echo $result;
    }
?>