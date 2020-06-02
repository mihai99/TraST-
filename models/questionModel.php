<?php 
    require_once('../php_scripts/DatabaseConnectionManager.php');

    class Question {
        public $id;
        public $text;
        public $answer1;
        public $answer2;
        public $answer3;
        public $answer;
        public $imagePath;
        public $dificulty;

        public function __construct($id, $text, $answer1, $answer2, $answer3, $answer, $imagePath, $dificulty) {
            $this->id = $id;
            $this->text = $text;
            $this->answer1 = $answer1;
            $this->answer2 = $answer2;
            $this->answer3 = $answer3;
            $this->answer = $answer;
            $this->imagePath = $imagePath;
            $this->dificulty = $dificulty;
        }

        public static function GetRandomQuestion() {
            $sql = "SELECT * FROM questions order by RAND() LIMIT 1";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $resultRow = $result->fetch();
            $question = new Question(
                $resultRow["id"],
                $resultRow["text"],
                $resultRow["answer1"],
                $resultRow["answer2"],
                $resultRow["answer3"],
                $resultRow["answer"],
                $resultRow["imagePath"],
                $resultRow["dificulty"]);
            return $question;
        }

        public static function GetQuestionWithDificulty($dificulty) {
            $sql = "SELECT * FROM questions where dificulty = " . $dificulty . "order by RAND() LIMIT 1";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $resultRow = $result->fetch();
            $question = new Question(
                $resultRow["id"],
                $resultRow["text"],
                $resultRow["answer1"],
                $resultRow["answer2"],
                $resultRow["answer3"],
                $resultRow["answer"],
                $resultRow["imagePath"],
                $resultRow["dificulty"]);
            return $question;
        }

        public static function GetQuestionWithId($id) {
            $sql = "SELECT * FROM questions where id = " . $id;
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $resultRow = ($result->fetchAll())[0];
            $question = new Question(
                $resultRow["id"],
                $resultRow["text"],
                $resultRow["answer1"],
                $resultRow["answer2"],
                $resultRow["answer3"],
                $resultRow["answer"],
                $resultRow["imagePath"],
                $resultRow["dificulty"]);
            return $question;
        }

        public function CheckAnswer($answerInput) {
            if($this->answer == $answerInput) {
                return true;
            } else {
                return false;
            }
        }
    }

?>