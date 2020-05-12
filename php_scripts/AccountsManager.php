<?php 
    require_once('./DatabaseConnectionManager.php');
    class AccountManager {        
        private static function getUsersWithUsername($username) {
            $sql = "SELECT * FROM `users` WHERE username='" . $username ."'";
            $result = DatabaseConnectionManager::get_conn()->query($sql);    
            return $result->fetchAll();
        }

       private static function getUsersWithEmail($email) {
            $sql = "SELECT * FROM `users` WHERE email='" . $email ."'";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            return $result->fetchAll();
        }

        public static function registerUser($name, $username, $password, $repeatedPassword, $email, $phone) {
            if($name == "" || $username == "" || $password == "" || $repeatedPassword == "" || $email == "" || $phone == "") {
                echo "<div style=\"color:red\">All fields are required</div>";
            } else if(!count(AccountManager::getUsersWithUsername($username))==0) {
                echo  "<div style=\"color:red\">Username already exists</div>";              
            } else if(!count(AccountManager::getUsersWithEmail($email))==0) {
                echo  "<div style=\"color:red\">Email already exists</div>";              
            } else if($password != $repeatedPassword) {
                echo  "<div style=\"color:red\">Passwords do not match</div>";              
            } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo  "<div style=\"color:red\">Email is not correct</div>";
            } else if(!preg_match('/^[0-9]{10}+$/', $phone)) {
                echo  "<div style=\"color:red\">Phone is not valid</div>";
            } else {
                $sql = "INSERT INTO `users` (`name`, `username`, `password`, `email`, `phone`) 
                        VALUES (:name, :username, :password, :email, :phone);";
                $request = DatabaseConnectionManager::get_conn()->prepare($sql);   
                $request->bindParam(':name', $name);
                $request->bindParam(':username', $username);
                $request->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
                $request->bindParam(':email', $email);
                $request->bindParam(':phone', $phone);
                if($request->execute()) {
                    echo  "<div style=\"color:green\">Register complete</div>";
                } else {
                    echo $request->error_log;
                }         
            }
        }
        public static function loginUser($username, $password) {
            if( $username == "" || $password == "") 
                echo "<div style=\"color:red\">No username or password</div>";
            else {
                $usersResult = AccountManager::getUsersWithUsername($username);
                if(count($usersResult)>0){
                    for($i=0;$i<count($usersResult);$i++)
                        if(password_verify($password, $usersResult[$i]["password"])) {
                            echo "<div style=\"color:green\">Login successfull</div>";
                            return;
                        }                      
                    echo "<div style=\"color:red\">Wrong password</div>";
                } 
                else {
                    echo "<div style=\"color:red\">Wrong username</div>";
                }
            }
        
           
        }
    }
      

?>