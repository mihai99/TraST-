
function updateTimer(seconds, element) {
    var reaminingMinutes  = Math.floor(seconds / 60),
        remainingSeconds  = seconds % 60;    
    if (remainingSeconds < 10) {        
        remainingSeconds = '0' + remainingSeconds;    
    }
    if (reaminingMinutes < 10) {
        reaminingMinutes = '0' + reaminingMinutes;    
    }
    element.innerHTML = reaminingMinutes + ":" + remainingSeconds;    
 
    return seconds - 1;
}
