'use strict';

{

const tabMenus = document.querySelectorAll('.p-characterBox__tab__menu__item');

tabMenus.forEach((tabMenu) => {
  tabMenu.addEventListener('click', tabSwitch);
})

function tabSwitch(e) {

    const tabTargetData = e.currentTarget.dataset.tab;
    const tabList = e.currentTarget.closest('.p-characterBox__tab__menu');
    const tabItems = tabList.querySelectorAll('.p-characterBox__tab__menu__item');
    const characterBox = e.currentTarget.closest('.p-characterBox');
    const tabPanelItems = characterBox.querySelectorAll('.p-characterBox__contents__box');
  
    tabItems.forEach((tabItem) => {
      tabItem.classList.remove('is-active');
    });
    tabPanelItems.forEach((tabPanelItem) => {
      tabPanelItem.classList.remove('is-show');
    });
  
    e.currentTarget.classList.add('is-active');
    characterBox.querySelector(`.p-characterBox__contents__box[data-contents="${tabTargetData}"]`)
      ?.classList.add('is-show');

}

}