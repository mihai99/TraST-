<?php 
    require_once('../php_scripts/DatabaseConnectionManager.php');

    class UserModel {
        public $id;
        public $name;
        public $username;
        public $password;
        public $email;
        public $phone;
        public $imageLink;

        public function __construct($id, $name, $username, $password, $email, $phone, $imageLink) {
            $this->id = $id;
            $this->name = $name;
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->phone = $phone;
            $this->imageLink = $imageLink;
        }
        public function UpdateFields() {
            $sql = "UPDATE `users` SET `name`='" . $this->name . "',`username`='" . $this->username . "',`email`='" . $this->email . "',`phone`='" . $this->phone . "' WHERE id=" . $this->id;
            DatabaseConnectionManager::get_conn()->query($sql);
        }

        public function UpdatePassword($password) {
            $this->password = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE `users` SET `password`='" . $this->password . "' WHERE id=" . $this->id;
            DatabaseConnectionManager::get_conn()->query($sql);
        }

        public static function GetSearchedUser($input) {
            session_start();
            $sql = "SELECT * FROM `users` WHERE LOWER(name) LIKE '%".$input."%' or LOWER(username) LIKE '%".$input."%'";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $resultUsers = $result->fetchAll();
            $resultArray = array();
            foreach($resultUsers as $user) {
                if( $_SESSION['username'] != $user["username"]) {
                    $foundUser = new UserModel($user["id"], $user["name"], $user["username"], $user["password"], $user["email"], $user["phone"],  $user["imageLink"]);
                    array_push($resultArray, $foundUser);
                }
            }
            return $resultArray;
        }

        public static function GetUserById($id) {
            session_start();
            $sql = "SELECT * FROM `users` WHERE id = " .$id;
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $resultUsers = $result->fetch();
            $foundUser = new UserModel($resultUsers["id"], $resultUsers["name"], $resultUsers["username"], $resultUsers["password"], $resultUsers["email"], $resultUsers["phone"],  $resultUsers["imageLink"]);
            return $foundUser;
        }

        public static function GetLoggedInUser() {
            session_start();
            $sql = "SELECT * FROM `users` WHERE username LIKE '%".$_SESSION['username']."%'";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            $resultUsers = $result->fetch();
            $loggedInUser = new UserModel($resultUsers["id"], $resultUsers["name"], $resultUsers["username"], $resultUsers["password"], $resultUsers["email"], $resultUsers["phone"],  $resultUsers["imageLink"]);
            return $loggedInUser;
        }

        public static function UpdateCurrentuserPhoto($photoLink) {
            session_start();
            $photoLink = str_replace("\\", "\\\\", $photoLink);
            $sql = "UPDATE `users` SET `imageLink`='" . $photoLink . "' WHERE username = '". $_SESSION['username'] . "'";
            DatabaseConnectionManager::get_conn()->query($sql);
        }
    }
?>