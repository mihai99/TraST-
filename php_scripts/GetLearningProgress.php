<?php
    require_once "../controllers/progressController.php";
    session_start();
    if(isset($_GET["userId"])) {
        $result = ProgressController::GetUserLearningProgress($_GET["userId"]);
    } else {
        $result =  ProgressController::GetUserLearningProgress($_SESSION["id"]);
    }
    if($result != "error" || count($result) == 0) {
        echo json_encode($result);
    } else {
        echo $result;
    }
?>