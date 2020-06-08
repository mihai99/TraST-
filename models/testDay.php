<?php 
    include dirname(__FILE__) . "\\..\\php_scripts\\DatabaseConnectionManager.php";

    class TestDay {
        public $date;
        public $dateDif;
        public $passed;
        public $failed;

        public function __construct($userId, $date)
        {
            $this->date = $date;
            $sql = "SELECT `failed`, `passed`,  10-DATEDIFF(CURRENT_DATE(), `date`) as dateDif  FROM `tests_progress` WHERE userId = ". $userId . " and date = '" . $date . "'";
            $query = DatabaseConnectionManager::get_conn()->query($sql);
            $result = $query->fetch();
            $this->passed = $result["passed"];
            $this->failed = $result["failed"];
            $this->dateDif = $result["dateDif"];
        }
    }
?>