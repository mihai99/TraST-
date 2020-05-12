function register() {
    let name = document.getElementById('name-register').value;
    let username = document.getElementById('username-register').value;
    let password = document.getElementById('password-register').value;
    let repeatedPassword = document.getElementById('repeat-password-register').value;
    let email = document.getElementById('email-register').value;
    let phone = document.getElementById('phone-register').value; 
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("register-response").innerHTML = this.responseText;
          document.getElementById("register-modal").style.height="480px";
        }
    };
    const requestURL = "../../php_scripts/Register.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("name=" + name + 
    "&username="+username +
    "&password="+password + 
    "&repeat-password=" + repeatedPassword +
    "&email="+email +
    "&phone="+phone);
    
  }

function login() {
    let username = document.getElementById('username-login').value;
    let password = document.getElementById('password-login').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("login-response").innerHTML = this.responseText;
          document.getElementById("login-modal").style.height="220px";
        }
    };
    const requestURL = "../../php_scripts/Login.php";
    xmlhttp.open("POST", requestURL);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("username="+username + "&password="+password);
    
}