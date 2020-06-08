function getTestsProgress()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);            
            if(response) {
                fillTestProgressGraph(response, "tests-graph-canvas");
            }
        }
    };
    const requestURL = "/php_scripts/GetTestsProgress.php";
    xmlhttp.open("GET", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function getLearningProgress()
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(this.responseText);
            if(response) {
                fillLearningGraph(response, "invatare-graph-canvas");
            }
        }
    };
    const requestURL = "/php_scripts/GetLearningProgress.php";
    xmlhttp.open("GET", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function getComparingTestsProgress(userId)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);            
            if(response) {
                fillTestProgressGraph(response, "compare-tests-graph-canvas");
            }
        }
    };
    const requestURL = "/php_scripts/GetTestsProgress.php?userId=" + userId;
    xmlhttp.open("GET", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}

function getComparingLearningProgress(userId)
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let response = JSON.parse(this.responseText);
            if(response) {
                fillLearningGraph(response, "compare-invatare-graph-canvas");
            }
        }
    };
    const requestURL = "/php_scripts/GetLearningProgress.php?userId=" + userId;
    xmlhttp.open("GET", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}