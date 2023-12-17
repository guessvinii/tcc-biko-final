document.addEventListener("DOMContentLoaded", function() {
    const wrapper = document.querySelector(".carrossel-destaques");
    const articles = document.querySelectorAll(".carrossel-destaques .card");
    const imageWidth = articles[0].clientWidth;

    let counter = 0;
  
    function updateCarousel() {
        if (counter == 0){
            wrapper.style.transform = `translateX(55px)`;
        } else if (counter == 1){
            wrapper.style.transform = `translateX(-220px)`;
        } else if (counter == 2){
            wrapper.style.transform = `translateX(-500px)`;
        } else if (counter == 3){
            wrapper.style.transform = `translateX(-770px)`;
        } else if (counter == 4){
            wrapper.style.transform = `translateX(-1050px)`;
        }
    }
  
    function nextSlide() {
      if (counter < 4) {
        counter++;
      } else {
        counter = 0;
      }
      updateCarousel();
    }
  
    function autoAdvance() {
      nextSlide();
    }
  
    // Automatically advance to the next slide every 7 seconds
    setInterval(autoAdvance, 2000);
  
    // Start the carousel immediately
    autoAdvance();


window.onload = function (){
  const menu_btn = document.querySelector('.menu-sandwich');
  const mob_menu = document.querySelector('.mobile-navbar');

  menu_btn.addEventListener('click', function () {
    menu_btn.classList.toggle('is-active');
    mob_menu.classList.toggle('is-active');
  });
}
  });
