function getSearchedUsers(searchInput) {    
    let parent = document.getElementsByClassName("serach-result")[0];
    if(searchInput.length > 2) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let searchedUsers = JSON.parse(this.responseText);
                if(searchedUsers.length > 0) {
                    parent.style.display = "block";
                    parent.innerHTML = "";
                    for(let i=0; i<searchedUsers.length; i++) {
                        let text = '<div class="person">';
                        text += '<div class="name">' + searchedUsers[i].name + '</div>';
                        text += '<button class="secondary-button" onclick="compareUsers(searchedUsers[i].id)">Compara progresia</button>';
                        text += '</div>';
                        parent.innerHTML += text;
                    }
                } else {
                    parent.style.display = "none";
                }
            }
        };
        const requestURL = "/php_scripts/GetSearchedUsers.php?name="+searchInput;
        xmlhttp.open("GET", requestURL);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();

    } else {
        parent.style.display = "none";
    }
    
}

function getLoggedInUser() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText);            
            const user = JSON.parse(this.responseText);
            document.getElementById("profile-image").src = user.imageLink;
            document.getElementById("user-name").innerHTML = "Nume: " + user.name;
            document.getElementById("user-username").innerHTML = "Username: " + user.username;
            document.getElementById("user-phone").innerHTML = "Telefon: " + user.phone;
            document.getElementById("user-email").innerHTML = "Email: " + user.email;
        }
    };
    const requestURL = "/php_scripts/GetLoggedInUser.php";
    xmlhttp.open("GET", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}
function changeDetailsResponseArrived() {
    let response = document.getElementById("details-response-frame").contentWindow.document.body.innerHTML;
    if(response == 1) {
        getLoggedInUser();
        closeModals();
    } else {
        document.getElementById("change-details-response-p").innerHTML = response;
    }
}


function changePasswordResponseArrived() {
    let response = document.getElementById("password-response-frame").contentWindow.document.body.innerHTML;
    if(response == 1) {
        closeModals();
    } else {
        document.getElementById("change-password-response-p").innerHTML = response;
    }
    console.log(response);
}
