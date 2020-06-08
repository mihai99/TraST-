<?php
    include dirname(__FILE__) . "//learningDay.php";

    class LearningProgressModel {
        public $userId;
        public $learningDays;
        private function __construct($userId) {
            $this->userId = $userId;
            $this->learningDays = array();
        }

        public static function GetProgresOfUser($userId)
        {
            $resultObj = new LearningProgressModel($userId);
            $sql = "SELECT `date` FROM `learning_progress` WHERE userId = " . $userId . " AND date >= DATE_SUB(NOW(), INTERVAL 10 DAY) ORDER BY `date`";
            $query = DatabaseConnectionManager::get_conn()->query($sql);
            if(!$query) {
                return "error";
            }
            $result = $query->fetchAll();
            foreach($result as $resultRow) {
                $learningDay = new LearningDay($userId, $resultRow["date"]);
                array_push($resultObj->learningDays, $learningDay);
            }       
            return $resultObj; 
        }

        public static function AddLearningDay() 
        {
            session_start();
            if(isset($_SESSION["id"])) {
                $userId = $_SESSION["id"];
                $sql = "SELECT * FROM `learning_progress` WHERE date = CURRENT_DATE() AND userId = " . $userId;
                $query = DatabaseConnectionManager::get_conn()->query($sql);
                $result = $query->fetch();
                if(!isset($result["questions"])) {
                    $sql = "INSERT INTO `learning_progress`(`userId`, `date`, `questions`) VALUES (" . $userId . ",CURRENT_DATE(),1)";
                    DatabaseConnectionManager::get_conn()->query($sql);
                } else {
                    $sql = "UPDATE `learning_progress` SET `questions`=" . ($result["questions"] + 1) ." WHERE userId = " . $userId . " AND date = CURRENT_DATE()";
                    DatabaseConnectionManager::get_conn()->query($sql);
                }
            }
        }
    }
?>