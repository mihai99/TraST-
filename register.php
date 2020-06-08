<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TraSt</title>
        <link rel="stylesheet" type="text/css" href="styles/login-register.css">
    </head>
    <body>
        <?php
            include_once 'header.php';
        ?>
        <div class="form">
            <h2>Creaza-ti un cont gratuit!</h2>
            <?php
                if (isset($_GET['error'])) {
                    $error = $_GET['error'];
                    if ($error == "empty fields") {
                        echo '<p>Toate campurile trebuie completate!</p>';
                    } else if ($error == "username taken") {
                        echo '<p>Username-ul ales este deja folosit. Va rugam alegeti altul.</p>';
                    } else if ($error == "email taken") {
                        echo '<p>Email-ul introdus este deja folosit.</p>';
                    } else if ($error == "email invalid") {
                        echo '<p>Email-ul introdus este invalid</p>';
                    } else if ($error == "match") {
                        echo '<p>Parolele nu se potrivesc.</p>';
                    } else if ($error == "phone") {
                        echo '<p>Numarul de telefon introdus este invalid.</p>';
                    } else {
                        echo '<p>Eroare neasteptata!</p>';
                        echo '<p>' . $error . '</p>';
                    }
                }
            ?>
            <form action="php_scripts/Register.php" method="post">
                <label for="name-register">Name*:</label>
                <input type="text" name="rname" id="name-register" autocomplete="off">

                <label for="username-register">Username*:</label>
                <input type="text" name="rusername" id="username-register" autocomplete="off">

                <label for="email-register">Email*:</label>
                <input type="text" name="remail" id="email-register" autocomplete="off">

                <label for="password-register">Password*:</label>
                <input type="password" name="rpass" id="password-register">

                <label for="rpassword-register">Repeat password*:</label>
                <input type="password" name="rrpass" id="rpassword-register">

                <label for="phone-register">Phone*:</label>
                <input type="text" name="rphone" id="phone-register" autocomplete="off">

                <input type="submit" name="rsumbit" value="Register" class="main-button">
                <a href="login.php">Ai deja cont? Click aici pentru a te conecta!</a>
            </form>
        </div>
    </body>
</html>