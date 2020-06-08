<!DOCTYPE html>
<head>
    <script src="javascript/page-loaders-utils.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/test-results.css">
</head>
<body id = "page">
    <?php
        include_once 'header.php';
    ?>
    <div class="container">
        <p class="title light-red">
            MAI INCEARCA
        </p>
        <p class="subtitle light-red">
            Ai picat testul din pacate!
        </p>
        <p class="score strong-red">
            <?php 
                echo $_SESSION["correctQuestions"] . "/26";
                error_reporting(0);
                include dirname(__FILE__) . "//models//testProgressModel.php";
                TestProgressModel::FailTest();
            ?>
        </p>

        <div class="buttons">
            <a href="../invatare.php" class="main-button">Mediu de invatare</a>
            <a href="tests-selector.php" class="main-button">Incearca inca un test</a>
            <?php
                if(isset($_SESSION["id"])) {
                    echo '<a href="../profile.php" class="main-button">Vezi progresul</a>';
                }
            ?>
        </div>
    </div>
   
    
</body>
</html>
