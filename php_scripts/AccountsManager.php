<?php
    require_once('./DatabaseConnectionManager.php');
    session_start();

    class AccountManager
    {
        private static function getUsersWithUsername($username)
        {
            $sql = "SELECT * FROM users WHERE username='" . $username . "'";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            return $result->fetchAll();
        }

        private static function getUsersWithEmail($email)
        {
            $sql = "SELECT * FROM users WHERE email='" . $email . "'";
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            return $result->fetchAll();
        }

        private static function getUserProgress($userID)
        {
            $sql = "SELECT * FROM user_progress WHERE user_id=" . $userID;
            $result = DatabaseConnectionManager::get_conn()->query($sql);
            return $result->fetch();
        }

        public static function getTotalQuestions()
        {
            $sql = 'SELECT MAX(id) AS cnt FROM questions';

            $result = DatabaseConnectionManager::get_conn()->query($sql);
            return $result->fetch();
        }


        public static function registerUser($name, $username, $password, $repeatedPassword, $email, $phone)
        {
            if ($name == "" || $username == "" || $password == "" || $repeatedPassword == "" || $email == "" || $phone == "") {
                header("location:/register.php?error=empty%20fields");
                return;
            } else if (!count(AccountManager::getUsersWithUsername($username)) == 0) {
                header("location:/register.php?error=username%20taken");
                return;
            } else if (!count(AccountManager::getUsersWithEmail($email)) == 0) {
                header("location:/register.php?error=email%20taken");
                return;
            } else if ($password != $repeatedPassword) {
                header("location:/register.php?error=match");
                return;
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("location:/register.php?error=email%20invalid");
                return;
            } else if (!preg_match('/^[0-9]{10}+$/', $phone)) {
                header("location:/register.php?error=phone");
                return;
            } else {
                $sql = "INSERT INTO users VALUES (NULL, :name, :username, :password, :email, :phone, CURRENT_DATE);";
                $request = DatabaseConnectionManager::get_conn()->prepare($sql);
                $request->bindParam(':name', $name);
                $request->bindParam(':username', $username);
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                $request->bindParam(':password', $password_hash);
                $request->bindParam(':email', $email);
                $request->bindParam(':phone', $phone);
                if ($request->execute()) {
                    $_SESSION['registered'] = true;
                    echo "Session set: " . $_SESSION['registered'];
                    sleep(4);
                    header("location:/index.php");
                } else {
                    header("location:/register.php?error=sqlerror");
                }
            }
        }

        public static function loginUser($username, $password)
        {
            if ($username == "" || $password == "")
                header("location:/login.php?error=empty%20fields&username=" . $_POST['lusername']);
            else {
                $usersResult = AccountManager::getUsersWithUsername($username);
                if (count($usersResult) > 0) {
                    foreach ($usersResult as $account) {
                        if (password_verify($password, $account["password"])) {
                            $_SESSION['id'] = $account['id'];
                            $_SESSION['username'] = $username;
                            $_SESSION['email'] = $account['email'];
                            $_SESSION['logged_in'] = true;
                            $_SESSION['register_date'] = $account['register_date'];
                            $progress = AccountManager::getUserProgress($account['id']);

                            $_SESSION['progres'] = intval($progress[1]) + 1;
                            $_SESSION['chestionare_totale'] = $progress[2];
                            $_SESSION['chestionare_corecte'] = $progress[3];

                            $_SESSION['intrebari_totale'] = AccountManager::getTotalQuestions()['cnt'] + 1;

                            header("location:/index.php");
                            exit();
                        }
                    }
                    header("location:/login.php?error=user%20not%20found");
                    exit();
                } else {
                    header("location:/login.php?error=user%20not%20found");
                    exit();
                }
            }


        }
    }


?>