function compareUsers(userId) {
    document.getElementById("compare").classList.add("show-item");
    document.getElementById("compare").classList.remove("hide-item");
    document.getElementById("user").classList.add("comparing");
    document.getElementById("searchedUsers").classList.add("hide-item");
    document.getElementById("searchedUsers").classList.remove("show-item");
    document.getElementById("hide-comparing").classList.add("show-item");
    document.getElementById("hide-comparing").classList.remove("hide-item");
    getComparingnUser(userId);
    getComparingLearningProgress(userId);
    getComparingTestsProgress(userId);
}

function hideComparing() {
    document.getElementById("compare").classList.remove("show-item");
    document.getElementById("compare").classList.add("hide-item");
    document.getElementById("user").classList.remove("comparing");
    document.getElementById("searchedUsers").classList.add("hide-item");
    document.getElementById("searchedUsers").classList.remove("show-item");  
    document.getElementById("hide-comparing").classList.remove("show-item");
    document.getElementById("hide-comparing").classList.add("hide-item");
}