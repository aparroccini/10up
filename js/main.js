const closeBtn = document.querySelector('.close-btn');
const navBtn = document.querySelector('.nav-btn');
const navBox = document.querySelector('.nav-box');

closeBtn.addEventListener('click', () => {
  navBox.classList.toggle('hide');
});

navBtn.addEventListener('click', () => {
    navBox.classList.toggle('hide');
  });