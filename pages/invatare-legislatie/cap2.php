<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../styles/general.css">
        <link rel="stylesheet" type="text/css" href="../../styles/invatare/legislatie.css">
    </head>

    <body>
        <?php
            include_once '../../header.php'
        ?>
        <div class="body-wrapper">
            <div class="cap-nav">
                <a href="cap1.php" id="prev">Capitolul 1</a>
                <a href="../../invatare.php" id="home">CAPITOLUL II: Vehiculele</a>
                <a href="cap3.php" id="next">Capitolul 3</a>
            </div>
            <?php
            include_once "cap2.html";
            ?>
        </div>
        <?php
            include_once '../../footer.php';
        ?>
    </body>

</html>
