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
const plus = document.querySelector(".plus"),
      minus = document.querySelector(".minus"),
      num = document.querySelector(".num"),
      alertBox = document.getElementById("alert");

let numValue = 5;
let interval;
let timeLeft = numValue * 60;

function toggleMusicActiveClass() {
    music.classList.toggle('active');
  }
/*function toggleStatActiveClass() {
    wrapper.classList.toggle('active-popup');
  }
function toggleTimeActiveClass() {
    wrapper.classList.toggle('active-popup');
  }
function toggleHomeActiveClass() {
    music.classList.remove('active');

  }
  
registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});
loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});
btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
});
iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});*/
iconmusics.addEventListener('click', toggleMusicActiveClass);
/*iconstat.addEventListener('click', toggleStatActiveClass);
icontime.addEventListener('click', toggleTimeActiveClass);
iconhome.addEventListener('click', toggleHomeActiveClass);*/
function updateNumber() {
  const minutes = Math.floor(timeLeft / 60);
  let seconds = timeLeft % 60;
  seconds = seconds < 10 ? "0" + seconds : seconds;
  num.innerText = `${minutes}:${seconds}`;
}

function startTimer() {
  if (interval) {
      return;
  }
  interval = setInterval(() => {
      timeLeft--;
      updateNumber();
      if (timeLeft === 0) {
          clearInterval(interval);
          alertBox.innerText = "Time's up!";
          alertBox.style.display = "block";
      }
  }, 1000);
  document.getElementById("start").disabled = true;
}

function stopTimer() {
  clearInterval(interval);
  interval = null;
  document.getElementById("start").disabled = false;
}


function resetTimer() {
  clearInterval(interval);
  timeLeft = numValue * 60;
  updateNumber();
  alertBox.style.display = "none";
}

plus.addEventListener("click", () => {
  if (numValue < 60) {
      numValue += 5;
      timeLeft = numValue * 60;
      updateNumber();
  }
});

minus.addEventListener("click", () => {
  if (numValue > 5) {
      numValue -= 5;
      timeLeft = numValue * 60;
      updateNumber();
  }
});

document.getElementById("start").addEventListener("click", startTimer);
document.getElementById("stop").addEventListener("click", stopTimer);
document.getElementById("reset").addEventListener("click", resetTimer);

updateNumber();