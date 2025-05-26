document.addEventListener("DOMContentLoaded", function() {
    const catchEl = document.querySelector(".p-heroArea__catch");

  if (catchEl) {
    catchEl.style.opacity = 0;
    catchEl.style.display = "block"; 
    catchEl.style.transition = "opacity 1.5s";

    setTimeout(function() {
      catchEl.style.opacity = 1;
    }, 500); 
  }
});
