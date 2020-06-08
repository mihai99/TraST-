<?php
     include dirname(__FILE__) . "//testDay.php";

    class TestProgressModel {
        public $userId;
        public $testDays;
        private function __construct($userId) {
            $this->userId = $userId;
            $this->testDays = array();
        }

        public static function GetProgresOfUser($userId)
        {
            $resultObj = new TestProgressModel($userId);
            $sql = "SELECT `date` FROM `tests_progress` WHERE userId = " . $userId . " AND date >= DATE_SUB(NOW(), INTERVAL 10 DAY) ORDER BY `date`";
            $query = DatabaseConnectionManager::get_conn()->query($sql);
            $result = $query->fetchAll();
            foreach($result as $resultRow) {
                $testDay = new TestDay($userId, $resultRow["date"]);
                array_push($resultObj->testDays, $testDay);
            }       
            return $resultObj; 
        }

        public static function PassTest() 
        {
            session_start();
            if(isset($_SESSION["id"])) {
                $userId = $_SESSION["id"];
                $sql = "SELECT * FROM `tests_progress` WHERE date = CURRENT_DATE() AND userId = " . $userId;
                $query = DatabaseConnectionManager::get_conn()->query($sql);
                $result = $query->fetch();
                if(!isset($result["passed"])) {
                    $sql = "INSERT INTO `tests_progress`(`userId`, `date`, `failed`, `passed`) VALUES (" . $userId . ",CURRENT_DATE(),0,1)";
                    DatabaseConnectionManager::get_conn()->query($sql);
                } else {
                    $sql = "UPDATE `tests_progress` SET `passed`=" . ($result["passed"] + 1) ." WHERE userId = " . $userId . " AND date = CURRENT_DATE()";
                    DatabaseConnectionManager::get_conn()->query($sql);
                }
            }
        }

        public static function FailTest() 
        {
            session_start();
            if(isset($_SESSION["id"])) {
                $userId = $_SESSION["id"];
                $sql = "SELECT * FROM `tests_progress` WHERE date = CURRENT_DATE() AND userId = " . $userId;
                $query = DatabaseConnectionManager::get_conn()->query($sql);
                $result = $query->fetch();
                if(!isset($result["failed"])) {
                    $sql = "INSERT INTO `tests_progress`(`userId`, `date`, `failed`, `passed`) VALUES (" . $userId . ",CURRENT_DATE(),1,0)";
                    DatabaseConnectionManager::get_conn()->query($sql);
                } else {
                    $sql = "UPDATE `tests_progress` SET `failed`=" . ($result["failed"] + 1) ." WHERE userId = " . $userId . " AND date = CURRENT_DATE()";
                    DatabaseConnectionManager::get_conn()->query($sql);
                }
            }
        }
    }
?>