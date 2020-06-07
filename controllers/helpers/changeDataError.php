<?php
    class ChangeDataError {
        public $error;
        private function __construct($error) {
            $this->error = $error;
        }

        public static function GetError($message) {
            return new ChangeDataError($message);
        }
    }
?>