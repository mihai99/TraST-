<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/tests-selector.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/random-test.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/random-level-tests-group.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/specific-tests-group.css">
    <link rel="stylesheet" type="text/css" href="styles/home-page.css">
    <script src="javascript/page-loaders-utils.js"></script>
</head>
<body id="page" onload="scrollToTop()">
    <?php
        include_once 'header.php';
    ?>
    <div id="gallery" class="container">
        <img src="images/tests-selector/image1.jpg">
        <img src="images/tests-selector/image2.jpg">
        <img src="images/tests-selector/image3.jpg">
    </div>

    <div id="random-test" class="container body-wrapper">
        <p class="title">CHESTIONARE AUTO DRPCIV 2020 CATEGORIA B</p>
        <p class="subtitle">Chestionare auto DRPCIV, teste si intrebari pentru categoria B. Completand chestionarele
            auto DRPCIV va ajuta sa luati examenul din prima.</p>
        <p>Aceste chestionare auto sunt corecte in proportie de nouazeci si noua la suta si sunt identice cu
            chestionarele DRPCIV intalnite la examenul auto de la politie!</p>
        <p>Aici gasiti gratuit chestionare auto DRPCIV 2020 online, teste si intrebari, legate de Legislatia Rutiera,
            pentru categoriile B, simuland pe calculator chestionarul auto drpciv de la examen. Chestionarele auto de pe
            site-ul chestionare-az.ro sunt actualizate periodic si sunt conforme legislatiei in vigoare.</p>
        <p>Aici puteti sa va testati cunostintele cu o serie de chestionare pe diverse nivele, dar si cu intrebari total
            random</p>
        <a class="main-button" href="test.php">Incepe un chestionar nou</a>
    </div>

    <div id="random-level-tests" class="container body-wrapper">
        <p>Incepe un chestionar de urmatoarea dificultate: </p>
        <div class="buttons">
            <a href="test.php" class="main-button">Usor</a>
            <a href="test.php" class="main-button">Mediu</a>
            <a href="test.php" class="main-button">Dificil</a>
            <a href="test.php" class="main-button">Extrem</a>
        </div>
    </div>

    <div id="specific-tests" class="container body-wrapper">
        <p>Incepe un anumit test: </p>
        <div id="all-specific-tests">
            <section class="test-group">
                <p>Usoare:</p>
                <div class="buttons">
                    <a href="test.php" class="main-button">1</a>
                    <a href="test.php" class="main-button">2</a>
                    <a href="test.php" class="main-button">3</a>
                    <a href="test.php" class="main-button">4</a>
                    <a href="test.php" class="main-button">5</a>
                    <a href="test.php" class="main-button">6</a>
                    <a href="test.php" class="main-button">7</a>
                    <a href="test.php" class="main-button">8</a>
                    <a href="test.php" class="main-button">9</a>
                    <a href="test.php" class="main-button">10</a>
                    <a href="test.php" class="main-button">11</a>
                </div>
            </section>
            <section class="test-group">
                <p>Medii:</p>
                <div class="buttons">
                    <a href="test.php" class="main-button">1</a>
                    <a href="test.php" class="main-button">2</a>
                    <a href="test.php" class="main-button">3</a>
                    <a href="test.php" class="main-button">4</a>
                    <a href="test.php" class="main-button">5</a>
                    <a href="test.php" class="main-button">6</a>
                    <a href="test.php" class="main-button">7</a>
                    <a href="test.php" class="main-button">8</a>
                    <a href="test.php" class="main-button">9</a>
                    <a href="test.php" class="main-button">10</a>
                    <a href="test.php" class="main-button">11</a>
                </div>
            </section>
            <section class="test-group">
                <p>Grele:</p>
                <div class="buttons">
                    <a href="test.php" class="main-button">1</a>
                    <a href="test.php" class="main-button">2</a>
                    <a href="test.php" class="main-button">3</a>
                    <a href="test.php" class="main-button">4</a>
                    <a href="test.php" class="main-button">5</a>
                    <a href="test.php" class="main-button">6</a>
                    <a href="test.php" class="main-button">7</a>
                    <a href="test.php" class="main-button">8</a>
                    <a href="test.php" class="main-button">9</a>
                    <a href="test.php" class="main-button">10</a>
                    <a href="test.php" class="main-button">11</a>
                </div>
            </section>
            <section class="test-group">
                <p>Extreme:</p>
                <div class="buttons">
                    <a href="test.php" class="main-button">1</a>
                    <a href="test.php" class="main-button">2</a>
                    <a href="test.php" class="main-button">3</a>
                    <a href="test.php" class="main-button">4</a>
                    <a href="test.php" class="main-button">5</a>
                    <a href="test.php" class="main-button">6</a>
                    <a href="test.php" class="main-button">7</a>
                    <a href="test.php" class="main-button">8</a>
                    <a href="test.php" class="main-button">9</a>
                    <a href="test.php" class="main-button">10</a>
                    <a href="test.php" class="main-button">11</a>
                </div>
            </section>
        </div>
    </div>

</body>
</html>