<!DOCTYPE html>
<head>
    <script src="javascript/timer.js"></script>
    <script src="javascript/page-loaders-utils.js"></script>
    <script src="javascript/answers-handler.js"></script>
    <script src="javascript/ajax/questions-handler.js"></script>
    <link rel="stylesheet" type="text/css" href="styles/general.css">
    <link rel="stylesheet" type="text/css" href="styles/tests/test.css">
</head>
<body id="page" onload="beginTest()">
    <?php
        include_once 'header.php';
    ?>
    <div class="test body-wrapper">
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
                0
                <p>Raspunsuri corecte</p>
            </div>
            <div id="wrong-answers" class="top-info-section">
                0
                <p>Raspunsuri gresite</p>
            </div>
        </div>
        <div class="question">
            <div class="question-body" id="question-body">
            </div>
            <div class="question-bottom-section">
                <div class="answers">
                    <div id="answer1" class="answer" onclick="updateSelectedAnswer(this)">
                        <p>A</p>
                        <p id="answer1text"></p>
                    </div>
                    <div id="answer2" class="answer" onclick="updateSelectedAnswer(this)">
                        <p>B</p>
                        <p id="answer2text"></p>
                    </div>
                    <div id="answer3" class="answer" onclick="updateSelectedAnswer(this)">
                        <p>C</p>
                        <p id="answer3text"></p>
                    </div>
                </div>
                <img id="questionImage" src="" alt="" class="question-image">
            </div>
        </div>
        <div class="bottom-buttons">
            <button id="button-later" class="secondary-button" onclick="postponeQuestion()">Raspunde mai tarziu</button>
            <button id="button-delete" class="secondary-button" onclick="resetAnswer()">Sterge raspunsul</button>
            <button id="button-send" class="secondary-button" onclick="sendResponse()">Trimite raspunsul</button>
        </div>
    </div>
 
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