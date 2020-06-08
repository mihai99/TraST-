<?php 
    class LearningDay {
        public $date;
        public $dateDif;
        public $questions;

        public function __construct($userId, $date)
        {
            $this->date = $date;
            $sql = " SELECT `userId`, `date`, `questions`, 10-DATEDIFF(CURRENT_DATE(), `date`) as dateDif  FROM `learning_progress` WHERE userId = ". $userId . " and date = '" . $date . "'";
            $query = DatabaseConnectionManager::get_conn()->query($sql);
            $result = $query->fetch();
            $this->questions = $result["questions"];
            $this->dateDif = $result["dateDif"];
        }
    }
?>