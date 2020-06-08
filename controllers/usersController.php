<?php 
    include dirname(__FILE__) ."\\helpers\\imageUploader.php";
    require_once("../php_scripts/AccountsManager.php");

    class UsersController {
        public static function GetSearchedUsers($searchInput) {
            return UserModel::GetSearchedUser($searchInput);
        }

        public static function GetLogedInUser() {
            $user = UserModel::GetLoggedInUser();
            $user->password = "";
            return $user;
        }

        public static function UpdateUserPhoto($image, $filePath) {
            return ImageUploader::UploadImage($image, $filePath);
        }

        public static function UpdateUserDetails($name, $email, $username, $phone) {
            if($username != "" && !count(AccountManager::getUsersWithUsername($username)) == 0) {
                return ChangeDataError::GetError("Username is taken");                
            }
            if($email != "" && !count(AccountManager::getUsersWithUsername($email)) == 0)  {
                return ChangeDataError::GetError("Email allready in use");
            }
            if($phone != "" && !preg_match('/^[0-9]{10}+$/', $phone) )   {
                return ChangeDataError::GetError("Phone number is not valid");
            }
            if($email != "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return ChangeDataError::GetError("Email is not valid");
            }   

            $user = UserModel::GetLoggedInUser();
            $user->name = $name ? $name : $user->name;
            $user->email = $email ? $email : $user->email;
            $user->username = $username ? $username : $user->username;
            $user->$phone ? $name : $user->phone;
            $user->UpdateFields();
            return true;
        }

        public static function UpdatePassword($oldPasswod, $newPassword, $repeatPassword) {
            $loggedUser = UserModel::GetLoggedInUser();
            if(!password_verify($oldPasswod, $loggedUser->password)) {
                return ChangeDataError::GetError("Password is not correct");
            }
            if($newPassword != $repeatPassword) {
                return ChangeDataError::GetError("Passwords do not match");
            }
            $loggedUser->UpdatePassword($newPassword);
            return true;
        }

        public static function GetUserById($id) {
            return UserModel::GetUserById($id);
        }
    }

?>