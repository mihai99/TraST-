<?php

    class DatabaseConnectionManager
    {
        private static $conn = null;

        public static function get_conn()
        {
            if (is_null(self::$conn)) {
                self::$conn = new PDO('mysql:host=localhost;dbname=trast', 'root');
            }
            return self::$conn;
        }
    }