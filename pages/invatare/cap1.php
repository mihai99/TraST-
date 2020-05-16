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
                <a id="dummy"></a>
                <a href="../../m_invatare.php" id="home">CAPITOLUL I: Dispoziții generale</a>
                <a href="cap2.php" id="next">Capitolul 2</a>
            </div>
            <?php
                include_once "cap1.html";
            ?>
        </div>
        <?php
            include_once '../../footer.php';
        ?>
    </body>
</html>
