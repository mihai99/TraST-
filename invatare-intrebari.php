<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TraST</title>
        <link rel="stylesheet" href="styles/invatare/invatare-intrebari.css">
        <script src="javascript/invatare-scripts/choice-handler.js"></script>
        <script src="javascript/invatare-scripts/invatare-intrebari.js"></script>
        <script src="javascript/answers-handler.js"></script>
    </head>
    <body onload="loadQuestion()">
        <?php
            session_start();
            if (!isset($_SESSION['username'])) {
                header("location:/index.php");
                exit();
            }
            if ($_SESSION['progres'] == $_SESSION['intrebari_totale'])
                header("location:/invatare.php");
            include_once "header.php";
        ?>
        <div class="main-container">
            <div class="intrebari-info">
                <div class="top-info">
                    <div id="all-questions" class="top-info-section">
                        <div id="total-q">
                            <?php
                                echo $_SESSION['intrebari_totale'];
                            ?>
                        </div>
                        <p>Intrebari totale</p>
                    </div>
                    <div id="correct-answers" class="top-info-section">
                        <div id="current-q"></div>
                        <p>Intrebarea curenta</p>
                    </div>
                    <div id="remaining-questions" class="top-info-section">
                        <div id="remain-q"></div>
                        <p>Intrebari ramase</p>
                    </div>
                </div>
            </div>
            <div class="intrebari-content">
                <div class="question">
                    <?php
                        if (isset($_SESSION['wrong-answer'])) {
                            echo '<p id="wrong-answer">Ati raspuns gresit!</p>';
                            unset($_SESSION['wrong-answer']);
                        }
                    ?>
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
                    <button id="button-send" class="secondary-button" onclick="checkAnswer()">
                        Trimite raspunsul
                    </button>
                    <span id="answer-message-correct">Corect!</span>
                    <span id="answer-message-wrong">Gresit! Mai incearca.</span>
                </div>
            </div>
        </div>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>