function chooseAnswer(labelElement) {
    document.getElementById("optionA").classList.remove("checked");
    document.getElementById("optionB").classList.remove("checked");
    document.getElementById("optionC").classList.remove("checked");

    labelElement.classList.add("checked");
}