const pagetopBtn = document.querySelector('.c-pageTopBtn');
const arrow = pagetopBtn.firstElementChild;

pagetopBtn.addEventListener('mouseover', () => {
    arrow.style.transform='translateY(0px)'
});

pagetopBtn.addEventListener('mouseleave', () => {
    arrow.style.transform='translateY(10px)'
});

pagetopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth" 
  });
});