
function adjustContentHeight() { 
    setTimeout(function() {
        document.getElementById("content").style.height = (document.getElementById("content").contentWindow.document.body.scrollHeight + 50) + "px"; 
    }, 200);
    
}
