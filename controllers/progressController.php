<?php
    include_once dirname(__FILE__) . "\\..\\models\\testProgressModel.php";
    include_once dirname(__FILE__) . "\\..\\models\\learningProgressModel.php";

    class ProgressController {
        public static function GetUserTestProgress($userId) {
            $progress = TestProgressModel::GetProgresOfUser($userId);
            return $progress->testDays;
        }
        public static function GetUserLearningProgress($userId) {
            $progress = LearningProgressModel::GetProgresOfUser($userId);
            return $progress->learningDays;
        }
    }
?>