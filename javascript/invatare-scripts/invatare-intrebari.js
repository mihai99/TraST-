function loadQuestion() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.response.toString());
            let response = JSON.parse(this.responseText);
            document.getElementById("answer1text").innerHTML = response["answer1"];
            document.getElementById("answer2text").innerHTML = response["answer2"];
            document.getElementById("answer3text").innerHTML = response["answer3"];
            document.getElementById("question-body").innerHTML = response["text"];
            let total = document.getElementById('total-q');
            let current = document.getElementById('current-q');
            current.innerHTML = parseInt(response['id']) + 1;
            document.getElementById('remain-q').innerHTML = total.innerHTML - current.innerHTML + 1;
            document.getElementById('answer-message-correct').style.visibility = "hidden";
            document.getElementById('answer-message-wrong').style.visibility = "hidden";
            let imagePath = response["imagePath"];
            if (imagePath === "") {
                document.getElementById("questionImage").style.display = "none";
            } else {
                document.getElementById("questionImage").style.display = "block";
                console.log("images/tests-questions/" + imagePath);
                document.getElementById("questionImage").src = "images/tests-questions/" + imagePath;
            }
        }
    };
    const requestURL = "/controllers/answersController.php";
    xmlhttp.open("GET", requestURL, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function checkAnswer() {
    if (document.getElementsByClassName("selected-answer")[0]) {
        let answer = document.getElementsByClassName("selected-answer")[0].getElementsByTagName("p")[1].id;
        let choice = 'A';
        switch (answer) {
            case 'answer2text':
                choice = 'B';
                break;
            case 'answer3text':
                choice = 'C';
                break;
            default:
                break;
        }
        console.log(choice);
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);
                if (this.responseText === "true") {
                    setTimeout(function () {
                        updateQuestion();
                    }, 1200);
                    document.getElementById('answer-message-wrong').style.visibility = "hidden";
                    document.getElementById('answer-message-correct').style.visibility = "visible";
                    document.getElementById('button-send').disabled = true;
                } else {
                    document.getElementById('answer-message-correct').style.visibility = "hidden";
                    document.getElementById('answer-message-wrong').style.visibility = "visible";
                }
            }
        };
        const requestURL = '/php_scripts/CheckAnswerProgress.php?' + 'id='
            + document.getElementById('current-q').innerText
            + "&answer=" + choice;
        console.log(requestURL);
        xmlhttp.open("GET", requestURL, true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    } else {
        alert("Trebuie sa selectati un raspuns.");
    }
}

function updateQuestion() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            document.getElementById('button-send').disabled = false;
            loadQuestion();
        }
    };
    const requestURL = "/php_scripts/updateUserProgress.php";
    xmlhttp.open("POST", requestURL, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}