<!DOCTYPE html>
<html lang="ro">
    <head>
        <script src="javascript/page-loaders-utils.js"></script>
        <link rel="stylesheet" type="text/css" href="styles/general.css">
        <link rel="stylesheet" type="text/css" href="styles/tests/test-results.css">
        <title>TraST</title>
    </head>
    <body id="page">
        <?php
            include_once 'header.php';
        ?>
        <div class="container">
            <p class="title light-green">
                FELICITARI
            </p>
            <p class="subtitle light-green">
                Ai trecut testul cu brio!
            </p>
            <p class="score strong-green">
                <?php
                    echo $_SESSION["correctQuestions"] . "/26";
                    error_reporting(0);
                    include dirname(__FILE__) . "/models//testProgressModel.php";
                    TestProgressModel::PassTest();
                ?>
            </p>

            <div class="buttons">
                <a href="/clasament.php" class="main-button">Clasament</a>
                <a href="tests-selector.php" class="main-button">Incearca inca un test</a>
                <?php
                    if (isset($_SESSION["id"])) {
                        echo '<a href="/profile.php" class="main-button">Vezi progresul</a>';
                    }
                ?>
            </div>
        </div>


    </body>
</html>