function loadHomepage() {
    document.getElementById("content").src="./pages/homepage.html";
}

function adjustContentHeight() { document.getElementById("content").style.height = document.getElementById("content").contentWindow.document.body.scrollHeight + "px"; }
