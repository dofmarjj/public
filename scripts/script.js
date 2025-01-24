document.addEventListener("DOMContentLoaded", () => {
  const menuIcon = document.querySelector(".menu__icon"); // Кнопка гамбургер-меню
  const menuNav = document.querySelector(".menu__nav"); // Главное меню
  const menuItems = document.querySelectorAll(".menu__list > li"); // Пункты меню с подменю
  const submenus = document.querySelectorAll(".submenu"); // Все подменю

  // Открытие и закрытие мобильного меню
  menuIcon.addEventListener("click", () => {
    const isMenuActive = menuNav.classList.toggle("menu__nav--active"); // Переключение класса активности меню
    menuIcon.classList.toggle("menu__icon--active", isMenuActive); // Анимация гамбургер-меню

    // Если меню закрывается, скрыть все подменю
    if (!isMenuActive) {
      submenus.forEach((submenu) => {
        submenu.classList.remove("submenu--active");
      });
    }
  });

  // Управление раскрытием подменю
  menuItems.forEach((item) => {
    const submenu = item.querySelector(".submenu");
    if (submenu) {
      // Для мобильных устройств: раскрытие подменю
      item.addEventListener("click", (e) => {
        if (window.innerWidth <= 768) {
          e.stopPropagation(); // Останавливаем всплытие события
          submenu.classList.toggle("submenu--active"); // Переключаем видимость подменю
        }
      });

      // Убираем все активные состояния при переходе на десктоп
      window.addEventListener("resize", () => {
        if (window.innerWidth > 768) {
          submenu.classList.remove("submenu--active"); // Сбрасываем состояние подменю
        }
      });
    }
  });
});
