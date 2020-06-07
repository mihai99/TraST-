<?php


    class answersView
    {
        private $template;
        private $question;

        public function __construct($question)
        {
            $this->template = 'questionTemplate.php';
            $this->question = $question;
        }

        public function viewPage()
        {
            ob_start();
            include_once $this->template;
            ob_end_clean();
            return ob_get_contents();
        }


    }