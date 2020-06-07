<?php
    require_once('../php_scripts/DatabaseConnectionManager.php');

    class Question
    {
        public $id;
        public $text;
        public $answer1;
        public $answer2;
        public $answer3;
        public $answer;
        public $imagePath;
        public $dificulty;

        public function __construct($id, $text, $answer1, $answer2, $answer3, $answer, $imagePath, $dificulty)
        {
            $this->id = $id;
            $this->text = $text;
            $this->answer1 = $answer1;
            $this->answer2 = $answer2;
            $this->answer3 = $answer3;
            $this->answer = $answer;
            $this->imagePath = $imagePath;
            $this->dificulty = $dificulty;
        }

        public static function GetRandomQuestion()
        {
            $sql = "SELECT * FROM questions order by RAND() LIMIT 1";
            return self::getData($sql);
        }

        public static function GetQuestionWithDifficulty($dificulty)
        {
            $sql = "SELECT * FROM questions where dificulty = " . $dificulty . "order by RAND() LIMIT 1";
            return self::getData($sql);
        }

        public static function GetQuestionWithId($id)
        {
            $sql = "SELECT * FROM questions where id = " . $id;
            return self::getData($sql);
        }

        private static function getData($sqlQuery)
        {
            $result = DatabaseConnectionManager::get_conn()->query($sqlQuery);
            $resultRow = ($result->fetchAll())[0];
            return new Question(
                $resultRow["id"],
                $resultRow["text"],
                $resultRow["answer1"],
                $resultRow["answer2"],
                $resultRow["answer3"],
                $resultRow["answer"],
                $resultRow["imagePath"],
                $resultRow["dificulty"]);
        }

        public function CheckAnswer($answerInput)
        {
            if ($this->answer == $answerInput) {
                return true;
            } else {
                return false;
            }
        }
    }

?>