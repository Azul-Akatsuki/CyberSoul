// モーダルウィンドウ全体を指す要素
const modal = document.getElementById('c-modal');

// モーダル内で拡大表示される画像を指す要素
const modalImg = document.getElementById('c-modalImage');

// .popupクラスを持つ画像のリストです。これらの画像をクリックすると、モーダルが表示されます
const imgs = document.querySelectorAll('.js-popup');

// 画像クリックでモーダルを表示するイベント
for( let img of imgs) {
    img.onclick = function(){

        modal.style.opacity = "1";
        modal.style.visibility = "visible";

        // モーダルで表示する画像に、クリックした画像のパスを設定する
        modalImg.src = this.src;
    }
}

// 画像以外の部分をクリックしたらモーダルを閉じる
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.opacity = "0";
        modal.style.visibility = "hidden";
    }
}