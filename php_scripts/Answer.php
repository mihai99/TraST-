<?php


    class Answer
    {
        private $optionA;
        private $optionB;
        private $optionC;


        public function getOptionA()
        {
            return $this->optionA;
        }

        public function getOptionB()
        {
            return $this->optionB;
        }

        public function getOptionC()
        {
            return $this->optionC;
        }

        public function __construct($optionA, $optionB, $optionC)
        {
            $this->optionA = $optionA;
            $this->optionB = $optionB;
            $this->optionC = $optionC;
        }


    }