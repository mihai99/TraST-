function openBackground() {
    let el = document.getElementsByClassName('modals')[0];
    el.style.display = 'flex';
}
function closeBackground() {
    let el = document.getElementsByClassName('modals')[0];
    el.style.display = 'none';
}
function shopClickPropagation(event, element) {
    if (event.stopPropagation) {
        event.stopPropagation();  
    } else {
        event.cancelBubble = true;
    }
}

function showChangeDetailsModal() {
    openBackground();
    document.getElementsByClassName("change-details-modal")[0].classList.remove("hidden");
    document.getElementsByClassName("change-password-modal")[0].classList.add("hidden");
    document.getElementById("change-details-response-p").innerHTML = "";
    clearFields();
}

function showChangePasswordModal() {   
    openBackground();
    document.getElementsByClassName("change-details-modal")[0].classList.add("hidden");
    document.getElementsByClassName("change-password-modal")[0].classList.remove("hidden");
    document.getElementById("change-password-response-p").innerHTML = "";
    clearFields();
}

function closeModals() {
    document.getElementsByClassName("change-details-modal")[0].classList.add("hidden");
    document.getElementsByClassName("change-password-modal")[0].classList.add("hidden");
    document.getElementById("change-details-response-p").innerHTML = "";
    document.getElementById("change-password-response-p").innerHTML = "";
   closeBackground();
}

function clearFields() {
    const details = document.getElementsByClassName('detail');
    for (let i = 0; i < details.length; i++) {
        details.item(i).childNodes[3].value = "";
     }
     document.getElementById("change-details-response-p").innerHTML = "";
     document.getElementById("change-password-response-p").innerHTML = "";
}
