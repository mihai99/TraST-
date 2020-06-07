<?php
    include dirname(__FILE__) ."\\changeDataError.php";
    include dirname(__FILE__) ."\\..\\..\\models\\userModel.php";

    class ImageUploader {
        //image - $_FILES["imageToUpload"]
        public static function UploadImage($image, $filePath) {
            $target_dir = $filePath;
            $imageFileType = strtolower(pathinfo($target_dir . basename($image["name"]),PATHINFO_EXTENSION));
            $nameOnServer = ImageUploader::getRandomNamme(). "." . $imageFileType;
            $target_file = $target_dir . $nameOnServer;

            if(isset($_POST["submit"])) {
                $check = getimagesize($image["tmp_name"]);
                if(!($check !== false)) {
                    return ChangeDataError::GetError("File is not an image.");
                }
            }
            if (file_exists($target_file)) {
                return ChangeDataError::GetError("File already exists.");
            }
            if ($image["size"] > 500000) {
                return ChangeDataError::GetError("File is too large.");
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                return ChangeDataError::GetError("Only JPG, JPEG, PNG & GIF files are allowed.");
            }
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                UserModel::UpdateCurrentuserPhoto("http://localhost/images/profiles/".$nameOnServer);
                return true;
            }
           return ChangeDataError::GetError("Sorry, there was an error uploading your image.");            
        }
        private static function getRandomNamme() {
            $length = 10;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    }
