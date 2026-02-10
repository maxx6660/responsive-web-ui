// sidebar 0
const offcanvasEl = document.getElementById('menuOffcanvas');
const menuBtns = document.querySelectorAll('.menu-btn');

offcanvasEl.addEventListener('show.bs.offcanvas', () => {
  menuBtns.forEach(btn => btn.classList.add('active'));
  document.body.style.overflow = 'hidden';
});

offcanvasEl.addEventListener('hidden.bs.offcanvas', () => {
  menuBtns.forEach(btn => btn.classList.remove('active'));
  document.body.style.overflow = '';
});
// sidebar 1


 // mainbanner 0
const heroSection = document.querySelector('.hero-section');

const heroImages = [
  'assets/images/hero1.jpg',
  'assets/images/hero2.jpg',
  'assets/images/hero3.jpg'
];

let currentIndex = 0;

// Set initial background
heroSection.style.backgroundImage = `url(${heroImages[0]})`;

setInterval(() => {
  currentIndex = (currentIndex + 1) % heroImages.length;
  heroSection.style.backgroundImage = `url(${heroImages[currentIndex]})`;
}, 2000);
 // mainbanner 1

// client review 0
const texts = [
  '"Our home went from being a place that\n caused me stress to being an absolute\n refuge. I never want to leave."',
  '"Working with Eleanor was so simple\n and so easy. She made designing our\n new home such an enjoyable process."',
  '"We worked with Eleanor when we moved\nacross the country. After a stressful move, we\ncame home to a calm, cozy home we love."'
];

let i = 0;
const textEl = document.getElementById("client-reviews-text");

function changeText(step = 1) {
  i = (i + step + texts.length) % texts.length;

  textEl.style.opacity = 0;

  setTimeout(() => {
    textEl.textContent = texts[i];
    textEl.style.opacity = 1;
  }, 200);
}

let timer = setInterval(changeText, 2000);

document.getElementById("nextBtn").onclick = () => {
  changeText(1);
  resetTimer();
};

document.getElementById("prevBtn").onclick = () => {
  changeText(-1);
  resetTimer();
};

function resetTimer() {
  clearInterval(timer);
  timer = setInterval(changeText, 2000);
}
// client review 1

// viewprojects 0
document.addEventListener("DOMContentLoaded", function () {
  const rows = document.querySelectorAll("#projects .row");
  let currentIndex = 0;

  function showRow(index) {
    for (let i = 0; i < rows.length; i++) {
      if (i === index) {
        rows[i].classList.add("active");
      } else {
        rows[i].classList.remove("active");
      }
    }
  }

  function changeRow(step) {
    currentIndex = (currentIndex + step + rows.length) % rows.length;
    showRow(currentIndex);
  }

  document.getElementById("prev").addEventListener("click", function () {
    changeRow(-1);
  });

  document.getElementById("next").addEventListener("click", function () {
    changeRow(1);
  });

  showRow(currentIndex);
});
// viewprojects 1