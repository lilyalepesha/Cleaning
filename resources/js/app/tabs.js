function tabs(tabsButtonClass, tabsContentClass, tabsButtonClassActive, tabsContentClassActive){
    const tabsButton = document.querySelectorAll('.' + tabsButtonClass);
    const tabsContent = document.querySelectorAll('.' + tabsContentClass);
    tabsButton.forEach(function (item){
       item.addEventListener('click', function (e){
           tabsButton.forEach(function (item){
              item.classList.remove(tabsButtonClassActive);
           });
          item.classList.add(tabsButtonClassActive);
          tabsContent.forEach(function (content){
               content.classList.remove(tabsContentClassActive);
               if (content.dataset.content === item.dataset.button){
                   content.classList.add(tabsContentClassActive);
               }
           });
       });
    });
}

window.addEventListener('DOMContentLoaded', function () {
    tabs('cleaning__list-item', 'cleaning__tab',
        'cleaning__list-item--active', 'active');
});
