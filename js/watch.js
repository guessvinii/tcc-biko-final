let [seconds, minutes] = [0,0];
let timerRef = document.getElementById("time-display");
let int = setInterval(displayTimer,10)

function displayTimer(){
        seconds++;
        if(seconds == 60){
                seconds = 0;
                minutes++;
    
        if(minutes == 60){
            minutes = 0;
            hours++;
        }
    }
}

let m = minutes < 10 ? "0" + minutes : minutes;
let s = seconds < 10 ? "0" + seconds : seconds;

timerRef.innerHTML = `${m} : ${s}`;