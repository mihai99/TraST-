<?php

    class DatabaseConnectionManager
    {
        private static $conn = null;

        public static function get_conn()
        {
            if (is_null(self::$conn)) {
                self::$conn = new PDO('mysql:host=localhost;dbname=test', 'root');
            }
            return self::$conn;
        }
    }
    /*
     * MODEL USAGE
      class message_model
    {
        public function addUser($user, $pwd)
        {
            $sql = "INSERT INTO users(nume, parola) values(:username, :password)";
            $req = DatabaseConnectionManager::get_conn()->prepare($sql);
            $req->bindParam(':username', $user);
            $md5 = md5($pwd);
            $req->bindParam(':password', $md5);
            return $req->execute();
        }

        public function getUser($user = null)
        {
            $sql = "SELECT * FROM users";
            if (!is_null($user))
                $sql .= " WHERE nume='" . $user . '\'';
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            return $result->fetchAll();
        }
    }
     */