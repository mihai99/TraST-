<!DOCTYPE html>
<head>
    <script src="javascript/page-loaders-utils.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/test-results.css">
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
            21/26
        </p>

        <div class="buttons">
            <a href="/clasament.php" class="main-button">Clasament</a>
            <a href="tests-selector.php" class="main-button">Incearca inca un test</a>
            <a href="/progres.php" class="main-button">Vezi progresul</a>
        </div>
    </div>
   

</body>
</html>