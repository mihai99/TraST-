function openBackground() {
    let el = document.getElementById('modal-background');
    clearLoginRegisterFields();
    el.style.display = 'block';
}
function closeBackground() {
    let el = document.getElementById('modal-background');
    el.style.display = 'none';
}
function shopClickPropagation(event, element) {
    if (event.stopPropagation) {
        event.stopPropagation();   // W3C model
    } else {
        event.cancelBubble = true; // IE model
    }
}

function showLoginModal() {
    document.getElementById("login-modal").style.display="flex";
    document.getElementById("register-modal").style.display="none";
    clearLoginRegisterFields();
}

function showRegisterModal() {   
    document.getElementById("login-modal").style.display="none";
    document.getElementById("register-modal").style.display="flex";
    clearLoginRegisterFields();
}

function clearLoginRegisterFields() {
    document.getElementById("login-modal").style.height="200px";
    document.getElementById("login-response").innerHTML = "";
    document.getElementById("register-modal").style.height="460px";
    document.getElementById('name-register').value = "";
    document.getElementById('username-register').value= "";
    document.getElementById('password-register').value= "";
    document.getElementById('repeat-password-register').value= "";
    document.getElementById('email-register').value= "";
    document.getElementById('phone-register').value= "";
    document.getElementById("register-response").innerHTML = ""
    document.getElementById('username-login').value= "";
    document.getElementById('password-login').value= "";
}