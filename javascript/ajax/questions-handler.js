function beginTest() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            updateTexts();
            getQuestion();
        }
    };
    console.log("begin test called");
    const requestURL = "/php_scripts/BeginQuestion.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

  }

  function getQuestion() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(JSON.parse(this.responseText));
                let response = JSON.parse(this.responseText);

                document.getElementById("answer1text").innerHTML = response["answer1"];
                document.getElementById("answer2text").innerHTML = response["answer2"];
                document.getElementById("answer3text").innerHTML = response["answer3"];
                document.getElementById("question-body").innerHTML = response["text"];
                let imagePath = response["imagePath"];
                if(imagePath == "") {
                    document.getElementById("questionImage").style.display = "none";
                } else {
                    document.getElementById("questionImage").style.display = "block";
                    console.log("images/tests-questions/" + imagePath);
                    document.getElementById("questionImage").src = "images/tests-questions/" + imagePath;
                }
        }
    };
    const requestURL = "/php_scripts/GetQuestion.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();

}

function sendResponse() {
    if(document.getElementsByClassName("selected-answer")[0]) {
        let answer = "";
        let selectedElements = document.getElementsByClassName("selected-answer");
        for(let i=0;i<selectedElements.length;i++) {
            answer += selectedElements[0].firstElementChild.innerHTML;
        }

        if(answer) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                       updateTexts();
                       resetAnswer();
                       getQuestion();
                }
            };
            const requestURL = "/php_scripts/CheckAnswer.php?answer=" + answer;
            console.log(answer);
            xmlhttp.open("GET", requestURL);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send();
        }
    } else {
        alert("Trebuie sa selectati un raspuns");
    }
}

function updateTexts() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            const response = JSON.parse(this.responseText);
            const answersNumber = response[0];
            const correctNumber = response[1];
            const wrongNumber = response[2];
            checkIfTestFailed(wrongNumber);
            checkIfTestPassed(answersNumber, correctNumber);
            document.getElementById("remaining-questions").innerHTML = 26 - answersNumber + "<p>Intrebari totale</p>";
            document.getElementById("corrent-answers").innerHTML = correctNumber + "<p>Raspunsuri corecte</p>";
            document.getElementById("wrong-answers").innerHTML = wrongNumber + "<p>Raspunsuri gresite</p>";
            console.log("updated");

        }
    };
    const requestURL = "/php_scripts/GetQuestionsNubers.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function postponeQuestion()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log("question postponed");
            getQuestion();
        }
    };
    const requestURL = "/php_scripts/PostponeQuestion.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}
function resetAnswer() {
    let answers = document.getElementsByClassName("selected-answer");
    for(let i=0;i<answers.length;i++) {
        answers[i].classList.remove("selected-answer");
    }
}

function checkIfTestFailed(failedResponses) {
    if(failedResponses > 4) {
        location.href = "test-failed.php";
    }
}


function checkIfTestPassed(responseNumber, correctNumber) {
    if(responseNumber == 26 && correctNumber >= 22) {
        location.href = "test-passwd.php";
    }
}