const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnLogin-popup");
const iconClose = document.querySelector(".icon-close");
const iconmusics = document.querySelector(".icon-music");
const music = document.querySelector(".music");
const iconstat = document.querySelector(".icon-stat");
const icontime = document.querySelector(".icon-time");
const iconhome = document.querySelector(".icon-home");
const time = document.querySelector(".clock");
const back = document.querySelector(".background")
const iconbg = document.querySelector(".iconbg");
const bg1 = document.querySelector(".bg1");
const bg2 = document.querySelector(".bg2");
var html = document.querySelector('body');
function toggleMusicActiveClass() {
    music.classList.toggle('active');
  }
function toggleStatActiveClass() {
    time.classList.toggle('active');
  }
function toggleTimeActiveClass() {
    time.classList.toggle('active');
  }
function toggleHomeActiveClass() {
    music.classList.remove('active');
    time.classList.remove('active');

  }
  function toggleBGActiveClass() {
    back.classList.toggle('active');

  }
  function backgrounds1(){
    html.style.backgroundImage = "url('images/bg.gif')";
  }
  function backgrounds2(){
    html.style.backgroundImage = "url('images/bg1.gif')";
  }

iconmusics.addEventListener('click', toggleMusicActiveClass);
iconstat.addEventListener('click', toggleStatActiveClass);
icontime.addEventListener('click', toggleTimeActiveClass);
iconhome.addEventListener('click', toggleHomeActiveClass);
iconbg.addEventListener('click', toggleBGActiveClass);
bg1.addEventListener('click', backgrounds1);
bg2.addEventListener('click', backgrounds2);

/*time*/
let hr = min = sec = ms = "0" + 0,
startTimer;

const startBtn = document.querySelector(".start"),
stopBtn = document.querySelector(".stop"),
resetBtn = document.querySelector(".reset");

startBtn.addEventListener("click", start);
stopBtn.addEventListener("click", stop);
resetBtn.addEventListener("click", reset);

function start() {
startBtn.classList.add("active");
stopBtn.classList.remove("stopActive");

startTimer = setInterval(() => {
  ms++
  ms = ms < 10 ? "0" + ms : ms;

  if (ms == 100) {
    sec++;
    sec = sec < 10 ? "0" + sec : sec;
    ms = "0" + 0;
  }
  if (sec == 60) {
    min++;
    min = min < 10 ? "0" + min : min;
    sec = "0" + 0;
  }
  if (min == 60) {
    hr++;
    hr = hr < 10 ? "0" + hr : hr;
    min = "0" + 0;
  }
  putValue();
}, 10);

}

function stop() {
startBtn.classList.remove("active");
stopBtn.classList.add("stopActive");
clearInterval(startTimer);
}
function reset() {
startBtn.classList.remove("active");
stopBtn.classList.remove("stopActive");
clearInterval(startTimer);
hr = min = sec = ms = "0" + 0;
putValue();
}

function putValue() {
document.querySelector(".millisecond").innerText = ms;
document.querySelector(".second").innerText = sec;
document.querySelector(".minute").innerText = min;
document.querySelector(".hour").innerText = hr;
}