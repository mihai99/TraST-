<!DOCTYPE html>
<head>
    <script src="javascript/timer.js"></script>
    <script src="javascript/page-loaders-utils.js"></script>
    <script src="javascript/answers-handler.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/test.css">
</head>
<body id="page">
    <?php
        include_once 'header.php';
    ?>
    <div class="test">
        <div class="top-info">
            <div id="all-questions" class="top-info-section">
                26
                <p>Intrebari totale</p>
            </div>
            <div id="remaining-questions" class="top-info-section">
                26
                <p>Intrebari ramase</p>
            </div>
            <div id="time" class="top-info-section">30:00</div>
            <div id="corrent-answers" class="top-info-section">
                6
                <p>Raspunsuri corecte</p>
            </div>
            <div id="wrong-answers" class="top-info-section">
                9
                <p>Raspunsuri gresite</p>
            </div>
        </div>
        <div class="question">
            <div class="question-body">Ce obligaţii vă revin atunci când, pe un drum public, întâlniţi autovehicule
                aparţinând Serviciului de Ambulanţă sau Serviciului Român de Informaţii, care folosesc mijloacele de
                avertizare luminoasă şi sonoră?
            </div>
            <div class="question-bottom-section">
                <div class="answers">
                    <div id="answer1" class="answer" onclick="updateSelectedAnswer(this)">
                        <p>A</p>
                        <p>să opriţi imediat pe dreapta părţii carosabile;</p>
                    </div>
                    <div id="answer2" class="answer" onclick="updateSelectedAnswer(this)">
                        <p>B</p>
                        <p>să opriţi imediat pe dreapta părţii carosabile;</p>
                    </div>
                    <div id="answer3" class="answer" onclick="updateSelectedAnswer(this)">
                        <p>C</p>
                        <p>să opriţi imediat pe dreapta părţii carosabile;</p>
                    </div>
                </div>
                <img src="images/tests-questions/image1.png" alt="" class="question-image">
            </div>
        </div>
        <div class="bottom-buttons">
            <a id="button-later" class="secondary-button" href="test-passed.php">Raspunde mai tarziu</a>
            <a id="button-delete" class="secondary-button" href="test-failed.php">Sterge raspunsul</a>
            <a id="button-send" class="secondary-button" href="test-passed.php">Trimite raspunsul</a>
        </div>
    </div>
    <?php
        include_once 'footer.php';
    ?>

    <script>
        parent.scroll(0, 0);
        var seconds = 1800;
        var timer = setInterval(function () {
            seconds = updateTimer(seconds, document.getElementById("time"));
            if (seconds == 0) {
                clearInterval(timer);
                console.log("done");

            }
        }, 1000);
    </script>

</body>
</html>