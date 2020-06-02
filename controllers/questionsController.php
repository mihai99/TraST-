<?php
    require_once('../models/questionModel.php');

    class QuestionsController
    {

        public static function beginTest() {
            session_start();
            $_SESSION["dificulty"] = 0;
            $_SESSION["testNumber"] = 0;
            $_SESSION["currentQuestion"] = 0;
            $_SESSION["correctQuestions"] = 0;
            $_SESSION["showedQuestions"] = array();
            $_SESSION["postponedQuestions"] = array();
            return "done";
        }

        public static function getNextQuestion() {
            session_start();
            $question = self::getQuestion();
           
            while(in_array($question->id, $_SESSION["showedQuestions"])) {
                $question = self::getQuestion();
            }
            $_SESSION["currentQuestion"]++;
            array_push($_SESSION["showedQuestions"], $question->id);
            $_SESSION["CurrentQuestionId"] = $question->id;
            return $question;
        }

        private static function getQuestion() {
            session_start();
            if(count($_SESSION["postponedQuestions"])-1 + $_SESSION["currentQuestion"] >= 26) {
                return self::getPostPonedQuestion();
            }
            if ($_SESSION["dificulty"] != 0) {
                return Question::GetQuestionWithDificulty($_SESSION["dificulty"]);
            } else {
                return Question::GetRandomQuestion();
            }
        }
       
        public static function checkAnswer($answer) {
            session_start();
            $question = Question::GetQuestionWithId($_SESSION["CurrentQuestionId"]);          
            if($question->checkAnswer($answer)==true) {
                $_SESSION["correctQuestions"]++;
                echo "true";
            } else {
                echo "false";
            }
        }

        public static function getPostPonedQuestion() {
            session_start();
            $question = Question::GetQuestionWithId($_SESSION["postponedQuestions"][0]);
            array_shift($_SESSION["postponedQuestions"]);          
            return $question;
        }

        public static function postPoneQuestion() {
            session_start();
            if($_SESSION["postponedQuestions"] == null) {
                $_SESSION["postponedQuestions"] = array();
            }
            array_push($_SESSION["postponedQuestions"],  $_SESSION["CurrentQuestionId"]);
        }
    }
?>