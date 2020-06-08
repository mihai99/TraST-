function createAdmin() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('create-admin-response').innerHTML = this.responseText;
        }
    };
    let username = document.getElementById('create-admin-input').value;
    const requestURL = "/php_scripts/createAdmin.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('username=' + username);
}

function deleteUser() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('delete-user-response').innerHTML = this.responseText;
        }
    };
    let username = document.getElementById('delete-user-input').value;
    const requestURL = "/php_scripts/deleteUser.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('username=' + username);
}

function deleteAdmin() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('delete-admin-response').innerHTML = this.responseText;
        }
    };
    let username = document.getElementById('delete-admin-input').value;
    const requestURL = "/php_scripts/deleteAdmin.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send('username=' + username);
}

function addQuestion() {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (this.responseText === 'error') {
                alert('Toate campurile trebuiesc completate la introducerea unei noi intrebari!');
            } else {
                document.getElementById('add-question-response').innerHTML = this.responseText;
            }
        }
    };

    let text = document.getElementById('question-text-input').value;
    let ans1 = document.getElementById('question-answer1').value;
    let ans2 = document.getElementById('question-answer2').value;
    let ans3 = document.getElementById('question-answer3').value;
    let ans = document.querySelector('input[name="answer-option"]:checked').id;
    let dif = document.querySelector('input[name="difficulty-option"]:checked').id;

    const requestURL = "/php_scripts/createNewQuestion.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let body = 'text=' + text + '&ans1=' + ans1 + '&ans2=' + ans2 + '&ans3=' + ans3 + '&ans=' + ans + '&dif=' + dif;
    xmlhttp.send(body);
}

