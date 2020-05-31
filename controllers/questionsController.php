<?php
require_once('../php_scripts/DatabaseConnectionManager.php');

    class QuestionsController
    {

        public static function beginTest() {
            session_start();
            $_SESSION["dificulty"] = 0;
            $_SESSION["testNumber"] = 0;
            $_SESSION["showedQuestions"] = array(-1);
            return "done";
        }

        public static function getNextQuestion() {
            session_start();
            $question = self::getQuestion()[0];
            while(in_array($question["id"], $_SESSION["showedQuestions"])) {
                $question = self::getQuestion()[0];
            }
            $_SESSION["currentQuestion"]++;
            array_push($_SESSION["showedQuestions"], $question["id"]);
            $_SESSION["CurrentQuestionId"] = $question["id"];
            return $question;
        }

        private static function getQuestion() {
            $sql = "SELECT * FROM questions order by RAND() LIMIT 1";
            if ($_SESSION["dificulty"] != 0) {
                $sql = "SELECT * FROM questions where dificulty = " . $_SESSION["dificulty"] . "order by RAND() LIMIT 1";
            }
            $result = DatabaseConnectionManager::get_conn()->query($sql);
           
            return $result->fetchAll();
        }
       
        public static function checkAnswer($answer) {
            session_start();
            $sql = "SELECT answer FROM questions where id = " . $_SESSION["CurrentQuestionId"];          
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $answerResult = $result->fetchAll()[0]["answer"];
            if($answerResult == $answer) {
                $_SESSION["correctQuestions"]++;
                echo "true";
            } else {
                echo "false";
            }
        }
    }
?>