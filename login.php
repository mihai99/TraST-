<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TraST</title>
        <link rel="stylesheet" type="text/css" href="styles/login-register.css">
    </head>
    <body id="page">
        <?php
            include_once 'header.php';
        ?>
        <div class="form">
            <h2>Intra in cont</h2>
            <?php
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    if ($error == "empty fields") {
                        echo "<p>Toate campurile trebuie completate!</p>";
                    } else {
                        echo "<p>User-ul sau parola gresita!</p>";
                    }
                }
            ?>
            <form action="php_scripts/Login.php" method="post">
                <label for="username-login">Username:</label>
                <input type="text" name="lusername" id="username-login" autocomplete="off">

                <label for="password-login">Password:</label>
                <input type="password" name="lpassword" id="password-login">

                <input type="checkbox" name="lremember-me" id="remember-me">
                <label for="remember-me" id="remember-me-lbl">Remember me</label>

                <input type="submit" name="lsubmit">
            </form>
            <a href="register.php">Nu ai cont? Click aici pentru a creea unul!</a>
        </div>
        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>