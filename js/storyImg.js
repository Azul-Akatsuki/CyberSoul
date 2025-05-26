document.addEventListener("DOMContentLoaded", function () {
    const listItems = document.querySelectorAll(".p-storyBox__ep__imgList li");
    if (listItems.length > 0) {
      listItems[0].classList.add("select");
    }
  
    // ② 画像クリック時の処理
    const images = document.querySelectorAll(".p-storyBox__ep__imgList li img");
    images.forEach(function (imgElement) {
      imgElement.addEventListener("click", function () {
        // ③ クリックされた画像の src を取得
        const imgSrc = imgElement.getAttribute("src");
        listItems.forEach(function (li) {
          li.classList.remove("select");
        });
        imgElement.parentElement.classList.add("select");
  
        const displayImg = document.querySelector(".p-storyBox__ep__img img");
        if (displayImg) {
          displayImg.style.transition = "opacity 0.5s";
          displayImg.style.opacity = 0;
  
          setTimeout(function () {
            displayImg.setAttribute("src", imgSrc);
            displayImg.style.opacity = 1;
          }, 500);
        }
      });
    });
  });
  