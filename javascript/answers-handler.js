function updateSelectedAnswer(element) {
  document.getElementById("answer1").classList.remove("selected-answer");
  document.getElementById("answer2").classList.remove("selected-answer");
  document.getElementById("answer3").classList.remove("selected-answer");

  element.classList.add("selected-answer");
}